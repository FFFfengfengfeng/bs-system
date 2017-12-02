<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-12-02
 * Time: 9:54
 */

namespace app\index\controller;


class Examine extends Base
{
    public function index()
    {
        return $this -> fetch();
    }
}