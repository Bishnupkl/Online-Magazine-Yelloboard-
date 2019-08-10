<?php

use Illuminate\Database\Seeder;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Subcategories')->insert([
            [
                'category_id'=>1,
                'title'=>'movie',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],

            [
                'category_id'=>1,
                'title'=>'Music',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>2,
                'title'=>'National',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>1,
                'title'=>'International',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>3,
                'title'=>'ShareMarket',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>3,
                'title'=>'Transportation',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>4,
                'title'=>'Computer',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>4,
                'title'=>'Mobile',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>5,
                'title'=>'Football',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            [
                'category_id'=>5,
                'title'=>'Cricket',
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
            ]);
    }
}
