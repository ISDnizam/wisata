/* ----------------------------------------------*/
/* B 00 - Body
/* ----------------------------------------------*/
body  {height: 100%; color:#666666; background:#f1f1f1   url('http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/');background-attachment:fixed; background-position: 50% -250px; background-repeat: repeat-x;; }
body.innerpage{background:#f1f1f1;}
body.frontpage{color:#666666; background:#f1f1f1   url('http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/') 70% 30% repeat-x;background-attachment:fixed; ; }

/* ----------------------------------------------*/
/* B 01 - Heading,links and titles
/* ----------------------------------------------*/
.contentheading {color:#454b51;}
.componentheading {color:#888;}
a,input.button {color:#55b345;}
a:hover {color:#24471e;}
a:active {color:#666666;}
h1 {color:#888;}
h2 {color:#454b51;}
h3 {color:#333333;}
h4 {color:#333333;}
h5 {color:#333333;}
h6 {color:#333333;}

/* ----------------------------------------------*/
/* B 02 - Titles
/* ----------------------------------------------*/
h1.pagetitle{}
.pagetitle, .pagetitle a {color:#888;}
.pagetitle span{}
.title {color:#454b51;}
.title a {color:#454b51;}
.title a:hover {color:#55b345;}
h4.title{color:#666;}

/* ----------------------------------------------*/
/* B 03 - Basecolor styles, used in JXTC Walls and 3rd party components
/* ----------------------------------------------*/
.basecolor_1 {color:#55b345;}
.basecolor_2 {color:#333333;}
.basecolor_2 a {color:#333333;}
.basecolor_3 {color:#f1f1f1;}
.basecolor_4 {color:#4a963d;}
.basecolor_5 {color:#55b345;}
.basecolor_6 {color:#e8a345;}
.basecolor_7 {color:#ffba26;}
.basecolor_8 {color:#161616;}

/* ----------------------------------------------*/
/* L 00 - Header,logo,menu,inset,message,breadcrumb
/* ----------------------------------------------*/
#headerwrap{background:url("../img/map-id.png") #357ebd right no-repeat; position:relative;  z-index: 3; }
#header{background: ; }
#logo a{height: 90px;width:600px; margin-bottom: -40px; position:relative;  z-index: 3; background:  url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/logos/webgis-hut-logo-6.png) no-repeat 0 0;; }
/* Resized Logo for Mobile / Responsive View */
@media(max-width:620px){
#logo a {height: 56px;width:203px;margin:0; background:  url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/logos/fitlogo-s1-sm.png) no-repeat 0 0;; }
}
#search input{-moz-box-shadow: -1px -1px 0px rgba(0,0,0,0.3), 1px 1px 0px rgba(255,255,255,0.075); -webkit-box-shadow: -1px -1px 0px rgba(0,0,0,0.3), 1px 1px 0px rgba(255,255,255,0.075); box-shadow: -1px -1px 0px rgba(0,0,0,0.3), 1px 1px 0px rgba(255,255,255,0.075);}
#headerwrap.sticky {}

/* ----------------------------------------------*/
/* L 01 - Region 1
/* ----------------------------------------------*/
#region1wrap{background:transparent ; }
#region1{background:transparent ; }
/* ----------------------------------------------*/
/* L 02 - Region 2
/* ----------------------------------------------*/

/* ----------------------------------------------*/
/* L 03 - Region 3
/* ----------------------------------------------*/
#region3wrap{background:#d6e4c8  url('http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/back-gr.jpg') repeat-x;background-attachment:fixed;; }
#region3wrapnoimg{background:#d6e4c8;}
#region3{padding:20px!important;top:40px;background:#f1f1f1  url('http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/') 50% 0 repeat-x; }

/* ----------------------------------------------*/
/* L 04 - Region 4
/* ----------------------------------------------*/
#region4wrap{background:transparent  url('http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/region2bkg-khut2.jpg') 30% no-repeat; background-attachment:fixed;; }
#region4{background:transparent ; }
/* ----------------------------------------------*/
/* L 05 - Region 5
/* ----------------------------------------------*/
#region5wrap{background:#eeeeee  url('http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/kemhut13.jpg') repeat-x;background-attachment:fixed;; }
#region5{background:transparent ; }
/* ----------------------------------------------*/
/* L 06 - Region 6
/* ----------------------------------------------*/
#region6wrap{background-color: #357ebd;}
#region6{background-color: #357ebd;}
/* ----------------------------------------------*/
/* L 07 - Region 7
/* ----------------------------------------------*/
#region7wrap{background:#eeeeee ; }
#region7{background:transparent ; }
/* ----------------------------------------------*/
/* L 08 - Region 8
/* ----------------------------------------------*/
#region8wrap{background:transparent ; }
#region8{background:#f5f5f5 ; }
/* ----------------------------------------------*/
/* L 09 - Region 9
/* ----------------------------------------------*/
#region9wrap{background:#141414 ; }
#region9{background:#171717 ; }
#region9 input.inputbox{background:#333!important;border:1px solid #333!important;}
#region9 .module h3 span {color: rgba(255,255,255,0.35) !important;}
#region9 .module h3 {border-bottom-color: rgba(255,255,255,0.2) !important;}
#region9 div.contactwrap, #region9 div.contactwrap a {color: rgba(255,255,255,0.35) !important;}

/* ----------------------------------------------*/
/* L 07 - Footerwrap
/* ----------------------------------------------*/
#footerwrap{background:#6aa4ec;color:#222;}
#footerpad{background:#6aa4ec;}

/* ----------------------------------------------*/
/* M 00 - XTC Menu
/* ----------------------------------------------*/
#menu {background: #285323; }
/* Top Level */
#header ul.menu > li > a{color:#cccccc; background: #285323;}
#header > ul.menu > li > a:hover,#header ul.menu > li.xtcHover > a {color:#fff;background-color: #4d4d4d!important;}
#header ul.menu > li.active > a {color:#ffffff;background-color: #364f36;}
/* Dropdown Level */
#header ul.menu li.parent > ul{background: #3e4247;}
#headerwrap.sticky #header ul.menu li.parent > ul {background: #3e4247;}
#header ul.menu li.parent > ul > li {}
#header ul.menu li.parent > ul > li > a {color:#f1f1f1;background: transparent;border-top:1px solid rgba(255,255,255,0.1);}
#header ul.menu li.parent > ul > li.active > a {color:;background: transparent;}
#header ul.menu li.parent > ul > li > a:hover {color:#fff;background: #454b53;}
#menuright1,#menuright2,#menuright1 a,#menuright2 a {color:#cccccc;}

/* ---------------------------------------------------------------------*/
/* M 01 - Main Menu Icons - Uncomment the code below to make icons visible
/* ---------------------------------------------------------------------*/
/*
.mmhome {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/home-off.png) no-repeat 12px 50%; padding-left:34px!important;}
.mmhome:hover {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/home-on.png) no-repeat 12px 50%;}
li.active .mmhome {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/home-on.png) no-repeat 12px 50%;}
.mmfeatures {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/features-off.png) no-repeat 12px 50%; padding-left:34px!important;}
.mmfeatures:hover {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/features-on.png) no-repeat 12px 50%;}
li.active .mmfeatures {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/features-on.png) no-repeat 12px 50%;}
.mmjcontent {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/content-off.png) no-repeat 12px 50%; padding-left:34px!important;}
.mmjcontent:hover, li.active .mmjcontent {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/content-on.png) no-repeat 12px 50%;}
.mmstyles {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/styles-off.png) no-repeat 12px 50%; padding-left:34px!important;}
.mmstyles:hover, li.active .mmstyles {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/styles-on.png) no-repeat 12px 50%;}
.mmlayout {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/layout-off.png) no-repeat 12px 50%; padding-left:34px!important;}
.mmlayout:hover, li.active .mmlayout {background: url(http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/layout-on.png) no-repeat 12px 50%;}
*/
/* ----------------------------------------------*/
/* M 01 - Main Menu Dropdown Styles
/* ----------------------------------------------*/
.drop1 {}
.drop2 {}
.drop3 {}
.drop4 {}
.drop5 {}
.drop6 {}
.drop7 {}
.drop8 {}
.drop9 {}

/* ----------------------------------------------*/
/* S 00 - Module Suffixes
/* ----------------------------------------------*/
.module{background: ;}
.module h3{background:  ; }
.module h3 span.first_word{color:#222222;}
.module h3 span.rest{color:#777!important;}
.rtitle h3 span {background-color:#333333;color:#fff!important; color: rgba(255,255,255,0.75)!important; text-shadow:-1px -1px 0px rgba(0,0,0,0.25);}
.underline h3 {border-bottom: 1px solid #333;background:none!important;}
.frame {border: 8px solid #333333!important;}
.box{background:#333333!important;color:#fff!important;}
.tabbed h3{border-bottom-color:#333333!important;background:none!important;}
.tabbed h3 span{background:#333333!important;	color:#fff!important; color: rgba(255,255,255,0.75)!important; text-shadow:-1px -1px 0px rgba(0,0,0,0.25);}
.stylebox{background:#55b345;color:#fff;}
.lightbox {background:#fff;}

/* ----------------------------------------------*/
/* C 00 - Content Overrides
/* ----------------------------------------------*/
/* Joomla Content */
.comwrap {background:#f7f7f7;border:5px solid #ffffff;outline:1px solid #f1f1f1;}
.category_img{border:1px solid #e1e2de;background:#eef0eb;}
.cat-item div.action span{border-right:1px solid #CCCCCC;}
.btn input,.btn button{ background:#660066;}
.btn { background:#f5f5f5; border-color:#ebebeb; color: #373737; }
.button, button {background:#333333;}
div.joomla div.item{border-bottom:1px dotted #ccc;} 
.wallframe {background:#d5d5d5;}
.imgframe,.article_date {background:#f1f1f1;}
h5.day {color:#f1f1f1;}
h5.month{color:#f1f1f1;}
.article_date_pad{color:#f1f1f1;background-color:#333333;}
div.contact.row-fluid h3 {color:#333;}
div.breadcrumbs {background:#f3f3f3;}
span.showHere {color:#55b345;}
a.pathway {color:#999999 !important;}
span.here {color:#999999 !important;}
.readmore a {color:#55b345 !important;}
.readmore a span {color:#333333;}
.readmore a:hover {background:#55b345; color:#f1f1f1; text-shadow: 1px 1px 0 rgba(0,0,0,0.3); box-shadow: 2px 2px 0 rgba(0,0,0,0.15);}
div.pagination span {color:#ccc;}
.pagination ul > li > a, .pagination ul > li > span {background-color:#aaaaaa;color:#ccc;}
.pagination ul > li > a {color:#f1f1f1;}	
.pagination ul > li > a:hover {color:#666;}
div.action{}
legend {color:#55b345 !important;}
dt.result-title, dt.result-title a {color:#55b345 !important; font-weight:normal;}
.search_menu_btn {color:#ebebeb;background:#666;}
.search_menu_btn:hover {color:#f1f1f1;background:#55b345;cursor:pointer;}
.items-more h3 {color:#55b345!important;}


/* READ MORE BUTTONS */
.rmore1,.rmore1 input {background: #141414;color:#f1f1f1;}
.dk {background: #141414;}
a.rmore1:hover i {}
a.rmore1 i {}
.rmore1:hover,.rmore1:hover input {background: #3f822f;color:#f1f1f1;}

/* Multi Colored Columns Joomla Content - K2 Content */
.bgcheck0,.bgcheck00,.bgcheck3,.bgcheck03{ background-color: #161616; color:#f1f1f1;}
.bgcheck1,.bgcheck2{background-color: #fff;}
.bgcheck0 a,.bgcheck0 .kmt-readon .kmt-readmore a,.bgcheck0 .kmt-readon .kmt-comment a,
.bgcheck3 a,.bgcheck3 .kmt-readon .kmt-readmore a,.bgcheck3 .kmt-readon .kmt-comment a,.bgcheck0 .basecolor_1,.bgcheck3 .basecolor_1,.bgcheck0 .kmt-readon i,.bgcheck3 .kmt-readon i{color:#fff!important;}

.bgcheck1 .basecolor_1,.bgcheck2 .basecolor_1,
.bgcheck1 a,.bgcheck1 .kmt-readon .kmt-readmore a,.bgcheck1 .kmt-readon .kmt-comment a,.bgcheck2 .basecolor_1,.bgcheck1 .basecolor_1,.bgcheck2 .kmt-readon i,.bgcheck1 .kmt-readon i.bgcheck2 a,.bgcheck2 .kmt-readon .kmt-readmore a,.bgcheck1 .kmt-readon .kmt-readmore a,.bgcheck2 .kmt-readon .kmt-comment a{color:#666666!important;}

/* ----------------------------------------------*/
/* C 01 - Typography
/* ----------------------------------------------*/
.numbered:after, .numbered-medium:after, .numbered-small:after {border-color:#f1f1f1;}
.bargraphv,.bargraphv a:hover{ background-color:#55b345!important;}
.circletag { background-color:#55b345!important;}
.circlebottom {border-top-color: #55b345!important;}
.cloud_tag1 {background-color:#333333!important;}
.bargraphv,.bargraphv a {background-color:#55b345!important;} 

/* ----------------------------------------------*/
/* H 01 - JXTC  Walls(Newspro News Module)
/* ----------------------------------------------*/

/* JXTC  Walls(Inset Slide) */
.slidetitle2 {color:#55b345;}
.slidetitle3, midarticlewrap4 p {color:#fff!important;}
.mawrap1 h2, .slidetext, .mawrap1 p {color:#f1f1f1 !important;}
/* .nesta {width:321px; height:76px;background: url(../images/backgrounds/nesta.png) no-repeat 0 0;margin-top:24px;}
.issadk {width:216px; height:67px;background: url(../images/backgrounds/issa.png) no-repeat 0 0;margin-top:24px;} */
.dark {color:#333 !important;}
p.lrg {color:#aaa;}
.drk {color:#333333;}
.slideintro {color:#333333;}
.introinfo    {margin-top:80px; }
.introinfo h1 {color:#55b345;line-height:83%;}
.introinfo h2 {color:#454b51;}
.introinfo p  {font-size:18px; color:#121212; max-width:95%}
.introinfo1 h1 {color:#55b345;line-height:83%;}
.introinfo1 h2 {color:#f1f1f1;line-height:83%;}
.introinfo1 p  {font-size:20px; color:#f1f1f1; max-width:70%}

/* JXTC  Walls(User1 CSS3 Cube) */
.articles .col-1 .newsfront {background-color:#4a963d !important;}
.articles .col-2 .newsfront {background-color:#55b345 !important;}
.articles .col-3 .newsfront {background-color:#e8a345 !important;}
.articles .col-4 .newsfront {background-color:#ffba26 !important;}

/* JXTC  Walls(User25 Featured News) */
.firstrow.firstcol .newswrap1,.lastrow.lastcol .newswrap1{ background-color: #161616; color:#f1f1f1;}
.firstrow.firstcol .newswrap2,.lastrow.lastcol .newswrap2{ background-color: #161616;background-image: url("http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/transdk.png");background-repeat: repeat; color:#f1f1f1;}
.firstrow.firstcol .newswrap1 h2,.lastrow.lastcol .newswrap1 h2 {color:#f1f1f1;}
.firstrow.lastcol .newswrap1,.lastrow.firstcol .newswrap1{background-color: #f1f1f1; background-image: url("http://webgis.dephut.go.id:8080/kemenhut/templates/fitlife/images/backgrounds/transdk.png");    background-repeat: repeat;}
.firstrow.lastcol .newswrap2,.lastrow.firstcol .newswrap2{background-color: #f1f1f1;}

/* ----------------------------------------------*/
/* H 02 - Custom HTML (User 19 - User22)
/* ----------------------------------------------*/
.bookingwraptoday h2 {color:#999;}
.planwrap {}
.pwtop {padding:12px; background:#222222; text-align:center;}
.pwtop p {font-size:20px;}
span.pwfirst {color:#f1f1f1;}
span.pwlast {color:#55b345;}
.pwmid {padding:12px; background:#f1f1f1; text-align:center;}
.pwmid p {color:#999; display:block; margin-bottom:12px; padding-bottom:12px; border-bottom:1px dotted #999;}
p.sm {font-size:12px; color:#333; border:none;}
.pwbot {padding:12px; background-color:#141414; text-align:center;}
.pwbot p {font-size:20px; color:#f1f1f1; }

/* ----------------------------------------------*/
/* H 03 - Kommento
/* ----------------------------------------------*/
.kmt-readmore span {color:#393939;}
.kmt-readmore a {color:#55b345 !important;border-right:1px solid #ccc;}
.kmt-readmore a:hover {color:#55b345 !important;}
.kmt-comment span {color:#393939;}
.kmt-comment a {color:#55b345 !important;border-right:1px solid #ccc;}
.kmt-comment a:hover {color:#55b345 !important;}
.kmt-hits span {color:#393939;}
.kmt-hits a {color:#55b345 !important;}
.kmt-hits a:hover {color:#55b345 !important;}
#section-kmt .input.button {background:#55b345 !important;color:#f1f1f1!important;	}
#section-kmt .kmt-btn-submit {background:#55b345 !important;color:#f1f1f1!important;}
div.kmt-content p {background:#f1f1f1;}
div.kmt-content p:after {border-color:transparent #f1f1f1;}

/* ----------------------------------------------*/
/* H 04 - K2
/* ----------------------------------------------*/
h2.k2itemTitle {color:#55b345}
div.itemExtraFields h3 {background:#55b345}
div.itemVideoBlock h3 {background:#55b345}
.k2leftcolumn {background:#e7e7e7;}
.itemImageBlock {border-color:#e7e7e7!important;}
.itemListCategory {}
/* ----------------------------------------------*/
/* H 05 - Appointment Book
/* ----------------------------------------------*/
#monthTableDiv, #timeTableDiv {background:#4a963d !important;}
/* ----------------------------------------------*/
/* T 01 MOBILE
/* ----------------------------------------------*/
.mobilebtn {}
@media(max-width:1050px){
.cubed .articles {background:#1c1c1c;}	
}
@media(max-width:800px){
body.frontpage  {background:#222 url(../images/backgrounds/bodybkg-mobile-s2.jpg) 50% 0 no-repeat !important; }
.introinfo p{color: #fff!important;}
}