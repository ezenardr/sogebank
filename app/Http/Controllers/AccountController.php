<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AccountController extends Controller
{
    public function showAccount() :view {
        $user = auth()->user();
        $accounts = DB::table('accounts')->get()->where('user_id', '=', $user -> id );

        return view('account', ['accounts' => $accounts]);
    }

    public function createAccount(Request $request) :RedirectResponse{
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
            'currency' => $request -> currency
        ]);
        $accounts = DB::table('accounts')->get()->where('user_id', '=', $user -> id );
        return redirect()->route('show-account', ['accounts' => $accounts]);
    } 

    public function accountDetails(Account $account)
    {
        $user = Auth::user();
        $id = $account->id;

        $income  = Account::incomeFor($id,
            Transaction::getIncomeTransactionsByUser($user)
        );

        $expense = Account::expenseFor($id,
            Transaction::getExpenseTransactionsByUser($user)
        );

        $debitCreds = Account::debitCredFor($id);
        $saving = Account::savingFor($id);
        $lastTransactions = Account::lastTransactionFor($id,true);

        // why ?
        $invoices = '';

        return view('account-details',[
            'account' => $account,
            'income' => $income,
            'expense' => $expense,
            'saving' => $saving,
            'transactions' => $lastTransactions,
            'debitCreds' => $debitCreds,
            'invoices' => $invoices
        ]);
    }
}
