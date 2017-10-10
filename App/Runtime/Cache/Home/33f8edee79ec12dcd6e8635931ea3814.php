<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML /Public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo (C("title")); ?>-产品中心</title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (C("description")); ?>" />
    <meta name="keywords" content="<?php echo (C("keywords")); ?>" />

    <script src="/Public/templets/js/jquery.js"></script>
    <script src="/Public/templets/js/common.js"></script>
    <script src="/Public/templets/js/jquery-1.11.0.min.js"></script>

    
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
    <!--Top-->

    <div class="pc-nb" ><img src="<?php echo ($bannerPC['image_path']); ?>"></div>
    <div class="som-nb"><img src="<?php echo ($bannerPC['image_path']); ?>"></div>

    <!-- nav -->
    <div class="n-nyhd">
        <ul>

            <?php if(is_array($product_cate)): $i = 0; $__LIST__ = $product_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($vo['link'],array('id'=>$vo['id'],'pid'=>$vo['pid']));?>" <?php if($vo['id'] == $channel_id): ?>class='currclass'<?php endif; ?> ><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
    <!-- nav -->

    <!--example-->
    <div id="example1" class="xpcp">
        <div class="sp-slides">
            <?php if(is_array($product)): $k = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="sp-slide <?php if($k == 1): ?>sp-selected<?php endif; ?>">
                <img alt="美彤品牌展示" class="sp-image" src="<?php echo ($vo['image_path']); ?>" />
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <br />

    </div>
    <!--example-->

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

    <!--相册-->
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#example1').sliderPro({
                width: 501,
                height: 730,
                //aspectRatio: 1.5,
                visibleSize: '100%',
                forceSize: 'fullWidth',

                //width: 960,
                //height: 500,
                arrows: true,
                buttons: false,
                waitForLayers: true,
                thumbnailWidth: 80,
                thumbnailHeight: 70,
                thumbnailPointer: true,
                autoplay: false,
                autoScaleLayers: false,
                breakpoints: {
                    500: {
                        thumbnailWidth: 80,
                        thumbnailHeight: 70
                    }
                }
            });

        });

    </script>
    <!--相册-->

    <!-- common js -->
    <script type="text/javascript">
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
    <!-- common js -->

</body>

</html>