!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){"use strict";n.r(t);n(1),n(2)},function(e,t){var n=840,o=(document.querySelector(".nav--mobile"),document.querySelector("body")),r=document.querySelector(".main-navigation");if(r){var l=r.querySelector(".nav--mobile-btn"),c=r.querySelectorAll("a");function i(){o.style.overflow="scroll",d(!1),s(),l.classList.remove("nav--mobile-btn-open"),r.classList.remove("nav--mobile-open")}function s(){var e=window.scrollY,t=o.classList;e>50&&!o.classList.contains("nav--scrolled")?t.add("body-scrolled"):t.remove("body-scrolled")}function d(e){!0===e?document.body.addEventListener("touchmove",u,!1):document.body.removeEventListener("touchmove",u,!1)}!function(){c.forEach(e=>{e.addEventListener("click",()=>{i()})}),l&&l.addEventListener("click",e=>{r.classList.contains("nav--mobile-open")?i():(o.classList.remove("body-scrolled"),l.classList.add("nav--mobile-btn-open"),r.classList.add("nav--mobile-open"),o.style.overflow="hidden",d(!0))});window.addEventListener("scroll",()=>{s()}),window.addEventListener("resize",()=>{(window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth)>n&&r.classList.contains("nav--mobile-open")&&i()})}();var u=function(e){e.preventDefault()}}},function(e,t){let n,o,r,l,c,i=document.querySelector(".jmh-scrollbar-wrap"),s=i.querySelector(".jmh-scrollbar"),d=s.querySelector(".jmh-scrollbar--dot"),u=document.querySelector("body"),a=0;function m(){r=u.getBoundingClientRect().height-Math.max(document.documentElement.clientHeight,window.innerHeight||0),l=r/o}function v(){m(),(n=r>0)&&(i.classList.add("jmh-scrollbar-visible"),o=s.getBoundingClientRect().height-12)}function f(){let e=o/100*(scrollY/(r/100));d.style.top=e+"px"}function b(){c=!1,u.removeEventListener("mousemove",y),i.classList.remove("scrolldot-catched")}function y(e){!function(e){let t=scrollYAtCatc+e*l;window.scrollTo(0,t)}(e.clientY-a)}v(),u.onresize=()=>{console.log("resize"),v()},u.onscroll=()=>{m(),f()},d.addEventListener("mousedown",(function(e){a=e.clientY,scrollYAtCatc=scrollY,e.preventDefault(),c=!0,u.addEventListener("mousemove",y),i.classList.add("scrolldot-catched")}),!1),u.addEventListener("mouseup",b),document.addEventListener("mouseout",e=>{var t=(e=e||window.event).relatedTarget||e.toElement;t&&"HTML"!=t.nodeName||b()}),s.addEventListener("mousedown",e=>{c||window.scrollTo({top:e.offsetY*l,behavior:"smooth"})})}]);