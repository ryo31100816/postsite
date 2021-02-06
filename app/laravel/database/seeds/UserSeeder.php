<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一般ユーザー（ログイン用)
        factory(App\User::class)
            ->create([
                'name' => 'ryo',
                'email' => 'ryo@example.com',
                'password' => bcrypt('ryo3110')
            ]);
        // 一般ユーザー
        factory(App\User::class, 50)->create();
    }
}
