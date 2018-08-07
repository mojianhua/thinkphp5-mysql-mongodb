<?php
/**
 * 数据库模型基类
 * @author xiaochuan
 */
namespace app\domain\model;

class TestModel extends MongoDbBaseModel
{
    protected $name = 'sell';
    protected $pk = 'id';

    public function testlist(){
        return self::select();
    }

    public function sell_add(){
        $data['id'] = 2;
        $data['name'] = 'test123';
        $save = $this->save($data);
        var_dump($save);

    }
}