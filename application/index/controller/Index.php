<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $data = null;

        $data = Db::query('select * from company');

        $this->assign('data', $data);

        return $this->fetch();
    }
}
