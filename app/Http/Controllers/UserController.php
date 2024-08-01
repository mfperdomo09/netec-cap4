<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'identification' => 'required',
            'phone' => 'nullable'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'identification' => encrypt($request->identification),
            'phone' => $request->phone
        ]);

        if (!$user) {
            return back()->with('error', 'User not created');
        }

        return redirect()->route('home')->with('success', 'User created');
    }
}
