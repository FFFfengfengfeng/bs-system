<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24 0024
 * Time: 上午 1:28
 */

namespace app\index\controller;

class System extends Base
{
    public function index()
    {
        $navActive = "navSystem";
        $this -> assign([
            "navActive" => $navActive
        ]);

        return $this -> fetch();
    }
}