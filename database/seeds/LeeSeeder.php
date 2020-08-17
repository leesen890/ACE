<?php

use Illuminate\Database\Seeder;
use App\Lee;
class LeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #清空一下数据表
    	Lee::truncate();
        #添加模拟数据 100个用户
        factory(Lee::class,100) -> create();

        #id为1的用户名为admin
        Lee::where('id','1') -> update(['username'=>'admin']);
    }
}
