<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Lang;


use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = new Post();
        $list = $post->list();

        return view('profile', [
            'post_list' => $list
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $post = new Post();
        $insert = $post->insert($request);

        return back();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $post = new Post();
        $insert = $post->deleteRegister($request);

        return back();
    }

}
