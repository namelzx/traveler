<?php

namespace app\index\controller;


use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $assign=[
            'title'=>"首页"
        ];
        $this->assign($assign);
        return view();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
