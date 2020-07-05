<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
         $data1 = Post::create([
            'user_id' => '1',
            'content' => "<p>Ol&aacute; pessoal, me chamo Hellen Pastana e trabalho com desenvolvimento web h&aacute; tr&ecirc;s anos.</p>
            <p>Desde crian&ccedil;a sonhava em trabalhar na &aacute;rea pois esse mundo de tecnologia sempre me fascinou. A primeira linguagem de programa&ccedil;&atilde;o que aprendi foi o PHP em paralelo com o Laravel Framework. Com o passar do tempo, fui aprimorando meus conhecimentos e busco aprender algo cada dia de passa. No momento, estou estudando React Js pois acredito que ir&aacute; agregar muito na minha carreira.</p>
            <p>Hoje moro e estudo no Canad&aacute; e busco uma oportunidade remota pois sei que isso nos d&aacute; qualidade de vida pois temos mais tempo livre para curtir nossa familia e hobbies.</p>
            <p>Espero fazer parte desse time!</p>
            <p>N&atilde;o esque&ccedil;a de deixar seu like!</p>
            <p>&nbsp;</p>"
         ]);
     }
}
