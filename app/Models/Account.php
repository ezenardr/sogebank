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

    protected $fillable = ['user_id', 'account_type', 'account_number','currency', 'running_balance', 'available_balance'];

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

        if(!is_null($accounts->find($id))){
            return true;
        }
        return false;
    }

}
