<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <title>FlexyCard HTML5 Responsive vCard Template - FlexyCodes Themes</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>
    <!-- CSS | bootstrap -->
    <!-- Credits: http://getbootstrap.com/ -->
    <link  rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/bootstrap.min.css" />
    <!-- CSS | font-awesome -->
    <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/font-awesome.min.css" />
    <!-- CSS | animate -->
    <!-- Credits: http://daneden.github.io/animate./resume/themes/resume/Portal/css/ -->
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/animate.min.css" />
    <!-- CSS | Normalize -->
    <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/jquery.mCustomScrollbar.css" />
    <!-- CSS | Colors -->
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/colors/DarkBlue.css" id="colors-style" />
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/switcher.css" />
    <!-- CSS | Style -->
    <!-- Credits: http://themeforest.net/user/FlexyCodes -->
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/main.css" />
    <!-- CSS | prettyPhoto -->
    <!-- Credits: http://www.no-margin-for-errors.com/ -->
    <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/prettyPhoto.css"/> 
	<!-- CSS | Google Fonts -->
    <!-- <link href='http://fonts.useso.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> -->
    <link href='/resume/themes/resume/Portal/css/linkcss.css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/resume/themes/resume/Portal/images/favicon/favicon.ico">
    <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="/resume/themes/resume/Portal/css/icons/font-awesome-ie7.min.css"/>
    <![endif]-->
    
    <!-- style 1
    <style>
        @media only screen and (max-width : 991px){
            .resp-vtabs .resp-tabs-container {
                margin-left: 13px;
            }
        }
        @media only screen and (min-width : 800px) and (max-width : 991px){
            .resp-vtabs .resp-tabs-container {
                margin-left: 13px;
                width:89%;
            }
        }       
    </style> -->
    <!-- style 2
    <style>
        @media only screen and (max-width : 1200px){
            .resp-vtabs ul.resp-tabs-list { margin-left: 0 !important; }
        }
        @media only screen and (max-width : 991px){
            .resp-vtabs .resp-tabs-container { margin-left: 13px; }
        }
        @media only screen and (min-width : 800px) and (max-width : 991px){
            .resp-vtabs .resp-tabs-container { width:89%; }
        }
        @media only screen and (max-width : 800px){
            .widget-profil { float: none !important; }
            .resp-vtabs .resp-tabs-container { width:100%; }
        }
        .widget-profil { float: left; }
        .resp-vtabs ul.resp-tabs-list { margin-left: 12px; }
    </style> -->
    <!-- style 3 -->
    <style>
        @media only screen and (max-width : 991px){
            .resp-vtabs .resp-tabs-container {
                margin-left: 0px !important;
            }
            .resp-vtabs ul.resp-tabs-list {
                width: 10%;
                margin-right: 2px !important;
            }
        }
        @media only screen and (max-width : 800px){
            .widget-profil { float: none !important;}
        }
        .widget-profil {float: left;}
        .resp-vtabs ul.resp-tabs-list {float: right;}
    </style>
    <!-- style 4
    <style>
        @media only screen and (max-width : 991px){
            .resp-vtabs .resp-tabs-container { margin-left: 0px !important; }
            .resp-vtabs ul.resp-tabs-list {
                width: 10%;
                margin-right: 2px !important;
            }
        }
        @media only screen and (max-width : 800px){
            .widget-profil { float: none !important; }
        }
        .widget-profil { float: right; }
        .resp-vtabs ul.resp-tabs-list { float: right; margin-right:12px; }
        .resp-vtabs .resp-tabs-container { margin-left: 0px !important;}   
    </style> -->
</head>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Laoding page -->
<div id="preloader">
    <div id="spinner"></div>
</div>
<!-- .slideshow -->
<ul class="cb-slideshow" id="cb_slideshow" style="display:none">
    <li><span>Image 01</span><div></div></li>
    <li><span>Image 02</span><div></div></li>
    <li><span>Image 03</span><div></div></li>
    <li><span>Image 04</span><div></div></li>
    <li><span>Image 05</span><div></div></li>
    <li><span>Image 06</span><div></div></li>
</ul> 
<!-- /.slideshow --> 
<!-- .wrapper --> 
<div class="wrapper">
    <!--- .Content --> 
    <section class="tab-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 widget-profil">
                            <div class="row">
                                <!-- Profile Image -->
                                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">
                                    <div class="image-holder one" id="pic_prof_1" style="display:block">
                                        <img class="head-image up circle" src="/resume/themes/resume/Portal/images/img/up.png" width="150" height="150" alt="" />
                                        <img class="head-image up-left circle" src="/resume/themes/resume/Portal/images/img/upleft.png" width="150" height="150" alt="" />
                                        <img class="head-image left circle" src="/resume/themes/resume/Portal/images/img/left.png" width="150" height="150" alt="" />
                                        <img class="head-image down-left circle" src="/resume/themes/resume/Portal/images/img/downleft.png" width="150" height="150" alt="" />
                                        <img class="head-image down circle" src="/resume/themes/resume/Portal/images/img/down.png" width="150" height="150" alt="" />
                                        <img class="head-image down-right circle" src="/resume/themes/resume/Portal/images/img/downright.png" width="150" height="150" alt="" />
                                        <img class="head-image right circle" src="/resume/themes/resume/Portal/images/img/right.png" width="150" height="150" alt="" />
                                        <img class="head-image up-right circle" src="/resume/themes/resume/Portal/images/img/upright.png" width="150" height="150" alt="" />
                                        <img class="head-image front circle" src="/resume/themes/resume/Portal/images/img/front.png" width="150" height="150" alt="" />
                                    </div>
                                    <!-- style for simple image profile -->		
                               		<div class="circle-img" id="pic_prof_2" style="display:none"></div>
                                </div>
                                <!-- End Profile Image -->
                                <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
                                    <!-- Profile info -->
                                    <div id="profile_info">
                                        <h1 id="name" class="transition-02">杨东升</h1>
                                        <h4 class="line">WEB &amp; PHP工程师</h4>
                                        <h6><span class="fa fa-map-marker"></span> 目前居所：广东省广州市增城区</h6>
                                    </div>
                                    <!-- End Profile info -->
                                    <!-- Profile Description -->
                                    <div id="profile_desc">
                                        
                                        <p>
                                            作品列表&nbsp;(●'◡'●)
                                        </p>
                                        <p>
                                        	<i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;<a href="http://www.lechezai.com/" target="_blank" style="color: #839CCF;">乐车仔汽车购物商城</a>
                                        </p>
                                        <p>
                                            <i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;<a href="http://library.hualixy.com/" target="_blank" style="color: #839CCF;">华立学院图书馆</a>
                                        </p>
                                        <p>
                                            <i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;<a href="http://www.buyteer.com/leling/" target="_blank" style="color: #839CCF;">老年人大学网站</a>
                                        </p>
                                        <p>
                                            <i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;<a href="http://www.buyteer.com/walle/" target="_blank" style="color: #839CCF;">个人账单小系统</a>
                                        </p>
                                        <p>
                                            <i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;<a href="http://www.buyteer.com/immigration/" target="_blank" style="color: #839CCF;">美国移民网站</a>
                                        </p>
                                    </div>
                                    <div id="profile_social">
                                        <h6>生活，也是一种享受！</h6>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- End Profile Description -->
                                    <!-- Name -->
                                    <!-- <div id="profile_social">
                                        <h6>常用社交网络</h6>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-foursquare"></i></a>
                                        <div class="clear"></div>
                                    </div> -->
                                    <!-- End Name -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">
                            <!-- verticalTab menu -->
                            <div id="verticalTab">
                                <!-- resp-tabs-list -->
                                <ul class="resp-tabs-list">
    <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile">			
        <span class="tite-list">profile</span>
        <i class="fa fa-user icon_menu icon_menu_active"></i>
    </li>

    <li class="tabs-resume hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="resume"> 
        <span class="tite-list">resume</span>
        <i class="fa fa-tasks icon_menu"></i>
    </li>

    <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="portfolio"> 
        <span class="tite-list">portfolio</span>
        <i class="fa fa-briefcase icon_menu"></i>
    </li>

    <li class="tabs-blog hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="blog">
        <span class="tite-list">blog</span>
        <i class="fa fa-bullhorn icon_menu"></i>
    </li>

    <li class="tabs-contact hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="contact" style="margin-bottom: 48px !important;"> 
        <span class="tite-list">contact</span>
        <i class="fa fa-envelope icon_menu"></i> 
    </li>

    <a href="#" id="print"><i class="fa fa-print icon_print"></i> </a>
    <a href="#" id="downlowd"><i class="fa fa-download icon_print"></i> </a>
</ul>
                                <!-- /resp-tabs-list -->
                                
                                <!-- resp-tabs-container -->
                                <div class="resp-tabs-container">
    <!-- profile -->
    <div id="profile" class="content_2">
        <!-- .title -->
        <h1 class="h-bloc">Profile - 小白宝宝</h1>
        <div class="row top-p">
            <div class="col-md-6 profile-l">
                <!--About me-->
                <div class="title_content">
                    <div class="text_content">杨东升</div>
                    <div class="clear"></div>
                </div>
        		<ul class="about">
                    <li>
                        <i class="glyphicon glyphicon-user"></i>
                        <label>姓名</label>
                        <span class="value">杨东升</span>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-calendar"></i>
                        <label>生日</label>
                        <span class="value">October 11, 1994</span>
                        <div class="clear"></div>
                    </li>
                    <li> 
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <label>籍贯</label>
                        <span class="value">广东阳春</span>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-envelope"></i>
                        <label>Email</label>
                        <span class="value">654753115@.com</span>
                        <div class="clear"></div>
                    </li>

                    <li>
                        <i class="glyphicon glyphicon-phone"></i>
                        <label>Phone</label>
                        <span class="value">(+86) 13650962253</span>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-globe"></i>
                        <label>Website</label>
                        <span class="value"><a href="http://www.yangdongshenge.cn/resume/" target="_blank">www.yangdongshenge.cn/resume/</a></span>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-globe"></i>
                        <label>github</label>
                        <span class="value"><a href="https://github.com/elinxer/" target="_blank">https://github.com/elinxer/</a></span>
                        <div class="clear"></div>
                    </li>
                </ul>
                <p style="margin-bottom:20px">
                    <i class="fa fa-quote-left"></i>       
                    &nbsp;&nbsp;生活,也是一种享受！活着为的不仅仅是开心，我活着更多是为了了解社会的群体生活和结构，试图去解析这其中的缘由。
                    当我们在生活艰难之时，我们为了生存下去，当能充分发挥自身潜能去创造美好生活，然而当我们身处美好生活中的时候，我们如何生存下去？
                    当世界都是美好，那新的美好来自何处？
                </p>
                <p style="float: right;">
                    ————&nbsp;&nbsp;elinx&nbsp;&nbsp;
                </p>
            </div>
            <!-- End left-wrap -->
            <div class="col-md-6 profile-r">
                <div class="cycle-slideshow">
                    <img src="/resume/themes/resume/Portal/images/img-profile/about_1.jpg" alt="" />
                    <img src="/resume/themes/resume/Portal/images/img-profile/about_2.png" alt="" />
                    <img src="/resume/themes/resume/Portal/images/img-profile/about_3.png" alt="" />
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- <div class="row" id="services">
    		<div class="col-md-12">
                <div class="title_content">
                    <div class="text_content">My Services 1</div>
                    <div class="clear"></div>
                </div>
                <div class="col-md-4 pack-service">
                    <div class="service">
                        <div class="service-icon"><i class="fa fa-tag"></i></div>
                        <div class="service-detail">
                            <h6>Making Money</h6>
                            <p>Fusce quis interdum ipsum.Suspendi suscipit vehicula sapienid mattis. Lorem ipsum amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pack-service">
                    <div class="service">
                        <div class="service-icon"><i class="fa fa-cogs"></i></div>
                        <div class="service-detail">
                            <h6>Easy to Customize</h6>
                            <p>Fusce quis interdum ipsum.Suspendi suscipit vehicula sapienid mattis. Lorem ipsum amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pack-service">
                    <div class="service">
                        <div class="service-icon"><i class="fa fa-arrows-alt"></i></div>
                        <div class="service-detail">
                            <h6>Moving Let Us Help</h6>
                            <p>Fusce quis interdum ipsum.Suspendi suscipit vehicula sapienid mattis. Lorem ipsum amet consectetur.</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div> -->
        <!-- End Services -->
        <div class="clear"></div>
        <!-- <div class="border-list"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="bottom-p">
                    <div class="title_content">
                        <div class="text_content">My Services 2</div>
                        <div class="clear"></div>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapse_tabs">
                                        Making Money
                                        <i class="glyphicon glyphicon-chevron-up" style="float: right;font-size: 13px;"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapse_tabs">
                                        Easy to Customize
                                        <i class="glyphicon glyphicon-chevron-down" style="float: right;font-size: 13px;"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapse_tabs">
                                        Moving Let Us Help
                                        <i class="glyphicon glyphicon-chevron-down" style="float: right;font-size: 13px;"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="clear"></div>
    </div>
    <!-- End .profile -->
    <!-- .resume -->
    <div id="resume" class="content_2">
    <!-- .title -->
    <h1 class="h-bloc">Resume - Personal Info</h1> 
    <div class="row">
       <!-- .resume-right -->
        <div class="col-md-6">
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">Web开发技能</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <div class="skills">
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="70%">
                    <div class="skillbar-title"><span>PHP</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">70%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="50%">
                    <div class="skillbar-title"><span>Javascript</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">50%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="65%">
                    <div class="skillbar-title"><span>Mysql</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">65%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="65%">
                    <div class="skillbar-title"><span>Linux</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">65%</div>
                </div>
                <!-- /.skillbar -->
            </div>
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">阶段技能</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <div class="skills">
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="75%">
                    <div class="skillbar-title"><span>git/svn版本控制</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">75%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="75%">
                    <div class="skillbar-title"><span>ThinkPHP</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">75%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="60%">
                    <div class="skillbar-title"><span>API开发</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">60%</div>
                </div>
                <!-- /.skillbar -->
                
                 <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="55%">
                    <div class="skillbar-title"><span>Java</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">55%</div>
                </div>
                <!-- /.skillbar --> 
            </div>
            
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">辅助技能</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <div class="skills">       
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="85%">
                    <div class="skillbar-title"><span>MS Excel</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">85%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="95%">
                    <div class="skillbar-title"><span>MS Word</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">95%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="60%">
                    <div class="skillbar-title"><span>Powerpoint</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">60%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="40%">
                    <div class="skillbar-title"><span>SharePoint</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">40%</div>
                </div>
                <!-- /.skillbar -->   
    		</div>
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">生活爱好</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <div class="skills">
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="99%">
                    <div class="skillbar-title"><span>喝茶</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">99%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="65%">
                    <div class="skillbar-title"><span>闲余运动</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">65%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="75%">
                    <div class="skillbar-title"><span>文字阅读</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">75%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="70%">
                    <div class="skillbar-title"><span>自由旅行</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">70%</div>
                </div>
                <!-- /.skillbar -->
            </div>
            
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">语言能力</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <div class="skills">
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="60%">
                    <div class="skillbar-title"><span>English</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">60%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="80%">
                    <div class="skillbar-title"><span>普通话</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">80%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <!-- <div class="skillbar clearfix " data-percent="50%">
                    <div class="skillbar-title"><span>Spanish</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">50%</div>
                </div> -->
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <!-- <div class="skillbar clearfix " data-percent="60%">
                    <div class="skillbar-title"><span>Swiss</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">60%</div>
                </div> -->
                <!-- /.skillbar -->
            </div>
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">我的简历</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <!-- .download_resume -->
            <a class="download" style="margin:0;float: left;" href="#">
                <span data-hover=" 下载简历"><i class="glyphicon glyphicon-download-alt"></i> 下载简历</span>
            </a>
            <!-- /.download_resume -->
        </div>
        <!-- /.resume-right -->
        <!-- .resume-left -->
        <div class="col-md-6 resume-left">    
            <!-- .title_content -->
            <div class="title_content" style="margin-bottom:5px">
                <div class="text_content">工作经历</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <!-- .attributes -->
            <ul class="attributes">
                <li class="first">
                    <h5>PHP 开发者 <span class="duration"><i class="fa fa-calendar color"></i> 2015 - 2016</span></h5>
                    <h6><span class="fa fa-briefcase"></span>&nbsp;&nbsp;连奖网络科技有限公司</h6>
                    <p>负责开发公司自主品牌商城商品管理模块功能。负责接口API架设以及商品分类、商品管理、商品属性、商品详情、购物车等模块功能开发，整理API接口并形成接口文档。</p>
                </li>
                <li>
                    <h5>企业型网站开发负责人 <span class="duration"><i class="fa fa-calendar color"></i> 2013 - 2014</span></h5>
                    <h6><span class="fa fa-briefcase"></span>&nbsp;&nbsp;华立学院信息中心</h6>
                    <p>负责企业网站整理编档，进行逻辑分析，项目立项，建库建档并进行相关站点开发。后期负责与客户交流，整理改善客户需求，并进行上线测试直至交付。</p>
                </li>

            </ul>
            <!-- /.attributes -->
            <br>
            <!-- .title_content -->
            <div class="title_content">
                <div class="text_content">教育</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            
            <!-- .attributes -->
            <ul class="attributes">
                <li class="first">
                    <h5>工程学士 <span class="duration"><i class="fa fa-calendar color"></i> 2013 - 2017</span></h5>
                    <h6><span class="fa fa-book"></span> 广东工业大学华立学院</h6>
                    <p>在校期间学习基础编程语言知识，从C语言开始逐步深入学习了数据结构、算法、离散数学、汇编基础、Java基础、Jsp网页建设等 <!-- <a href="http://www.hualixy.com" target="_blank">华立官网</a> --></p>
                </li>
                <!-- <li>
                    <h5>Bachelor of Engineering <span class="duration"><i class="fa fa-calendar color"></i> 2010 - 2011</span></h5>
                    <h6><span class="fa fa-book"></span> Name of University</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                </li> -->
            </ul>
            <!-- /.attributes -->
            <br>
            <!-- .title_content -->
            <div class="title_content">
                <div class="text_content">项目作品</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <!-- .attributes -->
            <ul class="attributes">
                <li class="first">
                    <h5>乐车仔汽车购物商城<span class="duration"><i class="fa fa-calendar color"></i> 2015 - 2016</span></h5>
                    <h6><span class="fa fa-trophy"></span> 广州市连奖网络科技有限公司</h6>
                    <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                </li>
                <li>
                    <h5>华立学院图书馆<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>华立学院图书馆</h6>
                    <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                </li>
                <li>
                    <h5>美国移民网站<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>华立学院信息中心</h6>
                    <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                </li>
                <li>
                    <h5>老年人大学网站<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>华立学院信息中心</h6>
                    <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                </li>
                <li>
                    <h5>元通轮胎公司官网<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>walle</h6>
                    <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                </li>
                <li>
                    <h5>个人账单小系统<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>walle</h6>
                    <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                </li>
            </ul>
            <!-- /.attributes -->
            <br>  
        </div>
        <!-- /.resume-left -->
    </div>
    <div style="clear: both"></div>  
    <!-- client reference -->
    <div class="row">
        <div class="col-md-12">   
            <div class="reference clearfix"> 
                <!-- .title_content -->
                <div class="title_content" style="margin-bottom:5px">
                    <div class="text_content">Client reference</div>
                    <div class="clear"></div>
                </div>
                <!-- /.title_content -->
                <ul>
                    <li class="clearfix">
                        <img src="http://placehold.it/100x100" class="img_reference" width="100" height="100" alt="">
                        <p>“Many desktop publishing packages and web page editors now use Lorem Ipsum as their default will model text, and a search for 'lorem ipsum' hope is uncover many web sites still”</p>
                        <span>John Doe, UX Designer</span>
                    </li>
                    <li class="clearfix">
                        <img src="http://placehold.it/100x100" class="img_reference" width="100" height="100" alt="">
                        <p>“very nice colleague she always helped me out if i didnt know something editors now use Lorem Ipsum as their default”</p>
                        <span>Leia Calvi, UX Designer</span>
                    </li>
                    <li class="clearfix">
                        <img src="http://placehold.it/100x100" class="img_reference" width="100" height="100" alt="">
                        <p>“old colleague and now close friend, she is really sweet and helpfull packages and web page editors now use Lorem Ipsum as their default will model text”</p>
                        <span>Maria Callas, UX Designer</span>
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear: both"></div>   
    </div>
</div>
                                <!-- End .resume -->
                                <!-- .portfolio -->
                                <div id="portfolio" class="content_2">
    <!-- .title -->
    <h1 class="h-bloc">Portfolio - 这是小二的茶水了</h1>
    <!-- .container-portfolio -->
    <div class="container-portfolio">
        <!-- #filters -->
        <ul id="filters" class="clearfix">
            <li><span class="filter active" data-filter="catWeb catGraphic catMotion logo">所有</span></li>
            <li><span class="filter" data-filter="catWeb">作品截图</span></li>
            <li><span class="filter" data-filter="catGraphic">私密照</span></li>
            <li><span class="filter" data-filter="catMotion">Motion Graphic</span></li>
            <li><span class="filter" data-filter="logo">Logo</span></li>
        </ul>
        <!-- /#filters -->
        <!-- #portfoliolist -->
        <div id="portfoliolist">
            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">	
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="/resume/themes/resume/Portal/images/portfolio/1.jpg" rel="portfolio" title="Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus.consectetur adipiscingVivamus sit amet">
                        <img src="/resume/themes/resume/Portal/images/portfolio/1.jpg" alt="Visual Infography" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>		
            <!-- /.portfolio -->
            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">	
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="http://www.youtube.com/watch?v=c9MnSeYYtYY" rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/2.jpg" alt="Visual Infography" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>		
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">			
                    <a href="/resume/themes/resume/Portal/images/portfolio/3.jpg" rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/3.jpg" alt="Sonor's Design" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>				
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catMotion" data-cat="catMotion">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">			
                    <a href="/resume/themes/resume/Portal/images/portfolio/4.jpg" rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/4.jpg" alt="Typography Company" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Motion Graphic</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">
                    <a href="/resume/themes/resume/Portal/images/portfolio/5.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/5.jpg" alt="Weatherette" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catMotion" data-cat="catMotion">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="/resume/themes/resume/Portal/images/portfolio/6.jpg" rel="portfolio">				
                        <img src="/resume/themes/resume/Portal/images/portfolio/6.jpg" alt="BMF" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Motion Graphic</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->
            <!-- .portfolio -->
            <div class="portfolio catGraphic" data-cat="catGraphic">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="/resume/themes/resume/Portal/images/portfolio/7.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">				
                        <img src="/resume/themes/resume/Portal/images/portfolio/7.jpg" alt="Techlion" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Graphic Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="/resume/themes/resume/Portal/images/portfolio/8.jpg" rel="portfolio" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien.">
                        <img src="/resume/themes/resume/Portal/images/portfolio/8.jpg" alt="KittyPic" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">			
                    <a href="/resume/themes/resume/Portal/images/portfolio/9.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/9.jpg" alt="Graph Plotting" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catGraphic" data-cat="catGraphic">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">	
                    <a href="/resume/themes/resume/Portal/images/portfolio/10.jpg" rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/10.jpg" alt="QR Quick Response" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Graphic Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">	
                    <a href="/resume/themes/resume/Portal/images/portfolio/11.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/11.jpg" alt="Mobi Sock" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->
            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">
                    <a href="/resume/themes/resume/Portal/images/portfolio/12.jpg" rel="portfolio">
                        <img src="/resume/themes/resume/Portal/images/portfolio/12.jpg" alt="Village Community Church" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->
            <div class="clear"></div>
        </div>
        <!-- #portfoliolist -->
    </div>
    <!-- /.container-portfolio -->
</div>
                                <!-- End .portfolio -->

                                <!-- .blog -->
                                <div id="blog" class="content_2">
    <h1 class="h-bloc">Blog - My Blog</h1><br> 
    <div class="col-md-12">
        <div class="row">
            <!-- Page Blog -->
            <div class="col-md-12" id="blog_page">
                <!-- start Page Blog -->
                <section id="blog-page">
                    <!-- Post 1 -->	
                    <article id="post-1" class="blog-article">                    
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 post_media">
                                    <div class="post-format-icon">
                                        <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                    </div>
                                    <div class="media">
                                        <div class="he-wrap tpl2">
                                            <div id="carousel-1" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-1" data-slide-to="1"></li>
                                                    <li data-target="#carousel-1" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="/resume/themes/resume/Portal/images/blog/blog-1.jpg" alt="" />
                                                        <div class="carousel-caption">
                                                            <h4>First Thumbnail label</h4>
                                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="/resume/themes/resume/Portal/images/blog/blog-2.jpg" alt="" />
                                                        <div class="carousel-caption">
                                                            <h4>First Thumbnail label</h4>
                                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="/resume/themes/resume/Portal/images/blog/blog-3.jpg" alt="" />
                                                        <div class="carousel-caption">
                                                            <h4>First Thumbnail label</h4>
                                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-1" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 post_content">
                                    <div class="content post_format_standart">
                                        <div class="top_c ">
                                            <div class="title_content">
                                                <div class="text_content"><a href="#post-1" class="read_more">Blog Post Gallery</a></div>
                                                <div class="clear"></div>
                                            </div>
                                            <ul class="info">
                                                <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                            </ul>
                                            <div class="blog-content">
                                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                                 magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, 
                                                 pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
                                                 fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p>
                                            </div>
                                        </div>
                                    </div>	
                                    <a href="#post-1" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- End Post 1 -->
                    <div class="clear"></div>
                    <!-- Post 2 -->
                    <article id="post-2" class="blog-article">                    
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 post_media">
                                    <div class="post-format-icon">
                                        <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 post_content">
                                    <div class="content post_format_standart">
                                        <div class="top_c ">

                                            <div class="title_content">
                                                <div class="text_content"><a href="#post-2" class="read_more">Blog Aside post</a></div>
                                                <div class="clear"></div>
                                            </div>

                                            <ul class="info">
                                                <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                            </ul>

                                            <div class="blog-content">
                                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                        </div>
                                    </div>	

                                    <a href="#post-2" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                                </div>
                            </div>

                        </div>
                    </article>
                    <!-- End Post 2 -->
                    <div class="clear"></div>
                    <!-- Post 3 -->
                    <article id="post-3" class="blog-article">                    
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-12 post_media">

                                    <div class="post-format-icon">
                                        <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                    </div>

                                    <div class="media">
                                        <div class="he-wrap tpl2">
                                            <img src="/resume/themes/resume/Portal/images/blog/blog-4.jpg" class="img-hover" alt="" />
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 post_content">
                                    <div class="content post_format_standart">
                                        <div class="top_c ">

                                            <div class="title_content">
                                                <div class="text_content"><a href="#post-3" class="read_more">Blog Post Image</a></div>
                                                <div class="clear"></div>
                                            </div>

                                            <ul class="info">
                                                <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                            </ul>

                                            <div class="blog-content">
                                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                        </div>
                                    </div>	

                                    <a href="#post-3" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                                </div>
                            </div>

                        </div>
                    </article>
                    <!-- End Post 3 -->
                </section>
                <!-- End Page Blog -->
                <!-- Page Blog - Post 1 -->
                <section id="post-1-page" class="content-post" style="display: none">
                    <div class="row inner">
                        <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">
                            <article class="postPage">
                                <div class="col-md-12 post_media">
                                    <div class="post-format-icon">
                                        <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                    </div>
                                    <div class="media">
                                        <div class="he-wrap tpl2">
                                            <div id="carousel-2" class="carousel slide" data-ride="carousel">

                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-2" data-slide-to="1"></li>
                                                    <li data-target="#carousel-2" data-slide-to="2"></li>
                                                </ol>

                                                <div class="carousel-inner">

                                                    <div class="item active">
                                                        <img src="/resume/themes/resume/Portal/images/blog/blog-1.jpg" alt="">
                                                        <div class="carousel-caption">
                                                            <h4>First Thumbnail label</h4>
                                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        </div>
                                                    </div>


                                                    <div class="item">
                                                        <img src="/resume/themes/resume/Portal/images/blog/blog-2.jpg" alt="">
                                                        <div class="carousel-caption">
                                                            <h4>First Thumbnail label</h4>
                                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="/resume/themes/resume/Portal/images/blog/blog-3.jpg" alt="">
                                                        <div class="carousel-caption">
                                                            <h4>First Thumbnail label</h4>
                                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="title_content">
                                    <div class="text_content">Blog Post Gallery</div>
                                    <div class="clear"></div>
                                </div>

                                <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                                <div class="col-md-12 first">
                                    <div class="info">
                                        <div>
                                            <span class="tag">#php</span>
                                            <span class="tag">#web</span>
                                            <span class="tag">#web design</span>
                                        </div>


                                        <ul class="info-post">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                            <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                        </ul>
                                    </div>

                                    <div class="clear"></div>      


                                    <div class="about_author">
                                        <div class="title_content" style="margin-bottom:10px">
                                            <div class="text_content">BILL GATES</div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>

                                        <div class="prg_content">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                            <div class="text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>

                                            <div class="nb_post" style="margin-top: 10px;">
                                                <b id="nb_post"> 15 posts</b> created by author
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>      


                                    <div class="post_comments">

                                        <div class="title_content">
                                            <div class="text_content">7 Comments</div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>

                                        <div class="comments">

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->



                                        </div><!-- .post_comments -->

                                        <div class="clear"></div>      


                                        <div class="comment_form">
                                            <div class="title_content">
                                                <div class="text_content">Leave A Comment</div>
                                                <div class="clear"></div>
                                            </div>


                                            <form method="post" id="comment_form">
                                                <p class="form-group" id="contact-name">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                                </p>
                                                <p class="form-group" id="contact-email"> 
                                                    <label for="email">Your Email</label>
                                                    <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                                </p>

                                                <p class="form-group" id="contact-message">
                                                    <label for="message">Your Message</label>
                                                    <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                                </p>
                                                <input type="reset" name="reset" value="CLEAR" class="reset">
                                                <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                                <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                            </form>                        
                                            <div class="clear"></div>

                                        </div>
                                    </div>



                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                        <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                    </div>

                                    <div class="clear"></div>

                            </article>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <!-- End Page Blog - Post 1 -->
                <!-- Page Blog - Post 2 -->
                <section id="post-2-page" class="content-post" style="display: none">
                    <div class="row inner">

                        <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                            <article class="postPage">

                                <div class="col-md-12 post_media">

                                    <div class="post-format-icon">
                                        <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                    </div>

                                </div>

                                <div class="title_content">
                                    <div class="text_content">BLOG ASIDE POST</div>
                                    <div class="clear"></div>
                                </div>


                                <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                                <div class="col-md-12 first">
                                    <div class="info">
                                        <div>
                                            <span class="tag">#php</span>
                                            <span class="tag">#web</span>
                                            <span class="tag">#web design</span>
                                        </div>


                                        <ul class="info-post">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                            <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                        </ul>
                                    </div>

                                    <div class="clear"></div>      


                                    <div class="about_author">
                                        <div class="title_content" style="margin-bottom:10px">
                                            <div class="text_content">BILL GATES</div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>


                                        <div class="prg_content">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                            <div class="text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>

                                            <div class="nb_post" style="margin-top: 10px;">
                                                <b id="nb_post"> 15 posts</b> created by author
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>      


                                    <div class="post_comments">

                                        <div class="title_content">
                                            <div class="text_content">7 Comments</div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>

                                        <div class="comments">

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->



                                        </div><!-- .post_comments -->

                                        <div class="clear"></div>      


                                        <div class="comment_form">

                                            <div class="title_content">
                                                <div class="text_content">Leave A Comment</div>
                                                <div class="clear"></div>
                                            </div>


                                            <form method="post" id="comment_form">
                                                <p class="form-group" id="contact-name">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                                </p>
                                                <p class="form-group" id="contact-email"> 
                                                    <label for="email">Your Email</label>
                                                    <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                                </p>

                                                <p class="form-group" id="contact-message">
                                                    <label for="message">Your Message</label>
                                                    <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                                </p>
                                                <input type="reset" name="reset" value="CLEAR" class="reset">
                                                <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                                <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                            </form>                        
                                            <div class="clear"></div>

                                        </div>
                                    </div>



                                    <div class="col-md-12"  style="margin-top: 20px;">
                                        <a href="#post-3" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                        <a href="#post-1" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                    </div>

                                    <div class="clear"></div>

                            </article>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <!-- End Page Blog - Post 2 -->
                <!-- Page Blog - Post 3 -->
                <section id="post-3-page" class="content-post" style="display: none">
                    <div class="row inner">

                        <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                            <article class="postPage">


                                <div class="col-md-12 post_media">

                                    <div class="post-format-icon">
                                        <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                    </div>

                                    <div class="media">
                                        <div class="he-wrap tpl2">
                                            <img src="/resume/themes/resume/Portal/images/blog/blog-2.jpg" class="img-hover" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="title_content">
                                    <div class="text_content">BLOG POST IMAGE</div>
                                    <div class="clear"></div>
                                </div>


                                <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                                <div class="col-md-12 first">
                                    <div class="info">
                                        <div>
                                            <span class="tag">#php</span>
                                            <span class="tag">#web</span>
                                            <span class="tag">#web design</span>
                                        </div>


                                        <ul class="info-post">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                            <li><i class="glyphicon glyphicon-tag"></i> Photoshop</li>
                                        </ul>
                                    </div>

                                    <div class="clear"></div>      


                                    <div class="about_author">
                                        <div class="title_content" style="margin-bottom:10px">
                                            <div class="text_content">BILL GATES</div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>


                                        <div class="prg_content">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                            <div class="text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>

                                            <div class="nb_post" style="margin-top: 10px;">
                                                <b id="nb_post"> 15 posts</b> created by author
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>      


                                    <div class="post_comments">

                                        <div class="title_content">
                                            <div class="text_content">7 Comments</div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>

                                        <div class="comments">

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="comment sub">
                                                    <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                    <div class="text">
                                                        <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                        <div class="date">12, September, 2013</div>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Praesent condimentum sed elit
                                                        vitae tristique. Aliquam erat volutpat. Nunc sit
                                                        amet cursus libero. In fringilla egestas ornare.
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->

                                            <div class="comment">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .comments -->



                                        </div><!-- .post_comments -->

                                        <div class="clear"></div>      


                                        <div class="comment_form">

                                            <div class="title_content">
                                                <div class="text_content">Leave A Comment</div>
                                                <div class="clear"></div>
                                            </div>


                                            <form method="post" id="comment_form">
                                                <p class="form-group" id="contact-name">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                                </p>
                                                <p class="form-group" id="contact-email"> 
                                                    <label for="email">Your Email</label>
                                                    <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                                </p>

                                                <p class="form-group" id="contact-message">
                                                    <label for="message">Your Message</label>
                                                    <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                                </p>
                                                <input type="reset" name="reset" value="CLEAR" class="reset">
                                                <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                                <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                            </form>                        
                                            <div class="clear"></div>

                                        </div>
                                    </div>


                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                        <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a href="#blog" id="blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                    </div>

                                    <div class="clear"></div>

                            </article>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <!-- End Page Blog - Post 3 -->
            </div>
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title h3_modal" style="color: #fff !important;">FlexyVcard - Responsive Vcard Template</h3>
                        </div>
                        <div class="modal-body">
                            <p>FlexyVcard is an impressive and professional online vcard, a beautiful portfolio with sliding effect, resume and contact information with Google map.</p>
                            <p>It’s simple! Just download and install in a few minutes, you can show your online card to your friend, customer or employer in an interview by phone or tablet. Because FlexyVcard is a responsive template, you can view your website on pc as well as handheld devices. You can also link to your social profiles, display your portfolio in many media format such as image, youtube video, flash...</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                <!-- End .blog -->
                                <!-- .contact -->
                                <div id="contact" class="content_2">
    <h1 class="h-bloc">Contact - 小升的联系方式</h1>
    <div class="row">
        <div class="col-lg-12">
            <div id="map"></div>
        </div>  
        <div class="col-lg-12">
            <div class="row" id="contact-user">
                <div class="col-md-5">
                    <div class="contact-info">
                        <!--<h3 class="main-heading"><span>Contact info</span></h3>-->
                        <div class="title_content" style="float: none;">
                            <div class="text_content">小升的联系方式</div>
                            <div class="clear"></div>
                        </div>
                        <ul>
                            <li><span class="span-info"><i class="glyphicon glyphicon-map-marker"></i> 地址:&nbsp;</span> 广州增城<br /><br /></li>
                            <li><span class="span-info"><i class="glyphicon glyphicon-envelope"></i> Email:&nbsp;</span> 654753115@qq.com</li>
                            <li><span class="span-info"><i class="glyphicon glyphicon-phone"></i> Phone:&nbsp;</span> +86 13650962253</li>
                            <li><span class="span-info"><i class="glyphicon glyphicon-globe"></i> Website:&nbsp;</span> <a href="http://www.buyteer.com/resume/" target="_blank">www.buyteer.com/resume/</a></li>
                            <li><span class="span-info"><i class="glyphicon glyphicon-comment"></i> QQ:&nbsp;</span> 654753115</li>
                            <li><span class="span-info"><i class="glyphicon glyphicon-thumbs-up"></i> 微信:&nbsp;</span> walle654753115</li>
                            <!-- <li><span class="span-info"><i class="glyphicon glyphicon-unchecked"></i> Skydrive: </span> brown-s-sk@hotmail.com</li> -->
                        </ul>
                    </div>
                    <!-- /Contact Info -->
                    <div class="clear"></div>
                    <!--<h3 class="main-heading" style="margin-left: 22px;"><span>Follow me</span></h3>-->
                    <div class="title_content tiltle_contacts" style="float: none;">
                        <div class="text_content">这里也可以找我</div>
                        <div class="clear"></div>
                    </div>
                    <div id="profile_social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-foursquare"></i></a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Contact Form -->
                    <div class="title_content" style="float: none;">
                        <div class="text_content">好基友，一辈子~</div>
                        <div class="clear"></div>
                    </div>
                    <div class="contact-form">
                        <!--<h3 class="main-heading"><span>Let's keep in touch</span></h3>-->
                        <div id="contact-status"></div>
                        <form action="#" id="contactform">
                            <p class="form-group" id="contact-name">
                                <label for="name">你叫啥</label>
                                <input type="text" name="name" class="form-control name-contact" id="inputSuccess" />
                            </p>
                            <p class="form-group" id="contact-email"> 
                                <label for="email">小姐留个email吧</label>
                                <input type="text" name="email" class="form-control email-contact" id="inputSuccess" />
                            </p>
                            <p class="form-group" id="contact-message">
                                <label for="message">有什么大事小事说下呗</label>
                                <textarea name="message" cols="88" rows="6" class="form-control message-contact" id="inputError" placeholder="Message..."></textarea>
                            </p>
                            <input type="reset" name="reset" value="删掉" class="reset">
                            <!-- <input type="submit" name="submit" value="SEND MESSAGE" class="submit">-->
                            <section class="button-demo" style="display: inline-block;">
                                <button class="ladda-button submit send_email" name="submit" data-color="green" data-style="expand-left">&nbsp;&nbsp;飞鸽传书&nbsp;&nbsp;</button>
                            </section>
                        </form>
                    </div>
                    <!-- /Contact Form -->
                </div>
            </div>
        </div>
    </div>
</div>
                                <!-- End .contact -->
                                </div>
                                <!-- End #resp-tabs-container -->
                            </div><!-- End verticalTab -->
                        </div><!-- End flexy_content -->
                    </div><!-- End row -->
                </div><!-- End col-md-12 -->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>
    <!-- End Content -->
</div>
<!-- End wrapper -->

<!-- Switcher -->
<div id="custumize-style">
    <h2>样式选择<a href="#" class="switcher"><i class="fa fa-cogs icon-switcher"></i></a></h2>
    <div>
        <h3>主题颜色</h3>
        <ul class="colors-style" id="color1">
            <!-- <li><a href="#" class="gray"></a></li> -->
            <!-- <li><a href="#" class="green"></a></li> -->
            <li><a href="#" class="blue"></a></li>
            <!-- <li><a href="#" class="red"></a></li> -->
            <li><a href="#" class="yellow"></a></li>
            <li><a href="#" class="DarkBlue"></a></li>
            <li><a href="#" class="orange"></a></li>
            <!-- <li><a href="#" class="rose"></a></li> -->
            <li><a href="#" class="lightseagreen"></a></li>
            <!-- <li><a href="#" class="darkolivegreen"></a></li> -->
        </ul>
    </div>
    <div> 
        <h3 class="layouts">头像动作</h3>
        <div id="show">
            <div class="clean-check">
                <input type="radio" id="r1" name="style_profile" value="style_profile_1"/>
                <label for="r1"><span></span>动态</label>
                <input type="radio" id="r2" name="style_profile" value="style_profile_2" checked="checked"/>
                <label for="r2"><span></span>固定</label>

            </div>
        </div>
        <h3 class="layouts">页面布局</h3>
        <div id="show">
            <div class="clean-check" style="padding-left: 30px;">
                <input type="radio" id="pb1" name="page_builder" value="http://demo.flexy-codes.com/FlexyVcard"   />
                <label for="pb1"><span></span>Style 1</label>
                <input type="radio" id="pb2" name="page_builder" value="page-builder-2.html"  />
                <label for="pb2"><span></span>Style 2</label>
                <input type="radio" id="pb3" name="page_builder" value="http://demo.flexy-codes.com/FlexyVcard/page-builder-3.php" checked />
                <label for="pb3"><span></span>Style 3</label>
                <input type="radio" id="pb4" name="page_builder" value="page-builder-4.html"  />
                <label for="pb4"><span></span>Style 4</label>
            </div>
        </div>      
        <!-- <h3 class="layouts">页面动画</h3>
        <div id="show">
            <select name="one" class="dropdown-select">
                <optgroup label="Bouncing Entrances">
                    <option value="bounceIn" selected>bounceIn</option>
                    <option value="bounceInDown">bounceInDown</option>
                    <option value="bounceInLeft">bounceInLeft</option>
                    <option value="bounceInRight">bounceInRight</option>
                    <option value="bounceInUp">bounceInUp</option>
                </optgroup>
                <optgroup label="Fading Entrances">
                    <option value="fadeIn">fadeIn</option>
                    <option value="fadeInDown">fadeInDown</option>
                    <option value="fadeInLeft">fadeInLeft</option>
                    <option value="fadeInRight">fadeInRight</option>
                    <option value="fadeInUp">fadeInUp</option>
                </optgroup>      
            </select>
        </div> -->
        <h3 class="layouts" style="padding-top:5px">背景样式</h3>
        <div id="show">
            <div class="clean-check">
				<input type="radio" id="s1" name="layout" value="bg_color"  />
                <label for="s1"><span></span>颜色</label>
                <input type="radio" id="s2" name="layout" value="bg_slider" checked="checked" />
                <label for="s2"><span></span>图片</label>
            </div>
        </div>
    </div>
    <div>
        <h3>背景颜色</h3>
        <ul class="colors-style bgsolid" id="bgsolid">
            <li><a href="#" class="gray-bg"></a></li>
            <li><a href="#" class="green-bg"></a></li>
            <li><a href="#" class="blue-bg"></a></li>
            <li><a href="#" class="red-bg"></a></li>
            <li><a href="#" class="yellow-bg"></a></li>
        </ul>
    </div> 
    <div>  
        <h3>背景图片</h3>
        <ul class="colors-style bg" id="bg">
            <li><a href="#" class="bg1"></a></li>
            <li><a href="#" class="bg2"></a></li>
            <li><a href="#" class="bg3"></a></li>
            <li><a href="#" class="bg4"></a></li>
            <li><a href="#" class="bg5"></a></li>
        </ul>
    </div>
    <div id="button-reset"><a href="#" class="button color blue boxed">Reset</a></div>
</div>
<!-- End Switcher -->
<!-- jquery | jQuery 1.11.0 -->
<!-- Credits: http://jquery.com -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/jquery.min.js"></script>
	
<!-- Js | bootstrap -->
<!-- Credits: http://getbootstrap.com/ -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/bootstrap.min.js"></script> 

<!-- Js | jquery.cycle -->
<!-- Credits: https://github.com/malsup/cycle2 -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/jquery.cycle2.min.js"></script>

<!-- jquery | rotate and portfolio -->
<!-- Credits: http://jquery.com -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="/resume/themes/resume/Portal/js/HeadImage.js"></script>

<!-- Js | easyResponsiveTabs -->
<!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/easyResponsiveTabs.min.js"></script> 

<!-- Js | jquery.cookie -->
<!-- Credits: https://github.com/carhartl/jquery-cookie --> 
<script type="text/javascript" src="/resume/themes/resume/Portal/js/jquery.cookie.js"></script>	

<!-- Js | switcher -->
<!-- Credits: http://themeforest.net/user/FlexyCodes -->
<!-- <script type="text/javascript" src="/resume/themes/resume/Portal/js/jsSwitcher/switcher.js"></script>	 -->

<!-- Js | mCustomScrollbar -->
<!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/jquery.mCustomScrollbar.concat.min.js"></script>		

<!-- jquery | prettyPhoto -->
<!-- Credits: http://www.no-margin-for-errors.com/ -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/jquery.prettyPhoto.js"></script>
<!-- Js | gmaps -->
<!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
<!-- <script type="text/javascript" src="/resume/themes/resume/Portal/js/gmaps.min.js"></script> -->
<!-- Js | Js -->
<!-- Credits: http://themeforest.net/user/FlexyCodes -->
<script type="text/javascript" src="/resume/themes/resume/Portal/js/main.js"></script>
<script type="text/javascript">
/*-----------------------------------------------------------------------------------
/* Styles Switcher
 -----------------------------------------------------------------------------------*/
window.console = window.console || (function() {
    var c = {};
    c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function() {};
    return c;
})();
jQuery(document).ready(function($) {
    var css_url = '/resume/themes/resume/Portal/';
    // layout Type              
    if ($.cookie('bg_type') != null) {
        if ($.cookie('bg_type') == 'bg_color'){
            $('#s1').attr('checked', true);
            $("#cb_slideshow" ).css("display", "none");
        }else{
            $('#s2').attr('checked', true);
            $("#cb_slideshow" ).css("display", "block" );
        }
    } else {
        $("#cb_slideshow" ).css("display", "block" );
    }
    
    // type profile             
    if ($.cookie('profile_type') != null) {
        if ($.cookie('profile_type') == 'pic_prof_2') {
            $('#r2').attr('checked', true);
            $("#pic_prof_2").css('display', 'block');
            $("#pic_prof_1").css('display', 'none');
        } else {
            $('#r1').attr('checked', true);
            $("#pic_prof_1").css('display', 'block');
            $("#pic_prof_2").css('display', 'none');
        }
    } else {
        $('#r2').attr('checked', true);
        $("#pic_prof_2").css('display', 'block');
        $("#pic_prof_1").css('display', 'none');
    }
    // Layout Colors
    if ($.cookie('layout_color') != null) {
        $("#colors-style").attr("href", $.cookie('layout_color'));
    }
    // Layout bgColors
    if ($.cookie('layout_bgColors') != null) {
        $('body').css('backgroundColor', $.cookie('layout_bgColors')).css('backgroundImage', 'none');
    }
    // Layout bgImage

    if ($.cookie('layout_bgColors') == null) {
        if ($.cookie('layout_bgImage') != null) {
            $('body').css('backgroundImage', $.cookie('layout_bgImage'));
        }
    }
    // Custumize Color
    $(".gray").click(function() {
        $("#colors-style").attr("href", css_url+"css/colors/gray.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/gray.css');
        return false;
    });
    $(".green").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/green.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/green.css');
        return false;
    });
    $(".blue").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/blue.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/blue.css');
        return false;
    });
    $(".red").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/red.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/red.css');
        return false;
    });
    $(".yellow").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/yellow.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/yellow.css');
        return false;
    });
    $(".DarkBlue").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/DarkBlue.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/DarkBlue.css');
        return false;
    });
    $(".orange").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/orange.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/orange.css');
        return false;
    });

    $(".rose").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/rose.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/rose.css');
        return false;
    });
    $(".lightseagreen").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/lightseagreen.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/lightseagreen.css');
        return false;
    });
    $(".darkolivegreen").click(function() {
        $("#colors-style").attr("href", "/resume/themes/resume/Portal/css/colors/darkolivegreen.css");
        $.cookie('layout_color', '/resume/themes/resume/Portal/css/colors/darkolivegreen.css');
        return false;
    });
    // Custumizz Style
    //radio style profile

    //radio layout  
    $("#r1").on('change', function() {
        $("#pic_prof_1").css('display', 'block');
        $("#pic_prof_2").css('display', 'none');
        $.cookie('profile_type', 'pic_prof_1');
        return false;
    });
    $("#r2").on('change', function() {
        $("#pic_prof_2").css('display', 'block');
        $("#pic_prof_1").css('display', 'none');
        $.cookie('profile_type', 'pic_prof_2');
        return false;
    });
    // Custumizz Style

    //radio layout  
    $("#s1").on('change', function() {
        $("#cb_slideshow").css("display", "none");
        $.cookie('bg_type', 'bg_color');
        return false;
    });
    $("#s2").on('change', function() {
        $("#cb_slideshow").css("display", "block");
        $.cookie('bg_type', 'bg_slider');
        return false;
    });
    // Style 
    $('#custumize-style').animate({
        left: '-270px'
    });
    $('#custumize-style h2 a').click(function(e) {
        e.preventDefault();
        var div = $('#custumize-style');
        console.log(div.css('left'));
        if (div.css('left') === '-270px') {
            $('#custumize-style').animate({
                left: '0px'
            });
            // open switcher and add class open
            $(this).addClass('open');
            $(this).removeClass('closed');

        } else {
            $('#custumize-style').animate({
                left: '-270px'
            });
            // close switcher and add closed
            $(this).addClass('closed');
            $(this).removeClass('open');
        }
    })
    $('.bg li a').click(function(e) {
        e.preventDefault();
        $(this).parent().parent().find('a').removeClass('active');
        $(this).addClass('active');
        var bg = $(this).css('backgroundImage');
        $('body').css('backgroundImage', bg);

        $.cookie('layout_bgImage', bg);
        $.cookie('layout_bgColors', null);
    })
    
    $('#bgsolid li a').click(function(e) {
        e.preventDefault();
        $(this).parent().parent().find('a').removeClass('active');
        $(this).addClass('active');
        var bg = $(this).css('backgroundColor');
        $('body').css('backgroundColor', bg).css('backgroundImage', 'none');

        $.cookie('layout_bgColors', bg);

    })
    $('#button-reset a').click(function(e) {
        var bg = '#717171';
        $('body').css('backgroundColor', '#717171').css('backgroundImage', 'none');
        $.cookie('layout_bgColors', bg);
    })
});
</script>
<!-- code js for image rotate -->
<script type="text/javascript">

    var mouseX;
    var mouseY;
    var imageOne;

    /* Calling the initialization function */
    $(init);
    /* The images need to re-initialize on load and on resize, or else the areas
     * where each image is displayed will be wrong. */
    $(window).load(init);
    $(window).resize(init);
    /* Setting the mousemove event caller */
    $(window).mousemove(getMousePosition);

    /* This function is called on document ready, on load and on resize
     * and initiallizes all the images */
    function init() {
        /* Instanciate the mouse position variables */
        mouseX = 0;
        mouseY = 0;
        /* Instanciate a HeadImage class for every image */
        /* 动态头像动作 */
        imageOne = new HeadImage("one");
    }
    /* This function is called on mouse move and gets the mouse position. 
     * It also calls the HeadImage function to display the correct image*/
    function getMousePosition(event) {
        /* Setting the mouse position variables */
        mouseX = event.pageX;
        mouseY = event.pageY;
        /*Calling the setImageDirection function of the HeadImage class
         * to display the correct image*/
        imageOne.setImageDirection();
    }
</script>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</body>
</html>