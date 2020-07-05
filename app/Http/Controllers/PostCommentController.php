<?php

namespace App\Http\Controllers;
use App\Models\PostComment;
use Lang;

use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {
        $post_comments = new PostComment();
        $insert = $post_comments->insert($request);

        return back();
    }
}
