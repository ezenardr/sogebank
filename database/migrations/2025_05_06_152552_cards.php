<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->uuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('account_id')->references('id')->on('accounts')->onDelete('CASCADE');
            $table->bigInteger('card_number')->unique();
            $table->string('cardholder_name');
            $table->string('expiry_month', 2);
            $table->string('expiry_year', 4);
            $table->string('cvv');
            $table->enum('type', ['mastercard', 'visa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'cards');
    }
};
