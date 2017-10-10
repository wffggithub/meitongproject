<?php
namespace Home\Controller;

use Think\Controller;

class ProductController extends ComController
{
    /**
     * 产品中心
     */
    public function index()
    {

        if (I('pid') == 0) { //默认显示第一个二级导航数据
            $pid = I('id');
            $channel_id = M('category')->where(['pid'=>$pid])->order('o asc')->getField('id');
        } else {
            $pid = I('pid');
            $channel_id = I('id'); //导航id
        }

        $this->assign('channel_id',$channel_id); //需要高亮的二级导航id
        // TODO 获取banner  pc图
        $bannerPC = M('banner')->field('image_path')->where(['is_position'=>0,'sid'=>$pid])->order('o desc')->find();
        $this->assign('bannerPC',empty($bannerPC) ? [] :  $bannerPC);
        // TODO 获取banner  m图
        $bannerM = M('banner')->field('image_path')->where(['is_position'=>0,'sid'=>$pid])->order('o desc')->find();
        $this->assign('bannerM',empty($bannerM) ? [] :  $bannerM);

        //获取所有二级导航
        $cate_id = M('category')->where(['dir'=>'Product','pid'=>0])->getField('id'); //获取产品中心导航id
        $product_cate = M('category')->field('id,pid,name,link')->where(['pid'=>$cate_id])->order('o asc')->select();
        $product =M('product')->field('id,sid,image_path')->where(['sid'=>$channel_id,'is_home_l'=>0,'is_home'=>0])->order('t desc')->limit(0,10)->select();

        $this->assign('product_cate',empty($product_cate) ? [] : $product_cate);
        $this->assign('product',empty($product) ? [] : $product);

        $this->display();

    }


}