(()=>{var e={1991:(e,t)=>{var n;!function(){"use strict";var r=function(){function e(){}function t(e,t){for(var n=t.length,r=0;r<n;++r)o(e,t[r])}e.prototype=Object.create(null);var n={}.hasOwnProperty,r=/\s+/;function o(e,o){if(o){var l=typeof o;"string"===l?function(e,t){for(var n=t.split(r),o=n.length,l=0;l<o;++l)e[n[l]]=!0}(e,o):Array.isArray(o)?t(e,o):"object"===l?function(e,t){if(t.toString===Object.prototype.toString||t.toString.toString().includes("[native code]"))for(var r in t)n.call(t,r)&&(e[r]=!!t[r]);else e[t.toString()]=!0}(e,o):"number"===l&&function(e,t){e[t]=!0}(e,o)}}return function(){for(var n=arguments.length,r=Array(n),o=0;o<n;o++)r[o]=arguments[o];var l=new e;t(l,r);var a=[];for(var c in l)l[c]&&a.push(c);return a.join(" ")}}();e.exports?(r.default=r,e.exports=r):void 0===(n=function(){return r}.apply(t,[]))||(e.exports=n)}()}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var l=t[r]={exports:{}};return e[r](l,l.exports,n),l.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.i18n,t=window.wp.hooks,r=window.wp.blockEditor,o=window.wp.components;var l=n(1991),a=n.n(l),c=["label","help","className","children"];function i(){return i=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},i.apply(this,arguments)}function s(e){var t=e.label,n=e.help,r=e.className,o=e.children,l=function(e,t){if(null==e)return{};var n,r,o=function(e,t){if(null==e)return{};var n,r,o={},l=Object.keys(e);for(r=0;r<l.length;r++)n=l[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}(e,t);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);for(r=0;r<l.length;r++)n=l[r],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(o[n]=e[n])}return o}(e,c);return wp.element.createElement("div",i({},l,{className:a()("lazyblocks-component-base-control",r)}),t?wp.element.createElement("div",{className:"lazyblocks-component-base-control__label"},t):null,o,n?wp.element.createElement("div",{className:"lazyblocks-component-base-control__help"},n):null)}function u(e){var t=e.data,n=(0,r.useInnerBlocksProps)({className:"lazyblock-inner-blocks"}),o=wp.element.createElement("div",n);return t.label&&(o=wp.element.createElement(s,{id:t.name,key:t.name,label:t.label},o)),o}(0,t.addFilter)("lzb.editor.control.inner_blocks.render","lzb.editor",(function(e,t){return wp.element.createElement(u,t)})),(0,t.addFilter)("lzb.constructor.control.inner_blocks.settings","lzb.constructor",(function(){return wp.element.createElement(wp.element.Fragment,null,wp.element.createElement(o.PanelBody,null,wp.element.createElement(o.Notice,{status:"error",isDismissible:!1,className:"lzb-constructor-notice"},wp.element.createElement("p",null,(0,e.__)("The Inner Blocks control deprecated since v3.4.0, you should migrate to the <InnerBlocks /> component as this control will be removed in future plugin updates.","lazy-blocks")),wp.element.createElement(o.Button,{href:"https://www.lazyblocks.com/docs/blocks-controls/inner-blocks/",target:"_blank",variant:"primary"},(0,e.__)("Read More","lazy-blocks")))))}))})()})();