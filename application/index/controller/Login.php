<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-24
 * Time: 9:39
 */

namespace app\index\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        $this->view->engine->layout(false);
        return $this -> fetch('index');
    }
    public function login()
    {
        $user_name     = $_POST['user_name'];
        $user_password = $_POST['user_name'];

        echo json_encode(array("name" => $user_name, "password" => $user_password), JSON_UNESCAPED_UNICODE);
    }
}