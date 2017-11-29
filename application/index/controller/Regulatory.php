<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-29
 * Time: 17:48
 */

namespace app\index\controller;


class Regulatory extends Base
{
    public function index()
    {
        return $this -> fetch();
    }
}