<?php
/**
 * Created by PhpStorm.
 * User: Tenger
 * Date: 2016/11/28
 * Time: 0:32
 */

namespace app\index\model;
use think\Db;
use think\Model;

class Vedio extends Model{

    // 关闭自动写入update_time字段
//    protected $updateTime = false;

    public function find(){
       return Db::name("vedio")->select();
    }

    public function add($data){
        $data['create_time'] = time();
        return Db::name("vedio")->insert($data);
    }

    public function del($id){
        return Db::name("vedio")->delete($id);
    }
}