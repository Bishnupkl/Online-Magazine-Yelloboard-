<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([

            'user_type'=>'Admin',
             'name' => 'admin',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt('password'),

       ]);
    }
}
