<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
