<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24 0024
 * Time: 上午 1:31
 */

namespace app\index\controller;

class User extends Base
{
    public function index()
    {
        $navActive = "navUser";
        $this -> assign([
            "navActive" => $navActive
        ]);

        return $this -> fetch();
    }
}