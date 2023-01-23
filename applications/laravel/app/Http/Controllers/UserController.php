<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $users = User::where('name', 'LIKE', "%$request->search%")
                ->orWhere('email', 'LIKE', "%{$request->search}%")
                ->get();


        /* $users = User::all(); */
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

    public function store(StoreUserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->route('users.index');
    }

    public function edit(int $id)
    {
        $user = User::find($id);

        if(!$user){
            return redirect()->route('users.index');
        }

        return view('users/edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, int $id)
    {
        $user = User::find($id);

        if(!$user){
            return redirect()->route('users.index');
        }

        $data = $request->only('name', 'email');
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function delete(int $id)
    {
        $user = User::find($id);

        if(!$user){
            return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index');
    }
}
