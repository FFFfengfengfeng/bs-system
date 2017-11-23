<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24 0024
 * Time: 上午 1:28
 */

namespace app\index\controller;
use think\Controller;

class Company extends Controller
{
    public function index()
    {
        return $this -> fetch();
    }
}