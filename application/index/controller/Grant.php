<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-12-05
 * Time: 14:14
 */

namespace app\index\controller;


use think\Db;

class Grant extends Base
{
    public function index()
    {
        $grant = Db::table("order") -> where("apply_state", "=", "3") -> paginate();

        $page = $grant -> render();

        $this -> assign([
            "grant" => $grant,
            "page"  => $page
        ]);

        return $this -> fetch();
    }
    public function grant()
    {

    }
}