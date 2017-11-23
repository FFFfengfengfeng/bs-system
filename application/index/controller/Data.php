<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-23
 * Time: 16:19
 */

namespace app\index\controller;
use think\Controller;

class Data extends Controller
{
    public function index()
    {
        return $this -> fetch();
    }
}