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
        Schema::create('accounts', function (Blueprint $table) {
            $table->uuid('account_id')->primary();
            $table -> foreignUuid('id') -> references('id') -> on('users') ->onDelete('cascade');
            $table -> string('account_number')->unique();
            $table -> enum('account_type', ['savings', 'checking', 'business']);
            $table -> decimal('balance', 15, 2) -> nullable()->default(0);
            $table -> enum('currency', ['USD', 'HTG']) -> default('HTG');
            $table -> enum('status', ['active', 'inactive', 'closed']) -> default('active');
            $table -> timestamp('closed_at') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
