<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/4 0004
 * Time: 上午 1:12
 */

namespace app\index\controller;


class Send extends Base
{
    public function index()
    {
        return $this -> fetch();
    }
}