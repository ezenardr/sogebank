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
        $user = $user = auth()->user();

        $transactions = Transaction::getTransactionsByUser($user);
        $incomeTransactions = Transaction::getIncomeTransactionsByUser($user);
        $expenseTransactions = Transaction::getExpenseTransactionsByUser($user);

        $allTransactions = $transactions->concat($incomeTransactions);
        $expensiveMonth = Transaction::expensiveMonth($allTransactions);
        $mostExpensiveMonth = Transaction::mostExpensiveMonth($allTransactions);

        // Paginator prepare
        $perPage = 3;
        $currentPage = request()->input('page',1);

        // All Transactions Paginator
        $itemsAll = $allTransactions->slice(($currentPage - 1 ) * $perPage, $perPage)->values();
        $allTransacPaginator = Transaction::getTransactionsPaginate($itemsAll,$allTransactions,$currentPage, $perPage);

        // Income Transac Paginator
        $itemsIncome = $incomeTransactions->slice(($currentPage - 1 ) * $perPage, $perPage)->values();
        $incomeTransacPaginator = Transaction::getTransactionsPaginate($itemsIncome ,$incomeTransactions,$currentPage, $perPage);

        // Expense Transac Paginator
        $itemsExpense = $expenseTransactions->slice(($currentPage - 1 ) * $perPage, $perPage)->values();
        $expenseTransacPaginator = Transaction::getTransactionsPaginate($itemsExpense  ,$expenseTransactions,$currentPage, $perPage);

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