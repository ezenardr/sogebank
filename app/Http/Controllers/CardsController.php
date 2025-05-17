<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function showAddCard()
    {
        $user = auth()->user();

        $accounts = DB::table('accounts')->get()->where('user_id', '=', $user->id);
        return view('add-card', ['accounts' => $accounts]);
    }

    public function AddCard(Request $request)
    {
        $request->validate(['type' => 'required',  'account_id' => 'required',]);
        $user = auth()->user();

        $cardNumber = $this->generateCardNumber($request->type);
        $cvv = rand(100, 999);
        $expiryMonth = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
        $expiryYear = date('Y') + rand(2, 5);

        $fullname = $user->first_name . " " . $user->last_name;

        Card::create([
            'user_id' => $user->id,
            'account_id' => $request->account_id,
            'card_number' => $cardNumber,
            'cardholder_name' => strtoupper($fullname),
            'expiry_month' => $expiryMonth,
            'expiry_year' => $expiryYear,
            'cvv' => $cvv,
            'type' => $request->type,
        ]);

        return redirect('/transactions');
    }

    private function generateCardNumber($type)
    {
        $prefix = $type === 'visa' ? '4' : '5';
        $random = '';

        for ($i = 0; $i < 15; $i++) {
            $random .= rand(0, 9);
        }

        return $prefix . substr($random, 1);
    }
}
