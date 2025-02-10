<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @mixin IdeHelperUsersPreferences
 */
class UsersPreferences extends Model
{
    use HasFactory, HasUuids,Notifiable;

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot(){
        parent::boot();

        static::creating(function ($model) {
            if(empty($model->id)){
                $model -> id = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    protected $fillable = [
        'user_id',
        'two_factor_enabled',
        'two_factor_secret',
        'confirm_transaction',
        'amount_alert',
        'amount_alert_quantity',
        'email_notifications',
        'card_payment',
        'new_login',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
