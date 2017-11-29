<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24 0024
 * Time: 上午 1:35
 */

namespace app\index\controller;

use think\Cookie;

class Index extends Base
{
    public function index()
    {
        $navActive = "";
        $isIn      = "";
        $this -> assign([
            "navActive" => $navActive,
            "isIn"      => $isIn
        ]);

        return $this -> fetch();
    }
}