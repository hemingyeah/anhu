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
	jQuery(window).scroll(function(){
		$offset = jQuery(document.body).offset();
		if(jQuery(window).scrollTop()>$offset.top){
			jQuery('.header').addClass("header-scroll");    
		}else{
			jQuery('.header').removeClass('header-scroll');
		}
	});
	addLoadEvent(shaomao);
	jQuery(".popdiv a").click(function(){
		jQuery(".popbg").fadeOut();jQuery(".popdiv").fadeOut();						   
	});
	jQuery(".phoneMenu-click").click(function(){
		jQuery(".popbg").fadeIn();jQuery(".popdiv").fadeIn();	
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
		jQuery(".bng").css("margin-left","-"+ml+"px")	;
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
// }