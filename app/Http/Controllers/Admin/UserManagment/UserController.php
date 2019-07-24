<?php

namespace App\Http\Controllers\Admin\UserManagment;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    public function index()
    {
        return view('admin.user_managment.users.index', [
            'users' => User::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.user_managment.users.create', [

        ]);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        return redirect()->route('admin.user_managment.user.index');
    }

    public function edit(User $user)
    {
        return view('admin.user_managment.users.partials.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', \Illuminate\Validation\Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $request['password'] == null ?: $user->passwrod = bcrypt($request['password']);
        $user->save();

        return redirect()->route('admin.user_managment.user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user_managment.user.index');
    
    }
}
