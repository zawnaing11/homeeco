<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'zawnaing',
            'email' => 'zawnaing@gmail.com',
            'password' => bcrypt('password')
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'master',
            'guard_name' => 'web'
        ]);
    }
}
