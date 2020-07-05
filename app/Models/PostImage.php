<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class PostImage extends Model
{
    public function insert($post_id, $image)
    {

        $insert = new $this;
        $insert->post_id = $post_id;
        $insert->image_name = $image;
        $insert->save();

        return $insert;

    }
}
