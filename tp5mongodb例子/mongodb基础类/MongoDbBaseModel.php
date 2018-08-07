<?php
/**
 * 数据库模型基类
 * @author xiaochuan
 */
namespace app\domain\model;
use think\Config;
use think\Model;

import('org.mongodb.Connection', EXTEND_PATH);
import('org.mongodb.Builder', EXTEND_PATH);
import('org.mongodb.Query', EXTEND_PATH);

class MongoDbBaseModel extends Model
{
    // 设置当前模型的数据库连接
    protected $connection = [];

    /**
     * 构造方法
     * @access public
     * @param array|object $data 数据
     */
    public function __construct($data = [])
    {
        //  数据库连接方式改为mongodb连接，
        $config_file = CONF_PATH . 'mongodb/mongo.php';
        $config = Config::load($config_file, '', 'mongo');
        if(!empty($config)){
            $this->connection = $config;
        }
        parent::__construct($data);
    }
}