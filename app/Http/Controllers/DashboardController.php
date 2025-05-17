<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\Transaction;
use App\Charts\ExpenseStat; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
        $user = Auth::user();
        $incomeTransactions = Transaction::getIncomeTransactionsByUser($user);
        $expenseTransactions = Transaction::getExpenseTransactionsByUser($user);
        $allTransactions =  $incomeTransactions->concat($expenseTransactions)->sortByDesc('transac_date');

        $recentTransaction = Transaction::recentTransaction(
            $allTransactions
        );
        $weeklyActivities = Transaction::weeklyActivities(
            $allTransactions
        );
        // view expenseStat
        $expenseStats = new ExpenseStat();;

        $beneficiaries = Beneficiary::forUser();
        $accounts = DB::table('accounts')->get()->where('user_id', '=', (Auth::user())->id );

        // no view
        $balanceHistory = '';

        return view('dashboard',[
            'recentTransaction' => $recentTransaction,
            'weeklyActivities' => $weeklyActivities,
            'expenseStats' => $expenseStats,
            'beneficiaries' => $beneficiaries,
            'accounts' => $accounts,
            'balanceHistory' => $balanceHistory
        ]);
   }
}
