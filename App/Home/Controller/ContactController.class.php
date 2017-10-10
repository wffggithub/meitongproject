<?php

namespace Home\Controller;

use Think\Controller;

class ContactController extends ComController
{
    public function index()
    {
        if (I('pid') == 0) { //默认显示第一个二级导航数据
            $pid = I('id');
            $channel_id = M('category')->where(['pid'=>$pid])->order('o asc')->getField('id');
        } else { //从关于我们位置跳转来
            $pid = M('contact')->getField('sid');
            $channel_id = M('category')->where(['pid'=>$pid])->order('o asc')->getField('id');//导航id
        }
        $this->assign('channel_id',$channel_id); //需要高亮的二级导航id
        // TODO 获取banner  pc图
        $bannerPC = M('banner')->field('image_path')->where(['is_position'=>0,'sid'=>$pid])->order('o desc')->find();
        $this->assign('bannerPC',empty($bannerPC) ? [] :  $bannerPC);

        $this->display();exit;
    }
}