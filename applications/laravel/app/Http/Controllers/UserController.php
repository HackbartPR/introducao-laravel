<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users/index', ['users' => $users]);
    }

    public function show(int $id)
    {
        $user = User::find($id);

        if(!$user){
            return redirect()->route('users.index');
        }

        return view('users/show', ['user'=>$user]);
    }
}
