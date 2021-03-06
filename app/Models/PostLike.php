<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class PostLike extends Model
{
    public function insert($request)
    {

        $insert = new $this;
        $insert->user_id = Auth::User()->id;
        $insert->post_id = $request->post_id;
        $insert->like = true;
        $insert->save();

        return $insert;

    }

    public function list()
    {

        $list = self::select()->orderBy('id', 'desc')->get();

        return $list;

    }

    public function edit($request)
    {

        $edit = self::where('id', '=', $request->id)
        ->update([
            'post_id' => $request->post_id,
            'image_name' => $request->image_name
        ]);

        return $edit;

    }

    public function deleteRegister($request)
    {

        $delete = self::where('id', $request->id)
            ->delete();

        return $delete;

    }
}
