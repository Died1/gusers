<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        'first_name' =>'System',
        'last_name'  =>'Administrator',
        'username'   =>'admin',
        'email'      =>'admin@gmail.com',
        'password'   =>Hash::make('secret')
    ]);
    }
}
