<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [

                'title'=>'Entertianment',
                'status'=>1,
                'description'=>'It is about .................',
                'image'=>'5b5aea58ebb20_entertainment (2).jpg',
                'created_by'=>'1',
                'updated_by'=>'1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),



            ],
        [

            'title'=>'Political',
            'status'=>1,
            'description'=>'It is about .................',
            'image'=>'5b5aeb08a8edd_5b373c341e0c1_p.jpg',
            'created_by'=>'1',
            'updated_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),


        ],
        [

            'title'=>'Business',
            'status'=>1,
            'description'=>'It is about .................',
            'image'=>'5b5aeace466a4_business.jpg',
            'created_by'=>'1',
            'updated_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),




        ],

        [

            'title'=>'Technology',
            'status'=>1,
            'description'=>'It is about .................',
            'image'=>'5b5aeab917265_Technology.jpg',
            'created_by'=>'1',
            'updated_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),




        ],

        [

            'title'=>'Sport',
            'status'=>1,
            'description'=>'It is about .................',
            'image'=>'5b5ae76bd78d9_sport.jpg',
            'created_by'=>'1',
            'updated_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),




        ],
    ]);
    }
}
