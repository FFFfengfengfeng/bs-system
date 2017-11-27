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
        if (!isset($_COOKIE['id'])) {
            $this -> error('请登录', url('Login/index'), 3);
        }
    }
}