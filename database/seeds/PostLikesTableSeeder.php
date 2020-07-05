<?php

use Illuminate\Database\Seeder;
use App\Models\PostLike;

class PostLikesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
         $data1 = PostLike::create([
             'post_id' => '1',
             'user_id' => '1',
             'like' => true
         ]);
     }
}
