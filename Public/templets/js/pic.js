
var winWidth = 0; 
var winHeight = 0; 
//============================================================================
//��ȡ���ڿ��� 
if (window.innerWidth) {
winHeight = window.innerHeight; 
winWidth = window.innerWidth; 
}
else{
winHeight = document.documentElement.clientHeight; 
winWidth = document.documentElement.clientWidth; 
}
//============================================================================
var hov=1
function pcdh(){

$('#maus .swiper-slide').mousemove(function(){
//alert($(this).attr('idc'))
   shjwidth2=$(window).width()
   if (shjwidth2<1000){return false;}
   if(hov==1){$('.dh-xl',this).stop(true, true).slideToggle();hov=0}
   //$('#'+$(this).attr('idc')).stop(true, true).slideToggle();hov=0;
})



$('#maus .swiper-slide').mouseleave(function(){
    shjwidth2=$(window).width()
   if (shjwidth2<1000){return false;}
   
   if(hov==0){$('.dh-xl',this).stop(true, true).slideToggle();hov=1}
  //$('#'+$(this).attr('idc')).stop(true, true).slideToggle();hov=1;
})



}


function somdh(){
$('.soa').attr("href","javascript:void(0)")
$('.som-dh .swiper-slide').unbind('click').bind('click',function(){
   shjwidth=$(window).width()
   if (shjwidth>1000){return false;}
   if ($('.dh-xl',this).html()=='&nbsp;'){$('.dh-xl',this).html('')}
  $('.dh-xl').addClass("hiddiv");
   $('.dh-xl',this).removeClass("hiddiv");
   $('.hiddiv').hide();
   $('.dh-xl',this).stop(true, true).slideToggle();
   //return false;
});
}





function dh(){



$('.web-right').hover(function(){
   $('.cki-yd').hide();
   $(this).stop().animate({right:0}, 500);
},function(){
   
   $(this).stop().animate({right:-330}, 500);
   $('.cki-yd').show();
});

















auei=$(window).width()
   if (auei>1000){
      $('.dh-xl').hide();
      //$('.dh-xl-bg').hide();
      $("#maus").addClass("web-dh");
      $("#maus").removeClass("som-dh");
      $("#maus .dh-xl").css({width:125});
      pcdh();
   }else{
      $('.dh-xl').hide();
      //$('.dh-xl-bg').show();
      $("#maus").removeClass("web-dh");
      $("#maus").addClass("som-dh");
      $("#maus .dh-xl").css({width:auei});
      
      somdh();
   }

   
   
   
}






var loaded = false;
$(function(){ 
dh()


$('.web-dh .swiper-slide').hover(function(){
   $(this).addClass("on-jsdh");
},function(){
   $(this).removeClass("on-jsdh");
});

$('.dh-xl-w .dh-xl').hover(function(){
   $(".web-dh .swiper-slide").eq($(this).index()).addClass("on-jsdh");
},function(){
   $(".web-dh .swiper-slide").eq($(this).index()).removeClass("on-jsdh");
});


$('.zxly').unbind('click').bind('click',function(){
govTo=$('#webly').offset().top
$("html, body").animate({ scrollTop: govTo-110 }, 800);
});






});






$(window).resize(function(e){
dh()

});





