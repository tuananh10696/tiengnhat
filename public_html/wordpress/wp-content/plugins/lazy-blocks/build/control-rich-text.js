(()=>{var e={1991:(e,t)=>{var r;!function(){"use strict";var n=function(){function e(){}function t(e,t){for(var r=t.length,n=0;n<r;++n)o(e,t[n])}e.prototype=Object.create(null);var r={}.hasOwnProperty,n=/\s+/;function o(e,o){if(o){var l=typeof o;"string"===l?function(e,t){for(var r=t.split(n),o=r.length,l=0;l<o;++l)e[r[l]]=!0}(e,o):Array.isArray(o)?t(e,o):"object"===l?function(e,t){if(t.toString===Object.prototype.toString||t.toString.toString().includes("[native code]"))for(var n in t)r.call(t,n)&&(e[n]=!!t[n]);else e[t.toString()]=!0}(e,o):"number"===l&&function(e,t){e[t]=!0}(e,o)}}return function(){for(var r=arguments.length,n=Array(r),o=0;o<r;o++)n[o]=arguments[o];var l=new e;t(l,n);var a=[];for(var i in l)l[i]&&a.push(i);return a.join(" ")}}();e.exports?(n.default=n,e.exports=n):void 0===(r=function(){return n}.apply(t,[]))||(e.exports=r)}()}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var l=t[n]={exports:{}};return e[n](l,l.exports,r),l.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.i18n,t=window.wp.hooks,n=window.wp.components,o=window.wp.blockEditor;var l=r(1991),a=r.n(l),i=["label","help","className","children"];function c(){return c=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},c.apply(this,arguments)}function u(e){var t=e.label,r=e.help,n=e.className,o=e.children,l=function(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},l=Object.keys(e);for(n=0;n<l.length;n++)r=l[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);for(n=0;n<l.length;n++)r=l[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}(e,i);return wp.element.createElement("div",c({},l,{className:a()("lazyblocks-component-base-control",n)}),t?wp.element.createElement("div",{className:"lazyblocks-component-base-control__label"},t):null,o,r?wp.element.createElement("div",{className:"lazyblocks-component-base-control__help"},r):null)}var s=(window.lazyblocksConstructorData||window.lazyblocksGutenberg).controls,p=void 0===s?{}:s;function f(e){return f="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},f(e)}var b=["className"];function y(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function m(e,t,r){return(t=function(e){var t=function(e,t){if("object"!==f(e)||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var n=r.call(e,"string");if("object"!==f(n))return n;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"===f(t)?t:String(t)}(t))in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function d(e){var t,r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=r.className,o=function(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},l=Object.keys(e);for(n=0;n<l.length;n++)r=l[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);for(n=0;n<l.length;n++)r=l[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}(r,b),l=(t=e.data.type)&&p[t]?p[t]:!!p.undefined&&p.undefined,i=function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?y(Object(r),!0).forEach((function(t){m(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):y(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({label:!!l.restrictions.label_settings&&e.data.label,help:!!l.restrictions.help_settings&&e.data.help,className:a()("lazyblocks-control lazyblocks-control-".concat(e.data.type),n),"data-lazyblocks-control-name":e.data.name},o);return i}function v(){return v=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},v.apply(this,arguments)}(0,t.addFilter)("lzb.editor.control.rich_text.render","lzb.editor",(function(e,t){return wp.element.createElement(u,v({key:t.data.name},d(t)),wp.element.createElement(o.RichText,{inlineToolbar:!0,format:"string",multiline:"true"===t.data.multiline&&"p",value:t.getValue(),onChange:function(e){t.onChange(e)}}))})),(0,t.addFilter)("lzb.constructor.control.rich_text.settings","lzb.constructor",(function(t,r){var o=r.updateData,l=r.data;return wp.element.createElement(n.PanelBody,null,wp.element.createElement(n.ToggleControl,{label:(0,e.__)("Multiline","lazy-blocks"),checked:"true"===l.multiline,onChange:function(e){return o({multiline:e?"true":"false"})}}))}))})()})();