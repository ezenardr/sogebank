<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function showAccount() :view {
        $user = auth()->user();
        $accounts = DB::table('accounts')->get()->where('user_id', '=', $user -> id );

        return view('account', ['accounts' => $accounts]);
    }
    public function createAccount(Request $request){
        $request->validate([
            'account_type' => 'required|in:savings,checking,business',
            'currency' => 'required|in:USD,HTG',
        ]);

        $user = auth()->user();
        $accountNumber = Account::generateAccountNumber($request->account_type);

        Account::create([
            'user_id' => $user->id,
            'account_type' => $request->account_type,
            'account_number' => $accountNumber,
        ]);
        $accounts = DB::table('accounts')->get()->where('user_id', '=', $user -> id );
        return redirect()->route('show-account', ['accounts' => $accounts]);
    }
}
