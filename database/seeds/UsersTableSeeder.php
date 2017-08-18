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
            'email' => 'miguellop1992@gmail.com',
            'password' => bcrypt('miguellop1992'),
        ]);
    }
}
