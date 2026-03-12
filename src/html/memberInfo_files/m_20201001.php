
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k={},l=a.document,m="2.1.1",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return n.each(this,a,b)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(a=arguments[h]))for(b in a)c=g[b],d=a[b],g!==d&&(j&&d&&(n.isPlainObject(d)||(e=n.isArray(d)))?(e?(e=!1,f=c&&n.isArray(c)?c:[]):f=c&&n.isPlainObject(c)?c:{},g[b]=n.extend(j,f,d)):void 0!==d&&(g[b]=d));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray,isWindow:function(a){return null!=a&&a===a.window},isNumeric:function(a){return!n.isArray(a)&&a-parseFloat(a)>=0},isPlainObject:function(a){return"object"!==n.type(a)||a.nodeType||n.isWindow(a)?!1:a.constructor&&!j.call(a.constructor.prototype,"isPrototypeOf")?!1:!0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(a){var b,c=eval;a=n.trim(a),a&&(1===a.indexOf("use strict")?(b=l.createElement("script"),b.text=a,l.head.appendChild(b).parentNode.removeChild(b)):c(a))},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=s(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){return null==b?-1:g.call(b,a,c)},merge:function(a,b){for(var c=+b.length,d=0,e=a.length;c>d;d++)a[e++]=b[d];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=s(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(c=a[b],b=a,a=c),n.isFunction(a)?(e=d.call(arguments,2),f=function(){return a.apply(b||this,e.concat(d.call(arguments)))},f.guid=a.guid=a.guid||n.guid++,f):void 0},now:Date.now,support:k}),n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+-new Date,v=a.document,w=0,x=0,y=gb(),z=gb(),A=gb(),B=function(a,b){return a===b&&(l=!0),0},C="undefined",D=1<<31,E={}.hasOwnProperty,F=[],G=F.pop,H=F.push,I=F.push,J=F.slice,K=F.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},L="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",N="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",O=N.replace("w","w#"),P="\\["+M+"*("+N+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+O+"))|)"+M+"*\\]",Q=":("+N+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+P+")*)|.*)\\)|)",R=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),S=new RegExp("^"+M+"*,"+M+"*"),T=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp("="+M+"*([^\\]'\"]*?)"+M+"*\\]","g"),V=new RegExp(Q),W=new RegExp("^"+O+"$"),X={ID:new RegExp("^#("+N+")"),CLASS:new RegExp("^\\.("+N+")"),TAG:new RegExp("^("+N.replace("w","w*")+")"),ATTR:new RegExp("^"+P),PSEUDO:new RegExp("^"+Q),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+L+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/^(?:input|select|textarea|button)$/i,Z=/^h\d$/i,$=/^[^{]+\{\s*\[native \w/,_=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ab=/[+~]/,bb=/'|\\/g,cb=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),db=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{I.apply(F=J.call(v.childNodes),v.childNodes),F[v.childNodes.length].nodeType}catch(eb){I={apply:F.length?function(a,b){H.apply(a,J.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fb(a,b,d,e){var f,h,j,k,l,o,r,s,w,x;if((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,d=d||[],!a||"string"!=typeof a)return d;if(1!==(k=b.nodeType)&&9!==k)return[];if(p&&!e){if(f=_.exec(a))if(j=f[1]){if(9===k){if(h=b.getElementById(j),!h||!h.parentNode)return d;if(h.id===j)return d.push(h),d}else if(b.ownerDocument&&(h=b.ownerDocument.getElementById(j))&&t(b,h)&&h.id===j)return d.push(h),d}else{if(f[2])return I.apply(d,b.getElementsByTagName(a)),d;if((j=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return I.apply(d,b.getElementsByClassName(j)),d}if(c.qsa&&(!q||!q.test(a))){if(s=r=u,w=b,x=9===k&&a,1===k&&"object"!==b.nodeName.toLowerCase()){o=g(a),(r=b.getAttribute("id"))?s=r.replace(bb,"\\$&"):b.setAttribute("id",s),s="[id='"+s+"'] ",l=o.length;while(l--)o[l]=s+qb(o[l]);w=ab.test(a)&&ob(b.parentNode)||b,x=o.join(",")}if(x)try{return I.apply(d,w.querySelectorAll(x)),d}catch(y){}finally{r||b.removeAttribute("id")}}}return i(a.replace(R,"$1"),b,d,e)}function gb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function hb(a){return a[u]=!0,a}function ib(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function jb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function kb(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||D)-(~a.sourceIndex||D);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function lb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function mb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function nb(a){return hb(function(b){return b=+b,hb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function ob(a){return a&&typeof a.getElementsByTagName!==C&&a}c=fb.support={},f=fb.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fb.setDocument=function(a){var b,e=a?a.ownerDocument||a:v,g=e.defaultView;return e!==n&&9===e.nodeType&&e.documentElement?(n=e,o=e.documentElement,p=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){m()},!1):g.attachEvent&&g.attachEvent("onunload",function(){m()})),c.attributes=ib(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ib(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=$.test(e.getElementsByClassName)&&ib(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=ib(function(a){return o.appendChild(a).id=u,!e.getElementsByName||!e.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==C&&p){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){var c=typeof a.getAttributeNode!==C&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==C?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==C&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=$.test(e.querySelectorAll))&&(ib(function(a){a.innerHTML="<select msallowclip=''><option selected=''></option></select>",a.querySelectorAll("[msallowclip^='']").length&&q.push("[*^$]="+M+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+M+"*(?:value|"+L+")"),a.querySelectorAll(":checked").length||q.push(":checked")}),ib(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+M+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=$.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ib(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",Q)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=$.test(o.compareDocumentPosition),t=b||$.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===v&&t(v,a)?-1:b===e||b.ownerDocument===v&&t(v,b)?1:k?K.call(k,a)-K.call(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],i=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:k?K.call(k,a)-K.call(k,b):0;if(f===g)return kb(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)i.unshift(c);while(h[d]===i[d])d++;return d?kb(h[d],i[d]):h[d]===v?-1:i[d]===v?1:0},e):n},fb.matches=function(a,b){return fb(a,null,null,b)},fb.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(U,"='$1']"),!(!c.matchesSelector||!p||r&&r.test(b)||q&&q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fb(b,n,null,[a]).length>0},fb.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fb.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&E.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fb.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fb.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fb.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fb.selectors={cacheLength:50,createPseudo:hb,match:X,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(cb,db),a[3]=(a[3]||a[4]||a[5]||"").replace(cb,db),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fb.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fb.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return X.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&V.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(cb,db).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+M+")"+a+"("+M+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==C&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fb.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){k=q[u]||(q[u]={}),j=k[a]||[],n=j[0]===w&&j[1],m=j[0]===w&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[w,n,m];break}}else if(s&&(j=(b[u]||(b[u]={}))[a])&&j[0]===w)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(s&&((l[u]||(l[u]={}))[a]=[w,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fb.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?hb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=K.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:hb(function(a){var b=[],c=[],d=h(a.replace(R,"$1"));return d[u]?hb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:hb(function(a){return function(b){return fb(a,b).length>0}}),contains:hb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:hb(function(a){return W.test(a||"")||fb.error("unsupported lang: "+a),a=a.replace(cb,db).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Z.test(a.nodeName)},input:function(a){return Y.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:nb(function(){return[0]}),last:nb(function(a,b){return[b-1]}),eq:nb(function(a,b,c){return[0>c?c+b:c]}),even:nb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:nb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:nb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:nb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=lb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=mb(b);function pb(){}pb.prototype=d.filters=d.pseudos,d.setFilters=new pb,g=fb.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=S.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=T.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(R," ")}),h=h.slice(c.length));for(g in d.filter)!(e=X[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fb.error(a):z(a,i).slice(0)};function qb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function rb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[u]||(b[u]={}),(h=i[d])&&h[0]===w&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function sb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function tb(a,b,c){for(var d=0,e=b.length;e>d;d++)fb(a,b[d],c);return c}function ub(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function vb(a,b,c,d,e,f){return d&&!d[u]&&(d=vb(d)),e&&!e[u]&&(e=vb(e,f)),hb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||tb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ub(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ub(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?K.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ub(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):I.apply(g,r)})}function wb(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=rb(function(a){return a===b},h,!0),l=rb(function(a){return K.call(b,a)>-1},h,!0),m=[function(a,c,d){return!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>i;i++)if(c=d.relative[a[i].type])m=[rb(sb(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return vb(i>1&&sb(m),i>1&&qb(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(R,"$1"),c,e>i&&wb(a.slice(i,e)),f>e&&wb(a=a.slice(e)),f>e&&qb(a))}m.push(c)}return sb(m)}function xb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,m,o,p=0,q="0",r=f&&[],s=[],t=j,u=f||e&&d.find.TAG("*",k),v=w+=null==t?1:Math.random()||.1,x=u.length;for(k&&(j=g!==n&&g);q!==x&&null!=(l=u[q]);q++){if(e&&l){m=0;while(o=a[m++])if(o(l,g,h)){i.push(l);break}k&&(w=v)}c&&((l=!o&&l)&&p--,f&&r.push(l))}if(p+=q,c&&q!==p){m=0;while(o=b[m++])o(r,s,g,h);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=G.call(i));s=ub(s)}I.apply(i,s),k&&!f&&s.length>0&&p+b.length>1&&fb.uniqueSort(i)}return k&&(w=v,j=t),r};return c?hb(f):f}return h=fb.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wb(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xb(e,d)),f.selector=a}return f},i=fb.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(cb,db),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=X.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(cb,db),ab.test(j[0].type)&&ob(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qb(j),!a)return I.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,ab.test(a)&&ob(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ib(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ib(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||jb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ib(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||jb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ib(function(a){return null==a.getAttribute("disabled")})||jb(L,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fb}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=n.expr.match.needsContext,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^.[^:#\[\.,]*$/;function x(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(w.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return g.call(b,a)>=0!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=this.length,d=[],e=this;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;c>b;b++)if(n.contains(e[b],this))return!0}));for(b=0;c>b;b++)n.find(a,e[b],d);return d=this.pushStack(c>1?n.unique(d):d),d.selector=this.selector?this.selector+" "+a:a,d},filter:function(a){return this.pushStack(x(this,a||[],!1))},not:function(a){return this.pushStack(x(this,a||[],!0))},is:function(a){return!!x(this,"string"==typeof a&&u.test(a)?n(a):a||[],!1).length}});var y,z=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,A=n.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a[0]&&">"===a[a.length-1]&&a.length>=3?[null,a,null]:z.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||y).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:l,!0)),v.test(c[1])&&n.isPlainObject(b))for(c in b)n.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}return d=l.getElementById(c[2]),d&&d.parentNode&&(this.length=1,this[0]=d),this.context=l,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof y.ready?y.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};A.prototype=n.fn,y=n(l);var B=/^(?:parents|prev(?:Until|All))/,C={children:!0,contents:!0,next:!0,prev:!0};n.extend({dir:function(a,b,c){var d=[],e=void 0!==c;while((a=a[b])&&9!==a.nodeType)if(1===a.nodeType){if(e&&n(a).is(c))break;d.push(a)}return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),n.fn.extend({has:function(a){var b=n(a,this),c=b.length;return this.filter(function(){for(var a=0;c>a;a++)if(n.contains(this,b[a]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=u.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.unique(f):f)},index:function(a){return a?"string"==typeof a?g.call(n(a),this[0]):g.call(this,a.jquery?a[0]:a):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.unique(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function D(a,b){while((a=a[b])&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return n.dir(a,"parentNode")},parentsUntil:function(a,b,c){return n.dir(a,"parentNode",c)},next:function(a){return D(a,"nextSibling")},prev:function(a){return D(a,"previousSibling")},nextAll:function(a){return n.dir(a,"nextSibling")},prevAll:function(a){return n.dir(a,"previousSibling")},nextUntil:function(a,b,c){return n.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return n.dir(a,"previousSibling",c)},siblings:function(a){return n.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return n.sibling(a.firstChild)},contents:function(a){return a.contentDocument||n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(C[a]||n.unique(e),B.test(a)&&e.reverse()),this.pushStack(e)}});var E=/\S+/g,F={};function G(a){var b=F[a]={};return n.each(a.match(E)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?F[a]||G(a):n.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(b=a.memory&&l,c=!0,g=e||0,e=0,f=h.length,d=!0;h&&f>g;g++)if(h[g].apply(l[0],l[1])===!1&&a.stopOnFalse){b=!1;break}d=!1,h&&(i?i.length&&j(i.shift()):b?h=[]:k.disable())},k={add:function(){if(h){var c=h.length;!function g(b){n.each(b,function(b,c){var d=n.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&g(c)})}(arguments),d?f=h.length:b&&(e=c,j(b))}return this},remove:function(){return h&&n.each(arguments,function(a,b){var c;while((c=n.inArray(b,h,c))>-1)h.splice(c,1),d&&(f>=c&&f--,g>=c&&g--)}),this},has:function(a){return a?n.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],f=0,this},disable:function(){return h=i=b=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,b||k.disable(),this},locked:function(){return!i},fireWith:function(a,b){return!h||c&&!i||(b=b||[],b=[a,b.slice?b.slice():b],d?i.push(b):j(b)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!c}};return k},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&n.isFunction(a.promise)?e:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var H;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){(a===!0?--n.readyWait:n.isReady)||(n.isReady=!0,a!==!0&&--n.readyWait>0||(H.resolveWith(l,[n]),n.fn.triggerHandler&&(n(l).triggerHandler("ready"),n(l).off("ready"))))}});function I(){l.removeEventListener("DOMContentLoaded",I,!1),a.removeEventListener("load",I,!1),n.ready()}n.ready.promise=function(b){return H||(H=n.Deferred(),"complete"===l.readyState?setTimeout(n.ready):(l.addEventListener("DOMContentLoaded",I,!1),a.addEventListener("load",I,!1))),H.promise(b)},n.ready.promise();var J=n.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)n.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f};n.acceptData=function(a){return 1===a.nodeType||9===a.nodeType||!+a.nodeType};function K(){Object.defineProperty(this.cache={},0,{get:function(){return{}}}),this.expando=n.expando+Math.random()}K.uid=1,K.accepts=n.acceptData,K.prototype={key:function(a){if(!K.accepts(a))return 0;var b={},c=a[this.expando];if(!c){c=K.uid++;try{b[this.expando]={value:c},Object.defineProperties(a,b)}catch(d){b[this.expando]=c,n.extend(a,b)}}return this.cache[c]||(this.cache[c]={}),c},set:function(a,b,c){var d,e=this.key(a),f=this.cache[e];if("string"==typeof b)f[b]=c;else if(n.isEmptyObject(f))n.extend(this.cache[e],b);else for(d in b)f[d]=b[d];return f},get:function(a,b){var c=this.cache[this.key(a)];return void 0===b?c:c[b]},access:function(a,b,c){var d;return void 0===b||b&&"string"==typeof b&&void 0===c?(d=this.get(a,b),void 0!==d?d:this.get(a,n.camelCase(b))):(this.set(a,b,c),void 0!==c?c:b)},remove:function(a,b){var c,d,e,f=this.key(a),g=this.cache[f];if(void 0===b)this.cache[f]={};else{n.isArray(b)?d=b.concat(b.map(n.camelCase)):(e=n.camelCase(b),b in g?d=[b,e]:(d=e,d=d in g?[d]:d.match(E)||[])),c=d.length;while(c--)delete g[d[c]]}},hasData:function(a){return!n.isEmptyObject(this.cache[a[this.expando]]||{})},discard:function(a){a[this.expando]&&delete this.cache[a[this.expando]]}};var L=new K,M=new K,N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){var d;if(void 0===c&&1===a.nodeType)if(d="data-"+b.replace(O,"-$1").toLowerCase(),c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}M.set(a,b,c)}else c=void 0;return c}n.extend({hasData:function(a){return M.hasData(a)||L.hasData(a)},data:function(a,b,c){return M.access(a,b,c)},removeData:function(a,b){M.remove(a,b)
},_data:function(a,b,c){return L.access(a,b,c)},_removeData:function(a,b){L.remove(a,b)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=M.get(f),1===f.nodeType&&!L.get(f,"hasDataAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d])));L.set(f,"hasDataAttrs",!0)}return e}return"object"==typeof a?this.each(function(){M.set(this,a)}):J(this,function(b){var c,d=n.camelCase(a);if(f&&void 0===b){if(c=M.get(f,a),void 0!==c)return c;if(c=M.get(f,d),void 0!==c)return c;if(c=P(f,d,void 0),void 0!==c)return c}else this.each(function(){var c=M.get(this,d);M.set(this,d,b),-1!==a.indexOf("-")&&void 0!==c&&M.set(this,a,b)})},null,b,arguments.length>1,null,!0)},removeData:function(a){return this.each(function(){M.remove(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=L.get(a,b),c&&(!d||n.isArray(c)?d=L.access(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return L.get(a,c)||L.access(a,c,{empty:n.Callbacks("once memory").add(function(){L.remove(a,[b+"queue",c])})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=L.get(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var Q=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,R=["Top","Right","Bottom","Left"],S=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)},T=/^(?:checkbox|radio)$/i;!function(){var a=l.createDocumentFragment(),b=a.appendChild(l.createElement("div")),c=l.createElement("input");c.setAttribute("type","radio"),c.setAttribute("checked","checked"),c.setAttribute("name","t"),b.appendChild(c),k.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,b.innerHTML="<textarea>x</textarea>",k.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue}();var U="undefined";k.focusinBubbles="onfocusin"in a;var V=/^key/,W=/^(?:mouse|pointer|contextmenu)|click/,X=/^(?:focusinfocus|focusoutblur)$/,Y=/^([^.]*)(?:\.(.+)|)$/;function Z(){return!0}function $(){return!1}function _(){try{return l.activeElement}catch(a){}}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=L.get(a);if(r){c.handler&&(f=c,c=f.handler,e=f.selector),c.guid||(c.guid=n.guid++),(i=r.events)||(i=r.events={}),(g=r.handle)||(g=r.handle=function(b){return typeof n!==U&&n.event.triggered!==b.type?n.event.dispatch.apply(a,arguments):void 0}),b=(b||"").match(E)||[""],j=b.length;while(j--)h=Y.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o&&(l=n.event.special[o]||{},o=(e?l.delegateType:l.bindType)||o,l=n.event.special[o]||{},k=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},f),(m=i[o])||(m=i[o]=[],m.delegateCount=0,l.setup&&l.setup.call(a,d,p,g)!==!1||a.addEventListener&&a.addEventListener(o,g,!1)),l.add&&(l.add.call(a,k),k.handler.guid||(k.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,k):m.push(k),n.event.global[o]=!0)}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=L.hasData(a)&&L.get(a);if(r&&(i=r.events)){b=(b||"").match(E)||[""],j=b.length;while(j--)if(h=Y.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=i[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),g=f=m.length;while(f--)k=m[f],!e&&q!==k.origType||c&&c.guid!==k.guid||h&&!h.test(k.namespace)||d&&d!==k.selector&&("**"!==d||!k.selector)||(m.splice(f,1),k.selector&&m.delegateCount--,l.remove&&l.remove.call(a,k));g&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete i[o])}else for(o in i)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(i)&&(delete r.handle,L.remove(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,m,o,p=[d||l],q=j.call(b,"type")?b.type:b,r=j.call(b,"namespace")?b.namespace.split("."):[];if(g=h=d=d||l,3!==d.nodeType&&8!==d.nodeType&&!X.test(q+n.event.triggered)&&(q.indexOf(".")>=0&&(r=q.split("."),q=r.shift(),r.sort()),k=q.indexOf(":")<0&&"on"+q,b=b[n.expando]?b:new n.Event(q,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=r.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+r.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:n.makeArray(c,[b]),o=n.event.special[q]||{},e||!o.trigger||o.trigger.apply(d,c)!==!1)){if(!e&&!o.noBubble&&!n.isWindow(d)){for(i=o.delegateType||q,X.test(i+q)||(g=g.parentNode);g;g=g.parentNode)p.push(g),h=g;h===(d.ownerDocument||l)&&p.push(h.defaultView||h.parentWindow||a)}f=0;while((g=p[f++])&&!b.isPropagationStopped())b.type=f>1?i:o.bindType||q,m=(L.get(g,"events")||{})[b.type]&&L.get(g,"handle"),m&&m.apply(g,c),m=k&&g[k],m&&m.apply&&n.acceptData(g)&&(b.result=m.apply(g,c),b.result===!1&&b.preventDefault());return b.type=q,e||b.isDefaultPrevented()||o._default&&o._default.apply(p.pop(),c)!==!1||!n.acceptData(d)||k&&n.isFunction(d[q])&&!n.isWindow(d)&&(h=d[k],h&&(d[k]=null),n.event.triggered=q,d[q](),n.event.triggered=void 0,h&&(d[k]=h)),b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(L.get(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,c=0;while((g=f.handlers[c++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(g.namespace))&&(a.handleObj=g,a.data=g.data,e=((n.event.special[g.origType]||{}).handle||g.handler).apply(f.elem,i),void 0!==e&&(a.result=e)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!==this;i=i.parentNode||this)if(i.disabled!==!0||"click"!==a.type){for(d=[],c=0;h>c;c++)f=b[c],e=f.selector+" ",void 0===d[e]&&(d[e]=f.needsContext?n(e,this).index(i)>=0:n.find(e,this,null,[i]).length),d[e]&&d.push(f);d.length&&g.push({elem:i,handlers:d})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button;return null==a.pageX&&null!=b.clientX&&(c=a.target.ownerDocument||l,d=c.documentElement,e=c.body,a.pageX=b.clientX+(d&&d.scrollLeft||e&&e.scrollLeft||0)-(d&&d.clientLeft||e&&e.clientLeft||0),a.pageY=b.clientY+(d&&d.scrollTop||e&&e.scrollTop||0)-(d&&d.clientTop||e&&e.clientTop||0)),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},fix:function(a){if(a[n.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=W.test(e)?this.mouseHooks:V.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new n.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=l),3===a.target.nodeType&&(a.target=a.target.parentNode),g.filter?g.filter(a,f):a},special:{load:{noBubble:!0},focus:{trigger:function(){return this!==_()&&this.focus?(this.focus(),!1):void 0},delegateType:"focusin"},blur:{trigger:function(){return this===_()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return"checkbox"===this.type&&this.click&&n.nodeName(this,"input")?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=n.extend(new n.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?n.event.trigger(e,null,b):n.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?Z:$):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={isDefaultPrevented:$,isPropagationStopped:$,isImmediatePropagationStopped:$,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=Z,a&&a.preventDefault&&a.preventDefault()},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=Z,a&&a.stopPropagation&&a.stopPropagation()},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=Z,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!n.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),k.focusinBubbles||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a),!0)};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=L.access(d,b);e||d.addEventListener(a,c,!0),L.access(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=L.access(d,b)-1;e?L.access(d,b,e):(d.removeEventListener(a,c,!0),L.remove(d,b))}}}),n.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(g in a)this.on(g,b,c,a[g],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=$;else if(!d)return this;return 1===e&&(f=d,d=function(a){return n().off(a),f.apply(this,arguments)},d.guid=f.guid||(f.guid=n.guid++)),this.each(function(){n.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=$),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});var ab=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bb=/<([\w:]+)/,cb=/<|&#?\w+;/,db=/<(?:script|style|link)/i,eb=/checked\s*(?:[^=]|=\s*.checked.)/i,fb=/^$|\/(?:java|ecma)script/i,gb=/^true\/(.*)/,hb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,ib={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};ib.optgroup=ib.option,ib.tbody=ib.tfoot=ib.colgroup=ib.caption=ib.thead,ib.th=ib.td;function jb(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function kb(a){return a.type=(null!==a.getAttribute("type"))+"/"+a.type,a}function lb(a){var b=gb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function mb(a,b){for(var c=0,d=a.length;d>c;c++)L.set(a[c],"globalEval",!b||L.get(b[c],"globalEval"))}function nb(a,b){var c,d,e,f,g,h,i,j;if(1===b.nodeType){if(L.hasData(a)&&(f=L.access(a),g=L.set(b,f),j=f.events)){delete g.handle,g.events={};for(e in j)for(c=0,d=j[e].length;d>c;c++)n.event.add(b,e,j[e][c])}M.hasData(a)&&(h=M.access(a),i=n.extend({},h),M.set(b,i))}}function ob(a,b){var c=a.getElementsByTagName?a.getElementsByTagName(b||"*"):a.querySelectorAll?a.querySelectorAll(b||"*"):[];return void 0===b||b&&n.nodeName(a,b)?n.merge([a],c):c}function pb(a,b){var c=b.nodeName.toLowerCase();"input"===c&&T.test(a.type)?b.checked=a.checked:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}n.extend({clone:function(a,b,c){var d,e,f,g,h=a.cloneNode(!0),i=n.contains(a.ownerDocument,a);if(!(k.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(g=ob(h),f=ob(a),d=0,e=f.length;e>d;d++)pb(f[d],g[d]);if(b)if(c)for(f=f||ob(a),g=g||ob(h),d=0,e=f.length;e>d;d++)nb(f[d],g[d]);else nb(a,h);return g=ob(h,"script"),g.length>0&&mb(g,!i&&ob(a,"script")),h},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,k=b.createDocumentFragment(),l=[],m=0,o=a.length;o>m;m++)if(e=a[m],e||0===e)if("object"===n.type(e))n.merge(l,e.nodeType?[e]:e);else if(cb.test(e)){f=f||k.appendChild(b.createElement("div")),g=(bb.exec(e)||["",""])[1].toLowerCase(),h=ib[g]||ib._default,f.innerHTML=h[1]+e.replace(ab,"<$1></$2>")+h[2],j=h[0];while(j--)f=f.lastChild;n.merge(l,f.childNodes),f=k.firstChild,f.textContent=""}else l.push(b.createTextNode(e));k.textContent="",m=0;while(e=l[m++])if((!d||-1===n.inArray(e,d))&&(i=n.contains(e.ownerDocument,e),f=ob(k.appendChild(e),"script"),i&&mb(f),c)){j=0;while(e=f[j++])fb.test(e.type||"")&&c.push(e)}return k},cleanData:function(a){for(var b,c,d,e,f=n.event.special,g=0;void 0!==(c=a[g]);g++){if(n.acceptData(c)&&(e=c[L.expando],e&&(b=L.cache[e]))){if(b.events)for(d in b.events)f[d]?n.event.remove(c,d):n.removeEvent(c,d,b.handle);L.cache[e]&&delete L.cache[e]}delete M.cache[c[M.expando]]}}}),n.fn.extend({text:function(a){return J(this,function(a){return void 0===a?n.text(this):this.empty().each(function(){(1===this.nodeType||11===this.nodeType||9===this.nodeType)&&(this.textContent=a)})},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=jb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=jb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?n.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||n.cleanData(ob(c)),c.parentNode&&(b&&n.contains(c.ownerDocument,c)&&mb(ob(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++)1===a.nodeType&&(n.cleanData(ob(a,!1)),a.textContent="");return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return J(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a&&1===b.nodeType)return b.innerHTML;if("string"==typeof a&&!db.test(a)&&!ib[(bb.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(ab,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(ob(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,n.cleanData(ob(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,l=this.length,m=this,o=l-1,p=a[0],q=n.isFunction(p);if(q||l>1&&"string"==typeof p&&!k.checkClone&&eb.test(p))return this.each(function(c){var d=m.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(l&&(c=n.buildFragment(a,this[0].ownerDocument,!1,this),d=c.firstChild,1===c.childNodes.length&&(c=d),d)){for(f=n.map(ob(c,"script"),kb),g=f.length;l>j;j++)h=c,j!==o&&(h=n.clone(h,!0,!0),g&&n.merge(f,ob(h,"script"))),b.call(this[j],h,j);if(g)for(i=f[f.length-1].ownerDocument,n.map(f,lb),j=0;g>j;j++)h=f[j],fb.test(h.type||"")&&!L.access(h,"globalEval")&&n.contains(i,h)&&(h.src?n._evalUrl&&n._evalUrl(h.src):n.globalEval(h.textContent.replace(hb,"")))}return this}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=[],e=n(a),g=e.length-1,h=0;g>=h;h++)c=h===g?this:this.clone(!0),n(e[h])[b](c),f.apply(d,c.get());return this.pushStack(d)}});var qb,rb={};function sb(b,c){var d,e=n(c.createElement(b)).appendTo(c.body),f=a.getDefaultComputedStyle&&(d=a.getDefaultComputedStyle(e[0]))?d.display:n.css(e[0],"display");return e.detach(),f}function tb(a){var b=l,c=rb[a];return c||(c=sb(a,b),"none"!==c&&c||(qb=(qb||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=qb[0].contentDocument,b.write(),b.close(),c=sb(a,b),qb.detach()),rb[a]=c),c}var ub=/^margin/,vb=new RegExp("^("+Q+")(?!px)[a-z%]+$","i"),wb=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)};function xb(a,b,c){var d,e,f,g,h=a.style;return c=c||wb(a),c&&(g=c.getPropertyValue(b)||c[b]),c&&(""!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),vb.test(g)&&ub.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0!==g?g+"":g}function yb(a,b){return{get:function(){return a()?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d=l.documentElement,e=l.createElement("div"),f=l.createElement("div");if(f.style){f.style.backgroundClip="content-box",f.cloneNode(!0).style.backgroundClip="",k.clearCloneStyle="content-box"===f.style.backgroundClip,e.style.cssText="border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute",e.appendChild(f);function g(){f.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute",f.innerHTML="",d.appendChild(e);var g=a.getComputedStyle(f,null);b="1%"!==g.top,c="4px"===g.width,d.removeChild(e)}a.getComputedStyle&&n.extend(k,{pixelPosition:function(){return g(),b},boxSizingReliable:function(){return null==c&&g(),c},reliableMarginRight:function(){var b,c=f.appendChild(l.createElement("div"));return c.style.cssText=f.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",c.style.marginRight=c.style.width="0",f.style.width="1px",d.appendChild(e),b=!parseFloat(a.getComputedStyle(c,null).marginRight),d.removeChild(e),b}})}}(),n.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var zb=/^(none|table(?!-c[ea]).+)/,Ab=new RegExp("^("+Q+")(.*)$","i"),Bb=new RegExp("^([+-])=("+Q+")","i"),Cb={position:"absolute",visibility:"hidden",display:"block"},Db={letterSpacing:"0",fontWeight:"400"},Eb=["Webkit","O","Moz","ms"];function Fb(a,b){if(b in a)return b;var c=b[0].toUpperCase()+b.slice(1),d=b,e=Eb.length;while(e--)if(b=Eb[e]+c,b in a)return b;return d}function Gb(a,b,c){var d=Ab.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Hb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+R[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+R[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+R[f]+"Width",!0,e))):(g+=n.css(a,"padding"+R[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+R[f]+"Width",!0,e)));return g}function Ib(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=wb(a),g="border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=xb(a,b,f),(0>e||null==e)&&(e=a.style[b]),vb.test(e))return e;d=g&&(k.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Hb(a,b,c||(g?"border":"content"),d,f)+"px"}function Jb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=L.get(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&S(d)&&(f[g]=L.access(d,"olddisplay",tb(d.nodeName)))):(e=S(d),"none"===c&&e||L.set(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=xb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":"cssFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;return b=n.cssProps[h]||(n.cssProps[h]=Fb(i,h)),g=n.cssHooks[b]||n.cssHooks[h],void 0===c?g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b]:(f=typeof c,"string"===f&&(e=Bb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(n.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||n.cssNumber[h]||(c+="px"),k.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),g&&"set"in g&&void 0===(c=g.set(a,c,d))||(i[b]=c)),void 0)}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Fb(a.style,h)),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(e=g.get(a,!0,c)),void 0===e&&(e=xb(a,b,d)),"normal"===e&&b in Db&&(e=Db[b]),""===c||c?(f=parseFloat(e),c===!0||n.isNumeric(f)?f||0:e):e}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?zb.test(n.css(a,"display"))&&0===a.offsetWidth?n.swap(a,Cb,function(){return Ib(a,b,d)}):Ib(a,b,d):void 0},set:function(a,c,d){var e=d&&wb(a);return Gb(a,c,d?Hb(a,b,d,"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),n.cssHooks.marginRight=yb(k.reliableMarginRight,function(a,b){return b?n.swap(a,{display:"inline-block"},xb,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+R[d]+b]=f[d]||f[d-2]||f[0];return e}},ub.test(a)||(n.cssHooks[a+b].set=Gb)}),n.fn.extend({css:function(a,b){return J(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=wb(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return Jb(this,!0)},hide:function(){return Jb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){S(this)?n(this).show():n(this).hide()})}});function Kb(a,b,c,d,e){return new Kb.prototype.init(a,b,c,d,e)}n.Tween=Kb,Kb.prototype={constructor:Kb,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=Kb.propHooks[this.prop];return a&&a.get?a.get(this):Kb.propHooks._default.get(this)},run:function(a){var b,c=Kb.propHooks[this.prop];return this.pos=b=this.options.duration?n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):Kb.propHooks._default.set(this),this}},Kb.prototype.init.prototype=Kb.prototype,Kb.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[n.cssProps[a.prop]]||n.cssHooks[a.prop])?n.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},Kb.propHooks.scrollTop=Kb.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},n.fx=Kb.prototype.init,n.fx.step={};var Lb,Mb,Nb=/^(?:toggle|show|hide)$/,Ob=new RegExp("^(?:([+-])=|)("+Q+")([a-z%]*)$","i"),Pb=/queueHooks$/,Qb=[Vb],Rb={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=Ob.exec(b),f=e&&e[3]||(n.cssNumber[a]?"":"px"),g=(n.cssNumber[a]||"px"!==f&&+d)&&Ob.exec(n.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,n.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function Sb(){return setTimeout(function(){Lb=void 0}),Lb=n.now()}function Tb(a,b){var c,d=0,e={height:a};for(b=b?1:0;4>d;d+=2-b)c=R[d],e["margin"+c]=e["padding"+c]=a;return b&&(e.opacity=e.width=a),e}function Ub(a,b,c){for(var d,e=(Rb[b]||[]).concat(Rb["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function Vb(a,b,c){var d,e,f,g,h,i,j,k,l=this,m={},o=a.style,p=a.nodeType&&S(a),q=L.get(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,l.always(function(){l.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[o.overflow,o.overflowX,o.overflowY],j=n.css(a,"display"),k="none"===j?L.get(a,"olddisplay")||tb(a.nodeName):j,"inline"===k&&"none"===n.css(a,"float")&&(o.display="inline-block")),c.overflow&&(o.overflow="hidden",l.always(function(){o.overflow=c.overflow[0],o.overflowX=c.overflow[1],o.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],Nb.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(p?"hide":"show")){if("show"!==e||!q||void 0===q[d])continue;p=!0}m[d]=q&&q[d]||n.style(a,d)}else j=void 0;if(n.isEmptyObject(m))"inline"===("none"===j?tb(a.nodeName):j)&&(o.display=j);else{q?"hidden"in q&&(p=q.hidden):q=L.access(a,"fxshow",{}),f&&(q.hidden=!p),p?n(a).show():l.done(function(){n(a).hide()}),l.done(function(){var b;L.remove(a,"fxshow");for(b in m)n.style(a,b,m[b])});for(d in m)g=Ub(p?q[d]:0,d,l),d in q||(q[d]=g.start,p&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function Wb(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function Xb(a,b,c){var d,e,f=0,g=Qb.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=Lb||Sb(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:Lb||Sb(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(Wb(k,j.opts.specialEasing);g>f;f++)if(d=Qb[f].call(j,a,k,j.opts))return d;return n.map(k,Ub,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(Xb,{tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],Rb[c]=Rb[c]||[],Rb[c].unshift(b)},prefilter:function(a,b){b?Qb.unshift(a):Qb.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(S).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=Xb(this,n.extend({},a),f);(e||L.get(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=L.get(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&Pb.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=L.get(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(Tb(b,!0),a,d,e)}}),n.each({slideDown:Tb("show"),slideUp:Tb("hide"),slideToggle:Tb("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=0,c=n.timers;for(Lb=n.now();b<c.length;b++)a=c[b],a()||c[b]!==a||c.splice(b--,1);c.length||n.fx.stop(),Lb=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){Mb||(Mb=setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){clearInterval(Mb),Mb=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(a,b){return a=n.fx?n.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a=l.createElement("input"),b=l.createElement("select"),c=b.appendChild(l.createElement("option"));a.type="checkbox",k.checkOn=""!==a.value,k.optSelected=c.selected,b.disabled=!0,k.optDisabled=!c.disabled,a=l.createElement("input"),a.value="t",a.type="radio",k.radioValue="t"===a.value}();var Yb,Zb,$b=n.expr.attrHandle;n.fn.extend({attr:function(a,b){return J(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===U?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),d=n.attrHooks[b]||(n.expr.match.bool.test(b)?Zb:Yb)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=n.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void n.removeAttr(a,b))
},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(E);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)&&(a[d]=!1),a.removeAttribute(c)},attrHooks:{type:{set:function(a,b){if(!k.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),Zb={set:function(a,b,c){return b===!1?n.removeAttr(a,c):a.setAttribute(c,c),c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=$b[b]||n.find.attr;$b[b]=function(a,b,d){var e,f;return d||(f=$b[b],$b[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,$b[b]=f),e}});var _b=/^(?:input|select|textarea|button)$/i;n.fn.extend({prop:function(a,b){return J(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return this.each(function(){delete this[n.propFix[a]||a]})}}),n.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!n.isXMLDoc(a),f&&(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){return a.hasAttribute("tabindex")||_b.test(a.nodeName)||a.href?a.tabIndex:-1}}}}),k.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&b.parentNode&&b.parentNode.selectedIndex,null}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this});var ac=/[\t\r\n\f]/g;n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h="string"==typeof a&&a,i=0,j=this.length;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,this.className))});if(h)for(b=(a||"").match(E)||[];j>i;i++)if(c=this[i],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(ac," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=n.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0===arguments.length||"string"==typeof a&&a,i=0,j=this.length;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,this.className))});if(h)for(b=(a||"").match(E)||[];j>i;i++)if(c=this[i],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(ac," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?n.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(n.isFunction(a)?function(c){n(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=n(this),f=a.match(E)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===U||"boolean"===c)&&(this.className&&L.set(this,"__className__",this.className),this.className=this.className||a===!1?"":L.get(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(ac," ").indexOf(b)>=0)return!0;return!1}});var bc=/\r/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(bc,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.trim(n.text(a))}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(k.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)d=e[g],(d.selected=n.inArray(d.value,f)>=0)&&(c=!0);return c||(a.selectedIndex=-1),f}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>=0:void 0}},k.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var cc=n.now(),dc=/\?/;n.parseJSON=function(a){return JSON.parse(a+"")},n.parseXML=function(a){var b,c;if(!a||"string"!=typeof a)return null;try{c=new DOMParser,b=c.parseFromString(a,"text/xml")}catch(d){b=void 0}return(!b||b.getElementsByTagName("parsererror").length)&&n.error("Invalid XML: "+a),b};var ec,fc,gc=/#.*$/,hc=/([?&])_=[^&]*/,ic=/^(.*?):[ \t]*([^\r\n]*)$/gm,jc=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,kc=/^(?:GET|HEAD)$/,lc=/^\/\//,mc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,nc={},oc={},pc="*/".concat("*");try{fc=location.href}catch(qc){fc=l.createElement("a"),fc.href="",fc=fc.href}ec=mc.exec(fc.toLowerCase())||[];function rc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(E)||[];if(n.isFunction(c))while(d=f[e++])"+"===d[0]?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function sc(a,b,c,d){var e={},f=a===oc;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function tc(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(c in b)void 0!==b[c]&&((e[c]?a:d||(d={}))[c]=b[c]);return d&&n.extend(!0,a,d),a}function uc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===d&&(d=a.mimeType||b.getResponseHeader("Content-Type"));if(d)for(e in h)if(h[e]&&h[e].test(d)){i.unshift(e);break}if(i[0]in c)f=i[0];else{for(e in c){if(!i[0]||a.converters[e+" "+i[0]]){f=e;break}g||(g=e)}f=f||g}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function vc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:fc,type:"GET",isLocal:jc.test(ec[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":pc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?tc(tc(a,n.ajaxSettings),b):tc(n.ajaxSettings,a)},ajaxPrefilter:rc(nc),ajaxTransport:rc(oc),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=n.ajaxSetup({},b),l=k.context||k,m=k.context&&(l.nodeType||l.jquery)?n(l):n.event,o=n.Deferred(),p=n.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!f){f={};while(b=ic.exec(e))f[b[1].toLowerCase()]=b[2]}b=f[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?e:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return c&&c.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||fc)+"").replace(gc,"").replace(lc,ec[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=n.trim(k.dataType||"*").toLowerCase().match(E)||[""],null==k.crossDomain&&(h=mc.exec(k.url.toLowerCase()),k.crossDomain=!(!h||h[1]===ec[1]&&h[2]===ec[2]&&(h[3]||("http:"===h[1]?"80":"443"))===(ec[3]||("http:"===ec[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=n.param(k.data,k.traditional)),sc(nc,k,b,v),2===t)return v;i=k.global,i&&0===n.active++&&n.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!kc.test(k.type),d=k.url,k.hasContent||(k.data&&(d=k.url+=(dc.test(d)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=hc.test(d)?d.replace(hc,"$1_="+cc++):d+(dc.test(d)?"&":"?")+"_="+cc++)),k.ifModified&&(n.lastModified[d]&&v.setRequestHeader("If-Modified-Since",n.lastModified[d]),n.etag[d]&&v.setRequestHeader("If-None-Match",n.etag[d])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+pc+"; q=0.01":""):k.accepts["*"]);for(j in k.headers)v.setRequestHeader(j,k.headers[j]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(j in{success:1,error:1,complete:1})v[j](k[j]);if(c=sc(oc,k,b,v)){v.readyState=1,i&&m.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,c.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,f,h){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),c=void 0,e=h||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,f&&(u=uc(k,v,f)),u=vc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(n.lastModified[d]=w),w=v.getResponseHeader("etag"),w&&(n.etag[d]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,i&&m.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),i&&(m.trigger("ajaxComplete",[v,k]),--n.active||n.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){var b;return n.isFunction(a)?this.each(function(b){n(this).wrapAll(a.call(this,b))}):(this[0]&&(b=n(a,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstElementChild)a=a.firstElementChild;return a}).append(this)),this)},wrapInner:function(a){return this.each(n.isFunction(a)?function(b){n(this).wrapInner(a.call(this,b))}:function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var wc=/%20/g,xc=/\[\]$/,yc=/\r?\n/g,zc=/^(?:submit|button|image|reset|file)$/i,Ac=/^(?:input|select|textarea|keygen)/i;function Bc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||xc.test(a)?d(a,e):Bc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Bc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Bc(c,a[c],b,e);return d.join("&").replace(wc,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&Ac.test(this.nodeName)&&!zc.test(a)&&(this.checked||!T.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(yc,"\r\n")}}):{name:b.name,value:c.replace(yc,"\r\n")}}).get()}}),n.ajaxSettings.xhr=function(){try{return new XMLHttpRequest}catch(a){}};var Cc=0,Dc={},Ec={0:200,1223:204},Fc=n.ajaxSettings.xhr();a.ActiveXObject&&n(a).on("unload",function(){for(var a in Dc)Dc[a]()}),k.cors=!!Fc&&"withCredentials"in Fc,k.ajax=Fc=!!Fc,n.ajaxTransport(function(a){var b;return k.cors||Fc&&!a.crossDomain?{send:function(c,d){var e,f=a.xhr(),g=++Cc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)f.setRequestHeader(e,c[e]);b=function(a){return function(){b&&(delete Dc[g],b=f.onload=f.onerror=null,"abort"===a?f.abort():"error"===a?d(f.status,f.statusText):d(Ec[f.status]||f.status,f.statusText,"string"==typeof f.responseText?{text:f.responseText}:void 0,f.getAllResponseHeaders()))}},f.onload=b(),f.onerror=b("error"),b=Dc[g]=b("abort");try{f.send(a.hasContent&&a.data||null)}catch(h){if(b)throw h}},abort:function(){b&&b()}}:void 0}),n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET")}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c;return{send:function(d,e){b=n("<script>").prop({async:!0,charset:a.scriptCharset,src:a.url}).on("load error",c=function(a){b.remove(),c=null,a&&e("error"===a.type?404:200,a.type)}),l.head.appendChild(b[0])},abort:function(){c&&c()}}}});var Gc=[],Hc=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=Gc.pop()||n.expando+"_"+cc++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(Hc.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&Hc.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(Hc,"$1"+e):b.jsonp!==!1&&(b.url+=(dc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,Gc.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||l;var d=v.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=n.buildFragment([a],b,e),e&&e.length&&n(e).remove(),n.merge([],d.childNodes))};var Ic=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&Ic)return Ic.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=n.trim(a.slice(h)),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(e="POST"),g.length>0&&n.ajax({url:a,type:e,dataType:"html",data:b}).done(function(a){f=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,f||[a.responseText,b,a])}),this},n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};var Jc=a.document.documentElement;function Kc(a){return n.isWindow(a)?a:9===a.nodeType&&a.defaultView}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&(f+i).indexOf("auto")>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d=this[0],e={top:0,left:0},f=d&&d.ownerDocument;if(f)return b=f.documentElement,n.contains(b,d)?(typeof d.getBoundingClientRect!==U&&(e=d.getBoundingClientRect()),c=Kc(f),{top:e.top+c.pageYOffset-b.clientTop,left:e.left+c.pageXOffset-b.clientLeft}):e},position:function(){if(this[0]){var a,b,c=this[0],d={top:0,left:0};return"fixed"===n.css(c,"position")?b=c.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(d=a.offset()),d.top+=n.css(a[0],"borderTopWidth",!0),d.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-d.top-n.css(c,"marginTop",!0),left:b.left-d.left-n.css(c,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||Jc;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||Jc})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(b,c){var d="pageYOffset"===c;n.fn[b]=function(e){return J(this,function(b,e,f){var g=Kc(b);return void 0===f?g?g[c]:b[e]:void(g?g.scrollTo(d?a.pageXOffset:f,d?f:a.pageYOffset):b[e]=f)},b,e,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=yb(k.pixelPosition,function(a,c){return c?(c=xb(a,b),vb.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return J(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var Lc=a.jQuery,Mc=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=Mc),b&&a.jQuery===n&&(a.jQuery=Lc),n},typeof b===U&&(a.jQuery=a.$=n),n});
if("undefined"==typeof jQuery)throw new Error("Bootstrap requires jQuery");+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]}}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one(a.support.transition.end,function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b()})}(jQuery),+function(a){"use strict";var b='[data-dismiss="alert"]',c=function(c){a(c).on("click",b,this.close)};c.prototype.close=function(b){function c(){f.trigger("closed.bs.alert").remove()}var d=a(this),e=d.attr("data-target");e||(e=d.attr("href"),e=e&&e.replace(/.*(?=#[^\s]*$)/,""));var f=a(e);b&&b.preventDefault(),f.length||(f=d.hasClass("alert")?d:d.parent()),f.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one(a.support.transition.end,c).emulateTransitionEnd(150):c())};var d=a.fn.alert;a.fn.alert=function(b){return this.each(function(){var d=a(this),e=d.data("bs.alert");e||d.data("bs.alert",e=new c(this)),"string"==typeof b&&e[b].call(d)})},a.fn.alert.Constructor=c,a.fn.alert.noConflict=function(){return a.fn.alert=d,this},a(document).on("click.bs.alert.data-api",b,c.prototype.close)}(jQuery),+function(a){"use strict";var b=function(c,d){this.$element=a(c),this.options=a.extend({},b.DEFAULTS,d)};b.DEFAULTS={loadingText:"loading..."},b.prototype.setState=function(a){var b="disabled",c=this.$element,d=c.is("input")?"val":"html",e=c.data();a+="Text",e.resetText||c.data("resetText",c[d]()),c[d](e[a]||this.options[a]),setTimeout(function(){"loadingText"==a?c.addClass(b).attr(b,b):c.removeClass(b).removeAttr(b)},0)},b.prototype.toggle=function(){var a=this.$element.closest('[data-toggle="buttons"]'),b=!0;if(a.length){var c=this.$element.find("input");"radio"===c.prop("type")&&(c.prop("checked")&&this.$element.hasClass("active")?b=!1:a.find(".active").removeClass("active")),b&&c.prop("checked",!this.$element.hasClass("active")).trigger("change")}b&&this.$element.toggleClass("active")};var c=a.fn.button;a.fn.button=function(c){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof c&&c;e||d.data("bs.button",e=new b(this,f)),"toggle"==c?e.toggle():c&&e.setState(c)})},a.fn.button.Constructor=b,a.fn.button.noConflict=function(){return a.fn.button=c,this},a(document).on("click.bs.button.data-api","[data-toggle^=button]",function(b){var c=a(b.target);c.hasClass("btn")||(c=c.closest(".btn")),c.button("toggle"),b.preventDefault()})}(jQuery),+function(a){"use strict";var b=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=this.sliding=this.interval=this.$active=this.$items=null,"hover"==this.options.pause&&this.$element.on("mouseenter",a.proxy(this.pause,this)).on("mouseleave",a.proxy(this.cycle,this))};b.DEFAULTS={interval:5e3,pause:"hover",wrap:!0},b.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},b.prototype.getActiveIndex=function(){return this.$active=this.$element.find(".item.active"),this.$items=this.$active.parent().children(),this.$items.index(this.$active)},b.prototype.to=function(b){var c=this,d=this.getActiveIndex();return b>this.$items.length-1||0>b?void 0:this.sliding?this.$element.one("slid.bs.carousel",function(){c.to(b)}):d==b?this.pause().cycle():this.slide(b>d?"next":"prev",a(this.$items[b]))},b.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition.end&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},b.prototype.next=function(){return this.sliding?void 0:this.slide("next")},b.prototype.prev=function(){return this.sliding?void 0:this.slide("prev")},b.prototype.slide=function(b,c){var d=this.$element.find(".item.active"),e=c||d[b](),f=this.interval,g="next"==b?"left":"right",h="next"==b?"first":"last",i=this;if(!e.length){if(!this.options.wrap)return;e=this.$element.find(".item")[h]()}this.sliding=!0,f&&this.pause();var j=a.Event("slide.bs.carousel",{relatedTarget:e[0],direction:g});if(!e.hasClass("active")){if(this.$indicators.length&&(this.$indicators.find(".active").removeClass("active"),this.$element.one("slid.bs.carousel",function(){var b=a(i.$indicators.children()[i.getActiveIndex()]);b&&b.addClass("active")})),a.support.transition&&this.$element.hasClass("slide")){if(this.$element.trigger(j),j.isDefaultPrevented())return;e.addClass(b),e[0].offsetWidth,d.addClass(g),e.addClass(g),d.one(a.support.transition.end,function(){e.removeClass([b,g].join(" ")).addClass("active"),d.removeClass(["active",g].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger("slid.bs.carousel")},0)}).emulateTransitionEnd(600)}else{if(this.$element.trigger(j),j.isDefaultPrevented())return;d.removeClass("active"),e.addClass("active"),this.sliding=!1,this.$element.trigger("slid.bs.carousel")}return f&&this.cycle(),this}};var c=a.fn.carousel;a.fn.carousel=function(c){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},b.DEFAULTS,d.data(),"object"==typeof c&&c),g="string"==typeof c?c:f.slide;e||d.data("bs.carousel",e=new b(this,f)),"number"==typeof c?e.to(c):g?e[g]():f.interval&&e.pause().cycle()})},a.fn.carousel.Constructor=b,a.fn.carousel.noConflict=function(){return a.fn.carousel=c,this},a(document).on("click.bs.carousel.data-api","[data-slide], [data-slide-to]",function(b){var c,d=a(this),e=a(d.attr("data-target")||(c=d.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"")),f=a.extend({},e.data(),d.data()),g=d.attr("data-slide-to");g&&(f.interval=!1),e.carousel(f),(g=d.attr("data-slide-to"))&&e.data("bs.carousel").to(g),b.preventDefault()}),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var b=a(this);b.carousel(b.data())})})}(jQuery),+function(a){"use strict";var b=function(c,d){this.$element=a(c),this.options=a.extend({},b.DEFAULTS,d),this.transitioning=null,this.options.parent&&(this.$parent=a(this.options.parent)),this.options.toggle&&this.toggle()};b.DEFAULTS={toggle:!0},b.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},b.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b=a.Event("show.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.$parent&&this.$parent.find("> .panel > .in");if(c&&c.length){var d=c.data("bs.collapse");if(d&&d.transitioning)return;c.collapse("hide"),d||c.data("bs.collapse",null)}var e=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[e](0),this.transitioning=1;var f=function(){this.$element.removeClass("collapsing").addClass("in")[e]("auto"),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return f.call(this);var g=a.camelCase(["scroll",e].join("-"));this.$element.one(a.support.transition.end,a.proxy(f,this)).emulateTransitionEnd(350)[e](this.$element[0][g])}}},b.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse").removeClass("in"),this.transitioning=1;var d=function(){this.transitioning=0,this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse")};return a.support.transition?(this.$element[c](0).one(a.support.transition.end,a.proxy(d,this)).emulateTransitionEnd(350),void 0):d.call(this)}}},b.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()};var c=a.fn.collapse;a.fn.collapse=function(c){return this.each(function(){var d=a(this),e=d.data("bs.collapse"),f=a.extend({},b.DEFAULTS,d.data(),"object"==typeof c&&c);e||d.data("bs.collapse",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.collapse.Constructor=b,a.fn.collapse.noConflict=function(){return a.fn.collapse=c,this},a(document).on("click.bs.collapse.data-api","[data-toggle=collapse]",function(b){var c,d=a(this),e=d.attr("data-target")||b.preventDefault()||(c=d.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,""),f=a(e),g=f.data("bs.collapse"),h=g?"toggle":d.data(),i=d.attr("data-parent"),j=i&&a(i);g&&g.transitioning||(j&&j.find('[data-toggle=collapse][data-parent="'+i+'"]').not(d).addClass("collapsed"),d[f.hasClass("in")?"addClass":"removeClass"]("collapsed")),f.collapse(h)})}(jQuery),+function(a){"use strict";function b(){a(d).remove(),a(e).each(function(b){var d=c(a(this));d.hasClass("open")&&(d.trigger(b=a.Event("hide.bs.dropdown")),b.isDefaultPrevented()||d.removeClass("open").trigger("hidden.bs.dropdown"))})}function c(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}var d=".dropdown-backdrop",e="[data-toggle=dropdown]",f=function(b){a(b).on("click.bs.dropdown",this.toggle)};f.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=c(e),g=f.hasClass("open");if(b(),!g){if("ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a('<div class="dropdown-backdrop"/>').insertAfter(a(this)).on("click",b),f.trigger(d=a.Event("show.bs.dropdown")),d.isDefaultPrevented())return;f.toggleClass("open").trigger("shown.bs.dropdown"),e.focus()}return!1}},f.prototype.keydown=function(b){if(/(38|40|27)/.test(b.keyCode)){var d=a(this);if(b.preventDefault(),b.stopPropagation(),!d.is(".disabled, :disabled")){var f=c(d),g=f.hasClass("open");if(!g||g&&27==b.keyCode)return 27==b.which&&f.find(e).focus(),d.click();var h=a("[role=menu] li:not(.divider):visible a",f);if(h.length){var i=h.index(h.filter(":focus"));38==b.keyCode&&i>0&&i--,40==b.keyCode&&i<h.length-1&&i++,~i||(i=0),h.eq(i).focus()}}}};var g=a.fn.dropdown;a.fn.dropdown=function(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new f(this)),"string"==typeof b&&d[b].call(c)})},a.fn.dropdown.Constructor=f,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=g,this},a(document).on("click.bs.dropdown.data-api",b).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",e,f.prototype.toggle).on("keydown.bs.dropdown.data-api",e+", [role=menu]",f.prototype.keydown)}(jQuery),+function(a){"use strict";var b=function(b,c){this.options=c,this.$element=a(b),this.$backdrop=this.isShown=null,this.options.remote&&this.$element.load(this.options.remote)};b.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},b.prototype.toggle=function(a){return this[this.isShown?"hide":"show"](a)},b.prototype.show=function(b){var c=this,d=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(d),this.isShown||d.isDefaultPrevented()||(this.isShown=!0,this.escape(),this.$element.on("click.dismiss.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.backdrop(function(){var d=a.support.transition&&c.$element.hasClass("fade");c.$element.parent().length||c.$element.appendTo(document.body),c.$element.show(),d&&c.$element[0].offsetWidth,c.$element.addClass("in").attr("aria-hidden",!1),c.enforceFocus();var e=a.Event("shown.bs.modal",{relatedTarget:b});d?c.$element.find(".modal-dialog").one(a.support.transition.end,function(){c.$element.focus().trigger(e)}).emulateTransitionEnd(300):c.$element.focus().trigger(e)}))},b.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").attr("aria-hidden",!0).off("click.dismiss.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one(a.support.transition.end,a.proxy(this.hideModal,this)).emulateTransitionEnd(300):this.hideModal())},b.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.focus()},this))},b.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keyup.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keyup.dismiss.bs.modal")},b.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.removeBackdrop(),a.$element.trigger("hidden.bs.modal")})},b.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},b.prototype.backdrop=function(b){var c=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var d=a.support.transition&&c;if(this.$backdrop=a('<div class="modal-backdrop '+c+'" />').appendTo(document.body),this.$element.on("click.dismiss.modal",a.proxy(function(a){a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus.call(this.$element[0]):this.hide.call(this))},this)),d&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;d?this.$backdrop.one(a.support.transition.end,b).emulateTransitionEnd(150):b()}else!this.isShown&&this.$backdrop?(this.$backdrop.removeClass("in"),a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one(a.support.transition.end,b).emulateTransitionEnd(150):b()):b&&b()};var c=a.fn.modal;a.fn.modal=function(c,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},b.DEFAULTS,e.data(),"object"==typeof c&&c);f||e.data("bs.modal",f=new b(this,g)),"string"==typeof c?f[c](d):g.show&&f.show(d)})},a.fn.modal.Constructor=b,a.fn.modal.noConflict=function(){return a.fn.modal=c,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(b){var c=a(this),d=c.attr("href"),e=a(c.attr("data-target")||d&&d.replace(/.*(?=#[^\s]+$)/,"")),f=e.data("modal")?"toggle":a.extend({remote:!/#/.test(d)&&d},e.data(),c.data());b.preventDefault(),e.modal(f,this).one("hide",function(){c.is(":visible")&&c.focus()})}),a(document).on("show.bs.modal",".modal",function(){a(document.body).addClass("modal-open")}).on("hidden.bs.modal",".modal",function(){a(document.body).removeClass("modal-open")})}(jQuery),+function(a){"use strict";var b=function(a,b){this.type=this.options=this.enabled=this.timeout=this.hoverState=this.$element=null,this.init("tooltip",a,b)};b.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1},b.prototype.init=function(b,c,d){this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d);for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focus",i="hover"==g?"mouseleave":"blur";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},b.prototype.getDefaults=function(){return b.DEFAULTS},b.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},b.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},b.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type);return clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show),void 0):c.show()},b.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type);return clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide),void 0):c.hide()},b.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){if(this.$element.trigger(b),b.isDefaultPrevented())return;var c=this.tip();this.setContent(),this.options.animation&&c.addClass("fade");var d="function"==typeof this.options.placement?this.options.placement.call(this,c[0],this.$element[0]):this.options.placement,e=/\s?auto?\s?/i,f=e.test(d);f&&(d=d.replace(e,"")||"top"),c.detach().css({top:0,left:0,display:"block"}).addClass(d),this.options.container?c.appendTo(this.options.container):c.insertAfter(this.$element);var g=this.getPosition(),h=c[0].offsetWidth,i=c[0].offsetHeight;if(f){var j=this.$element.parent(),k=d,l=document.documentElement.scrollTop||document.body.scrollTop,m="body"==this.options.container?window.innerWidth:j.outerWidth(),n="body"==this.options.container?window.innerHeight:j.outerHeight(),o="body"==this.options.container?0:j.offset().left;d="bottom"==d&&g.top+g.height+i-l>n?"top":"top"==d&&g.top-l-i<0?"bottom":"right"==d&&g.right+h>m?"left":"left"==d&&g.left-h<o?"right":d,c.removeClass(k).addClass(d)}var p=this.getCalculatedOffset(d,g,h,i);this.applyPlacement(p,d),this.$element.trigger("shown.bs."+this.type)}},b.prototype.applyPlacement=function(a,b){var c,d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),a.top=a.top+g,a.left=a.left+h,d.offset(a).addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;if("top"==b&&j!=f&&(c=!0,a.top=a.top+f-j),/bottom|top/.test(b)){var k=0;a.left<0&&(k=-2*a.left,a.left=0,d.offset(a),i=d[0].offsetWidth,j=d[0].offsetHeight),this.replaceArrow(k-e+i,i,"left")}else this.replaceArrow(j-f,j,"top");c&&d.offset(a)},b.prototype.replaceArrow=function(a,b,c){this.arrow().css(c,a?50*(1-a/b)+"%":"")},b.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},b.prototype.hide=function(){function b(){"in"!=c.hoverState&&d.detach()}var c=this,d=this.tip(),e=a.Event("hide.bs."+this.type);return this.$element.trigger(e),e.isDefaultPrevented()?void 0:(d.removeClass("in"),a.support.transition&&this.$tip.hasClass("fade")?d.one(a.support.transition.end,b).emulateTransitionEnd(150):b(),this.$element.trigger("hidden.bs."+this.type),this)},b.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},b.prototype.hasContent=function(){return this.getTitle()},b.prototype.getPosition=function(){var b=this.$element[0];return a.extend({},"function"==typeof b.getBoundingClientRect?b.getBoundingClientRect():{width:b.offsetWidth,height:b.offsetHeight},this.$element.offset())},b.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},b.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},b.prototype.tip=function(){return this.$tip=this.$tip||a(this.options.template)},b.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},b.prototype.validate=function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},b.prototype.enable=function(){this.enabled=!0},b.prototype.disable=function(){this.enabled=!1},b.prototype.toggleEnabled=function(){this.enabled=!this.enabled},b.prototype.toggle=function(b){var c=b?a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type):this;c.tip().hasClass("in")?c.leave(c):c.enter(c)},b.prototype.destroy=function(){this.hide().$element.off("."+this.type).removeData("bs."+this.type)};var c=a.fn.tooltip;a.fn.tooltip=function(c){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof c&&c;e||d.data("bs.tooltip",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.tooltip.Constructor=b,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=c,this}}(jQuery),+function(a){"use strict";var b=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");b.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),b.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),b.prototype.constructor=b,b.prototype.getDefaults=function(){return b.DEFAULTS},b.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content")[this.options.html?"html":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},b.prototype.hasContent=function(){return this.getTitle()||this.getContent()},b.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},b.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")},b.prototype.tip=function(){return this.$tip||(this.$tip=a(this.options.template)),this.$tip};var c=a.fn.popover;a.fn.popover=function(c){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof c&&c;e||d.data("bs.popover",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.popover.Constructor=b,a.fn.popover.noConflict=function(){return a.fn.popover=c,this}}(jQuery),+function(a){"use strict";function b(c,d){var e,f=a.proxy(this.process,this);this.$element=a(c).is("body")?a(window):a(c),this.$body=a("body"),this.$scrollElement=this.$element.on("scroll.bs.scroll-spy.data-api",f),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||(e=a(c).attr("href"))&&e.replace(/.*(?=#[^\s]+$)/,"")||"")+" .nav li > a",this.offsets=a([]),this.targets=a([]),this.activeTarget=null,this.refresh(),this.process()}b.DEFAULTS={offset:10},b.prototype.refresh=function(){var b=this.$element[0]==window?"offset":"position";this.offsets=a([]),this.targets=a([]);var c=this;this.$body.find(this.selector).map(function(){var d=a(this),e=d.data("target")||d.attr("href"),f=/^#\w/.test(e)&&a(e);return f&&f.length&&[[f[b]().top+(!a.isWindow(c.$scrollElement.get(0))&&c.$scrollElement.scrollTop()),e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){c.offsets.push(this[0]),c.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight,d=c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(b>=d)return g!=(a=f.last()[0])&&this.activate(a);for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(!e[a+1]||b<=e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){this.activeTarget=b,a(this.selector).parents(".active").removeClass("active");var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),d.trigger("activate.bs.scrollspy")};var c=a.fn.scrollspy;a.fn.scrollspy=function(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=c,this},a(window).on("load",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);b.scrollspy(b.data())})})}(jQuery),+function(a){"use strict";var b=function(b){this.element=a(b)};b.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a")[0],f=a.Event("show.bs.tab",{relatedTarget:e});if(b.trigger(f),!f.isDefaultPrevented()){var g=a(d);this.activate(b.parent("li"),c),this.activate(g,g.parent(),function(){b.trigger({type:"shown.bs.tab",relatedTarget:e})})}}},b.prototype.activate=function(b,c,d){function e(){f.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),b.addClass("active"),g?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu")&&b.closest("li.dropdown").addClass("active"),d&&d()}var f=c.find("> .active"),g=d&&a.support.transition&&f.hasClass("fade");g?f.one(a.support.transition.end,e).emulateTransitionEnd(150):e(),f.removeClass("in")};var c=a.fn.tab;a.fn.tab=function(c){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new b(this)),"string"==typeof c&&e[c]()})},a.fn.tab.Constructor=b,a.fn.tab.noConflict=function(){return a.fn.tab=c,this},a(document).on("click.bs.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"]',function(b){b.preventDefault(),a(this).tab("show")})}(jQuery),+function(a){"use strict";var b=function(c,d){this.options=a.extend({},b.DEFAULTS,d),this.$window=a(window).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(c),this.affixed=this.unpin=null,this.checkPosition()};b.RESET="affix affix-top affix-bottom",b.DEFAULTS={offset:0},b.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},b.prototype.checkPosition=function(){if(this.$element.is(":visible")){var c=a(document).height(),d=this.$window.scrollTop(),e=this.$element.offset(),f=this.options.offset,g=f.top,h=f.bottom;"object"!=typeof f&&(h=g=f),"function"==typeof g&&(g=f.top()),"function"==typeof h&&(h=f.bottom());var i=null!=this.unpin&&d+this.unpin<=e.top?!1:null!=h&&e.top+this.$element.height()>=c-h?"bottom":null!=g&&g>=d?"top":!1;this.affixed!==i&&(this.unpin&&this.$element.css("top",""),this.affixed=i,this.unpin="bottom"==i?e.top-d:null,this.$element.removeClass(b.RESET).addClass("affix"+(i?"-"+i:"")),"bottom"==i&&this.$element.offset({top:document.body.offsetHeight-h-this.$element.height()}))}};var c=a.fn.affix;a.fn.affix=function(c){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof c&&c;e||d.data("bs.affix",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.affix.Constructor=b,a.fn.affix.noConflict=function(){return a.fn.affix=c,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var b=a(this),c=b.data();c.offset=c.offset||{},c.offsetBottom&&(c.offset.bottom=c.offsetBottom),c.offsetTop&&(c.offset.top=c.offsetTop),b.affix(c)})})}(jQuery);
(function(factory){
if (typeof define === 'function' && define.amd)
define(['jquery'], factory);
else if (typeof exports === 'object')
factory(require('jquery'));
else
factory(jQuery);
}(function($, undefined){
if (!('indexOf' in Array.prototype)) {
Array.prototype.indexOf = function (find, i) {
if (i === undefined) i = 0;
if (i < 0) i += this.length;
if (i < 0) i = 0;
for (var n = this.length; i < n; i++) {
if (i in this && this[i] === find) {
return i;
}
}
return -1;
}
}
function timeZoneAbbreviation() {
var abbreviation, date, formattedStr, i, len, matchedStrings, ref, str;
date = (new Date()).toString();
formattedStr = ((ref = date.split('(')[1]) != null ? ref.slice(0, -1) : 0) || date.split(' ');
if (formattedStr instanceof Array) {
matchedStrings = [];
for (var i = 0, len = formattedStr.length; i < len; i++) {
str = formattedStr[i];
if ((abbreviation = (ref = str.match(/\b[A-Z]+\b/)) !== null) ? ref[0] : 0) {
matchedStrings.push(abbreviation);
}
}
formattedStr = matchedStrings.pop();
}
return formattedStr;
}
function UTCDate() {
return new Date(Date.UTC.apply(Date, arguments));
}
var Datetimepicker = function (element, options) {
var that = this;
this.element = $(element);
this.container = options.container || 'body';
this.language = options.language || this.element.data('date-language') || 'en';
this.language = this.language in dates ? this.language : this.language.split('-')[0];
this.language = this.language in dates ? this.language : 'en';
this.isRTL = dates[this.language].rtl || false;
this.formatType = options.formatType || this.element.data('format-type') || 'standard';
this.format = DPGlobal.parseFormat(options.format || this.element.data('date-format') || dates[this.language].format || DPGlobal.getDefaultFormat(this.formatType, 'input'), this.formatType);
this.isInline = false;
this.isVisible = false;
this.isInput = this.element.is('input');
this.fontAwesome = options.fontAwesome || this.element.data('font-awesome') || false;
this.bootcssVer = options.bootcssVer || (this.isInput ? (this.element.is('.form-control') ? 3 : 2) : ( this.bootcssVer = this.element.is('.input-group') ? 3 : 2 ));
this.component = this.element.is('.date') ? ( this.bootcssVer === 3 ? this.element.find('.input-group-addon .glyphicon-th, .input-group-addon .glyphicon-time, .input-group-addon .glyphicon-remove, .input-group-addon .glyphicon-calendar, .input-group-addon .fa-calendar, .input-group-addon .fa-clock-o').parent() : this.element.find('.add-on .icon-th, .add-on .icon-time, .add-on .icon-calendar, .add-on .fa-calendar, .add-on .fa-clock-o').parent()) : false;
this.componentReset = this.element.is('.date') ? ( this.bootcssVer === 3 ? this.element.find('.input-group-addon .glyphicon-remove, .input-group-addon .fa-times').parent():this.element.find('.add-on .icon-remove, .add-on .fa-times').parent()) : false;
this.hasInput = this.component && this.element.find('input').length;
if (this.component && this.component.length === 0) {
this.component = false;
}
this.linkField = options.linkField || this.element.data('link-field') || false;
this.linkFormat = DPGlobal.parseFormat(options.linkFormat || this.element.data('link-format') || DPGlobal.getDefaultFormat(this.formatType, 'link'), this.formatType);
this.minuteStep = options.minuteStep || this.element.data('minute-step') || 5;
this.pickerPosition = options.pickerPosition || this.element.data('picker-position') || 'bottom-right';
this.showMeridian = options.showMeridian || this.element.data('show-meridian') || false;
this.initialDate = options.initialDate || new Date();
this.zIndex = options.zIndex || this.element.data('z-index') || undefined;
this.title = typeof options.title === 'undefined' ? false : options.title;
this.timezone = options.timezone || timeZoneAbbreviation();
this.icons = {
leftArrow: this.fontAwesome ? 'fa-arrow-left' : (this.bootcssVer === 3 ? 'glyphicon-arrow-left' : 'icon-arrow-left'),
rightArrow: this.fontAwesome ? 'fa-arrow-right' : (this.bootcssVer === 3 ? 'glyphicon-arrow-right' : 'icon-arrow-right')
}
this.icontype = this.fontAwesome ? 'fa' : 'glyphicon';
this._attachEvents();
this.clickedOutside = function (e) {
if ($(e.target).closest('.datetimepicker').length === 0) {
that.hide();
}
}
this.formatViewType = 'datetime';
if ('formatViewType' in options) {
this.formatViewType = options.formatViewType;
} else if ('formatViewType' in this.element.data()) {
this.formatViewType = this.element.data('formatViewType');
}
this.minView = 0;
if ('minView' in options) {
this.minView = options.minView;
} else if ('minView' in this.element.data()) {
this.minView = this.element.data('min-view');
}
this.minView = DPGlobal.convertViewMode(this.minView);
this.maxView = DPGlobal.modes.length - 1;
if ('maxView' in options) {
this.maxView = options.maxView;
} else if ('maxView' in this.element.data()) {
this.maxView = this.element.data('max-view');
}
this.maxView = DPGlobal.convertViewMode(this.maxView);
this.wheelViewModeNavigation = false;
if ('wheelViewModeNavigation' in options) {
this.wheelViewModeNavigation = options.wheelViewModeNavigation;
} else if ('wheelViewModeNavigation' in this.element.data()) {
this.wheelViewModeNavigation = this.element.data('view-mode-wheel-navigation');
}
this.wheelViewModeNavigationInverseDirection = false;
if ('wheelViewModeNavigationInverseDirection' in options) {
this.wheelViewModeNavigationInverseDirection = options.wheelViewModeNavigationInverseDirection;
} else if ('wheelViewModeNavigationInverseDirection' in this.element.data()) {
this.wheelViewModeNavigationInverseDirection = this.element.data('view-mode-wheel-navigation-inverse-dir');
}
this.wheelViewModeNavigationDelay = 100;
if ('wheelViewModeNavigationDelay' in options) {
this.wheelViewModeNavigationDelay = options.wheelViewModeNavigationDelay;
} else if ('wheelViewModeNavigationDelay' in this.element.data()) {
this.wheelViewModeNavigationDelay = this.element.data('view-mode-wheel-navigation-delay');
}
this.startViewMode = 2;
if ('startView' in options) {
this.startViewMode = options.startView;
} else if ('startView' in this.element.data()) {
this.startViewMode = this.element.data('start-view');
}
this.startViewMode = DPGlobal.convertViewMode(this.startViewMode);
this.viewMode = this.startViewMode;
this.viewSelect = this.minView;
if ('viewSelect' in options) {
this.viewSelect = options.viewSelect;
} else if ('viewSelect' in this.element.data()) {
this.viewSelect = this.element.data('view-select');
}
this.viewSelect = DPGlobal.convertViewMode(this.viewSelect);
this.forceParse = true;
if ('forceParse' in options) {
this.forceParse = options.forceParse;
} else if ('dateForceParse' in this.element.data()) {
this.forceParse = this.element.data('date-force-parse');
}
var template = this.bootcssVer === 3 ? DPGlobal.templateV3 : DPGlobal.template;
while (template.indexOf('{iconType}') !== -1) {
template = template.replace('{iconType}', this.icontype);
}
while (template.indexOf('{leftArrow}') !== -1) {
template = template.replace('{leftArrow}', this.icons.leftArrow);
}
while (template.indexOf('{rightArrow}') !== -1) {
template = template.replace('{rightArrow}', this.icons.rightArrow);
}
this.picker = $(template)
.appendTo(this.isInline ? this.element : this.container)
.on({
click:     $.proxy(this.click, this),
mousedown: $.proxy(this.mousedown, this)
});
if (this.wheelViewModeNavigation) {
if ($.fn.mousewheel) {
this.picker.on({mousewheel: $.proxy(this.mousewheel, this)});
} else {
console.log('Mouse Wheel event is not supported. Please include the jQuery Mouse Wheel plugin before enabling this option');
}
}
if (this.isInline) {
this.picker.addClass('datetimepicker-inline');
} else {
this.picker.addClass('datetimepicker-dropdown-' + this.pickerPosition + ' dropdown-menu');
}
if (this.isRTL) {
this.picker.addClass('datetimepicker-rtl');
var selector = this.bootcssVer === 3 ? '.prev span, .next span' : '.prev i, .next i';
this.picker.find(selector).toggleClass(this.icons.leftArrow + ' ' + this.icons.rightArrow);
}
$(document).on('mousedown touchend', this.clickedOutside);
this.autoclose = false;
if ('autoclose' in options) {
this.autoclose = options.autoclose;
} else if ('dateAutoclose' in this.element.data()) {
this.autoclose = this.element.data('date-autoclose');
}
this.keyboardNavigation = true;
if ('keyboardNavigation' in options) {
this.keyboardNavigation = options.keyboardNavigation;
} else if ('dateKeyboardNavigation' in this.element.data()) {
this.keyboardNavigation = this.element.data('date-keyboard-navigation');
}
this.todayBtn = (options.todayBtn || this.element.data('date-today-btn') || false);
this.clearBtn = (options.clearBtn || this.element.data('date-clear-btn') || false);
this.todayHighlight = (options.todayHighlight || this.element.data('date-today-highlight') || false);
this.weekStart = 0;
if (typeof options.weekStart !== 'undefined') {
this.weekStart = options.weekStart;
} else if (typeof this.element.data('date-weekstart') !== 'undefined') {
this.weekStart = this.element.data('date-weekstart');
} else if (typeof dates[this.language].weekStart !== 'undefined') {
this.weekStart = dates[this.language].weekStart;
}
this.weekStart = this.weekStart % 7;
this.weekEnd = ((this.weekStart + 6) % 7);
this.onRenderDay = function (date) {
var render = (options.onRenderDay || function () { return []; })(date);
if (typeof render === 'string') {
render = [render];
}
var res = ['day'];
return res.concat((render ? render : []));
};
this.onRenderHour = function (date) {
var render = (options.onRenderHour || function () { return []; })(date);
var res = ['hour'];
if (typeof render === 'string') {
render = [render];
}
return res.concat((render ? render : []));
};
this.onRenderMinute = function (date) {
var render = (options.onRenderMinute || function () { return []; })(date);
var res = ['minute'];
if (typeof render === 'string') {
render = [render];
}
if (date < this.startDate || date > this.endDate) {
res.push('disabled');
} else if (Math.floor(this.date.getUTCMinutes() / this.minuteStep) === Math.floor(date.getUTCMinutes() / this.minuteStep)) {
res.push('active');
}
return res.concat((render ? render : []));
};
this.onRenderYear = function (date) {
var render = (options.onRenderYear || function () { return []; })(date);
var res = ['year'];
if (typeof render === 'string') {
render = [render];
}
if (this.date.getUTCFullYear() === date.getUTCFullYear()) {
res.push('active');
}
var currentYear = date.getUTCFullYear();
var endYear = this.endDate.getUTCFullYear();
if (date < this.startDate || currentYear > endYear) {
res.push('disabled');
}
return res.concat((render ? render : []));
}
this.onRenderMonth = function (date) {
var render = (options.onRenderMonth || function () { return []; })(date);
var res = ['month'];
if (typeof render === 'string') {
render = [render];
}
return res.concat((render ? render : []));
}
this.startDate = new Date(-8639968443048000);
this.endDate = new Date(8639968443048000);
this.datesDisabled = [];
this.daysOfWeekDisabled = [];
this.setStartDate(options.startDate || this.element.data('date-startdate'));
this.setEndDate(options.endDate || this.element.data('date-enddate'));
this.setDatesDisabled(options.datesDisabled || this.element.data('date-dates-disabled'));
this.setDaysOfWeekDisabled(options.daysOfWeekDisabled || this.element.data('date-days-of-week-disabled'));
this.setMinutesDisabled(options.minutesDisabled || this.element.data('date-minute-disabled'));
this.setHoursDisabled(options.hoursDisabled || this.element.data('date-hour-disabled'));
this.fillDow();
this.fillMonths();
this.update();
this.showMode();
if (this.isInline) {
this.show();
}
};
Datetimepicker.prototype = {
constructor: Datetimepicker,
_events:       [],
_attachEvents: function () {
this._detachEvents();
if (this.isInput) {
this._events = [
[this.element, {
focus:   $.proxy(this.show, this),
keyup:   $.proxy(this.update, this),
keydown: $.proxy(this.keydown, this)
}]
];
}
else if (this.component && this.hasInput) {
this._events = [
[this.element.find('input'), {
focus:   $.proxy(this.show, this),
keyup:   $.proxy(this.update, this),
keydown: $.proxy(this.keydown, this)
}],
[this.component, {
click: $.proxy(this.show, this)
}]
];
if (this.componentReset) {
this._events.push([
this.componentReset,
{click: $.proxy(this.reset, this)}
]);
}
}
else if (this.element.is('div')) {
this.isInline = true;
}
else {
this._events = [
[this.element, {
click: $.proxy(this.show, this)
}]
];
}
for (var i = 0, el, ev; i < this._events.length; i++) {
el = this._events[i][0];
ev = this._events[i][1];
el.on(ev);
}
},
_detachEvents: function () {
for (var i = 0, el, ev; i < this._events.length; i++) {
el = this._events[i][0];
ev = this._events[i][1];
el.off(ev);
}
this._events = [];
},
show: function (e) {
this.picker.show();
this.height = this.component ? this.component.outerHeight() : this.element.outerHeight();
if (this.forceParse) {
this.update();
}
this.place();
$(window).on('resize', $.proxy(this.place, this));
if (e) {
e.stopPropagation();
e.preventDefault();
}
this.isVisible = true;
this.element.trigger({
type: 'show',
date: this.date
});
},
hide: function () {
if (!this.isVisible) return;
if (this.isInline) return;
this.picker.hide();
$(window).off('resize', this.place);
this.viewMode = this.startViewMode;
this.showMode();
if (!this.isInput) {
$(document).off('mousedown', this.hide);
}
if (
this.forceParse &&
(
this.isInput && this.element.val() ||
this.hasInput && this.element.find('input').val()
)
)
this.setValue();
this.isVisible = false;
this.element.trigger({
type: 'hide',
date: this.date
});
},
remove: function () {
this._detachEvents();
$(document).off('mousedown', this.clickedOutside);
this.picker.remove();
delete this.picker;
delete this.element.data().datetimepicker;
},
getDate: function () {
var d = this.getUTCDate();
if (d === null) {
return null;
}
return new Date(d.getTime() + (d.getTimezoneOffset() * 60000));
},
getUTCDate: function () {
return this.date;
},
getInitialDate: function () {
return this.initialDate
},
setInitialDate: function (initialDate) {
this.initialDate = initialDate;
},
setDate: function (d) {
this.setUTCDate(new Date(d.getTime() - (d.getTimezoneOffset() * 60000)));
},
setUTCDate: function (d) {
if (d >= this.startDate && d <= this.endDate) {
this.date = d;
this.setValue();
this.viewDate = this.date;
this.fill();
} else {
this.element.trigger({
type:      'outOfRange',
date:      d,
startDate: this.startDate,
endDate:   this.endDate
});
}
},
setFormat: function (format) {
this.format = DPGlobal.parseFormat(format, this.formatType);
var element;
if (this.isInput) {
element = this.element;
} else if (this.component) {
element = this.element.find('input');
}
if (element && element.val()) {
this.setValue();
}
},
setValue: function () {
var formatted = this.getFormattedDate();
if (!this.isInput) {
if (this.component) {
this.element.find('input').val(formatted);
}
this.element.data('date', formatted);
} else {
this.element.val(formatted);
}
if (this.linkField) {
$('#' + this.linkField).val(this.getFormattedDate(this.linkFormat));
}
},
getFormattedDate: function (format) {
format = format || this.format;
return DPGlobal.formatDate(this.date, format, this.language, this.formatType, this.timezone);
},
setStartDate: function (startDate) {
this.startDate = startDate || this.startDate;
if (this.startDate.valueOf() !== 8639968443048000) {
this.startDate = DPGlobal.parseDate(this.startDate, this.format, this.language, this.formatType, this.timezone);
}
this.update();
this.updateNavArrows();
},
setEndDate: function (endDate) {
this.endDate = endDate || this.endDate;
if (this.endDate.valueOf() !== 8639968443048000) {
this.endDate = DPGlobal.parseDate(this.endDate, this.format, this.language, this.formatType, this.timezone);
}
this.update();
this.updateNavArrows();
},
setDatesDisabled: function (datesDisabled) {
this.datesDisabled = datesDisabled || [];
if (!$.isArray(this.datesDisabled)) {
this.datesDisabled = this.datesDisabled.split(/,\s*/);
}
var mThis = this;
this.datesDisabled = $.map(this.datesDisabled, function (d) {
return DPGlobal.parseDate(d, mThis.format, mThis.language, mThis.formatType, mThis.timezone).toDateString();
});
this.update();
this.updateNavArrows();
},
setTitle: function (selector, value) {
return this.picker.find(selector)
.find('th:eq(1)')
.text(this.title === false ? value : this.title);
},
setDaysOfWeekDisabled: function (daysOfWeekDisabled) {
this.daysOfWeekDisabled = daysOfWeekDisabled || [];
if (!$.isArray(this.daysOfWeekDisabled)) {
this.daysOfWeekDisabled = this.daysOfWeekDisabled.split(/,\s*/);
}
this.daysOfWeekDisabled = $.map(this.daysOfWeekDisabled, function (d) {
return parseInt(d, 10);
});
this.update();
this.updateNavArrows();
},
setMinutesDisabled: function (minutesDisabled) {
this.minutesDisabled = minutesDisabled || [];
if (!$.isArray(this.minutesDisabled)) {
this.minutesDisabled = this.minutesDisabled.split(/,\s*/);
}
this.minutesDisabled = $.map(this.minutesDisabled, function (d) {
return parseInt(d, 10);
});
this.update();
this.updateNavArrows();
},
setHoursDisabled: function (hoursDisabled) {
this.hoursDisabled = hoursDisabled || [];
if (!$.isArray(this.hoursDisabled)) {
this.hoursDisabled = this.hoursDisabled.split(/,\s*/);
}
this.hoursDisabled = $.map(this.hoursDisabled, function (d) {
return parseInt(d, 10);
});
this.update();
this.updateNavArrows();
},
place: function () {
if (this.isInline) return;
if (!this.zIndex) {
var index_highest = 0;
$('div').each(function () {
var index_current = parseInt($(this).css('zIndex'), 10);
if (index_current > index_highest) {
index_highest = index_current;
}
});
this.zIndex = index_highest + 10;
}
var offset, top, left, containerOffset;
if (this.container instanceof $) {
containerOffset = this.container.offset();
} else {
containerOffset = $(this.container).offset();
}
if (this.component) {
offset = this.component.offset();
left = offset.left;
if (this.pickerPosition === 'bottom-left' || this.pickerPosition === 'top-left') {
left += this.component.outerWidth() - this.picker.outerWidth();
}
} else {
offset = this.element.offset();
left = offset.left;
if (this.pickerPosition === 'bottom-left' || this.pickerPosition === 'top-left') {
left += this.element.outerWidth() - this.picker.outerWidth();
}
}
var bodyWidth = document.body.clientWidth || window.innerWidth;
if (left + 220 > bodyWidth) {
left = bodyWidth - 220;
}
if (this.pickerPosition === 'top-left' || this.pickerPosition === 'top-right') {
top = offset.top - this.picker.outerHeight();
} else {
top = offset.top + this.height;
}
top = top - containerOffset.top;
left = left - containerOffset.left;
this.picker.css({
top:    top,
left:   left,
zIndex: this.zIndex
});
},
hour_minute: "^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]",
update: function () {
var date, fromArgs = false;
if (arguments && arguments.length && (typeof arguments[0] === 'string' || arguments[0] instanceof Date)) {
date = arguments[0];
fromArgs = true;
} else {
date = (this.isInput ? this.element.val() : this.element.find('input').val()) || this.element.data('date') || this.initialDate;
if (typeof date === 'string') {
date = date.replace(/^\s+|\s+$/g,'');
}
}
if (!date) {
date = new Date();
fromArgs = false;
}
if (typeof date === "string") {
if (new RegExp(this.hour_minute).test(date) || new RegExp(this.hour_minute + ":[0-5][0-9]").test(date)) {
date = this.getDate()
}
}
this.date = DPGlobal.parseDate(date, this.format, this.language, this.formatType, this.timezone);
if (fromArgs) this.setValue();
if (this.date < this.startDate) {
this.viewDate = new Date(this.startDate);
} else if (this.date > this.endDate) {
this.viewDate = new Date(this.endDate);
} else {
this.viewDate = new Date(this.date);
}
this.fill();
},
fillDow: function () {
var dowCnt = this.weekStart,
html = '<tr>';
while (dowCnt < this.weekStart + 7) {
html += '<th class="dow" id="dp-d-'+dates[this.language].daysMin[dowCnt]+'" headers="dp-month">' + dates[this.language].daysMin[(dowCnt++) % 7] + '</th>';
}
html += '</tr>';
this.picker.find('.datetimepicker-days thead').append(html);
},
fillMonths: function () {
var html = '';
var d = new Date(this.viewDate);
for (var i = 0; i < 12; i++) {
d.setUTCMonth(i);
var classes = this.onRenderMonth(d);
html += '<span class="' + classes.join(' ') + '">' + dates[this.language].monthsShort[i] + '</span>';
}
this.picker.find('.datetimepicker-months td').html(html);
},
fill: function () {
if (!this.date || !this.viewDate) {
return;
}
var d = new Date(this.viewDate),
year = d.getUTCFullYear(),
month = d.getUTCMonth(),
dayMonth = d.getUTCDate(),
hours = d.getUTCHours(),
startYear = this.startDate.getUTCFullYear(),
startMonth = this.startDate.getUTCMonth(),
endYear = this.endDate.getUTCFullYear(),
endMonth = this.endDate.getUTCMonth() + 1,
currentDate = (new UTCDate(this.date.getUTCFullYear(), this.date.getUTCMonth(), this.date.getUTCDate())).valueOf(),
today = new Date();
this.setTitle('.datetimepicker-days', dates[this.language].months[month] + ' ' + year)
if (this.formatViewType === 'time') {
var formatted = this.getFormattedDate();
this.setTitle('.datetimepicker-hours', formatted);
this.setTitle('.datetimepicker-minutes', formatted);
} else {
this.setTitle('.datetimepicker-hours', dayMonth + ' ' + dates[this.language].months[month] + ' ' + year);
this.setTitle('.datetimepicker-minutes', dayMonth + ' ' + dates[this.language].months[month] + ' ' + year);
}
this.picker.find('tfoot th.today')
.text(dates[this.language].today || dates['en'].today)
.toggle(this.todayBtn !== false);
this.picker.find('tfoot th.clear')
.text(dates[this.language].clear || dates['en'].clear)
.toggle(this.clearBtn !== false);
this.updateNavArrows();
this.fillMonths();
var prevMonth = UTCDate(year, month - 1, 28, 0, 0, 0, 0),
day = DPGlobal.getDaysInMonth(prevMonth.getUTCFullYear(), prevMonth.getUTCMonth());
prevMonth.setUTCDate(day);
prevMonth.setUTCDate(day - (prevMonth.getUTCDay() - this.weekStart + 7) % 7);
var nextMonth = new Date(prevMonth);
nextMonth.setUTCDate(nextMonth.getUTCDate() + 42);
nextMonth = nextMonth.valueOf();
var html = [];
var classes;
while (prevMonth.valueOf() < nextMonth) {
if (prevMonth.getUTCDay() === this.weekStart) {
html.push('<tr>');
}
classes = this.onRenderDay(prevMonth);
if (prevMonth.getUTCFullYear() < year || (prevMonth.getUTCFullYear() === year && prevMonth.getUTCMonth() < month)) {
classes.push('old');
} else if (prevMonth.getUTCFullYear() > year || (prevMonth.getUTCFullYear() === year && prevMonth.getUTCMonth() > month)) {
classes.push('new');
}
if (this.todayHighlight &&
prevMonth.getUTCFullYear() === today.getFullYear() &&
prevMonth.getUTCMonth() === today.getMonth() &&
prevMonth.getUTCDate() === today.getDate()) {
classes.push('today');
}
if (prevMonth.valueOf() === currentDate) {
classes.push('active');
}
if ((prevMonth.valueOf() + 86400000) <= this.startDate || prevMonth.valueOf() > this.endDate ||
$.inArray(prevMonth.getUTCDay(), this.daysOfWeekDisabled) !== -1 ||
$.inArray(prevMonth.toDateString(), this.datesDisabled) !== -1) {
classes.push('disabled');
}
html.push('<td headers="dp-month dp-d-'+dates[this.language].daysMin[prevMonth.getUTCDay()]+'" class="' + classes.join(' ') + '">' + prevMonth.getUTCDate() + '</td>');
if (prevMonth.getUTCDay() === this.weekEnd) {
html.push('</tr>');
}
prevMonth.setUTCDate(prevMonth.getUTCDate() + 1);
}
this.picker.find('.datetimepicker-days tbody').empty().append(html.join(''));
html = [];
var txt = '', meridian = '', meridianOld = '';
var hoursDisabled = this.hoursDisabled || [];
d = new Date(this.viewDate)
for (var i = 0; i < 24; i++) {
d.setUTCHours(i);
classes = this.onRenderHour(d);
if (hoursDisabled.indexOf(i) !== -1) {
classes.push('disabled');
}
var actual = UTCDate(year, month, dayMonth, i);
if ((actual.valueOf() + 3600000) <= this.startDate || actual.valueOf() > this.endDate) {
classes.push('disabled');
} else if (hours === i) {
classes.push('active');
}
if (this.showMeridian && dates[this.language].meridiem.length === 2) {
meridian = (i < 12 ? dates[this.language].meridiem[0] : dates[this.language].meridiem[1]);
if (meridian !== meridianOld) {
if (meridianOld !== '') {
html.push('</fieldset>');
}
html.push('<fieldset class="hour"><legend>' + meridian.toUpperCase() + '</legend>');
}
meridianOld = meridian;
txt = (i % 12 ? i % 12 : 12);
if (i < 12) {
classes.push('hour_am');
} else {
classes.push('hour_pm');
}
html.push('<span class="' + classes.join(' ') + '">' + txt + '</span>');
if (i === 23) {
html.push('</fieldset>');
}
} else {
txt = i + ':00';
html.push('<span class="' + classes.join(' ') + '">' + txt + '</span>');
}
}
this.picker.find('.datetimepicker-hours td').html(html.join(''));
html = [];
txt = '';
meridian = '';
meridianOld = '';
var minutesDisabled = this.minutesDisabled || [];
d = new Date(this.viewDate);
for (var i = 0; i < 60; i += this.minuteStep) {
if (minutesDisabled.indexOf(i) !== -1) continue;
d.setUTCMinutes(i);
d.setUTCSeconds(0);
classes = this.onRenderMinute(d);
if (this.showMeridian && dates[this.language].meridiem.length === 2) {
meridian = (hours < 12 ? dates[this.language].meridiem[0] : dates[this.language].meridiem[1]);
if (meridian !== meridianOld) {
if (meridianOld !== '') {
html.push('</fieldset>');
}
html.push('<fieldset class="minute"><legend>' + meridian.toUpperCase() + '</legend>');
}
meridianOld = meridian;
txt = (hours % 12 ? hours % 12 : 12);
html.push('<span class="' + classes.join(' ') + '">' + txt + ':' + (i < 10 ? '0' + i : i) + '</span>');
if (i === 59) {
html.push('</fieldset>');
}
} else {
txt = i + ':00';
html.push('<span class="' + classes.join(' ') + '">' + hours + ':' + (i < 10 ? '0' + i : i) + '</span>');
}
}
this.picker.find('.datetimepicker-minutes td').html(html.join(''));
var currentYear = this.date.getUTCFullYear();
var months = this.setTitle('.datetimepicker-months', year)
.end()
.find('.month').removeClass('active');
if (currentYear === year) {
months.eq(this.date.getUTCMonth()).addClass('active');
}
if (year < startYear || year > endYear) {
months.addClass('disabled');
}
if (year === startYear) {
months.slice(0, startMonth).addClass('disabled');
}
if (year === endYear) {
months.slice(endMonth).addClass('disabled');
}
html = '';
year = parseInt(year / 10, 10) * 10;
var yearCont = this.setTitle('.datetimepicker-years', year + '-' + (year + 9))
.end()
.find('td');
year -= 1;
d = new Date(this.viewDate);
for (var i = -1; i < 11; i++) {
d.setUTCFullYear(year);
classes = this.onRenderYear(d);
if (i === -1 || i === 10) {
classes.push(old);
}
html += '<span class="' + classes.join(' ') + '">' + year + '</span>';
year += 1;
}
yearCont.html(html);
this.place();
},
updateNavArrows: function () {
var d = new Date(this.viewDate),
year = d.getUTCFullYear(),
month = d.getUTCMonth(),
day = d.getUTCDate(),
hour = d.getUTCHours();
switch (this.viewMode) {
case 0:
if (year <= this.startDate.getUTCFullYear()
&& month <= this.startDate.getUTCMonth()
&& day <= this.startDate.getUTCDate()
&& hour <= this.startDate.getUTCHours()) {
this.picker.find('.prev').css({visibility: 'hidden'});
} else {
this.picker.find('.prev').css({visibility: 'visible'});
}
if (year >= this.endDate.getUTCFullYear()
&& month >= this.endDate.getUTCMonth()
&& day >= this.endDate.getUTCDate()
&& hour >= this.endDate.getUTCHours()) {
this.picker.find('.next').css({visibility: 'hidden'});
} else {
this.picker.find('.next').css({visibility: 'visible'});
}
break;
case 1:
if (year <= this.startDate.getUTCFullYear()
&& month <= this.startDate.getUTCMonth()
&& day <= this.startDate.getUTCDate()) {
this.picker.find('.prev').css({visibility: 'hidden'});
} else {
this.picker.find('.prev').css({visibility: 'visible'});
}
if (year >= this.endDate.getUTCFullYear()
&& month >= this.endDate.getUTCMonth()
&& day >= this.endDate.getUTCDate()) {
this.picker.find('.next').css({visibility: 'hidden'});
} else {
this.picker.find('.next').css({visibility: 'visible'});
}
break;
case 2:
if (year <= this.startDate.getUTCFullYear()
&& month <= this.startDate.getUTCMonth()) {
this.picker.find('.prev').css({visibility: 'hidden'});
} else {
this.picker.find('.prev').css({visibility: 'visible'});
}
if (year >= this.endDate.getUTCFullYear()
&& month >= this.endDate.getUTCMonth()) {
this.picker.find('.next').css({visibility: 'hidden'});
} else {
this.picker.find('.next').css({visibility: 'visible'});
}
break;
case 3:
case 4:
if (year <= this.startDate.getUTCFullYear()) {
this.picker.find('.prev').css({visibility: 'hidden'});
} else {
this.picker.find('.prev').css({visibility: 'visible'});
}
if (year >= this.endDate.getUTCFullYear()) {
this.picker.find('.next').css({visibility: 'hidden'});
} else {
this.picker.find('.next').css({visibility: 'visible'});
}
break;
}
},
mousewheel: function (e) {
e.preventDefault();
e.stopPropagation();
if (this.wheelPause) {
return;
}
this.wheelPause = true;
var originalEvent = e.originalEvent;
var delta = originalEvent.wheelDelta;
var mode = delta > 0 ? 1 : (delta === 0) ? 0 : -1;
if (this.wheelViewModeNavigationInverseDirection) {
mode = -mode;
}
this.showMode(mode);
setTimeout($.proxy(function () {
this.wheelPause = false
}, this), this.wheelViewModeNavigationDelay);
},
click: function (e) {
e.stopPropagation();
e.preventDefault();
var target = $(e.target).closest('span, td, th, legend');
if (target.is('.' + this.icontype)) {
target = $(target).parent().closest('span, td, th, legend');
}
if (target.length === 1) {
if (target.is('.disabled')) {
this.element.trigger({
type:      'outOfRange',
date:      this.viewDate,
startDate: this.startDate,
endDate:   this.endDate
});
return;
}
switch (target[0].nodeName.toLowerCase()) {
case 'th':
switch (target[0].className) {
case 'switch':
this.showMode(1);
break;
case 'prev':
case 'next':
var dir = DPGlobal.modes[this.viewMode].navStep * (target[0].className === 'prev' ? -1 : 1);
switch (this.viewMode) {
case 0:
this.viewDate = this.moveHour(this.viewDate, dir);
break;
case 1:
this.viewDate = this.moveDate(this.viewDate, dir);
break;
case 2:
this.viewDate = this.moveMonth(this.viewDate, dir);
break;
case 3:
case 4:
this.viewDate = this.moveYear(this.viewDate, dir);
break;
}
this.fill();
this.element.trigger({
type:      target[0].className + ':' + this.convertViewModeText(this.viewMode),
date:      this.viewDate,
startDate: this.startDate,
endDate:   this.endDate
});
break;
case 'clear':
this.reset();
if (this.autoclose) {
this.hide();
}
break;
case 'today':
var date = new Date();
date = UTCDate(date.getFullYear(), date.getMonth(), date.getDate(), date.getHours(), date.getMinutes(), date.getSeconds(), 0);
if (date < this.startDate) date = this.startDate;
else if (date > this.endDate) date = this.endDate;
this.viewMode = this.startViewMode;
this.showMode(0);
this._setDate(date);
this.fill();
if (this.autoclose) {
this.hide();
}
break;
}
break;
case 'span':
if (!target.is('.disabled')) {
var year = this.viewDate.getUTCFullYear(),
month = this.viewDate.getUTCMonth(),
day = this.viewDate.getUTCDate(),
hours = this.viewDate.getUTCHours(),
minutes = this.viewDate.getUTCMinutes(),
seconds = this.viewDate.getUTCSeconds();
if (target.is('.month')) {
this.viewDate.setUTCDate(1);
month = target.parent().find('span').index(target);
day = this.viewDate.getUTCDate();
this.viewDate.setUTCMonth(month);
this.element.trigger({
type: 'changeMonth',
date: this.viewDate
});
if (this.viewSelect >= 3) {
this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
}
} else if (target.is('.year')) {
this.viewDate.setUTCDate(1);
year = parseInt(target.text(), 10) || 0;
this.viewDate.setUTCFullYear(year);
this.element.trigger({
type: 'changeYear',
date: this.viewDate
});
if (this.viewSelect >= 4) {
this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
}
} else if (target.is('.hour')) {
hours = parseInt(target.text(), 10) || 0;
if (target.hasClass('hour_am') || target.hasClass('hour_pm')) {
if (hours === 12 && target.hasClass('hour_am')) {
hours = 0;
} else if (hours !== 12 && target.hasClass('hour_pm')) {
hours += 12;
}
}
this.viewDate.setUTCHours(hours);
this.element.trigger({
type: 'changeHour',
date: this.viewDate
});
if (this.viewSelect >= 1) {
this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
}
} else if (target.is('.minute')) {
minutes = parseInt(target.text().substr(target.text().indexOf(':') + 1), 10) || 0;
this.viewDate.setUTCMinutes(minutes);
this.element.trigger({
type: 'changeMinute',
date: this.viewDate
});
if (this.viewSelect >= 0) {
this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
}
}
if (this.viewMode !== 0) {
var oldViewMode = this.viewMode;
this.showMode(-1);
this.fill();
if (oldViewMode === this.viewMode && this.autoclose) {
this.hide();
}
} else {
this.fill();
if (this.autoclose) {
this.hide();
}
}
}
break;
case 'td':
if (target.is('.day') && !target.is('.disabled')) {
var day = parseInt(target.text(), 10) || 1;
var year = this.viewDate.getUTCFullYear(),
month = this.viewDate.getUTCMonth(),
hours = this.viewDate.getUTCHours(),
minutes = this.viewDate.getUTCMinutes(),
seconds = this.viewDate.getUTCSeconds();
if (target.is('.old')) {
if (month === 0) {
month = 11;
year -= 1;
} else {
month -= 1;
}
} else if (target.is('.new')) {
if (month === 11) {
month = 0;
year += 1;
} else {
month += 1;
}
}
this.viewDate.setUTCFullYear(year);
this.viewDate.setUTCMonth(month, day);
this.element.trigger({
type: 'changeDay',
date: this.viewDate
});
if (this.viewSelect >= 2) {
this._setDate(UTCDate(year, month, day, hours, minutes, seconds, 0));
}
}
var oldViewMode = this.viewMode;
this.showMode(-1);
this.fill();
if (oldViewMode === this.viewMode && this.autoclose) {
this.hide();
}
break;
}
}
},
_setDate: function (date, which) {
if (!which || which === 'date')
this.date = date;
if (!which || which === 'view')
this.viewDate = date;
this.fill();
this.setValue();
var element;
if (this.isInput) {
element = this.element;
} else if (this.component) {
element = this.element.find('input');
}
if (element) {
element.change();
}
this.element.trigger({
type: 'changeDate',
date: this.getDate()
});
if(date === null)
this.date = this.viewDate;
},
moveMinute: function (date, dir) {
if (!dir) return date;
var new_date = new Date(date.valueOf());
new_date.setUTCMinutes(new_date.getUTCMinutes() + (dir * this.minuteStep));
return new_date;
},
moveHour: function (date, dir) {
if (!dir) return date;
var new_date = new Date(date.valueOf());
new_date.setUTCHours(new_date.getUTCHours() + dir);
return new_date;
},
moveDate: function (date, dir) {
if (!dir) return date;
var new_date = new Date(date.valueOf());
new_date.setUTCDate(new_date.getUTCDate() + dir);
return new_date;
},
moveMonth: function (date, dir) {
if (!dir) return date;
var new_date = new Date(date.valueOf()),
day = new_date.getUTCDate(),
month = new_date.getUTCMonth(),
mag = Math.abs(dir),
new_month, test;
dir = dir > 0 ? 1 : -1;
if (mag === 1) {
test = dir === -1
? function () {
return new_date.getUTCMonth() === month;
}
: function () {
return new_date.getUTCMonth() !== new_month;
};
new_month = month + dir;
new_date.setUTCMonth(new_month);
if (new_month < 0 || new_month > 11)
new_month = (new_month + 12) % 12;
} else {
for (var i = 0; i < mag; i++)
new_date = this.moveMonth(new_date, dir);
new_month = new_date.getUTCMonth();
new_date.setUTCDate(day);
test = function () {
return new_month !== new_date.getUTCMonth();
};
}
while (test()) {
new_date.setUTCDate(--day);
new_date.setUTCMonth(new_month);
}
return new_date;
},
moveYear: function (date, dir) {
return this.moveMonth(date, dir * 12);
},
dateWithinRange: function (date) {
return date >= this.startDate && date <= this.endDate;
},
keydown: function (e) {
if (this.picker.is(':not(:visible)')) {
if (e.keyCode === 27)
this.show();
return;
}
var dateChanged = false,
dir, newDate, newViewDate;
switch (e.keyCode) {
case 27:
this.hide();
e.preventDefault();
break;
case 37:
case 39:
if (!this.keyboardNavigation) break;
dir = e.keyCode === 37 ? -1 : 1;
var viewMode = this.viewMode;
if (e.ctrlKey) {
viewMode += 2;
} else if (e.shiftKey) {
viewMode += 1;
}
if (viewMode === 4) {
newDate = this.moveYear(this.date, dir);
newViewDate = this.moveYear(this.viewDate, dir);
} else if (viewMode === 3) {
newDate = this.moveMonth(this.date, dir);
newViewDate = this.moveMonth(this.viewDate, dir);
} else if (viewMode === 2) {
newDate = this.moveDate(this.date, dir);
newViewDate = this.moveDate(this.viewDate, dir);
} else if (viewMode === 1) {
newDate = this.moveHour(this.date, dir);
newViewDate = this.moveHour(this.viewDate, dir);
} else if (viewMode === 0) {
newDate = this.moveMinute(this.date, dir);
newViewDate = this.moveMinute(this.viewDate, dir);
}
if (this.dateWithinRange(newDate)) {
this.date = newDate;
this.viewDate = newViewDate;
this.setValue();
this.update();
e.preventDefault();
dateChanged = true;
}
break;
case 38:
case 40:
if (!this.keyboardNavigation) break;
dir = e.keyCode === 38 ? -1 : 1;
viewMode = this.viewMode;
if (e.ctrlKey) {
viewMode += 2;
} else if (e.shiftKey) {
viewMode += 1;
}
if (viewMode === 4) {
newDate = this.moveYear(this.date, dir);
newViewDate = this.moveYear(this.viewDate, dir);
} else if (viewMode === 3) {
newDate = this.moveMonth(this.date, dir);
newViewDate = this.moveMonth(this.viewDate, dir);
} else if (viewMode === 2) {
newDate = this.moveDate(this.date, dir * 7);
newViewDate = this.moveDate(this.viewDate, dir * 7);
} else if (viewMode === 1) {
if (this.showMeridian) {
newDate = this.moveHour(this.date, dir * 6);
newViewDate = this.moveHour(this.viewDate, dir * 6);
} else {
newDate = this.moveHour(this.date, dir * 4);
newViewDate = this.moveHour(this.viewDate, dir * 4);
}
} else if (viewMode === 0) {
newDate = this.moveMinute(this.date, dir * 4);
newViewDate = this.moveMinute(this.viewDate, dir * 4);
}
if (this.dateWithinRange(newDate)) {
this.date = newDate;
this.viewDate = newViewDate;
this.setValue();
this.update();
e.preventDefault();
dateChanged = true;
}
break;
case 13:
if (this.viewMode !== 0) {
var oldViewMode = this.viewMode;
this.showMode(-1);
this.fill();
if (oldViewMode === this.viewMode && this.autoclose) {
this.hide();
}
} else {
this.fill();
if (this.autoclose) {
this.hide();
}
}
e.preventDefault();
break;
case 9:
this.hide();
break;
}
if (dateChanged) {
var element;
if (this.isInput) {
element = this.element;
} else if (this.component) {
element = this.element.find('input');
}
if (element) {
element.change();
}
this.element.trigger({
type: 'changeDate',
date: this.getDate()
});
}
},
showMode: function (dir) {
if (dir) {
var newViewMode = Math.max(0, Math.min(DPGlobal.modes.length - 1, this.viewMode + dir));
if (newViewMode >= this.minView && newViewMode <= this.maxView) {
this.element.trigger({
type:        'changeMode',
date:        this.viewDate,
oldViewMode: this.viewMode,
newViewMode: newViewMode
});
this.viewMode = newViewMode;
}
}
this.picker.find('>div').hide().filter('.datetimepicker-' + DPGlobal.modes[this.viewMode].clsName).css('display', 'block');
this.updateNavArrows();
},
reset: function () {
this._setDate(null, 'date');
},
convertViewModeText:  function (viewMode) {
switch (viewMode) {
case 4:
return 'decade';
case 3:
return 'year';
case 2:
return 'month';
case 1:
return 'day';
case 0:
return 'hour';
}
}
};
var old = $.fn.datetimepicker;
$.fn.datetimepicker = function (option) {
var args = Array.apply(null, arguments);
args.shift();
var internal_return;
this.each(function () {
var $this = $(this),
data = $this.data('datetimepicker'),
options = typeof option === 'object' && option;
if (!data) {
$this.data('datetimepicker', (data = new Datetimepicker(this, $.extend({}, $.fn.datetimepicker.defaults, options))));
}
if (typeof option === 'string' && typeof data[option] === 'function') {
internal_return = data[option].apply(data, args);
if (internal_return !== undefined) {
return false;
}
}
});
if (internal_return !== undefined)
return internal_return;
else
return this;
};
$.fn.datetimepicker.defaults = {
};
$.fn.datetimepicker.Constructor = Datetimepicker;
var dates = $.fn.datetimepicker.dates = {
en: {
days:        ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
daysShort:   ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
daysMin:     ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
months:      ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
meridiem:    ['am', 'pm'],
suffix:      ['st', 'nd', 'rd', 'th'],
today:       'Today',
clear:       'Clear'
}
};
var DPGlobal = {
modes:            [
{
clsName: 'minutes',
navFnc:  'Hours',
navStep: 1
},
{
clsName: 'hours',
navFnc:  'Date',
navStep: 1
},
{
clsName: 'days',
navFnc:  'Month',
navStep: 1
},
{
clsName: 'months',
navFnc:  'FullYear',
navStep: 1
},
{
clsName: 'years',
navFnc:  'FullYear',
navStep: 10
}
],
isLeapYear:       function (year) {
return (((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0))
},
getDaysInMonth:   function (year, month) {
return [31, (DPGlobal.isLeapYear(year) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month]
},
getDefaultFormat: function (type, field) {
if (type === 'standard') {
if (field === 'input')
return 'yyyy-mm-dd hh:ii';
else
return 'yyyy-mm-dd hh:ii:ss';
} else if (type === 'php') {
if (field === 'input')
return 'Y-m-d H:i';
else
return 'Y-m-d H:i:s';
} else {
throw new Error('Invalid format type.');
}
},
validParts: function (type) {
if (type === 'standard') {
return /t|hh?|HH?|p|P|z|Z|ii?|ss?|dd?|DD?|mm?|MM?|yy(?:yy)?/g;
} else if (type === 'php') {
return /[dDjlNwzFmMnStyYaABgGhHis]/g;
} else {
throw new Error('Invalid format type.');
}
},
nonpunctuation: /[^ -\/:-@\[-`{-~\t\n\rTZ]+/g,
parseFormat: function (format, type) {
var separators = format.replace(this.validParts(type), '\0').split('\0'),
parts = format.match(this.validParts(type));
if (!separators || !separators.length || !parts || parts.length === 0) {
throw new Error('Invalid date format.');
}
return {separators: separators, parts: parts};
},
parseDate: function (date, format, language, type, timezone) {
if (date instanceof Date) {
var dateUTC = new Date(date.valueOf() - date.getTimezoneOffset() * 60000);
dateUTC.setMilliseconds(0);
return dateUTC;
}
if (/^\d{4}\-\d{1,2}\-\d{1,2}$/.test(date)) {
format = this.parseFormat('yyyy-mm-dd', type);
}
if (/^\d{4}\-\d{1,2}\-\d{1,2}[T ]\d{1,2}\:\d{1,2}$/.test(date)) {
format = this.parseFormat('yyyy-mm-dd hh:ii', type);
}
if (/^\d{4}\-\d{1,2}\-\d{1,2}[T ]\d{1,2}\:\d{1,2}\:\d{1,2}[Z]{0,1}$/.test(date)) {
format = this.parseFormat('yyyy-mm-dd hh:ii:ss', type);
}
if (/^[-+]\d+[dmwy]([\s,]+[-+]\d+[dmwy])*$/.test(date)) {
var part_re = /([-+]\d+)([dmwy])/,
parts = date.match(/([-+]\d+)([dmwy])/g),
part, dir;
date = new Date();
for (var i = 0; i < parts.length; i++) {
part = part_re.exec(parts[i]);
dir = parseInt(part[1]);
switch (part[2]) {
case 'd':
date.setUTCDate(date.getUTCDate() + dir);
break;
case 'm':
date = Datetimepicker.prototype.moveMonth.call(Datetimepicker.prototype, date, dir);
break;
case 'w':
date.setUTCDate(date.getUTCDate() + dir * 7);
break;
case 'y':
date = Datetimepicker.prototype.moveYear.call(Datetimepicker.prototype, date, dir);
break;
}
}
return UTCDate(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(), date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds(), 0);
}
var parts = date && date.toString().match(this.nonpunctuation) || [],
date = new Date(0, 0, 0, 0, 0, 0, 0),
parsed = {},
setters_order = ['hh', 'h', 'ii', 'i', 'ss', 's', 'yyyy', 'yy', 'M', 'MM', 'm', 'mm', 'D', 'DD', 'd', 'dd', 'H', 'HH', 'p', 'P', 'z', 'Z'],
setters_map = {
hh:   function (d, v) {
return d.setUTCHours(v);
},
h:    function (d, v) {
return d.setUTCHours(v);
},
HH:   function (d, v) {
return d.setUTCHours(v === 12 ? 0 : v);
},
H:    function (d, v) {
return d.setUTCHours(v === 12 ? 0 : v);
},
ii:   function (d, v) {
return d.setUTCMinutes(v);
},
i:    function (d, v) {
return d.setUTCMinutes(v);
},
ss:   function (d, v) {
return d.setUTCSeconds(v);
},
s:    function (d, v) {
return d.setUTCSeconds(v);
},
yyyy: function (d, v) {
return d.setUTCFullYear(v);
},
yy:   function (d, v) {
return d.setUTCFullYear(2000 + v);
},
m:    function (d, v) {
v -= 1;
while (v < 0) v += 12;
v %= 12;
d.setUTCMonth(v);
while (d.getUTCMonth() !== v)
if (isNaN(d.getUTCMonth()))
return d;
else
d.setUTCDate(d.getUTCDate() - 1);
return d;
},
d:    function (d, v) {
return d.setUTCDate(v);
},
p:    function (d, v) {
return d.setUTCHours(v === 1 ? d.getUTCHours() + 12 : d.getUTCHours());
},
z:    function () {
return timezone
}
},
val, filtered, part;
setters_map['M'] = setters_map['MM'] = setters_map['mm'] = setters_map['m'];
setters_map['dd'] = setters_map['d'];
setters_map['P'] = setters_map['p'];
setters_map['Z'] = setters_map['z'];
date = UTCDate(date.getFullYear(), date.getMonth(), date.getDate(), date.getHours(), date.getMinutes(), date.getSeconds());
if (parts.length === format.parts.length) {
for (var i = 0, cnt = format.parts.length; i < cnt; i++) {
val = parseInt(parts[i], 10);
part = format.parts[i];
if (isNaN(val)) {
switch (part) {
case 'MM':
filtered = $(dates[language].months).filter(function () {
var m = this.slice(0, parts[i].length),
p = parts[i].slice(0, m.length);
return m === p;
});
val = $.inArray(filtered[0], dates[language].months) + 1;
break;
case 'M':
filtered = $(dates[language].monthsShort).filter(function () {
var m = this.slice(0, parts[i].length),
p = parts[i].slice(0, m.length);
return m.toLowerCase() === p.toLowerCase();
});
val = $.inArray(filtered[0], dates[language].monthsShort) + 1;
break;
case 'p':
case 'P':
val = $.inArray(parts[i].toLowerCase(), dates[language].meridiem);
break;
case 'z':
case 'Z':
timezone;
break;
}
}
parsed[part] = val;
}
for (var i = 0, s; i < setters_order.length; i++) {
s = setters_order[i];
if (s in parsed && !isNaN(parsed[s]))
setters_map[s](date, parsed[s])
}
}
return date;
},
formatDate:       function (date, format, language, type, timezone) {
if (date === null) {
return '';
}
var val;
if (type === 'standard') {
val = {
t:    date.getTime(),
yy:   date.getUTCFullYear().toString().substring(2),
yyyy: date.getUTCFullYear(),
m:    date.getUTCMonth() + 1,
M:    dates[language].monthsShort[date.getUTCMonth()],
MM:   dates[language].months[date.getUTCMonth()],
d:    date.getUTCDate(),
D:    dates[language].daysShort[date.getUTCDay()],
DD:   dates[language].days[date.getUTCDay()],
p:    (dates[language].meridiem.length === 2 ? dates[language].meridiem[date.getUTCHours() < 12 ? 0 : 1] : ''),
h:    date.getUTCHours(),
i:    date.getUTCMinutes(),
s:    date.getUTCSeconds(),
z:    timezone
};
if (dates[language].meridiem.length === 2) {
val.H = (val.h % 12 === 0 ? 12 : val.h % 12);
}
else {
val.H = val.h;
}
val.HH = (val.H < 10 ? '0' : '') + val.H;
val.P = val.p.toUpperCase();
val.Z = val.z;
val.hh = (val.h < 10 ? '0' : '') + val.h;
val.ii = (val.i < 10 ? '0' : '') + val.i;
val.ss = (val.s < 10 ? '0' : '') + val.s;
val.dd = (val.d < 10 ? '0' : '') + val.d;
val.mm = (val.m < 10 ? '0' : '') + val.m;
} else if (type === 'php') {
val = {
y: date.getUTCFullYear().toString().substring(2),
Y: date.getUTCFullYear(),
F: dates[language].months[date.getUTCMonth()],
M: dates[language].monthsShort[date.getUTCMonth()],
n: date.getUTCMonth() + 1,
t: DPGlobal.getDaysInMonth(date.getUTCFullYear(), date.getUTCMonth()),
j: date.getUTCDate(),
l: dates[language].days[date.getUTCDay()],
D: dates[language].daysShort[date.getUTCDay()],
w: date.getUTCDay(),
N: (date.getUTCDay() === 0 ? 7 : date.getUTCDay()),
S: (date.getUTCDate() % 10 <= dates[language].suffix.length ? dates[language].suffix[date.getUTCDate() % 10 - 1] : ''),
a: (dates[language].meridiem.length === 2 ? dates[language].meridiem[date.getUTCHours() < 12 ? 0 : 1] : ''),
g: (date.getUTCHours() % 12 === 0 ? 12 : date.getUTCHours() % 12),
G: date.getUTCHours(),
i: date.getUTCMinutes(),
s: date.getUTCSeconds()
};
val.m = (val.n < 10 ? '0' : '') + val.n;
val.d = (val.j < 10 ? '0' : '') + val.j;
val.A = val.a.toString().toUpperCase();
val.h = (val.g < 10 ? '0' : '') + val.g;
val.H = (val.G < 10 ? '0' : '') + val.G;
val.i = (val.i < 10 ? '0' : '') + val.i;
val.s = (val.s < 10 ? '0' : '') + val.s;
} else {
throw new Error('Invalid format type.');
}
var date = [],
seps = $.extend([], format.separators);
for (var i = 0, cnt = format.parts.length; i < cnt; i++) {
if (seps.length) {
date.push(seps.shift());
}
date.push(val[format.parts[i]]);
}
if (seps.length) {
date.push(seps.shift());
}
return date.join('');
},
convertViewMode:  function (viewMode) {
switch (viewMode) {
case 4:
case 'decade':
viewMode = 4;
break;
case 3:
case 'year':
viewMode = 3;
break;
case 2:
case 'month':
viewMode = 2;
break;
case 1:
case 'day':
viewMode = 1;
break;
case 0:
case 'hour':
viewMode = 0;
break;
}
return viewMode;
},
headTemplate: '<thead>' +
'<tr>' +
'<th class="prev" id="dp-prev"><i class="{iconType} {leftArrow}"/></th>' +
'<th colspan="5" class="switch" id="dp-month"></th>' +
'<th class="next" id="dp-next"><i class="{iconType} {rightArrow}"/></th>' +
'</tr>' +
'</thead>',
headTemplateV3: '<thead>' +
'<tr>' +
'<th class="prev" id="dp-prev"><span class="{iconType} {leftArrow}"></span> </th>' +
'<th colspan="5" class="switch" id="dp-month"></th>' +
'<th class="next" id="dp-next"><span class="{iconType} {rightArrow}"></span> </th>' +
'</tr>' +
'</thead>',
contTemplate: '<tbody><tr><td colspan="7" headers="dp-month dp-d-no"></td></tr></tbody>',
footTemplate: '<tfoot>' +
'<tr><th colspan="7" class="today" id="today" headers="today"></th></tr>' +
'<tr><th colspan="7" class="clear" id="clear" headers="clear"></th></tr>' +
'</tfoot>'
};
DPGlobal.template = '<div class="datetimepicker">' +
'<div class="datetimepicker-minutes">' +
'<table class=" table-condensed">' +
DPGlobal.headTemplate +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-hours">' +
'<table class=" table-condensed">' +
DPGlobal.headTemplate +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-days">' +
'<table class=" table-condensed">' +
DPGlobal.headTemplate +
'<tbody></tbody>' +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-months">' +
'<table class="table-condensed">' +
DPGlobal.headTemplate +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-years">' +
'<table class="table-condensed">' +
DPGlobal.headTemplate +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'</div>';
DPGlobal.templateV3 = '<div class="datetimepicker">' +
'<div class="datetimepicker-minutes">' +
'<table class=" table-condensed">' +
DPGlobal.headTemplateV3 +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-hours">' +
'<table class=" table-condensed">' +
DPGlobal.headTemplateV3 +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-days">' +
'<table class=" table-condensed">' +
DPGlobal.headTemplateV3 +
'<tbody></tbody>' +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-months">' +
'<table class="table-condensed">' +
DPGlobal.headTemplateV3 +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'<div class="datetimepicker-years">' +
'<table class="table-condensed">' +
DPGlobal.headTemplateV3 +
DPGlobal.contTemplate +
DPGlobal.footTemplate +
'</table>' +
'</div>' +
'</div>';
$.fn.datetimepicker.DPGlobal = DPGlobal;
$.fn.datetimepicker.noConflict = function () {
$.fn.datetimepicker = old;
return this;
};
$(document).on(
'focus.datetimepicker.data-api click.datetimepicker.data-api',
'[data-provide="datetimepicker"]',
function (e) {
var $this = $(this);
if ($this.data('datetimepicker')) return;
e.preventDefault();
$this.datetimepicker('show');
}
);
$(function () {
$('[data-provide="datetimepicker-inline"]').datetimepicker();
});
}));
;(function($){
$.fn.datetimepicker.dates['zh-tw'] = {
days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
daysMin:  ["日", "一", "二", "三", "四", "五", "六", "日"],
months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
today: "今天",
suffix: [],
meridiem: ["上午", "下午"]
};
$.fn.datetimepicker.dates['zh-cn'] = {
days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
daysMin:  ["日", "一", "二", "三", "四", "五", "六", "日"],
months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
today: "今天",
suffix: [],
meridiem: ["上午", "下午"]
};
}(jQuery));
(function(){
var m = Math,
vendor = (/webkit/i).test(navigator.appVersion) ? 'webkit' :
(/firefox/i).test(navigator.userAgent) ? 'Moz' :
'opera' in window ? 'O' : '',
has3d = 'WebKitCSSMatrix' in window && 'm11' in new WebKitCSSMatrix(),
hasTouch = 'ontouchstart' in window,
hasTransform = vendor + 'Transform' in document.documentElement.style,
isAndroid = (/android/gi).test(navigator.appVersion),
isIDevice = (/iphone|ipad/gi).test(navigator.appVersion),
isPlaybook = (/playbook/gi).test(navigator.appVersion),
hasTransitionEnd = isIDevice || isPlaybook,
nextFrame = (function() {
return window.requestAnimationFrame
|| window.webkitRequestAnimationFrame
|| window.mozRequestAnimationFrame
|| window.oRequestAnimationFrame
|| window.msRequestAnimationFrame
|| function(callback) { return setTimeout(callback, 1); }
})(),
cancelFrame = (function () {
return window.cancelRequestAnimationFrame
|| window.webkitCancelRequestAnimationFrame
|| window.mozCancelRequestAnimationFrame
|| window.oCancelRequestAnimationFrame
|| window.msCancelRequestAnimationFrame
|| clearTimeout
})(),
RESIZE_EV = 'onorientationchange' in window ? 'orientationchange' : 'resize',
START_EV = hasTouch ? 'touchstart' : 'mousedown',
MOVE_EV = hasTouch ? 'touchmove' : 'mousemove',
END_EV = hasTouch ? 'touchend' : 'mouseup',
CANCEL_EV = hasTouch ? 'touchcancel' : 'mouseup',
WHEEL_EV = vendor == 'Moz' ? 'DOMMouseScroll' : 'mousewheel',
trnOpen = 'translate' + (has3d ? '3d(' : '('),
trnClose = has3d ? ',0)' : ')',
iScroll = function (el, options) {
var that = this,
doc = document,
i;
that.wrapper = typeof el == 'object' ? el : doc.getElementById(el);
that.wrapper.style.overflow = 'hidden';
that.scroller = that.wrapper.children[0];
that.options = {
hScroll: true,
vScroll: true,
bounce: true,
bounceLock: false,
momentum: true,
lockDirection: true,
useTransform: true,
useTransition: false,
checkDOMChanges: false,
hScrollbar: true,
vScrollbar: true,
fixedScrollbar: isAndroid,
hideScrollbar: isIDevice,
fadeScrollbar: isIDevice && has3d,
scrollbarClass: '',
zoom: false,
zoomMin: 1,
zoomMax: 4,
doubleTapZoom: 2,
wheelAction: 'scroll',
snap: false,
snapThreshold: 1,
onRefresh: null,
onBeforeScrollStart: function (e) { e.preventDefault(); },
onScrollStart: null,
onBeforeScrollMove: null,
onScrollMove: null,
onBeforeScrollEnd: null,
onScrollEnd: null,
onTouchEnd: null,
onDestroy: null,
onZoomStart: null,
onZoom: null,
onZoomEnd: null
};
for (i in options) that.options[i] = options[i];
that.options.useTransform = hasTransform ? that.options.useTransform : false;
that.options.hScrollbar = that.options.hScroll && that.options.hScrollbar;
that.options.vScrollbar = that.options.vScroll && that.options.vScrollbar;
that.options.zoom = that.options.useTransform && that.options.zoom;
that.options.useTransition = hasTransitionEnd && that.options.useTransition;
that.scroller.style[vendor + 'TransitionProperty'] = that.options.useTransform ? '-' + vendor.toLowerCase() + '-transform' : 'top left';
that.scroller.style[vendor + 'TransitionDuration'] = '0';
that.scroller.style[vendor + 'TransformOrigin'] = '0 0';
if (that.options.useTransition) that.scroller.style[vendor + 'TransitionTimingFunction'] = 'cubic-bezier(0.33,0.66,0.66,1)';
if (that.options.useTransform) that.scroller.style[vendor + 'Transform'] = trnOpen + '0,0' + trnClose;
else that.scroller.style.cssText += ';position:absolute;top:0;left:0';
if (that.options.useTransition) that.options.fixedScrollbar = true;
that.refresh();
that._bind(RESIZE_EV, window);
that._bind(START_EV);
if (!hasTouch) {
that._bind('mouseout', that.wrapper);
that._bind(WHEEL_EV);
}
if (that.options.checkDOMChanges) that.checkDOMTime = setInterval(function () {
that._checkDOMChanges();
}, 500);
};
iScroll.prototype = {
enabled: true,
x: 0,
y: 0,
steps: [],
scale: 1,
currPageX: 0, currPageY: 0,
pagesX: [], pagesY: [],
aniTime: null,
wheelZoomCount: 0,
handleEvent: function (e) {
var that = this;
switch(e.type) {
case START_EV:
if (!hasTouch && e.button !== 0) return;
that._start(e);
break;
case MOVE_EV: that._move(e); break;
case END_EV:
case CANCEL_EV: that._end(e); break;
case RESIZE_EV: that._resize(); break;
case WHEEL_EV: that._wheel(e); break;
case 'mouseout': that._mouseout(e); break;
case 'webkitTransitionEnd': that._transitionEnd(e); break;
}
},
_checkDOMChanges: function () {
if (this.moved || this.zoomed || this.animating ||
(this.scrollerW == this.scroller.offsetWidth * this.scale && this.scrollerH == this.scroller.offsetHeight * this.scale)) return;
this.refresh();
},
_scrollbar: function (dir) {
var that = this,
doc = document,
bar;
if (!that[dir + 'Scrollbar']) {
if (that[dir + 'ScrollbarWrapper']) {
if (hasTransform) that[dir + 'ScrollbarIndicator'].style[vendor + 'Transform'] = '';
that[dir + 'ScrollbarWrapper'].parentNode.removeChild(that[dir + 'ScrollbarWrapper']);
that[dir + 'ScrollbarWrapper'] = null;
that[dir + 'ScrollbarIndicator'] = null;
}
return;
}
if (!that[dir + 'ScrollbarWrapper']) {
bar = doc.createElement('div');
if (that.options.scrollbarClass) bar.className = that.options.scrollbarClass + dir.toUpperCase();
else bar.style.cssText = 'position:absolute;z-index:100;' + (dir == 'h' ? 'height:7px;bottom:1px;left:2px;right:' + (that.vScrollbar ? '7' : '2') + 'px' : 'width:7px;bottom:' + (that.hScrollbar ? '7' : '2') + 'px;top:2px;right:1px');
bar.style.cssText += ';pointer-events:none;-' + vendor + '-transition-property:opacity;-' + vendor + '-transition-duration:' + (that.options.fadeScrollbar ? '350ms' : '0') + ';overflow:hidden;opacity:' + (that.options.hideScrollbar ? '0' : '1');
that.wrapper.appendChild(bar);
that[dir + 'ScrollbarWrapper'] = bar;
bar = doc.createElement('div');
if (!that.options.scrollbarClass) {
bar.style.cssText = 'position:absolute;z-index:100;background:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.9);-' + vendor + '-background-clip:padding-box;-' + vendor + '-box-sizing:border-box;' + (dir == 'h' ? 'height:100%' : 'width:100%') + ';-' + vendor + '-border-radius:3px;border-radius:3px';
}
bar.style.cssText += ';pointer-events:none;-' + vendor + '-transition-property:-' + vendor + '-transform;-' + vendor + '-transition-timing-function:cubic-bezier(0.33,0.66,0.66,1);-' + vendor + '-transition-duration:0;-' + vendor + '-transform:' + trnOpen + '0,0' + trnClose;
if (that.options.useTransition) bar.style.cssText += ';-' + vendor + '-transition-timing-function:cubic-bezier(0.33,0.66,0.66,1)';
that[dir + 'ScrollbarWrapper'].appendChild(bar);
that[dir + 'ScrollbarIndicator'] = bar;
}
if (dir == 'h') {
that.hScrollbarSize = that.hScrollbarWrapper.clientWidth;
that.hScrollbarIndicatorSize = m.max(m.round(that.hScrollbarSize * that.hScrollbarSize / that.scrollerW), 8);
that.hScrollbarIndicator.style.width = that.hScrollbarIndicatorSize + 'px';
that.hScrollbarMaxScroll = that.hScrollbarSize - that.hScrollbarIndicatorSize;
that.hScrollbarProp = that.hScrollbarMaxScroll / that.maxScrollX;
} else {
that.vScrollbarSize = that.vScrollbarWrapper.clientHeight;
that.vScrollbarIndicatorSize = m.max(m.round(that.vScrollbarSize * that.vScrollbarSize / that.scrollerH), 8);
that.vScrollbarIndicator.style.height = that.vScrollbarIndicatorSize + 'px';
that.vScrollbarMaxScroll = that.vScrollbarSize - that.vScrollbarIndicatorSize;
that.vScrollbarProp = that.vScrollbarMaxScroll / that.maxScrollY;
}
that._scrollbarPos(dir, true);
},
_resize: function () {
var that = this;
setTimeout(function () { that.refresh(); }, isAndroid ? 200 : 0);
},
_pos: function (x, y) {
x = this.hScroll ? x : 0;
y = this.vScroll ? y : 0;
if (this.options.useTransform) {
this.scroller.style[vendor + 'Transform'] = trnOpen + x + 'px,' + y + 'px' + trnClose + ' scale(' + this.scale + ')';
} else {
x = m.round(x);
y = m.round(y);
this.scroller.style.left = x + 'px';
this.scroller.style.top = y + 'px';
}
this.x = x;
this.y = y;
this._scrollbarPos('h');
this._scrollbarPos('v');
},
_scrollbarPos: function (dir, hidden) {
var that = this,
pos = dir == 'h' ? that.x : that.y,
size;
if (!that[dir + 'Scrollbar']) return;
pos = that[dir + 'ScrollbarProp'] * pos;
if (pos < 0) {
if (!that.options.fixedScrollbar) {
size = that[dir + 'ScrollbarIndicatorSize'] + m.round(pos * 3);
if (size < 8) size = 8;
that[dir + 'ScrollbarIndicator'].style[dir == 'h' ? 'width' : 'height'] = size + 'px';
}
pos = 0;
} else if (pos > that[dir + 'ScrollbarMaxScroll']) {
if (!that.options.fixedScrollbar) {
size = that[dir + 'ScrollbarIndicatorSize'] - m.round((pos - that[dir + 'ScrollbarMaxScroll']) * 3);
if (size < 8) size = 8;
that[dir + 'ScrollbarIndicator'].style[dir == 'h' ? 'width' : 'height'] = size + 'px';
pos = that[dir + 'ScrollbarMaxScroll'] + (that[dir + 'ScrollbarIndicatorSize'] - size);
} else {
pos = that[dir + 'ScrollbarMaxScroll'];
}
}
that[dir + 'ScrollbarWrapper'].style[vendor + 'TransitionDelay'] = '0';
that[dir + 'ScrollbarWrapper'].style.opacity = hidden && that.options.hideScrollbar ? '0' : '1';
that[dir + 'ScrollbarIndicator'].style[vendor + 'Transform'] = trnOpen + (dir == 'h' ? pos + 'px,0' : '0,' + pos + 'px') + trnClose;
},
_start: function (e) {
var that = this,
point = hasTouch ? e.touches[0] : e,
matrix, x, y,
c1, c2;
if (!that.enabled) return;
if (that.options.onBeforeScrollStart) that.options.onBeforeScrollStart.call(that, e);
if (that.options.useTransition || that.options.zoom) that._transitionTime(0);
that.moved = false;
that.animating = false;
that.zoomed = false;
that.distX = 0;
that.distY = 0;
that.absDistX = 0;
that.absDistY = 0;
that.dirX = 0;
that.dirY = 0;
if (that.options.zoom && hasTouch && e.touches.length > 1) {
c1 = m.abs(e.touches[0].pageX-e.touches[1].pageX);
c2 = m.abs(e.touches[0].pageY-e.touches[1].pageY);
that.touchesDistStart = m.sqrt(c1 * c1 + c2 * c2);
that.originX = m.abs(e.touches[0].pageX + e.touches[1].pageX - that.wrapperOffsetLeft * 2) / 2 - that.x;
that.originY = m.abs(e.touches[0].pageY + e.touches[1].pageY - that.wrapperOffsetTop * 2) / 2 - that.y;
if (that.options.onZoomStart) that.options.onZoomStart.call(that, e);
}
if (that.options.momentum) {
if (that.options.useTransform) {
matrix = getComputedStyle(that.scroller, null)[vendor + 'Transform'].replace(/[^0-9-.,]/g, '').split(',');
x = matrix[4] * 1;
y = matrix[5] * 1;
} else {
x = getComputedStyle(that.scroller, null).left.replace(/[^0-9-]/g, '') * 1;
y = getComputedStyle(that.scroller, null).top.replace(/[^0-9-]/g, '') * 1;
}
if (x != that.x || y != that.y) {
if (that.options.useTransition) that._unbind('webkitTransitionEnd');
else cancelFrame(that.aniTime);
that.steps = [];
that._pos(x, y);
}
}
that.absStartX = that.x;
that.absStartY = that.y;
that.startX = that.x;
that.startY = that.y;
that.pointX = point.pageX;
that.pointY = point.pageY;
that.startTime = e.timeStamp || (new Date()).getTime();
if (that.options.onScrollStart) that.options.onScrollStart.call(that, e);
that._bind(MOVE_EV);
that._bind(END_EV);
that._bind(CANCEL_EV);
},
_move: function (e) {
var that = this,
point = hasTouch ? e.touches[0] : e,
deltaX = point.pageX - that.pointX,
deltaY = point.pageY - that.pointY,
newX = that.x + deltaX,
newY = that.y + deltaY,
c1, c2, scale,
timestamp = e.timeStamp || (new Date()).getTime();
if (that.options.onBeforeScrollMove) that.options.onBeforeScrollMove.call(that, e);
if (that.options.zoom && hasTouch && e.touches.length > 1) {
c1 = m.abs(e.touches[0].pageX - e.touches[1].pageX);
c2 = m.abs(e.touches[0].pageY - e.touches[1].pageY);
that.touchesDist = m.sqrt(c1*c1+c2*c2);
that.zoomed = true;
scale = 1 / that.touchesDistStart * that.touchesDist * this.scale;
if (scale < that.options.scaleMin) scale = 0.5 * that.options.scaleMin * Math.pow(2.0, scale / that.options.scaleMin);
else if (scale > that.options.scaleMax) scale = 2.0 * that.options.scaleMax * Math.pow(0.5, that.options.scaleMax / scale);
that.lastScale = scale / this.scale;
newX = this.originX - this.originX * that.lastScale + this.x,
newY = this.originY - this.originY * that.lastScale + this.y;
this.scroller.style[vendor + 'Transform'] = trnOpen + newX + 'px,' + newY + 'px' + trnClose + ' scale(' + scale + ')';
if (that.options.onZoom) that.options.onZoom.call(that, e);
return;
}
that.pointX = point.pageX;
that.pointY = point.pageY;
if (newX > 0 || newX < that.maxScrollX) {
newX = that.options.bounce ? that.x + (deltaX / 2) : newX >= 0 || that.maxScrollX >= 0 ? 0 : that.maxScrollX;
}
if (newY > 0 || newY < that.maxScrollY) {
newY = that.options.bounce ? that.y + (deltaY / 2) : newY >= 0 || that.maxScrollY >= 0 ? 0 : that.maxScrollY;
}
if (that.absDistX < 6 && that.absDistY < 6) {
that.distX += deltaX;
that.distY += deltaY;
that.absDistX = m.abs(that.distX);
that.absDistY = m.abs(that.distY);
return;
}
if (that.options.lockDirection) {
if (that.absDistX > that.absDistY + 5) {
newY = that.y;
deltaY = 0;
} else if (that.absDistY > that.absDistX + 5) {
newX = that.x;
deltaX = 0;
}
}
that.moved = true;
that._pos(newX, newY);
that.dirX = deltaX > 0 ? -1 : deltaX < 0 ? 1 : 0;
that.dirY = deltaY > 0 ? -1 : deltaY < 0 ? 1 : 0;
if (timestamp - that.startTime > 300) {
that.startTime = timestamp;
that.startX = that.x;
that.startY = that.y;
}
if (that.options.onScrollMove) that.options.onScrollMove.call(that, e);
},
_end: function (e) {
if (hasTouch && e.touches.length != 0) return;
var that = this,
point = hasTouch ? e.changedTouches[0] : e,
target, ev,
momentumX = { dist:0, time:0 },
momentumY = { dist:0, time:0 },
duration = (e.timeStamp || (new Date()).getTime()) - that.startTime,
newPosX = that.x,
newPosY = that.y,
distX, distY,
newDuration,
scale;
that._unbind(MOVE_EV);
that._unbind(END_EV);
that._unbind(CANCEL_EV);
if (that.options.onBeforeScrollEnd) that.options.onBeforeScrollEnd.call(that, e);
if (that.zoomed) {
scale = that.scale * that.lastScale;
scale = Math.max(that.options.zoomMin, scale);
scale = Math.min(that.options.zoomMax, scale);
that.lastScale = scale / that.scale;
that.scale = scale;
that.x = that.originX - that.originX * that.lastScale + that.x;
that.y = that.originY - that.originY * that.lastScale + that.y;
that.scroller.style[vendor + 'TransitionDuration'] = '200ms';
that.scroller.style[vendor + 'Transform'] = trnOpen + that.x + 'px,' + that.y + 'px' + trnClose + ' scale(' + that.scale + ')';
that.zoomed = false;
that.refresh();
if (that.options.onZoomEnd) that.options.onZoomEnd.call(that, e);
return;
}
if (!that.moved) {
if (hasTouch) {
if (that.doubleTapTimer && that.options.zoom) {
clearTimeout(that.doubleTapTimer);
that.doubleTapTimer = null;
if (that.options.onZoomStart) that.options.onZoomStart.call(that, e);
that.zoom(that.pointX, that.pointY, that.scale == 1 ? that.options.doubleTapZoom : 1);
} else {
that.doubleTapTimer = setTimeout(function () {
that.doubleTapTimer = null;
target = point.target;
while (target.nodeType != 1) target = target.parentNode;
if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA') {
ev = document.createEvent('MouseEvents');
ev.initMouseEvent('click', true, true, e.view, 1,
point.screenX, point.screenY, point.clientX, point.clientY,
e.ctrlKey, e.altKey, e.shiftKey, e.metaKey,
0, null);
ev._fake = true;
target.dispatchEvent(ev);
}
}, that.options.zoom ? 250 : 0);
}
}
that._resetPos(200);
if (that.options.onTouchEnd) that.options.onTouchEnd.call(that, e);
return;
}
if (duration < 300 && that.options.momentum) {
momentumX = newPosX ? that._momentum(newPosX - that.startX, duration, -that.x, that.scrollerW - that.wrapperW + that.x, that.options.bounce ? that.wrapperW : 0) : momentumX;
momentumY = newPosY ? that._momentum(newPosY - that.startY, duration, -that.y, (that.maxScrollY < 0 ? that.scrollerH - that.wrapperH + that.y : 0), that.options.bounce ? that.wrapperH : 0) : momentumY;
newPosX = that.x + momentumX.dist;
newPosY = that.y + momentumY.dist;
if ((that.x > 0 && newPosX > 0) || (that.x < that.maxScrollX && newPosX < that.maxScrollX)) momentumX = { dist:0, time:0 };
if ((that.y > 0 && newPosY > 0) || (that.y < that.maxScrollY && newPosY < that.maxScrollY)) momentumY = { dist:0, time:0 };
}
if (momentumX.dist || momentumY.dist) {
newDuration = m.max(m.max(momentumX.time, momentumY.time), 10);
if (that.options.snap) {
distX = newPosX - that.absStartX;
distY = newPosY - that.absStartY;
if (m.abs(distX) < that.options.snapThreshold && m.abs(distY) < that.options.snapThreshold) { that.scrollTo(that.absStartX, that.absStartY, 200); }
else {
snap = that._snap(newPosX, newPosY);
newPosX = snap.x;
newPosY = snap.y;
newDuration = m.max(snap.time, newDuration);
}
}
that.scrollTo(newPosX, newPosY, newDuration);
if (that.options.onTouchEnd) that.options.onTouchEnd.call(that, e);
return;
}
if (that.options.snap) {
distX = newPosX - that.absStartX;
distY = newPosY - that.absStartY;
if (m.abs(distX) < that.options.snapThreshold && m.abs(distY) < that.options.snapThreshold) that.scrollTo(that.absStartX, that.absStartY, 200);
else {
snap = that._snap(that.x, that.y);
if (snap.x != that.x || snap.y != that.y) that.scrollTo(snap.x, snap.y, snap.time);
}
if (that.options.onTouchEnd) that.options.onTouchEnd.call(that, e);
return;
}
that._resetPos(200);
if (that.options.onTouchEnd) that.options.onTouchEnd.call(that, e);
},
_resetPos: function (time) {
var that = this,
resetX = that.x >= 0 ? 0 : that.x < that.maxScrollX ? that.maxScrollX : that.x,
resetY = that.y >= 0 || that.maxScrollY > 0 ? 0 : that.y < that.maxScrollY ? that.maxScrollY : that.y;
if (resetX == that.x && resetY == that.y) {
if (that.moved) {
that.moved = false;
if (that.options.onScrollEnd) that.options.onScrollEnd.call(that);
}
if (that.hScrollbar && that.options.hideScrollbar) {
if (vendor == 'webkit') that.hScrollbarWrapper.style[vendor + 'TransitionDelay'] = '300ms';
that.hScrollbarWrapper.style.opacity = '0';
}
if (that.vScrollbar && that.options.hideScrollbar) {
if (vendor == 'webkit') that.vScrollbarWrapper.style[vendor + 'TransitionDelay'] = '300ms';
that.vScrollbarWrapper.style.opacity = '0';
}
return;
}
that.scrollTo(resetX, resetY, time || 0);
},
_wheel: function (e) {
var that = this,
duration,
wheelDeltaX, wheelDeltaY,
deltaX, deltaY,
deltaScale;
if ('wheelDeltaX' in e) {
wheelDeltaX = e.wheelDeltaX / 12;
wheelDeltaY = e.wheelDeltaY / 12;
} else if ('detail' in e) {
wheelDeltaX = wheelDeltaY = -e.detail * 3;
} else {
wheelDeltaX = wheelDeltaY = -e.wheelDelta;
}
if (that.options.wheelAction == 'zoom') {
deltaScale = that.scale * Math.pow(2, 1/3 * (wheelDeltaY ? wheelDeltaY / Math.abs(wheelDeltaY) : 0));
if (wheelDeltaY < that.options.zoomMin) wheelDeltaY = that.options.zoomMin;
if (wheelDeltaY > that.options.zoomMax) wheelDeltaY = that.options.zoomMax;
if (wheelDeltaY != that.scale) {
if (!that.wheelZoomCount && that.options.onZoomStart) that.options.onZoomStart.call(that, e);
that.wheelZoomCount++;
that.zoom(e.pageX, e.pageY, wheelDeltaY, 400);
setTimeout(function() {
that.wheelZoomCount--;
if (!that.wheelZoomCount && that.options.onZoomEnd) that.options.onZoomEnd.call(that, e);
}, 400);
}
return;
}
deltaX = that.x + wheelDeltaX;
deltaY = that.y + wheelDeltaY;
if (deltaX > 0) deltaX = 0;
else if (deltaX < that.maxScrollX) deltaX = that.maxScrollX;
if (deltaY > 0) deltaY = 0;
else if (deltaY < that.maxScrollY) deltaY = that.maxScrollY;
that.scrollTo(deltaX, deltaY, 0);
},
_mouseout: function (e) {
var t = e.relatedTarget;
if (!t) {
this._end(e);
return;
}
while (t = t.parentNode) if (t == this.wrapper) return;
this._end(e);
},
_transitionEnd: function (e) {
var that = this;
if (e.target != that.scroller) return;
that._unbind('webkitTransitionEnd');
that._startAni();
},
_startAni: function () {
var that = this,
startX = that.x, startY = that.y,
startTime = (new Date).getTime(),
step, easeOut;
if (that.animating) return;
if (!that.steps.length) {
that._resetPos(400);
return;
}
step = that.steps.shift();
if (step.x == startX && step.y == startY) step.time = 0;
that.animating = true;
that.moved = true;
if (that.options.useTransition) {
that._transitionTime(step.time);
that._pos(step.x, step.y);
that.animating = false;
if (step.time) that._bind('webkitTransitionEnd');
else that._resetPos(0);
return;
}
(function animate () {
var now = (new Date).getTime(),
newX, newY;
if (now >= startTime + step.time) {
that._pos(step.x, step.y);
that.animating = false;
if (that.options.onAnimationEnd) that.options.onAnimationEnd.call(that);
that._startAni();
return;
}
now = (now - startTime) / step.time - 1;
easeOut = m.sqrt(1 - now * now);
newX = (step.x - startX) * easeOut + startX;
newY = (step.y - startY) * easeOut + startY;
that._pos(newX, newY);
if (that.animating) that.aniTime = nextFrame(animate);
})();
},
_transitionTime: function (time) {
time += 'ms';
this.scroller.style[vendor + 'TransitionDuration'] = time;
if (this.hScrollbar) this.hScrollbarIndicator.style[vendor + 'TransitionDuration'] = time;
if (this.vScrollbar) this.vScrollbarIndicator.style[vendor + 'TransitionDuration'] = time;
},
_momentum: function (dist, time, maxDistUpper, maxDistLower, size) {
var deceleration = 0.0006,
speed = m.abs(dist) / time,
newDist = (speed * speed) / (2 * deceleration),
newTime = 0, outsideDist = 0;
if (dist > 0 && newDist > maxDistUpper) {
outsideDist = size / (6 / (newDist / speed * deceleration));
maxDistUpper = maxDistUpper + outsideDist;
speed = speed * maxDistUpper / newDist;
newDist = maxDistUpper;
} else if (dist < 0 && newDist > maxDistLower) {
outsideDist = size / (6 / (newDist / speed * deceleration));
maxDistLower = maxDistLower + outsideDist;
speed = speed * maxDistLower / newDist;
newDist = maxDistLower;
}
newDist = newDist * (dist < 0 ? -1 : 1);
newTime = speed / deceleration;
return { dist: newDist, time: m.round(newTime) };
},
_offset: function (el) {
var left = -el.offsetLeft,
top = -el.offsetTop;
while (el = el.offsetParent) {
left -= el.offsetLeft;
top -= el.offsetTop;
}
if (el != this.wrapper) {
left *= this.scale;
top *= this.scale;
}
return { left: left, top: top };
},
_snap: function (x, y) {
var that = this,
i, l,
page, time,
sizeX, sizeY;
page = that.pagesX.length - 1;
for (i=0, l=that.pagesX.length; i<l; i++) {
if (x >= that.pagesX[i]) {
page = i;
break;
}
}
if (page == that.currPageX && page > 0 && that.dirX < 0) page--;
x = that.pagesX[page];
sizeX = m.abs(x - that.pagesX[that.currPageX]);
sizeX = sizeX ? m.abs(that.x - x) / sizeX * 500 : 0;
that.currPageX = page;
page = that.pagesY.length-1;
for (i=0; i<page; i++) {
if (y >= that.pagesY[i]) {
page = i;
break;
}
}
if (page == that.currPageY && page > 0 && that.dirY < 0) page--;
y = that.pagesY[page];
sizeY = m.abs(y - that.pagesY[that.currPageY]);
sizeY = sizeY ? m.abs(that.y - y) / sizeY * 500 : 0;
that.currPageY = page;
time = m.round(m.max(sizeX, sizeY)) || 200;
return { x: x, y: y, time: time };
},
_bind: function (type, el, bubble) {
(el || this.scroller).addEventListener(type, this, !!bubble);
},
_unbind: function (type, el, bubble) {
(el || this.scroller).removeEventListener(type, this, !!bubble);
},
destroy: function () {
var that = this;
that.scroller.style[vendor + 'Transform'] = '';
that.hScrollbar = false;
that.vScrollbar = false;
that._scrollbar('h');
that._scrollbar('v');
that._unbind(RESIZE_EV, window);
that._unbind(START_EV);
that._unbind(MOVE_EV);
that._unbind(END_EV);
that._unbind(CANCEL_EV);
if (that.options.hasTouch) {
that._unbind('mouseout', that.wrapper);
that._unbind(WHEEL_EV);
}
if (that.options.useTransition) that._unbind('webkitTransitionEnd');
if (that.options.checkDOMChanges) clearInterval(that.checkDOMTime);
if (that.options.onDestroy) that.options.onDestroy.call(that);
},
refresh: function () {
var that = this,
offset,
pos = 0,
page = 0;
if (that.scale < that.options.zoomMin) that.scale = that.options.zoomMin;
that.wrapperW = that.wrapper.clientWidth || 1;
that.wrapperH = that.wrapper.clientHeight || 1;
that.scrollerW = m.round(that.scroller.offsetWidth * that.scale);
that.scrollerH = m.round(that.scroller.offsetHeight * that.scale);
that.maxScrollX = that.wrapperW - that.scrollerW;
that.maxScrollY = that.wrapperH - that.scrollerH;
that.dirX = 0;
that.dirY = 0;
that.hScroll = that.options.hScroll && that.maxScrollX < 0;
that.vScroll = that.options.vScroll && (!that.options.bounceLock && !that.hScroll || that.scrollerH > that.wrapperH);
that.hScrollbar = that.hScroll && that.options.hScrollbar;
that.vScrollbar = that.vScroll && that.options.vScrollbar && that.scrollerH > that.wrapperH;
offset = that._offset(that.wrapper);
that.wrapperOffsetLeft = -offset.left;
that.wrapperOffsetTop = -offset.top;
if (typeof that.options.snap == 'string') {
that.pagesX = [];
that.pagesY = [];
els = that.scroller.querySelectorAll(that.options.snap);
for (i=0, l=els.length; i<l; i++) {
pos = that._offset(els[i]);
pos.left += that.wrapperOffsetLeft;
pos.top += that.wrapperOffsetTop;
that.pagesX[i] = pos.left < that.maxScrollX ? that.maxScrollX : pos.left * that.scale;
that.pagesY[i] = pos.top < that.maxScrollY ? that.maxScrollY : pos.top * that.scale;
}
} else if (that.options.snap) {
that.pagesX = [];
while (pos >= that.maxScrollX) {
that.pagesX[page] = pos;
pos = pos - that.wrapperW;
page++;
}
if (that.maxScrollX%that.wrapperW) that.pagesX[that.pagesX.length] = that.maxScrollX - that.pagesX[that.pagesX.length-1] + that.pagesX[that.pagesX.length-1];
pos = 0;
page = 0;
that.pagesY = [];
while (pos >= that.maxScrollY) {
that.pagesY[page] = pos;
pos = pos - that.wrapperH;
page++;
}
if (that.maxScrollY%that.wrapperH) that.pagesY[that.pagesY.length] = that.maxScrollY - that.pagesY[that.pagesY.length-1] + that.pagesY[that.pagesY.length-1];
}
that._scrollbar('h');
that._scrollbar('v');
if (!that.zoomed) {
that.scroller.style[vendor + 'TransitionDuration'] = '0';
that._resetPos(200);
}
},
scrollTo: function (x, y, time, relative) {
var that = this,
step = x,
i, l;
that.stop();
if (!step.length) step = [{ x: x, y: y, time: time, relative: relative }];
for (i=0, l=step.length; i<l; i++) {
if (step[i].relative) { step[i].x = that.x - step[i].x; step[i].y = that.y - step[i].y; }
that.steps.push({ x: step[i].x, y: step[i].y, time: step[i].time || 0 });
}
that._startAni();
},
scrollToElement: function (el, time) {
var that = this, pos;
el = el.nodeType ? el : that.scroller.querySelector(el);
if (!el) return;
pos = that._offset(el);
pos.left += that.wrapperOffsetLeft;
pos.top += that.wrapperOffsetTop;
pos.left = pos.left > 0 ? 0 : pos.left < that.maxScrollX ? that.maxScrollX : pos.left;
pos.top = pos.top > 0 ? 0 : pos.top < that.maxScrollY ? that.maxScrollY : pos.top;
time = time === undefined ? m.max(m.abs(pos.left)*2, m.abs(pos.top)*2) : time;
that.scrollTo(pos.left, pos.top, time);
},
scrollToPage: function (pageX, pageY, time) {
var that = this, x, y;
if (that.options.snap) {
pageX = pageX == 'next' ? that.currPageX+1 : pageX == 'prev' ? that.currPageX-1 : pageX;
pageY = pageY == 'next' ? that.currPageY+1 : pageY == 'prev' ? that.currPageY-1 : pageY;
pageX = pageX < 0 ? 0 : pageX > that.pagesX.length-1 ? that.pagesX.length-1 : pageX;
pageY = pageY < 0 ? 0 : pageY > that.pagesY.length-1 ? that.pagesY.length-1 : pageY;
that.currPageX = pageX;
that.currPageY = pageY;
x = that.pagesX[pageX];
y = that.pagesY[pageY];
} else {
x = -that.wrapperW * pageX;
y = -that.wrapperH * pageY;
if (x < that.maxScrollX) x = that.maxScrollX;
if (y < that.maxScrollY) y = that.maxScrollY;
}
that.scrollTo(x, y, time || 400);
},
disable: function () {
this.stop();
this._resetPos(0);
this.enabled = false;
this._unbind(MOVE_EV);
this._unbind(END_EV);
this._unbind(CANCEL_EV);
},
enable: function () {
this.enabled = true;
},
stop: function () {
if (this.options.useTransition) this._unbind('webkitTransitionEnd');
else cancelFrame(this.aniTime);
this.steps = [];
this.moved = false;
this.animating = false;
},
zoom: function (x, y, scale, time) {
var that = this,
relScale = scale / that.scale;
if (!that.options.useTransform) return;
that.zoomed = true;
time = time === undefined ? 200 : time;
x = x - that.wrapperOffsetLeft - that.x;
y = y - that.wrapperOffsetTop - that.y;
that.x = x - x * relScale + that.x;
that.y = y - y * relScale + that.y;
that.scale = scale;
that.refresh();
that.x = that.x > 0 ? 0 : that.x < that.maxScrollX ? that.maxScrollX : that.x;
that.y = that.y > 0 ? 0 : that.y < that.maxScrollY ? that.maxScrollY : that.y;
that.scroller.style[vendor + 'TransitionDuration'] = time + 'ms';
that.scroller.style[vendor + 'Transform'] = trnOpen + that.x + 'px,' + that.y + 'px' + trnClose + ' scale(' + scale + ')';
that.zoomed = false;
},
isReady: function () {
return !this.moved && !this.zoomed && !this.animating;
}
};
if (typeof exports !== 'undefined') exports.iScroll = iScroll;
else window.iScroll = iScroll;
})();
jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(x,t,b,c,d){return jQuery.easing[jQuery.easing.def](x,t,b,c,d)},easeInQuad:function(x,t,b,c,d){return c*(t/=d)*t+b},easeOutQuad:function(x,t,b,c,d){return-c*(t/=d)*(t-2)+b},easeInOutQuad:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t+b;return-c/2*((--t)*(t-2)-1)+b},easeInCubic:function(x,t,b,c,d){return c*(t/=d)*t*t+b},easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b},easeInOutCubic:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t+b;return c/2*((t-=2)*t*t+2)+b},easeInQuart:function(x,t,b,c,d){return c*(t/=d)*t*t*t+b},easeOutQuart:function(x,t,b,c,d){return-c*((t=t/d-1)*t*t*t-1)+b},easeInOutQuart:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t+b;return-c/2*((t-=2)*t*t*t-2)+b},easeInQuint:function(x,t,b,c,d){return c*(t/=d)*t*t*t*t+b},easeOutQuint:function(x,t,b,c,d){return c*((t=t/d-1)*t*t*t*t+1)+b},easeInOutQuint:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t*t+b;return c/2*((t-=2)*t*t*t*t+2)+b},easeInSine:function(x,t,b,c,d){return-c*Math.cos(t/d*(Math.PI/2))+c+b},easeOutSine:function(x,t,b,c,d){return c*Math.sin(t/d*(Math.PI/2))+b},easeInOutSine:function(x,t,b,c,d){return-c/2*(Math.cos(Math.PI*t/d)-1)+b},easeInExpo:function(x,t,b,c,d){return(t==0)?b:c*Math.pow(2,10*(t/d-1))+b},easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b},easeInOutExpo:function(x,t,b,c,d){if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b;return c/2*(-Math.pow(2,-10*--t)+2)+b},easeInCirc:function(x,t,b,c,d){return-c*(Math.sqrt(1-(t/=d)*t)-1)+b},easeOutCirc:function(x,t,b,c,d){return c*Math.sqrt(1-(t=t/d-1)*t)+b},easeInOutCirc:function(x,t,b,c,d){if((t/=d/2)<1)return-c/2*(Math.sqrt(1-t*t)-1)+b;return c/2*(Math.sqrt(1-(t-=2)*t)+1)+b},easeInElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b},easeOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b},easeInOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b},easeInBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b},easeOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},easeInOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b},easeInBounce:function(x,t,b,c,d){return c-jQuery.easing.easeOutBounce(x,d-t,0,c,d)+b},easeOutBounce:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b}},easeInOutBounce:function(x,t,b,c,d){if(t<d/2)return jQuery.easing.easeInBounce(x,t*2,0,c,d)*.5+b;return jQuery.easing.easeOutBounce(x,t*2-d,0,c,d)*.5+c*.5+b}});
(function($) {
$.fn.iphoneSlide = function(method) {
var defaults = {
handler: null,
pageHandler : null,
slideHandler : null,
direction : 'horizontal',
maxShiftPage : 5,
nextPageHandler : '.nextPage',
prevPageHandler : '.prevPage',
draglaunch: 0.5,
friction : 0.325,
sensitivity : 20,
extrashift : 800,
touchduring : 800,
easing: "swing",
bounce: true,
pageshowfilter : false,
onMoving : 0,
goTo : '',
onShiftComplete : function() {}
};
var settings = {};
var methods = {
jqipslide2page: function(page, effect) {
var workspace = $(this), workData = $(this).data("workData"), opts = $(this).data("options");
if (workData.initIphoneSlide) {
var page = page, __animate = {}, effect = (typeof effect === "boolean") ? effect : true,
handler = $(opts.handler, workspace),
pageElem = (opts.pageshowfilter ? handler.children(opts.pageHandler).filter('visible') : handler.children(opts.pageHandler)),
shift = { "X": 0, "Y": 0 },
outerWidthBoundary = workspace.width(),
outerHeightBoundary = workspace.height(),
nowPageElem = pageElem.eq(page-1);
if (page <= 0 || page > workData.totalPages) {
return false;
}
workspace.data("workData", $.extend({}, workData, {"nowPage" : page }));
var __animate = helpers.slide_to_page.call(this, page);
if(effect) {
$(handler).animate(__animate.after, 300, ($.easing[opts.easing]!==undefined ? opts.easing : "swing"), function() {
helpers.slide_callback.call(this);
});
} else {
$(handler).css(__animate.after);
helpers.slide_callback.call(this);
}
} else {
alert ('Your target is not iPhone-Slide workspace.');
return false;
}
},
jqipblank2page: function(content, jump2page, callback) {
var workspace = $(this), workData = $(this).data("workData"), opts = $(this).data("options"),
content = $.isArray(content) ? content : (typeof content === "string" ? [content] : []),
jump2page = (typeof jump2page === "boolean") ? jump2page : false,
callback = (typeof jump2page === "function") ? jump2page : (typeof callback === "function") ? callback : function() { return false; };
if (workData.initIphoneSlide && content.length > 0) {
var totalAddPage = content.length,
handler = $(opts.handler, workspace),
nowPage = (jump2page) ? workData.totalPages+1 : workData.nowPage,
firstElem = (opts.pageshowfilter ? handler.children(opts.pageHandler).filter('visible').eq(0) : handler.children(opts.pageHandler)).eq(0);
$.each(content, function(index, html) {
firstElem.clone().removeAttr("style")
.html(html).appendTo(handler);
if(index === totalAddPage-1) {
workspace.iphoneSlide(opts, callback).jqipslide2page(nowPage, false);
}
});
} else {
alert ('Your target is not iPhone-Slide workspace.');
return false;
}
},
init: function(options, callback) {
var opts = $.extend({}, defaults, options),
callback = (typeof callback === "function") ? callback : function() { return this; };
helpers.options = opts;
helpers.callback = callback;
return $(this).each(function() {
var workspace = $(this), workData = workspace.data("workData"),
handler = $(opts.handler, workspace),
dragAndDrop = $.extend({}, { origX:0, origY:0, X:0, Y:0 }),
startEventData, moveEventData,
totalPages = matrixRow = matrixColumn = 0,
nowPage = 1,
__preventClickEvent = __mouseStarted = __touchesDevice = false,
pageElem = (opts.pageshowfilter ? handler.children(opts.pageHandler).filter('visible') : handler.children(opts.pageHandler));
if (workspace.children().length>1) {
alert('The Selector('+workspace.attr('id')+')\'s page handler can not more than one element.');
return this;
}
if (opts.handler === null || typeof opts.handler !== "string") {
opts.handler = ".iphone-slide-page-handler";
workspace.children(':first').addClass('iphone-slide-page-handler');
}
if ($(opts.handler, workspace).children().length==0) {
alert('You have no page(s) context.');
return this;
}
if (opts.pageHandler === null || typeof opts.pageHandler !== "string") {
switch(handler.attr('tagName').toLowerCase()) {
case "ul":
case "ol":
opts.pageHandler = 'li';
break;
default:
opts.pageHandler = handler.children(':first').attr('tagName').toLowerCase();
}
}
handler.unbind(".jqiphoneslide");
$(opts.prevPageHandler).unbind("click.jqiphoneslide", __slidePrevPage, false);
$(opts.nextPageHandler).unbind("click.jqiphoneslide", __slideNextPage, false);
var __slideNextPage = function(event) {
var workData = workspace.data("workData"),
nowPage = parseInt(workData.nowPage),
totalPages = parseInt(workData.totalPages);
nowPage++;
if (nowPage <= totalPages) {
__mouseStarted = true;
var __animate = helpers.slide_to_page.call(workspace, nowPage, 0);
handler.animate(__animate.after, 300, ((opts.bounce && $.easing[opts.easing]!==undefined) ? opts.easing : "swing"), function() {
__mouseStarted = false;
helpers.slide_callback.call(this);
});
} else {
nowPage = totalPages;
}
workspace.data("workData", $.extend({}, workData, { "nowPage": nowPage }));
return true;
};
var __slidePrevPage = function(event) {
var workData = workspace.data("workData"),
nowPage = parseInt(workData.nowPage),
totalPages = parseInt(workData.totalPages);
nowPage--;
if(nowPage>0) {
__mouseStarted = true;
var __animate = helpers.slide_to_page.call(workspace, nowPage, 0);
handler.animate(__animate.after, 300, ((opts.bounce && $.easing[opts.easing]!==undefined) ? opts.easing : "swing"), function() {
__mouseStarted = false;
helpers.slide_callback.call(this);
});
} else {
nowPage = 1;
}
workspace.data("workData", $.extend({}, workData, { "nowPage": nowPage }));
return true;
};
var __mouseDown = function(event) {
if (__mouseStarted) return false;
event.preventDefault();
__mouseStarted = true;
var __touches = event.originalEvent.touches || event.originalEvent.targetTouches || event.originalEvent.changedTouches,
__startEvent =  __touches === undefined ? event : __touches[0];
startEventData = moveEventData = $.extend({}, __startEvent, { timeStamp: event.timeStamp });
if (__touches !== undefined) __touchesDevice = true;
dragAndDrop.origX = dragAndDrop.X = $(this).position().left;
dragAndDrop.origY = dragAndDrop.Y = $(this).position().top;
if (opts.slideHandler === null || typeof opts.slideHandler !== "string") {
handler.bind("mousemove.jqiphoneslide touchmove.jqiphoneslide", __mouseMove, false)
.bind("mouseleave.jqiphoneslide mouseup.jqiphoneslide touchend.jqiphoneslide touchcancel.jqiphoneslide MozTouchUp.jqiphoneslide", __mouseUp, false);
} else {
handler.filter(opts.slideHandler).bind("mousemove.jqiphoneslide touchmove.jqiphoneslide", __mouseMove, false)
.bind("mouseleave.jqiphoneslide mouseup.jqiphoneslide touchend.jqiphoneslide touchcancel.jqiphoneslide MozTouchUp.jqiphoneslide", __mouseUp, false);
}
return !__mouseStarted;
};
var __mouseMove = function(event) {
onMoving =1;
if ($.browser.msie && !event.button) return __mouseUp(event);
if (__mouseStarted) {
event.preventDefault();
var __touches = event.originalEvent.touches || event.originalEvent.targetTouches || event.originalEvent.changedTouches,
__eventTouches =  __touches === undefined ? event : __touches[0],
__mouseDownEvent = startEventData;
moveEventData = $.extend({}, __eventTouches, { timeStamp: event.timeStamp });
switch(opts.direction) {
case "matrix":
dragAndDrop.X = parseInt(__eventTouches.pageX - __mouseDownEvent.pageX);
dragAndDrop.Y = parseInt(__eventTouches.pageY - __mouseDownEvent.pageY);
handler.css({
top: (dragAndDrop.origY + dragAndDrop.Y) + "px",
left: (dragAndDrop.origX + dragAndDrop.X) + "px"
});
break;
case "vertical":
dragAndDrop.Y = parseInt(__eventTouches.pageY - __mouseDownEvent.pageY);
handler.css({
top: (dragAndDrop.origY + dragAndDrop.Y) + "px"
});
break;
case "horizontal":
default:
dragAndDrop.X = parseInt(__eventTouches.pageX - __mouseDownEvent.pageX);
handler.css({
left: (dragAndDrop.origX + dragAndDrop.X) + "px"
});
}
}
return !__mouseStarted;
};
var __mouseUp = function(event) {
event.preventDefault();
if (opts.slideHandler === null || typeof opts.slideHandler !== "string") {
handler.unbind("mousemove.jqiphoneslide touchmove.jqiphoneslide MozTouchMove.jqiphoneslide", __mouseMove, false);
} else {
handler.filter(opts.slideHandler).unbind("mousemove.jqiphoneslide touchmove.jqiphoneslide MozTouchMove.jqiphoneslide", __mouseMove, false);
}
var workData = $(this).parent().data("workData"),
totalPages = parseInt(workData.totalPages),
nowPage = parseInt(workData.nowPage),
matrixRow = parseInt(workData.matrixRow),
matrixColumn = parseInt(workData.matrixColumn),
__eventTouches,
__touches = event.originalEvent.touches || event.originalEvent.targetTouches || event.originalEvent.changedTouches,
__mouseDownEvent = startEventData;
if (__touches === undefined) {
__eventTouches = __touchesDevice ? moveEventData : event;
} else {
__eventTouches = __touches[0] === undefined ? moveEventData : __touches[0];
}
if (__mouseStarted) __preventClickEvent = (event.target == __mouseDownEvent.target);
if (Math.max(
Math.abs(__mouseDownEvent.pageX - __eventTouches.pageX),
Math.abs(__mouseDownEvent.pageY - __eventTouches.pageY)
) >= parseInt(opts.sensitivity)
) {
__preventClickEvent = false;
var timeStamp = Math.abs(moveEventData.timeStamp - startEventData.timeStamp);
var workerBounce = { "width": workspace.outerWidth(), "height": workspace.outerHeight() };
var thisPage = pageElem.eq(nowPage-1),
thisPageSize = {
"width": thisPage.outerWidth(true),
"height": thisPage.outerHeight(true)
},
thisMove = {
"X": helpers.get_moving_data.call(null, workerBounce.width, __mouseDownEvent.pageX, __eventTouches.pageX, timeStamp),
"Y": helpers.get_moving_data.call(null, workerBounce.height, __mouseDownEvent.pageY, __eventTouches.pageY, timeStamp)
},
shift = {
"X": 0,
"Y": 0,
"shift": Math.max(thisMove.X.shift , thisMove.Y.shift),
"speed": Math.max(thisMove.X.speed , thisMove.Y.speed)
},
easing = {
"X": Math.min(__eventTouches.pageX-__mouseDownEvent.pageX , thisPageSize.width),
"Y": Math.min(__eventTouches.pageY-__mouseDownEvent.pageY , thisPageSize.height)
},
pages = {
"X": (Math.abs(dragAndDrop.X) >= workerBounce.width*opts.draglaunch || Math.abs(dragAndDrop.Y) >= workerBounce.height*opts.draglaunch) ? 0 : (timeStamp>opts.touchduring) ? 1 : Math.ceil(thisMove.X.speed*thisMove.X.shift/thisPageSize.width),
"Y": (Math.abs(dragAndDrop.X) >= workerBounce.width*opts.draglaunch || Math.abs(dragAndDrop.Y) >= workerBounce.height*opts.draglaunch) ? 0 : (timeStamp>opts.touchduring) ? 1 : Math.ceil(thisMove.Y.speed*thisMove.Y.shift/thisPageSize.height)
};
during = Math.min(300, opts.touchduring , Math.max(1/shift.speed*Math.abs(opts.extrashift), Math.abs(opts.extrashift)*0.5));
switch(opts.direction) {
case "matrix":
var pageColumn = Math.ceil(nowPage/matrixRow);
pages.X = (pages.X>matrixRow) ? matrixRow : ((Math.abs(dragAndDrop.X) >= thisPageSize.width*opts.draglaunch) ? 1 : ((Math.floor(Math.abs(easing.Y/easing.X))>2) ? 0 : pages.X));
pages.X = (easing.X > 0) ? (Math.min(pages.X, (nowPage-matrixRow*(pageColumn-1)-1))) : (Math.min(pages.X, (matrixRow*pageColumn-nowPage)));
pages.Y = (pages.Y>matrixColumn) ? matrixColumn : ((Math.abs(dragAndDrop.Y) >= thisPageSize.height*opts.draglaunch) ? 1 : ((Math.floor(Math.abs(easing.X/easing.Y))>2) ? 0 : pages.Y));
pages.Y = (easing.Y > 0) ? (Math.min(pages.Y, (pageColumn-1))) : (((matrixRow*pages.Y+nowPage)>totalPages) ? (matrixColumn-pageColumn) : pages.Y);
nowPage = (easing.X > 0) ? (((nowPage-pages.X)<1) ? 1 : nowPage-pages.X) : ((nowPage+pages.X>totalPages) ? totalPages : nowPage+pages.X);
nowPage = (easing.Y > 0) ? (((nowPage-pages.Y*matrixRow)<1) ? 1 : nowPage-pages.Y*matrixRow) : ((pages.Y*matrixRow>totalPages) ? totalPages : nowPage+pages.Y*matrixRow);
break;
case "vertical":
pages.X = 0;
pages.Y = (pages.Y==0) ? 1 : ((pages.Y>opts.maxShiftPage) ? opts.maxShiftPage : pages.Y);
pages.Y = (easing.Y>0) ? (((nowPage-pages.Y)<1) ? nowPage-1 : pages.Y) : (((nowPage + pages.Y)>totalPages) ? totalPages - nowPage : pages.Y);
nowPage = (easing.Y>0) ? (((nowPage-pages.Y)<1) ? 1 : nowPage-pages.Y) : (((nowPage + pages.Y)>totalPages) ? totalPages : nowPage+pages.Y);
break;
case "horizontal":
default:
pages.Y = 0;
pages.X = (pages.X==0) ? 1 : ((pages.X>opts.maxShiftPage) ? opts.maxShiftPage : pages.X);
pages.X = (easing.X > 0) ? (((nowPage-pages.X)<1) ? nowPage-1 : pages.X) : (((nowPage + pages.X)>totalPages) ? totalPages - nowPage : pages.X);
nowPage = (easing.X > 0) ? (((nowPage-pages.X)<1) ? 1 : nowPage-pages.X) : (((nowPage + pages.X)>totalPages) ? totalPages : nowPage+pages.X);
}
var __animate = (opts.bounce === true) ? helpers.slide_to_page.call(this, nowPage, easing) : helpers.slide_to_page.call(this, nowPage, 0);
if (opts.bounce === true) $(this).animate(__animate.before, during);
$(this).animate(__animate.after, during, ($.easing[opts.easing]!==undefined ? opts.easing : "swing"), function() {
__mouseStarted = false;
helpers.slide_callback.call(this);
});
} else {
$(this).css({ 'top': dragAndDrop.origY, 'left': dragAndDrop.origX });
__mouseStarted = false;
}
if (opts.slideHandler === null || typeof opts.slideHandler !== "string") {
$(this).unbind("mouseleave.jqiphoneslide mouseup.jqiphoneslide touchend.jqiphoneslide MozTouchUp.jqiphoneslide", __mouseUp, false);
} else {
$(this).filter(opts.slideHandler).unbind("mouseleave.jqiphoneslide mouseup.jqiphoneslide touchend.jqiphoneslide MozTouchUp.jqiphoneslide", __mouseUp, false);
}
workspace.data("workData", $.extend({}, workData, { "nowPage": nowPage }));
return !__mouseStarted;
};
var __click = function(event) {
var currentTag = event.currentTarget.nodeName.toLowerCase();
if (currentTag === 'a' || currentTag === 'button' || currentTag === 'input' || currentTag === 'img') {
return true;
}
return __preventClickEvent;
};
var __click2 = function(event) {
var currentTag = event.currentTarget.nodeName.toLowerCase();
if (currentTag === 'a') {
onMoving = 0;
goTo = $.trim(event.currentTarget.href);
}
}
var __click3 = function(event) {
var currentTag = event.currentTarget.nodeName.toLowerCase();
if (currentTag === 'a' && onMoving==0) {
if(goTo != '' && goTo == $.trim(event.currentTarget.href)){
window.location.href = event.currentTarget.href;
}
}
}
if(opts.slideHandler === null || typeof opts.slideHandler !== "string") {
handler
.bind("mousedown.jqiphoneslide touchstart.jqiphoneslide MozTouchDown.jqiphoneslide", __mouseDown, false)
.bind("click.jqiphoneslide", __click, false);
} else {
handler.filter(opts.slideHandler)
.bind("mousedown.jqiphoneslide touchstart.jqiphoneslide MozTouchDown.jqiphoneslide", __mouseDown, false)
.bind("click.jqiphoneslide", __click, false);
}
$(opts.nextPageHandler).bind("click.jqiphoneslide", __slideNextPage, false);
$(opts.prevPageHandler).bind("click.jqiphoneslide", __slidePrevPage, false);
$('a, button, input[type=button], input[type=reset], input[type=submit]', handler)
.bind('touchstart.jqiphoneslide', __click2, false)
.bind('touchend.jqiphoneslide', __click3, false);
helpers.init_pages.call(this);
return this;
});
}
};
var helpers = {
options: null,
callback: function() { return this; },
logs: function(logs) {
var t = new Date(), log = $('#log');
log.html(t.toUTCString()+': '+logs+'<br />'+log.html());
return true;
},
get_moving_data: function(w, s, e, t) {
var v = 0, ex = 0, w = w*1, s = s*1, e = e*1, t = t*1, opts = helpers.options;
v = (Math.abs(s - e) / Math.abs(t));
ex = Math.floor(Math.pow((v/12), 2)*Math.abs(opts.extrashift) / (2*(9.80665/12)*Math.abs(opts.friction))*0.01);
ex = (s>w/2) ? Math.floor(w/3) : s;
return {"speed":v, "shift":ex};
},
init_pages: function() {
var totalPages, opts = helpers.options, workspace = $(this),
handler = $(opts.handler, workspace),
pagesHandler = (!opts.pageshowfilter) ? handler.children(opts.pageHandler) : handler.children(opts.pageHandler).filter(':visible'),
matrixRow = matrixColumn = pagesOuterWidth = pagesOuterHeight = maxWidthPage = maxHeightPage = 0;
totalPages = pagesHandler.length;
maxWidthPage = workspace.width();
maxHeightPage = workspace.height();
switch(opts.direction) {
case "matrix":
matrixRow = Math.ceil(Math.sqrt(totalPages));
matrixColumn = Math.ceil(totalPages / matrixRow);
pagesHandler.each(function(i, elem) {
maxWidthPage = ($(elem).outerWidth(true) >= maxWidthPage) ? $(elem).outerWidth(true) : maxWidthPage;
maxHeightPage = ($(elem).outerHeight(true) >= maxHeightPage) ? $(elem).outerHeight(true) : maxHeightPage;
});
pagesOuterWidth = maxWidthPage * matrixRow;
pagesOuterHeight = maxHeightPage * matrixColumn;
handler.width(pagesOuterWidth).height(pagesOuterHeight);
pagesHandler.each(function(i, elem) {
if ($(elem).outerWidth() < maxWidthPage) {
$(elem).css({
'margin-left': (maxWidthPage - $(elem).outerWidth())/2,
'margin-right': (maxWidthPage - $(elem).outerWidth())/2
});
}
if ($(elem).outerHeight() < maxHeightPage) {
$(elem).css({
'margin-top': (maxHeightPage - $(elem).outerHeight())/2,
'margin-bottom': (maxHeightPage - $(elem).outerHeight())/2
});
}
});
for(var i=matrixColumn; i>1; i--) {
$('<br class="matrix-break-point" style="clear:both;" />').insertAfter(pagesHandler.eq((i-1)*matrixRow-1));
}
break;
case "vertical":
pagesHandler.each(function(i, elem) {
pagesOuterHeight += $(elem).outerHeight(true);
maxWidthPage = ($(elem).outerWidth(true) >= maxWidthPage) ? $(elem).outerWidth(true) : maxWidthPage;
maxHeightPage = ($(elem).outerHeight(true) >= maxHeightPage) ? $(elem).outerHeight(true) : maxHeightPage;
});
pagesHandler.each(function(i, elem) {
if ($(elem).outerWidth() < maxWidthPage) {
$(elem).css('margin-left', (maxWidthPage - $(elem).outerWidth())/2);
}
});
pagesOuterWidth = maxWidthPage;
handler.height(pagesOuterHeight).width(pagesOuterWidth).css('top', (maxHeightPage - pagesHandler.eq(0).outerHeight(true))/2);
break;
case "horizontal":
default:
pagesHandler.each(function(i, elem) {
pagesOuterWidth += $(elem).outerWidth(true);
maxWidthPage = ($(elem).outerWidth(true) >= maxWidthPage) ? $(elem).outerWidth(true) : maxWidthPage;
maxHeightPage = ($(elem).outerHeight(true) >= maxHeightPage) ? $(elem).outerHeight(true) : maxHeightPage;
});
pagesHandler.each(function(i, elem) {
if ($(elem).outerHeight() < maxHeightPage) {
$(elem).css('margin-top', (maxHeightPage - $(elem).outerHeight())/2);
}
});
pagesOuterHeight = maxHeightPage;
handler.width(pagesOuterWidth).height(pagesOuterHeight).css('left', (maxWidthPage - pagesHandler.eq(0).outerWidth(true))/2);
}
pagesHandler.css({ 'display' : 'block' });
workspace.width(maxWidthPage).height(maxHeightPage)
.data("workData", $.extend({},
{
'totalPages': totalPages,
'matrixRow': matrixRow,
'matrixColumn': matrixColumn,
'pagesOuterWidth': pagesOuterWidth,
'pagesOuterHeight': pagesOuterHeight,
'nowPage': 1,
'initIphoneSlide': true
})
).data("options", opts);
handler.attr("data-target", "handler");
helpers.callback.call(this);
},
slide_callback: function() {
var workspace = ($(this).attr("data-target")==="handler") ? $(this).parent() : $(this),
workData = workspace.data("workData"), nowPage = workData.nowPage,
opts = helpers.options || workspace.data("options"),
handler = $(opts.handler, workspace).children(opts.pageHandler);
if(opts.pageshowfilter) {
opts.onShiftComplete.call(workspace, handler.filter(':visible').eq(nowPage-1), nowPage);
} else {
opts.onShiftComplete.call(workspace, handler.eq(nowPage-1), nowPage);
}
},
slide_to_page: function(page, easing) {
var page = page,
workspace = ($(this).attr("data-target")==="handler") ? $(this).parent() : $(this),
opts = helpers.options || workspace.data("options"), handler = $(opts.handler, workspace),
easing = easing || { "X":0, "Y": 0},
pageElem = (opts.pageshowfilter ? handler.children(opts.pageHandler).filter('visible') : handler.children(opts.pageHandler)),
shift = { "X": 0, "Y": 0 },
__animate = { 'before': {}, 'after': {} },
outerWidthBoundary = workspace.width(),
outerHeightBoundary = workspace.height(),
nowPageElem = pageElem.eq(page-1);
switch(opts.direction) {
case "matrix":
shift.X = nowPageElem.position().left;
shift.X -= (outerWidthBoundary - nowPageElem.outerWidth(true))/2;
shift.Y = nowPageElem.position().top;
shift.Y -= (outerHeightBoundary - nowPageElem.outerHeight(true))/2;
__animate = {
'before': { 'top': -1*shift.Y+easing.Y, 'left': -1*shift.X+easing.X },
'after': { 'top': -1*shift.Y, 'left': -1*shift.X }
};
break;
case "vertical":
shift.Y = nowPageElem.position().top;
shift.Y -= (outerHeightBoundary - nowPageElem.outerHeight(true))/2;
__animate = {
'before': { 'top': -1*shift.Y+easing.Y },
'after': { 'top': -1*shift.Y }
};
break;
case "horizontal":
default:
shift.X = nowPageElem.position().left;
shift.X -= (outerWidthBoundary - nowPageElem.outerWidth(true))/2;
__animate = {
'before': { 'left': -1*shift.X+easing.X },
'after': { 'left': -1*shift.X }
};
}
return __animate;
}
};
if (methods[method] && method.toLowerCase() != 'init') {
return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
} else if (typeof method === "object" || !method) {
return methods.init.apply(this, arguments);
} else {
$.error( 'Method "' +  method + '" does not exist in iPhoneSlide plugin!');
}
};
})(jQuery);
$(function(){
jQuery.hajaxSubmit=function(url, data, scallback) {
$.ajax({
type: "post",
data: data,
url: url,
dataType: "json",
success: function(d){
scallback(d);
}
});
};
jQuery.hajaxOpenUrl=function (url,obj,data){
$.post(url,data,function(d){
$(obj).html(d);
});
};
});
var myScroll = [];
function loadWrapper(tag,hs,vs,cc,ld,mm,bn,sn) {
myScroll[tag] = new iScroll(tag,{
hScrollbar:hs,
vScrollbar:vs,
checkDOMChanges:cc,
momentum:mm,
bounce: bn,
snap:sn,
useTransform: false,
onBeforeScrollStart: function (e) {
var target = e.target;
while (target.nodeType != 1) target = target.parentNode;
if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
e.preventDefault();
},
onScrollEnd: function(e) {
var inc = $("#"+tag).nextAll('ul.indicator');
if(inc.length<=0) return false;
var ind = this.currPageX;
if(ind >= $(inc).find('li').length) ind = $(inc).find('li').length-1;
$(inc).find('li').removeClass('active');
$(inc).find('li').eq(ind).addClass('active');
}
});
}
function doResize() {
for(var tag in myScroll) {
myScroll[tag].refresh();
}
}
function genRandomID() {
var randnum="";
for(var i=0;i<16;i++) {
randnum+=Math.floor(Math.random()*10);
}
return randnum;
}
$(function(){
$(window).resize(function(){
doResize();
mobResizeWrapHeight();
});
$(".listmenu").find("li").click(function(){
location.href=$(this).find(".button-text").children("a").attr("href");
});
if ($(".slidewrap")) {
$.each($(".slidewrap"),function(i,item){
var rnum = genRandomID();
wrapID = "slidewrap_" + rnum;
pagesID = "slidepages_" + rnum;
wrapEl = "#" + wrapID;
pagesEl = "#" + pagesID;
$(item).attr("id",wrapID);
$(item).children(".slidepages").attr("id",pagesID);
hs = ($(item).attr("hs")==1)?true:false;
vs = ($(item).attr("vs")==1)?true:false;
cc = ($(item).attr("cc")==0)?false:true;
ld = ($(item).attr("lc")==0)?false:true;
bn = ($(item).attr("bn")==1)?true:false;
mm = false;
sn = true;
loadWrapper(wrapID,hs,vs,cc,ld,mm,bn,sn);
var pageWidth = 0;
if($("#"+pagesID).children("div").length>0){
if($("#"+pagesID).children("div:first").width())
pageWidth = $("#"+pagesID).children("div:first").width() * $("#"+pagesID).children("div").length;
}
if(pageWidth>0) $("#"+pagesID).width(pageWidth+"px");
$(item).next().find('#prevpage').attr('el',wrapID).click(function(){
var tag = $(this).attr('el');
myScroll[tag].scrollToPage('prev',0);
});
$(item).next().find('#nextpage').attr('el',wrapID).click(function(){
var tag = $(this).attr('el');
myScroll[tag].scrollToPage('next',0);
});
});
}
$("body").append('<div id="overlay"></div><div id="loading" class="corner-all"><i class="icon icon-loading spin">&nbsp;</i><div>Loading...</div></div>');
$(".button").bind("mousedown",function(){
$(this).addClass("button-down");
}).bind("mouseup",function(){
$(this).removeClass("button-down");
}).bind("touchstart",function(){
$(this).addClass("button-down");
}).bind("touchend",function(){
$(this).removeClass("button-down");
});
if ($(".iwrapper")) {
$.each($(".iwrapper"),function(i,item){
var rnum = genRandomID();
wrapID = "iwrapper_" + rnum;
wrapEl = "#" + wrapID;
$(item).attr("id",wrapID);
hs = ($(item).attr("hs")==1)?true:false;
vs = ($(item).attr("vs")==1)?true:false;
cc = ($(item).attr("cc")==0)?false:true;
ld = ($(item).attr("lc")==0)?false:true;
bn = ($(item).attr("bn")==1)?true:false;
mm = ($(item).attr("mm")==0)?false:true;
sn = ($(item).attr("sn"))?$(item).attr("sn"):false;
if ($(item).hasClass("hwrapper")) {
loadWrapper(wrapID,hs,vs,cc,ld,mm,bn,sn);
} else if ($(item).hasClass("vwrapper")) {
loadWrapper(wrapID,hs,vs,cc,ld,mm,bn,sn);
}
});
}
});
function getFormVal(p_form){
var keys = new Array();
var values = new Array();
var a = new Array();
var frm;
if(typeof(p_form)=='object') frm = p_form;
else frm = eval("document."+p_form);
var elements = frm.elements;
var len = elements.length;
for(var i=0;i<len;i++){
if(elements[i].type){
switch(elements[i].type){
case "checkbox":
if(elements[i].checked){
keys[i]=elements[i].name;
values[i]=(elements[i].value);
a.push({name:keys[i],value:values[i]});
}
break;
case "radio":
if(elements[i].checked){
keys[i]=elements[i].name;
values[i]=(elements[i].value);
a.push({name:keys[i],value:values[i]});
};
break;
default:
keys[i]=elements[i].name;
values[i]=(elements[i].value);
a.push({name:keys[i],value:values[i]});
break;
}
}
else{
keys[i] = elements[i].name;
values[i] = (elements[i].value);
a.push({name:keys[i],value:values[i]});
}
}
return a;
}
function formateNumber(p_num,p_decimal){
var num = p_num || 0,decimal = p_decimal || '.';
if (typeof num === "number") return num;
var regex = new RegExp("[^0-9-" + decimal + "]", ["g"]),
unformatted = parseFloat(
("" + num)
.replace(regex, '')
.replace(decimal, '.')
);
return !isNaN(unformatted) ? unformatted : 0;
}
function toFixedNum(p_prec,p_num,p_len){
var len = p_len ? p_len : parseInt(p_prec,10),
power = Math.pow(10, len);
return (Math.round(formateNumber(p_num) * power) / power).toFixed(len);
}
function toFormateNum(p_prec,p_num,p_len,p_thousand,p_decimal){
var   num = formateNumber(p_num),
len = p_len ? p_len : parseInt(p_prec,10),
thousand = p_thousand ? p_thousand : ',',
decimal = p_decimal ? p_decimal : '.',
base = parseInt(toFixedNum(p_prec,Math.abs(num || 0), len), 10) + "",
mod = base.length > 3 ? base.length % 3 : 0;
return (mod ? base.substr(0, mod) + thousand : "") + base.substr(mod).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (len ? decimal + toFixedNum(p_prec,Math.abs(num), len).split('.')[1] : "");
}
function toFormateNum2(p_prec,p_num,p_len,p_decimal){
var   num = formateNumber(p_num),
len = p_len ? p_len : parseInt(p_prec,10),
thousand ="",
decimal = p_decimal ? p_decimal : '.',
base = parseInt(toFixedNum(p_prec,Math.abs(num || 0), len), 10) + "",
mod = base.length > 3 ? base.length % 3 : 0;
return (mod ? base.substr(0, mod) + thousand : "") + base.substr(mod).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (len ? decimal + toFixedNum(p_prec,Math.abs(num), len).split('.')[1] : "");
}
function isDate(p_date){
var dt = p_date.split('-');
if(dt.length!=3) return false;
var y = dt[0];
var m = dt[1];
var d = dt[2];
if(isNaN(y) || y>9999 || y<1000)return false;
if(isNaN(m) || m>12 || m<1)return false;
if(isNaN(d) || d>31 || d<1)return false;
return true;
}
function showPopDiv(p_obj,p_boxobj){
$(p_boxobj).removeClass("animated fadeOutDown");
$(p_obj).show()
var margin_left = 0-Math.floor($(p_boxobj).innerWidth()/2);
var margin_top = 0-Math.floor($(p_boxobj).innerHeight()/2);
$(p_boxobj).addClass("animated fadeInUp");
$(p_boxobj).css('margin-left',margin_left);
$(p_boxobj).css('margin-top',margin_top);
}
function hidePopDiv(p_obj,p_boxobj){
$(p_boxobj).removeClass("animated fadeInUp");
$(p_boxobj).addClass("animated fadeOutDown")
$(p_obj).delay(1000).hide(1);
}
function showPopTips(p_boxcont){
var boxobj = $("#_pop_tips").find('.mbox');
$(boxobj).html(p_boxcont);
$('#_pop_tips').fadeIn(20,function(){
var tipboxW = $(boxobj).innerWidth();
$(boxobj).css({'bottom': '10%','opacity': '1','margin-left': -1*(tipboxW/2)});
}).delay(2500).fadeOut(20,function(){
$(boxobj).css({'bottom':'-100%','opacity':'0'});
});
}
function mCallBack(p_data){
$('#loading').hide();
$('#overlay').removeClass("show");
var d = eval("("+p_data+")");
showPopTips(d.content);
}
function showPopDialog(p_cont,p_btnname){
$('#_pop_dialog .mcont').html(p_cont);
if(p_btnname)
$('#_pop_dialog .mdialog-foot .mbtn').html(p_btnname);
$('#_pop_dialog').show();
}
function HvPagelist(){};
HvPagelist.prototype.init = function(p_option){
this.pageMode = p_option.pageMode;
this.currentPage = p_option.currentPage;
this.flag = p_option.flag;
this.over = p_option.over;
this.url = p_option.url;
this.urlPrefix = p_option.urlPrefix;
this.totalPage = p_option.totalPage;
this.Op = p_option.Op;
this.param = p_option.param
this.pageListObj = p_option.pageListObj;
this.nextPageObj = p_option.nextPageObj;
}
HvPagelist.prototype.nextPage = function(){
if(this.over==1) return;
if(this.flag==1) return;
if(this.currentPage>=this.totalPage) return;
this.currentPage++;
this.flag = 1;
$('#loading').show();
this.param.push({name:'Op',value:this.Op});
this.param.push({name:'Page',value:this.currentPage});
$.ajax({
url : this.url,
type : "POST",
context : this,
data : this.param,
success :
function(data){
var d = eval("("+data+")");
if(d.stat == 'over'){
$(this.nextPageObj).hide();
this.over=1;
}
$(this.pageListObj).append(d.content);
$('#loading').hide();
this.flag=0;
this.param.pop();
this.param.pop();
if(this.pageMode==0)
this.loadPage();
}
});
}
HvPagelist.prototype.loadPage = function(){
var pos = $(document).scrollTop()+$(window).height();
var btm = $(document.body).height();
if(pos>=btm-150) this.nextPage();
}
HvPagelist.prototype.goPrePage = function(){
if(this.currentPage<=1) return;
var page = this.currentPage-1;
this.goPage(page);
}
HvPagelist.prototype.goNextPage = function(){
if(this.currentPage>=this.totalPage) return;
var page = this.currentPage+1;
this.goPage(page);
}
HvPagelist.prototype.goPage = function(p_page){
var url = this.urlPrefix.replace('PAGE',p_page);
window.location.href = url;
}
function HvCloseClick(p_obj,p_objparent){
$(p_obj).click(function(){
$(this).parents(p_objparent).removeClass('open');
$('html').removeClass('offscroll');
$('#overlay').removeClass('show');
});
}
function mobResizeWrapHeight(){
var wrapHeight = 0;
$("*[fixBtmLevel=1]").each(function(){
if($(this).attr("fixBtmHeightFun")){
wrapHeight = eval($(this).attr("fixBtmHeightFun")+"()");
}
else{
wrapHeight = $(this).height();
}
});
$("*[fixBtmLevel=2]").each(function(){
if($(this).attr("fixBtmHeightFun")){
wrapHeight += eval($(this).attr("fixBtmHeightFun")+"("+wrapHeight+")");
}
else{
wrapHeight += $(this).height();
}
});
$("*[fixBtmLevel=3]").each(function(){
if($(this).attr("fixBtmHeightFun")){
wrapHeight += eval($(this).attr("fixBtmHeightFun")+"("+wrapHeight+")");
}
else{
wrapHeight += $(this).height();
}
});
$("*[fixBtmLevel=4]").each(function(){
if($(this).attr("fixBtmHeightFun")){
wrapHeight += eval($(this).attr("fixBtmHeightFun")+"("+wrapHeight+")");
}
else{
wrapHeight += $(this).height();
}
});
$('body>.wrap').css("padding-bottom",wrapHeight);
}
$(document).ready(function(){
$(".dropdown-toggle").click(function(){
if($(this).parent().hasClass('open'))
$(".dropdown-toggle").parent().removeClass('open');
else{
$(".dropdown-toggle").parent().removeClass('open');
$(this).parent().toggleClass('open');
}
return false;
});
$("body").click(function(){
if($(".dropdown-toggle").parent().hasClass('open')){
$('.dropdown-toggle').parent().removeClass('open');
}
});
$('.dropdown-menu').click(function(event){
event.stopPropagation();
});
$('.mpopbg').click(function(){
$('.mpopdiv .mbox').removeClass("animated fadeInUp");
$('.mpopdiv .mbox').addClass("animated fadeOutDown");
$('.mpopdiv').delay(1000).hide(1);
});
$('#_pop_dialog .mdialog-foot .mbtn').click(function(){
$('#_pop_dialog').hide();
})
$('.form_date').datetimepicker({
format: 'yyyy-mm-dd',
autoclose: 1,
todayBtn:  1,
language:  Cookie.prototype.getCookie('PageLang'),
minView: 2
});
})
function dataCheck() {
this.ErrMsg = new Array();
this.ErrMsg[2] = "Please Input Something!";
this.ErrMsg[1] = "Error1!";
return this;
}
dataCheck.prototype.setField = function(p_field) {
this.screenField = p_field;
}
dataCheck.prototype.setName = function(p_name) {
this.screenName = p_name;
}
dataCheck.prototype.setNull = function(p_null) {
this.screenNull = p_null;
}
dataCheck.prototype.setType = function(p_type) {
this.screenType = p_type;
}
dataCheck.prototype.getObj = function(p_form,p_name,p_prefix) {
var obj ;
if(typeof(p_form)=='object') {
obj = eval("p_form."+p_prefix+p_name);
}
else {
obj = eval("document."+p_form+"."+p_prefix+p_name);
}
if(!obj) return false;
return obj;
}
dataCheck.prototype.setMsg = function(p_msg) {
this.ErrMsg = p_msg;
}
dataCheck.prototype.datavalid = function(p_form,p_prefix)  {
var msg = "";
var focusobj ;
var flag = 1;
var f_length = this.screenField.length;
var strUtl = new strUtil('');
for(var i=0;i<f_length;i++)  {
if(typeof(this.screenName[i])=='undefined') continue;
if(this.screenType[i]=="l") {
if(this.screenNull[i]=='1')  continue;
obj = this.getObj(p_form,this.screenField[i],p_prefix);
if(!obj) continue;
if(obj.checked) continue;
var l_len = obj.length;
var chk = false;
for(j=0;j<l_len;j++) {
obj = this.getObj(p_form,this.screenField[i]+"["+j+"]",p_prefix);
if(obj.checked) { chk = true;  break; }
}
if(chk) continue;
msg = msg + this.screenName[i]+" : "+this.ErrMsg[1]+"\n";
if(flag) {
focusobj = obj;
flag = 0;
}
continue;
}
if(this.screenType[i]=="x") {
if(this.screenNull[i]=='1')  continue;
var chk = false;
if(typeof(p_form)=='object') {
if($(p_form).find("input[name='"+p_prefix+this.screenField[i]+"[]']").length==0) continue;
$(p_form).find("input[name='"+p_prefix+this.screenField[i]+"[]']").each(function() {
if($(this).prop("checked")){
chk = true;
return false;
}
});
}else{
if($("form[name="+p_form+"]").find("input[name='"+p_prefix+this.screenField[i]+"[]']").length==0) continue;
$("form[name="+p_form+"]").find("input[name='"+p_prefix+this.screenField[i]+"[]']").each(function() {
if($(this).prop("checked")){
chk = true;
return false;
}
});
}
if(chk) continue;
msg = msg + this.screenName[i]+" : "+this.ErrMsg[1]+"\n";
continue;
}
obj = this.getObj(p_form,this.screenField[i],p_prefix);
if(!obj) continue;
if(!this.screenNull[i] && strUtl.trim(obj.value) == "") {
msg =msg +  this.screenName[i]+ " : "+this.ErrMsg[1]+"\n";
if(flag) { focusobj = obj;  flag = 0; }
}
switch(this.screenType[i]){
case "d":
if(obj.value != "" && !isDate(obj.value)) {
msg +=  this.screenName[i]+ " : " + this.ErrMsg[3] +" \n";
if(flag) { focusobj = obj;  flag = 0; }
}
break;
case "i":
if(obj.value != "" && !strUtl.isInteger(obj.value)) {
msg +=  this.screenName[i]+ " : "+ this.ErrMsg[2]+" \n";
if(flag) { focusobj = obj;  flag = 0; }
}
break;
case "n":
if(obj.value != "" && isNaN(obj.value)) {
msg += this.screenName[i]+ " : "+ this.ErrMsg[4]+" \n";
if(flag) { focusobj = obj;  flag = 0; }
}
break;
case "f":
if(obj.value != "" && isNaN(obj.value)) {
msg += this.screenName[i]+ " : " + this.ErrMsg[4] +" \n";
if(flag) { focusobj = obj;  flag = 0; }
}
break;
case "l":
if(obj.value != "" && !strUtl.isInteger(obj.value))  {
msg += this.screenName[i]+ " : " + this.ErrMsg[2]+" \n";
if(flag) { focusobj = obj;  flag = 0; }
}
break;
case "e":
if(obj.value != "" && !strUtl.isEmail(obj.value))  {
msg += this.screenName[i]+ " : " + this.ErrMsg[5]+" \n";
if(flag) { focusobj = obj;  flag = 0; }
}
break;
}
}
if(!strUtl.isEmpty(msg))  {
msg = this.ErrMsg[0] + " :\n" + msg ;
alert(msg);
try {
if(!flag)focusobj.focus();
}catch(e){}
return false;
}
return true;
}
function strUtil(p_str) {
if(typeof(p_str)=='undefined') p_str = "";
this.String = p_str;
return this;
}
strUtil.prototype.length = function() {
a=strUtil.prototype.length.arguments;
if(typeof(a[0])!='undefined') p_in = a[0];
else p_in = this.String;
return p_in.length;
}
strUtil.prototype.isInteger = function() {
a=strUtil.prototype.isInteger.arguments;
if(typeof(a[0])!='undefined') p_in = a[0];
else p_in = this.String;
var p_val = p_in.toString();
for(var i=0;i<p_val.length; i++)  {
var oneChar = p_val.charAt(i);
if(i==0 && oneChar =="-")       continue;
if(oneChar<"0" || oneChar>"9")  return false;
}
return true;
}
strUtil.prototype.isPosInteger = function() {
a=strUtil.prototype.isPosInteger.arguments;
if(typeof(a[0])!='undefined') p_in = a[0];
else p_in = this.String;
var p_val = p_in.toString();
for(var i=0;i<p_val.length; i++)  {
var oneChar = p_val.charAt(i);
if(oneChar<"0" || oneChar>"9")  return false;
}
return true;
}
strUtil.prototype.isEmpty = function () {
a=strUtil.prototype.isEmpty.arguments;
if(typeof(a[0])!='undefined') p_in = a[0];
else p_in = this.String;
p_val = this.trim(p_in);
if(p_val == null || p_val=="")  return true;
if(p_val.length==0) return true;
return false;
}
strUtil.prototype.isEmail = function(){
a=strUtil.prototype.isEmail.arguments;
if(typeof(a[0])!='undefined') p_in = a[0];
else p_in = this.String;
var reg = new RegExp("^[_\\.0-9a-zA-Z-]+@([0-9a-zA-Z-]+\\.)+[a-zA-Z]{2,3}$");
if(p_in.search(reg)!=-1)
return true;
else
return false;
}
strUtil.prototype.isCode = function()  {
a=strUtil.prototype.isCode.arguments;
if(typeof(a[0])!='undefined') p_in = a[0];
else p_in = this.String;
var  reg =new RegExp(/^[a-z\d\_]+$/i);
if(p_in.search(reg)!=-1)
return true;
else
return false;
}
strUtil.prototype.ltrim = function(p_str)  {
a=strUtil.prototype.ltrim.arguments;
if(typeof(a[0])!='undefined') p_str = a[0];
else p_str = this.String;
return p_str.replace(/(^\s*)/g, "");
}
strUtil.prototype.trim = function(p_str)
{
a=strUtil.prototype.trim.arguments;
if(typeof(a[0])!='undefined') p_str = a[0];
else p_str = this.String;
return p_str.replace(/(^\s*)|(\s*$)/g, "");
}
String.prototype.trim = function()
{
return this.replace(/(^[\n\s]*)|([\s\n]*$)/g, "");
}
strUtil.prototype.rtrim = function(p_str)  {
a=strUtil.prototype.rtrim.arguments;
if(typeof(a[0])!='undefined') p_str = a[0];
else p_str = this.String;
return p_str.replace(/(\s*$)/g, "");
}
strUtil.prototype.wipeTag = function(p_str,p_tag)  {
var reg = new RegExp("<"+p_tag+"[^>]*>([\\s|\\S]*?)<\\/"+p_tag+"\\s*>","i");
p_str = p_str.replace(reg,"");
return p_str;
}
strUtil.prototype.wipeScript = function(p_str)  {
if(typeof p_str=="undefined" || p_str==null) return ;
var reg1 = /<script[^>]*>([\s|\S]*?)<\/script\s*>/i;
var reg2 = /<iframe[^>]*>([\s|\S]*?)<\/iframe\s*>/i;
var reg3 = /<frameset[^>]*>([\s|\S]*?)<\/frameset\s*>/i;
var reg4 = /<a\s*href=[\s\S]*javascript[^>]*>([\s|\S]*?)<\/a\s*>/i;
p_str = p_str.replace(reg1,"");
p_str = p_str.replace(reg2,"");
p_str = p_str.replace(reg3,"");
p_str = p_str.replace(reg4,"");
return p_str;
}
strUtil.prototype.striptags = function(p_str)  {
if(typeof p_str=="undefined" || p_str==null) return ;
var reg1 = /<[^>]*>/ig;
var reg2 = /<\/[^>]*>/ig;
var reg3 = /&nbsp;/ig;
p_str = p_str.replace(reg1,"");
p_str = p_str.replace(reg2,"");
p_str = p_str.replace(reg3,"");
return p_str;
}
strUtil.prototype.wipeForm = function(p_str)  {
if(typeof p_str=="undefined" || p_str==null) return ;
var reg1 = /<form[^>]*>/i;
var reg2 = /<\/form[^>]*>/i;
p_str = p_str.replace(reg1,"");
p_str = p_str.replace(reg2,"");
return p_str;
}
strUtil.prototype.addslashes = function (str) {
if(typeof str=="undefined" || str==null) return ;
str=str.replace(/\'/g,'\\\'');
str=str.replace(/\"/g,'\\"');
str=str.replace(/\\/g,'\\\\');
str=str.replace(/\0/g,'\\0');
return str;
}
strUtil.prototype.stripslashes = function (str) {
if(typeof str=="undefined" || str==null) return ;
str=str.replace(/\\'/g,'\'');
str=str.replace(/\\"/g,'"');
str=str.replace(/\\\\/g,'\\');
str=str.replace(/\\0/g,'\0');
return str;
}
strUtil.prototype.nl2br = function (str) {
if(typeof str=="undefined" || str==null) return ;
return str.replace(/(\r\n)|(\n\r)|\r|\n/g,"<BR>");
}
strUtil.prototype.directShowInput = function (str) {
return strUtil.prototype.nl2br(strUtil.prototype.htmlspecialchars(strUtil.prototype.stripslashes(str)));
}
strUtil.prototype.htmlspecialchars = function(str)  {
if(typeof str=="undefined" || str==null) return ;
str = str.replace(/\</g,"&lt;");
str = str.replace(/\>/g,"&gt;");
str = str.replace(/\"/g,"&quot;");
return str;
}
strUtil.prototype.reversespecialchars = function(str)  {
if(typeof str=="undefined" || str==null) return ;
str = str.replace(/&lt;/g,"<");
str = str.replace(/&gt;/g,">");
str = str.replace(/&quot;/g,"\"");
str = str.replace(/&amp;/g,"&");
return str;
}
strUtil.prototype.markIp = function () {
a=strUtil.prototype.markIp.arguments;
ip = a[0];
if(typeof(a[1])!='undefined') part = a[1];
else part = 3;
if(part>4) return ip;
ret = ip.split(".");
str="";
for(i=0;i<ret.length;i++) {
if(i+1<part) str+=ret[i]+".";
else str+="X.";
}
return str.substring(0,str.length-1);
}
function Cookie(path,domain,duration,secure) {
this.defPath = path;
this.defDomain = domain;
this.defDuration = duration;
this.defSecure = secure;
return this;
}
Cookie.prototype.setCookie = function (name, value, duration, path, domain, secure) {
if(!duration && this.defDuration) duration = this.defDuration;
if(!path && this.defPath) path = this.defDuration;
if(!domain && this.defDomain) domain = this.defDomain;
if(!secure && this.defSecure) secure = this.defSecure;
if(duration){
var expires = new Date();
var curTime = new Date().getTime();
expires.setTime(curTime + (1000 * 60 * duration));
}
this.setCookieDT(name, value, expires, path, domain, secure);
}
Cookie.prototype.setGroupCookie = function (cookiename,name, value, duration, path, domain, secure) {
var val = this.getCookie(cookiename);
if(typeof val=="undefined" || val=="") {
return this.setCookie(cookiename,name+":"+value,duration, path, domain, secure);
}
var arr = val.split(";;");
var acookie;
var found=false;
var i;
for(i=0;i<arr.length;i++) {
acookie = arr[i].split(":");
if(acookie[0]==name) {
arr[i] = name+":"+value;
found = true;
}
}
if(!found) {
arr[i] = name+":"+value;
}
var str = arr.join(";;");
return this.setCookie(cookiename,str,duration, path, domain, secure);
}
Cookie.prototype.getGroupCookie = function (cookiename,name) {
var val = this.getCookie(cookiename);
if(typeof val=="undefined" || val=="") return "";
var arr = val.split(";;");
var acookie;
var found=false;
for(var i=0;i<arr.length;i++) {
acookie = arr[i].split(":");
if(acookie[0]==name) {
return acookie[1];
}
}
return "";
}
Cookie.prototype.delGroupCookie = function (cookiename,name,duration, path, domain, secure) {
var val = this.getCookie(cookiename);
if(typeof val=="undefined" || val=="") return "";
var arr = val.split(";;");
var acookie;
var res = new Array();
var j=0;
for(var i=0;i<arr.length;i++) {
acookie = arr[i].split(":");
if(acookie[0]==name) continue;
res[j++] = arr[i];
}
var str = res.join(";;")
return this.setCookie(cookiename,str,duration, path, domain, secure);
}
Cookie.prototype.setCookieDT = function (name, value, expires, path, domain, secure) {
document.cookie =
name+"="+encodeURIComponent(value)+
(expires ? "; expires="+expires.toGMTString() : "")+
(path    ? "; path="   +path   : "")+
(domain  ? "; domain=" +domain : "")+
(secure  ? "; secure" : "");
}
Cookie.prototype.getCookie = function (name) {
cookie = " "+document.cookie;
offset = cookie.indexOf(" "+name+"=");
if (offset == -1) return undefined;
offset += name.length+2;
end     = cookie.indexOf(";", offset)
if (end == -1) end = cookie.length;
return decodeURIComponent(cookie.substring(offset, end));
}
Cookie.prototype.existCookie = function (name) {
var cookieVal = new strUtil(Cookie.prototype.getCookie(name));
cookieVal.trim(' ');
if(cookieVal.length()==0) return false;
return true;
}
Cookie.prototype.delCookie = function (name,path,domain) {
if (this.getCookie(name)) {
var date = new Date("January 01, 2000 00:00:01");
this.setCookieDT(name, "", date, path, domain);
}
}
!function(a,b){function j(a,b){function c(){}c[e]=this[e];var d=this,g=new c,h=f(a),j=h?a:this,k=h?{}:a,l=function(){this.initialize?this.initialize.apply(this,arguments):(b||h&&d.apply(this,arguments),j.apply(this,arguments))};l.methods=function(a){i(g,a,d),l[e]=g;return this},l.methods.call(l,k).prototype.constructor=l,l.extend=arguments.callee,l[e].implement=l.statics=function(a,b){a=typeof a=="string"?function(){var c={};c[a]=b;return c}():a,i(this,a,d);return this};return l}function i(a,b,d){for(var g in b)b.hasOwnProperty(g)&&(a[g]=f(b[g])&&f(d[e][g])&&c.test(b[g])?h(g,b[g],d):b[g])}function h(a,b,c){return function(){var d=this.supr;this.supr=c[e][a];var f=b.apply(this,arguments);this.supr=d;return f}}function g(a){return j.call(f(a)?a:d,a,1)}var c=/xyz/.test(function(){xyz})?/\bsupr\b/:/.*/,d=function(){},e="prototype",f=function(a){return typeof a===b};if(typeof module!="undefined"&&module.exports)module.exports=g;else{var k=a.klass;g.noConflict=function(){a.klass=k;return this},a.klass=g}}(this,"function")
;(function($) {
$.fn.ajaxSubmit = function(options) {
if (!this.length) {
log('ajaxSubmit: skipping submit process - no element selected');
return this;
}
if (typeof options == 'function')
options = { success: options };
var url = $.trim(this.attr('action'));
if (url) {
url = (url.match(/^([^#]+)/)||[])[1];
}
url = url || window.location.href || '';
options = $.extend({
url:  url,
type: this.attr('method') || 'GET',
iframeSrc: /^https/i.test(window.location.href || '') ? 'javascript:false' : 'about:blank'
}, options || {});
var veto = {};
this.trigger('form-pre-serialize', [this, options, veto]);
if (veto.veto) {
log('ajaxSubmit: submit vetoed via form-pre-serialize trigger');
return this;
}
if (options.beforeSerialize && options.beforeSerialize(this, options) === false) {
log('ajaxSubmit: submit aborted via beforeSerialize callback');
return this;
}
var a = this.formToArray(options.semantic);
if (options.data) {
options.extraData = options.data;
for (var n in options.data) {
if(options.data[n] instanceof Array) {
for (var k in options.data[n])
a.push( { name: n, value: options.data[n][k] } );
}
else
a.push( { name: n, value: options.data[n] } );
}
}
if (options.beforeSubmit && options.beforeSubmit(a, this, options) === false) {
log('ajaxSubmit: submit aborted via beforeSubmit callback');
return this;
}
this.trigger('form-submit-validate', [a, this, options, veto]);
if (veto.veto) {
log('ajaxSubmit: submit vetoed via form-submit-validate trigger');
return this;
}
var q = $.param(a);
if (options.type.toUpperCase() == 'GET') {
options.url += (options.url.indexOf('?') >= 0 ? '&' : '?') + q;
options.data = null;
}
else
options.data = q;
var $form = this, callbacks = [];
if (options.resetForm) callbacks.push(function() { $form.resetForm(); });
if (options.clearForm) callbacks.push(function() { $form.clearForm(); });
if (!options.dataType && options.target) {
var oldSuccess = options.success || function(){};
callbacks.push(function(data) {
var fn = options.replaceTarget ? 'replaceWith' : 'html';
$(options.target)[fn](data).each(oldSuccess, arguments);
});
}
else if (options.success)
callbacks.push(options.success);
options.success = function(data, status, xhr) {
for (var i=0, max=callbacks.length; i < max; i++)
callbacks[i].apply(options, [data, status, xhr || $form, $form]);
};
var files = $('input:file', this).fieldValue();
var found = false;
for (var j=0; j < files.length; j++)
if (files[j])
found = true;
var multipart = false;
if ((files.length && options.iframe !== false) || options.iframe || found || multipart) {
if (options.closeKeepAlive)
$.get(options.closeKeepAlive, fileUpload);
else
fileUpload();
}
else
$.ajax(options);
this.trigger('form-submit-notify', [this, options]);
return this;
function fileUpload() {
var form = $form[0];
if ($(':input[name=submit]', form).length) {
alert('Error: Form elements must not be named "submit".');
return;
}
var opts = $.extend({}, $.ajaxSettings, options);
var s = $.extend(true, {}, $.extend(true, {}, $.ajaxSettings), opts);
var id = 'jqFormIO' + (new Date().getTime());
var $io = $('<iframe id="' + id + '" name="' + id + '" src="'+ opts.iframeSrc +'" onload="(jQuery(this).data(\'form-plugin-onload\'))()" />');
var io = $io[0];
$io.css({ position: 'absolute', top: '-1000px', left: '-1000px' });
var xhr = {
aborted: 0,
responseText: null,
responseXML: null,
status: 0,
statusText: 'n/a',
getAllResponseHeaders: function() {},
getResponseHeader: function() {},
setRequestHeader: function() {},
abort: function() {
this.aborted = 1;
$io.attr('src', opts.iframeSrc);
}
};
var g = opts.global;
if (g && ! $.active++) $.event.trigger("ajaxStart");
if (g) $.event.trigger("ajaxSend", [xhr, opts]);
if (s.beforeSend && s.beforeSend(xhr, s) === false) {
s.global && $.active--;
return;
}
if (xhr.aborted)
return;
var cbInvoked = false;
var timedOut = 0;
var sub = form.clk;
if (sub) {
var n = sub.name;
if (n && !sub.disabled) {
opts.extraData = opts.extraData || {};
opts.extraData[n] = sub.value;
if (sub.type == "image") {
opts.extraData[n+'.x'] = form.clk_x;
opts.extraData[n+'.y'] = form.clk_y;
}
}
}
function doSubmit() {
var t = $form.attr('target'), a = $form.attr('action');
form.setAttribute('target',id);
if (form.getAttribute('method') != 'POST')
form.setAttribute('method', 'POST');
if (form.getAttribute('action') != opts.url)
form.setAttribute('action', opts.url);
if (! opts.skipEncodingOverride) {
$form.attr({
encoding: 'multipart/form-data',
enctype:  'multipart/form-data'
});
}
if (opts.timeout)
setTimeout(function() { timedOut = true; cb(); }, opts.timeout);
var extraInputs = [];
try {
if (opts.extraData)
for (var n in opts.extraData)
extraInputs.push(
$('<input type="hidden" name="'+n+'" value="'+opts.extraData[n]+'" />')
.appendTo(form)[0]);
$io.appendTo('body');
$io.data('form-plugin-onload', cb);
form.submit();
}
finally {
form.setAttribute('action',a);
t ? form.setAttribute('target', t) : $form.removeAttr('target');
$(extraInputs).remove();
}
};
if (opts.forceSync)
doSubmit();
else
setTimeout(doSubmit, 10);
var domCheckCount = 100;
function cb() {
if (cbInvoked)
return;
var ok = true;
try {
if (timedOut) throw 'timeout';
var data, doc;
doc = io.contentWindow ? io.contentWindow.document : io.contentDocument ? io.contentDocument : io.document;
var isXml = opts.dataType == 'xml' || doc.XMLDocument || $.isXMLDoc(doc);
log('isXml='+isXml);
if (!isXml && (doc.body == null || doc.body.innerHTML == '')) {
if (--domCheckCount) {
log('requeing onLoad callback, DOM not available');
setTimeout(cb, 250);
return;
}
log('Could not access iframe DOM after 100 tries.');
return;
}
log('response detected');
cbInvoked = true;
xhr.responseText = doc.body ? doc.body.innerHTML : null;
xhr.responseXML = doc.XMLDocument ? doc.XMLDocument : doc;
xhr.getResponseHeader = function(header){
var headers = {'content-type': opts.dataType};
return headers[header];
};
if (opts.dataType == 'json' || opts.dataType == 'script') {
var ta = doc.getElementsByTagName('textarea')[0];
if (ta)
xhr.responseText = ta.value;
else {
var pre = doc.getElementsByTagName('pre')[0];
if (pre)
xhr.responseText = pre.innerHTML;
}
}
else if (opts.dataType == 'xml' && !xhr.responseXML && xhr.responseText != null) {
xhr.responseXML = toXml(xhr.responseText);
}
data = $.httpData(xhr, opts.dataType);
}
catch(e){
log('error caught:',e);
ok = false;
xhr.error = e;
$.handleError(opts, xhr, 'error', e);
}
if (ok) {
opts.success(data, 'success');
if (g) $.event.trigger("ajaxSuccess", [xhr, opts]);
}
if (g) $.event.trigger("ajaxComplete", [xhr, opts]);
if (g && ! --$.active) $.event.trigger("ajaxStop");
if (opts.complete) opts.complete(xhr, ok ? 'success' : 'error');
setTimeout(function() {
$io.removeData('form-plugin-onload');
$io.remove();
xhr.responseXML = null;
}, 100);
};
function toXml(s, doc) {
if (window.ActiveXObject) {
doc = new ActiveXObject('Microsoft.XMLDOM');
doc.async = 'false';
doc.loadXML(s);
}
else
doc = (new DOMParser()).parseFromString(s, 'text/xml');
return (doc && doc.documentElement && doc.documentElement.tagName != 'parsererror') ? doc : null;
};
};
};
$.fn.ajaxForm = function(options) {
return this.ajaxFormUnbind().bind('submit.form-plugin', function(e) {
e.preventDefault();
$(this).ajaxSubmit(options);
}).bind('click.form-plugin', function(e) {
var target = e.target;
var $el = $(target);
if (!($el.is(":submit,input:image"))) {
var t = $el.closest(':submit');
if (t.length == 0)
return;
target = t[0];
}
var form = this;
form.clk = target;
if (target.type == 'image') {
if (e.offsetX != undefined) {
form.clk_x = e.offsetX;
form.clk_y = e.offsetY;
} else if (typeof $.fn.offset == 'function') {
var offset = $el.offset();
form.clk_x = e.pageX - offset.left;
form.clk_y = e.pageY - offset.top;
} else {
form.clk_x = e.pageX - target.offsetLeft;
form.clk_y = e.pageY - target.offsetTop;
}
}
setTimeout(function() { form.clk = form.clk_x = form.clk_y = null; }, 100);
});
};
$.fn.ajaxFormUnbind = function() {
return this.unbind('submit.form-plugin click.form-plugin');
};
$.fn.formToArray = function(semantic) {
var a = [];
if (this.length == 0) return a;
var form = this[0];
var els = semantic ? form.getElementsByTagName('*') : form.elements;
if (!els) return a;
for(var i=0, max=els.length; i < max; i++) {
var el = els[i];
var n = el.name;
if (!n) continue;
if (semantic && form.clk && el.type == "image") {
if(!el.disabled && form.clk == el) {
a.push({name: n, value: $(el).val()});
a.push({name: n+'.x', value: form.clk_x}, {name: n+'.y', value: form.clk_y});
}
continue;
}
var v = $.fieldValue(el, true);
if (v && v.constructor == Array) {
for(var j=0, jmax=v.length; j < jmax; j++)
a.push({name: n, value: v[j]});
}
else if (v !== null && typeof v != 'undefined')
a.push({name: n, value: v});
}
if (!semantic && form.clk) {
var $input = $(form.clk), input = $input[0], n = input.name;
if (n && !input.disabled && input.type == 'image') {
a.push({name: n, value: $input.val()});
a.push({name: n+'.x', value: form.clk_x}, {name: n+'.y', value: form.clk_y});
}
}
return a;
};
$.fn.formSerialize = function(semantic) {
return $.param(this.formToArray(semantic));
};
$.fn.fieldSerialize = function(successful) {
var a = [];
this.each(function() {
var n = this.name;
if (!n) return;
var v = $.fieldValue(this, successful);
if (v && v.constructor == Array) {
for (var i=0,max=v.length; i < max; i++)
a.push({name: n, value: v[i]});
}
else if (v !== null && typeof v != 'undefined')
a.push({name: this.name, value: v});
});
return $.param(a);
};
$.fn.fieldValue = function(successful) {
for (var val=[], i=0, max=this.length; i < max; i++) {
var el = this[i];
var v = $.fieldValue(el, successful);
if (v === null || typeof v == 'undefined' || (v.constructor == Array && !v.length))
continue;
v.constructor == Array ? $.merge(val, v) : val.push(v);
}
return val;
};
$.fieldValue = function(el, successful) {
var n = el.name, t = el.type, tag = el.tagName.toLowerCase();
if (typeof successful == 'undefined') successful = true;
if (successful && (!n || el.disabled || t == 'reset' || t == 'button' ||
(t == 'checkbox' || t == 'radio') && !el.checked ||
(t == 'submit' || t == 'image') && el.form && el.form.clk != el ||
tag == 'select' && el.selectedIndex == -1))
return null;
if (tag == 'select') {
var index = el.selectedIndex;
if (index < 0) return null;
var a = [], ops = el.options;
var one = (t == 'select-one');
var max = (one ? index+1 : ops.length);
for(var i=(one ? index : 0); i < max; i++) {
var op = ops[i];
if (op.selected) {
var v = op.value;
if (!v)
v = (op.attributes && op.attributes['value'] && !(op.attributes['value'].specified)) ? op.text : op.value;
if (one) return v;
a.push(v);
}
}
return a;
}
return el.value;
};
$.fn.clearForm = function() {
return this.each(function() {
$('input,select,textarea', this).clearFields();
});
};
$.fn.clearFields = $.fn.clearInputs = function() {
return this.each(function() {
var t = this.type, tag = this.tagName.toLowerCase();
if (t == 'text' || t == 'password' || tag == 'textarea')
this.value = '';
else if (t == 'checkbox' || t == 'radio')
this.checked = false;
else if (tag == 'select')
this.selectedIndex = -1;
});
};
$.fn.resetForm = function() {
return this.each(function() {
if (typeof this.reset == 'function' || (typeof this.reset == 'object' && !this.reset.nodeType))
this.reset();
});
};
$.fn.enable = function(b) {
if (b == undefined) b = true;
return this.each(function() {
this.disabled = !b;
});
};
$.fn.selected = function(select) {
if (select == undefined) select = true;
return this.each(function() {
var t = this.type;
if (t == 'checkbox' || t == 'radio')
this.checked = select;
else if (this.tagName.toLowerCase() == 'option') {
var $sel = $(this).parent('select');
if (select && $sel[0] && $sel[0].type == 'select-one') {
$sel.find('option').selected(false);
}
this.selected = select;
}
});
};
function log() {
if ($.fn.ajaxSubmit.debug) {
var msg = '[jquery.form] ' + Array.prototype.join.call(arguments,'');
if (window.console && window.console.log)
window.console.log(msg);
else if (window.opera && window.opera.postError)
window.opera.postError(msg);
}
};
})(jQuery);
;(function ( $, window, document, undefined ) {
var defaults = {
items:3,
loop:false,
center:false,
mouseDrag:true,
touchDrag:true,
pullDrag: true,
freeDrag:false,
margin:0,
stagePadding:0,
merge:false,
mergeFit:true,
autoWidth:false,
autoHeight:false,
startPosition:0,
URLhashListener:false,
nav: false,
navRewind:true,
navText: ['prev','next'],
slideBy:1,
dots: true,
dotsEach:false,
dotData:false,
lazyLoad:false,
lazyContent:false,
autoplay:false,
autoplayTimeout:5000,
autoplayHoverPause:false,
smartSpeed:250,
fluidSpeed:false,
autoplaySpeed:false,
navSpeed:false,
dotsSpeed:false,
dragEndSpeed:false,
responsive: {},
responsiveRefreshRate : 200,
responsiveBaseElement: window,
responsiveClass:false,
video:false,
videoHeight:false,
videoWidth:false,
animateOut:false,
animateIn:false,
fallbackEasing:'swing',
callbacks:false,
info: false,
nestedItemSelector:false,
itemElement:'div',
stageElement:'div',
themeClass: 'owl-theme',
baseClass:'owl-carousel',
itemClass:'owl-item',
centerClass:'center',
activeClass: 'active',
navContainerClass:'owl-nav',
navClass:['owl-prev','owl-next'],
controlsClass:'owl-controls',
dotClass: 'owl-dot',
dotsClass:'owl-dots',
autoHeightClass:'owl-height'
};
var dom = {
el:null,
$el:null,
stage:null,
$stage:null,
oStage:null,
$oStage:null,
$items:null,
$oItems:null,
$cItems:null,
$cc:null,
$navPrev:null,
$navNext:null,
$page:null,
$nav:null,
$content:null
};
var width = {
el:0,
stage:0,
item:0,
prevWindow:0,
cloneLast:  0
};
var num = {
items:0,
oItems: 0,
cItems:0,
active:0,
merged:[],
nav:[],
allPages:0
};
var pos = {
start:0,
max:0,
maxValue:0,
prev:0,
current:0,
currentAbs:0,
currentPage:0,
stage:0,
items:[],
lsCurrent:0
};
var drag = {
start:0,
startX:0,
startY:0,
current:0,
currentX:0,
currentY:0,
offsetX:0,
offsetY:0,
distance:null,
startTime:0,
endTime:0,
updatedX:0,
targetEl:null
};
var speed = {
onDragEnd: 300,
nav:300,
css2speed:0
};
var state = {
isTouch:false,
isScrolling:false,
isSwiping:false,
direction:false,
inMotion:false,
autoplay:false,
lazyContent:false
};
var e = {
_onDragStart:null,
_onDragMove:null,
_onDragEnd:null,
_transitionEnd: null,
_resizer:null,
_responsiveCall:null,
_goToLoop:null,
_checkVisibile: null,
_autoplay:null,
_pause:null,
_play:null,
_stop:null
};
function Owl( element, options ) {
element.owlCarousel = {
'name':'Owl Carousel',
'author':'Bartosz Wojciechowski',
'version':'2.0.0-beta.1.8',
'released':'03.05.2014'
};
this.options = $.extend( {}, defaults, options);
this._options =$.extend( {}, defaults, options);
this.dom =$.extend( {}, dom);
this.width =$.extend( {}, width);
this.num =$.extend( {}, num);
this.pos =$.extend( {}, pos);
this.drag =$.extend( {}, drag);
this.speed =$.extend( {}, speed);
this.state =$.extend( {}, state);
this.e =$.extend( {}, e);
this.dom.el =element;
this.dom.$el =$(element);
this.init();
}
Owl.prototype.init = function(){
this.fireCallback('onInitBefore');
if(!this.dom.$el.hasClass(this.options.baseClass)){
this.dom.$el.addClass(this.options.baseClass);
}
if(!this.dom.$el.hasClass(this.options.themeClass)){
this.dom.$el.addClass(this.options.themeClass);
}
if(this.options.rtl){
this.dom.$el.addClass('owl-rtl');
}
this.browserSupport();
this.sortOptions();
this.setResponsiveOptions();
if(this.options.autoWidth && this.state.imagesLoaded !== true){
var imgs = this.dom.$el.find('img');
if(imgs.length){
this.preloadAutoWidthImages(imgs);
return false;
}
}
this.width.prevWindow = this.windowWidth();
this.createStage();
this.fetchContent();
this.eventsCall();
this.addCustomEvents();
this.internalEvents();
this.dom.$el.addClass('owl-loading');
this.refresh(true);
this.dom.$el.removeClass('owl-loading').addClass('owl-loaded');
this.fireCallback('onInitAfter');
};
Owl.prototype.sortOptions = function(){
var resOpt = this.options.responsive;
this.responsiveSorted = {};
var keys = [],
i, j, k;
for (i in resOpt){
keys.push(i);
}
keys = keys.sort(function (a, b) {return a - b;});
for (j = 0; j < keys.length; j++){
k = keys[j];
this.responsiveSorted[k] = resOpt[k];
}
};
Owl.prototype.setResponsiveOptions = function(){
if(this.options.responsive === false){return false;}
var width = this.windowWidth();
var resOpt = this.options.responsive;
var i,j,k, minWidth;
for(k in this._options){
if(k !== 'responsive'){
this.options[k] = this._options[k];
}
}
for (i in this.responsiveSorted){
if(i<= width){
minWidth = i;
for(j in this.responsiveSorted[minWidth]){
this.options[j] = this.responsiveSorted[minWidth][j];
}
}
}
this.num.breakpoint = minWidth;
if(this.options.responsiveClass){
this.dom.$el.attr('class',
function(i, c){
return c.replace(/\b owl-responsive-\S+/g, '');
}).addClass('owl-responsive-'+minWidth);
}
};
Owl.prototype.optionsLogic = function(){
this.dom.$el.toggleClass('owl-center',this.options.center);
if(this.options.slideBy && this.options.slideBy === 'page'){
this.options.slideBy = this.options.items;
} else if(this.options.slideBy > this.options.items){
this.options.slideBy = this.options.items;
}
if(this.options.loop && this.num.oItems < this.options.items){
this.options.loop = false;
}
if(this.num.oItems <= this.options.items){
this.options.navRewind = false;
}
if(this.options.autoWidth){
this.options.stagePadding = false;
this.options.dotsEach = 1;
this.options.merge = false;
}
if(this.state.lazyContent){
this.options.loop = false;
this.options.merge = false;
this.options.dots = false;
this.options.freeDrag = false;
this.options.lazyContent = true;
}
if((this.options.animateIn || this.options.animateOut) && this.options.items === 1 && this.support3d){
this.state.animate = true;
} else {this.state.animate = false;}
};
Owl.prototype.createStage = function(){
var oStage = document.createElement('div');
var stage = document.createElement(this.options.stageElement);
oStage.className = 'owl-stage-outer';
stage.className = 'owl-stage';
oStage.appendChild(stage);
this.dom.el.appendChild(oStage);
this.dom.oStage = oStage;
this.dom.$oStage = $(oStage);
this.dom.stage = stage;
this.dom.$stage = $(stage);
oStage = null;
stage = null;
};
Owl.prototype.createItem = function(){
var item = document.createElement(this.options.itemElement);
item.className = this.options.itemClass;
return item;
};
Owl.prototype.fetchContent = function(extContent){
if(extContent){
this.dom.$content = (extContent instanceof jQuery) ? extContent : $(extContent);
}
else if(this.options.nestedItemSelector){
this.dom.$content= this.dom.$el.find('.'+this.options.nestedItemSelector).not('.owl-stage-outer');
}
else {
this.dom.$content= this.dom.$el.children().not('.owl-stage-outer');
}
this.num.oItems = this.dom.$content.length;
if(this.num.oItems !== 0){
this.initStructure();
}
};
Owl.prototype.initStructure = function(){
if(this.options.lazyContent && this.num.oItems >= this.options.items*3){
this.state.lazyContent = true;
} else {
this.state.lazyContent = false;
}
if(this.state.lazyContent){
this.pos.currentAbs = this.options.items;
this.dom.$content.remove();
} else {
this.createNormalStructure();
}
};
Owl.prototype.createNormalStructure = function(){
for(var i = 0; i < this.num.oItems; i++){
var item = this.fillItem(this.dom.$content,i);
this.dom.$stage.append(item);
}
this.dom.$content = null;
};
Owl.prototype.createCustomStructure = function(howManyItems){
for(var i = 0; i < howManyItems; i++){
var emptyItem = this.createItem();
var item = $(emptyItem);
this.setData(item,false);
this.dom.$stage.append(item);
}
};
Owl.prototype.createLazyContentStructure = function(refresh){
if(!this.state.lazyContent){return false;}
if(refresh && this.dom.$stage.children().length === this.options.items*3){
return false;
}
this.dom.$stage.empty();
this.createCustomStructure(3*this.options.items);
};
Owl.prototype.fillItem = function(content,i){
var emptyItem = this.createItem();
var c = content[i] || content;
var traversed = this.traversContent(c);
this.setData(emptyItem,false,traversed);
return $(emptyItem).append(c);
};
Owl.prototype.traversContent = function(c){
var $c = $(c), dotValue, hashValue;
if(this.options.dotData){
dotValue = $c.find('[data-dot]').andSelf().data('dot');
}
if(this.options.URLhashListener){
hashValue = $c.find('[data-hash]').andSelf().data('hash');
}
return {
dot : dotValue || false,
hash : hashValue  || false
};
};
Owl.prototype.setData = function(item,cloneObj,traversed){
var dot,hash;
if(traversed){
dot = traversed.dot;
hash = traversed.hash;
}
var itemData = {
index:false,
indexAbs:false,
posLeft:false,
clone:false,
active:false,
loaded:false,
lazyLoad:false,
current:false,
width:false,
center:false,
page:false,
hasVideo:false,
playVideo:false,
dot:dot,
hash:hash
};
if(cloneObj){
itemData = $.extend({}, itemData, cloneObj.data('owl-item'));
}
$(item).data('owl-item', itemData);
};
Owl.prototype.updateLocalContent = function(){
this.dom.$oItems = this.dom.$stage.find('.'+this.options.itemClass).filter(function(){
return $(this).data('owl-item').clone === false;
});
this.num.oItems = this.dom.$oItems.length;
for(var k = 0; k<this.num.oItems; k++){
var item = this.dom.$oItems.eq(k);
item.data('owl-item').index = k;
}
};
Owl.prototype.checkVideoLinks = function(){
if(!this.options.video){return false;}
var videoEl,item;
for(var i = 0; i<this.num.items; i++){
item = this.dom.$items.eq(i);
if(item.data('owl-item').hasVideo){
continue;
}
videoEl = item.find('.owl-video');
if(videoEl.length){
this.state.hasVideos = true;
this.dom.$items.eq(i).data('owl-item').hasVideo = true;
videoEl.css('display','none');
this.getVideoInfo(videoEl,item);
}
}
};
Owl.prototype.getVideoInfo = function(videoEl,item){
var info, type, id,
vimeoId = videoEl.data('vimeo-id'),
youTubeId = videoEl.data('youtube-id'),
width = videoEl.data('width') || this.options.videoWidth,
height = videoEl.data('height') || this.options.videoHeight,
url = videoEl.attr('href');
if(vimeoId){
type = 'vimeo';
id = vimeoId;
} else if(youTubeId){
type = 'youtube';
id = youTubeId;
} else if(url){
id = url.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);
if (id[3].indexOf('youtu') > -1) {
type = 'youtube';
} else if (id[3].indexOf('vimeo') > -1) {
type = 'vimeo';
}
id = id[6];
} else {
throw new Error('Missing video link.');
}
item.data('owl-item').videoType = type;
item.data('owl-item').videoId = id;
item.data('owl-item').videoWidth = width;
item.data('owl-item').videoHeight = height;
info = {
type: type,
id: id
};
var dimensions = width && height ? 'style="width:'+width+'px;height:'+height+'px;"' : '';
videoEl.wrap('<div class="owl-video-wrapper"'+dimensions+'></div>');
this.createVideoTn(videoEl,info);
};
Owl.prototype.createVideoTn = function(videoEl,info){
var tnLink,icon,height;
var customTn = videoEl.find('img');
var srcType = 'src';
var lazyClass = '';
var that = this;
if(this.options.lazyLoad){
srcType = 'data-src';
lazyClass = 'owl-lazy';
}
if(customTn.length){
addThumbnail(customTn.attr(srcType));
customTn.remove();
return false;
}
function addThumbnail(tnPath){
icon = '<div class="owl-video-play-icon"></div>';
if(that.options.lazyLoad){
tnLink = '<div class="owl-video-tn '+ lazyClass +'" '+ srcType +'="'+ tnPath +'"></div>';
} else{
tnLink = '<div class="owl-video-tn" style="opacity:1;background-image:url(' + tnPath + ')"></div>';
}
videoEl.after(tnLink);
videoEl.after(icon);
}
if(info.type === 'youtube'){
var path = "http://img.youtube.com/vi/"+ info.id +"/hqdefault.jpg";
addThumbnail(path);
} else
if(info.type === 'vimeo'){
$.ajax({
type:'GET',
url: 'http://vimeo.com/api/v2/video/' + info.id + '.json',
jsonp: 'callback',
dataType: 'jsonp',
success: function(data){
var path = data[0].thumbnail_large;
addThumbnail(path);
if(that.options.loop){
that.updateItemState();
}
}
});
}
};
Owl.prototype.stopVideo = function(){
this.fireCallback('onVideoStop');
var item = this.dom.$items.eq(this.state.videoPlayIndex);
item.find('.owl-video-frame').remove();
item.removeClass('owl-video-playing');
this.state.videoPlay = false;
};
Owl.prototype.playVideo = function(ev){
this.fireCallback('onVideoPlay');
if(this.state.videoPlay){
this.stopVideo();
}
var videoLink,videoWrap,
target = $(ev.target || ev.srcElement),
item = target.closest('.'+this.options.itemClass);
var videoType = item.data('owl-item').videoType,
id = item.data('owl-item').videoId,
width = item.data('owl-item').videoWidth || Math.floor(item.data('owl-item').width - this.options.margin),
height = item.data('owl-item').videoHeight || this.dom.$stage.height();
if(videoType === 'youtube'){
videoLink = "<iframe width=\""+ width +"\" height=\""+ height +"\" src=\"http://www.youtube.com/embed/" + id + "?autoplay=1&v=" + id + "\" frameborder=\"0\" allowfullscreen></iframe>";
} else if(videoType === 'vimeo'){
videoLink = '<iframe src="http://player.vimeo.com/video/'+ id +'?autoplay=1" width="'+ width +'" height="'+ height +'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
}
item.addClass('owl-video-playing');
this.state.videoPlay = true;
this.state.videoPlayIndex = item.data('owl-item').indexAbs;
videoWrap = $('<div style="height:'+ height +'px; width:'+ width +'px" class="owl-video-frame">' + videoLink + '</div>');
target.after(videoWrap);
};
Owl.prototype.loopClone = function(){
if(!this.options.loop || this.state.lazyContent || this.num.oItems < this.options.items){return false;}
var firstClone,lastClone, i,
num=this.options.items,
lastNum =this.num.oItems-1;
if(this.options.stagePadding && this.options.items === 1){
num+=1;
}
this.num.cItems = num * 2;
for(i = 0; i < num; i++){
var first =this.dom.$oItems.eq(i).clone(true,true);
var last =this.dom.$oItems.eq(lastNum-i).clone(true,true);
firstClone = $(first[0]).addClass('cloned');
lastClone = $(last[0]).addClass('cloned');
this.setData(firstClone[0],first);
this.setData(lastClone[0],last);
firstClone.data('owl-item').clone = true;
lastClone.data('owl-item').clone = true;
this.dom.$stage.append(firstClone);
this.dom.$stage.prepend(lastClone);
firstClone = lastClone = null;
}
this.dom.$cItems = this.dom.$stage.find('.'+this.options.itemClass).filter(function(){
return $(this).data('owl-item').clone === true;
});
};
Owl.prototype.reClone = function(){
if(this.dom.$cItems !== null){
this.dom.$cItems.remove();
this.dom.$cItems = null;
this.num.cItems = 0;
}
if(!this.options.loop){
return;
}
this.loopClone();
};
Owl.prototype.calculate = function(){
var i,j,k,dist,posLeft=0,fullWidth=0;
this.width.el = this.dom.$el.width() - (this.options.stagePadding*2);
this.width.view = this.dom.$el.width();
var elMinusMargin = this.width.el - (this.options.margin * (this.options.items === 1 ? 0 : this.options.items -1));
this.width.el =  this.width.el + this.options.margin;
this.width.item = ((elMinusMargin / this.options.items) + this.options.margin).toFixed(3);
this.dom.$items = this.dom.$stage.find('.owl-item');
this.num.items = this.dom.$items.length;
if(this.options.autoWidth){
this.dom.$items.css('width','');
}
this.pos.items = [];
this.num.merged = [];
this.num.nav = [];
if(this.options.rtl){
dist = this.options.center ? -((this.width.el)/2) : 0;
} else {
dist = this.options.center ? (this.width.el)/2 : 0;
}
this.width.mergeStage = 0;
for(i = 0; i<this.num.items; i++){
if(this.options.merge){
var mergeNumber = this.dom.$items.eq(i).find('[data-merge]').attr('data-merge') || 1;
if(this.options.mergeFit && mergeNumber > this.options.items){
mergeNumber = this.options.items;
}
this.num.merged.push(parseInt(mergeNumber));
this.width.mergeStage += this.width.item * this.num.merged[i];
} else {
this.num.merged.push(1);
}
if(this.options.loop){
if(i>=this.num.cItems/2 && i<this.num.cItems/2+this.num.oItems){
this.num.nav.push(this.num.merged[i]);
}
} else {
this.num.nav.push(this.num.merged[i]);
}
var iWidth = this.width.item * this.num.merged[i];
if(this.options.autoWidth){
iWidth = this.dom.$items.eq(i).width() + this.options.margin;
if(this.options.rtl){
this.dom.$items[i].style.marginLeft = this.options.margin + 'px';
} else {
this.dom.$items[i].style.marginRight = this.options.margin + 'px';
}
}
this.pos.items.push(dist);
this.dom.$items.eq(i).data('owl-item').posLeft = posLeft;
this.dom.$items.eq(i).data('owl-item').width = iWidth;
if(this.options.rtl){
dist += iWidth;
posLeft += iWidth;
} else{
dist -= iWidth;
posLeft -= iWidth;
}
fullWidth -= Math.abs(iWidth);
if(this.options.center){
this.pos.items[i] = !this.options.rtl ? this.pos.items[i] - (iWidth/2) : this.pos.items[i] + (iWidth/2);
}
}
if(this.options.autoWidth){
this.width.stage = this.options.center ? Math.abs(fullWidth) : Math.abs(dist);
} else {
this.width.stage = Math.abs(fullWidth);
}
var allItems = this.num.oItems + this.num.cItems;
for(j = 0; j< allItems; j++){
this.dom.$items.eq(j).data('owl-item').indexAbs = j;
}
this.setMinMax();
this.setSizes();
};
Owl.prototype.setMinMax = function(){
var minimum = this.dom.$oItems.eq(0).data('owl-item').indexAbs;
this.pos.min = 0;
this.pos.minValue = this.pos.items[minimum];
if(!this.options.loop){
this.pos.max = this.num.oItems-1;
}
if(this.options.loop){
this.pos.max = this.num.oItems+this.options.items;
}
if(!this.options.loop && !this.options.center){
this.pos.max = this.num.oItems-this.options.items;
}
if(this.options.loop && this.options.center){
this.pos.max = this.num.oItems+this.options.items;
}
this.pos.maxValue = this.pos.items[this.pos.max];
if((!this.options.loop && !this.options.center && this.options.autoWidth) || (this.options.merge && !this.options.center) ){
var revert = this.options.rtl ? 1 : -1;
for (i = 0; i < this.pos.items.length; i++) {
if( (this.pos.items[i] * revert) < this.width.stage-this.width.el ){
this.pos.max = i+1;
}
}
this.pos.maxValue = this.options.rtl ? this.width.stage-this.width.el : -(this.width.stage-this.width.el);
this.pos.items[this.pos.max] = this.pos.maxValue;
}
if(this.options.center){
this.pos.loop = this.pos.items[0]-this.pos.items[this.num.oItems];
} else {
this.pos.loop = -this.pos.items[this.num.oItems];
}
if(this.num.oItems < this.options.items && !this.options.center){
this.pos.max = 0;
this.pos.maxValue = this.pos.items[0];
}
};
Owl.prototype.setSizes = function(){
if(this.options.stagePadding !== false){
this.dom.oStage.style.paddingLeft = this.options.stagePadding + 'px';
this.dom.oStage.style.paddingRight = this.options.stagePadding + 'px';
}
if(this.options.rtl){
window.setTimeout(function(){
this.dom.stage.style.width = this.width.stage + 'px';
}.bind(this),0);
} else{
this.dom.stage.style.width = this.width.stage + 'px';
}
for(var i=0; i<this.num.items; i++){
if(!this.options.autoWidth){
this.dom.$items[i].style.width = this.width.item - (this.options.margin) + 'px';
}
if(this.options.rtl){
this.dom.$items[i].style.marginLeft = this.options.margin + 'px';
} else {
this.dom.$items[i].style.marginRight = this.options.margin + 'px';
}
if(this.num.merged[i] !== 1 && !this.options.autoWidth){
this.dom.$items[i].style.width = (this.width.item * this.num.merged[i]) - (this.options.margin) + 'px';
}
}
this.width.stagePrev = this.width.stage;
};
Owl.prototype.responsive = function(){
if(!this.num.oItems){return false;}
var elChanged = this.isElWidthChanged();
if(!elChanged){return false;}
var fullscreenElement = document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement;
if(fullscreenElement){
if($(fullscreenElement.parentNode).hasClass('owl-video-frame')){
this.setSpeed(0);
this.state.isFullScreen = true;
}
}
if(fullscreenElement && this.state.isFullScreen && this.state.videoPlay){
return false;
}
if(this.state.isFullScreen){
this.state.isFullScreen = false;
return false;
}
if (this.state.videoPlay) {
if(this.state.orientation !== window.orientation){
this.state.orientation = window.orientation;
return false;
}
}
this.fireCallback('onResponsiveBefore');
this.state.responsive = true;
this.refresh();
this.state.responsive = false;
this.fireCallback('onResponsiveAfter');
};
Owl.prototype.refresh = function(init){
if(this.state.videoPlay){
this.stopVideo();
}
this.setResponsiveOptions();
this.createLazyContentStructure(true);
this.updateLocalContent();
this.optionsLogic();
if(this.num.oItems === 0){
if(this.dom.$page !== null){
this.dom.$page.hide();
}
return false;
}
this.dom.$stage.addClass('owl-refresh');
this.reClone();
this.calculate();
this.dom.$stage.removeClass('owl-refresh');
if(this.state.lazyContent){
this.pos.currentAbs = this.options.items;
}
this.initPosition(init);
if(!this.state.lazyContent && !init){
this.jumpTo(this.pos.current,false);
}
this.checkVideoLinks();
this.updateItemState();
this.rebuildDots();
this.updateControls();
this.autoplay();
this.autoHeight();
this.state.orientation = window.orientation;
this.watchVisibility();
};
Owl.prototype.updateItemState = function(update){
if(!this.state.lazyContent){
this.updateActiveItems();
} else {
this.updateLazyContent(update);
}
if(this.options.center){
this.dom.$items.eq(this.pos.currentAbs)
.addClass(this.options.centerClass)
.data('owl-item').center = true;
}
if(this.options.lazyLoad){
this.lazyLoad();
}
};
Owl.prototype.updateActiveItems = function(){
var i,j,item,ipos,iwidth,wpos,stage,outsideView,foundCurrent;
for(i = 0; i<this.num.items; i++){
this.dom.$items.eq(i).data('owl-item').active = false;
this.dom.$items.eq(i).data('owl-item').current = false;
this.dom.$items.eq(i).removeClass(this.options.activeClass).removeClass(this.options.centerClass);
}
this.num.active = 0;
stageX = this.pos.stage;
view = this.options.rtl ? this.width.view : -this.width.view;
for(j = 0; j<this.num.items; j++){
item = this.dom.$items.eq(j);
ipos = item.data('owl-item').posLeft;
iwidth = item.data('owl-item').width;
outsideView = this.options.rtl ? ipos + iwidth : ipos - iwidth;
if( (this.op(ipos,'<=',stageX) && (this.op(ipos,'>',stageX + view))) ||
(this.op(outsideView,'<',stageX) && this.op(outsideView,'>',stageX + view))
){
this.num.active++;
if(this.options.freeDrag && !foundCurrent){
foundCurrent = true;
this.pos.current = item.data('owl-item').index;
this.pos.currentAbs = item.data('owl-item').indexAbs;
}
item.data('owl-item').active = true;
item.data('owl-item').current = true;
item.addClass(this.options.activeClass);
if(!this.options.lazyLoad){
item.data('owl-item').loaded = true;
}
if(this.options.loop && (this.options.lazyLoad || this.options.center)){
this.updateClonedItemsState(item.data('owl-item').index);
}
}
}
};
Owl.prototype.updateClonedItemsState = function(activeIndex){
var center, $el,i;
if(this.options.center){
center = this.dom.$items.eq(this.pos.currentAbs).data('owl-item').index;
}
for(i = 0; i<this.num.items; i++){
$el = this.dom.$items.eq(i);
if( $el.data('owl-item').index === activeIndex ){
$el.data('owl-item').current = true;
if($el.data('owl-item').index === center ){
$el.addClass(this.options.centerClass);
}
}
}
};
Owl.prototype.updateLazyPosition = function(){
var jumpTo = this.pos.goToLazyContent || 0;
this.pos.lcMovedBy = Math.abs(this.options.items - this.pos.currentAbs);
if(this.options.items < this.pos.currentAbs ){
this.pos.lcCurrent += this.pos.currentAbs - this.options.items;
this.state.lcDirection = 'right';
} else if(this.options.items > this.pos.currentAbs ){
this.pos.lcCurrent -= this.options.items - this.pos.currentAbs;
this.state.lcDirection = 'left';
}
this.pos.lcCurrent = jumpTo !== 0 ? jumpTo : this.pos.lcCurrent;
if(this.pos.lcCurrent >= this.dom.$content.length){
this.pos.lcCurrent = this.pos.lcCurrent-this.dom.$content.length;
} else if(this.pos.lcCurrent < -this.dom.$content.length+1){
this.pos.lcCurrent = this.pos.lcCurrent+this.dom.$content.length;
}
if(this.options.startPosition>0){
this.pos.lcCurrent = this.options.startPosition;
this._options.startPosition = this.options.startPosition = 0;
}
this.pos.lcCurrentAbs = this.pos.lcCurrent < 0 ? this.pos.lcCurrent+this.dom.$content.length : this.pos.lcCurrent;
};
Owl.prototype.updateLazyContent = function(update){
if(this.pos.lcCurrent === undefined){
this.pos.lcCurrent = 0;
this.pos.current = this.pos.currentAbs = this.options.items;
}
if(!update){
this.updateLazyPosition();
}
var i,j,item,contentPos,content,freshItem,freshData;
if(this.state.lcDirection !== false){
for(i = 0; i<this.pos.lcMovedBy; i++){
if(this.state.lcDirection === 'right'){
item = this.dom.$stage.find('.owl-item').eq(0);
item.appendTo(this.dom.$stage);
}
if(this.state.lcDirection === 'left'){
item = this.dom.$stage.find('.owl-item').eq(-1);
item.prependTo(this.dom.$stage);
}
item.data('owl-item').active = false;
}
}
this.dom.$items = this.dom.$stage.find('.owl-item');
for(j = 0; j<this.num.items; j++){
this.dom.$items.eq(j).removeClass(this.options.centerClass);
contentPos = this.pos.lcCurrent + j - this.options.items;// + this.options.startPosition;
if(contentPos >= this.dom.$content.length){
contentPos = contentPos - this.dom.$content.length;
}
if(contentPos < -this.dom.$content.length){
contentPos = contentPos + this.dom.$content.length;
}
content = this.dom.$content.eq(contentPos);
freshItem = this.dom.$items.eq(j);
freshData = freshItem.data('owl-item');
if(freshData.active === false || this.pos.goToLazyContent !== 0 || update === true){
freshItem.empty();
freshItem.append(content.clone(true,true));
freshData.active = true;
freshData.current = true;
if(!this.options.lazyLoad){
freshData.loaded = true;
} else {
freshData.loaded = false;
}
}
}
this.pos.goToLazyContent = 0;
this.pos.current = this.pos.currentAbs = this.options.items;
this.setSpeed(0);
this.animStage(this.pos.items[this.options.items]);
};
Owl.prototype.eventsCall = function(){
this.e._onDragStart =function(e){this.onDragStart(e);}.bind(this);
this.e._onDragMove =function(e){this.onDragMove(e);}.bind(this);
this.e._onDragEnd =function(e){this.onDragEnd(e);}.bind(this);
this.e._transitionEnd =function(e){this.transitionEnd(e);}.bind(this);
this.e._resizer =function(){this.responsiveTimer();}.bind(this);
this.e._responsiveCall =function(){this.responsive();}.bind(this);
this.e._preventClick =function(e){this.preventClick(e);}.bind(this);
this.e._goToHash =function(){this.goToHash();}.bind(this);
this.e._goToPage =function(e){this.goToPage(e);}.bind(this);
this.e._ap = function(){this.autoplay();}.bind(this);
this.e._play = function(){this.play();}.bind(this);
this.e._pause = function(){this.pause();}.bind(this);
this.e._playVideo = function(e){this.playVideo(e);}.bind(this);
this.e._navNext = function(e){
if($(e.target).hasClass('disabled')){return false;}
e.preventDefault();
this.next();
}.bind(this);
this.e._navPrev = function(e){
if($(e.target).hasClass('disabled')){return false;}
e.preventDefault();
this.prev();
}.bind(this);
};
Owl.prototype.responsiveTimer = function(){
if(this.windowWidth() === this.width.prevWindow){
return false;
}
window.clearInterval(this.e._autoplay);
window.clearTimeout(this.resizeTimer);
this.resizeTimer = window.setTimeout(this.e._responsiveCall, this.options.responsiveRefreshRate);
this.width.prevWindow = this.windowWidth();
};
Owl.prototype.internalEvents = function(){
var isTouch = isTouchSupport();
var isTouchIE = isTouchSupportIE();
if(isTouch && !isTouchIE){
this.dragType = ['touchstart','touchmove','touchend','touchcancel'];
} else if(isTouch && isTouchIE){
this.dragType = ['MSPointerDown','MSPointerMove','MSPointerUp','MSPointerCancel'];
} else {
this.dragType = ['mousedown','mousemove','mouseup'];
}
if( (isTouch || isTouchIE) && this.options.touchDrag){
this.on(document, this.dragType[3], this.e._onDragEnd);
} else {
this.dom.$stage.on('dragstart', function() {return false;});
if(this.options.mouseDrag){
this.dom.stage.onselectstart = function(){return false;};
} else {
this.dom.$el.addClass('owl-text-select-on');
}
}
this.dom.$stage.on(this.dragType[2], '.owl-video-play-icon', this.e._playVideo);
if(this.options.URLhashListener){
this.on(window, 'hashchange', this.e._goToHash, false);
}
if(this.options.autoplayHoverPause){
var that = this;
this.dom.$stage.on('mouseover', this.e._pause );
this.dom.$stage.on('mouseleave', this.e._ap );
}
if(this.transitionEndVendor){
this.on(this.dom.stage, this.transitionEndVendor, this.e._transitionEnd, false);
}
if(this.options.responsive !== false){
this.on(window, 'resize', this.e._resizer, false);
}
this.updateEvents();
};
Owl.prototype.updateEvents = function(){
if(this.options.touchDrag && (this.dragType[0] === 'touchstart' || this.dragType[0] === 'MSPointerDown')){
this.on(this.dom.stage, this.dragType[0], this.e._onDragStart,false);
} else if(this.options.mouseDrag && this.dragType[0] === 'mousedown'){
this.on(this.dom.stage, this.dragType[0], this.e._onDragStart,false);
} else {
this.off(this.dom.stage, this.dragType[0], this.e._onDragStart);
}
};
Owl.prototype.onDragStart = function(event){
var ev = event.originalEvent || event || window.event;
if (ev.which === 3) {
return false;
}
if(this.dragType[0] === 'mousedown'){
this.dom.$stage.addClass('owl-grab');
}
this.fireCallback('onTouchStart');
this.drag.startTime = new Date().getTime();
this.setSpeed(0);
this.state.isTouch = true;
this.state.isScrolling = false;
this.state.isSwiping = false;
this.drag.distance = 0;
var isTouchEvent = ev.type === 'touchstart';
var pageX = isTouchEvent ? event.targetTouches[0].pageX : (ev.pageX || ev.clientX);
var pageY = isTouchEvent ? event.targetTouches[0].pageY : (ev.pageY || ev.clientY);
this.drag.offsetX = this.dom.$stage.position().left - this.options.stagePadding;
this.drag.offsetY = this.dom.$stage.position().top;
if(this.options.rtl){
this.drag.offsetX = this.dom.$stage.position().left + this.width.stage - this.width.el + this.options.margin;
}
if(this.state.inMotion && this.support3d){
var animatedPos = this.getTransformProperty();
this.drag.offsetX = animatedPos;
this.animStage(animatedPos);
} else if(this.state.inMotion && !this.support3d ){
this.state.inMotion = false;
return false;
}
this.drag.startX = pageX - this.drag.offsetX;
this.drag.startY = pageY - this.drag.offsetY;
this.drag.start = pageX - this.drag.startX;
this.drag.targetEl = ev.target || ev.srcElement;
this.drag.updatedX = this.drag.start;
this.on(document, this.dragType[1], this.e._onDragMove, false);
this.on(document, this.dragType[2], this.e._onDragEnd, false);
};
Owl.prototype.onDragMove = function(event){
if (!this.state.isTouch){
return;
}
if (this.state.isScrolling){
return;
}
var neighbourItemWidth=0;
var ev = event.originalEvent || event || window.event;
var isTouchEvent = ev.type == 'touchmove';
var pageX = isTouchEvent ? ev.targetTouches[0].pageX : (ev.pageX || ev.clientX);
var pageY = isTouchEvent ? ev.targetTouches[0].pageY : (ev.pageY || ev.clientY);
this.drag.currentX = pageX - this.drag.startX;
this.drag.currentY = pageY - this.drag.startY;
this.drag.distance = this.drag.currentX - this.drag.offsetX;
if (this.drag.distance < 0) {
this.state.direction = this.options.rtl ? 'right' : 'left';
} else if(this.drag.distance > 0){
this.state.direction = this.options.rtl ? 'left' : 'right';
}
if(this.options.loop){
if(this.op(this.drag.currentX, '>', this.pos.minValue) && this.state.direction === 'right' ){
this.drag.currentX -= this.pos.loop;
}else if(this.op(this.drag.currentX, '<', this.pos.maxValue) && this.state.direction === 'left' ){
this.drag.currentX += this.pos.loop;
}
} else {
var minValue = this.options.rtl ? this.pos.maxValue : this.pos.minValue;
var maxValue = this.options.rtl ? this.pos.minValue : this.pos.maxValue;
var pull = this.options.pullDrag ? this.drag.distance / 5 : 0;
this.drag.currentX = Math.max(Math.min(this.drag.currentX, minValue + pull), maxValue + pull);
}
if ((this.drag.distance > 8 || this.drag.distance < -8)) {
if (ev.preventDefault !== undefined) {
ev.preventDefault();
} else {
ev.returnValue = false;
}
this.state.isSwiping = true;
}
this.drag.updatedX = this.drag.currentX;
if ((this.drag.currentY > 16 || this.drag.currentY < -16) && this.state.isSwiping === false) {
this.state.isScrolling = true;
this.drag.updatedX = this.drag.start;
}
this.animStage(this.drag.updatedX);
};
Owl.prototype.onDragEnd = function(event){
if (!this.state.isTouch){
return;
}
if(this.dragType[0] === 'mousedown'){
this.dom.$stage.removeClass('owl-grab');
}
this.fireCallback('onTouchEnd');
this.state.isTouch = false;
this.state.isScrolling = false;
this.state.isSwiping = false;
if(this.drag.distance === 0 && this.state.inMotion !== true){
this.state.inMotion = false;
return false;
}
this.drag.endTime = new Date().getTime();
var compareTimes = this.drag.endTime - this.drag.startTime;
var distanceAbs = Math.abs(this.drag.distance);
if(distanceAbs > 3 || compareTimes > 300){
this.removeClick(this.drag.targetEl);
}
var closest = this.closest(this.drag.updatedX);
this.setSpeed(this.options.dragEndSpeed, false, true);
this.animStage(this.pos.items[closest]);
if(!this.options.pullDrag && this.drag.updatedX === this.pos.items[closest]){
this.transitionEnd();
}
this.drag.distance = 0;
this.off(document, this.dragType[1], this.e._onDragMove);
this.off(document, this.dragType[2], this.e._onDragEnd);
};
Owl.prototype.removeClick = function(target){
this.drag.targetEl = target;
this.on(target,'click', this.e._preventClick, false);
};
Owl.prototype.preventClick = function(ev){
if(ev.preventDefault) {
ev.preventDefault();
}else {
ev.returnValue = false;
}
if(ev.stopPropagation){
ev.stopPropagation();
}
this.off(this.drag.targetEl,'click',this.e._preventClick,false);
};
Owl.prototype.getTransformProperty = function(){
var transform = window.getComputedStyle(this.dom.stage, null).getPropertyValue(this.vendorName + 'transform');
transform = transform.replace(/matrix(3d)?\(|\)/g, '').split(',');
var matrix3d = transform.length === 16;
return matrix3d !== true ? transform[4] : transform[12];
};
Owl.prototype.closest = function(x){
var newX = 0,
pull = 30;
if(!this.options.freeDrag){
for(var i = 0; i< this.num.items; i++){
if(x > this.pos.items[i]-pull && x < this.pos.items[i]+pull){
newX = i;
}else if(this.op(x,'<',this.pos.items[i]) && this.op(x,'>',this.pos.items[i+1 || this.pos.items[i] - this.width.el]) ){
newX = this.state.direction === 'left' ? i+1 : i;
}
}
}
if(!this.options.loop){
if(this.op(x,'>',this.pos.minValue)){
newX = x = this.pos.min;
} else if(this.op(x,'<',this.pos.maxValue)){
newX = x = this.pos.max;
}
}
if(!this.options.freeDrag){
this.pos.currentAbs = newX;
this.pos.current = this.dom.$items.eq(newX).data('owl-item').index;
} else {
this.updateItemState();
return x;
}
return newX;
};
Owl.prototype.animStage = function(pos){
if(this.speed.current !== 0 && this.pos.currentAbs !== this.pos.min){
this.fireCallback('onTransitionStart');
this.state.inMotion = true;
}
var posX = this.pos.stage = pos,
style = this.dom.stage.style;
if(this.support3d){
translate = 'translate3d(' + posX + 'px'+',0px, 0px)';
style[this.transformVendor] = translate;
} else if(this.state.isTouch){
style.left = posX+'px';
} else {
this.dom.$stage.animate({left: posX},this.speed.css2speed, this.options.fallbackEasing, function(){
if(this.state.inMotion){
this.transitionEnd();
}
}.bind(this));
}
this.onChange();
};
Owl.prototype.updatePosition = function(pos){
if(this.num.oItems === 0){return false;}
if(pos === undefined){return false;}
var nextPos = pos;
this.pos.prev = this.pos.currentAbs;
if(this.state.revert){
this.pos.current = this.dom.$items.eq(nextPos).data('owl-item').index;
this.pos.currentAbs = nextPos;
return;
}
if(!this.options.loop){
if(this.options.navRewind){
nextPos = nextPos > this.pos.max ? this.pos.min : (nextPos < 0 ? this.pos.max : nextPos);
} else {
nextPos = nextPos > this.pos.max ? this.pos.max : (nextPos <= 0 ? 0 : nextPos);
}
} else {
nextPos = nextPos >= this.num.oItems ? this.num.oItems-1 : nextPos;
}
this.pos.current = this.dom.$oItems.eq(nextPos).data('owl-item').index;
this.pos.currentAbs = this.dom.$oItems.eq(nextPos).data('owl-item').indexAbs;
};
Owl.prototype.setSpeed = function(speed,pos,drag) {
var s = speed,
nextPos = pos;
if((s === false && s !== 0 && drag !== true) || s === undefined){
var diff = Math.abs(nextPos - this.pos.prev);
diff = diff === 0 ? 1 : diff;
if(diff>6){diff = 6;}
s = diff * this.options.smartSpeed;
}
if(s === false && drag === true){
s = this.options.smartSpeed;
}
if(s === 0){s=0;}
if(this.support3d){
var style = this.dom.stage.style;
style.webkitTransitionDuration = style.MsTransitionDuration = style.msTransitionDuration = style.MozTransitionDuration = style.OTransitionDuration = style.transitionDuration = (s / 1000) + 's';
} else{
this.speed.css2speed = s;
}
this.speed.current = s;
return s;
};
Owl.prototype.jumpTo = function(pos,update){
if(this.state.lazyContent){
this.pos.goToLazyContent = pos;
}
this.updatePosition(pos);
this.setSpeed(0);
this.animStage(this.pos.items[this.pos.currentAbs]);
if(update !== true){
this.updateItemState();
}
};
Owl.prototype.goTo = function(pos,speed){
if(this.state.lazyContent && this.state.inMotion){
return false;
}
this.updatePosition(pos);
if(this.state.animate){speed = 0;}
this.setSpeed(speed,this.pos.currentAbs);
if(this.state.animate){this.animate();}
this.animStage(this.pos.items[this.pos.currentAbs]);
};
Owl.prototype.next = function(optionalSpeed){
var s = optionalSpeed || this.options.navSpeed;
if(this.options.loop && !this.state.lazyContent){
this.goToLoop(this.options.slideBy, s);
}else{
this.goTo(this.pos.current + this.options.slideBy, s);
}
};
Owl.prototype.prev = function(optionalSpeed){
var s = optionalSpeed || this.options.navSpeed;
if(this.options.loop && !this.state.lazyContent){
this.goToLoop(-this.options.slideBy, s);
}else{
this.goTo(this.pos.current-this.options.slideBy, s);
}
};
Owl.prototype.goToLoop = function(distance,speed){
var revert = this.pos.currentAbs,
prevPosition = this.pos.currentAbs,
newPosition = this.pos.currentAbs + distance,
direction = prevPosition - newPosition < 0 ? true : false;
this.state.revert = true;
if(newPosition < 1 && direction === false){
this.state.bypass = true;
revert = this.num.items - (this.options.items-prevPosition) - this.options.items;
this.jumpTo(revert,true);
} else if(newPosition >= this.num.items - this.options.items && direction === true ){
this.state.bypass = true;
revert = prevPosition - this.num.oItems;
this.jumpTo(revert,true);
}
window.clearTimeout(this.e._goToLoop);
this.e._goToLoop = window.setTimeout(function(){
this.state.bypass = false;
this.goTo(revert + distance, speed);
this.state.revert = false;
}.bind(this), 30);
};
Owl.prototype.initPosition = function(init){
if( !this.dom.$oItems || !init || this.state.lazyContent ){return false;}
var pos = this.options.startPosition;
if(this.options.startPosition === 'URLHash'){
pos = this.options.startPosition = this.hashPosition();
} else if(typeof this.options.startPosition !== Number && !this.options.center){
this.options.startPosition = 0;
}
this.dom.oStage.scrollLeft = 0;
this.jumpTo(pos,true);
};
Owl.prototype.goToHash = function(){
var pos = this.hashPosition();
if(pos === false){
pos = 0;
}
this.dom.oStage.scrollLeft = 0;
this.goTo(pos,this.options.navSpeed);
};
Owl.prototype.hashPosition = function(){
var hash = window.location.hash.substring(1),
hashPos;
if(hash === ""){return false;}
for(var i=0;i<this.num.oItems; i++){
if(hash === this.dom.$oItems.eq(i).data('owl-item').hash){
hashPos = i;
}
}
return hashPos;
};
Owl.prototype.autoplay = function(){
if(this.options.autoplay && !this.state.videoPlay){
window.clearInterval(this.e._autoplay);
this.e._autoplay = window.setInterval(this.e._play, this.options.autoplayTimeout);
} else {
window.clearInterval(this.e._autoplay);
this.state.autoplay=false;
}
};
Owl.prototype.play = function(timeout, speed){
if(document.hidden === true){return false;}
if(!this.options.autoplay){
this._options.autoplay = this.options.autoplay = true;
this._options.autoplayTimeout = this.options.autoplayTimeout = timeout || this.options.autoplayTimeout || 4000;
this._options.autoplaySpeed = speed || this.options.autoplaySpeed;
}
if(this.options.autoplay === false || this.state.isTouch || this.state.isScrolling || this.state.isSwiping || this.state.inMotion){
window.clearInterval(this.e._autoplay);
return false;
}
if(!this.options.loop && this.pos.current >= this.pos.max){
window.clearInterval(this.e._autoplay);
this.goTo(0);
} else {
this.next(this.options.autoplaySpeed);
}
this.state.autoplay=true;
};
Owl.prototype.stop = function(){
this._options.autoplay = this.options.autoplay = false;
this.state.autoplay = false;
window.clearInterval(this.e._autoplay);
};
Owl.prototype.pause = function(){
window.clearInterval(this.e._autoplay);
};
Owl.prototype.transitionEnd = function(event){
if(event !== undefined){
event.stopPropagation();
var eventTarget = event.target || event.srcElement || event.originalTarget;
if(eventTarget !== this.dom.stage){
return false;
}
}
this.state.inMotion = false;
this.updateItemState();
this.autoplay();
this.fireCallback('onTransitionEnd');
};
Owl.prototype.isElWidthChanged = function(){
var newElWidth = this.dom.$el.width() - this.options.stagePadding,//to check
prevElWidth = this.width.el + this.options.margin;
return newElWidth !== prevElWidth;
};
Owl.prototype.windowWidth = function() {
if(this.options.responsiveBaseElement !== window){
this.width.window =  $(this.options.responsiveBaseElement).width();
} else if (window.innerWidth){
this.width.window = window.innerWidth;
} else if (document.documentElement && document.documentElement.clientWidth){
this.width.window = document.documentElement.clientWidth;
}
return this.width.window;
};
Owl.prototype.controls = function(){
var cc = document.createElement('div');
cc.className = this.options.controlsClass;
this.dom.$el.append(cc);
this.dom.$cc = $(cc);
};
Owl.prototype.updateControls = function(){
if(this.dom.$cc === null && (this.options.nav || this.options.dots)){
this.controls();
}
if(this.dom.$nav === null && this.options.nav){
this.createNavigation(this.dom.$cc[0]);
}
if(this.dom.$page === null && this.options.dots){
this.createDots(this.dom.$cc[0]);
}
if(this.dom.$nav !== null){
if(this.options.nav){
this.dom.$nav.show();
this.updateNavigation();
} else {
this.dom.$nav.hide();
}
}
if(this.dom.$page !== null){
if(this.options.dots){
this.dom.$page.show();
this.updateDots();
} else {
this.dom.$page.hide();
}
}
};
Owl.prototype.createNavigation = function(cc){
var nav = document.createElement('div');
nav.className = this.options.navContainerClass;
cc.appendChild(nav);
var navPrev = document.createElement('div'),
navNext = document.createElement('div');
navPrev.className = this.options.navClass[0];
navNext.className = this.options.navClass[1];
nav.appendChild(navPrev);
nav.appendChild(navNext);
this.dom.$nav = $(nav);
this.dom.$navPrev = $(navPrev).html(this.options.navText[0]);
this.dom.$navNext = $(navNext).html(this.options.navText[1]);
this.dom.$nav.on(this.dragType[2], '.'+this.options.navClass[0], this.e._navPrev);
this.dom.$nav.on(this.dragType[2], '.'+this.options.navClass[1], this.e._navNext);
};
Owl.prototype.createDots = function(cc){
var page = document.createElement('div');
page.className = this.options.dotsClass;
cc.appendChild(page);
this.dom.$page = $(page);
var that = this;
this.dom.$page.on(this.dragType[2], '.'+this.options.dotClass, goToPage);
function goToPage(e){
e.preventDefault();
var page = $(this).data('page');
that.goTo(page,that.options.dotsSpeed);
}
this.rebuildDots();
};
Owl.prototype.rebuildDots = function(){
if(this.dom.$page === null){return false;}
var each, dot, span, counter = 0, last = 0, i, page=0, roundPages = 0;
each = this.options.dotsEach || this.options.items;
if(this.options.center || this.options.dotData){
each = 1;
}
this.dom.$page.html('');
for(i = 0; i < this.num.nav.length; i++){
if(counter >= each || counter === 0){
dot = document.createElement('div');
dot.className = this.options.dotClass;
span = document.createElement('span');
dot.appendChild(span);
var $dot = $(dot);
if(this.options.dotData){
$dot.html(this.dom.$oItems.eq(i).data('owl-item').dot);
}
$dot.data('page',page);
$dot.data('goToPage',roundPages);
this.dom.$page.append(dot);
counter = 0;
roundPages++;
}
this.dom.$oItems.eq(i).data('owl-item').page = roundPages-1;
counter += this.num.nav[i];
page++;
}
if(!this.options.loop && !this.options.center){
for(var j = this.num.nav.length-1; j >= 0; j--){
last += this.num.nav[j];
this.dom.$oItems.eq(j).data('owl-item').page = roundPages-1;
if(last >= each){
break;
}
}
}
this.num.allPages = roundPages-1;
};
Owl.prototype.updateDots = function(){
var dots = this.dom.$page.children();
var itemIndex = this.dom.$oItems.eq(this.pos.current).data('owl-item').page;
for(var i = 0; i < dots.length; i++){
var dotPage = dots.eq(i).data('goToPage');
if(dotPage===itemIndex){
this.pos.currentPage = i;
dots.eq(i).addClass('active');
}else{
dots.eq(i).removeClass('active');
}
}
};
Owl.prototype.updateNavigation = function(){
var isNav = this.options.nav;
this.dom.$navNext.toggleClass('disabled',!isNav);
this.dom.$navPrev.toggleClass('disabled',!isNav);
if(!this.options.loop && isNav && !this.options.navRewind){
if(this.pos.current <= 0){
this.dom.$navPrev.addClass('disabled');
}
if(this.pos.current >= this.pos.max){
this.dom.$navNext.addClass('disabled');
}
}
};
Owl.prototype.insertContent = function(content){
this.dom.$stage.empty();
this.fetchContent(content);
this.refresh();
};
Owl.prototype.addItem = function(content,pos){
pos = pos || 0;
if(this.state.lazyContent){
this.dom.$content = this.dom.$content.add($(content));
this.updateItemState(true);
} else {
var item = this.fillItem(content);
if(this.dom.$oItems.length === 0){
this.dom.$stage.append(item);
} else {
var it = this.dom.$oItems.eq(pos);
if(pos !== -1){it.before(item);} else {it.after(item);}
}
this.refresh();
}
};
Owl.prototype.removeItem = function(pos){
if(this.state.lazyContent){
this.dom.$content.splice(pos,1);
this.updateItemState(true);
} else {
this.dom.$oItems.eq(pos).remove();
this.refresh();
}
};
Owl.prototype.addCustomEvents = function(){
this.e.next = function(e,s){this.next(s);}.bind(this);
this.e.prev = function(e,s){this.prev(s);}.bind(this);
this.e.goTo = function(e,p,s){this.goTo(p,s);}.bind(this);
this.e.jumpTo = function(e,p){this.jumpTo(p);}.bind(this);
this.e.addItem = function(e,c,p){this.addItem(c,p);}.bind(this);
this.e.removeItem = function(e,p){this.removeItem(p);}.bind(this);
this.e.refresh = function(e){this.refresh();}.bind(this);
this.e.destroy = function(e){this.destroy();}.bind(this);
this.e.autoHeight = function(e){this.autoHeight(true);}.bind(this);
this.e.stop = function(){this.stop();}.bind(this);
this.e.play = function(e,t,s){this.play(t,s);}.bind(this);
this.e.insertContent = function(e,d){this.insertContent(d);}.bind(this);
this.dom.$el.on('next.owl',this.e.next);
this.dom.$el.on('prev.owl',this.e.prev);
this.dom.$el.on('goTo.owl',this.e.goTo);
this.dom.$el.on('jumpTo.owl',this.e.jumpTo);
this.dom.$el.on('addItem.owl',this.e.addItem);
this.dom.$el.on('removeItem.owl',this.e.removeItem);
this.dom.$el.on('destroy.owl',this.e.destroy);
this.dom.$el.on('refresh.owl',this.e.refresh);
this.dom.$el.on('autoHeight.owl',this.e.autoHeight);
this.dom.$el.on('play.owl',this.e.play);
this.dom.$el.on('stop.owl',this.e.stop);
this.dom.$el.on('stopVideo.owl',this.e.stop);
this.dom.$el.on('insertContent.owl',this.e.insertContent);
};
Owl.prototype.on = function (element, event, listener, capture) {
if (element.addEventListener) {
element.addEventListener(event, listener, capture);
}
else if (element.attachEvent) {
element.attachEvent('on' + event, listener);
}
};
Owl.prototype.off = function (element, event, listener, capture) {
if (element.removeEventListener) {
element.removeEventListener(event, listener, capture);
}
else if (element.detachEvent) {
element.detachEvent('on' + event, listener);
}
};
Owl.prototype.fireCallback = function(event, data){
if(!this.options.callbacks){return;}
if(this.dom.el.dispatchEvent){
var evt = document.createEvent('CustomEvent');
evt.initCustomEvent(event, true, true, data);
return this.dom.el.dispatchEvent(evt);
} else if (!this.dom.el.dispatchEvent){
return this.dom.$el.trigger(event);
}
};
Owl.prototype.watchVisibility = function(){
if(!isElVisible(this.dom.el)) {
this.dom.$el.addClass('owl-hidden');
window.clearInterval(this.e._checkVisibile);
this.e._checkVisibile = window.setInterval(checkVisible.bind(this),500);
}
function isElVisible(el) {
return el.offsetWidth > 0 && el.offsetHeight > 0;
}
function checkVisible(){
if (isElVisible(this.dom.el)) {
this.dom.$el.removeClass('owl-hidden');
this.refresh();
window.clearInterval(this.e._checkVisibile);
}
}
};
Owl.prototype.onChange = function(){
if(!this.state.isTouch && !this.state.bypass && !this.state.responsive ){
if (this.options.nav || this.options.dots) {
this.updateControls();
}
this.autoHeight();
this.fireCallback('onChangeState');
}
if(!this.state.isTouch && !this.state.bypass){
this.storeInfo();
if(this.state.videoPlay){
this.stopVideo();
}
}
};
Owl.prototype.storeInfo = function(){
var currentPosition = this.state.lazyContent ? this.pos.lcCurrentAbs || 0 : this.pos.current;
var allItems = this.state.lazyContent ? this.dom.$content.length-1 : this.num.oItems;
this.info = {
items: this.options.items,
allItems:allItems,
currentPosition:currentPosition,
currentPage:this.pos.currentPage,
allPages:this.num.allPages,
autoplay:this.state.autoplay,
windowWidth:this.width.window,
elWidth:this.width.el,
breakpoint:this.num.breakpoint
};
if (typeof this.options.info === 'function') {
this.options.info.apply(this,[this.info,this.dom.el]);
}
};
Owl.prototype.autoHeight = function(callback){
if(this.options.autoHeight !== true && callback !== true){
return false;
}
if(!this.dom.$oStage.hasClass(this.options.autoHeightClass)){
this.dom.$oStage.addClass(this.options.autoHeightClass);
}
var loaded = this.dom.$items.eq(this.pos.currentAbs);
var stage = this.dom.$oStage;
var iterations = 0;
var isLoaded = window.setInterval(function() {
iterations += 1;
if(loaded.data('owl-item').loaded){
stage.height(loaded.height() + 'px');
clearInterval(isLoaded);
} else if(iterations === 500){
clearInterval(isLoaded);
}
}, 100);
};
Owl.prototype.preloadAutoWidthImages = function(imgs){
var loaded = 0;
var that = this;
imgs.each(function(i,el){
var $el = $(el);
var img = new Image();
img.onload = function(){
loaded++;
$el.attr('src',img.src);
$el.css('opacity',1);
if(loaded >= imgs.length){
that.state.imagesLoaded = true;
that.init();
}
}
img.src = $el.attr('src') ||  $el.attr('data-src') || $el.attr('data-src-retina');;
})
};
Owl.prototype.lazyLoad = function(){
var attr = isRetina() ? 'data-src-retina' : 'data-src';
var src, img,i;
for(i = 0; i < this.num.items; i++){
var $item = this.dom.$items.eq(i);
if( $item.data('owl-item').current === true && $item.data('owl-item').loaded === false){
img = $item.find('.owl-lazy');
src = img.attr(attr);
src = src || img.attr('data-src');
if(src){
img.css('opacity','0');
this.preload(img,$item);
}
}
}
};
Owl.prototype.preload = function(images,$item){
var that = this;
images.each(function(i,el){
var $el = $(el);
var img = new Image();
img.onload = function(){
$item.data('owl-item').loaded = true;
if($el.is('img')){
$el.attr('src',img.src);
}else{
$el.css('background-image','url(' + img.src + ')');
}
$el.css('opacity',1);
that.fireCallback('onLazyLoaded');
};
img.src = $el.attr('data-src') || $el.attr('data-src-retina');
});
};
Owl.prototype.animate = function(){
var prevItem = this.dom.$items.eq(this.pos.prev),
prevPos = Math.abs(prevItem.data('owl-item').width) * this.pos.prev,
currentItem = this.dom.$items.eq(this.pos.currentAbs),
currentPos = Math.abs(currentItem.data('owl-item').width) * this.pos.currentAbs;
if(this.pos.currentAbs === this.pos.prev){
return false;
}
var pos = currentPos - prevPos;
var tIn = this.options.animateIn;
var tOut = this.options.animateOut;
var that = this;
removeStyles = function(){
$(this).css({
"left" : ""
})
.removeClass('animated owl-animated-out owl-animated-in')
.removeClass(tIn)
.removeClass(tOut);
that.transitionEnd();
};
if(tOut){
prevItem
.css({
"left" : pos + "px"
})
.addClass('animated owl-animated-out '+tOut)
.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', removeStyles);
}
if(tIn){
currentItem
.addClass('animated owl-animated-in '+tIn)
.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', removeStyles);
}
};
Owl.prototype.destroy = function(){
window.clearInterval(this.e._autoplay);
if(this.dom.$el.hasClass(this.options.themeClass)){
this.dom.$el.removeClass(this.options.themeClass);
}
if(this.options.responsive !== false){
this.off(window, 'resize', this.e._resizer);
}
if(this.transitionEndVendor){
this.off(this.dom.stage, this.transitionEndVendor, this.e._transitionEnd);
}
if(this.options.mouseDrag || this.options.touchDrag){
this.off(this.dom.stage, this.dragType[0], this.e._onDragStart);
if(this.options.mouseDrag){
this.off(document, this.dragType[3], this.e._onDragStart);
}
if(this.options.mouseDrag){
this.dom.$stage.off('dragstart', function() {return false;});
this.dom.stage.onselectstart = function(){};
}
}
if(this.options.URLhashListener){
this.off(window, 'hashchange', this.e._goToHash);
}
this.dom.$el.off('next.owl',this.e.next);
this.dom.$el.off('prev.owl',this.e.prev);
this.dom.$el.off('goTo.owl',this.e.goTo);
this.dom.$el.off('jumpTo.owl',this.e.jumpTo);
this.dom.$el.off('addItem.owl',this.e.addItem);
this.dom.$el.off('removeItem.owl',this.e.removeItem);
this.dom.$el.off('refresh.owl',this.e.refresh);
this.dom.$el.off('autoHeight.owl',this.e.autoHeight);
this.dom.$el.off('play.owl',this.e.play);
this.dom.$el.off('stop.owl',this.e.stop);
this.dom.$el.off('stopVideo.owl',this.e.stop);
this.dom.$stage.off('click',this.e._playVideo);
if(this.dom.$cc !== null){
this.dom.$cc.remove();
}
if(this.dom.$cItems !== null){
this.dom.$cItems.remove();
}
this.e = null;
this.dom.$el.data('owlCarousel',null);
delete this.dom.el.owlCarousel;
this.dom.$stage.unwrap();
this.dom.$items.unwrap();
this.dom.$items.contents().unwrap();
this.dom = null;
};
Owl.prototype.op = function(a,o,b){
var rtl = this.options.rtl;
switch(o) {
case '<':
return rtl ? a > b : a < b;
case '>':
return rtl ? a < b : a > b;
case '>=':
return rtl ? a <= b : a >= b;
case '<=':
return rtl ? a >= b : a <= b;
default:
break;
}
};
Owl.prototype.browserSupport = function(){
this.support3d = isPerspective();
if(this.support3d){
this.transformVendor = isTransform();
var endVendors = ['transitionend','webkitTransitionEnd','transitionend','oTransitionEnd'];
this.transitionEndVendor = endVendors[isTransition()];
this.vendorName = this.transformVendor.replace(/Transform/i,'');
this.vendorName = this.vendorName !== '' ? '-'+this.vendorName.toLowerCase()+'-' : '';
}
this.state.orientation = window.orientation;
};
function isStyleSupported(array){
var p,s,fake = document.createElement('div'),list = array;
for(p in list){
s = list[p];
if(typeof fake.style[s] !== 'undefined'){
fake = null;
return [s,p];
}
}
return [false];
}
function isTransition(){
return isStyleSupported(['transition','WebkitTransition','MozTransition','OTransition'])[1];
}
function isTransform() {
return isStyleSupported(['transform','WebkitTransform','MozTransform','OTransform','msTransform'])[0];
}
function isPerspective(){
return isStyleSupported(['perspective','webkitPerspective','MozPerspective','OPerspective','MsPerspective'])[0];
}
function isTouchSupport(){
return 'ontouchstart' in window || !!(navigator.msMaxTouchPoints);
}
function isTouchSupportIE(){
return window.navigator.msPointerEnabled;
}
function isRetina(){
return window.devicePixelRatio > 1;
}
$.fn.owlCarousel = function ( options ) {
return this.each(function () {
if (!$(this).data('owlCarousel')) {
$(this).data( 'owlCarousel',
new Owl( this, options ));
}
});
};
})( window.Zepto || window.jQuery, window,  document );
if (!Function.prototype.bind) {
Function.prototype.bind = function (oThis) {
if (typeof this !== 'function') {
throw new TypeError('Function.prototype.bind - what is trying to be bound is not callable');
}
var aArgs = Array.prototype.slice.call(arguments, 1),
fToBind = this,
fNOP = function () {},
fBound = function () {
return fToBind.apply(this instanceof fNOP && oThis ? this : oThis, aArgs.concat(Array.prototype.slice.call(arguments)));
};
fNOP.prototype = this.prototype;
fBound.prototype = new fNOP();
return fBound;
};
}
function dealHln(p_ishome,p_op,p_topobj) {
var itemId,item;
if(p_ishome) {
setHlnStat(_HomeHln,"block",p_topobj);
setHlnStat(_InternalHln,"none",p_topobj);
}
if(!p_ishome) {
setHlnStat(_HomeHln,"none",p_topobj);
setHlnStat(_InternalHln,"block",p_topobj);
}
if(p_op=="logout") {
setHlnStat(_LoginHln,"none",p_topobj);
setHlnStat(_LogoutHln,"block",p_topobj);
}
if(p_op=="login") {
setHlnStat(_LoginHln,"block",p_topobj);
setHlnStat(_LogoutHln,"none",p_topobj);
}
}
function setHlnStat(p_hash,p_style,p_topobj){
var itemId,item;
while(!p_hash.isEOF()){
itemId = p_hash.read()
item = $(p_topobj).find("#"+itemId);
if(p_style == 'block') item.show();
else item.hide();
}
p_hash.resetPointer();
}
function setRecentCookie(name,val,separator,path,duration,cnt){
var str = divOs.Cookie.getCookie(name);
if(str!=undefined){
var val_arr = new Array();
var val_tmp = new Array();
val_arr = str.split(separator);
val_tmp[0] = val;
for(var i=0,j=1;i<val_arr.length;i++){
if(cnt && j==cnt) continue;
if(val_arr[i]==val) continue;
val_tmp[j] = val_arr[i];
j++;
}
str = val_tmp.join(separator);
divOs.Cookie.setCookie(name,str,duration,path);
}
else{
divOs.Cookie.setCookie(name,val,duration,path);
}
}
function dealRefresh(imgId,codeId,img,code) {
document.getElementById(imgId).src=img;
document.getElementById(codeId).value=code;
}
function refreshAuthCode(p_editor,p_program,p_imgid,p_codeid,p_obj) {
if(p_editor){
var oldUri = p_editor.sajaxUri
p_editor.setUri(p_program);
p_editor.sajaxSubmit('Op=refresh&TagId='+p_editor.TagName+'&imgid='+p_imgid+'&codeid='+p_codeid,'','AjaxEdit.prototype.callBack ')
p_editor.setUri(oldUri);
}else{
var url = $.trim(p_program) ? $.trim(p_program) : window.location.protocol+'//'+window.location.host+'/bin/showauthimg.php';
$.post(url,'Op=refresh&codeType=new',function(data){
if(data.stat == 'success'){
if(typeof p_obj == 'object'){
var closePar  = $(p_obj).closest('.captcha_img');
if(closePar.length){
closePar.find('#'+p_imgid).attr('src',data.img);
closePar.find('#'+p_codeid).val(data.code);
}else{
$('#'+p_imgid).attr('src',data.img);
$('#'+p_codeid).val(data.code);
}
}else{
$('#'+p_imgid).attr('src',data.img);
$('#'+p_codeid).val(data.code);
}
}
},"json");
}
}
function showCmField(p_field,p_default) {
var val = new strUtil(divOs.Cookie.getCookie(p_field));
if(trim(val.String)!="") return val.String;
else return p_default;
}
function checkLogin(p_cookiename) {
if(divOs.Cookie.existCookie(p_cookiename)) return true;
return false;
}
function loginFirst(p_event,p_cookiename,p_front,p_title,p_js) {
var navi = window.navigator.userAgent.toUpperCase();
if(!divOs.Cookie.existCookie(p_cookiename)) {
if(typeof(ssoLoginUrl)!="undefined" && trim(ssoLoginUrl)) { window.location.href = ssoLoginUrl; return false;}
var base64enc = new Base64();
var url = p_front+'/showmodule.php?Mo=34&Type=poplogin&Nbr=0&Special=1&Js='+base64enc.base64encode(p_js);
divOs.openPopSajaxUrl(p_title,"Close=1;Static=0;width=330;height=250;top:160;",url,'PopLogin',p_event);
return false;
}
else return true;
}
function loginFirst_cb(z) {
Res= sajaxIO.prototype.getMsg(z);
if(_chklogin_editor.silent == 0) divOs.closeWaitingWindow('sending');
if(Res.RetCode=='Login') {
eval(unescape(_chklogin_editor.Js)+";");
}else if(Res.RetCode=='Logout') {
var url=_chklogin_editor.Front+'/showmodule.php?Mo=34&Type=poplogin&Nbr=0&Special=1&Js='+_chklogin_editor.Js;
divOs.openPopSajaxUrl(_chklogin_editor.Title,"Close=1;Static=0;width=330;height=250;top:160;",url,'PopLogin');
}
}
function privModuleLoginSuccess() {
divOs.closeAllPopWindow();
}
function logoutSuccess() {
window.location.href=window.location.href;
}
function loginSuccess() {
dealHln('','login') ;
onActionTrigger(1);
}
function reload(p_div,p_moname,p_moid,p_type,p_nbr,p_front,p_loading,p_blankimg,p_param,p_special) {
var el = document.getElementById(p_div);
var dynamicLoad =  "<div class=\"module-loading\"><div class=\"md_top\"><div class=\"mt_03\"><div class=\"mt_02\"><div class=\"mt_01\"><h3>"+p_moname+"</h3></div></div></div></div><div class=\"md_middle\"><div class=\"mm_03\"><div class=\"mm_02\"><div class=\"mm_01\">"+p_loading+"</div></div></div></div><div class=\"md_bottom\"><div class=\"mb_03\"><div class=\"mb_02\"><div class=\"mb_01\"></div></div></div></div></div></div>\n";
var special="";
if(p_special=="1") {
var special="&Special=1";
}
if(p_param){
var param = '&Param='+p_param;
}
dynamicLoad+=  "<img src=\""+p_blankimg+"\" border=\"0\" onload=\"divOs.openSajaxUrl('"+p_div+"','"+p_front+"/showmodule.php?Mo="+p_moid+"&Type="+p_type+"&OO=1&Nbr="+p_nbr+param+special+"');\"/>\n";
divOs.setInnerHTML(el,dynamicLoad);
}
function fixMenuPosition(par,id,cnt,offset,flag) {
var p=par;
var scrollTop ;
if($.browser.webkit)
scrollTop = document.body.scrollTop;
else if(document.documentElement)
scrollTop = document.documentElement.scrollTop;
else
scrollTop = document.body.scrollTop;
var clientHeight = document.documentElement.clientHeight;
var obj = document.getElementById(id);
if(obj.style.display=="none") obj.style.display="block";
offsetTop = 0;
while(true) {
if(par.parentNode.tagName=='UL' && (par.parentNode.id=='MenuTop' || par.parentNode.id=='_MenuTop2')) {
offsetTop+= par.offsetTop;
break;
}
if(par.parentNode.tagName=='UL' ) {
offsetTop+=cnt*25;
}
par = par.parentNode;
}
if(typeof offset=="undefined") offset=10;
if(flag=="menu")
var ch = $("li").attr(id);
else var ch = obj.clientHeight;
var diff = ( offsetTop+ch +offset)  - (scrollTop+clientHeight);
if(diff>0) {
obj.style.top= "-"+diff+"px";
}
else  {
obj.style.top= "-1px";
}
}
function chkVote(p_form,p_cnt) {
if(typeof p_cnt=='undefined' ) p_cnt=0;
var elements = p_form.elements;
var len = elements.length;
var elements = p_form.elements;
var voteName= "";
var votedName= "";
var preName = "";
var preVote ="";
var vName ="";
var votedCnt = 0;
for(var i=0;i<len;i++){
vName = elements[i].name;
if(elements[i].type){
switch(elements[i].type){
case "checkbox":
if(vName!=preName) { preName = vName;  voteName +=","+vName; }
if(elements[i].checked){
if(preVote!=vName) votedName +=","+vName;
preVote = vName;
votedCnt++;
}
break;
case "radio":
if(vName!=preName) { preName = vName;  voteName +=","+vName; }
if(elements[i].checked){
votedName +=","+vName;
preVote = vName;
};
break;
}
}
}
if(voteName!=votedName) return -1;
else if(p_cnt>0 && votedCnt>p_cnt) return -2;
else return 1;
}
function addBookmark(url,title) {
if (window.sidebar) {
window.sidebar.addPanel(title, url,"");
} else if( document.all ) {
window.external.AddFavorite( url, title);
} else if( window.opera && window.print ) {
return true;
}
}
function resizeTrigger() {
var func = window.onresize;
if(typeof(func)!="function") return;
func();
}
function onActionTrigger(p_type) {
for(var i=0;i<triggerAction[p_type].length;i++) {
try{
eval(triggerAction[p_type][i]);
}catch(e){}
}
}
function initAllmenu(p_class,p_again){
if(typeof p_again=='undefined') p_again=0;
var menus = $("."+p_class);
for(var i=0;i<menus.length;i++) {
initmenu(menus.get(i),p_again);
}
}
function initmenu(p_menu,p_again){
var ultags=p_menu.getElementsByTagName("ul")
var litags=p_menu.getElementsByTagName("li")
if(!ultags.length && !litags.length && !p_again) {
setTimeout("initAllmenu('"+p_menu.className+"',1)",1000);
}
for (var t=ultags.length-1; t>-1; t--){
ultags[t].style.visibility="hidden"
ultags[t].style.display="block"
}
for (var t=0; t<ultags.length; t++){
ultags[t].parentNode.getElementsByTagName("div")[0].className+=" subfolderstyle"
if (ultags[t].parentNode.parentNode.id==p_menu.id) {
ultags[t].style.left=ultags[t].parentNode.offsetWidth+"px"
}
else {//else if this is a sub level submenu (ul)
ultags[t].style.left=ultags[t-1].getElementsByTagName("div")[0].offsetWidth+"px"
}
}
for (var t=ultags.length-1; t>-1; t--){
ultags[t].style.visibility="visible"
ultags[t].style.display="none"
}
}
function runLink(opt) {
if(opt.getAttribute("runjs")) {
new Function(opt.getAttribute("value"))();
}
else {
if(trim(opt.getAttribute("value"))=='') return false;
else if(opt.getAttribute("target")=="_blank") {
window.open(opt.getAttribute("value"));
} else {
location.href = opt.getAttribute("value");
}
}
}
function getMediaObj(p_id) {
if (window.document[p_id]) {
return window.document[p_id];
}
if(divOs.browser=="IE"){
return document.getElementById(p_id);
}
else {
if(document.embeds && document.embeds[p_id]) {
return document.embeds[p_id];
}
}
}
function setMediaParam(p_codeid,p_id,p_src,p_action) {
var mediaObj =  getMediaObj(p_id);
var p_code = $('#'+p_codeid).val();
mediaObj.SetVariable("Voc",p_src);
mediaObj.SetVariable("Dec",p_action);
mediaObj.SetVariable("Code",p_code);
mediaObj.SetVariable("go",1);
}
triggerAction = new Array();
triggerAction[0] = new Array();
triggerAction[1] = new Array();
function CharMode(iN){
if (iN>=48 && iN <=57) return 1;
if (iN>=65 && iN <=90) return 2;
if (iN>=97 && iN <=122)  return 4;
else return 8;
}
function bitTotal(num){
modes=0;
for (i=0;i<4;i++){
if (num & 1) modes++;
num>>>=1;
}
return modes;
}
function checkStrong(sPW){
if (sPW.length<=4)  return 1;
Modes=0;
for (i=0;i<sPW.length;i++){
Modes|=CharMode(sPW.charCodeAt(i));
}
return bitTotal(Modes);
}
(function(e){if(!Function.prototype.bind)Function.prototype.bind=function(d){var a=[].slice,b=a.call(arguments,1),c=this,g=function(){},f=function(){return c.apply(this instanceof g?this:d||{},b.concat(a.call(arguments)))};g.prototype=c.prototype;f.prototype=new g;return f};if(typeof e.Code==="undefined")e.Code={};e.Code.Util={registerNamespace:function(){var d=arguments,a=null,b,c,g,f,i;b=0;for(f=d.length;b<f;b++){g=d[b];g=g.split(".");a=g[0];typeof e[a]==="undefined"&&(e[a]={});a=e[a];c=1;for(i=
g.length;c<i;++c)a[g[c]]=a[g[c]]||{},a=a[g[c]]}},coalesce:function(){var d,a;d=0;for(a=arguments.length;d<a;d++)if(!this.isNothing(arguments[d]))return arguments[d];return null},extend:function(d,a,b){var c;this.isNothing(b)&&(b=!0);if(d&&a&&this.isObject(a))for(c in a)this.objectHasProperty(a,c)&&(b?d[c]=a[c]:typeof d[c]==="undefined"&&(d[c]=a[c]))},clone:function(d){var a={};this.extend(a,d);return a},isObject:function(d){return d instanceof Object},isFunction:function(d){return{}.toString.call(d)===
"[object Function]"},isArray:function(d){return d instanceof Array},isLikeArray:function(d){return typeof d.length==="number"},isNumber:function(d){return typeof d==="number"},isString:function(d){return typeof d==="string"},isNothing:function(d){if(typeof d==="undefined"||d===null)return!0;return!1},swapArrayElements:function(d,a,b){var c=d[a];d[a]=d[b];d[b]=c},trim:function(d){return d.replace(/^\s\s*/,"").replace(/\s\s*$/,"")},toCamelCase:function(d){return d.replace(/(\-[a-z])/g,function(a){return a.toUpperCase().replace("-",
"")})},toDashedCase:function(d){return d.replace(/([A-Z])/g,function(a){return"-"+a.toLowerCase()})},arrayIndexOf:function(d,a,b){var c,g,f,e;f=-1;c=0;for(g=a.length;c<g;c++)if(e=a[c],this.isNothing(b)){if(e===d){f=c;break}}else if(this.objectHasProperty(e,b)&&e[b]===d){f=c;break}return f},objectHasProperty:function(d,a){return d.hasOwnProperty?d.hasOwnProperty(a):"undefined"!==typeof d[a]}}})(window);
(function(e,d){d.Browser={ua:null,version:null,safari:null,webkit:null,opera:null,msie:null,chrome:null,mozilla:null,android:null,blackberry:null,iPad:null,iPhone:null,iPod:null,iOS:null,is3dSupported:null,isCSSTransformSupported:null,isTouchSupported:null,isGestureSupported:null,_detect:function(){this.ua=e.navigator.userAgent;this.version=this.ua.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/)||[];this.safari=/Safari/gi.test(e.navigator.appVersion);this.webkit=/webkit/i.test(this.ua);this.opera=/opera/i.test(this.ua);
this.msie=/msie/i.test(this.ua)&&!this.opera;this.chrome=/Chrome/i.test(this.ua);this.firefox=/Firefox/i.test(this.ua);this.fennec=/Fennec/i.test(this.ua);this.mozilla=/mozilla/i.test(this.ua)&&!/(compatible|webkit)/.test(this.ua);this.android=/android/i.test(this.ua);this.blackberry=/blackberry/i.test(this.ua);this.iOS=/iphone|ipod|ipad/gi.test(e.navigator.platform);this.iPad=/ipad/gi.test(e.navigator.platform);this.iPhone=/iphone/gi.test(e.navigator.platform);this.iPod=/ipod/gi.test(e.navigator.platform);
var a=document.createElement("div");this.is3dSupported=!d.isNothing(a.style.WebkitPerspective);this.isCSSTransformSupported=!d.isNothing(a.style.WebkitTransform)||!d.isNothing(a.style.MozTransform)||!d.isNothing(a.style.transformProperty);this.isTouchSupported=this.isEventSupported("touchstart");this.isGestureSupported=this.isEventSupported("gesturestart")},_eventTagNames:{select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"},isEventSupported:function(a){var b=
document.createElement(this._eventTagNames[a]||"div"),c,a="on"+a;c=d.objectHasProperty(b,a);c||(b.setAttribute(a,"return;"),c=typeof b[a]==="function");return c},isLandscape:function(){return d.DOM.windowWidth()>d.DOM.windowHeight()}};d.Browser._detect()})(window,window.Code.Util);
(function(e,d,a){a.extend(a,{Events:{add:function(a,c,g){d(a).bind(c,g)},remove:function(a,c,g){d(a).unbind(c,g)},fire:function(a,c){var g,f=Array.prototype.slice.call(arguments).splice(2);g=typeof c==="string"?{type:c}:c;d(a).trigger(d.Event(g.type,g),f)},getMousePosition:function(a){return{x:a.pageX,y:a.pageY}},getTouchEvent:function(a){return a.originalEvent},getWheelDelta:function(b){var c=0;a.isNothing(b.wheelDelta)?a.isNothing(b.detail)||(c=-b.detail/3):c=b.wheelDelta/120;return c},domReady:function(a){d(document).ready(a)}}})})(window,
window.jQuery,window.Code.Util);
(function(e,d,a){a.extend(a,{DOM:{setData:function(b,c,g){if(a.isLikeArray(b)){var f,d;f=0;for(d=b.length;f<d;f++)a.DOM._setData(b[f],c,g)}else a.DOM._setData(b,c,g)},_setData:function(b,c,g){a.DOM.setAttribute(b,"data-"+c,g)},getData:function(b,c,g){return a.DOM.getAttribute(b,"data-"+c,g)},removeData:function(b,c){if(a.isLikeArray(b)){var g,f;g=0;for(f=b.length;g<f;g++)a.DOM._removeData(b[g],c)}else a.DOM._removeData(b,c)},_removeData:function(b,c){a.DOM.removeAttribute(b,"data-"+c)},isChildOf:function(a,
c){if(c===a)return!1;for(;a&&a!==c;)a=a.parentNode;return a===c},find:function(b,c){if(a.isNothing(c))c=e.document;var g=d(b,c),f=[],i,j;i=0;for(j=g.length;i<j;i++)f.push(g[i]);return f},createElement:function(a,c,g){a=d("<"+a+"></"+a+">");a.attr(c);a.append(g);return a[0]},appendChild:function(a,c){d(c).append(a)},insertBefore:function(a,c){d(a).insertBefore(c)},appendText:function(a,c){d(c).text(a)},appendToBody:function(a){d("body").append(a)},removeChild:function(a){d(a).empty().remove()},removeChildren:function(a){d(a).empty()},
hasAttribute:function(b,c){return!a.isNothing(d(b).attr(c))},getAttribute:function(b,c,g){b=d(b).attr(c);a.isNothing(b)&&!a.isNothing(g)&&(b=g);return b},setAttribute:function(b,c,g){if(a.isLikeArray(b)){var f,d;f=0;for(d=b.length;f<d;f++)a.DOM._setAttribute(b[f],c,g)}else a.DOM._setAttribute(b,c,g)},_setAttribute:function(a,c,g){d(a).attr(c,g)},removeAttribute:function(b,c){if(a.isLikeArray(b)){var g,f;g=0;for(f=b.length;g<f;g++)a.DOM._removeAttribute(b[g],c)}else a.DOM._removeAttribute(b,c)},_removeAttribute:function(a,
c){d(a).removeAttr(c)},addClass:function(b,c){if(a.isLikeArray(b)){var g,f;g=0;for(f=b.length;g<f;g++)a.DOM._addClass(b[g],c)}else a.DOM._addClass(b,c)},_addClass:function(a,c){d(a).addClass(c)},removeClass:function(b,c){if(a.isLikeArray(b)){var g,f;g=0;for(f=b.length;g<f;g++)a.DOM._removeClass(b[g],c)}else a.DOM._removeClass(b,c)},_removeClass:function(a,c){d(a).removeClass(c)},hasClass:function(a,c){d(a).hasClass(c)},setStyle:function(b,c,g){if(a.isLikeArray(b)){var f,d;f=0;for(d=b.length;f<d;f++)a.DOM._setStyle(b[f],
c,g)}else a.DOM._setStyle(b,c,g)},_setStyle:function(b,c,g){var f;if(a.isObject(c))for(f in c)a.objectHasProperty(c,f)&&(f==="width"?a.DOM.width(b,c[f]):f==="height"?a.DOM.height(b,c[f]):d(b).css(f,c[f]));else d(b).css(c,g)},getStyle:function(a,c){return d(a).css(c)},hide:function(b){if(a.isLikeArray(b)){var c,g;c=0;for(g=b.length;c<g;c++)a.DOM._hide(b[c])}else a.DOM._hide(b)},_hide:function(a){d(a).hide()},show:function(b){if(a.isLikeArray(b)){var c,g;c=0;for(g=b.length;c<g;c++)a.DOM._show(b[c])}else a.DOM._show(b)},
_show:function(a){d(a).show()},width:function(b,c){a.isNothing(c)||d(b).width(c);return d(b).width()},outerWidth:function(a){return d(a).outerWidth()},height:function(b,c){a.isNothing(c)||d(b).height(c);return d(b).height()},outerHeight:function(a){return d(a).outerHeight()},documentWidth:function(){return d(document.documentElement).width()},documentHeight:function(){return d(document.documentElement).height()},documentOuterWidth:function(){return a.DOM.width(document.documentElement)},documentOuterHeight:function(){return a.DOM.outerHeight(document.documentElement)},
bodyWidth:function(){return d(document.body).width()},bodyHeight:function(){return d(document.body).height()},bodyOuterWidth:function(){return a.DOM.outerWidth(document.body)},bodyOuterHeight:function(){return a.DOM.outerHeight(document.body)},windowWidth:function(){if(!e.innerWidth)return d(e).width();return e.innerWidth},windowHeight:function(){if(!e.innerHeight)return d(e).height();return e.innerHeight},windowScrollLeft:function(){if(!e.pageXOffset)return d(e).scrollLeft();return e.pageXOffset},
windowScrollTop:function(){if(!e.pageYOffset)return d(e).scrollTop();return e.pageYOffset}}})})(window,window.jQuery,window.Code.Util);
(function(e,d){d.extend(d,{Animation:{_applyTransitionDelay:50,_transitionEndLabel:e.document.documentElement.style.webkitTransition!==void 0?"webkitTransitionEnd":"transitionend",_transitionEndHandler:null,_transitionPrefix:e.document.documentElement.style.webkitTransition!==void 0?"webkitTransition":e.document.documentElement.style.MozTransition!==void 0?"MozTransition":"transition",_transformLabel:e.document.documentElement.style.webkitTransform!==void 0?"webkitTransform":e.document.documentElement.style.MozTransition!==
void 0?"MozTransform":"transform",_getTransitionEndHandler:function(){if(d.isNothing(this._transitionEndHandler))this._transitionEndHandler=this._onTransitionEnd.bind(this);return this._transitionEndHandler},stop:function(a){if(d.Browser.isCSSTransformSupported){var b={};d.Events.remove(a,this._transitionEndLabel,this._getTransitionEndHandler());d.isNothing(a.callbackLabel)&&delete a.callbackLabel;b[this._transitionPrefix+"Property"]="";b[this._transitionPrefix+"Duration"]="";b[this._transitionPrefix+
"TimingFunction"]="";b[this._transitionPrefix+"Delay"]="";b[this._transformLabel]="";d.DOM.setStyle(a,b)}else d.isNothing(e.jQuery)||e.jQuery(a).stop(!0,!0)},fadeIn:function(a,b,c,g,f){f=d.coalesce(f,1);f<=0&&(f=1);if(b<=0&&(d.DOM.setStyle(a,"opacity",f),!d.isNothing(c))){c(a);return}d.DOM.getStyle(a,"opacity")>=1&&d.DOM.setStyle(a,"opacity",0);d.Browser.isCSSTransformSupported?this._applyTransition(a,"opacity",f,b,c,g):d.isNothing(e.jQuery)||e.jQuery(a).fadeTo(b,f,c)},fadeTo:function(a,b,c,g,f){this.fadeIn(a,
c,g,f,b)},fadeOut:function(a,b,c,g){if(b<=0&&(d.DOM.setStyle(a,"opacity",0),!d.isNothing(c))){c(a);return}d.Browser.isCSSTransformSupported?this._applyTransition(a,"opacity",0,b,c,g):e.jQuery(a).fadeTo(b,0,c)},slideBy:function(a,b,c,g,f,i){var j={},b=d.coalesce(b,0),c=d.coalesce(c,0),i=d.coalesce(i,"ease-out");j[this._transitionPrefix+"Property"]="all";j[this._transitionPrefix+"Delay"]="0";g===0?(j[this._transitionPrefix+"Duration"]="",j[this._transitionPrefix+"TimingFunction"]=""):(j[this._transitionPrefix+
"Duration"]=g+"ms",j[this._transitionPrefix+"TimingFunction"]=d.coalesce(i,"ease-out"),d.Events.add(a,this._transitionEndLabel,this._getTransitionEndHandler()));j[this._transformLabel]=d.Browser.is3dSupported?"translate3d("+b+"px, "+c+"px, 0px)":"translate("+b+"px, "+c+"px)";if(!d.isNothing(f))a.cclallcallback=f;d.DOM.setStyle(a,j);g===0&&e.setTimeout(function(){this._leaveTransforms(a)}.bind(this),this._applyTransitionDelay)},resetTranslate:function(a){var b={};b[this._transformLabel]=b[this._transformLabel]=
d.Browser.is3dSupported?"translate3d(0px, 0px, 0px)":"translate(0px, 0px)";d.DOM.setStyle(a,b)},_applyTransition:function(a,b,c,g,f,i){var j={},i=d.coalesce(i,"ease-in");j[this._transitionPrefix+"Property"]=b;j[this._transitionPrefix+"Duration"]=g+"ms";j[this._transitionPrefix+"TimingFunction"]=i;j[this._transitionPrefix+"Delay"]="0";d.Events.add(a,this._transitionEndLabel,this._getTransitionEndHandler());d.DOM.setStyle(a,j);d.isNothing(f)||(a["ccl"+b+"callback"]=f);e.setTimeout(function(){d.DOM.setStyle(a,
b,c)},this._applyTransitionDelay)},_onTransitionEnd:function(a){d.Events.remove(a.currentTarget,this._transitionEndLabel,this._getTransitionEndHandler());this._leaveTransforms(a.currentTarget)},_leaveTransforms:function(a){var b=a.style[this._transitionPrefix+"Property"],c=b!==""?"ccl"+b+"callback":"cclallcallback",g,b=d.coalesce(a.style.webkitTransform,a.style.MozTransform,a.style.transform),f,i=e.parseInt(d.DOM.getStyle(a,"left"),0),j=e.parseInt(d.DOM.getStyle(a,"top"),0),h,l,k={};b!==""&&(b=d.Browser.is3dSupported?
b.match(/translate3d\((.*?)\)/):b.match(/translate\((.*?)\)/),d.isNothing(b)||(f=b[1].split(", "),h=e.parseInt(f[0],0),l=e.parseInt(f[1],0)));k[this._transitionPrefix+"Property"]="";k[this._transitionPrefix+"Duration"]="";k[this._transitionPrefix+"TimingFunction"]="";k[this._transitionPrefix+"Delay"]="";d.DOM.setStyle(a,k);e.setTimeout(function(){if(!d.isNothing(f))k={},k[this._transformLabel]="",k.left=i+h+"px",k.top=j+l+"px",d.DOM.setStyle(a,k);d.isNothing(a[c])||(g=a[c],delete a[c],g(a))}.bind(this),
this._applyTransitionDelay)}}})})(window,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.Util.TouchElement");a.TouchElement.EventTypes={onTouch:"CodeUtilTouchElementOnTouch"};a.TouchElement.ActionTypes={touchStart:"touchStart",touchMove:"touchMove",touchEnd:"touchEnd",touchMoveEnd:"touchMoveEnd",tap:"tap",doubleTap:"doubleTap",swipeLeft:"swipeLeft",swipeRight:"swipeRight",swipeUp:"swipeUp",swipeDown:"swipeDown",gestureStart:"gestureStart",gestureChange:"gestureChange",gestureEnd:"gestureEnd"}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.Util.TouchElement");a.TouchElement.TouchElementClass=d({el:null,captureSettings:null,touchStartPoint:null,touchEndPoint:null,touchStartTime:null,doubleTapTimeout:null,touchStartHandler:null,touchMoveHandler:null,touchEndHandler:null,mouseDownHandler:null,mouseMoveHandler:null,mouseUpHandler:null,mouseOutHandler:null,gestureStartHandler:null,gestureChangeHandler:null,gestureEndHandler:null,swipeThreshold:null,swipeTimeThreshold:null,doubleTapSpeed:null,dispose:function(){var b;
this.removeEventHandlers();for(b in this)a.objectHasProperty(this,b)&&(this[b]=null)},initialize:function(b,c){this.el=b;this.captureSettings={swipe:!1,move:!1,gesture:!1,doubleTap:!1,preventDefaultTouchEvents:!0};a.extend(this.captureSettings,c);this.swipeThreshold=50;this.doubleTapSpeed=this.swipeTimeThreshold=250;this.touchStartPoint={x:0,y:0};this.touchEndPoint={x:0,y:0}},addEventHandlers:function(){if(a.isNothing(this.touchStartHandler))this.touchStartHandler=this.onTouchStart.bind(this),this.touchMoveHandler=
this.onTouchMove.bind(this),this.touchEndHandler=this.onTouchEnd.bind(this),this.mouseDownHandler=this.onMouseDown.bind(this),this.mouseMoveHandler=this.onMouseMove.bind(this),this.mouseUpHandler=this.onMouseUp.bind(this),this.mouseOutHandler=this.onMouseOut.bind(this),this.gestureStartHandler=this.onGestureStart.bind(this),this.gestureChangeHandler=this.onGestureChange.bind(this),this.gestureEndHandler=this.onGestureEnd.bind(this);a.Events.add(this.el,"touchstart",this.touchStartHandler);this.captureSettings.move&&
a.Events.add(this.el,"touchmove",this.touchMoveHandler);a.Events.add(this.el,"touchend",this.touchEndHandler);a.Events.add(this.el,"mousedown",this.mouseDownHandler);a.Browser.isGestureSupported&&this.captureSettings.gesture&&(a.Events.add(this.el,"gesturestart",this.gestureStartHandler),a.Events.add(this.el,"gesturechange",this.gestureChangeHandler),a.Events.add(this.el,"gestureend",this.gestureEndHandler))},removeEventHandlers:function(){a.Events.remove(this.el,"touchstart",this.touchStartHandler);
this.captureSettings.move&&a.Events.remove(this.el,"touchmove",this.touchMoveHandler);a.Events.remove(this.el,"touchend",this.touchEndHandler);a.Events.remove(this.el,"mousedown",this.mouseDownHandler);a.Browser.isGestureSupported&&this.captureSettings.gesture&&(a.Events.remove(this.el,"gesturestart",this.gestureStartHandler),a.Events.remove(this.el,"gesturechange",this.gestureChangeHandler),a.Events.remove(this.el,"gestureend",this.gestureEndHandler))},getTouchPoint:function(a){return{x:a[0].pageX,
y:a[0].pageY}},fireTouchEvent:function(b){var c=0,g=0,f=0,d,c=this.touchEndPoint.x-this.touchStartPoint.x,g=this.touchEndPoint.y-this.touchStartPoint.y,f=Math.sqrt(c*c+g*g);if(this.captureSettings.swipe&&(d=new Date,d-=this.touchStartTime,d<=this.swipeTimeThreshold)){if(e.Math.abs(c)>=this.swipeThreshold){a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,point:this.touchEndPoint,action:c<0?a.TouchElement.ActionTypes.swipeLeft:a.TouchElement.ActionTypes.swipeRight,targetEl:b.target,
currentTargetEl:b.currentTarget});return}if(e.Math.abs(g)>=this.swipeThreshold){a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,point:this.touchEndPoint,action:g<0?a.TouchElement.ActionTypes.swipeUp:a.TouchElement.ActionTypes.swipeDown,targetEl:b.target,currentTargetEl:b.currentTarget});return}}f>1?a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.touchMoveEnd,point:this.touchEndPoint,targetEl:b.target,currentTargetEl:b.currentTarget}):
this.captureSettings.doubleTap?a.isNothing(this.doubleTapTimeout)?this.doubleTapTimeout=e.setTimeout(function(){this.doubleTapTimeout=null;a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,point:this.touchEndPoint,action:a.TouchElement.ActionTypes.tap,targetEl:b.target,currentTargetEl:b.currentTarget})}.bind(this),this.doubleTapSpeed):(e.clearTimeout(this.doubleTapTimeout),this.doubleTapTimeout=null,a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,point:this.touchEndPoint,
action:a.TouchElement.ActionTypes.doubleTap,targetEl:b.target,currentTargetEl:b.currentTarget})):a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,point:this.touchEndPoint,action:a.TouchElement.ActionTypes.tap,targetEl:b.target,currentTargetEl:b.currentTarget})},onTouchStart:function(b){this.captureSettings.preventDefaultTouchEvents&&b.preventDefault();a.Events.remove(this.el,"mousedown",this.mouseDownHandler);var c=a.Events.getTouchEvent(b).touches;c.length>1&&this.captureSettings.gesture?
this.isGesture=!0:(this.touchStartTime=new Date,this.isGesture=!1,this.touchStartPoint=this.getTouchPoint(c),a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.touchStart,point:this.touchStartPoint,targetEl:b.target,currentTargetEl:b.currentTarget}))},onTouchMove:function(b){this.captureSettings.preventDefaultTouchEvents&&b.preventDefault();if(!this.isGesture||!this.captureSettings.gesture){var c=a.Events.getTouchEvent(b).touches;a.Events.fire(this,
{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.touchMove,point:this.getTouchPoint(c),targetEl:b.target,currentTargetEl:b.currentTarget})}},onTouchEnd:function(b){if(!this.isGesture||!this.captureSettings.gesture){this.captureSettings.preventDefaultTouchEvents&&b.preventDefault();var c=a.Events.getTouchEvent(b);this.touchEndPoint=this.getTouchPoint(!a.isNothing(c.changedTouches)?c.changedTouches:c.touches);a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,
target:this,action:a.TouchElement.ActionTypes.touchEnd,point:this.touchEndPoint,targetEl:b.target,currentTargetEl:b.currentTarget});this.fireTouchEvent(b)}},onMouseDown:function(b){b.preventDefault();a.Events.remove(this.el,"touchstart",this.mouseDownHandler);a.Events.remove(this.el,"touchmove",this.touchMoveHandler);a.Events.remove(this.el,"touchend",this.touchEndHandler);this.captureSettings.move&&a.Events.add(this.el,"mousemove",this.mouseMoveHandler);a.Events.add(this.el,"mouseup",this.mouseUpHandler);
a.Events.add(this.el,"mouseout",this.mouseOutHandler);this.touchStartTime=new Date;this.isGesture=!1;this.touchStartPoint=a.Events.getMousePosition(b);a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.touchStart,point:this.touchStartPoint,targetEl:b.target,currentTargetEl:b.currentTarget})},onMouseMove:function(b){b.preventDefault();a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.touchMove,
point:a.Events.getMousePosition(b),targetEl:b.target,currentTargetEl:b.currentTarget})},onMouseUp:function(b){b.preventDefault();this.captureSettings.move&&a.Events.remove(this.el,"mousemove",this.mouseMoveHandler);a.Events.remove(this.el,"mouseup",this.mouseUpHandler);a.Events.remove(this.el,"mouseout",this.mouseOutHandler);this.touchEndPoint=a.Events.getMousePosition(b);a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.touchEnd,point:this.touchEndPoint,
targetEl:b.target,currentTargetEl:b.currentTarget});this.fireTouchEvent(b)},onMouseOut:function(b){var c=b.relatedTarget;if(!(this.el===c||a.DOM.isChildOf(c,this.el)))b.preventDefault(),this.captureSettings.move&&a.Events.remove(this.el,"mousemove",this.mouseMoveHandler),a.Events.remove(this.el,"mouseup",this.mouseUpHandler),a.Events.remove(this.el,"mouseout",this.mouseOutHandler),this.touchEndPoint=a.Events.getMousePosition(b),a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,
action:a.TouchElement.ActionTypes.touchEnd,point:this.touchEndPoint,targetEl:b.target,currentTargetEl:b.currentTarget}),this.fireTouchEvent(b)},onGestureStart:function(b){b.preventDefault();var c=a.Events.getTouchEvent(b);a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.gestureStart,scale:c.scale,rotation:c.rotation,targetEl:b.target,currentTargetEl:b.currentTarget})},onGestureChange:function(b){b.preventDefault();var c=a.Events.getTouchEvent(b);
a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.gestureChange,scale:c.scale,rotation:c.rotation,targetEl:b.target,currentTargetEl:b.currentTarget})},onGestureEnd:function(b){b.preventDefault();var c=a.Events.getTouchEvent(b);a.Events.fire(this,{type:a.TouchElement.EventTypes.onTouch,target:this,action:a.TouchElement.ActionTypes.gestureEnd,scale:c.scale,rotation:c.rotation,targetEl:b.target,currentTargetEl:b.currentTarget})}})})(window,window.klass,
window.Code.Util);(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Image");e.Code.PhotoSwipe.Image.EventTypes={onLoad:"onLoad",onError:"onError"}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Image");var b=e.Code.PhotoSwipe;b.Image.ImageClass=d({refObj:null,imageEl:null,src:null,caption:null,metaData:null,imageLoadHandler:null,imageErrorHandler:null,dispose:function(){var c;this.shrinkImage();for(c in this)a.objectHasProperty(this,c)&&(this[c]=null)},initialize:function(a,b,f,d){this.refObj=a;this.src=this.originalSrc=b;this.caption=f;this.metaData=d;this.imageEl=new e.Image;this.imageLoadHandler=this.onImageLoad.bind(this);this.imageErrorHandler=
this.onImageError.bind(this)},load:function(){this.imageEl.originalSrc=a.coalesce(this.imageEl.originalSrc,"");this.imageEl.originalSrc===this.src?this.imageEl.isError?a.Events.fire(this,{type:b.Image.EventTypes.onError,target:this}):a.Events.fire(this,{type:b.Image.EventTypes.onLoad,target:this}):(this.imageEl.isError=!1,this.imageEl.isLoading=!0,this.imageEl.naturalWidth=null,this.imageEl.naturalHeight=null,this.imageEl.isLandscape=!1,this.imageEl.onload=this.imageLoadHandler,this.imageEl.onerror=
this.imageErrorHandler,this.imageEl.onabort=this.imageErrorHandler,this.imageEl.originalSrc=this.src,this.imageEl.src=this.src)},shrinkImage:function(){if(!a.isNothing(this.imageEl)&&this.imageEl.src.indexOf(this.src)>-1)this.imageEl.src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=",a.isNothing(this.imageEl.parentNode)||a.DOM.removeChild(this.imageEl,this.imageEl.parentNode)},onImageLoad:function(){this.imageEl.onload=null;this.imageEl.naturalWidth=a.coalesce(this.imageEl.naturalWidth,
this.imageEl.width);this.imageEl.naturalHeight=a.coalesce(this.imageEl.naturalHeight,this.imageEl.height);this.imageEl.isLandscape=this.imageEl.naturalWidth>this.imageEl.naturalHeight;this.imageEl.isLoading=!1;a.Events.fire(this,{type:b.Image.EventTypes.onLoad,target:this})},onImageError:function(){this.imageEl.onload=null;this.imageEl.onerror=null;this.imageEl.onabort=null;this.imageEl.isLoading=!1;this.imageEl.isError=!0;a.Events.fire(this,{type:b.Image.EventTypes.onError,target:this})}})})(window,
window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Cache");e=e.Code.PhotoSwipe;e.Cache.Mode={normal:"normal",aggressive:"aggressive"};e.Cache.Functions={getImageSource:function(a){return a.href},getImageCaption:function(b){if(b.nodeName==="IMG")return a.DOM.getAttribute(b,"alt");var c,g,f;c=0;for(g=b.childNodes.length;c<g;c++)if(f=b.childNodes[c],b.childNodes[c].nodeName==="IMG")return a.DOM.getAttribute(f,"alt")},getImageMetaData:function(){return{}}}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Cache");var b=e.Code.PhotoSwipe;b.Cache.CacheClass=d({images:null,settings:null,dispose:function(){var c,b,f;if(!a.isNothing(this.images)){b=0;for(f=this.images.length;b<f;b++)this.images[b].dispose();this.images.length=0}for(c in this)a.objectHasProperty(this,c)&&(this[c]=null)},initialize:function(a,g){var f,d,e,h,l,k;this.settings=g;this.images=[];f=0;for(d=a.length;f<d;f++)e=a[f],h=this.settings.getImageSource(e),l=this.settings.getImageCaption(e),
k=this.settings.getImageMetaData(e),this.images.push(new b.Image.ImageClass(e,h,l,k))},getImages:function(c){var g,f,d=[],e;g=0;for(f=c.length;g<f;g++){e=this.images[c[g]];if(this.settings.cacheMode===b.Cache.Mode.aggressive)e.cacheDoNotShrink=!0;d.push(e)}if(this.settings.cacheMode===b.Cache.Mode.aggressive){g=0;for(f=this.images.length;g<f;g++)e=this.images[g],a.objectHasProperty(e,"cacheDoNotShrink")?delete e.cacheDoNotShrink:e.shrinkImage()}return d}})})(window,window.klass,window.Code.Util,window.Code.PhotoSwipe.Image);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.DocumentOverlay");e.Code.PhotoSwipe.DocumentOverlay.CssClasses={documentOverlay:"ps-document-overlay"}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.DocumentOverlay");var b=e.Code.PhotoSwipe;b.DocumentOverlay.DocumentOverlayClass=d({el:null,settings:null,initialBodyHeight:null,dispose:function(){var c;a.Animation.stop(this.el);a.DOM.removeChild(this.el,this.el.parentNode);for(c in this)a.objectHasProperty(this,c)&&(this[c]=null)},initialize:function(c){this.settings=c;this.el=a.DOM.createElement("div",{"class":b.DocumentOverlay.CssClasses.documentOverlay},"");a.DOM.setStyle(this.el,{display:"block",
position:"absolute",left:0,top:0,zIndex:this.settings.zIndex});a.DOM.hide(this.el);this.settings.target===e?a.DOM.appendToBody(this.el):a.DOM.appendChild(this.el,this.settings.target);a.Animation.resetTranslate(this.el);this.initialBodyHeight=a.DOM.bodyOuterHeight()},resetPosition:function(){var c,b,f;if(this.settings.target===e){c=a.DOM.windowWidth();b=a.DOM.bodyOuterHeight()*2;f=this.settings.jQueryMobile?a.DOM.windowScrollTop()+"px":"0px";if(b<1)b=this.initialBodyHeight;a.DOM.windowHeight()>b&&
(b=a.DOM.windowHeight())}else c=a.DOM.width(this.settings.target),b=a.DOM.height(this.settings.target),f="0px";a.DOM.setStyle(this.el,{width:c,height:b,top:f})},fadeIn:function(c,b){this.resetPosition();a.DOM.setStyle(this.el,"opacity",0);a.DOM.show(this.el);a.Animation.fadeIn(this.el,c,b)}})})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Carousel");e=e.Code.PhotoSwipe;e.Carousel.EventTypes={onSlideByEnd:"PhotoSwipeCarouselOnSlideByEnd",onSlideshowStart:"PhotoSwipeCarouselOnSlideshowStart",onSlideshowStop:"PhotoSwipeCarouselOnSlideshowStop"};e.Carousel.CssClasses={carousel:"ps-carousel",content:"ps-carousel-content",item:"ps-carousel-item",itemLoading:"ps-carousel-item-loading",itemError:"ps-carousel-item-error"};e.Carousel.SlideByAction={previous:"previous",current:"current",next:"next"}})(window,
window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Carousel");var b=e.Code.PhotoSwipe;b.Carousel.CarouselClass=d({el:null,contentEl:null,settings:null,cache:null,slideByEndHandler:null,currentCacheIndex:null,isSliding:null,isSlideshowActive:null,lastSlideByAction:null,touchStartPoint:null,touchStartPosition:null,imageLoadHandler:null,imageErrorHandler:null,slideshowTimeout:null,dispose:function(){var c,g,f;g=0;for(f=this.cache.images.length;g<f;g++)a.Events.remove(this.cache.images[g],b.Image.EventTypes.onLoad,
this.imageLoadHandler),a.Events.remove(this.cache.images[g],b.Image.EventTypes.onError,this.imageErrorHandler);this.stopSlideshow();a.Animation.stop(this.el);a.DOM.removeChild(this.el,this.el.parentNode);for(c in this)a.objectHasProperty(this,c)&&(this[c]=null)},initialize:function(c,g){var f,d,j;this.cache=c;this.settings=g;this.slideByEndHandler=this.onSlideByEnd.bind(this);this.imageLoadHandler=this.onImageLoad.bind(this);this.imageErrorHandler=this.onImageError.bind(this);this.currentCacheIndex=
0;this.isSlideshowActive=this.isSliding=!1;if(this.cache.images.length<3)this.settings.loop=!1;this.el=a.DOM.createElement("div",{"class":b.Carousel.CssClasses.carousel},"");a.DOM.setStyle(this.el,{display:"block",position:"absolute",left:0,top:0,overflow:"hidden",zIndex:this.settings.zIndex});a.DOM.hide(this.el);this.contentEl=a.DOM.createElement("div",{"class":b.Carousel.CssClasses.content},"");a.DOM.setStyle(this.contentEl,{display:"block",position:"absolute",left:0,top:0});a.DOM.appendChild(this.contentEl,
this.el);d=c.images.length<3?c.images.length:3;for(f=0;f<d;f++)j=a.DOM.createElement("div",{"class":b.Carousel.CssClasses.item+" "+b.Carousel.CssClasses.item+"-"+f},""),a.DOM.setAttribute(j,"style","float: left;"),a.DOM.setStyle(j,{display:"block",position:"relative",left:0,top:0,overflow:"hidden"}),this.settings.margin>0&&a.DOM.setStyle(j,{marginRight:this.settings.margin+"px"}),a.DOM.appendChild(j,this.contentEl);this.settings.target===e?a.DOM.appendToBody(this.el):a.DOM.appendChild(this.el,this.settings.target)},
resetPosition:function(){var c,g,f,d,j,h;this.settings.target===e?(c=a.DOM.windowWidth(),g=a.DOM.windowHeight(),f=a.DOM.windowScrollTop()+"px"):(c=a.DOM.width(this.settings.target),g=a.DOM.height(this.settings.target),f="0px");d=this.settings.margin>0?c+this.settings.margin:c;j=a.DOM.find("."+b.Carousel.CssClasses.item,this.contentEl);d*=j.length;a.DOM.setStyle(this.el,{top:f,width:c,height:g});a.DOM.setStyle(this.contentEl,{width:d,height:g});f=0;for(d=j.length;f<d;f++)h=j[f],a.DOM.setStyle(h,{width:c,
height:g}),h=a.DOM.find("img",h)[0],a.isNothing(h)||this.resetImagePosition(h);this.setContentLeftPosition()},resetImagePosition:function(c){if(!a.isNothing(c)){a.DOM.getAttribute(c,"src");var b,f,d,e=a.DOM.width(this.el),h=a.DOM.height(this.el);this.settings.imageScaleMethod==="fitNoUpscale"?(f=c.naturalWidth,d=c.naturalHeight,f>e&&(b=e/f,f=Math.round(f*b),d=Math.round(d*b)),d>h&&(b=h/d,d=Math.round(d*b),f=Math.round(f*b))):(b=c.isLandscape?e/c.naturalWidth:h/c.naturalHeight,f=Math.round(c.naturalWidth*
b),d=Math.round(c.naturalHeight*b),this.settings.imageScaleMethod==="zoom"?(b=1,d<h?b=h/d:f<e&&(b=e/f),b!==1&&(f=Math.round(f*b),d=Math.round(d*b))):this.settings.imageScaleMethod==="fit"&&(b=1,f>e?b=e/f:d>h&&(b=h/d),b!==1&&(f=Math.round(f*b),d=Math.round(d*b))));a.DOM.setStyle(c,{position:"absolute",width:f,height:d,top:Math.round((h-d)/2)+"px",left:Math.round((e-f)/2)+"px",display:"block"})}},setContentLeftPosition:function(){var c,b,d;c=this.settings.target===e?a.DOM.windowWidth():a.DOM.width(this.settings.target);
b=this.getItemEls();d=0;this.settings.loop?d=(c+this.settings.margin)*-1:this.currentCacheIndex===this.cache.images.length-1?d=(b.length-1)*(c+this.settings.margin)*-1:this.currentCacheIndex>0&&(d=(c+this.settings.margin)*-1);a.DOM.setStyle(this.contentEl,{left:d+"px"})},show:function(c){this.currentCacheIndex=c;this.resetPosition();this.setImages(!1);a.DOM.show(this.el);a.Animation.resetTranslate(this.contentEl);var c=this.getItemEls(),d,f;d=0;for(f=c.length;d<f;d++)a.Animation.resetTranslate(c[d]);
a.Events.fire(this,{type:b.Carousel.EventTypes.onSlideByEnd,target:this,action:b.Carousel.SlideByAction.current,cacheIndex:this.currentCacheIndex})},setImages:function(a){var b,d=this.getItemEls();b=this.currentCacheIndex+1;var e=this.currentCacheIndex-1;this.settings.loop?(b>this.cache.images.length-1&&(b=0),e<0&&(e=this.cache.images.length-1),b=this.cache.getImages([e,this.currentCacheIndex,b]),a||this.addCacheImageToItemEl(b[1],d[1]),this.addCacheImageToItemEl(b[2],d[2]),this.addCacheImageToItemEl(b[0],
d[0])):d.length===1?a||(b=this.cache.getImages([this.currentCacheIndex]),this.addCacheImageToItemEl(b[0],d[0])):d.length===2?this.currentCacheIndex===0?(b=this.cache.getImages([this.currentCacheIndex,this.currentCacheIndex+1]),a||this.addCacheImageToItemEl(b[0],d[0]),this.addCacheImageToItemEl(b[1],d[1])):(b=this.cache.getImages([this.currentCacheIndex-1,this.currentCacheIndex]),a||this.addCacheImageToItemEl(b[1],d[1]),this.addCacheImageToItemEl(b[0],d[0])):this.currentCacheIndex===0?(b=this.cache.getImages([this.currentCacheIndex,
this.currentCacheIndex+1,this.currentCacheIndex+2]),a||this.addCacheImageToItemEl(b[0],d[0]),this.addCacheImageToItemEl(b[1],d[1]),this.addCacheImageToItemEl(b[2],d[2])):(this.currentCacheIndex===this.cache.images.length-1?(b=this.cache.getImages([this.currentCacheIndex-2,this.currentCacheIndex-1,this.currentCacheIndex]),a||this.addCacheImageToItemEl(b[2],d[2]),this.addCacheImageToItemEl(b[1],d[1])):(b=this.cache.getImages([this.currentCacheIndex-1,this.currentCacheIndex,this.currentCacheIndex+1]),
a||this.addCacheImageToItemEl(b[1],d[1]),this.addCacheImageToItemEl(b[2],d[2])),this.addCacheImageToItemEl(b[0],d[0]))},addCacheImageToItemEl:function(c,d){a.DOM.removeClass(d,b.Carousel.CssClasses.itemError);a.DOM.addClass(d,b.Carousel.CssClasses.itemLoading);a.DOM.removeChildren(d);a.DOM.setStyle(c.imageEl,{display:"none"});a.DOM.appendChild(c.imageEl,d);a.Animation.resetTranslate(c.imageEl);a.Events.add(c,b.Image.EventTypes.onLoad,this.imageLoadHandler);a.Events.add(c,b.Image.EventTypes.onError,
this.imageErrorHandler);c.load()},slideCarousel:function(c,d,f){if(!this.isSliding){var i,j;i=this.settings.target===e?a.DOM.windowWidth()+this.settings.margin:a.DOM.width(this.settings.target)+this.settings.margin;f=a.coalesce(f,this.settings.slideSpeed);if(!(e.Math.abs(j)<1)){switch(d){case a.TouchElement.ActionTypes.swipeLeft:c=i*-1;break;case a.TouchElement.ActionTypes.swipeRight:c=i;break;default:j=c.x-this.touchStartPoint.x,c=e.Math.abs(j)>i/2?j>0?i:i*-1:0}this.lastSlideByAction=c<0?b.Carousel.SlideByAction.next:
c>0?b.Carousel.SlideByAction.previous:b.Carousel.SlideByAction.current;if(!this.settings.loop&&(this.lastSlideByAction===b.Carousel.SlideByAction.previous&&this.currentCacheIndex===0||this.lastSlideByAction===b.Carousel.SlideByAction.next&&this.currentCacheIndex===this.cache.images.length-1))c=0,this.lastSlideByAction=b.Carousel.SlideByAction.current;this.isSliding=!0;this.doSlideCarousel(c,f)}}},moveCarousel:function(a){this.isSliding||this.settings.enableDrag&&this.doMoveCarousel(a.x-this.touchStartPoint.x)},
getItemEls:function(){return a.DOM.find("."+b.Carousel.CssClasses.item,this.contentEl)},previous:function(){this.stopSlideshow();this.slideCarousel({x:0,y:0},a.TouchElement.ActionTypes.swipeRight,this.settings.nextPreviousSlideSpeed)},next:function(){this.stopSlideshow();this.slideCarousel({x:0,y:0},a.TouchElement.ActionTypes.swipeLeft,this.settings.nextPreviousSlideSpeed)},slideshowNext:function(){this.slideCarousel({x:0,y:0},a.TouchElement.ActionTypes.swipeLeft)},startSlideshow:function(){this.stopSlideshow();
this.isSlideshowActive=!0;this.slideshowTimeout=e.setTimeout(this.slideshowNext.bind(this),this.settings.slideshowDelay);a.Events.fire(this,{type:b.Carousel.EventTypes.onSlideshowStart,target:this})},stopSlideshow:function(){if(!a.isNothing(this.slideshowTimeout))e.clearTimeout(this.slideshowTimeout),this.slideshowTimeout=null,this.isSlideshowActive=!1,a.Events.fire(this,{type:b.Carousel.EventTypes.onSlideshowStop,target:this})},onSlideByEnd:function(){if(!a.isNothing(this.isSliding)){var c=this.getItemEls();
this.isSliding=!1;this.lastSlideByAction===b.Carousel.SlideByAction.next?this.currentCacheIndex+=1:this.lastSlideByAction===b.Carousel.SlideByAction.previous&&(this.currentCacheIndex-=1);if(this.settings.loop)if(this.lastSlideByAction===b.Carousel.SlideByAction.next?a.DOM.appendChild(c[0],this.contentEl):this.lastSlideByAction===b.Carousel.SlideByAction.previous&&a.DOM.insertBefore(c[c.length-1],c[0],this.contentEl),this.currentCacheIndex<0)this.currentCacheIndex=this.cache.images.length-1;else{if(this.currentCacheIndex===
this.cache.images.length)this.currentCacheIndex=0}else this.cache.images.length>3&&(this.currentCacheIndex>1&&this.currentCacheIndex<this.cache.images.length-2?this.lastSlideByAction===b.Carousel.SlideByAction.next?a.DOM.appendChild(c[0],this.contentEl):this.lastSlideByAction===b.Carousel.SlideByAction.previous&&a.DOM.insertBefore(c[c.length-1],c[0],this.contentEl):this.currentCacheIndex===1?this.lastSlideByAction===b.Carousel.SlideByAction.previous&&a.DOM.insertBefore(c[c.length-1],c[0],this.contentEl):
this.currentCacheIndex===this.cache.images.length-2&&this.lastSlideByAction===b.Carousel.SlideByAction.next&&a.DOM.appendChild(c[0],this.contentEl));this.lastSlideByAction!==b.Carousel.SlideByAction.current&&(this.setContentLeftPosition(),this.setImages(!0));a.Events.fire(this,{type:b.Carousel.EventTypes.onSlideByEnd,target:this,action:this.lastSlideByAction,cacheIndex:this.currentCacheIndex});this.isSlideshowActive&&(this.lastSlideByAction!==b.Carousel.SlideByAction.current?this.startSlideshow():
this.stopSlideshow())}},onTouch:function(b,d){this.stopSlideshow();switch(b){case a.TouchElement.ActionTypes.touchStart:this.touchStartPoint=d;this.touchStartPosition={x:e.parseInt(a.DOM.getStyle(this.contentEl,"left"),0),y:e.parseInt(a.DOM.getStyle(this.contentEl,"top"),0)};break;case a.TouchElement.ActionTypes.touchMove:this.moveCarousel(d);break;case a.TouchElement.ActionTypes.touchMoveEnd:case a.TouchElement.ActionTypes.swipeLeft:case a.TouchElement.ActionTypes.swipeRight:this.slideCarousel(d,
b)}},onImageLoad:function(c){c=c.target;a.isNothing(c.imageEl.parentNode)||(a.DOM.removeClass(c.imageEl.parentNode,b.Carousel.CssClasses.itemLoading),this.resetImagePosition(c.imageEl));a.Events.remove(c,b.Image.EventTypes.onLoad,this.imageLoadHandler);a.Events.remove(c,b.Image.EventTypes.onError,this.imageErrorHandler)},onImageError:function(c){c=c.target;a.isNothing(c.imageEl.parentNode)||(a.DOM.removeClass(c.imageEl.parentNode,b.Carousel.CssClasses.itemLoading),a.DOM.addClass(c.imageEl.parentNode,
b.Carousel.CssClasses.itemError));a.Events.remove(c,b.Image.EventTypes.onLoad,this.imageLoadHandler);a.Events.remove(c,b.Image.EventTypes.onError,this.imageErrorHandler)}})})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Carousel");d=e.Code.PhotoSwipe;d.Carousel.CarouselClass=d.Carousel.CarouselClass.extend({getStartingPos:function(){var b=this.touchStartPosition;a.isNothing(b)&&(b={x:e.parseInt(a.DOM.getStyle(this.contentEl,"left"),0),y:e.parseInt(a.DOM.getStyle(this.contentEl,"top"),0)});return b},doMoveCarousel:function(b){var c;a.Browser.isCSSTransformSupported?(c={},c[a.Animation._transitionPrefix+"Property"]="all",c[a.Animation._transitionPrefix+"Duration"]=
"",c[a.Animation._transitionPrefix+"TimingFunction"]="",c[a.Animation._transitionPrefix+"Delay"]="0",c[a.Animation._transformLabel]=a.Browser.is3dSupported?"translate3d("+b+"px, 0px, 0px)":"translate("+b+"px, 0px)",a.DOM.setStyle(this.contentEl,c)):a.isNothing(e.jQuery)||e.jQuery(this.contentEl).stop().css("left",this.getStartingPos().x+b+"px")},doSlideCarousel:function(b,c){var d;if(c<=0)this.slideByEndHandler();else if(a.Browser.isCSSTransformSupported)d=a.coalesce(this.contentEl.style.webkitTransform,
this.contentEl.style.MozTransform,this.contentEl.style.transform,""),d.indexOf("translate3d("+b)===0?this.slideByEndHandler():d.indexOf("translate("+b)===0?this.slideByEndHandler():a.Animation.slideBy(this.contentEl,b,0,c,this.slideByEndHandler,this.settings.slideTimingFunction);else if(!a.isNothing(e.jQuery)){d={left:this.getStartingPos().x+b+"px"};if(this.settings.animationTimingFunction==="ease-out")this.settings.animationTimingFunction="easeOutQuad";if(a.isNothing(e.jQuery.easing[this.settings.animationTimingFunction]))this.settings.animationTimingFunction=
"linear";e.jQuery(this.contentEl).animate(d,this.settings.slideSpeed,this.settings.animationTimingFunction,this.slideByEndHandler)}}})})(window,window.klass,window.Code.Util,window.Code.PhotoSwipe.TouchElement);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Toolbar");var b=e.Code.PhotoSwipe;b.Toolbar.CssClasses={toolbar:"ps-toolbar",toolbarContent:"ps-toolbar-content",toolbarTop:"ps-toolbar-top",caption:"ps-caption",captionBottom:"ps-caption-bottom",captionContent:"ps-caption-content",close:"ps-toolbar-close",play:"ps-toolbar-play",previous:"ps-toolbar-previous",previousDisabled:"ps-toolbar-previous-disabled",next:"ps-toolbar-next",nextDisabled:"ps-toolbar-next-disabled"};b.Toolbar.ToolbarAction=
{close:"close",play:"play",next:"next",previous:"previous",none:"none"};b.Toolbar.EventTypes={onTap:"PhotoSwipeToolbarOnClick",onBeforeShow:"PhotoSwipeToolbarOnBeforeShow",onShow:"PhotoSwipeToolbarOnShow",onBeforeHide:"PhotoSwipeToolbarOnBeforeHide",onHide:"PhotoSwipeToolbarOnHide"};b.Toolbar.getToolbar=function(){return'<div class="'+b.Toolbar.CssClasses.close+'"><div class="'+b.Toolbar.CssClasses.toolbarContent+'"></div></div><div class="'+b.Toolbar.CssClasses.play+'"><div class="'+b.Toolbar.CssClasses.toolbarContent+
'"></div></div><div class="'+b.Toolbar.CssClasses.previous+'"><div class="'+b.Toolbar.CssClasses.toolbarContent+'"></div></div><div class="'+b.Toolbar.CssClasses.next+'"><div class="'+b.Toolbar.CssClasses.toolbarContent+'"></div></div>'}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.Toolbar");var b=e.Code.PhotoSwipe;b.Toolbar.ToolbarClass=d({toolbarEl:null,closeEl:null,playEl:null,previousEl:null,nextEl:null,captionEl:null,captionContentEl:null,currentCaption:null,settings:null,cache:null,timeout:null,isVisible:null,fadeOutHandler:null,touchStartHandler:null,touchMoveHandler:null,clickHandler:null,dispose:function(){var b;this.clearTimeout();this.removeEventHandlers();a.Animation.stop(this.toolbarEl);a.Animation.stop(this.captionEl);
a.DOM.removeChild(this.toolbarEl,this.toolbarEl.parentNode);a.DOM.removeChild(this.captionEl,this.captionEl.parentNode);for(b in this)a.objectHasProperty(this,b)&&(this[b]=null)},initialize:function(c,d){var f;this.settings=d;this.cache=c;this.isVisible=!1;this.fadeOutHandler=this.onFadeOut.bind(this);this.touchStartHandler=this.onTouchStart.bind(this);this.touchMoveHandler=this.onTouchMove.bind(this);this.clickHandler=this.onClick.bind(this);f=b.Toolbar.CssClasses.toolbar;this.settings.captionAndToolbarFlipPosition&&
(f=f+" "+b.Toolbar.CssClasses.toolbarTop);this.toolbarEl=a.DOM.createElement("div",{"class":f},this.settings.getToolbar());a.DOM.setStyle(this.toolbarEl,{left:0,position:"absolute",overflow:"hidden",zIndex:this.settings.zIndex});this.settings.target===e?a.DOM.appendToBody(this.toolbarEl):a.DOM.appendChild(this.toolbarEl,this.settings.target);a.DOM.hide(this.toolbarEl);this.closeEl=a.DOM.find("."+b.Toolbar.CssClasses.close,this.toolbarEl)[0];this.settings.preventHide&&!a.isNothing(this.closeEl)&&a.DOM.hide(this.closeEl);
this.playEl=a.DOM.find("."+b.Toolbar.CssClasses.play,this.toolbarEl)[0];this.settings.preventSlideshow&&!a.isNothing(this.playEl)&&a.DOM.hide(this.playEl);this.nextEl=a.DOM.find("."+b.Toolbar.CssClasses.next,this.toolbarEl)[0];this.previousEl=a.DOM.find("."+b.Toolbar.CssClasses.previous,this.toolbarEl)[0];f=b.Toolbar.CssClasses.caption;this.settings.captionAndToolbarFlipPosition&&(f=f+" "+b.Toolbar.CssClasses.captionBottom);this.captionEl=a.DOM.createElement("div",{"class":f},"");a.DOM.setStyle(this.captionEl,
{left:0,position:"absolute",overflow:"hidden",zIndex:this.settings.zIndex});this.settings.target===e?a.DOM.appendToBody(this.captionEl):a.DOM.appendChild(this.captionEl,this.settings.target);a.DOM.hide(this.captionEl);this.captionContentEl=a.DOM.createElement("div",{"class":b.Toolbar.CssClasses.captionContent},"");a.DOM.appendChild(this.captionContentEl,this.captionEl);this.addEventHandlers()},resetPosition:function(){var b,d,f;this.settings.target===e?(this.settings.captionAndToolbarFlipPosition?
(d=a.DOM.windowScrollTop(),f=a.DOM.windowScrollTop()+a.DOM.windowHeight()-a.DOM.height(this.captionEl)):(d=a.DOM.windowScrollTop()+a.DOM.windowHeight()-a.DOM.height(this.toolbarEl),f=a.DOM.windowScrollTop()),b=a.DOM.windowWidth()):(this.settings.captionAndToolbarFlipPosition?(d="0",f=a.DOM.height(this.settings.target)-a.DOM.height(this.captionEl)):(d=a.DOM.height(this.settings.target)-a.DOM.height(this.toolbarEl),f=0),b=a.DOM.width(this.settings.target));a.DOM.setStyle(this.toolbarEl,{top:d+"px",
width:b});a.DOM.setStyle(this.captionEl,{top:f+"px",width:b})},toggleVisibility:function(a){this.isVisible?this.fadeOut():this.show(a)},show:function(c){a.Animation.stop(this.toolbarEl);a.Animation.stop(this.captionEl);this.resetPosition();this.setToolbarStatus(c);a.Events.fire(this,{type:b.Toolbar.EventTypes.onBeforeShow,target:this});this.showToolbar();this.setCaption(c);this.showCaption();this.isVisible=!0;this.setTimeout();a.Events.fire(this,{type:b.Toolbar.EventTypes.onShow,target:this})},setTimeout:function(){if(this.settings.captionAndToolbarAutoHideDelay>
0)this.clearTimeout(),this.timeout=e.setTimeout(this.fadeOut.bind(this),this.settings.captionAndToolbarAutoHideDelay)},clearTimeout:function(){if(!a.isNothing(this.timeout))e.clearTimeout(this.timeout),this.timeout=null},fadeOut:function(){this.clearTimeout();a.Events.fire(this,{type:b.Toolbar.EventTypes.onBeforeHide,target:this});a.Animation.fadeOut(this.toolbarEl,this.settings.fadeOutSpeed);a.Animation.fadeOut(this.captionEl,this.settings.fadeOutSpeed,this.fadeOutHandler);this.isVisible=!1},addEventHandlers:function(){a.Browser.isTouchSupported&&
(a.Browser.blackberry||a.Events.add(this.toolbarEl,"touchstart",this.touchStartHandler),a.Events.add(this.toolbarEl,"touchmove",this.touchMoveHandler),a.Events.add(this.captionEl,"touchmove",this.touchMoveHandler));a.Events.add(this.toolbarEl,"click",this.clickHandler)},removeEventHandlers:function(){a.Browser.isTouchSupported&&(a.Browser.blackberry||a.Events.remove(this.toolbarEl,"touchstart",this.touchStartHandler),a.Events.remove(this.toolbarEl,"touchmove",this.touchMoveHandler),a.Events.remove(this.captionEl,
"touchmove",this.touchMoveHandler));a.Events.remove(this.toolbarEl,"click",this.clickHandler)},handleTap:function(c){this.clearTimeout();var d;if(c.target===this.nextEl||a.DOM.isChildOf(c.target,this.nextEl))d=b.Toolbar.ToolbarAction.next;else if(c.target===this.previousEl||a.DOM.isChildOf(c.target,this.previousEl))d=b.Toolbar.ToolbarAction.previous;else if(c.target===this.closeEl||a.DOM.isChildOf(c.target,this.closeEl))d=b.Toolbar.ToolbarAction.close;else if(c.target===this.playEl||a.DOM.isChildOf(c.target,
this.playEl))d=b.Toolbar.ToolbarAction.play;this.setTimeout();if(a.isNothing(d))d=b.Toolbar.ToolbarAction.none;a.Events.fire(this,{type:b.Toolbar.EventTypes.onTap,target:this,action:d,tapTarget:c.target})},setCaption:function(b){a.DOM.removeChildren(this.captionContentEl);this.currentCaption=a.coalesce(this.cache.images[b].caption,"\u00a0");if(a.isObject(this.currentCaption))a.DOM.appendChild(this.currentCaption,this.captionContentEl);else{if(this.currentCaption==="")this.currentCaption="\u00a0";
a.DOM.appendText(this.currentCaption,this.captionContentEl)}this.currentCaption=this.currentCaption==="\u00a0"?"":this.currentCaption;this.resetPosition()},showToolbar:function(){a.DOM.setStyle(this.toolbarEl,{opacity:this.settings.captionAndToolbarOpacity});a.DOM.show(this.toolbarEl)},showCaption:function(){(this.currentCaption===""||this.captionContentEl.childNodes.length<1)&&!this.settings.captionAndToolbarShowEmptyCaptions?a.DOM.hide(this.captionEl):(a.DOM.setStyle(this.captionEl,{opacity:this.settings.captionAndToolbarOpacity}),
a.DOM.show(this.captionEl))},setToolbarStatus:function(c){this.settings.loop||(a.DOM.removeClass(this.previousEl,b.Toolbar.CssClasses.previousDisabled),a.DOM.removeClass(this.nextEl,b.Toolbar.CssClasses.nextDisabled),c>0&&c<this.cache.images.length-1||(c===0&&(a.isNothing(this.previousEl)||a.DOM.addClass(this.previousEl,b.Toolbar.CssClasses.previousDisabled)),c===this.cache.images.length-1&&(a.isNothing(this.nextEl)||a.DOM.addClass(this.nextEl,b.Toolbar.CssClasses.nextDisabled))))},onFadeOut:function(){a.DOM.hide(this.toolbarEl);
a.DOM.hide(this.captionEl);a.Events.fire(this,{type:b.Toolbar.EventTypes.onHide,target:this})},onTouchStart:function(b){b.preventDefault();a.Events.remove(this.toolbarEl,"click",this.clickHandler);this.handleTap(b)},onTouchMove:function(a){a.preventDefault()},onClick:function(a){a.preventDefault();this.handleTap(a)}})})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.UILayer");e.Code.PhotoSwipe.UILayer.CssClasses={uiLayer:"ps-uilayer"}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.UILayer");var b=e.Code.PhotoSwipe;b.UILayer.UILayerClass=a.TouchElement.TouchElementClass.extend({el:null,settings:null,dispose:function(){var b;this.removeEventHandlers();a.DOM.removeChild(this.el,this.el.parentNode);for(b in this)a.objectHasProperty(this,b)&&(this[b]=null)},initialize:function(c){this.settings=c;this.el=a.DOM.createElement("div",{"class":b.UILayer.CssClasses.uiLayer},"");a.DOM.setStyle(this.el,{display:"block",position:"absolute",
left:0,top:0,overflow:"hidden",zIndex:this.settings.zIndex,opacity:0});a.DOM.hide(this.el);this.settings.target===e?a.DOM.appendToBody(this.el):a.DOM.appendChild(this.el,this.settings.target);this.supr(this.el,{swipe:!0,move:!0,gesture:a.Browser.iOS,doubleTap:!0,preventDefaultTouchEvents:this.settings.preventDefaultTouchEvents})},resetPosition:function(){this.settings.target===e?a.DOM.setStyle(this.el,{top:a.DOM.windowScrollTop()+"px",width:a.DOM.windowWidth(),height:a.DOM.windowHeight()}):a.DOM.setStyle(this.el,
{top:"0px",width:a.DOM.width(this.settings.target),height:a.DOM.height(this.settings.target)})},show:function(){this.resetPosition();a.DOM.show(this.el);this.addEventHandlers()},addEventHandlers:function(){this.supr()},removeEventHandlers:function(){this.supr()}})})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.ZoomPanRotate");e=e.Code.PhotoSwipe;e.ZoomPanRotate.CssClasses={zoomPanRotate:"ps-zoom-pan-rotate"};e.ZoomPanRotate.EventTypes={onTransform:"PhotoSwipeZoomPanRotateOnTransform"}})(window,window.klass,window.Code.Util);
(function(e,d,a){a.registerNamespace("Code.PhotoSwipe.ZoomPanRotate");var b=e.Code.PhotoSwipe;b.ZoomPanRotate.ZoomPanRotateClass=d({el:null,settings:null,containerEl:null,imageEl:null,transformSettings:null,panStartingPoint:null,transformEl:null,dispose:function(){var b;a.DOM.removeChild(this.el,this.el.parentNode);for(b in this)a.objectHasProperty(this,b)&&(this[b]=null)},initialize:function(c,d,f){var i,j,h;this.settings=c;this.settings.target===e?(c=document.body,i=a.DOM.windowWidth(),j=a.DOM.windowHeight(),
h=a.DOM.windowScrollTop()+"px"):(c=this.settings.target,i=a.DOM.width(c),j=a.DOM.height(c),h="0px");this.imageEl=d.imageEl.cloneNode(!1);a.DOM.setStyle(this.imageEl,{zIndex:1});this.transformSettings={startingScale:1,scale:1,startingRotation:0,rotation:0,startingTranslateX:0,startingTranslateY:0,translateX:0,translateY:0};this.el=a.DOM.createElement("div",{"class":b.ZoomPanRotate.CssClasses.zoomPanRotate},"");a.DOM.setStyle(this.el,{left:0,top:h,position:"absolute",width:i,height:j,zIndex:this.settings.zIndex,
display:"block"});a.DOM.insertBefore(this.el,f.el,c);a.Browser.iOS?(this.containerEl=a.DOM.createElement("div","",""),a.DOM.setStyle(this.containerEl,{left:0,top:0,width:i,height:j,position:"absolute",zIndex:1}),a.DOM.appendChild(this.imageEl,this.containerEl),a.DOM.appendChild(this.containerEl,this.el),a.Animation.resetTranslate(this.containerEl),a.Animation.resetTranslate(this.imageEl),this.transformEl=this.containerEl):(a.DOM.appendChild(this.imageEl,this.el),this.transformEl=this.imageEl)},setStartingTranslateFromCurrentTransform:function(){var b=
a.coalesce(this.transformEl.style.webkitTransform,this.transformEl.style.MozTransform,this.transformEl.style.transform);if(!a.isNothing(b)&&(b=b.match(/translate\((.*?)\)/),!a.isNothing(b)))b=b[1].split(", "),this.transformSettings.startingTranslateX=e.parseInt(b[0],10),this.transformSettings.startingTranslateY=e.parseInt(b[1],10)},getScale:function(a){a*=this.transformSettings.startingScale;if(this.settings.minUserZoom!==0&&a<this.settings.minUserZoom)a=this.settings.minUserZoom;else if(this.settings.maxUserZoom!==
0&&a>this.settings.maxUserZoom)a=this.settings.maxUserZoom;return a},setStartingScaleAndRotation:function(a,b){this.transformSettings.startingScale=this.getScale(a);this.transformSettings.startingRotation=(this.transformSettings.startingRotation+b)%360},zoomRotate:function(a,b){this.transformSettings.scale=this.getScale(a);this.transformSettings.rotation=this.transformSettings.startingRotation+b;this.applyTransform()},panStart:function(a){this.setStartingTranslateFromCurrentTransform();this.panStartingPoint=
{x:a.x,y:a.y}},pan:function(a){var b=(a.y-this.panStartingPoint.y)/this.transformSettings.scale;this.transformSettings.translateX=this.transformSettings.startingTranslateX+(a.x-this.panStartingPoint.x)/this.transformSettings.scale;this.transformSettings.translateY=this.transformSettings.startingTranslateY+b;this.applyTransform()},zoomAndPanToPoint:function(b,d){if(this.settings.target===e){this.panStart({x:a.DOM.windowWidth()/2,y:a.DOM.windowHeight()/2});var f=(d.y-this.panStartingPoint.y)/this.transformSettings.scale;
this.transformSettings.translateX=(this.transformSettings.startingTranslateX+(d.x-this.panStartingPoint.x)/this.transformSettings.scale)*-1;this.transformSettings.translateY=(this.transformSettings.startingTranslateY+f)*-1}this.setStartingScaleAndRotation(b,0);this.transformSettings.scale=this.transformSettings.startingScale;this.transformSettings.rotation=0;this.applyTransform()},applyTransform:function(){var c=this.transformSettings.rotation%360,d=e.parseInt(this.transformSettings.translateX,10),
f=e.parseInt(this.transformSettings.translateY,10),i="scale("+this.transformSettings.scale+") rotate("+c+"deg) translate("+d+"px, "+f+"px)";a.DOM.setStyle(this.transformEl,{webkitTransform:i,MozTransform:i,msTransform:i,transform:i});a.Events.fire(this,{target:this,type:b.ZoomPanRotate.EventTypes.onTransform,scale:this.transformSettings.scale,rotation:this.transformSettings.rotation,rotationDegs:c,translateX:d,translateY:f})}})})(window,window.klass,window.Code.Util);
(function(e,d){d.registerNamespace("Code.PhotoSwipe");var a=e.Code.PhotoSwipe;a.CssClasses={buildingBody:"ps-building",activeBody:"ps-active"};a.EventTypes={onBeforeShow:"PhotoSwipeOnBeforeShow",onShow:"PhotoSwipeOnShow",onBeforeHide:"PhotoSwipeOnBeforeHide",onHide:"PhotoSwipeOnHide",onDisplayImage:"PhotoSwipeOnDisplayImage",onResetPosition:"PhotoSwipeOnResetPosition",onSlideshowStart:"PhotoSwipeOnSlideshowStart",onSlideshowStop:"PhotoSwipeOnSlideshowStop",onTouch:"PhotoSwipeOnTouch",onBeforeCaptionAndToolbarShow:"PhotoSwipeOnBeforeCaptionAndToolbarShow",
onCaptionAndToolbarShow:"PhotoSwipeOnCaptionAndToolbarShow",onBeforeCaptionAndToolbarHide:"PhotoSwipeOnBeforeCaptionAndToolbarHide",onCaptionAndToolbarHide:"PhotoSwipeOnCaptionAndToolbarHide",onToolbarTap:"PhotoSwipeOnToolbarTap",onBeforeZoomPanRotateShow:"PhotoSwipeOnBeforeZoomPanRotateShow",onZoomPanRotateShow:"PhotoSwipeOnZoomPanRotateShow",onBeforeZoomPanRotateHide:"PhotoSwipeOnBeforeZoomPanRotateHide",onZoomPanRotateHide:"PhotoSwipeOnZoomPanRotateHide",onZoomPanRotateTransform:"PhotoSwipeOnZoomPanRotateTransform"};
a.instances=[];a.activeInstances=[];a.setActivateInstance=function(b){if(d.arrayIndexOf(b.settings.target,a.activeInstances,"target")>-1)throw"Code.PhotoSwipe.activateInstance: Unable to active instance as another instance is already active for this target";a.activeInstances.push({target:b.settings.target,instance:b})};a.unsetActivateInstance=function(b){b=d.arrayIndexOf(b,a.activeInstances,"instance");a.activeInstances.splice(b,1)};a.attach=function(b,c,e){var f,i;f=a.createInstance(b,c,e);c=0;for(e=
b.length;c<e;c++)if(i=b[c],!d.isNothing(i.nodeType)&&i.nodeType===1)i.__photoSwipeClickHandler=a.onTriggerElementClick.bind(f),d.Events.remove(i,"click",i.__photoSwipeClickHandler),d.Events.add(i,"click",i.__photoSwipeClickHandler);return f};if(e.jQuery)e.jQuery.fn.photoSwipe=function(b,c){return a.attach(this,b,c)};a.detatch=function(b){var c,e,f;c=0;for(e=b.originalImages.length;c<e;c++)f=b.originalImages[c],!d.isNothing(f.nodeType)&&f.nodeType===1&&(d.Events.remove(f,"click",f.__photoSwipeClickHandler),
delete f.__photoSwipeClickHandler);a.disposeInstance(b)};a.createInstance=function(b,c,e){var f;if(d.isNothing(b))throw"Code.PhotoSwipe.attach: No images passed.";if(!d.isLikeArray(b))throw"Code.PhotoSwipe.createInstance: Images must be an array of elements or image urls.";if(b.length<1)throw"Code.PhotoSwipe.createInstance: No images to passed.";c=d.coalesce(c,{});f=a.getInstance(e);if(d.isNothing(f))f=new a.PhotoSwipeClass(b,c,e),a.instances.push(f);else throw'Code.PhotoSwipe.createInstance: Instance with id "'+
e+' already exists."';return f};a.disposeInstance=function(b){var c=a.getInstanceIndex(b);if(c<0)throw"Code.PhotoSwipe.disposeInstance: Unable to find instance to dispose.";b.dispose();a.instances.splice(c,1)};a.onTriggerElementClick=function(a){a.preventDefault();this.show(a.currentTarget)};a.getInstance=function(b){var c,d,e;c=0;for(d=a.instances.length;c<d;c++)if(e=a.instances[c],e.id===b)return e;return null};a.getInstanceIndex=function(b){var c,d,e=-1;c=0;for(d=a.instances.length;c<d;c++)if(a.instances[c]===
b){e=c;break}return e}})(window,window.Code.Util);
(function(e,d,a,b,c,g,f,i,j){a.registerNamespace("Code.PhotoSwipe");var h=e.Code.PhotoSwipe;h.PhotoSwipeClass=d({id:null,settings:null,isBackEventSupported:null,backButtonClicked:null,currentIndex:null,originalImages:null,mouseWheelStartTime:null,windowDimensions:null,cache:null,documentOverlay:null,carousel:null,uiLayer:null,toolbar:null,zoomPanRotate:null,windowOrientationChangeHandler:null,windowScrollHandler:null,windowHashChangeHandler:null,keyDownHandler:null,windowOrientationEventName:null,
uiLayerTouchHandler:null,carouselSlideByEndHandler:null,carouselSlideshowStartHandler:null,carouselSlideshowStopHandler:null,toolbarTapHandler:null,toolbarBeforeShowHandler:null,toolbarShowHandler:null,toolbarBeforeHideHandler:null,toolbarHideHandler:null,mouseWheelHandler:null,zoomPanRotateTransformHandler:null,_isResettingPosition:null,_uiWebViewResetPositionTimeout:null,dispose:function(){var b;a.Events.remove(this,h.EventTypes.onBeforeShow);a.Events.remove(this,h.EventTypes.onShow);a.Events.remove(this,
h.EventTypes.onBeforeHide);a.Events.remove(this,h.EventTypes.onHide);a.Events.remove(this,h.EventTypes.onDisplayImage);a.Events.remove(this,h.EventTypes.onResetPosition);a.Events.remove(this,h.EventTypes.onSlideshowStart);a.Events.remove(this,h.EventTypes.onSlideshowStop);a.Events.remove(this,h.EventTypes.onTouch);a.Events.remove(this,h.EventTypes.onBeforeCaptionAndToolbarShow);a.Events.remove(this,h.EventTypes.onCaptionAndToolbarShow);a.Events.remove(this,h.EventTypes.onBeforeCaptionAndToolbarHide);
a.Events.remove(this,h.EventTypes.onCaptionAndToolbarHide);a.Events.remove(this,h.EventTypes.onZoomPanRotateTransform);this.removeEventHandlers();a.isNothing(this.documentOverlay)||this.documentOverlay.dispose();a.isNothing(this.carousel)||this.carousel.dispose();a.isNothing(this.uiLayer)||this.uiLayer.dispose();a.isNothing(this.toolbar)||this.toolbar.dispose();this.destroyZoomPanRotate();a.isNothing(this.cache)||this.cache.dispose();for(b in this)a.objectHasProperty(this,b)&&(this[b]=null)},initialize:function(c,
d,f){this.id=a.isNothing(f)?"PhotoSwipe"+(new Date).getTime().toString():f;this.originalImages=c;if(a.Browser.android&&!a.Browser.firefox&&e.navigator.userAgent.match(/Android (\d+.\d+)/).toString().replace(/^.*\,/,"")>=2.1)this.isBackEventSupported=!0;if(!this.isBackEventSupported)this.isBackEventSupported=a.objectHasProperty(e,"onhashchange");this.settings={fadeInSpeed:250,fadeOutSpeed:250,preventHide:!1,preventSlideshow:!1,zIndex:1E3,backButtonHideEnabled:!0,enableKeyboard:!0,enableMouseWheel:!0,
mouseWheelSpeed:350,autoStartSlideshow:!1,jQueryMobile:!a.isNothing(e.jQuery)&&!a.isNothing(e.jQuery.mobile),jQueryMobileDialogHash:"&ui-state=dialog",enableUIWebViewRepositionTimeout:!1,uiWebViewResetPositionDelay:500,target:e,preventDefaultTouchEvents:!0,loop:!0,slideSpeed:250,nextPreviousSlideSpeed:0,enableDrag:!0,swipeThreshold:50,swipeTimeThreshold:250,slideTimingFunction:"ease-out",slideshowDelay:3E3,doubleTapSpeed:250,margin:20,imageScaleMethod:"fit",captionAndToolbarHide:!1,captionAndToolbarFlipPosition:!1,
captionAndToolbarAutoHideDelay:5E3,captionAndToolbarOpacity:0.8,captionAndToolbarShowEmptyCaptions:!0,getToolbar:h.Toolbar.getToolbar,allowUserZoom:!0,allowRotationOnUserZoom:!1,maxUserZoom:5,minUserZoom:0.5,doubleTapZoomLevel:2.5,getImageSource:h.Cache.Functions.getImageSource,getImageCaption:h.Cache.Functions.getImageCaption,getImageMetaData:h.Cache.Functions.getImageMetaData,cacheMode:h.Cache.Mode.normal};a.extend(this.settings,d);this.settings.target!==e&&(d=a.DOM.getStyle(this.settings.target,
"position"),(d!=="relative"||d!=="absolute")&&a.DOM.setStyle(this.settings.target,"position","relative"));if(this.settings.target!==e)this.isBackEventSupported=!1,this.settings.backButtonHideEnabled=!1;else if(this.settings.preventHide)this.settings.backButtonHideEnabled=!1;this.cache=new b.CacheClass(c,this.settings)},show:function(b){var c,d;this.backButtonClicked=this._isResettingPosition=!1;if(a.isNumber(b))this.currentIndex=b;else{this.currentIndex=-1;c=0;for(d=this.originalImages.length;c<d;c++)if(this.originalImages[c]===
b){this.currentIndex=c;break}}if(this.currentIndex<0||this.currentIndex>this.originalImages.length-1)throw"Code.PhotoSwipe.PhotoSwipeClass.show: Starting index out of range";this.isAlreadyGettingPage=this.getWindowDimensions();h.setActivateInstance(this);this.windowDimensions=this.getWindowDimensions();this.settings.target===e?a.DOM.addClass(e.document.body,h.CssClasses.buildingBody):a.DOM.addClass(this.settings.target,h.CssClasses.buildingBody);this.createComponents();a.Events.fire(this,{type:h.EventTypes.onBeforeShow,
target:this});this.documentOverlay.fadeIn(this.settings.fadeInSpeed,this.onDocumentOverlayFadeIn.bind(this))},getWindowDimensions:function(){return{width:a.DOM.windowWidth(),height:a.DOM.windowHeight()}},createComponents:function(){this.documentOverlay=new c.DocumentOverlayClass(this.settings);this.carousel=new g.CarouselClass(this.cache,this.settings);this.uiLayer=new i.UILayerClass(this.settings);if(!this.settings.captionAndToolbarHide)this.toolbar=new f.ToolbarClass(this.cache,this.settings)},
resetPosition:function(){if(!this._isResettingPosition){var b=this.getWindowDimensions();if(a.isNothing(this.windowDimensions)||!(b.width===this.windowDimensions.width&&b.height===this.windowDimensions.height))this._isResettingPosition=!0,this.windowDimensions=b,this.destroyZoomPanRotate(),this.documentOverlay.resetPosition(),this.carousel.resetPosition(),a.isNothing(this.toolbar)||this.toolbar.resetPosition(),this.uiLayer.resetPosition(),this._isResettingPosition=!1,a.Events.fire(this,{type:h.EventTypes.onResetPosition,
target:this})}},addEventHandler:function(b,c){a.Events.add(this,b,c)},addEventHandlers:function(){if(a.isNothing(this.windowOrientationChangeHandler))this.windowOrientationChangeHandler=this.onWindowOrientationChange.bind(this),this.windowScrollHandler=this.onWindowScroll.bind(this),this.keyDownHandler=this.onKeyDown.bind(this),this.windowHashChangeHandler=this.onWindowHashChange.bind(this),this.uiLayerTouchHandler=this.onUILayerTouch.bind(this),this.carouselSlideByEndHandler=this.onCarouselSlideByEnd.bind(this),
this.carouselSlideshowStartHandler=this.onCarouselSlideshowStart.bind(this),this.carouselSlideshowStopHandler=this.onCarouselSlideshowStop.bind(this),this.toolbarTapHandler=this.onToolbarTap.bind(this),this.toolbarBeforeShowHandler=this.onToolbarBeforeShow.bind(this),this.toolbarShowHandler=this.onToolbarShow.bind(this),this.toolbarBeforeHideHandler=this.onToolbarBeforeHide.bind(this),this.toolbarHideHandler=this.onToolbarHide.bind(this),this.mouseWheelHandler=this.onMouseWheel.bind(this),this.zoomPanRotateTransformHandler=
this.onZoomPanRotateTransform.bind(this);a.Browser.android?this.orientationEventName="resize":a.Browser.iOS&&!a.Browser.safari?a.Events.add(e.document.body,"orientationchange",this.windowOrientationChangeHandler):this.orientationEventName=!a.isNothing(e.onorientationchange)?"orientationchange":"resize";a.isNothing(this.orientationEventName)||a.Events.add(e,this.orientationEventName,this.windowOrientationChangeHandler);this.settings.target===e&&a.Events.add(e,"scroll",this.windowScrollHandler);this.settings.enableKeyboard&&
a.Events.add(e.document,"keydown",this.keyDownHandler);if(this.isBackEventSupported&&this.settings.backButtonHideEnabled)this.windowHashChangeHandler=this.onWindowHashChange.bind(this),this.settings.jQueryMobile?e.location.hash=this.settings.jQueryMobileDialogHash:(this.currentHistoryHashValue="PhotoSwipe"+(new Date).getTime().toString(),e.location.hash=this.currentHistoryHashValue),a.Events.add(e,"hashchange",this.windowHashChangeHandler);this.settings.enableMouseWheel&&a.Events.add(e,"mousewheel",
this.mouseWheelHandler);a.Events.add(this.uiLayer,a.TouchElement.EventTypes.onTouch,this.uiLayerTouchHandler);a.Events.add(this.carousel,g.EventTypes.onSlideByEnd,this.carouselSlideByEndHandler);a.Events.add(this.carousel,g.EventTypes.onSlideshowStart,this.carouselSlideshowStartHandler);a.Events.add(this.carousel,g.EventTypes.onSlideshowStop,this.carouselSlideshowStopHandler);a.isNothing(this.toolbar)||(a.Events.add(this.toolbar,f.EventTypes.onTap,this.toolbarTapHandler),a.Events.add(this.toolbar,
f.EventTypes.onBeforeShow,this.toolbarBeforeShowHandler),a.Events.add(this.toolbar,f.EventTypes.onShow,this.toolbarShowHandler),a.Events.add(this.toolbar,f.EventTypes.onBeforeHide,this.toolbarBeforeHideHandler),a.Events.add(this.toolbar,f.EventTypes.onHide,this.toolbarHideHandler))},removeEventHandlers:function(){a.Browser.iOS&&!a.Browser.safari&&a.Events.remove(e.document.body,"orientationchange",this.windowOrientationChangeHandler);a.isNothing(this.orientationEventName)||a.Events.remove(e,this.orientationEventName,
this.windowOrientationChangeHandler);a.Events.remove(e,"scroll",this.windowScrollHandler);this.settings.enableKeyboard&&a.Events.remove(e.document,"keydown",this.keyDownHandler);this.isBackEventSupported&&this.settings.backButtonHideEnabled&&a.Events.remove(e,"hashchange",this.windowHashChangeHandler);this.settings.enableMouseWheel&&a.Events.remove(e,"mousewheel",this.mouseWheelHandler);a.isNothing(this.uiLayer)||a.Events.remove(this.uiLayer,a.TouchElement.EventTypes.onTouch,this.uiLayerTouchHandler);
a.isNothing(this.toolbar)||(a.Events.remove(this.carousel,g.EventTypes.onSlideByEnd,this.carouselSlideByEndHandler),a.Events.remove(this.carousel,g.EventTypes.onSlideshowStart,this.carouselSlideshowStartHandler),a.Events.remove(this.carousel,g.EventTypes.onSlideshowStop,this.carouselSlideshowStopHandler));a.isNothing(this.toolbar)||(a.Events.remove(this.toolbar,f.EventTypes.onTap,this.toolbarTapHandler),a.Events.remove(this.toolbar,f.EventTypes.onBeforeShow,this.toolbarBeforeShowHandler),a.Events.remove(this.toolbar,
f.EventTypes.onShow,this.toolbarShowHandler),a.Events.remove(this.toolbar,f.EventTypes.onBeforeHide,this.toolbarBeforeHideHandler),a.Events.remove(this.toolbar,f.EventTypes.onHide,this.toolbarHideHandler))},hide:function(){if(!this.settings.preventHide){if(a.isNothing(this.documentOverlay))throw"Code.PhotoSwipe.PhotoSwipeClass.hide: PhotoSwipe instance is already hidden";if(a.isNothing(this.hiding)){this.clearUIWebViewResetPositionTimeout();this.destroyZoomPanRotate();this.removeEventHandlers();a.Events.fire(this,
{type:h.EventTypes.onBeforeHide,target:this});this.uiLayer.dispose();this.uiLayer=null;if(!a.isNothing(this.toolbar))this.toolbar.dispose(),this.toolbar=null;this.carousel.dispose();this.carousel=null;a.DOM.removeClass(e.document.body,h.CssClasses.activeBody);this.documentOverlay.dispose();this.documentOverlay=null;this._isResettingPosition=!1;h.unsetActivateInstance(this);a.Events.fire(this,{type:h.EventTypes.onHide,target:this});this.goBackInHistory()}}},goBackInHistory:function(){this.isBackEventSupported&&
this.settings.backButtonHideEnabled&&(this.backButtonClicked||e.history.back())},play:function(){!this.isZoomActive()&&!this.settings.preventSlideshow&&!a.isNothing(this.carousel)&&(!a.isNothing(this.toolbar)&&this.toolbar.isVisible&&this.toolbar.fadeOut(),this.carousel.startSlideshow())},stop:function(){this.isZoomActive()||a.isNothing(this.carousel)||this.carousel.stopSlideshow()},previous:function(){this.isZoomActive()||a.isNothing(this.carousel)||this.carousel.previous()},next:function(){this.isZoomActive()||
a.isNothing(this.carousel)||this.carousel.next()},toggleToolbar:function(){this.isZoomActive()||a.isNothing(this.toolbar)||this.toolbar.toggleVisibility(this.currentIndex)},fadeOutToolbarIfVisible:function(){!a.isNothing(this.toolbar)&&this.toolbar.isVisible&&this.settings.captionAndToolbarAutoHideDelay>0&&this.toolbar.fadeOut()},createZoomPanRotate:function(){this.stop();if(this.canUserZoom()&&!this.isZoomActive())a.Events.fire(this,h.EventTypes.onBeforeZoomPanRotateShow),this.zoomPanRotate=new j.ZoomPanRotateClass(this.settings,
this.cache.images[this.currentIndex],this.uiLayer),this.uiLayer.captureSettings.preventDefaultTouchEvents=!0,a.Events.add(this.zoomPanRotate,h.ZoomPanRotate.EventTypes.onTransform,this.zoomPanRotateTransformHandler),a.Events.fire(this,h.EventTypes.onZoomPanRotateShow),!a.isNothing(this.toolbar)&&this.toolbar.isVisible&&this.toolbar.fadeOut()},destroyZoomPanRotate:function(){if(!a.isNothing(this.zoomPanRotate))a.Events.fire(this,h.EventTypes.onBeforeZoomPanRotateHide),a.Events.remove(this.zoomPanRotate,
h.ZoomPanRotate.EventTypes.onTransform,this.zoomPanRotateTransformHandler),this.zoomPanRotate.dispose(),this.zoomPanRotate=null,this.uiLayer.captureSettings.preventDefaultTouchEvents=this.settings.preventDefaultTouchEvents,a.Events.fire(this,h.EventTypes.onZoomPanRotateHide)},canUserZoom:function(){var b;if(a.Browser.msie){if(b=document.createElement("div"),a.isNothing(b.style.msTransform))return!1}else if(!a.Browser.isCSSTransformSupported)return!1;if(!this.settings.allowUserZoom)return!1;if(this.carousel.isSliding)return!1;
b=this.cache.images[this.currentIndex];if(a.isNothing(b))return!1;if(b.isLoading)return!1;return!0},isZoomActive:function(){return!a.isNothing(this.zoomPanRotate)},getCurrentImage:function(){return this.cache.images[this.currentIndex]},onDocumentOverlayFadeIn:function(){e.setTimeout(function(){var b=this.settings.target===e?e.document.body:this.settings.target;a.DOM.removeClass(b,h.CssClasses.buildingBody);a.DOM.addClass(b,h.CssClasses.activeBody);this.addEventHandlers();this.carousel.show(this.currentIndex);
this.uiLayer.show();this.settings.autoStartSlideshow?this.play():a.isNothing(this.toolbar)||this.toolbar.show(this.currentIndex);a.Events.fire(this,{type:h.EventTypes.onShow,target:this});this.setUIWebViewResetPositionTimeout()}.bind(this),250)},setUIWebViewResetPositionTimeout:function(){if(this.settings.enableUIWebViewRepositionTimeout&&a.Browser.iOS&&!a.Browser.safari)a.isNothing(this._uiWebViewResetPositionTimeout)||e.clearTimeout(this._uiWebViewResetPositionTimeout),this._uiWebViewResetPositionTimeout=
e.setTimeout(function(){this.resetPosition();this.setUIWebViewResetPositionTimeout()}.bind(this),this.settings.uiWebViewResetPositionDelay)},clearUIWebViewResetPositionTimeout:function(){a.isNothing(this._uiWebViewResetPositionTimeout)||e.clearTimeout(this._uiWebViewResetPositionTimeout)},onWindowScroll:function(){this.resetPosition()},onWindowOrientationChange:function(){this.resetPosition()},onWindowHashChange:function(){if(e.location.hash!=="#"+(this.settings.jQueryMobile?this.settings.jQueryMobileDialogHash:
this.currentHistoryHashValue))this.backButtonClicked=!0,this.hide()},onKeyDown:function(a){a.keyCode===37?(a.preventDefault(),this.previous()):a.keyCode===39?(a.preventDefault(),this.next()):a.keyCode===38||a.keyCode===40?a.preventDefault():a.keyCode===27?(a.preventDefault(),this.hide()):a.keyCode===32?(this.settings.hideToolbar?this.hide():this.toggleToolbar(),a.preventDefault()):a.keyCode===13&&(a.preventDefault(),this.play())},onUILayerTouch:function(b){if(this.isZoomActive())switch(b.action){case a.TouchElement.ActionTypes.gestureChange:this.zoomPanRotate.zoomRotate(b.scale,
this.settings.allowRotationOnUserZoom?b.rotation:0);break;case a.TouchElement.ActionTypes.gestureEnd:this.zoomPanRotate.setStartingScaleAndRotation(b.scale,this.settings.allowRotationOnUserZoom?b.rotation:0);break;case a.TouchElement.ActionTypes.touchStart:this.zoomPanRotate.panStart(b.point);break;case a.TouchElement.ActionTypes.touchMove:this.zoomPanRotate.pan(b.point);break;case a.TouchElement.ActionTypes.doubleTap:this.destroyZoomPanRotate();this.toggleToolbar();break;case a.TouchElement.ActionTypes.swipeLeft:this.destroyZoomPanRotate();
this.next();this.toggleToolbar();break;case a.TouchElement.ActionTypes.swipeRight:this.destroyZoomPanRotate(),this.previous(),this.toggleToolbar()}else switch(b.action){case a.TouchElement.ActionTypes.touchMove:case a.TouchElement.ActionTypes.swipeLeft:case a.TouchElement.ActionTypes.swipeRight:this.fadeOutToolbarIfVisible();this.carousel.onTouch(b.action,b.point);break;case a.TouchElement.ActionTypes.touchStart:case a.TouchElement.ActionTypes.touchMoveEnd:this.carousel.onTouch(b.action,b.point);
break;case a.TouchElement.ActionTypes.tap:this.toggleToolbar();break;case a.TouchElement.ActionTypes.doubleTap:this.settings.target===e&&(b.point.x-=a.DOM.windowScrollLeft(),b.point.y-=a.DOM.windowScrollTop());var c=this.cache.images[this.currentIndex].imageEl,d=e.parseInt(a.DOM.getStyle(c,"top"),10),f=e.parseInt(a.DOM.getStyle(c,"left"),10),g=f+a.DOM.width(c),c=d+a.DOM.height(c);if(b.point.x<f)b.point.x=f;else if(b.point.x>g)b.point.x=g;if(b.point.y<d)b.point.y=d;else if(b.point.y>c)b.point.y=c;
this.createZoomPanRotate();this.isZoomActive()&&this.zoomPanRotate.zoomAndPanToPoint(this.settings.doubleTapZoomLevel,b.point);break;case a.TouchElement.ActionTypes.gestureStart:this.createZoomPanRotate()}a.Events.fire(this,{type:h.EventTypes.onTouch,target:this,point:b.point,action:b.action})},onCarouselSlideByEnd:function(b){this.currentIndex=b.cacheIndex;a.isNothing(this.toolbar)||(this.toolbar.setCaption(this.currentIndex),this.toolbar.setToolbarStatus(this.currentIndex));a.Events.fire(this,{type:h.EventTypes.onDisplayImage,
target:this,action:b.action,index:b.cacheIndex})},onToolbarTap:function(b){switch(b.action){case f.ToolbarAction.next:this.next();break;case f.ToolbarAction.previous:this.previous();break;case f.ToolbarAction.close:this.hide();break;case f.ToolbarAction.play:this.play()}a.Events.fire(this,{type:h.EventTypes.onToolbarTap,target:this,toolbarAction:b.action,tapTarget:b.tapTarget})},onMouseWheel:function(b){var c=a.Events.getWheelDelta(b);if(!(b.timeStamp-(this.mouseWheelStartTime||0)<this.settings.mouseWheelSpeed))this.mouseWheelStartTime=
b.timeStamp,this.settings.invertMouseWheel&&(c*=-1),c<0?this.next():c>0&&this.previous()},onCarouselSlideshowStart:function(){a.Events.fire(this,{type:h.EventTypes.onSlideshowStart,target:this})},onCarouselSlideshowStop:function(){a.Events.fire(this,{type:h.EventTypes.onSlideshowStop,target:this})},onToolbarBeforeShow:function(){a.Events.fire(this,{type:h.EventTypes.onBeforeCaptionAndToolbarShow,target:this})},onToolbarShow:function(){a.Events.fire(this,{type:h.EventTypes.onCaptionAndToolbarShow,
target:this})},onToolbarBeforeHide:function(){a.Events.fire(this,{type:h.EventTypes.onBeforeCaptionAndToolbarHide,target:this})},onToolbarHide:function(){a.Events.fire(this,{type:h.EventTypes.onCaptionAndToolbarHide,target:this})},onZoomPanRotateTransform:function(b){a.Events.fire(this,{target:this,type:h.EventTypes.onZoomPanRotateTransform,scale:b.scale,rotation:b.rotation,rotationDegs:b.rotationDegs,translateX:b.translateX,translateY:b.translateY})}})})(window,window.klass,window.Code.Util,window.Code.PhotoSwipe.Cache,
window.Code.PhotoSwipe.DocumentOverlay,window.Code.PhotoSwipe.Carousel,window.Code.PhotoSwipe.Toolbar,window.Code.PhotoSwipe.UILayer,window.Code.PhotoSwipe.ZoomPanRotate);
var ecCmPriceList = new Array();
function getMecMemPrice(){
var ck = new Cookie();
var cm_class = ck.getCookie('cm_class');
if(typeof(cm_class) != 'undefined'){
for(var p in ecCmPriceList){
var m = ecCmPriceList[p][cm_class];
$('.memprice[p="mec_mec_price_'+p+'"]').show().find('.mpri-val').text(m);
}
}else {//undefined
for(var p in ecCmPriceList){
var pre_class=$('.memprice[p="mec_mec_price_'+p+'"]').attr("c");
if(pre_class>0){
cm_class=pre_class;
var m = ecCmPriceList[p][cm_class];
$('.memprice[p="mec_mec_price_'+p+'"]').show().find('.mpri-val').text(m);
}
}
}
}
function bindAddMemCart(){
$('.maddtocart .maddcart-mbtn').unbind("click").click(function(){
var add_parent = $(this).parents(".maddtocart");
var qty = 0;
if($(this).attr("cartQty")) qty = parseInt($(this).attr("cartQty"));
else if($(add_parent).find(".maddcart-qty").val()) qty = parseInt($(add_parent).find(".maddcart-qty").val());
if(!qty)
qty = 1;
var option = {
"action" : $(this).attr("cartAction"),
"Part" : $(this).attr("Part"),
"cartType" : $(this).attr("cartType"),
"Op" : "addToCart",
"Cnt" : qty,
"callBack" : "mecAddCartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
});
$('.mbox .mpro-btns .maddcart-mbtn').unbind("click").click(function(){
var qty = 1;
var option = {
"action" : $(this).attr("cartAction"),
"Part" : $(this).attr("Part"),
"cartType" : $(this).attr("cartType"),
"Op" : "addToCart",
"Cnt" : qty,
"callBack" : "mecAddCartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
});
}
$(document).ready(function(){
getMecMemPrice();
bindAddMemCart();
$('.maddtocart .maddcart-minus').unbind("click").click(function(){
var add_parent = $(this).parents(".maddtocart");
if($(add_parent).find(".maddcart-qty").val()<=1) $(add_parent).find(".maddcart-qty").val(1);
else{
var num = $(add_parent).find(".maddcart-qty").val()-1;
$(add_parent).find(".maddcart-qty").val(num);
}
});
$('.maddtocart .maddcart-plus').unbind("click").click(function(){
var add_parent = $(this).parents(".maddtocart");
var num = parseInt($(add_parent).find(".maddcart-qty").val())+1;
if(num<1) num =1;
$(add_parent).find(".maddcart-qty").val(num);
});
$('.maddtocart .mpayit-mbtn').unbind("click").click(function(){
var add_parent = $(this).parents(".maddtocart");
var qty = 0;
if($(this).attr("cartQty")) qty = parseInt($(this).attr("cartQty"));
else if($(add_parent).find(".maddcart-qty").val()) qty = parseInt($(add_parent).find(".maddcart-qty").val());
if(!qty)
qty = 1;
var option = {
"action" : $(this).attr("cartAction"),
"Part" : $(this).attr("Part"),
"cartType" : $(this).attr("cartType"),
"actionType" : "mecbuynow",
"Op" : "addToCart",
"Cnt" : qty,
"callBack" : "mecAddCartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
});
$('.module-viewcart .mcart-operate .ecbtn-checkout').unbind("click").click(function(){
var option = {
"action" : $(this).attr("cartAction"),
"Op" : "chkLogin",
"callBack" : "mecGoToBill"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
});
$.mecGoToBill = function(p_data){
$('#loading').hide();
$('#overlay').removeClass("show");
var d = eval("("+p_data+")");
if(!d.login){
showPopDiv($('#_pop_login.mpopdiv'),$('#_pop_login.mpopdiv .mbox'));
}
else{
var goto_url = $('.module-viewcart .mcart-operate .ecbtn-checkout').attr("billAction");
window.location = goto_url;
}
}
});
function mecCartDelPart(p_obj){
var option = {
"action" : $(p_obj).attr("cartAction"),
"Part" : $(p_obj).attr("Part"),
"cartType" : $(p_obj).attr("cartType"),
"Op" : "deletePart",
"callBack" : "mecUpdatePartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
}
function mecCartQtyMinus(p_obj){
var qty_parent = $(p_obj).parents(".mqty-edit");
var qty = parseInt($(qty_parent).find(".i-qty").val());
if(qty%1!=0){
$(qty_parent).find(".i-qty").val(1);
return;
}
if(qty<=1){
$(add_parent).find(".i-qty").val(1);
return;
}
else qty = qty-1;
var option = {
"action" : $(p_obj).attr("cartAction"),
"Part" : $(p_obj).attr("Part"),
"cartType" : $(p_obj).attr("cartType"),
"Op" : "updatePart",
"Cnt" : qty,
"callBack" : "mecUpdatePartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
}
function mecCartQtyPlus(p_obj){
var qty_parent = $(p_obj).parents(".mqty-edit");
var qty = parseInt($(qty_parent).find(".i-qty").val());
if(qty%1!=0){
$(qty_parent).find(".i-qty").val(1);
return;
}
qty = qty+1;
var option = {
"action" : $(p_obj).attr("cartAction"),
"Part" : $(p_obj).attr("Part"),
"cartType" : $(p_obj).attr("cartType"),
"Op" : "updatePart",
"Cnt" : qty,
"callBack" : "mecUpdatePartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
}
function mecSetCartQty(p_obj){
var qty_parent = $(p_obj).parents(".mqty-edit");
var qty = p_obj.value;
if(qty%1!=0){
$(qty_parent).find(".i-qty").val(1);
return;
}
var option = {
"action" : $(p_obj).attr("cartAction"),
"Part" : $(p_obj).attr("Part"),
"cartType" : $(p_obj).attr("cartType"),
"Op" : "updatePart",
"Cnt" : qty,
"callBack" : "mecUpdatePartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
}
function mecCartDelGift(p_obj){
var option = {
"action" : $(p_obj).attr("cartAction"),
"Part" : $(p_obj).attr("Part"),
"cartType" : $(p_obj).attr("cartType"),
"Op" : "deleteGift",
"callBack" : "mecUpdatePartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
}
function mecCartAddGift(p_obj){
var option = {
"action" : $(p_obj).attr("cartAction"),
"Part" : $(p_obj).attr("giftPart"),
"giftSeq" : $(p_obj).attr("giftSeq"),
"cartType" : $(p_obj).attr("cartType"),
"Op" : "addGift",
"callBack" : "mecUpdatePartCallBack"
}
var HvCart = new HvMecCart();
HvCart.init(option);
HvCart.submitCart();
}
$.mecAddCartCallBack = function(p_data){
$('#loading').hide();
$('#overlay').removeClass("show");
var d = eval("("+p_data+")");
if(d.href!="undefined"&&d.href){
window.location.href = d.href;
}else
showPopTips(d.content);
}
$.mecUpdatePartCallBack = function(p_data){
$('#loading').hide();
$('#overlay').removeClass("show");
var d = eval("("+p_data+")");
if(d.understockyn==1)
$('.module-viewcart .mcart-operate .form-btn ').hide();
else
$('.module-viewcart .mcart-operate .form-btn ').show();
if(d.stat){
$(".module-viewcart .mcartUl").html(d.content);
$(".module-viewcart .mcart-amount .mval").html(d.cartqty);
$(".module-viewcart .subtotal .mpri-val").html(d.cartsumamt);
}
else
showPopDialog(d.msg);
}
function HvMecCart(){};
HvMecCart.prototype.init = function(p_option){
this.action = p_option.action;
this.cartType = p_option.cartType;
this.Op = p_option.Op;
this.Part = p_option.Part;
this.GiftSeq = p_option.giftSeq;
this.Cnt = p_option.Cnt;
this.Bon = p_option.Bon;
this.actionType = p_option.actionType;
this.callBack = p_option.callBack;
}
HvMecCart.prototype.setField = function(p_field,p_val){
eval("this."+p_field) = p_val;
}
HvMecCart.prototype.submitCart = function(){
$.ajax({
url : this.action,
type : "POST",
context : this,
data : {
"CartType" : this.cartType,
"Op" : this.Op,
"Part" : this.Part,
"GiftSeq" : this.GiftSeq,
"Cnt" : this.Cnt,
"Bon" : this.Bon,
"actionType" : this.actionType
},
beforeSend :
function(){
$('#loading').show();
$('#overlay').addClass("show");
},
success :eval("$."+this.callBack)
});
}
