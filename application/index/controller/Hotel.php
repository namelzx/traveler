<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2018/4/4
 * Time: 21:09
 */

namespace app\index\controller;


use think\Controller;

class Hotel extends Controller
{
    /**
     * @param index 酒店需求提交页
     */
    public function index()
    {
        $assign=[
            'title'=>"发布需求"
        ];
        $this->assign($assign);
        return view();
    }

}