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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreignUuid('recipient_account_id')->nullable()->references('id')->on('accounts')->onDelete('cascade');

            $table->enum('transaction_type', ['deposit', 'withdrawal', 'transfer', 'interbank_transfer']);
            $table->decimal('amount', 15, 2);
            $table->enum('currency', ['USD', 'HTG']);
            $table->enum('status',['pending', 'success', 'failed'])->default('pending');
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
