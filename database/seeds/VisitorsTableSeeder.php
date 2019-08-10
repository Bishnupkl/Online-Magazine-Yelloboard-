<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->insert([

            [
              'name' => 'manish dai',
              'user_name' =>'manish dai',
              'email' => 'publisher@gmail.com',
                'password'=>bcrypt('aaaaaa'),
                'phone' => 9843611203,
                'address' => 'ktm',
                'user_type' => 'Publisher',
                'status' => 1,
                'publisher_status' => 1
            ],
            [
                'name' => 'sagar vai',
                'user_name' =>'sagar vai',
                'email' => 'visitor@gmail.com',
                'password'=>bcrypt('aaaaaa'),
                'phone' => 9854382762,
                'address' => 'ktm',
                'user_type' => 'Visitor',
                'status' => 1,
                'publisher_status' => 1
            ],
        ]);
    }
}
