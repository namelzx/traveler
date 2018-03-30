<?php

namespace app\index\controller;

use think\captcha\Captcha;

class Index
{
    public function index()
    {
        $captcha = new Captcha();
        return $captcha->entry();
//        print phpinfo();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
