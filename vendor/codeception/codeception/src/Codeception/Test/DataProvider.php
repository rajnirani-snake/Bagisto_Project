<?php

declare(strict_types=1);

namespace Codeception\Test;

use Codeception\Exception\TestParseException;
use Codeception\Util\Annotation;
use Codeception\Util\ReflectionHelper;
use ReflectionException;
use ReflectionMethod;

use function array_merge;
use function sprintf;

class DataProvider
{
    public static function getDataForMethod(ReflectionMethod $method): ?iterable
    {
        $testClass = $method->getDeclaringClass();
        $testClassName = $testClass->getName();
        $methodName = $method->getName();

        // example annotation
        $rawExamples = array_values(
            Annotation::forMethod($testClassName, $methodName)->fetchAll('example'),
        );

        if ($rawExamples !== []) {
            $rawExample = reset($rawExamples);
            if (is_string($rawExample)) {
                $result = array_map(
                    fn ($v): ?array => Annotation::arrayValue($v),
                    $rawExamples
                );
            } else {
                $result = $rawExamples;
            }
        } else {
            $result = [];
        }

        // dataProvider annotation

        $dataProviderAnnotations = Annotation::forMethod($testClassName, $methodName)->fetchAll('dataProvider');
        // lowercase for back compatible
        if (empty($dataProviderAnnotations)) {
            $dataProviderAnnotations = Annotation::forMethod($testClassName, $methodName)->fetchAll('dataprovider');
        }

        if ($result === [] && $dataProviderAnnotations === []) {
            return null;
        }

        foreach ($dataProviderAnnotations as $dataProviderAnnotation) {
            [$dataProviderClassName, $dataProviderMethodName] = self::parseDataProviderAnnotation(
                $dataProviderAnnotation,
                $testClassName,
                $methodName,
            );

            try {
                $dataProviderMethod = new ReflectionMethod($dataProviderClassName, $dataProviderMethodName);
                if ($dataProviderMethod->isStatic()) {
                    $dataProviderResult = call_user_func([$dataProviderClassName, $dataProviderMethodName]);
                } else {
                    $testInstance = new $dataProviderClassName($dataProviderMethodName);

                    if ($dataProviderMethod->isPublic()) {
                        $dataProviderResult = $testInstance->$dataProviderMethodName();
                    } else {
                        $dataProviderResult = ReflectionHelper::invokePrivateMethod(
                            $testInstance,
                            $dataProviderMethodName,
                        );
                    }
                }

                foreach ($dataProviderResult as $key => $value) {
                    if (is_int($key)) {
                        $result [] = $value;
                    } else {
                        $result[$key] = $value;
                    }
                }
            } catch (ReflectionException) {
                throw new TestParseException(
                    $testClass->getFileName(),
                    sprintf(
                        "DataProvider '%s' for %s->%s is invalid or not callable.\nMake sure that the data provider exist within the test class.",
                        $dataProviderAnnotation,
                        $testClassName,
                        $methodName
                    ),
                );
            }
        }

        return $result;
    }

    /**
     * @return string[]
     * @throws TestParseException
     */
    public static function parseDataProviderAnnotation(
        string $annotation,
        string $testClassName,
        string $testMethodName,
    ): array {
        $parts = explode('::', $annotation);
        if (count($parts) > 2) {
            throw new TestParseException(
                sprintf(
                    'Data provider "%s" specified for %s::%s is invalid',
                    $annotation,
                    $testClassName,
                    $testMethodName,
                )
            );
        }

        if (count($parts) === 2) {
            return $parts;
        }

        return [
            $testClassName,
            $annotation,
        ];
    }
}
