<?php
/*
Template Name: 安乎官网--下载页面模板
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>安乎-专业智能的商业安全服务</title>
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta content="telephone=no" name="format-detection">
<script src="/wp-content/themes/twentysixteen/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentysixteen/js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentysixteen/css/bootstrap.css">
<!-- <script src="/wp-content/themes/twentysixteen/js/unslider.min.js"></script> -->
<!-- <script src="/wp-content/themes/twentysixteen/js/functions.js" type="text/javascript"></script> -->
<script type="text/javascript">
    // JavaScript Document
    jQuery.noConflict();
    // JavaScript Document
    jQuery(window).load(function(){
        showWidth();
        baner();
        bannerwidth();
        shwoproimg();
    });
    jQuery(window).resize(function(){
        showWidth();    
        bannerwidth();
        baner();
        addLoadEvent(shaomao);
        shwoproimg();
    });
    jQuery(document).ready(function(){
        // jQuery(window).scroll(function(){
        //     $offset = jQuery(document.body).offset();
        //     if(jQuery(window).scrollTop()>$offset.top){
        //         jQuery('.header').addClass("header-scroll");    
        //     }else{
        //         jQuery('.header').removeClass('header-scroll');
        //     }
        // });
        addLoadEvent(shaomao);
        jQuery(".popdiv a").click(function(){
            jQuery(".popbg").fadeOutjQuery(".popdiv").fadeOut();                           
        });
        jQuery(".phoneMenu-click").click(function(){
            jQuery(".popbg").fadeInjQuery(".popdiv").fadeIn();  
            jQuery('.popbg,.popdiv').bind("touchmove",function(e){  
                    e.preventDefault();  
            });
            
        });
        jQuery(".subicon span a").click(function(){
            var index = jQuery(this).index();
            var n = index+1;
            jQuery(this).css("background","#ffffff");
            jQuery(this).siblings.removeAttr("style");
            jQuery(this).addClass("active").siblings().removeClass("active");
            jQuery(this).children("em").addClass("pc"+n+"-1");
            jQuery(this).siblings().children("em").removeAttr("class");
            
            jQuery(".subfont span").eq(index).css("display","block").siblings().css("display","none");
        });
        
         
    });
    function addLoadEvent(func) {  
        var oldonload = window.onload;  
        if(typeof window.onload != "function"){  
            window.onload = func;  
        } else {  
            window.onload = function(){  
                oldonload();  
                func();  
            };  
        } 
    } 
    var timerID;
    function shaomao(){
        
        var h = parseInt(jQuery("#zhiwen").height());
        var h2 = parseInt(jQuery(".line").height());
        var imgh = parseInt(jQuery("#zhiwen").height());
        var w1 = parseInt(jQuery(".sc").width());
        var c1 = (imgh-w1)/imgh;
        var bai = (c1/2)*100 + "%";
        jQuery(".line").css({top:-15+"px"});
        jQuery(".sc").css({height:w1+"px",top:bai});
        jQuery(".line,.bg-move").fadeIn();
        jQuery(".fontp").hide();
        jQuery(".tb1").delay(1800).fadeIn(200);
        jQuery(".tb2").delay(2800).fadeIn(200);
        jQuery(".tb3").delay(3600).fadeIn(200);
        jQuery(".line").animate({top:h+'px'},5000,function(){    
                   var  _top = parseInt( jQuery(this).css("top") );

                   if( _top == h-h2 ){
                         jQuery(this).hide();
                         jQuery(this).css({top:-15+"px"});
                         jQuery(".fontp").hide();
                   }
        });
        
        jQuery(".bg-move").animate({top:h+'px'},4950,function(){    
                   var  _top = parseInt( jQuery(this).css("top") );
                   if( _top == h ){
                         jQuery(this).hide();
                         jQuery(".bg-move").css("top",0+"px");
                         
                   }
        });
        timerID = setTimeout(shaomao, 7000); 
    }

    function baner(){
        var wd = parseInt(jQuery(".newsbanner").width());
        var w1 = parseInt(jQuery(".bng").width());
        var w2 = parseInt(jQuery(".joindiv").width());
        var w3 = parseInt(jQuery(".joindiv img").width());
        if(w1>wd){
            var ml = (w1-wd)/2;
            jQuery(".bng").css("margin-left","-"+ml+"px")   ;
        }else{
            jQuery(".bng").removeAttr("style"); 
        }
        if(w2<w3){
            var a = (w3-w2)/2
            jQuery(".joindiv img").css("margin-left",-a+"px");  
        }else{
            jQuery(".joindiv img").removeAttr("style"); 
        }
    }

    function showWidth(){
        var w = jQuery(".urlp").width();
        var h = jQuery(".contentphone img").height();
        jQuery(".subicon").css({height:w+30+"px",top:h-w+"px"});
        jQuery(".urlp").css("height",w+"px");
    }

    function bannerwidth(){
        var wd = parseInt(jQuery(window).width());
        var wd1 = parseInt(jQuery(".sear").width());
        var wd2 = parseInt(jQuery(".topbanner").width());
        var h1 = parseInt(jQuery(".sear").height());
        var h2 = parseInt(jQuery(".topbanner").height());
        console.log(wd1,wd2);
        if(wd1>wd){
            var w = (wd1-wd)/2;
            jQuery(".sear").css("left",-w+"px");
        }else{
            jQuery(".sear").removeAttr("style");
        }
        if(h1==h2){
            jQuery(".banner").show();
        }
        if(h1<h2){
            jQuery(".banner").hide();   
        }
    }

    function shwoproimg(){
      var w = parseInt(jQuery("ul.product li em").width());
      jQuery("ul.product li em").css("height",w+"px");
    }
</script>
<!-- <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet">
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> -->
<link href="/wp-content/themes/twentysixteen/style.css" type="text/css" rel="stylesheet">
</head>

<body>
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
<!--             <li>
                <a href="download">下载</a>
            </li> -->
            <li>
                <a href="news">行业新闻</a>
            </li>
        </ul>
        <a class="login" href="https://service.51anhu.com">登录</a>
        <a class="register" href="https://service.51anhu.com">免费试用</a>
    </div>
</div>
<!--手机端菜单 END-->


<div class="header header-phone" style="background: #fff;">
    <div class="header-div clearfix">
        <a class="logo" href="home"></a>
        <p class="phonew phoneMenu-click"><em></em></p>
        <div class="menu">
          <a href="home">首页</a>
            <!-- <a href="download">下载</a> -->
            <a href="news">行业新闻</a>
            <span>
                <a href="https://service.51anhu.com" class="login">登录</a>
                <a href="https://service.51anhu.com" class="register">免费试用</a>
            </span>
        </div>
    </div>
</div>

<div class="topbanner">
    <img src="/wp-content/themes/twentysixteen/images/banner1.jpg" class="sear" />
    <div class="banner login-test">
          <img src="/wp-content/themes/twentysixteen/images/img1.png" id="zhiwen" />
          <img src="/wp-content/themes/twentysixteen/images/h1.png" class="small" />
          <img src="/wp-content/themes/twentysixteen/images/h2.png" class="big" />
            <div class="fontp tb1"><img src="/wp-content/themes/twentysixteen/images/font1.png" /></div>
            <div class="fontp tb2"><img src="/wp-content/themes/twentysixteen/images/font2.png" /></div>
            <div class="fontp tb3"><img src="/wp-content/themes/twentysixteen/images/font3.png" /></div>
            <div class="sc">
                <div class="line"><img src="/wp-content/themes/twentysixteen/images/line.png" /></div>
                <div class="bgdiv">
                    <div class="bg-move"></div>
                </div>
            </div>
            <div class="text">
                <span>专业智能的商业安全服务</span>
                扫图片 查违禁 防打假
                <a href="#" class="shiyong">立即免费试用</a>
            </div>
    </div>
    <form class="form-horizontal login-box" role="form">
        <div class="form-group cus-form"><strong>登录注册</strong></div>
        <div class="form-group cus-form">
          <label class="hidden">账号</label>
          <input type="text" class="form-control" placeholder="手机/邮箱">
        </div>
        <div class="form-group">
          <label class="hidden">密码</label>
          <input type="password" class="form-control" placeholder="密码">
        </div>
      <div class="form-group cus-form">
          <span class="pull-left">忘记密码</span><span class="pull-right">注册</span>
      </div>
      <div class="form-group">
          <button class="btn btn-default" style="width: 100%;">登录</button>
      </div>
      <div class="mask">
        正在内测，敬请期待。。。
      </div>
    </form>
</div>


<div class="footer">
    <div class="footer-bottom">© 2016 杭州知珠网络科技有限公司 版权所有 浙ICP备16031790号</div>
</div>

</body>

