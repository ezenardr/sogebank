<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Beneficiary;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BeneficiaryController extends Controller
{
    public function ShowBeneficiary(): view
    {
        $user = auth()->user();
        $beneficiaries = DB::table('beneficiaries')
                        ->where('user_id', '=', $user->id)
                        ->join('users', 'beneficiaries.beneficiary_id', '=', 'users.id')
                        ->get();
        return view('beneficiary', ['beneficiaries' => $beneficiaries]);
    }

    public function NewBeneficiaryView(): view
    {
        $users = User::limit(50)->get();
        return view('new-beneficiary', ['users' => $users]);
    }

    public function AddBeneficiary(Request $request):RedirectResponse{
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);
        $user = auth()->user();
        $beneficiary = DB::table('users')
                        ->where('email', '=', $request -> email)
                        ->get();
        $new = new Beneficiary([
            'user_id' => $user->id,
            'beneficiary_id' => $beneficiary[0]->id,
        ]);
        $new -> save();

        return redirect()
                ->route('show-beneficiary');
    }

    public function getAccounts($id){
        $accounts = Account::where('user_id', $id)->get();

        return response()->json($accounts);
    }
}
