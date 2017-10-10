function banenr(){
var baw=1920/700
$('.banner,.banner img').width($(window).width())
$('.banner,.banner img').height($(window).width()/baw)

if($(window).width()<1000){
   var trph=335/290
   $('.wthr').height($(window).width()*0.5/trph)
   $('.wthr-1').height($(window).width()*0.5/trph-20)
   $('.wthr-1').width($(window).width()*0.5-20)
   
   $('.ad1-l').height($('.ad1-r').height()+20)
   
   
   var tuw=500/364
   tuw=$(window).width()/tuw
   $('.ihd-p7').height(tuw)
   $('.ihd-p7').width($(window).width())
   
   var tyw=250/364
  tyw=$(window).width()/2/tyw
  $('#swiper-container3').height(tyw*2+tuw)
  
  var gddp=970/560
  gddp=$(window).width()*0.8/gddp
  $('.wb-dp-i').height(gddp)
  
  
   
}else{
   $('.wthr').attr("style","")
   $('.wthr-1,.ad1-l,.ihd-p7,#swiper-container3,.wb-dp-i').attr("style","")
}


}

function hdm(){
var hdmw=$('#swiper-container2 .swiper-slide').length*120
var kdww=0
if($(window).width()>1000){
   kdww=1000
}else{
   kdww=$(window).width()
}

if(hdmw>kdww){
   
$('#swiper-container2 .swiper-wrapper').css({
   width:hdmw,
   'max-width':"100%",
   'padding':0
})
}else{

$('#swiper-container2 .swiper-wrapper').css({
   width:hdmw,
   'max-width':"100%",
   'padding':'0 40px'
})
}

}





$(function(){ 
banenr()
//alert($('#swiper-container2 .swiper-slide').length)
//hdm()


 $(".cki-yd a").click(function(){
   //alert(1)
   opid=$(this).attr("diu")
   $(this).siblings().css({"background":"#30619D"})
   $(this).css({"background":"#fff"})
    goTo=$("#"+opid).offset().top
   $("html, body").animate({ scrollTop: goTo-110 }, 800);
 })
});






$(window).resize(function(e){
banenr()
//hdm()
});





