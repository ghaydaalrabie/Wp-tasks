(()=>{var e={84788:(e,t,r)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=r(2378);let o,i,a,s;const l=/<(\/)?(\w+)\s*(\/)?>/g;function c(e,t,r,n,o){return{element:e,tokenStart:t,tokenLength:r,prevOffset:n,leadingTextStart:o,children:[]}}const u=e=>{const t="object"==typeof e,r=t&&Object.values(e);return t&&r.length&&r.every((e=>(0,n.isValidElement)(e)))};function p(e){const t=function(){const e=l.exec(o);if(null===e)return["no-more-tokens"];const t=e.index,[r,n,i,a]=e,s=r.length;if(a)return["self-closed",i,t,s];if(n)return["closer",i,t,s];return["opener",i,t,s]}(),[r,u,p,f]=t,h=s.length,g=p>i?i:null;if(!e[u])return d(),!1;switch(r){case"no-more-tokens":if(0!==h){const{leadingTextStart:e,tokenStart:t}=s.pop();a.push(o.substr(e,t))}return d(),!1;case"self-closed":return 0===h?(null!==g&&a.push(o.substr(g,p-g)),a.push(e[u]),i=p+f,!0):(m(c(e[u],p,f)),i=p+f,!0);case"opener":return s.push(c(e[u],p,f,p+f,g)),i=p+f,!0;case"closer":if(1===h)return function(e){const{element:t,leadingTextStart:r,prevOffset:i,tokenStart:l,children:c}=s.pop(),u=e?o.substr(i,e-i):o.substr(i);u&&c.push(u);null!==r&&a.push(o.substr(r,l-r));a.push((0,n.cloneElement)(t,null,...c))}(p),i=p+f,!0;const t=s.pop(),r=o.substr(t.prevOffset,p-t.prevOffset);t.children.push(r),t.prevOffset=p+f;const l=c(t.element,t.tokenStart,t.tokenLength,p+f);return l.children=t.children,m(l),i=p+f,!0;default:return d(),!1}}function d(){const e=o.length-i;0!==e&&a.push(o.substr(i,e))}function m(e){const{element:t,tokenStart:r,tokenLength:i,prevOffset:a,children:l}=e,c=s[s.length-1],u=o.substr(c.prevOffset,r-c.prevOffset);u&&c.children.push(u),c.children.push((0,n.cloneElement)(t,null,...l)),c.prevOffset=a||r+i}var f=(e,t)=>{if(o=e,i=0,a=[],s=[],l.lastIndex=0,!u(t))throw new TypeError("The conversionMap provided is not valid. It must be an object with values that are WPElements");do{}while(p(t));return(0,n.createElement)(n.Fragment,null,...a)};t.default=f},51806:(e,t,r)=>{"use strict";var n=r(25877);Object.defineProperty(t,"__esModule",{value:!0});var o={createInterpolateElement:!0,Platform:!0,renderToString:!0,RawHTML:!0};Object.defineProperty(t,"Platform",{enumerable:!0,get:function(){return c.default}}),Object.defineProperty(t,"RawHTML",{enumerable:!0,get:function(){return p.default}}),Object.defineProperty(t,"createInterpolateElement",{enumerable:!0,get:function(){return i.default}}),Object.defineProperty(t,"renderToString",{enumerable:!0,get:function(){return u.default}});var i=n(r(84788)),a=r(2378);Object.keys(a).forEach((function(e){"default"!==e&&"__esModule"!==e&&(Object.prototype.hasOwnProperty.call(o,e)||e in t&&t[e]===a[e]||Object.defineProperty(t,e,{enumerable:!0,get:function(){return a[e]}}))}));var s=r(29115);Object.keys(s).forEach((function(e){"default"!==e&&"__esModule"!==e&&(Object.prototype.hasOwnProperty.call(o,e)||e in t&&t[e]===s[e]||Object.defineProperty(t,e,{enumerable:!0,get:function(){return s[e]}}))}));var l=r(82986);Object.keys(l).forEach((function(e){"default"!==e&&"__esModule"!==e&&(Object.prototype.hasOwnProperty.call(o,e)||e in t&&t[e]===l[e]||Object.defineProperty(t,e,{enumerable:!0,get:function(){return l[e]}}))}));var c=n(r(82912)),u=n(r(51962)),p=n(r(74745))},82912:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r={OS:"web",select:e=>"web"in e?e.web:e.default,isWeb:!0};t.default=r},74745:(e,t,r)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){let{children:t,...r}=e,o="";return n.Children.toArray(t).forEach((e=>{"string"==typeof e&&""!==e.trim()&&(o+=e)})),(0,n.createElement)("div",{dangerouslySetInnerHTML:{__html:o},...r})};var n=r(2378)},29115:(e,t,r)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"createPortal",{enumerable:!0,get:function(){return n.createPortal}}),Object.defineProperty(t,"findDOMNode",{enumerable:!0,get:function(){return n.findDOMNode}}),Object.defineProperty(t,"hydrate",{enumerable:!0,get:function(){return n.hydrate}}),Object.defineProperty(t,"render",{enumerable:!0,get:function(){return n.render}}),Object.defineProperty(t,"unmountComponentAtNode",{enumerable:!0,get:function(){return n.unmountComponentAtNode}});var n=r(91850)},2378:(e,t,r)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"Children",{enumerable:!0,get:function(){return n.Children}}),Object.defineProperty(t,"Component",{enumerable:!0,get:function(){return n.Component}}),Object.defineProperty(t,"Fragment",{enumerable:!0,get:function(){return n.Fragment}}),Object.defineProperty(t,"StrictMode",{enumerable:!0,get:function(){return n.StrictMode}}),Object.defineProperty(t,"Suspense",{enumerable:!0,get:function(){return n.Suspense}}),Object.defineProperty(t,"cloneElement",{enumerable:!0,get:function(){return n.cloneElement}}),t.concatChildren=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];return t.reduce(((e,t,r)=>(n.Children.forEach(t,((t,o)=>{t&&"string"!=typeof t&&(t=(0,n.cloneElement)(t,{key:[r,o].join()})),e.push(t)})),e)),[])},Object.defineProperty(t,"createContext",{enumerable:!0,get:function(){return n.createContext}}),Object.defineProperty(t,"createElement",{enumerable:!0,get:function(){return n.createElement}}),Object.defineProperty(t,"createRef",{enumerable:!0,get:function(){return n.createRef}}),Object.defineProperty(t,"forwardRef",{enumerable:!0,get:function(){return n.forwardRef}}),Object.defineProperty(t,"isValidElement",{enumerable:!0,get:function(){return n.isValidElement}}),Object.defineProperty(t,"lazy",{enumerable:!0,get:function(){return n.lazy}}),Object.defineProperty(t,"memo",{enumerable:!0,get:function(){return n.memo}}),t.switchChildrenNodeName=function(e,t){return e&&n.Children.map(e,((e,r)=>{if("string"==typeof(null==e?void 0:e.valueOf()))return(0,n.createElement)(t,{key:r},e);const{children:o,...i}=e.props;return(0,n.createElement)(t,{key:r,...i},o)}))},Object.defineProperty(t,"useCallback",{enumerable:!0,get:function(){return n.useCallback}}),Object.defineProperty(t,"useContext",{enumerable:!0,get:function(){return n.useContext}}),Object.defineProperty(t,"useDebugValue",{enumerable:!0,get:function(){return n.useDebugValue}}),Object.defineProperty(t,"useEffect",{enumerable:!0,get:function(){return n.useEffect}}),Object.defineProperty(t,"useImperativeHandle",{enumerable:!0,get:function(){return n.useImperativeHandle}}),Object.defineProperty(t,"useLayoutEffect",{enumerable:!0,get:function(){return n.useLayoutEffect}}),Object.defineProperty(t,"useMemo",{enumerable:!0,get:function(){return n.useMemo}}),Object.defineProperty(t,"useReducer",{enumerable:!0,get:function(){return n.useReducer}}),Object.defineProperty(t,"useRef",{enumerable:!0,get:function(){return n.useRef}}),Object.defineProperty(t,"useState",{enumerable:!0,get:function(){return n.useState}});var n=r(99196)},51962:(e,t,r)=>{"use strict";var n=r(25877);Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0,t.hasPrefix=g,t.renderAttributes=P,t.renderComponent=S,t.renderElement=O,t.renderNativeComponent=j,t.renderStyle=E;var o=r(92819),i=r(81975),a=r(2378),s=n(r(74745));const{Provider:l,Consumer:c}=(0,a.createContext)(void 0),u=(0,a.forwardRef)((()=>null)),p=new Set(["string","boolean","number"]),d=new Set(["area","base","br","col","command","embed","hr","img","input","keygen","link","meta","param","source","track","wbr"]),m=new Set(["allowfullscreen","allowpaymentrequest","allowusermedia","async","autofocus","autoplay","checked","controls","default","defer","disabled","download","formnovalidate","hidden","ismap","itemscope","loop","multiple","muted","nomodule","novalidate","open","playsinline","readonly","required","reversed","selected","typemustmatch"]),f=new Set(["autocapitalize","autocomplete","charset","contenteditable","crossorigin","decoding","dir","draggable","enctype","formenctype","formmethod","http-equiv","inputmode","kind","method","preload","scope","shape","spellcheck","translate","type","wrap"]),h=new Set(["animation","animationIterationCount","baselineShift","borderImageOutset","borderImageSlice","borderImageWidth","columnCount","cx","cy","fillOpacity","flexGrow","flexShrink","floodOpacity","fontWeight","gridColumnEnd","gridColumnStart","gridRowEnd","gridRowStart","lineHeight","opacity","order","orphans","r","rx","ry","shapeImageThreshold","stopOpacity","strokeDasharray","strokeDashoffset","strokeMiterlimit","strokeOpacity","strokeWidth","tabSize","widows","x","y","zIndex","zoom"]);function g(e,t){return t.some((t=>0===e.indexOf(t)))}function b(e){return"key"===e||"children"===e}function y(e,t){return"style"===e?E(t):t}const k=["accentHeight","alignmentBaseline","arabicForm","baselineShift","capHeight","clipPath","clipRule","colorInterpolation","colorInterpolationFilters","colorProfile","colorRendering","dominantBaseline","enableBackground","fillOpacity","fillRule","floodColor","floodOpacity","fontFamily","fontSize","fontSizeAdjust","fontStretch","fontStyle","fontVariant","fontWeight","glyphName","glyphOrientationHorizontal","glyphOrientationVertical","horizAdvX","horizOriginX","imageRendering","letterSpacing","lightingColor","markerEnd","markerMid","markerStart","overlinePosition","overlineThickness","paintOrder","panose1","pointerEvents","renderingIntent","shapeRendering","stopColor","stopOpacity","strikethroughPosition","strikethroughThickness","strokeDasharray","strokeDashoffset","strokeLinecap","strokeLinejoin","strokeMiterlimit","strokeOpacity","strokeWidth","textAnchor","textDecoration","textRendering","underlinePosition","underlineThickness","unicodeBidi","unicodeRange","unitsPerEm","vAlphabetic","vHanging","vIdeographic","vMathematical","vectorEffect","vertAdvY","vertOriginX","vertOriginY","wordSpacing","writingMode","xmlnsXlink","xHeight"].reduce(((e,t)=>(e[t.toLowerCase()]=t,e)),{}),v=["allowReorder","attributeName","attributeType","autoReverse","baseFrequency","baseProfile","calcMode","clipPathUnits","contentScriptType","contentStyleType","diffuseConstant","edgeMode","externalResourcesRequired","filterRes","filterUnits","glyphRef","gradientTransform","gradientUnits","kernelMatrix","kernelUnitLength","keyPoints","keySplines","keyTimes","lengthAdjust","limitingConeAngle","markerHeight","markerUnits","markerWidth","maskContentUnits","maskUnits","numOctaves","pathLength","patternContentUnits","patternTransform","patternUnits","pointsAtX","pointsAtY","pointsAtZ","preserveAlpha","preserveAspectRatio","primitiveUnits","refX","refY","repeatCount","repeatDur","requiredExtensions","requiredFeatures","specularConstant","specularExponent","spreadMethod","startOffset","stdDeviation","stitchTiles","suppressContentEditableWarning","suppressHydrationWarning","surfaceScale","systemLanguage","tableValues","targetX","targetY","textLength","viewBox","viewTarget","xChannelSelector","yChannelSelector"].reduce(((e,t)=>(e[t.toLowerCase()]=t,e)),{}),w=["xlink:actuate","xlink:arcrole","xlink:href","xlink:role","xlink:show","xlink:title","xlink:type","xml:base","xml:lang","xml:space","xmlns:xlink"].reduce(((e,t)=>(e[t.replace(":","").toLowerCase()]=t,e)),{});function x(e){switch(e){case"htmlFor":return"for";case"className":return"class"}const t=e.toLowerCase();return v[t]?v[t]:k[t]?(0,o.kebabCase)(k[t]):w[t]?w[t]:t}function C(e){return e.startsWith("--")?e:g(e,["ms","O","Moz","Webkit"])?"-"+(0,o.kebabCase)(e):(0,o.kebabCase)(e)}function M(e,t){return"number"!=typeof t||0===t||h.has(e)?t:t+"px"}function O(e,t){let r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};if(null==e||!1===e)return"";if(Array.isArray(e))return _(e,t,r);switch(typeof e){case"string":return(0,i.escapeHTML)(e);case"number":return e.toString()}const{type:n,props:o}=e;switch(n){case a.StrictMode:case a.Fragment:return _(o.children,t,r);case s.default:const{children:e,...n}=o;return j(Object.keys(n).length?"div":null,{...n,dangerouslySetInnerHTML:{__html:e}},t,r)}switch(typeof n){case"string":return j(n,o,t,r);case"function":return n.prototype&&"function"==typeof n.prototype.render?S(n,o,t,r):O(n(o,r),t,r)}switch(n&&n.$$typeof){case l.$$typeof:return _(o.children,o.value,r);case c.$$typeof:return O(o.children(t||n._currentValue),t,r);case u.$$typeof:return O(n.render(o),t,r)}return""}function j(e,t,r){let n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{},o="";if("textarea"===e&&t.hasOwnProperty("value")){o=_(t.value,r,n);const{value:e,...i}=t;t=i}else t.dangerouslySetInnerHTML&&"string"==typeof t.dangerouslySetInnerHTML.__html?o=t.dangerouslySetInnerHTML.__html:void 0!==t.children&&(o=_(t.children,r,n));if(!e)return o;const i=P(t);return d.has(e)?"<"+e+i+"/>":"<"+e+i+">"+o+"</"+e+">"}function S(e,t,r){let n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{};const o=new e(t,n);"function"==typeof o.getChildContext&&Object.assign(n,o.getChildContext());const i=O(o.render(),r,n);return i}function _(e,t){let r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},n="";e=Array.isArray(e)?e:[e];for(let o=0;o<e.length;o++){n+=O(e[o],t,r)}return n}function P(e){let t="";for(const r in e){const n=x(r);if(!(0,i.isValidAttributeName)(n))continue;let o=y(r,e[r]);if(!p.has(typeof o))continue;if(b(r))continue;const a=m.has(n);if(a&&!1===o)continue;const s=a||g(r,["data-","aria-"])||f.has(n);("boolean"!=typeof o||s)&&(t+=" "+n,a||("string"==typeof o&&(o=(0,i.escapeAttribute)(o)),t+='="'+o+'"'))}return t}function E(e){if(!(0,o.isPlainObject)(e))return e;let t;for(const r in e){const n=e[r];if(null==n)continue;t?t+=";":t="";t+=C(r)+":"+M(r,n)}return t}var L=O;t.default=L},82986:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.isEmptyElement=void 0;t.isEmptyElement=e=>"number"!=typeof e&&("string"==typeof(null==e?void 0:e.valueOf())||Array.isArray(e)?!e.length:!e)},93846:(e,t,r)=>{"use strict";r.d(t,{Z:()=>g});var n=r(90017),o=r.n(n),i=r(51806),a=r(55609),s=r(69307),l=r(65736),c=r(92819),u=r(85007),p=r(45388),d=r(82621),m=r(9262),f=r(90055);const __=l.__;class h extends s.Component{constructor(){super(...arguments),o()(this,"onMarkerClick",(e=>{const{onMarkerClick:t}=this.props;this.setState({activeMarker:e}),t()})),o()(this,"onMapClick",(()=>{this.setState({activeMarker:null})})),o()(this,"clearCurrentMarker",(()=>{this.setState({activeMarker:null})})),o()(this,"updateActiveMarker",(e=>{const{points:t}=this.props,{activeMarker:r}=this.state,{index:n}=r.props,o=t.slice(0);(0,c.assign)(o[n],e),this.props.onSetPoints(o)})),o()(this,"deleteActiveMarker",(()=>{const{points:e}=this.props,{activeMarker:t}=this.state,{index:r}=t.props,n=e.slice(0);n.splice(r,1),this.props.onSetPoints(n),this.setState({activeMarker:null})})),o()(this,"sizeMap",(()=>{const{mapHeight:e}=this.props,{map:t}=this.state,r=this.mapRef.current;if(e)r.style.height=e+"px";else{const e=r.offsetWidth,t=window.location.search.indexOf("map-block-counter")>-1?window.innerHeight:.8*window.innerHeight,n=Math.min(e*(3/4),t);r.style.height=n+"px"}t.resize(),this.setBoundsByMarkers()})),o()(this,"updateZoom",(()=>{const{zoom:e}=this.props,{map:t}=this.state;t.setZoom(e),t.updateZoom(e)})),o()(this,"setBoundsByMarkers",(()=>{const{admin:e,onSetMapCenter:t,onSetZoom:r,points:n,zoom:o}=this.props,{map:i,activeMarker:a,mapboxgl:s,zoomControl:l,boundsSetProgrammatically:c}=this.state;if(!i)return;if(n.length&&e?i.dragPan.disable():i.dragPan.enable(),!n.length)return;if(a)return;const u=new s.LngLatBounds;if(n.forEach((e=>{u.extend([e.coordinates.longitude,e.coordinates.latitude])})),t(u.getCenter()),n.length>1){i.fitBounds(u,{padding:{top:80,bottom:80,left:40,right:40}}),this.setState({boundsSetProgrammatically:!0});try{i.removeControl(l)}catch(e){}}else{if(i.setCenter(u.getCenter()),c){const e=12;i.setZoom(e),r(e)}else i.setZoom(parseInt(o,10));i.addControl(l),this.setState({boundsSetProgrammatically:!1})}})),o()(this,"scriptsLoaded",(()=>{const{mapCenter:e,points:t}=this.props;this.setState({loaded:!0}),t.length,this.initMap(e)})),o()(this,"googlePoint2Mapbox",(e=>e.hasOwnProperty("lat")&&e.hasOwnProperty("lng")?e:{lat:e.latitude||0,lng:e.longitude||0})),this.state={map:null,fit_to_bounds:!1,loaded:!1,mapboxgl:null},this.mapRef=(0,s.createRef)(),this.debouncedSizeMap=(0,c.debounce)(this.sizeMap,250)}render(){const{points:e,admin:t,children:r,markerColor:n}=this.props,{map:o,activeMarker:l,mapboxgl:u}=this.state,{onMarkerClick:p,deleteActiveMarker:f,updateActiveMarker:h}=this,g=(0,c.get)(l,"props.point")||{},{title:b,caption:y}=g,k=s.Children.map(r,(e=>{if("AddPoint"===(0,c.get)(e,"props.tagName"))return e})),v=o&&u&&e.map(((e,t)=>(0,i.createElement)(m.Z,{mapRef:this.mapRef,key:t,point:e,index:t,map:o,mapboxgl:u,markerColor:n,onClick:p}))),w=u&&(0,i.createElement)(d.Z,{activeMarker:l,map:o,mapboxgl:u,unsetActiveMarker:()=>this.setState({activeMarker:null})},l&&t&&(0,i.createElement)(s.Fragment,null,(0,i.createElement)(a.TextControl,{label:__("Marker Title","jetpack"),value:b,onChange:e=>h({title:e})}),(0,i.createElement)(a.TextareaControl,{className:"wp-block-jetpack-map__marker-caption",label:__("Marker Caption","jetpack"),value:y,rows:"2",tag:"textarea",onChange:e=>h({caption:e})}),(0,i.createElement)(a.Button,{onClick:f,className:"wp-block-jetpack-map__delete-btn"},(0,i.createElement)(a.Dashicon,{icon:"trash",size:"15"})," ",__("Delete Marker","jetpack"))),l&&!t&&(0,i.createElement)(s.Fragment,null,(0,i.createElement)("h3",null,b),(0,i.createElement)("p",null,y)));return(0,i.createElement)(s.Fragment,null,(0,i.createElement)("div",{className:"wp-block-jetpack-map__gm-container",ref:this.mapRef},v),w,k)}componentDidMount(){const{apiKey:e}=this.props;e&&this.loadMapLibraries()}componentWillUnmount(){this.debouncedSizeMap.cancel(),window.removeEventListener("resize",this.debouncedSizeMap)}componentDidUpdate(e){const{admin:t,apiKey:r,children:n,points:o,mapStyle:i,mapDetails:a,scrollToZoom:s,showFullscreenButton:l}=this.props,{map:c,fullscreenControl:u}=this.state;r&&r.length>0&&r!==e.apiKey&&this.loadMapLibraries(),n!==e.children&&!1!==n&&this.clearCurrentMarker(),o!==e.points&&this.setBoundsByMarkers(),o.length!==e.points.length&&this.clearCurrentMarker(),i===e.mapStyle&&a===e.mapDetails||c.setStyle(this.getMapStyle()),s!==e.scrollToZoom&&(s?c.scrollZoom.enable():c.scrollZoom.disable()),l!==e.showFullscreenButton&&(l?(c.addControl(u),t&&u._fullscreenButton&&(u._fullscreenButton.disabled=!0)):c.removeControl(u))}getMapStyle(){const{mapStyle:e,mapDetails:t}=this.props;return(0,f.h)(e,t)}getMapType(){const{mapStyle:e}=this.props;switch(e){case"satellite":return"HYBRID";case"terrain":return"TERRAIN";default:return"ROADMAP"}}loadMapLibraries(){const{apiKey:e}=this.props,{currentWindow:t}=(0,u.bL)(this.mapRef.current),r={"mapbox-gl-js":()=>{(0,u.Dz)(t,"mapboxgl").then((t=>{t.accessToken=e,this.setState({mapboxgl:t},this.scriptsLoaded)}))}};(0,u.Pp)(p,r,this.mapRef.current)}initMap(e){const{mapboxgl:t}=this.state,{zoom:r,onMapLoaded:n,onError:o,scrollToZoom:i,showFullscreenButton:a,admin:s}=this.props;let l=null;try{l=new t.Map({container:this.mapRef.current,style:this.getMapStyle(),center:this.googlePoint2Mapbox(e),zoom:parseInt(r,10),pitchWithRotate:!1,attributionControl:!1,dragRotate:!1})}catch(e){return void o("mapbox_error",e.message)}i||l.scrollZoom.disable();const c=new t.FullscreenControl;l.on("error",(e=>{o("mapbox_error",e.error.message)}));const u=new t.NavigationControl({showCompass:!1,showZoom:!0});l.on("zoomend",(()=>{this.props.onSetZoom(l.getZoom())})),l.on("moveend",(()=>{const{onSetMapCenter:e,points:t}=this.props;t.length<1&&e(l.getCenter())})),l.getCanvas().addEventListener("click",this.onMapClick),this.setState({map:l,zoomControl:u,fullscreenControl:c},(()=>{this.debouncedSizeMap(),l.addControl(u),a&&(l.addControl(c),s&&c._fullscreenButton&&(c._fullscreenButton.disabled=!0)),this.mapRef.current.addEventListener("alignmentChanged",this.debouncedSizeMap),l.resize(),n(),this.setState({loaded:!0}),window.addEventListener("resize",this.debouncedSizeMap)}))}}h.defaultProps={points:[],mapStyle:"default",zoom:13,onSetZoom:()=>{},onSetMapCenter:()=>{},onMapLoaded:()=>{},onMarkerClick:()=>{},onError:()=>{},markerColor:"red",apiKey:null,mapCenter:{}};const g=h},82621:(e,t,r)=>{"use strict";r.d(t,{Z:()=>s});var n=r(90017),o=r.n(n),i=r(69307);class a extends i.Component{constructor(){super(...arguments),o()(this,"closeClick",(()=>{this.props.unsetActiveMarker()}))}componentDidMount(){const{mapboxgl:e}=this.props;this.el=document.createElement("DIV"),this.infowindow=new e.Popup({closeButton:!0,closeOnClick:!1,offset:{left:[0,0],top:[0,5],right:[0,0],bottom:[0,-40]}}),this.infowindow.setDOMContent(this.el),this.infowindow.on("close",this.closeClick)}componentDidUpdate(e){this.props.activeMarker!==e.activeMarker&&(this.props.activeMarker?this.openWindow():this.closeWindow())}render(){return this.el?(0,i.createPortal)(this.props.children,this.el):null}openWindow(){const{map:e,activeMarker:t}=this.props;this.infowindow.setLngLat(t.getPoint()).addTo(e)}closeWindow(){this.infowindow.remove()}}a.defaultProps={unsetActiveMarker:()=>{},activeMarker:null,map:null,mapboxgl:null};const s=a},9262:(e,t,r)=>{"use strict";r.d(t,{Z:()=>l});var n=r(90017),o=r.n(n),i=r(69307),a=r(85007);class s extends i.Component{constructor(){super(...arguments),o()(this,"handleClick",(()=>{const{onClick:e}=this.props;e(this)})),o()(this,"getPoint",(()=>{const{point:e}=this.props;return[e.coordinates.longitude,e.coordinates.latitude]}))}componentDidMount(){this.renderMarker()}componentWillUnmount(){this.marker&&this.marker.remove()}componentDidUpdate(){this.renderMarker()}renderMarker(){const{map:e,point:t,mapboxgl:r,markerColor:n,mapRef:o}=this.props,{handleClick:i}=this,s=[t.coordinates.longitude,t.coordinates.latitude],{currentDoc:l}=(0,a.bL)(o.current),c=this.marker?this.marker.getElement():l.createElement("div");this.marker?this.marker.setLngLat(s):(c.className="wp-block-jetpack-map-marker",this.marker=new r.Marker(c).setLngLat(s).setOffset([0,-19]).addTo(e),this.marker.getElement().addEventListener("click",i)),c.innerHTML='<?xml version="1.0" encoding="UTF-8"?><svg version="1.1" viewBox="0 0 32 38" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill-rule="evenodd"><path id="d" d="m16 38s16-11.308 16-22-7.1634-16-16-16-16 5.3076-16 16 16 22 16 22z" fill="'+n+'" mask="url(#c)"/></g></svg>'}render(){return null}}s.defaultProps={point:{},map:null,markerColor:"#000000",mapboxgl:null,onClick:()=>{}};const l=s},90055:(e,t,r)=>{"use strict";function n(e,t){return{default:{details:"mapbox://styles/automattic/cjolkhmez0qdd2ro82dwog1in",no_details:"mapbox://styles/automattic/cjolkci3905d82soef4zlmkdo"},black_and_white:{details:"mapbox://styles/automattic/cjolkixvv0ty42spgt2k4j434",no_details:"mapbox://styles/automattic/cjolkgc540tvj2spgzzoq37k4"},satellite:{details:"mapbox://styles/mapbox/satellite-streets-v10",no_details:"mapbox://styles/mapbox/satellite-v9"},terrain:{details:"mapbox://styles/automattic/cjolkf8p405fh2soet2rdt96b",no_details:"mapbox://styles/automattic/cjolke6fz12ys2rpbpvgl12ha"}}[e][t?"details":"no_details"]}r.d(t,{h:()=>n})},82695:(e,t,r)=>{"use strict";r.d(t,{X:()=>c});var n=r(51806),o=r(65736),i=r(45107),a=r(56932),s=r(65765),l=r(34140);const __=o.__,_x=o._x,c={name:"map",prefix:"jetpack",title:__("Map","jetpack"),icon:(0,n.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24",role:"img","aria-hidden":"true",focusable:"false"},(0,n.createElement)("path",{fill:"none",d:"M0 0h24v24H0V0z"}),(0,n.createElement)("path",{d:"M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM10 5.47l4 1.4v11.66l-4-1.4V5.47zm-5 .99l3-1.01v11.7l-3 1.16V6.46zm14 11.08l-3 1.01V6.86l3-1.16v11.84z"})),category:"embed",keywords:[_x("maps","block search term","jetpack"),_x("location","block search term","jetpack"),_x("navigation","block search term","jetpack")],description:__("Add an interactive map showing one or more locations.","jetpack"),attributes:{align:{type:"string"},points:{type:"array",default:[]},address:{type:"string",default:""},mapDetails:{type:"boolean",default:!0},zoom:{type:"integer",default:13},mapCenter:{type:"object",default:{longitude:-122.41941550000001,latitude:37.7749295}},markerColor:{type:"string",default:"red"},preview:{type:"boolean",default:!1},scrollToZoom:{type:"boolean",default:!1},mapHeight:{type:"integer"},showFullscreenButton:{type:"boolean",default:!0}},supports:{defaultStylePicker:!1,html:!1},styles:[{name:"default",label:__("Basic","jetpack"),preview:a,isDefault:!0},{name:"black_and_white",label:__("Black and white","jetpack"),preview:i},{name:"satellite",label:__("Satellite","jetpack"),preview:s},{name:"terrain",label:__("Terrain","jetpack"),preview:l}],validAlignments:["center","wide","full"],markerIcon:(0,n.createElement)("svg",{width:"14",height:"20",viewBox:"0 0 14 20",xmlns:"http://www.w3.org/2000/svg"},(0,n.createElement)("g",{id:"Page-1",fill:"none",fillRule:"evenodd"},(0,n.createElement)("g",{id:"outline-add_location-24px",transform:"translate(-5 -2)"},(0,n.createElement)("polygon",{id:"Shape",points:"0 0 24 0 24 24 0 24"}),(0,n.createElement)("path",{d:"M12,2 C8.14,2 5,5.14 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.14 15.86,2 12,2 Z M7,9 C7,6.24 9.24,4 12,4 C14.76,4 17,6.24 17,9 C17,11.88 14.12,16.19 12,18.88 C9.92,16.21 7,11.85 7,9 Z M13,6 L11,6 L11,8 L9,8 L9,10 L11,10 L11,12 L13,12 L13,10 L15,10 L15,8 L13,8 L13,6 Z",id:"Shape",fill:"#000",fillRule:"nonzero"})))),example:{attributes:{preview:!0}}}},85007:(e,t,r)=>{"use strict";function n(e){const t=e.ownerDocument;return{currentDoc:t,currentWindow:t.defaultView||t.parentWindow}}function o(e,t,r){const o=`${window.Jetpack_Block_Assets_Base_Url.url}editor-assets`,{currentDoc:i}=n(r),a=i.getElementsByTagName("head")[0];e.forEach((e=>{const[r,n]=e.file.split("/").pop().split(".");if("css"===n){if(i.getElementById(e.id))return;const t=i.createElement("link");t.id=e.id,t.rel="stylesheet",t.href=`${o}/${r}-${e.version}.${n}`,a.appendChild(t)}if("js"===n){const s=t[e.id]?t[e.id]:null;if(i.getElementById(e.id))return s();const l=i.createElement("script");l.id=e.id,l.type="text/javascript",l.src=`${o}/${r}-${e.version}.${n}`,l.onload=s,a.appendChild(l)}}))}function i(e,t){return new Promise((r=>{const n=()=>{e[t]?r(e[t]):e.requestAnimationFrame(n)};n()}))}r.d(t,{Dz:()=>i,Pp:()=>o,bL:()=>n})},81518:(e,t,r)=>{"use strict";r.d(t,{t:()=>a});var n=r(29512),o=r.n(n),i=r(92819);function a(e,t){const r=function(e,t){for(const r of new(o())(t).values()){if(-1===r.indexOf("is-style-"))continue;const t=r.substring(9),n=(0,i.find)(e,{name:t});if(n)return n}return(0,i.find)(e,"isDefault")}(e,t);return r?r.name:null}},44241:(e,t,r)=>{"use strict";r.d(t,{Z:()=>i});var n=r(69307),o=r(92819);const i=class{blockIterator(e,t){t.forEach((t=>{this.initializeFrontendReactBlocks(t.component,t.options,e)}))}initializeFrontendReactBlocks(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},r=arguments.length>2?arguments[2]:void 0;const{attributes:i,name:a,prefix:s}=t.settings,{selector:l}=t,c=`.wp-block-${(s&&s.length?`${s}/${a}`:a).replace("/","-")}`,u=r.querySelectorAll(c);for(const r of u){if("true"===r.getAttribute("data-jetpack-block-initialized"))continue;const a=this.extractAttributesFromContainer(r,i);(0,o.assign)(a,t.props);const s=this.extractChildrenFromContainer(r),c=(0,n.createElement)(e,a,s);(0,n.render)(c,l?r.querySelector(l):r),r.setAttribute("data-jetpack-block-initialized",!0)}}extractAttributesFromContainer(e,t){const r={};for(const n in t){const i=t[n],a="data-"+(0,o.kebabCase)(n);if(r[n]=e.getAttribute(a),"boolean"===i.type&&(r[n]="false"!==r[n]&&!!r[n]),"array"===i.type||"object"===i.type)try{r[n]=JSON.parse(r[n])}catch(e){r[n]=null}}return r}extractChildrenFromContainer(e){return[...e.childNodes].map((e=>{const t={};for(let r=0;r<e.attributes.length;r++){const n=e.attributes[r];t[n.nodeName]=n.nodeValue}return t.dangerouslySetInnerHTML={__html:e.innerHTML},(0,n.createElement)(e.tagName.toLowerCase(),t)}))}}},80425:(e,t,r)=>{"object"==typeof window&&window.Jetpack_Block_Assets_Base_Url&&window.Jetpack_Block_Assets_Base_Url.url&&(r.p=window.Jetpack_Block_Assets_Base_Url.url)},45107:(e,t,r)=>{"use strict";e.exports=r.p+"images/map-theme_black_and_white-b6ad81a7dd09d09fb34d.jpg"},56932:(e,t,r)=>{"use strict";e.exports=r.p+"images/map-theme_default-b53ccdf170e5ac873ff0.jpg"},65765:(e,t,r)=>{"use strict";e.exports=r.p+"images/map-theme_satellite-cc50c608e244f90d18dc.jpg"},34140:(e,t,r)=>{"use strict";e.exports=r.p+"images/map-theme_terrain-ac291441b3461820747d.jpg"},99196:e=>{"use strict";e.exports=window.React},91850:e=>{"use strict";e.exports=window.ReactDOM},92819:e=>{"use strict";e.exports=window.lodash},55609:e=>{"use strict";e.exports=window.wp.components},47701:e=>{"use strict";e.exports=window.wp.domReady},69307:e=>{"use strict";e.exports=window.wp.element},81975:e=>{"use strict";e.exports=window.wp.escapeHtml},65736:e=>{"use strict";e.exports=window.wp.i18n},29512:e=>{"use strict";e.exports=window.wp.tokenList},90017:e=>{e.exports=function(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e},e.exports.__esModule=!0,e.exports.default=e.exports},25877:e=>{e.exports=function(e){return e&&e.__esModule?e:{default:e}},e.exports.__esModule=!0,e.exports.default=e.exports},45388:e=>{"use strict";e.exports=JSON.parse('[{"id":"mapbox-gl-js","file":"node_modules/mapbox-gl/dist/mapbox-gl.js","version":"1.13.0"},{"id":"mapbox-gl-css","file":"node_modules/mapbox-gl/dist/mapbox-gl.css","version":"1.13.0"}]')}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var i=t[n]={exports:{}};return e[n](i,i.exports,r),i.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e;r.g.importScripts&&(e=r.g.location+"");var t=r.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var n=t.getElementsByTagName("script");n.length&&(e=n[n.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),r.p=e+"../"})(),(()=>{"use strict";r(80425)})(),(()=>{"use strict";var e=r(47701),t=r.n(e),n=r(81518),o=r(44241),i=r(93846),a=r(82695);t()((function(){(new o.Z).blockIterator(document,[{component:i.Z,options:{settings:{...a.X,attributes:{...a.X.attributes,mapStyle:(0,n.t)(a.X.styles,a.X.className),apiKey:{type:"string",default:""}}}}}])}))})()})();