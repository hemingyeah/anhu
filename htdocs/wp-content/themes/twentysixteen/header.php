<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>安乎-专业智能的商业安全服务</title>
	<meta http-equiv="Cache-Control" content="no-store">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<meta content="telephone=no" name="format-detection">
	<script src="/wp-content/themes/twentysixteen/js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/twentysixteen/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/twentysixteen/js/unslider.min.js"></script>
	<!-- <link href="/wp-content/themes/twentysixteen/style.css" type="text/css" rel="stylesheet"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--手机端菜单-->
<div class="popbg"></div>
<div class="popdiv">
	<div class="closediv">
    	<a href="javascript:;" class="close"><img src="/wp-content/themes/twentysixteen/images/close.png" /></a>
    </div>
    <div class="popmenu">
    	<ul>
            <li>
                <a href="home">首页</a>
            </li>
            <li>
                <a href="news"  class="active">行业新闻</a>
            </li>
        </ul>
        <a class="login" href="http://service.51anhu.com">登录</a>
        <a class="register" href="http://service.51anhu.com">免费试用</a>
    </div>
</div>
<!--手机端菜单 END-->


<div class="header header-phone">
	<div class="header-div clearfix">
    	<a class="logo" href="home"></a>
        <p class="phonew phoneMenu-click"><em></em></p>
        <div class="menu">
            <a href="home">首页</a>
            <!-- <a href="download">下载</a> -->
            <a href="news"  class="active">行业新闻</a>
            <span>
            	<a href="http://service.51anhu.com" class="login">登录</a>
                <a href="http://service.51anhu.com" class="register">免费试用</a>
            </span>
        </div>
    </div>
</div>