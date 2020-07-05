<?php

use Illuminate\Database\Seeder;
use App\Models\PostImage;

class PostImagesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
         $data1 = PostImage::create([
             'post_id' => '1',
             'image_name' => 'dashkit/src/assets/img/posts/personalimage.jpeg'
         ]);
     }
}
