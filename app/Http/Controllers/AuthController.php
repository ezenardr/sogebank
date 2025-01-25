<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showRegister() :View
    {
        return view('auth.register');
    }
    public function register(Request $request){
        $validated = $request->validate([
            'first_name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create($validated);
//        $user = new User($validated);
        dump($user);
//        return redirect('/');
    }
}
