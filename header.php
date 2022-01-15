<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?=YDIR?>/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
   
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  <?php wp_head();?>
  </head>

  <body>
    <div class="page">
      <header class="page-head">
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-aside-wrap">
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <ul class="rd-navbar-aside-group list-units">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="tel:#"> (99) 9 </a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="mailto:#">ytech@ytechsolucoes.com.br</a></div>
                        </div>
                      </li>
                    </ul>
                    <div class="rd-navbar-aside-group">
                      <ul class="list-inline list-inline-reset">
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-facebook"  id="fa-facebook"href="#"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-twitter" id="fa-twitter"href="#"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-google-plus" id="fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <?php get_template_part('/template-parts/menu');?>

            </div>
          </nav>
        </div>
      </header>
