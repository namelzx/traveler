<?php

namespace app\index\controller;


class Index
{
    public function index()
    {
//        $captcha = new Captcha();
//        return $captcha->entry();
//        print phpinfo();
//        dump("ss");
        return view();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
