<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function update(Request $request)
    {
        $user = new User();
        $user->updateUser($request);

        return back();
    }
}
