<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function showSettings() :View
    {
        $user = DB::table('users')
            ->join('users_preferences', 'users.id', '=', 'users_preferences.user_id')
            ->select('users.*', 'users_preferences.*')
            ->get();
        return view('settings', ['user' => $user]);
    }

    public function updatePreferences(Request $request): RedirectResponse
    {
        $user = auth()->user();
        DB::table('users_preferences')
            ->where('user_id', '=', $user -> id)
            -> update([
                'two_factor_enabled' => $request->has('two_factor_enabled'),
                'confirm_transaction' => $request->has('confirm_transaction'),
                'amount_alert' => $request->has('amount_alert'),
                'email_notifications' => $request->has('email_notifications'),
                'card_payment' => $request->has('card_payment'),
                'new_login' => $request->has('new_login'),
            ]);
        $user = DB::table('users')
            ->join('users_preferences', 'users.id', '=', 'users_preferences.user_id')
            ->select('users.*', 'users_preferences.*')
            ->get();
        return redirect()->route('settings', ['user' => $user]);
    }

    public function changePassword(Request $request): RedirectResponse{
        $user = auth()->user();

        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if(!Hash::check($request -> password, $user -> password)){
            throw ValidationException::withMessages([
                'password' => 'Le mot de passe actuel est incorrect.',
            ]);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back();

    }
}
