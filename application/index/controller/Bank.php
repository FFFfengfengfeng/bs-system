<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-29
 * Time: 17:44
 */

namespace app\index\controller;


class Bank extends Base
{
    public function index()
    {
        return $this -> fetch();
    }
}