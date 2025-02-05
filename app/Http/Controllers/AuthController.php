<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showRegister(): View
    {
        return view('auth.register');
    }

    public function showLogin(): View
    {
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request): RedirectResponse{
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect('/');
        }
        throw ValidationException::withMessages([
            'credentials' => 'These credentials do not match our records.',
        ]);
    }

    public function register(Request $request) : RedirectResponse
    {
       $validated = $request->validate([
            'first_name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'address' => 'required|string',
            'date_of_birth' => 'required',
            'email' => 'required|string|email|max:250|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|min:8',
        ]);
        $user = new User($validated);
        $user->save();

        Auth::login($user);
        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/login');
    }
}
