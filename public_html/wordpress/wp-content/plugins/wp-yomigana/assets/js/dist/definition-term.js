!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=4)}({4:function(e,t,n){e.exports=n(5)},5:function(e,t){var n=wp.blocks.registerBlockType,r=wp.editor.RichText;n("wp-yomigana/term",{title:(0,wp.i18n.__)("Term","wp-yomigana"),icon:React.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 240 240"},React.createElement("title",null,"block-icons"),React.createElement("path",{d:"M49.46,38.07,62.65,23.41,53.27,75.59H36.85L39.2,23.41h160l2.35,52.18H185.17l-9.38-52.18L189,38.07Zm72.69,165.61,41,4.4v11.73H75.25V208.08l41-4.4ZM106,114.28c0-30.19,0-60.67-.88-90.87h28.14c-.88,29.61-.88,60.09-.88,90.87v14.66c0,30.19,0,60.67.88,90.87H105.15c.88-29.61.88-60.09.88-90.87Z"})),category:"common",parent:["wp-yomigana/dl"],attributes:{content:{source:"html",selector:"dt"}},edit:function(e){var t=e.attributes,n=e.setAttributes,o=e.className;return React.createElement(r,{className:o,tagName:"div",value:t.content,onChange:function(e){return n({content:e})}})},save:function(e){var t=e.attributes;return React.createElement(r.Content,{tagName:"dt",value:t.content})}})}});
//# sourceMappingURL=definition-term.js.map