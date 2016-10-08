// JavaScript Document
$(window).load(function(){
	showWidth();
	baner();
	bannerwidth();
	shwoproimg();
});
$(window).resize(function(){
	showWidth();	
	bannerwidth();
	baner();
	addLoadEvent(shaomao);
	shwoproimg();
});
$(document).ready(function(){
	addLoadEvent(shaomao);
	togglePlatform();
	$(".popdiv a").click(function(){
		$(".popbg").fadeOut();$(".popdiv").fadeOut();						   
	});
	$(".phoneMenu-click").click(function(){
		$(".popbg").fadeIn();$(".popdiv").fadeIn();	
		$('.popbg,.popdiv').bind("touchmove",function(e){  
                e.preventDefault();  
        });
		
	});
	$(".subicon span a").click(function(){
		var index = $(this).index();
		var n = index+1;
		//$(this).css("background","#ffffff");
		//$(this).siblings.removeAttr("style");
		$(this).addClass("active").siblings().removeClass("active");
		$(this).children("em").addClass("pc"+n+"-1");
		$(this).siblings().children("em").removeAttr("class");
		
		$(".subfont span").eq(index).css("display","block").siblings().css("display","none");
	});
	$("input").focus(function () {
		$(".mask-mobile").removeClass("hidden");
	})
	$("input").click(function () {
		$(".mask-mobile").removeClass("hidden");
	})
	$("#login").click(function (e) {
		debugger
		$(".mask-mobile").removeClass("hidden");
		e.preventDefault(); 
	})
	
	 
});
/**
 * [togglePlatform 
 * 根据进入登录页面的终端是手机还是电脑
 * 来控制显示和隐藏
 * ]
 * @return {[type]} [description]
 */
function togglePlatform() {
	var toggle = true;

	var system ={
	    win : false,
	    mac : false,
	    xll : false
	};
	//检测平台
	var p = window.navigator.platform;
	// alert(p);
	system.win = p.indexOf("Win") == 0;
	system.mac = p.indexOf("Mac") == 0;
	system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);

	if(system.win||system.mac||system.xll){//转向后台登陆页面
	    $(".web").show();
	    $(".mobile").hide();
	    // angular.element('body')
	}else{
	    $(".web").hide();
	    $(".mobile").show();
	}
}
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
	
	var h = parseInt($("#zhiwen").height());
	var h2 = parseInt($(".line").height());
	var imgh = parseInt($("#zhiwen").height());
	var w1 = parseInt($(".sc").width());
	var c1 = (imgh-w1)/imgh;
	var bai = (c1/2)*100 + "%";
	$(".line").css({top:-15+"px"});
	$(".sc").css({height:w1+"px",top:bai});
	$(".line,.bg-move").fadeIn();
	//$(".fontp").hide();
	$(".tb1").delay(1800).fadeIn(200);
	$(".tb2").delay(2800).fadeIn(200);
	$(".tb3").delay(3600).fadeIn(200);
	$(".line").animate({top:h+'px'},5000,function(){    
               var  _top = parseInt( $(this).css("top") );

               if( _top == h-h2 ){
				   	 $(this).hide();
                     $(this).css({top:-15+"px"});
					 $(".fontp").hide();
               }
    });
	
	$(".bg-move").animate({top:h+'px'},4950,function(){    
               var  _top = parseInt( $(this).css("top") );
               if( _top == h ){
				     $(this).hide();
                     $(".bg-move").css("top",0+"px");
					 
               }
    });
	timerID = setTimeout(shaomao, 7000); 
}

function baner(){
	var wd = parseInt($(".newsbanner").width());
	var w1 = parseInt($(".bng").width());
	var w2 = parseInt($(".joindiv").width());
	var w3 = parseInt($(".joindiv img").width());
	if(w1>wd){
		var ml = (w1-wd)/2;
		$(".bng").css("margin-left","-"+ml+"px")	;
	}else{
		$(".bng").removeAttr("style");	
	}
	if(w2<w3){
		var a = (w3-w2)/2
		$(".joindiv img").css("margin-left",-a+"px");	
	}else{
		$(".joindiv img").removeAttr("style");	
	}
}

function showWidth(){
	var w = $(".urlp").width();
	var h = $(".contentphone img").height();
	$(".subicon").css({height:w+30+"px",top:h-w+"px"});
	$(".urlp").css("height",w+"px");
}

function bannerwidth(){
	var wd = parseInt($(window).width());
	var wd1 = parseInt($(".sear").width());
	var wd2 = parseInt($(".topbanner").width());
	var h1 = parseInt($(".sear").height());
	var h2 = parseInt($(".topbanner").height());
	console.log(wd1,wd2);
	if(wd1>wd){
		var w = (wd1-wd)/2;
		$(".sear").css("left",-w+"px");
	}else{
		$(".sear").removeAttr("style");
	}
	if(h1==h2){
		$(".banner").show();
	}
	if(h1<h2){
		$(".banner").hide();	
	}
}

function shwoproimg(){
  var w = parseInt($("ul.product li em").width());
  $("ul.product li em").css("height",w+"px");
}