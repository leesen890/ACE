<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // 设置添加字段
    protected $table = 'users';
    protected $guarded = []; #拒绝不添加的字段
}
