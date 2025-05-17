<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string)\Illuminate\Support\Str::uuid();
            }
        });
    }

    public static function getCardsByUser($user)
    {
        return self::select('*')->where('user_id', '=', $user->id)->get();
    }

    public static function getCardByAccountId($id)
    {
        return self::select('*')->where('account_id', '=', $id)->get();
    }

    protected $fillable = ['user_id', 'account_id', 'card_number', 'type', 'cardholder_name', 'expiry_month', 'expiry_year', 'cvv'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
