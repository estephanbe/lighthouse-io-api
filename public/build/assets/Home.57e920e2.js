import{_ as g,A,u as p}from"./AppNavigation.f67a42fa.js";import{o as s,c as a,a as t,t as c,n as O,m as h,b as m,r as d,p as f,d as b,e as v,F as E,f as I,g as S,h as T,i as V,j as B,H as M}from"./app.6a3e21d0.js";import{_ as j,a as G}from"./google-play.c724899e.js";const F="/build/assets/button-bg-primary.1389adcf.svg",W="/build/assets/button-bg-secondary.85e8e0bf.svg";const X={props:["color","content"],emits:["button-clicked"]},Y={class:"button-background"},K={key:0,src:F,alt:""},z={key:1,src:W,alt:""};function q(e,o,n,l,u,i){return s(),a("button",{class:"main-button",onClick:o[0]||(o[0]=_=>e.$emit("button-clicked"))},[t("div",Y,[n.color==="primary"?(s(),a("img",K)):(s(),a("img",z))]),t("div",{class:O(["button-content",n.color==="primary"?"secondary-text":"primary-text"])},c(n.content),3)])}const $=g(X,[["render",q],["__scopeId","data-v-88c7dc62"]]),J="/build/assets/heroStrokes.1a5217d7.svg";const Q={mounted(){this.$refs.heroVideo.play()},computed:{...h(p,{content:"getContent"}),isIOS(){return/(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)},heroVideo(){return"https://assets.belight.tv/"+this.content.belightCommunityHero}},methods:{goToStore(){this.isIOS?window.open(this.content.appStoreURL,"_blank"):window.open(this.content.googlePlayURL,"_blank")}},components:{AppNavigation:A,Button:$}},L=e=>(f("data-v-46e51d31"),e=e(),b(),e),Z={class:"hero-container"},ee={class:"video-container row justify-center"},te=["src"],oe=L(()=>t("div",{class:"hero-overlay"},null,-1)),ne={class:"main-container hero-content-container"},se={class:"hero-text-container"},ie={class:"hero-title title"},ae={class:"subtitle hero-subtitle"},ce=L(()=>t("div",{class:"strokes-container"},[t("div",{class:"hero-strokes row"},[t("img",{src:J,alt:""})])],-1));function _e(e,o,n,l,u,i){const _=d("app-navigation"),r=d("Button");return s(),a("div",Z,[m(_,{style:{position:"absolute"}}),t("div",ee,[t("video",{loop:"",ref:"heroVideo",playsinline:"",class:"hero-video",autoplay:"",src:i.heroVideo,muted:"muted",alt:""},null,8,te),oe]),t("div",ne,[t("div",se,[t("div",ie,c(e.content.heroTitle),1),t("div",ae,c(e.content.heroSubtitle),1),m(r,{class:"hero-btn",color:"primary",content:e.content.downloadButton,onButtonClicked:o[0]||(o[0]=y=>i.goToStore())},null,8,["content"])])]),ce])}const re=g(Q,[["render",_e],["__scopeId","data-v-46e51d31"]]),R="/build/assets/comunityStroke.a876d3c8.svg",de="/build/assets/communityMockup-rtl.3cb74d13.png",le="/build/assets/communityMockup.cf81ed6a.png";const me={computed:{...h(p,{content:"getContent",lang:"currentLanguage"}),stroke(){return R}}},ge=e=>(f("data-v-7e85a4cf"),e=e(),b(),e),ue={class:"primary-bg community-ad-container"},pe={key:0,class:"community-mockup-phone",src:de,alt:""},he={key:1,class:"community-mockup-phone",src:le,alt:""},fe={class:"community-text row align-center"},be={class:"community-ad-title-content title secondary-text"},Se=ge(()=>t("img",{class:"community-end-stroke",src:R},null,-1));function ve(e,o,n,l,u,i){return s(),a("div",ue,[t("div",{class:"community-app-mockup row align-center justify-center",style:v("background-image: url("+i.stroke+")")},[e.lang==="ar"?(s(),a("img",pe)):(s(),a("img",he))],4),t("div",fe,[t("div",be,c(e.content.communitySlogan),1),Se])])}const ye=g(me,[["render",ve],["__scopeId","data-v-7e85a4cf"]]),Ee="/build/assets/section-image-listen.75382358.svg",Ie="/build/assets/section-image-watch.b4ef84a5.svg",Te="/build/assets/section-image-connect.5443248b.svg";const $e={props:["alignment","data"],methods:{getImage(){return"https://assets.belight.tv/"+this.data.image},getStroke(){switch(this.data.stroke){case"listen":return Ee;case"watch":return Te;case"connect":return Ie}},onImageLoad(){const e=document.getElementById("image-text-image-"+this.data.name),o=document.getElementById("image-stroke-"+this.data.name);e.style.height=o.offsetHeight}}},Oe={class:"main-container"},Le={class:"image-text-container"},Re={class:"image-container"},De=["alt","src"],Ne={class:"text-container"},Ue={class:"title image-text-title"},ke={class:"subtitle secondary-text"};function Ce(e,o,n,l,u,i){return s(),a("div",{class:O(["row justify-center",n.alignment==="left"?"image-text-container-left":"image-text-container-right"])},[t("div",Oe,[t("div",Le,[t("div",Re,[t("div",{class:"image-text-image",style:v("background-image: url("+i.getImage()+")")},[t("img",{class:"image-stroke",alt:n.data.name,src:i.getStroke()},null,8,De)],4)]),t("div",Ne,[t("div",Ue,c(n.data.name),1),t("div",ke,c(n.data.description),1)])])])],2)}const Pe=g($e,[["render",Ce],["__scopeId","data-v-f7547d57"]]);const He={computed:{...h(p,{content:"getContent"}),features(){return this.content.communityFeatures}},components:{ImageText:Pe}},xe={key:0,class:"community-features primary-bg"};function we(e,o,n,l,u,i){const _=d("image-text");return i.features.length>0?(s(),a("div",xe,[(s(!0),a(E,null,I(i.features,(r,y)=>(s(),a("div",{class:"features secondary-text",key:r.name},[m(_,{alignment:y%2===0?"left":"right",data:r},null,8,["alignment","data"])]))),128))])):S("",!0)}const Ae=g(He,[["render",we],["__scopeId","data-v-7afa073e"]]),Ve="/build/assets/media.8ec5793f.svg";const Be={props:["media"],data(){return{supportsTouch:"ontouchstart"in window||navigator.msMaxTouchPoints}},computed:{initialImage(){return document.body.offsetWidth<="1024"&this.supportsTouch?"linear-gradient(0deg, rgba(26, 26, 26, 0.2), rgba(26, 26, 26, 0.2)), url("+this.image+")":"linear-gradient(90deg, rgba(26,26,26,1) 0%, rgba(26,26,26,1) 98%, rgba(26,26,26,0) 100%)"},image(){return"https://assets.belight.tv/"+this.media.image}},methods:{hoverIn(){const e=document.getElementById("media-stroke-"+this.media.name);e.style.background="linear-gradient(0deg, rgba(26, 26, 26, 0.2), rgba(26, 26, 26, 0.2)), url("+this.image+")"},hoverOut(){const e=document.getElementById("media-stroke-"+this.media.name);e.style.background="linear-gradient(90deg, rgba(26,26,26,1) 0%, rgba(26,26,26,1) 98%, rgba(26,26,26,0) 100%)"}}},Me={class:"media-wrapper row justify-center"},je=["id"],Ge=["id","alt"],Fe={class:"highlight-text media-btn"};function We(e,o,n,l,u,i){return s(),a("div",Me,[t("div",{class:"media-container",id:"media-container-"+n.media.name,onMouseover:o[0]||(o[0]=(..._)=>i.hoverIn&&i.hoverIn(..._)),onMouseleave:o[1]||(o[1]=(..._)=>i.hoverOut&&i.hoverOut(..._))},[t("img",{id:"media-stroke-"+n.media.name,class:"media-stroke",style:v("background: "+i.initialImage),src:Ve,alt:n.media.name},null,12,Ge),t("button",Fe,c(n.media.name),1)],40,je)])}const Xe=g(Be,[["render",We],["__scopeId","data-v-e98270b0"]]);const Ye={computed:{...h(p,{content:"getContent"})},components:{MediaType:Xe}},Ke={class:"row primary-bg community-options justify-center"},ze={class:"main-container secondary-text"},qe={class:"options-title header"},Je={key:0,class:"media-types-container"};function Qe(e,o,n,l,u,i){const _=d("media-type");return s(),a("div",Ke,[t("div",ze,[t("div",qe,c(e.content.mediaTypesTitle),1),e.content.mediaTypesOptions.length>0?(s(),a("div",Je,[(s(!0),a(E,null,I(e.content.mediaTypesOptions,r=>(s(),T(_,{key:r.name,media:r},null,8,["media"]))),128))])):S("",!0)])])}const Ze=g(Ye,[["render",Qe],["__scopeId","data-v-82b9b337"]]),et="/build/assets/secondary-stroke.4f90f6f9.svg";const tt={},ot=e=>(f("data-v-08fcf2c7"),e=e(),b(),e),nt={class:"primary-bg separator-wrapper"},st=ot(()=>t("img",{src:et},null,-1)),it=[st];function at(e,o){return s(),a("div",nt,it)}const ct=g(tt,[["render",at],["__scopeId","data-v-08fcf2c7"]]),_t="/build/assets/foot-1.5d393941.svg",rt="/build/assets/foot-2.5aba1e85.svg",dt="/build/assets/foot-3.c29391ba.svg",lt="/build/assets/foot-4.83ea9a73.svg",mt="/build/assets/foot-5.6f74a56a.svg",gt="/build/assets/foot-6.e47ee81b.svg",ut="/build/assets/foot-7.e832d4c2.svg",pt="/build/assets/foot-8.95a460cd.svg";const ht={props:["container"],computed:{...h(p,{language:"getLanguage"})},mounted(){window.addEventListener("scroll",this.handleScroll)},methods:{handleScroll(){const e=document.getElementById("testimony-container").getBoundingClientRect();if(window.innerHeight-e.top>350&&e.top+500>0){const o=document.getElementsByClassName("foot-image");for(let n=1;n<o.length;n++)setTimeout(()=>{o[n].style.display="block"},300*n);window.removeEventListener("scroll",this.handleScroll)}}},watch:{language(e,o){if(e!==o){const l=document.getElementsByClassName("foot-image");for(var n=1;n<l.length;n++)l[n].style.display="none";window.addEventListener("scroll",this.handleScroll)}}}},ft={class:"main-container position-relative"},bt=V('<div class="feet-main-container" data-v-ea1c50f4><div class="feet-wrapper" data-v-ea1c50f4><img class="foot-image first" src="'+_t+'" data-v-ea1c50f4><img class="foot-image second" src="'+rt+'" data-v-ea1c50f4><img class="foot-image third" src="'+dt+'" data-v-ea1c50f4><img class="foot-image fourth" src="'+lt+'" data-v-ea1c50f4><img class="foot-image fifth" src="'+mt+'" data-v-ea1c50f4><img class="foot-image sixth" src="'+gt+'" data-v-ea1c50f4><img class="foot-image seventh" src="'+ut+'" data-v-ea1c50f4><img class="foot-image eighth" src="'+pt+'" data-v-ea1c50f4></div></div>',1),St=[bt];function vt(e,o,n,l,u,i){return s(),a("div",ft,St)}const yt=g(ht,[["render",vt],["__scopeId","data-v-ea1c50f4"]]),Et="/build/assets/testimonial-frame.567f13ad.svg";const It={computed:{...h(p,{content:"getContent"}),testimonyImage(){return"https://assets.belight.tv/"+this.content.testimonyImage}},components:{FootAnimation:yt}},Tt=e=>(f("data-v-2ef07a8f"),e=e(),b(),e),$t={class:"secondary-bg testimony-container main-container",id:"testimony-container"},Ot={class:"testimony-content"},Lt={class:"header primary-text testimony-header"},Rt={class:"subtitle highlight-text testimony-subtitle"},Dt={class:"testimony-user"},Nt={class:"user-image row justify-center"},Ut=Tt(()=>t("img",{class:"testimonial-frame",src:Et},null,-1)),kt={class:"user-text"},Ct={class:"user-content highlight-text subtitle"},Pt={class:"user-name header-3"},Ht={class:"user-location header-3"};function xt(e,o,n,l,u,i){const _=d("foot-animation");return s(),a("div",$t,[t("div",Ot,[t("div",Lt,c(e.content.testimonyTitle),1),t("div",Rt,c(e.content.testimonyDescription),1),m(_)]),t("div",Dt,[t("div",Nt,[t("div",{class:"testimonial-image",style:v("background-image: url("+i.testimonyImage+")")},null,4),Ut]),t("div",kt,[t("div",Ct,c(e.content.testimonyBody),1),t("div",Pt,c(e.content.testimonySignature),1),t("div",Ht,c(e.content.testimonyLocation),1)])])])}const wt=g(It,[["render",xt],["__scopeId","data-v-2ef07a8f"]]),At="/build/assets/ripped-page-top.630dd794.svg",Vt="/build/assets/ripped-page-bottom.69d1f6db.svg";const Bt={computed:{...h(p,{content:"getContent"}),isIOS(){return/(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)}},components:{Button:$},methods:{goToStore(){this.isIOS?window.open(this.content.appStoreURL,"_blank"):window.open(this.content.googlePlayURL,"_blank")}}},D=e=>(f("data-v-e244bc12"),e=e(),b(),e),Mt={class:"download-ad-container header secondary-text primary-bg"},jt=D(()=>t("img",{class:"ripped-page-top",src:At},null,-1)),Gt={class:"main-container download-ad-text"},Ft={class:"download-ad-content"},Wt={class:"button-container"},Xt=D(()=>t("img",{class:"ripped-page-bottom",src:Vt},null,-1));function Yt(e,o,n,l,u,i){const _=d("Button");return s(),a("div",Mt,[jt,t("div",Gt,[t("div",Ft,c(e.content.downloadText),1),t("div",Wt,[m(_,{color:"secondary",content:e.content.downloadButton,onButtonClicked:o[0]||(o[0]=r=>i.goToStore())},null,8,["content"])])]),Xt])}const Kt=g(Bt,[["render",Yt],["__scopeId","data-v-e244bc12"]]),zt="/build/assets/contact-us-frame.c1588596.svg";const qt={computed:{...h(p,{content:"getContent"}),isIOS(){return/(Mac|iPhone|iPod|iPad)/i.test(navigator.platform)},contactImage(){return"https://assets.belight.tv/"+this.content.contactUsImage}},components:{Button:$},methods:{goToStore(){this.isIOS?window.open(this.content.appStoreURL,"_blank"):window.open(this.content.googlePlayURL,"_blank")}}},Jt=e=>(f("data-v-96c223eb"),e=e(),b(),e),Qt={class:"contact-us-wrapper row justify-center"},Zt={class:"main-container contact-us-container"},eo={class:"contact-us-image row justify-center"},to=Jt(()=>t("img",{class:"contact-frame",src:zt},null,-1)),oo={class:"contact-us-content"},no={class:"header-4"},so={class:"contact-us-description subtitle"},io={class:"row justify-center contact-btn-container"};function ao(e,o,n,l,u,i){const _=d("Button");return s(),a("div",Qt,[t("div",Zt,[t("div",eo,[t("div",{class:"contact-image",style:v("background-image: url("+i.contactImage+")")},null,4),to]),t("div",oo,[t("div",no,c(e.content.contactUsTitle),1),t("div",so,c(e.content.contactUsDescription),1),t("div",io,[m(_,{color:"primary",content:e.content.downloadButton,onButtonClicked:o[0]||(o[0]=r=>i.goToStore())},null,8,["content"])])])])])}const co=g(qt,[["render",ao],["__scopeId","data-v-96c223eb"]]),_o="/build/assets/footer-bg.4e87eb74.svg",ro="/build/assets/footer-bg-rtl.eadf596b.svg";const lo={computed:{...h(p,{content:"getContent",language:"getLanguage"})},methods:{getImage(e){return"../../assets/images/"+e+".svg"},getBackground(){return this.language==="en"?_o:ro},goToPage(e){window.open(e,"_blank")}}},N=e=>(f("data-v-c9c2d4f5"),e=e(),b(),e),mo={class:"row justify-center footer-container"},go={class:"main-container footer-wrapper"},uo={class:"contact-info"},po={key:0,class:"contact-us"},ho={class:"footer-title highlight-text"},fo={class:"social-links-container"},bo={class:"footer-title highlight-text"},So={key:0,class:"social-links"},vo={class:"row social-icons"},yo=["onClick"],Eo={class:"download-section"},Io={class:"footer-title highlight-text"},To={class:"download-icons"},$o=["href"],Oo=N(()=>t("img",{src:j,alt:"app store"},null,-1)),Lo=[Oo],Ro=["href"],Do=N(()=>t("img",{src:G,alt:"google play"},null,-1)),No=[Do],Uo={class:"highlight-text footer-subtitle copyrights"};function ko(e,o,n,l,u,i){const _=d("font-awesome-icon");return s(),a("div",{class:"footer-main-wrapper",style:v("background-image: url("+i.getBackground()+")")},[t("div",mo,[t("div",go,[t("div",uo,[e.content.contactInfo?(s(),a("div",po,[t("div",ho,c(e.content.contactUs),1),(s(!0),a(E,null,I(e.content.contactInfo,r=>(s(),a("div",{class:"contact-line footer-subtitle highlight-text",key:r.id},[t("div",null,c(r.address),1),t("div",null,c(r.value),1)]))),128))])):S("",!0),t("div",fo,[t("div",bo,c(e.content.socialTitle),1),e.content.socialContent?(s(),a("div",So,[t("div",vo,[(s(!0),a(E,null,I(e.content.socialContent,r=>(s(),a("div",{class:"social-icon footer-subtitle highlight-text",key:r.url},[t("div",{onClick:y=>i.goToPage(r.url)},[m(_,{class:"social-icon-icon",icon:r.icon},null,8,["icon"])],8,yo)]))),128))])])):S("",!0)])]),t("div",Eo,[t("div",Io,c(e.content.footerDownload),1),t("div",To,[t("a",{href:e.content.appStoreURL,target:"_blank"},Lo,8,$o),t("a",{href:e.content.googlePlayURL,target:"_blank"},No,8,Ro)])])])]),t("div",Uo,c(e.content.copyrights),1)],4)}const Co=g(lo,[["render",ko],["__scopeId","data-v-c9c2d4f5"]]),Po={name:"App",props:["lang"],computed:{...h(p,{language:"getLanguage",content:"getContent"})},methods:{...B(p,["fetchContent"]),updateLanguage(){const e=document.getElementById("app");this.lang==="ar"?(e.className="rtl",e.setAttribute("dir","rtl")):(e.removeAttribute("dir"),e.className="")}},created(){this.fetchContent(this.lang),this.updateLanguage()},components:{Hero:re,CommunityAd:ye,CommunityFeatures:Ae,MediaTypes:Ze,Seperator:ct,Testimony:wt,DownloadAd:Kt,ContactUs:co,Footer:Co,Head:M}};function Ho(e,o,n,l,u,i){const _=d("Head"),r=d("hero"),y=d("community-ad"),U=d("community-features"),k=d("media-types"),C=d("seperator"),P=d("testimony"),H=d("download-ad"),x=d("contact-us"),w=d("Footer");return s(),a(E,null,[m(_,{title:"Belight Community"}),m(r),m(y),e.content&&e.content.communityFeatures?(s(),T(U,{key:0})):S("",!0),e.content&&e.content.mediaTypesOptions?(s(),T(k,{key:1})):S("",!0),m(C),m(P),m(H),m(x),m(w)],64)}const Vo=g(Po,[["render",Ho]]);export{Vo as default};