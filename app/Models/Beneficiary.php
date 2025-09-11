<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @mixin IdeHelperBeneficiary
 */
class Beneficiary extends Authenticatable
{
    use Notifiable, HasUuids;

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

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'beneficiary_id',
    ];

    public static function forUser()
    {
        return DB::table('beneficiaries')
            ->where('user_id', '=', (Auth::user())->id)
            ->join('users', 'beneficiaries.beneficiary_id', '=', 'users.id')
            ->get();
    }


}
