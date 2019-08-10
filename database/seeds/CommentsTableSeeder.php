<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Model\Comment;
use App\Model\Post;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $comments = [];

        $posts = Post::limit(5)->get();
        foreach ($posts as $post) {
            for ($i = 0; $i <= rand(1, 10); $i++) {
                $commentDate = $post->created_at->modify("+{$i} hour");
                $comments[] = [
                    'fullname' => $faker->name,
                    'email' => $faker->email,
                    'comment' => $faker->paragraphs(rand(1, 5), true),
                    'post_id' => $post->id,
                    'created_at' => $commentDate,
                    'updated_at' => $commentDate,
                ];


            }
        }
        comment::truncate();
        comment::insert($comments);


    }
}
