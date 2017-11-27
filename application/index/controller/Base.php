<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-24
 * Time: 9:44
 */

namespace app\index\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
//        $result = [];
//        foreach ($_COOKIE as $key) {
//            array_push($result, $key);
//        }
//        print_r($_COOKIE) ;
//        if (!isset($_COOKIE['uid'])) {
//            $this -> error('请登录', url('Login/index'), 3);
//        }
        return json($_COOKIE);
    }
}