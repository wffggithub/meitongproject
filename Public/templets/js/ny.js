function hdmn(){
var hdmwn=$('#nyfdh .swiper-slide').length*165
var kdwwn=0
var imhe=600/400
if($(window).width()>1000){
   kdwwn=1000
   $('.mxhd').height(450)
   $('#nyfdh .swiper-wrapper').css({width:""});
   
   $('#nyfdh').css({
   width:hdmwn,
   'max-width':""
})
   
}else{
   kdwwn=$(window).width()
   
   $('.mxhd').height($(window).width()/imhe)
   //////////////////////////////////////////////////////////////////////
  // var vilvw=$(window).width()/540
  // vilvw=$(window).width()*vilvw
   //var vilv=540/320
 //  vilv=$(window).width()/vilv
   //$('.mxvid').height(vilv)
  // $('.mxvid').width(vilvw)
   //////////////////////////////////////////////////////////////////////
   var hdmwnn=$('#nyfdh .swiper-slide').length*110
    $('#nyfdh .swiper-wrapper').css({width:hdmwnn});
   $('#nyfdh').css({
   width:'100%',
   'max-width':""
})
   
}

//if(hdmwn>kdwwn){
   
//$('#nyfdh').css({
 //  width:hdmwn,
 //  'max-width':""
//})
//}else{

//$('#nyfdh').css({
 //  width:hdmwn,
 //  'max-width':"100%"
//})
//}






}


function nybann(){//��ҳbanner
   nybbl=500/300
   if ($(window).width()<1200){
      $('.nxwgd').height($(window).width()/nybbl)
   }else{
      $('.nxwgd').height(340)
   }
}


$(function(){ 
hdmn()
nybann()



	//alert(sipheight)

});






$(window).resize(function(e){
hdmn()
nybann()
});





