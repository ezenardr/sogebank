<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperAccount
 */
class Account extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string)\Illuminate\Support\Str::uuid();
            }
        });
    }

    public function cards()
    {
        return $this->hasOne(Card::class);
    }


    public static function generateAccountNumber($type)
    {
        $prefixes = [
            'savings' => '100',
            'checking' => '200',
            'business' => '300',
        ];
        $prefix = $prefixes[$type] ?? '999';

        $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        $accountNumber = $prefix . $randomNumber;

        while (DB::table('accounts')->where('account_number', $accountNumber)->exists()) {
            $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $accountNumber = $prefix . $randomNumber;
        }

        return $accountNumber;
    }

    public static function isForUser($id)
    {
        $accounts = (Auth::user())
            ->accounts()
            ->get();

        if (!is_null($accounts->find($id))) {
            return true;
        }
        return false;
    }

    public static function incomeFor($id)
    {
        $incomeTransactions = self::creditFor($id);
        $income = 0;

        foreach ($incomeTransactions as $incomeTransaction) {
            if (empty($incomeTransaction))
                return 0;

            $income += $incomeTransaction->amount;
        }
        return $income;
    }

    public static function expenseFor($id)
    {
        $expenseTransactions = self::debitFor($id);
        $expense = 0;

        foreach ($expenseTransactions as $expenseTransaction) {
            if (empty($expenseTransaction))
                return 0;

            $expense += $expenseTransaction->amount;
        }
        return $expense;
    }

    public static function savingFor($id)
    {
        $saving = 0;
        return $saving;
    }

    public static function creditFor($id)
    {
        return Transaction::where('recipient_account_id', $id)
            ->orderByRaw('created_at DESC')
            ->get();
    }

    public static function debitFor($id)
    {
        return (Auth::user())
            ->transactions()
            ->where('account_id', $id)
            ->orderByRaw('created_at DESC')
            ->get();
    }

    public static function lastTransactionFor($id, $limit = false, $qte = 3)
    {
        $debit = null;
        $credit = null;

        $debit = self::debitFor($id);
        $credit = self::creditFor($id);

        $transactions = $debit->concat($credit)->sortByDesc('created_at');
        return $limit ? $transactions->take($qte) : $transactions;
    }

    public static function balanceFormat($balance)
    {
        return number_format((float)$balance, 2, ',', '.');
    }

    public static function debitCredFor($id)
    {
        return Transaction::weeklyActivities(
            self::lastTransactionFor($id),
            $id
        );
    }

    public function getBalance()
    {
        return self::balanceFormat($this->available_balance);
    }
}
