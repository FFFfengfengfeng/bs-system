<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-24
 * Time: 9:39
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

class Login extends Controller
{
    public function index()
    {
        $this->view->engine->layout(false);
        return $this -> fetch('index');
    }
    public function login()
    {
        $map['name'] = $_POST["user_name"];
        $result = Db::table("admin") -> where($map) -> select();
        $success = "0";
        $message = "获取失败";
        $data = null;
        if (empty($result)) {
            $message = "没有该用户";
        } else if ($_POST["user_password"] != $result[0]["password"]) {
            $message = "密码错误";
        } else {
            $data = $result[0]["id"];
        }
        $json = array("success" => $success, "message" => $message, "data" => $data);

        echo json_encode($json);
    }
}