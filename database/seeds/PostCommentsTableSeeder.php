<?php

use Illuminate\Database\Seeder;
use App\Models\PostComment;

class PostCommentsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
         $data1 = PostComment::create([
             'post_id' => '1',
             'user_id' => '1',
             'comment' => '<p>Voc&ecirc; recomenda PHP para iniciantes?</p>'
         ]);
     }
}
