<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids;

    public function preferences(): HasOne
    {
        return $this->hasOne(UsersPreferences::class);
    }

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot(){
        parent::boot();

        static::creating(function ($model) {
            if(empty($model->id)){
                $model -> id = (string) \Illuminate\Support\Str::uuid();
            }
        });

        static::created(function ($user) {
            $user->preferences()->create(); // Create default preferences for new users
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'date_of_birth',
        'email',
        'password',
        'phone_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function Accounts()
    {
        return $this->hasMany(Account::class);
    }

    public static function lastTransaction()
    {
        $last = null;
        return $last;
    }

}
