<?php
/**
 *
 * 版权所有：恰维网络<qwadmin.qiawei.com>
 * 作    者：寒川<hanchuan@qiawei.com>
 * 日    期：2016-01-21
 * 版    本：1.0.0
 * 功能说明：前台公用控制器。
 *
 **/

namespace Home\Controller;

use Think\Controller;
use Vendor\Tree;

class ComController extends Controller
{

    public function _initialize()
    {
        C(setting());
        /*
        $links = M('links')->limit(10)->order('o ASC')->select();
        $this->assign('links',$links);
        */
        //导航
        //一级导航
        $channel = M('category')->field('id,pid,name,link')->where(['pid'=>0])->order('o asc')->select();
        //首页导航id
        $this->home_channel_id = $channel[0]['id'];
        //二级导航
        $channel_two = M('category')->field('id,pid,name,link')->where(['pid'=>['not in','0']])->order('o asc')->select();
        foreach ($channel as $k => &$v) {
            $v['child'] = [];
            foreach ($channel_two as $key => $val) {
                if ($v['id'] == $val['pid']) {
                    $v['child'][] = $val;
                }
            }
        }
        $this->assign('channel', $channel);//导航

        //联系内容
        $info = M('contact')->order('t desc')->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info',$info);

        //获取友情链接
        $friendLink = M('links')->select();
        $this->assign('friendLink',$friendLink);

    }
}