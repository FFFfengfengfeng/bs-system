<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-12-23
 * Time: 17:44
 */

namespace app\index\controller;


use think\Db;

class Comp extends Base
{
    public function index()
    {
        $comp = Db::table("company") -> paginate(10);
        $page = $comp -> render();

        $this -> assign([
            "comp" => $comp,
            "page" => $page
        ]);
        return $this -> fetch();
    }
    public function add()
    {
        if (empty($_REQUEST)) {
            return $this -> fetch();
        } else {

            $success = "0";
            $message = "添加失败";
            $map = $_REQUEST;
            $map["time"] = date("Y-m-d H:i:s");
            $data = Db::table('company') -> insert($map);
            if ($data == 1) {
                $success = "1";
                $message = "添加成功";
            }
            $json = array("success" => $success, "message" => $message);

            return json($json);
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        $success = "0";
        $message = "删除失败";
        if (!empty($id)) {
            $data = Db::table('company') -> delete($id);

            if ($data == 1) {
                $success = "1";
                $message = "删除成功";
            }

        } else {
            $success = "0";
            $message = "缺少";
        }

        return json(array("success" => $success, "message" => $message, "id" => $id));
    }
    public function edit($id)
    {
        $data = Db::table('company') -> where('id','=',$id) -> select()[0];
        $this -> assign("data", $data);

        return $this -> fetch('edit');
    }
    public function update()
    {
        $success = "0";
        $message = "修改失败";

        $data = Db::table('company') -> where("id", "=", $_REQUEST["id"]) -> update([
            'name'  => $_REQUEST["name"],
            'addr'  => $_REQUEST["addr"],
            'phone' => $_REQUEST["phone"]
        ]);
        if ($data == 1) {
            $success = "1";
            $message = "添加成功";
        }
        $json = array("success" => $success, "message" => $message);

        return json($json);
    }
}