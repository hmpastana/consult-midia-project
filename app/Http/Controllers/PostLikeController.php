<?php

namespace App\Http\Controllers;
use App\Models\PostLike;
use Lang;

use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Request $request)
    {
        $post = new PostLike();
        $insert = $post->insert($request);

        return back();
    }
}
