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
            'username'=>'しょうほうじ',
            'mail'=>'masaki@gmail.com',
            'password'=>bcrypt('masaki0000')
        ]);
    }
}
