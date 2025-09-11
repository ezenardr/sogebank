<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition()
    {
        // Define account prefixes
        $prefixes = [
            'savings' => '100',
            'checking' => '200',
            'business' => '300',
        ];

        // Randomly select account type
        $accountType = $this->faker->randomElement(['savings', 'checking', 'business']);
        $prefix = $prefixes[$accountType];
        $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        return [
            'user_id' => User::factory(), // Automatically create a user
            'account_type' => $accountType,
            'account_number' => $prefix . $randomNumber,
            'currency' => $this->faker->randomElement(['HTG', 'USD']),
            'running_balance' => $this->faker->randomFloat(2, 500, 10000), // Random balance between 500 - 10,000
            'available_balance' => $this->faker->randomFloat(2, 500, 10000), // Random balance between 500 - 10,000
        ];
    }
}

