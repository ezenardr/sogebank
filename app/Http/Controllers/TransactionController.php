<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function showTransaction(Request $request)
    {

        $monthTransac = new Transaction();
        $user = $user = auth()->user();

        $transactions = Transaction::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
        )
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->where('users.id', '=', $user->id)
            ->get();

        
        $incomeTransactions = Transaction::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
        )
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('accounts', 'accounts.id', '=', 'transactions.recipient_account_id')
            ->where('users.id', '<>', $user->id)
            ->where('accounts.user_id', '=', $user->id)
            ->get();

        $expenseTransactions = Transaction::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
        )
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('accounts', 'accounts.id', '=', 'transactions.recipient_account_id')
            ->where('users.id', '=', $user->id)
            ->where('accounts.user_id', '<>', $user->id)
            ->get();

        $allTransactions = $transactions->concat($incomeTransactions);
        $expensiveMonth = $monthTransac->expensiveMonth($allTransactions);
        $mostExpensiveMonth = $monthTransac->mostExpensiveMonth($allTransactions);

        // Paginator prepare
        $perPage = 3;
        $currentPage = request()->input('page',1);

        // All Transactions Paginator
        $itemsAll = $allTransactions->slice(($currentPage - 1 ) * $perPage, $perPage)->values();
        $allTransacPaginator = new LengthAwarePaginator($itemsAll, $allTransactions->count(), $perPage, $currentPage, ['path' => request()->url(), 'query' => request()->query()]);

        // Income Transac Paginator
        $itemsIncome = $incomeTransactions->slice(($currentPage - 1 ) * $perPage, $perPage)->values();
        $incomeTransacPaginator = new LengthAwarePaginator($itemsIncome, $incomeTransactions->count(), $perPage, $currentPage, ['path' => request()->url(), 'query' => request()->query()]);

        // Expense Transac Paginator
        $itemsExpense = $expenseTransactions->slice(($currentPage - 1 ) * $perPage, $perPage)->values();
        $expenseTransacPaginator = new LengthAwarePaginator($itemsExpense, $expenseTransactions->count(), $perPage, $currentPage, ['path' => request()->url(), 'query' => request()->query()]);

        if ($request->input('view') == 'income') {
            return view('transactions', [
                'transactions' => $incomeTransacPaginator,
                'expensiveMonth' => $expensiveMonth,
                'mostExpensiveMonth' => $mostExpensiveMonth
            ]);
        } else if ($request->input('view') == 'expense') {
            return view('transactions', [
                'transactions' =>  $expenseTransacPaginator,
                'expensiveMonth' => $expensiveMonth,
                'mostExpensiveMonth' => $mostExpensiveMonth
            ]);
        } else {
            return view('transactions', [
                'transactions' => $allTransacPaginator,
                'expensiveMonth' => $expensiveMonth,
                'mostExpensiveMonth' => $mostExpensiveMonth
            ]);
        }
    }
}