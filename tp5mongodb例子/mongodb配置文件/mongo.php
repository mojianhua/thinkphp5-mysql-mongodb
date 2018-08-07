<?php
/**
 * Mongo配置
 * @author Jim
 */

return [
    // 数据库类型
    'type'            => '\think\mongo\Connection',
    // 服务器地址
    'hostname'        => 'localhost',
    // 数据库名
    'database'        => 'f2c_mongodb',
    // 用户名
    'username'        => '',
    // 密码
    'password'        => '',
    // 端口
    'hostport'        => '27017',
    'pk_convert_id'   => true,
];
