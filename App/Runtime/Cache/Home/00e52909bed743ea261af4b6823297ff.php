<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML /Public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo (C("title")); ?>-首页</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (C("description")); ?>" />
    <meta name="keywords" content="<?php echo (C("keywords")); ?>" />

    <script src="/Public/templets/js/jquery.js"></script>
    <script src="/Public/templets/js/common.js"></script>
    <script src="/Public/templets/js/jquery-1.11.0.min.js"></script>

    <!-- 仅首页 -->
    <link href="/Public/templets/css/bootstrap.css" rel="stylesheet" />
    <link href="/Public/templets/css/flexslider.css" rel="stylesheet" />
    <script src="/Public/templets/js/jquery.flexslider-min.js"></script>
    <script src="/Public/templets/js/custom.js"></script>
    <script src="/Public/templets/js/index.js"></script>

    
<!-- common -->
<link href="/Public/templets/hd/idangerous.swiper.css" rel="stylesheet">
<script src="/Public/templets/hd/idangerous.swiper-2.1.min.js"></script>
<link href="/Public/templets/hd/slider-pro.css" rel="stylesheet">
<script src="/Public/templets/hd/jquery.sliderPro.min.js"></script>

<link href="/Public/templets/font/css/fontello.css" rel="stylesheet">
<link href="/Public/templets/font/css/animation.css" rel="stylesheet">
<link href="/Public/templets/css/PublicCss.css" rel="stylesheet" />
<link href="/Public/templets/css/som.css" rel="stylesheet" />
<link href="/Public/templets/css/examples.css" rel="stylesheet" />
<script src="/Public/templets/js/ny.js"></script>
<script src="/Public/templets/js/pic.js"></script>
<script src="/Public/templets/js/jquery.imgscroll.min.js"></script>

<!-- common media css -->
<style>
    @media only screen and (max-width:1000px) {
        #qiao-wrap,
        #BD_QIAO_WEBIM_LITE_WRAP {
            display: none;
        }
        .qq_bt {
            display: none;
        }
    }
</style>
</head>

<body id="in-0">
<!--Top-->
<div class="pc-167"></div>
<div class="web-top">
    <div class="web-logo">
        <h1><a href="<?php echo U('Index/index');?>"><img src="/Public/templets/UploadFiles/logo.png" alt="美彤内衣集合店"></a></h1>
    </div>
    <div class="web-dh" id="maus">
        <?php if(is_array($channel)): $i = 0; $__LIST__ = $channel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='swiper-slide'>
                <a href="<?php echo U($vo['link'],array('id'=>$vo['id'],'pid'=>$vo['pid']));?>" class="dh1a soa" idc="dh-3"><?php echo ($vo["name"]); ?></a>
                <div class="dh-xl">
                    <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><a href="<?php echo U($voo['link'],array('id'=>$voo['id'],'pid'=>$voo['pid']));?>"><?php echo ($voo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>
</div>
<!--Top-->

    <!--Banner-->
    <div class="web-banner">
        <div>
            <section class="topspace blackshadow bg-white">
                <div class="flexslider ind-pic" id="pca">
                    <ul class="slides">
                        <li class="hero"><img src="<?php echo ($bannerPC['image_path']); ?>" alt="美彤集合店" class="thumb" /></li>
                    </ul>
                </div>
                <div class="flexslider ind-pic" id="soma">
                    <ul class="slides">
                        <li class="hero"><img src="<?php echo ($bannerM['image_path']); ?>" alt="美彤集合店" class="thumb" /></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!--Banner-->

    <!--hot-->
    <div class="web-1005">
        <div class="wthr uy1" id="in-1">
            <a href="<?php echo U('Latest/index');?>">
                <div class="wthr-1">
                    <div class="wthr-1-1">NEWS</div>
                    <div class="wthr-1-2">最新资讯</div>
                    <div class="wthr-1-3">The whole category of fast fashion brand leader</div>
                    <div class="wthr-1-4">&nbsp;</div>
                    <div class="wthr-1-5">查看更多 >></div>
                </div>
                <div class="wthr-2">
                    <img src="/Public/templets/UploadFiles/index/hot2.jpg" alt="美彤集合店">
                    <div class="w-sj st"><span class="icon-down-dir"></span></div>
                    <div class="w-sj st2"><span class="icon-right-dir"></span></div>
                </div>
            </a>
        </div>

        <div class="wthr uy2">
            <a href="<?php echo U('About/index');?>">
                <div class="wthr-2">
                    <img src="/Public/templets/UploadFiles/index/hot4.jpg" alt="美彤集合店">
                    <div class="w-sj sb"><span class="icon-up-dir"></span></div>
                    <div class="w-sj sb2"><span class="icon-left-dir"></span></div>
                </div>
                <div class="wthr-1">
                    <div class="wthr-1-1">brand</div>
                    <div class="wthr-1-2">品牌简介</div>
                    <div class="wthr-1-3">Women's brand, China's famous brand, was founded in 2005</div>
                    <div class="wthr-1-4">&nbsp;</div>
                    <div class="wthr-1-5">查看更多 >></div>
                </div>
            </a>
        </div>

        <div class="wthr uy1">
            <a href="<?php echo U('Join/index');?>">
                <div class="wthr-1">
                    <div class="wthr-1-1">star</div>
                    <div class="wthr-1-2">招商加盟</div>
                    <div class="wthr-1-3">China merchants to join
                    </div>
                    <div class="wthr-1-4">&nbsp;</div>
                    <div class="wthr-1-5">查看更多 >></div>
                </div>
                <div class="wthr-2">
                    <img src="/Public/templets/UploadFiles/index/hot6.jpg" alt="美彤内衣加盟">
                    <div class="w-sj st"><span class="icon-down-dir"></span></div>
                    <div class="w-sj st2"><span class="icon-right-dir"></span></div>
                </div>
            </a>
        </div>
        <div class="clear"></div>
    </div>
    <!--hot-->

    <div class="ad1">

        <img src="/Public/templets/img/ad-1.png" alt="美彤内衣官网">
    </div>


    <div class="in-80"></div>


    <div class="swiper-container" id="swiper-container2">
        <div class="swiper-wrapper" id="in-2">
            <?php if(is_array($product_cate)): $k = 0; $__LIST__ = $product_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="swiper-slide <?php if($k == 1 ): ?>active-nav<?php endif; ?>"><span><?php echo ($vo['name']); ?></span></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="in-30"></div>
    <div class="swiper-container" id="swiper-container3">

        <div class="swiper-wrapper">
            <?php if(is_array($product_cate)): $k = 0; $__LIST__ = $product_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="swiper-slide gdka">
                    <div class="ihd ihd-p7 swiper-container" id="nhb-<?php echo ($k); ?>">
                        <div class="swiper-wrapper">
                            <?php if(is_array($vo['product'])): $i = 0; $__LIST__ = $vo['product'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><a href="<?php echo U($vo['link'],array('id'=>$vo['id'],'pid'=>$vo['pid']));?>"><img src="<?php echo ($voo['image_path']); ?>" alt="美彤内衣"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="hd-no"></div>
                    </div>
                    <?php if(is_array($vo['product2'])): $kk = 0; $__LIST__ = $vo['product2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($kk % 2 );++$kk;?><div class="ihd ihd-p<?php echo ($kk); ?>"><a href="<?php echo U($vo['link'],array('id'=>$vo['id'],'pid'=>$vo['pid']));?>"><img src="<?php echo ($vooo['image_path']); ?>" alt="美彤内衣加盟"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="clear"></div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>

    <div class="m-pic"><a href="/product/index.html"></a></div>
    <div class="ad1"><a href="javascript:void(0)" class="zxly"><img src="/Public/templets/img/ad-2.png" alt="咨询窗口"></a></div>

    <div class="wb-dp" id="in-3">
        <div class="wb-dp-t">终端店铺形象的展示</div>
        <div class="swiper-container wb-dp-i">
            <div class="swiper-wrapper">
                <?php if(is_array($store)): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($vo["image_path"]); ?>" alt="美彤内衣沙井直营店"></div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="wb-dp-jt">
            <a href="javascript:void(0)" class="arrow-left"><img src="/Public/templets/img/dp-l.png"></a>
            <a href="javascript:void(0)" class="arrow-right"><img src="/Public/templets/img/dp-r.png"></a>
        </div>
    </div>

    <div class="web-n1000">
        <div class="xw-lisn">
        <?php if(is_array($latest)): $i = 0; $__LIST__ = $latest;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="nbb-li"><a href="<?php echo U('Latest/detail',array('id'=>$vo['id'],'channel_id'=>$vo['sid']));?>"><span class="icon-right-dir"></span><span class="w-titm">[<?php echo ($vo['t']); ?>]</span><?php echo ($vo['title']); ?><div class="clear"></div></a></div><?php endforeach; endif; else: echo "" ;endif; ?>

            <div class="fengge_10"></div>
            <div class="web-1000 te-cen">
                <div align="right" class="btrw-l" id="fenye">
                    <a href="<?php echo U('Latest/index');?>" class="curr" style="width:160px;">查看更多资讯</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="fot" id="webly">
    <div class="f-lx" id="in-4">
        <div class="f-lx-pic"><img src="/Public/templets/img/hsy.png"></div>
        <!--message-->
        <div class="f-lx-ly">
            <div class="fly-1"><span>温馨提示：请留下您的联系方式，我们将第一时间回复您</span>在线留言</div>
            <div class="fly-2">
                <form name="myform" action="<?php echo U('Message/index');?>" enctype="multipart/form-data" method="post" onSubmit="return(form_c());">
                    <input type="hidden" name="action" value="post" />
                    <input type="hidden" name="diyid" value="1" />
                    <input type="hidden" name="do" value="2" />
                    <div class="fly-d-1"><span>姓 名</span><input type="text" maxlength="255" class="upfile" name='name' id='name' value=""></div>
                    <div class="fly-d-2"><span>电 话</span><input type="text" maxlength="255" class="upfile" name='phone' id='tel' value="" onkeyup="ta(this)"
                                                                onBlur="sq(this)" maxlength="11"></div>
                    <div class="clear"></div>
                    <p>请在以下区域输入您的留言内容：</p>
                    <div class="fly-d-3"><textarea rows="5" name='message' id='neirong' maxlength="200"></textarea></div>
                    <div class="fly-d-4">
                        <!--<div class="fly-d-4-l"><input type="text" size=5>
           请输入验证码</div>-->
                        <div class="fly-d-4-r"><input type="submit" value="提交留言" name="submit1"></div>
                        <div class="clear"></div>
                    </div>
                    <input type="hidden" name="dede_fields" value="name,text;tel,text;neirong,multitext" />
                    <input type="hidden" name="dede_fieldshash" value="e589757065baefd1f010e5eb700ea940" />
                </form>
            </div>
        </div>
        <!--message-->
        <div class="clear"></div>
    </div>

    <div class="wb-flog"><img src="/Public/templets/img/logo.png"></div>

    <div class="f-dh">
        <!--footer_nav-->
        <div class="f-dh-l">
            <?php if(is_array($channel)): $k = 0; $__LIST__ = $channel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k != 1 AND $k != 4 AND $k != 7): ?><div class="f-dd">
                        <p><a href="<?php echo U($vo['link'],array('id'=>$vo['id'],'pid'=>$vo['pid']));?>l" class="dh1a soa" idc="dh-1"><?php echo ($vo["name"]); ?></a></p>
                        <ul>
                            <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($voo['link'],array('id'=>$voo['id'],'pid'=>$voo['pid']));?>"><?php echo ($voo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            <div class="f-dd">
                <p><a href="<?php echo U('Join/index');?>">合作加盟</a></p>
                <ul>
                    <li><a href="<?php echo U('Join/index');?>">美彤内衣</a></li>
                </ul>
            </div>

            <div class="clear"></div>
        </div>
        <!-- footer_nav -->

        <!-- footer_company -->
        <div class="f-dh-r">
            <span><?php echo ($info['company']); ?></span>
            <p>地址：<?php echo ($info['addr']); ?></p>
            <p>服务热线：<?php echo ($info['phone']); ?></p>
            <div class="db-2"><img src="/Public/templets/img/db-1.png"></div>
            <div class="db-2"><img src="/Public/templets/img/db-2.png"></div>
            <div class="clear"></div>
        </div>
        <!-- footer_company -->
        <div class="clear"></div>
    </div>
</div>

<div class="box padding-top40" style="background-image: url(/Public/templets/img/f-bg.jpg)" ;>
    <div class="obj-cro unit-cro-big">
        <div class="content-rhead clearFix">
            <ul class="tags fl">
                <li class="active" data-notags="1" style="text-align:center;">
                    <span><font size="2">友情链接:</font></span>
                    <?php if(is_array($friendLink)): $i = 0; $__LIST__ = $friendLink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target='_blank'><?php echo ($vo["title"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

                </li>
            </ul>
        </div>
    </div>
    <div class="content-cooperationmain" style="Padding:10px 23% 50px 23%; background-image: url(/Public/templets/img/f-bg.jpg);"></div>
</div>

<div class="clearfix"></div>
<div class="web-ft"><?php echo (C("footer")); ?>  <?php echo (C("footer-address")); ?></div>
<div class="som-fot">
    <a href="tel:400 600 8888" class="fly" rel="nofollow"><span class="icon-phone"></span>400电话</a>
    <a href="javascript:void(0)" class="zxly"><span class="icon-keyboard"></span>咨询留言</a>
    <a href="<?php echo U('Contact/index',array('pid'=>$info['sid']));?>" target='blank'><span class="icon-location"></span>联系我们</a>
    <div class="clear"></div>
</div>
<div class="sn-50"></div>
    <!--End footer-->



    <!--右侧圆点-->
    <div class="cki-yd">
        <a href="javascript:void(0)" diu="in-0" rel="nofollow"></a>
        <a href="javascript:void(0)" diu="in-1" rel="nofollow"></a>
        <a href="javascript:void(0)" diu="in-2" rel="nofollow"></a>
        <a href="javascript:void(0)" diu="in-3" rel="nofollow"></a>
        <a href="javascript:void(0)" diu="in-4" rel="nofollow"></a>
    </div>
    <!--右侧圆点-->

    <!-- js of index -->
    <script>
        window.onload = function () {
            var mySwiperdma = new Swiper('#vmaus', {
                paginationClickable: true,
                slidesPerView: 'auto'
            })


            var mySwiper1 = new Swiper('#nhb-1', {
                pagination: '#nhb-1 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //  paginationBulletRender: function (index, className) {
                //      return '<span class="' + className + '">' + (index + 1) + '</span>';
                //    }

            })


            var mySwiper2 = new Swiper('#nhb-2', {
                pagination: '#nhb-2 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //  paginationBulletRender: function (index, className) {
                //      return '<span class="' + className + '">' + (index + 1) + '</span>';
                //  }

            })

            var mySwiper3 = new Swiper('#nhb-3', {
                pagination: '#nhb-3 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //paginationBulletRender: function (index, className) {
                //        return '<span class="' + className + '">' + (index + 1) + '</span>';
                //   }

            })

            var mySwiper3 = new Swiper('#nhb-4', {
                pagination: '#nhb-4 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //paginationBulletRender: function (index, className) {
                //        return '<span class="' + className + '">' + (index + 1) + '</span>';
                //   }

            })

            var mySwiper3 = new Swiper('#nhb-5', {
                pagination: '#nhb-5 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //paginationBulletRender: function (index, className) {
                //        return '<span class="' + className + '">' + (index + 1) + '</span>';
                //   }

            })

            var mySwiper3 = new Swiper('#nhb-6', {
                pagination: '#nhb-6 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //paginationBulletRender: function (index, className) {
                //        return '<span class="' + className + '">' + (index + 1) + '</span>';
                //   }

            })

            var mySwiper3 = new Swiper('#nhb-7', {
                pagination: '#nhb-7 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //paginationBulletRender: function (index, className) {
                //        return '<span class="' + className + '">' + (index + 1) + '</span>';
                //   }

            })

            var mySwiper3 = new Swiper('#nhb-8', {
                pagination: '#nhb-8 .hd-no',
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800
                //paginationBulletRender: function (index, className) {
                //        return '<span class="' + className + '">' + (index + 1) + '</span>';
                //   }

            })


            //===========================================


            var tabsSwiper = new Swiper('#swiper-container3', {
                speed: 500,
                onSlideChangeStart: function () {
                    $("#swiper-container2 .swiper-slide.active-nav").removeClass('active-nav')
                    $("#swiper-container2 .swiper-slide").eq(tabsSwiper.activeIndex).addClass(
                        'active-nav')
                }
            })
            $("#swiper-container2 .swiper-slide").on('touchstart mousedown', function (fe) {
                fe.preventDefault()
                $("#swiper-container2 .swiper-slide.active-nav").removeClass('active-nav')
                $(this).addClass('active-nav')
                tabsSwiper.swipeTo($(this).index())
            })
            $("#swiper-container2 .swiper-slide").click(function (de) {
                de.preventDefault()
            })

            //===========================================
            var mySwiperd = new Swiper('#swiper-container2', {
                paginationClickable: true,
                slidesPerView: 'auto'
            })


            var dppic = new Swiper('.wb-dp-i', {
                paginationClickable: true,
                loop: true,
                autoplay: 5000,
                speed: 800

            })


            $('.arrow-left').on('click', function (e) {
                e.preventDefault()
                dppic.swipePrev()
            })
            $('.arrow-right').on('click', function (e) {
                e.preventDefault()
                dppic.swipeNext()
            })

        }

        function ta(obj) {
            var val = $(obj).val().length;
            if (val > 11) {
                alert("至多输入11个字符！");
                $(obj).val($(obj).val().substring(0, 11))
            }
        }
    </script>

    <!-- common js -->
    <script>
        function sq(obj) {
            var val = $(obj).val().length;
            if (val < 11) {
                alert("至少输入11个字符！");
                $(obj).val($(obj).val().substring(0, 11))
            }
        }

        function ta(obj) {
            var val = $(obj).val().length;
            if (val > 11) {
                alert("至多输入11个字符！");
                $(obj).val($(obj).val().substring(0, 11))
            }
        }
    </script>
</body>

</html>