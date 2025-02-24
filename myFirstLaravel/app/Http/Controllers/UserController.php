<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        // $users = User::all();
        // dd($users);

        $users = User::pluck('name');

        // dd($users);

        return view('users.index', compact('users'));
    }


    public function getUserById($id)
    {
        $user = User::find($id);
        return view('users.user', compact('user'));
    }


}
