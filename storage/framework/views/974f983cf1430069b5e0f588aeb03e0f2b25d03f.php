<!-- <header class="sticky-header">
    <div class="row remove-padding-margin velocity-divide-page">
        <a class="left navbar-brand" href="<?php echo e(route('shop.home.index')); ?>" aria-label="Logo">
            <img class="logo" src="<?php echo e(core()->getCurrentChannel()->logo_url ?? asset('themes/velocity/assets/images/logo-text.png')); ?>" alt="" />
        </a>

        <div class="right searchbar">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <?php echo $__env->make('velocity::shop.layouts.particals.search-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="col-lg-7 col-md-12 vc-full-screen">
                    <div class="left-wrapper">

                        <?php echo view_render_event('bagisto.shop.layout.header.wishlist.before'); ?>


                            <?php echo $__env->make('velocity::shop.layouts.particals.wishlist', ['isText' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo view_render_event('bagisto.shop.layout.header.wishlist.after'); ?>


                        <?php echo view_render_event('bagisto.shop.layout.header.compare.before'); ?>


                            <?php echo $__env->make('velocity::shop.layouts.particals.compare', ['isText' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo view_render_event('bagisto.shop.layout.header.compare.after'); ?>


                        <?php echo view_render_event('bagisto.shop.layout.header.cart-item.before'); ?>


                            <?php echo $__env->make('shop::checkout.cart.mini-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo view_render_event('bagisto.shop.layout.header.cart-item.after'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header> -->

<?php $__env->startPush('scripts'); ?>
    <!-- <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50) {
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });
        })();
    </script> -->
<?php $__env->stopPush(); ?>


<header class="header-nav">
    <nav class="nav">
        <div class="modi-container nav-container">
            <div class="nav-links">
                <div class="nav-links-desktop">
                    <a class="nav-link logo-link" href="./index.html">
                        <img src="./assets/images/logo.svg" class="logo" alt="Modicare" />
                    </a>
                    <a class="nav-link toggle-side-menu" href="javascript:;">
                        <img src="./assets/images/icons/icon-burger-menu-secondary.svg" alt="Shop" class="mr-2" />
                        Shop
                    </a>
                    <div class="about-menu-dropdown-container nav-dropdown-container">
                        <a class="nav-link toggle-about-menu-dropdown" href="javascript:;">About</a>
                        <div class="nav-dropdown about-menu-dropdown">
                            <div class="nav-dropdown-list">
                                <div class="nav-dropdown-item">
                                    <a href="./our-story.html" class="nav-dropdown-item-link">Our Story</a>
                                </div>
                                <div class="nav-dropdown-item">
                                    <a href="./the-visionary.html" class="nav-dropdown-item-link">The Visionary</a>
                                </div>
                                <div class="nav-dropdown-item-separator"></div>
                                <div class="nav-dropdown-item">
                                    <a href="./achievers.html" class="nav-dropdown-item-link">Success Stories</a>
                                </div>
                                <div class="nav-dropdown-item">
                                    <a href="./event.html" class="nav-dropdown-item-link">Events</a>
                                </div>
                                <div class="nav-dropdown-item">
                                    <a href="./careers.html" class="nav-dropdown-item-link">Careers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link" href="./careers.html">Offers</a>
                    <a class="nav-link" href="./contact-us.html">Start Your Business</a>
                    <a class="nav-link search-link toggle-nav-search" href="javascript:;"><img src="./assets/images/icons/icon-search.svg" alt="Search" class="search-link-icon" /></a>
                    <div class="user-menu-dropdown-container nav-dropdown-container">
                        <a class="nav-link sign-in-link toggle-user-menu-dropdown" href="javascript:;">
                            <img src="./assets/images/icons/icon-user.svg" alt="Sign In" class="sign-in-link-icon mr-2" />
                            Account
                        </a>
                        <div class="nav-dropdown user-menu-dropdown">
                                <div class="nav-dropdown-list">
                                    <!-- <div class="nav-dropdown-title">Hey!</div> -->
                                    <div class="nav-dropdown-item">
                                        <a href="./sign-in.html" class="nav-dropdown-item-link nav-dropdown-item-link-primary">Sign In</a>
                                    </div>
                                    <div class="nav-dropdown-item">
                                        <a href="./register-registration-type.html" class="nav-dropdown-item-link nav-dropdown-item-link-primary">Register</a>
                                    </div>
                                    <div class="nav-dropdown-item-separator"></div>
                                    <div class="nav-dropdown-item">
                                        <a href="javascript:;" class="nav-dropdown-item-link">Support</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="shopping-bag-dropdown-container nav-dropdown-container">
                        <a class="nav-link shopping-bag-link toggle-cart-summary-dropdown" href="javascript:;">
                            <div class="shopping-bag-icon-container shopping-bag-icon__badge" data-badge="12">
                                <img src="./assets/images/icons/icon-shopping-cart-primary.svg" alt="Shopping Bag" class="shopping-bag-link-icon" />
                            </div>
                        </a>
                        <div class="nav-dropdown shopping-bag-dropdown">
                            <div class="shopping-bag-notification">Added to cart</div>
                        </div>
                        <div class="nav-dropdown cart-summary-dropdown">
                            <div class="nav-dropdown-list">
                                <div class="nav-dropdown-title">Your Cart</div>
                                <div class="nav-dropdown-item-separator"></div>
                                <div class="nav-dropdown-items-body">
                                    <div class="nav-dropdown-items-scroll">
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nav-dropdown-item">
                                                <div class="cart-summary-dropdown-item-close">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="cart-summary-dropdown-item-content">
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                    <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                    <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                </div>
                                                <div class="cart-summary-dropdown-item-qty">
                                                    <div class="listing-item-quantity modi-qty-dropdown-container">
                                                        <select
                                                            name="listing-item-quantity-select"
                                                            class="selectpicker modi-qty-dropdown"
                                                            data-display="static"
                                                            data-dropup-auto="false"
                                                            data-live-search="true"
                                                            data-size="3"
                                                            data-style="modi-qty-dropdown-btn"
                                                            title="1"
                                                        >
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="nav-dropdown-footer">
                                    <div class="nav-dropdown-footer-left">Total ???4,543</div>
                                    <div class="nav-dropdown-footer-right">
                                        <a href="javascript:;" class="btn modi-btn modi-btn__xs modi-btn__primary" data-toggle="modal" data-target="#modi-checkout-login-modal">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-search">
                    <div id="nav-search-form">
                        <img src="./assets/images/icons/icon-search.svg" alt="Search" class="nav-search-icon" />
                        <div class="nav-search-input-container">
                            <div class="nav-search-btn-cancel toggle-nav-search">
                                <img src="./assets/images/icons/icon-close.svg" alt="Cancel Search" class="nav-search-btn-cancel-image" />
                            </div>
                            <input type="text" id="nav-search-input" name="nav-search-input" placeholder="Search modicare.com" />
                        </div>
                    </div>
                    <div class="nav-search-results">
                        <div class="nav-search-results-heading">Go to</div>

                        <div class="nav-search-results-item">
                            <a href="./consultant-locator.html">Find Consultant</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="./store-locator.html">Store Locator</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="./the-visionary.html">The Vision</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="./event.html">Events & Programs</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="./event-gallery.html">Event Gallery</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="./achievers.html">Success Stories</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="https://azadi.modicare.com" target="_blank">Business Opportunity</a>
                        </div>

                        <div class="nav-search-results-item">
                            <a href="./quick-pay.html">Credit M-Wallet</a>
                        </div>
                    </div>
                </div>
                <div class="nav-links-mobile">
                    <div class="nav-links-mobile-left">
                        <a class="nav-link btn-mobile-menu toggle-mobile-menu" href="javascript:;">
                            <img src="./assets/images/icons/icon-burger-menu-secondary.svg" alt="Navigation Menu" class="btn-mobile-menu-icon" />
                        </a>
                        <a class="nav-link btn-mobile-menu-close" href="javascript:;">
                            <img src="./assets/images/icons/icon-close-secondary.svg" alt="Close Menu" class="btn-mobile-menu-icon" />
                        </a>
                        <a class="nav-link logo-link" href="./index.html">
                            <img src="./assets/images/logo.png" class="logo" alt="Modicare" />
                        </a>
                    </div>
                    <div class="nav-links-mobile-right">
                        <div class="shopping-bag-dropdown-container nav-dropdown-container">
                            <a class="nav-link btn-mobile-menu-right shopping-bag-link toggle-cart-summary-dropdown" href="javascript:;">
                                <div class="shopping-bag-icon-container shopping-bag-icon__badge" data-badge="12">
                                    <img src="./assets/images/icons/icon-shopping-cart-primary.svg" alt="Shopping Bag" class="shopping-bag-link-icon" />
                                </div>
                            </a>
                            <div class="nav-dropdown shopping-bag-dropdown">
                                <div class="shopping-bag-notification">Added to cart</div>
                            </div>
                            <div class="nav-dropdown cart-summary-dropdown">
                                <div class="nav-dropdown-list">
                                    <div class="nav-dropdown-title">Your Cart</div>
                                    <div class="nav-dropdown-item-separator"></div>
                                    <div class="nav-dropdown-items-body">
                                        <div class="nav-dropdown-items-scroll">
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-dropdown-item">
                                                    <div class="cart-summary-dropdown-item-close">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-close-link"><i class="material-icons">close</i></a>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-content">
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-title">Well Nutrition</a>
                                                        <a href="javascript:;" class="cart-summary-dropdown-item-description">Dtox Set</a>
                                                        <div class="cart-summary-dropdown-item-description">???4,543</div>
                                                    </div>
                                                    <div class="cart-summary-dropdown-item-qty">
                                                        <div class="listing-item-quantity modi-qty-dropdown-container">
                                                            <select
                                                                name="listing-item-quantity-select"
                                                                class="selectpicker modi-qty-dropdown"
                                                                data-display="static"
                                                                data-dropup-auto="false"
                                                                data-live-search="true"
                                                                data-size="3"
                                                                data-style="modi-qty-dropdown-btn"
                                                                title="1"
                                                            >
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="nav-dropdown-footer">
                                        <div class="nav-dropdown-footer-left">Total ???4,543</div>
                                        <div class="nav-dropdown-footer-right">
                                            <a href="javascript:;" class="btn modi-btn modi-btn__xs modi-btn__primary" data-toggle="modal" data-target="#modi-checkout-login-modal">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-mobile-menu-dropdown-container nav-dropdown-container">
                            <a class="nav-link btn-mobile-menu-right toggle-user-mobile-menu-dropdown sign-in-link" href="javascript:;">
                                <img src="./assets/images/icons/icon-user.svg" alt="Sign In" class="sign-in-link-icon" />
                            </a>
                            <div class="nav-dropdown user-mobile-menu-dropdown">
                                <div class="nav-dropdown-list">
                                    <div class="nav-dropdown-title">Hey!</div>
                                    <div class="nav-dropdown-item">
                                        <a href="./sign-in.html" class="nav-dropdown-item-link nav-dropdown-item-link-primary">Sign In</a>
                                    </div>
                                    <div class="nav-dropdown-item">
                                        <a href="./register-registration-type.html" class="nav-dropdown-item-link nav-dropdown-item-link-primary">Register</a>
                                    </div>
                                    <div class="nav-dropdown-item-separator"></div>
                                    <div class="nav-dropdown-item">
                                        <a href="javascript:;" class="nav-dropdown-item-link">Support</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /Applications/MAMP/htdocs/bagisto-bagisto-ac6a4be/resources/themes/velocity/views/layouts/header/index.blade.php ENDPATH**/ ?>