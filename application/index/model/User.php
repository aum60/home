<?php
namespace app\index\model;
use think\Model;
use think\Db;

class User extends Model
{

    // 关闭自动写入update_time字段
//    protected $updateTime = false;

    /**
     * 数据查询方法
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function index()
    {
		return Db::name('User')->select();
    }

    /**
     * 添加数据的方法
     * @param $data
     * @return int|string
     */
    public function add($data){
        return Db::name('User')->insert($data);
    }
}
