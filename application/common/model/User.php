<?php

namespace app\common\model;

use think\Model;

class User extends Model
{
    //设置表名和主键
    protected $table='shop_users';
    protected $pk='uid';
}
