<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\Vedio;

class Index extends Controller
{

    public function index()
    {

		return "<h1>hello world!</h1>";
		$User = new Vedio(); //实例化User对象

		$info = $User->find();

        $this->assign('info', $info);

        return $this->fetch();


    }

    public function add(){
        if($_POST){
            if(!empty($_POST['vurl'])){

                $User = new Vedio(); //实例化User对象
                $info['vname'] = trim($_POST['vname']);
                $info['vurl'] = trim($_POST['vurl']);
                $result = $User->add($info);
                if($result){
                    $this->success("操作成功！","index/index");
                }else{
                    $this->error("没有搞定~", "index/add");
                }

            }else{
                $this->error("没有搞定~", "index/add");
            }
        }else{
            return $this->fetch();
        }

    }

    public function del(){

        $id = Request::instance()->get('id');

        if(is_numeric($id)){
            $Vedio = new Vedio();
            if($Vedio->del($id)){
                $this->success("ok");
            }else{
                $this->error('notgood');
            }
        }else{
            $this->error("erro");
        }
    }
}
