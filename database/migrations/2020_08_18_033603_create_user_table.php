<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('username') -> comment('账号');
            $table -> string('truename') -> default('未知') -> comment('真实姓名');
            $table -> string('password') -> comment('密码');
            $table -> string('email') -> comment('邮箱');
            $table -> string('phone') -> default('') -> comment('手机号');
            $table -> enum('sex',['先生','女士']) -> default('先生') -> comment('性别');
            $table -> string('last_ip') -> default('') -> comment('登录ip');
            $table -> timestamps();
            $table -> softDeletes(); #软删除 生成一个字段 deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
