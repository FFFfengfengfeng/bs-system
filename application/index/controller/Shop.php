<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-28
 * Time: 14:52
 */

namespace app\index\controller;


class Shop extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}