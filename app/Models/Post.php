<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\PostImage;

use Auth;

class Post extends Model
{
    public function insert($request)
    {
        // printR($request->toArray());
        $insert = new $this;
        $insert->user_id = Auth::User()->id;
        $insert->content = $request->content;
        $insert->save();

        if ($request->hasFile('image')) {
            $file = Storage::disk('local')->put('public', $request->file('image'));
            $filename = Storage::url($file);

            $insert_image = new PostImage();
            $image_store = $insert_image->insert($insert->id, $filename);

        }

        return $insert;

    }

    public function list()
    {

        $list = self::select(
            'posts.*',
            'post_images.image_name',
            'users.name as user_name'
            )
            ->where('user_id', Auth::User()->id)
            ->join('users', 'user_id', 'users.id')
            ->leftJoin('post_images', 'posts.id', 'post_images.post_id')
            ->orderBy('id', 'desc')
            ->get()
            ->map(function($post){
                $post_comments = PostComment::select(
                    'post_comments.*',
                    'users.name'
                    )
                    ->join('users', 'user_id', 'users.id')
                    ->where('post_id', $post->id)
                    ->get();

                $post_likes = PostLike::select('post_likes.id','users.name')
                    ->join('users', 'user_id', 'users.id')
                    ->where('post_id', $post->id)
                    ->get();

                $post->post_comments = $post_comments;
                $post->post_likes = $post_likes;

                return $post;
            });
            // printR($list);
        return $list;
    }

    public function edit($request)
    {

        $edit = self::where('id', '=', $request->post_id)
        ->update([
            'content' => $request->content,
        ]);

        return $edit;

    }

    public function deleteRegister($request)
    {

        $delete = self::where('id', $request->post_id)
            ->delete();

        return $delete;

    }
}
