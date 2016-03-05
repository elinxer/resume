<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
    <meta name="author" content="elinx">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
	<meta name="description" content="<?php echo ($site_seo_description); ?>">

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
<div id="preloader"><div id="spinner"></div></div>

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
                    当世界都是美好，那么新的美好来自何处？
                </p>
                <p style="float: right;">
                    ————&nbsp;&nbsp;elinx&nbsp;&nbsp;
                </p>
            </div>
            <!-- End left-wrap -->
            <div class="col-md-6 profile-r">
                <div class="cycle-slideshow">
                    <?php $pro_slide = sp_getslide('pro_slide'); ?>
                    <?php if(is_array($pro_slide)): $i = 0; $__LIST__ = $pro_slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro_slide_vo): $mod = ($i % 2 );++$i;?><img src="<?php echo ($pro_slide_vo['slide_pic']); ?>" alt="<?php echo ($pro_slide_vo['slide_name']); ?>" style="width: 350px;height: 460px;" /><?php endforeach; endif; else: echo "" ;endif; ?>
                    <img src="/resume/themes/resume/Portal/images/img-profile/about_3.png" alt="" />
                </div>
            </div>
        </div>
        <!-- End Services -->
        <div class="clear"></div>
    </div>
    <!-- End .profile -->
    <!-- .resume -->
    <div id="resume" class="content_2">
    <!-- .title -->
    <h1 class="h-bloc">Resume - 我的简历</h1> 
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
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="65%">
                    <div class="skillbar-title"><span>CSS</span></div>
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
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="65%">
                    <div class="skillbar-title"><span>微信平台开发</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">65%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="75%">
                    <div class="skillbar-title"><span>SNS快捷登陆</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">75%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="75%">
                    <div class="skillbar-title"><span>平台支付功能</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">75%</div>
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
                <div class="skillbar clearfix" data-percent="70%">
                    <div class="skillbar-title"><span>MS Excel</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">85%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="75%">
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
            </div>
            <!-- .title_content -->
            <div class="title_content" style="float: none;">
                <div class="text_content">人生修炼</div>
                <div class="clear"></div>
            </div>
            <!-- /.title_content -->
            <div class="skills">
                <!-- .skillbar -->
                <div class="skillbar clearfix" data-percent="98%">
                    <div class="skillbar-title"><span>忍耐力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">98%</div>
                </div>
                <!-- /.skillbar -->
                
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="99%">
                    <div class="skillbar-title"><span>审美能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">99%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="66%">
                    <div class="skillbar-title"><span>记账能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">66%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="44%">
                    <div class="skillbar-title"><span>视力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">44%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="77%">
                    <div class="skillbar-title"><span>脑力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">77%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="88%">
                    <div class="skillbar-title"><span>熬夜能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">88%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="80%">
                    <div class="skillbar-title"><span>适应力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">80%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="55%">
                    <div class="skillbar-title"><span>吃饭能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">55%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="60%">
                    <div class="skillbar-title"><span>打蓝球能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">60%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="1%">
                    <div class="skillbar-title"><span>泡妞能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">1%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="55%">
                    <div class="skillbar-title"><span>喝酒能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">55%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="77%">
                    <div class="skillbar-title"><span>作文能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">77%</div>
                </div>
                <!-- /.skillbar -->
                <!-- .skillbar -->
                <div class="skillbar clearfix " data-percent="88%">
                    <div class="skillbar-title"><span>探索能力</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">88%</div>
                </div>
                <!-- /.skillbar -->
            </div>
            <!-- .download_resume -->
            <!-- <div class="title_content" style="float: none;">
                <div class="text_content">我的简历</div>
                <div class="clear"></div>
            </div>
            <a class="download" style="margin:0;float: left;" href="#">
                <span data-hover=" 下载简历"><i class="glyphicon glyphicon-download-alt"></i> 下载简历</span>
            </a> -->
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
                    <p>商城为汽车后市场产品销售网上商城，小人负责开发公司自主品牌商城商品管理模块功能。负责接口API架设以及商品分类、商品管理、商品属性、商品详情、购物车等模块功能开发，整理API接口并形成接口文档。</p>
                </li>
                <li>
                    <h5>华立学院图书馆<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>华立学院图书馆</h6>
                    <p>华立学院图书馆御用网站，现已服役。</p>
                    <p>从接手开始，经历了N次大小规模的修改、成型然后再修改、成型直至现`金`版本。小的单干，一人开发了整个站点，包括后台搭建，服务器架设，还有兼职做了版面搭配设计，美工找了几个免费打手的帮忙修正。</p>
                </li>
                <li>
                    <h5>美国移民网站<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>华立学院信息中心</h6>
                    <p>有钱了？活腻了？那就换个地方生活吧！遂意这是个移民官方网站，说来有趣，这个是华立公司旗下的一个新投资项目，然，移民成本高到底了。</p>
                </li>
                <li>
                    <h5>老年人大学网站<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>华立学院信息中心</h6>
                    <p>人老了，然学无止境，纵使上了年纪，我们也是要day day up的。这个华立公司下面的一个老年人大学网站官网，属于企业型网站，功能单一，以框架搭建。</p>
                </li>
                <li>
                    <h5>元通轮胎公司官网<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>walle（旧网名）</h6>
                    <p>一个卖轮胎的专业化的，加产品展示，公司介绍，历史背景的中小型企业网站</p>
                </li>
                <li>
                    <h5>个人账单小系统<span class="duration"><i class="fa fa-calendar color"></i> 2014 - 2015</span></h5>
                    <h6><span class="fa fa-trophy"></span>walle（旧网名）</h6>
                    <p>小子第一个商业化应用项目</p>
                    <p>初入大学期间，由于小子喜欢记一些日常财务支出，零零碎碎的，遂鼓捣了小半年搞了这个账单系统，功能有日常收入支出，还有宿舍费用管理等</p>
                    <p>体验账户：walle 密码：a654753115</p>
                </li>
            </ul>
            <!-- /.attributes -->
            <br>  
        </div>
        <!-- /.resume-left -->
    </div>
    <hr>
</div>
                                <!-- End .resume -->
                                <!-- .portfolio -->
                                <div id="portfolio" class="content_2">
    <?php
 $pic_posts = sp_sql_posts('cid:3;field:post_title,post_keywords,post_content,smeta,post_date;order:listorder asc'); $pic_all_keys = ''; foreach($pic_posts as $pv) { $pic_all_keys .= $pv['post_title'].' '; } ?>
    <!-- .title -->
    <h1 class="h-bloc">Portfolio - 这是小二的茶水了</h1>
    <!-- .container-portfolio -->
    <div class="container-portfolio">
        <!-- #filters -->
        <ul id="filters" class="clearfix">
            <li><span class="filter active" data-filter="<?php echo ($pic_all_keys); ?>">所有</span></li>
            <?php if(is_array($pic_posts)): $i = 0; $__LIST__ = $pic_posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic_vo): $mod = ($i % 2 );++$i;?><li><span class="filter" data-filter="<?php echo ($pic_vo['post_title']); ?>"><?php echo ($pic_vo['post_title']); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /#filters -->
        <!-- #portfoliolist -->
        <div id="portfoliolist">
            <!-- .portfolio -->
            <?php if(is_array($pic_posts)): $i = 0; $__LIST__ = $pic_posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic_smeta): $mod = ($i % 2 );++$i; $tmp_smeta=json_decode($pic_smeta['smeta'],true); $pi_smeta = $tmp_smeta['photo']; ?>
                <?php if(is_array($pi_smeta)): $i = 0; $__LIST__ = $pi_smeta;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pi_smeta_vo): $mod = ($i % 2 );++$i;?><div class="portfolio <?php echo ($pic_smeta['post_title']); ?>" data-cat="<?php echo ($pic_smeta['post_title']); ?>">	
                        <!-- .portfolio-wrapper -->
                        <div class="portfolio-wrapper">		
                            <a href="/resume/data/upload/<?php echo ($pi_smeta_vo['url']); ?>" rel="portfolio" title="<?php echo ($pi_smeta_vo['alt']); ?> <?php echo ($pic_smeta['post_date']); ?>">
                                <img src="/resume/data/upload/<?php echo ($pi_smeta_vo['url']); ?>" alt="<?php echo ($pi_smeta_vo['alt']); ?>" />
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title"><?php echo ($pi_smeta_vo['alt']); ?></a>
                                        <span class="text-category"><?php echo ($pic_smeta['post_date']); ?></span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </a>
                        </div>
                        <!-- /.portfolio-wrapper -->
                    </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>	
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
    <?php
 $lists = sp_sql_posts_paged("cid:4;order:post_date DESC;where:recommended=1",10); $list_post = $lists['posts']; ?>
    <h1 class="h-bloc">Blog - 茶香·肆·溢</h1><br>
    <div class="col-md-12">
        <div class="row">
            <!-- Page Blog -->
            <div class="col-md-12" id="blog_page">
                <!-- start Page Blog -->
                <section id="blog-page">
                    <!-- Post 1 -->	
                    <?php if(is_array($list_post)): $i = 0; $__LIST__ = $list_post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post_vo): $mod = ($i % 2 );++$i;?><article id="post-1" class="blog-article">                    
                        <div class="col-md-12">
                            <?php $post_smeta_tmp = json_decode($post_vo['smeta'], true); ?>
                            <?php if($post_smeta_tmp['photo']): ?><div class="row">
                                    <div class="col-md-12 post_media">
                                        <div class="post-format-icon">
                                            <a href="#post-<?php echo ($post_vo['tid']); ?>" class="read_more item-date"><span class="fa fa-picture-o"></span></a>
                                        </div>
                                        <div class="media">
                                            <div class="he-wrap tpl2">
                                                <div id="carousel-1" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <?php if(count($post_smeta_tmp['photo']) > 1): if(is_array($post_smeta_tmp['photo'])): $i = 0; $__LIST__ = $post_smeta_tmp['photo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post_smeta_vo_li): $mod = ($i % 2 );++$i;?><li data-target="#carousel-1" data-slide-to="<?php echo $i-1;?>" <?php if($i == 1): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <?php if(is_array($post_smeta_tmp['photo'])): $i = 0; $__LIST__ = $post_smeta_tmp['photo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post_smeta_vo): $mod = ($i % 2 );++$i;?><div class="item <?php if($i == 1): ?>active<?php endif; ?>">
                                                                <img src="/resume/data/upload/<?php echo ($post_smeta_vo['url']); ?>" style="height: 340px;" alt="<?php echo ($post_smeta_vo['alt']); ?>" />
                                                                <div class="carousel-caption">
                                                                    <!-- <h4>First Thumbnail label</h4> -->
                                                                    <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                                                                </div>
                                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </div>
                                                    <?php if(($i == 1)AND(count($post_smeta_tmp['photo']) > 1)): ?><a class="left carousel-control" href="#carousel-1" data-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                        </a>
                                                        <a class="right carousel-control" href="#carousel-1" data-slide="next">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="row">
                                    <div class="col-md-12 post_media">
                                        <div class="post-format-icon">
                                            <a href="#post-<?php echo ($post_vo['tid']); ?>" class="read_more item-date"><span class="fa fa-pencil"></span></a>
                                        </div>
                                    </div>
                                </div><?php endif; ?>
                            <div class="row">
                                <div class="col-md-12 post_content">
                                    <div class="content post_format_standart">
                                        <div class="top_c ">
                                            <div class="title_content">
                                                <div class="text_content"><a href="#post-<?php echo ($post_vo['tid']); ?>" class="read_more"><?php echo ($post_vo['post_title']); ?></a></div>
                                                <div class="clear"></div>
                                            </div>
                                            <ul class="info">
                                                <li><i class="glyphicon glyphicon-user"></i> by elinx</li>
                                                <!-- <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li> -->
                                                <li><i class="glyphicon glyphicon-time"></i> <?php echo ($post_vo['post_date']); ?></li>
                                                <?php if($post_vo['post_keywords']): ?><li><i class="glyphicon glyphicon-tag"></i> <?php echo ($post_vo['post_keywords']); ?></li><?php endif; ?>
                                            </ul>
                                            <div class="blog-content">
                                                <p><i class="fa fa-quote-left"></i>&nbsp;&nbsp;<?php echo (msubstr($post_vo['post_excerpt'],0,580)); ?></p>
                                            </div>
                                        </div>
                                    </div>	
                                    <a href="#post-<?php echo ($post_vo['tid']); ?>" class="read_m pull-right">切，我看看有什么 <i class='glyphicon glyphicon-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- End Post -->
                </section>
                <!-- End Page Blog -->
                <!-- Page Blog - Post  -->
                <?php if(is_array($list_post)): $i = 0; $__LIST__ = $list_post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post_content_vo): $mod = ($i % 2 );++$i;?><section id="post-<?php echo ($post_content_vo['tid']); ?>-page" class="content-post" style="display: none">
                    <div class="row inner">
                        <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">
                            <article class="postPage">
                                <div class="col-md-12 post_media">
                                    <div class="post-format-icon">
                                        <a href="#blog" class="item-date"><span class="fa fa-picture-o"></span></a>
                                    </div>
                                    <div class="media">
                                        <div class="he-wrap tpl2">
                                            <div id="carousel-2" class="carousel slide" data-ride="carousel">
                                                <?php $post_content_smeta_tmp = json_decode($post_content_vo['smeta'], true); ?>
                                                <ol class="carousel-indicators">
                                                    <?php if(count($post_content_smeta_tmp['photo']) > 1): if(is_array($post_content_smeta_tmp['photo'])): $i = 0; $__LIST__ = $post_content_smeta_tmp['photo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post_content_smeta_vo_li): $mod = ($i % 2 );++$i;?><li data-target="#carousel-2" data-slide-to="<?php echo $i-1;?>" <?php if($i == 1): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <?php if(is_array($post_content_smeta_tmp['photo'])): $i = 0; $__LIST__ = $post_content_smeta_tmp['photo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post_content_smeta_vo): $mod = ($i % 2 );++$i;?><div class="item <?php if($i == 1): ?>active<?php endif; ?>">
                                                            <img src="/resume/data/upload/<?php echo ($post_content_smeta_vo['url']); ?>" alt="<?php echo ($post_content_smeta_vo['alt']); ?>" />
                                                            <div class="carousel-caption">
                                                                <!-- <h4>First Thumbnail label</h4> -->
                                                                <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                                                            </div>
                                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -- -->
                                    </div>
                                </div>
                                <div class="title_content">
                                    <div class="text_content"><?php echo ($post_content_vo['post_title']); ?></div>
                                    <div class="clear"></div>
                                </div>
                                <?php echo ($post_content_vo['post_content']); ?>
                                <div class="col-md-12 first">
                                    <div class="info">
                                        <?php  $post_keywords_array = implode(",&nbsp;&nbsp;", explode(",", $post_content_vo['post_keywords'])); if(count($post_keywords_array) < 1) { $post_keywords_array = implode(",&nbsp;&nbsp;", explode(" ", $post_content_vo['post_keywords'])); } ?>
                                        <div><hr></div>
                                        <ul class="info-post">
                                            <li><i class="glyphicon glyphicon-user"></i> by elinx</li>
                                            <!-- <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li> -->
                                            <li><i class="glyphicon glyphicon-time"></i> <?php echo ($post_content_vo['post_date']); ?></li>
                                            <li><i class="glyphicon glyphicon-tag"></i> <?php echo ($post_keywords_array); ?></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <!-- <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a> -->
                                        <!-- <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a> -->
                                        <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </article>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section><?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- End Page Blog - Post  -->
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
        <!-- <div class="col-lg-12"><div id="map"></div></div>   -->
        <div class="col-lg-12">
            <div class="row" id="contact-user" style="padding: 0px 0px;">
                <div class="col-md-5">
                    <div class="contact-info">
                        <!--<h3 class="main-heading"><span>Contact info</span></h3>-->
                        <div class="title_content" style="float: none;">
                            <div class="text_content">小升的联系方式</div>
                            <div class="clear"></div>
                        </div>
                        <ul>
                            <li><span class="span-info"> 地址:&nbsp;</span> 广州增城<br /></li>
                            <li><span class="span-info"> Email:&nbsp;</span> 654753115@qq.com<br /></li>
                            <li><span class="span-info"> Phone:&nbsp;</span> +86 13650962253<br /></li>
                            <li><span class="span-info"> Website:&nbsp;</span> <a href="http://www.buyteer.com/resume/" target="_blank">www.buyteer.com/resume/</a><br /></li>
                            <li><span class="span-info"> QQ:&nbsp;</span> 654753115<br /></li>
                            <li><span class="span-info"> 微信:&nbsp;</span> walle654753115<br /></li>
                            <!-- <li><span class="span-info"><i class="glyphicon glyphicon-unchecked"></i> Skydrive: </span> brown-s-sk@hotmail.com</li> -->
                        </ul>
                    </div>
                    <!-- /Contact Info -->
                    <div class="clear"></div>
                    <!--<h3 class="main-heading" style="margin-left: 22px;"><span>Follow me</span></h3>-->
                    <div class="title_content tiltle_contacts" style="float: none;">
                        <div class="text_content">- 刷刷刷 -</div>
                        <div class="clear"></div>
                    </div>
                    <div id="profile_social">
                        <img src="/resume/themes/resume/Portal/images/weixin.png" style="width: 278px;height: 164px;">
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
</body>
</html>