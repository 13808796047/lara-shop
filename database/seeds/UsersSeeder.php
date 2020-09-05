<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 通过factory方法生成100个用户并保存到数据库中
        factory(User::class, 100)->create();
    }
}
