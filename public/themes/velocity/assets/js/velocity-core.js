(self.webpackChunk=self.webpackChunk||[]).push([[847],{4389:(o,t,n)=>{"use strict";var e=n(538),d=n(9669),r=n.n(d);function a(){return document.querySelector('meta[name="base-url"]').content}function i(){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i|/mobi/i.test(navigator.userAgent)}function s(o,t){var n=document.createElement("script");n.setAttribute("src",o),document.body.appendChild(n),n.addEventListener("load",t,!1)}function l(o){return o.replace(/\/$/,"")}e.default.prototype.$http=r(),window.Vue=e.default,window.eventBus=new e.default,window.axios=r(),window.jQuery=window.$=n(9755),n(2293),window.BootstrapSass=n(3002),window.lazySize=n(7090),window.getBaseUrl=a,window.isMobile=i,window.loadDynamicScript=s,window.showAlert=function(o,t,n){if(o&&""!==n){var e=Math.floor(1e3*Math.random()),d='<div class="alert '.concat(o,' alert-dismissible" id="').concat(e,'">\n            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\n                <strong>').concat(t?t+"!":""," </strong> ").concat(n,".\n        </div>");$("#alert-container").append(d).ready((function(){window.setTimeout((function(){$("#alert-container #".concat(e)).remove()}),5e3)}))}},$((function(){var o=a(),t="themes/velocity/assets/js/velocity.js";i()&&l(o)===l(window.location.href)?document.addEventListener("touchstart",(function n(){var e=this;window.scrollTo(0,0),document.body.style.overflow="hidden",s("".concat(o,"/").concat(t),(function(){window.scrollTo(0,0),document.body.style.overflow="",e.removeEventListener("touchstart",n)}))}),!1):s("".concat(o,"/").concat(t),(function(){}))}))},2293:()=>{$((function(){function o(){if(dropdown=$(".dropdown-open"),!dropdown.find(".dropdown-list").hasClass("top-left")&&!dropdown.find(".dropdown-list").hasClass("top-right")&&dropdown.length){dropdown=dropdown.find(".dropdown-list"),height=dropdown.height()+50;var o=dropdown.offset().top-70,t=$(window).height()-o-dropdown.height();t>o||height<t?(dropdown.removeClass("bottom"),dropdown.hasClass("top-right")?(dropdown.removeClass("top-right"),dropdown.addClass("bottom-right")):dropdown.hasClass("top-left")&&(dropdown.removeClass("top-left"),dropdown.addClass("bottom-left"))):dropdown.hasClass("bottom-right")?(dropdown.removeClass("bottom-right"),dropdown.addClass("top-right")):dropdown.hasClass("bottom-left")&&(dropdown.removeClass("bottom-left"),dropdown.addClass("top-left"))}}$(document).click((function(o){var t=o.target;(!$(t).parents(".dropdown-open").length||$(t).is("li")||$(t).is("a"))&&($(".dropdown-list").hide(),$(".dropdown-toggle").removeClass("active"))})),$("body").delegate(".dropdown-toggle","click",(function(t){t.stopImmediatePropagation(),function(t){var n=$(t.currentTarget);$(".dropdown-list").hide(),n.hasClass("active")?n.removeClass("active"):(n.addClass("active"),n.parent().find(".dropdown-list").fadeIn(100),n.parent().addClass("dropdown-open"),o())}(t)})),$("div").scroll((function(){o()}))}))}},o=>{o.O(0,[339],(()=>{return t=4389,o(o.s=t);var t}));o.O()}]);