<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperTransaction
 */
class Transaction extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    protected $fillable = [
        'user_id',
        'account_id',
        'recipient_account_id',
        'transaction_type',
        'amount',
        'status',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function recipientAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'recipient_account_id');
    }

    public function expensiveMonth($transactions)
    {

        $monthExpense[1] = 0;
        for ($i = 1; $i <= 12; $i++) {
            $monthExpense[$i] = 0;
        }

        $expenseTotal = 0;
        foreach ($transactions as $transaction) {
            $expenseTotal += doubleval($transaction->transac_amount);
        }

        for ($i = 1; $i <= 12; $i++) {

            foreach ($transactions as $transaction) {

                $date = Carbon::parse($transaction->transac_date);
               
                //verifier si c'est l'annee en cours
                $transacYear = intval($date->year);
                $actuelYear = intval(Date('Y'));

                if($transacYear == $actuelYear){
                    $amount = doubleval($transaction->transac_amount);
                    if ($date->month == $i) {
                        $monthExpense[$i] += $amount;
                    }
                }
            }
        }

        $expenseMonthPercent['Jan'] = null;

            for ($i = 1; $i <= 12; $i++) {

                switch ($i) {
                    case 1:
                        $expenseMonthPercent['Jan'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 2:
                        $expenseMonthPercent['Fev'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 3:
                        $expenseMonthPercent['Mar'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 4:
                        $expenseMonthPercent['Avr'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 5:
                        $expenseMonthPercent['Mai'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 6:
                        $expenseMonthPercent['Juin'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 7:
                        $expenseMonthPercent['Juil'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 8:
                        $expenseMonthPercent['Aout'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 9:
                        $expenseMonthPercent['Sept'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 10:
                        $expenseMonthPercent['Oct'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 11:
                        $expenseMonthPercent['Nov'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 12:
                        $expenseMonthPercent['Dec'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                }
            }


        return $expenseMonthPercent;
    }

    public function mostExpensiveMonth($transactions)
    {

        $monthExpense[1] = 0;
        for ($i = 1; $i <= 12; $i++) {
            $monthExpense[$i] = 0;
        }

        $expenseTotal = 0;
        foreach ($transactions as $transaction) {
            $expenseTotal += doubleval($transaction->transac_amount);
        }

        for ($i = 1; $i <= 12; $i++) {

            foreach ($transactions as $transaction) {

                $date = Carbon::parse($transaction->transac_date);
                
                //verifier si c'est l'annee en cours
                $transacYear = intval($date->year);
                $actuelYear = intval(Date('Y'));

                if($transacYear == $actuelYear){
                    $amount = doubleval($transaction->transac_amount);
                    if ($date->month == $i) {
                        $monthExpense[$i] += $amount;
                    }
                }
               
            }
        }

        $maxValue = max($monthExpense);
        $mostExpenseMonthPercent[0] = round((($maxValue * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
        array_push($mostExpenseMonthPercent, $maxValue);

        return $mostExpenseMonthPercent;
    }
}
