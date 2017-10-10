<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends ComController {

	//系统首页
    public function index()
    {
        //首页导航id
        $id = $this->home_channel_id;
        // TODO 获取banner  pc图
        $bannerPC = M('banner')->field('image_path')->where(['is_position'=>0,'sid'=>$id])->order('o desc')->find();
        $this->assign('bannerPC',empty($bannerPC) ? [] :  $bannerPC);
        // TODO 获取banner  m图
        $bannerM = M('banner')->field('image_path')->where(['is_position'=>0,'sid'=>$id])->order('o desc')->find();
        $this->assign('bannerM',empty($bannerM) ? [] :  $bannerM);

        //首页新闻资讯、招商加盟、品牌介绍链接
       /* $links = M('channel')->field('id,pid,title,url')->where(['id'=>['in','15,16,20']])->select();
        $data['links'] = empty($links) ? [] : $links;*/

        //首页产品数据  // TODO 获取产品图
        $cate_id = M('category')->where(['dir'=>'Product','pid'=>0])->getField('id'); //获取产品中心导航id
        $product_cate = M('category')->field('id,pid,name,link')->where(['pid'=>$cate_id])->order('o asc')->select();

        // TODO 首页产品轮播图
        foreach ($product_cate as $k=>$v){
           $product[$v['id']] = M('product')->field('id,sid,image_path')->where(['sid'=>$v['id'],'is_home_l'=>1,'is_home'=>1])->order('t desc')->limit(0,2)->select();
        }

        // TODO 首页产品图
        foreach ($product_cate as $k=>$v){
            $product2[$v['id']] = M('product')->field('id,sid,image_path')->where(['sid'=>$v['id'],'is_home'=>1,'is_home_l'=>0])->order('t desc')->limit(8)->select();
        }

        foreach ($product_cate as $k=>&$v){
           $v['product'] = !empty($product[$v['id']]) ? $product[$v['id']] : []; //轮播图
            $v['product2'] = !empty($product2[$v['id']]) ? $product2[$v['id']] : []; //非轮播图
        }

        $this->assign('product_cate',empty($product_cate) ? [] : $product_cate);

        //终端店铺形象
        $store = M('store')->field('id,sid,image_path')->where(['is_home'=>1])->select();
        $this->assign('store',empty($store) ? [] : $store);

        //新闻资讯
        $latest = M('latest')->field('c.id,c.sid,c.title,c.t')->alias('c')
                                ->join('__CATEGORY__ ch ON ch.id = c.sid')
                                ->order('c.t desc')->limit(0,10)->select();
        foreach ($latest as $k=>&$v){
            $latest_sid = $v['sid'];
            $v['t'] = date('Y-m-d H:i:s',$v['t']);
        }
        $this->assign('latest_sid',$latest_sid);
        $this->assign('latest', empty($latest) ? [] : $latest);

                 
        $this->display();
    }

}