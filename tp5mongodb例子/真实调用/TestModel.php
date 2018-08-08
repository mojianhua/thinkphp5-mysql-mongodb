<?php
/**
 * 数据库模型基类
 * @author xiaochuan
 */
namespace app\domain\model;

class TestModel extends MongoDbBaseModel
{
    protected $name = 'test1';

    public function sell_list(){
        $all = $this->select();
        //$where['sid|name'] = 5;
        //$where['sid'] = ['between',['1','10']];
        //$all = $this->where($where)->field('name,sid')->select();
        return toarr($all);
    }

    public function sell_add(){
        $data['sid'] = 5;
        $data['name'] = 'sell555';
        $data['age'] = '555';
        $save = $this->save($data);
        var_dump($save);
    }

    public function sell_update(){
        $sell = new TestModel();
        $sell = $sell->where('sid',3)->find();
        $data['name'] = 'sell3333';
        $save = $sell->save($data);
        var_dump($save);
    }

    public function sell_del(){
        $sell = new TestModel();
        $del = $sell->where('sid',3)->delete();
        var_dump($del);
    }
}