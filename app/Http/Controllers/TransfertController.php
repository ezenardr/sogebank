<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class TransfertController extends Controller
{
    public function ShowSendMoneyBetweenMyAccount():View{
        $user = auth()->user();
        $accounts = DB::table('accounts')
                    ->where('user_id', '=', $user->id)
                    ->get();
        return view('send-money-to-my-account', ['accounts' => $accounts]);
    }

    public function SendMoneyBetweenMyAccount(Request $request):RedirectResponse{
        $request->validate([
            'account_id' => 'required|min:8',
            'recipient_account_id' => 'required|min:8',
            'amount' => 'required|numeric|min:1',
        ]);
        $fromAccount = Account::find($request->account_id);
        $toAccount = Account::find($request->recipient_account_id);
        $amount = $request -> amount;

        if ($fromAccount->available_balance < $request->amount) {
            throw ValidationException::withMessages([
                'insufficient_funds ' => 'Pas de fonds',
            ]);
        }
        if ($fromAccount->id == $toAccount->id) {
            throw ValidationException::withMessages([
                'same_account ' => 'Transfert Impossible',
            ]);
        }
        if($fromAccount -> currency == "USD" && $toAccount -> currency == "HTG"){
            $amount = $amount * 135;
        }
        DB::beginTransaction();

        try {
            $fromAccount->available_balance -= $request->amount;
            $fromAccount->save();

            $toAccount->available_balance += $amount;
            $toAccount->save();

            Transaction::create([
                'user_id' => auth()->id(),
                'account_id' => $fromAccount->id,
                'recipient_account_id' => $toAccount->id,
                'transaction_type' => 'transfer',
                'amount' => $request->amount,
                'status' => 'success',
                'description' => 'Transfer from account ' . $fromAccount->id . ' to account ' . $toAccount->id,
            ]);

            DB::commit();
            return redirect()->route('show-account');
        } catch (\Exception $e) {
            DB::rollBack();
            throw ValidationException::withMessages([
                'transfer_error ' => 'Le transfert a échoué',
            ]);
        }

    }
}
