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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number');
            $table -> date('date_of_birth');
            $table->timestamp('phone_verified_at') ->nullable();
            $table->string('address');
            $table->string('profile_photo') -> nullable();
            $table -> enum('role', ['admin', 'user', 'superadmin', 'employee']) ->default('user');
            $table->timestamp('last_login_atmy') -> default(now());
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('users_preferences', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->uuid('user_id')->index();
            $table -> boolean('two_factor_enabled') -> default(false);
            $table -> string('two_factor_secret') -> nullable();
            $table -> boolean('confirm_transaction') -> default(true);
            $table -> boolean('amount_alert') -> default(false);
            $table -> integer('amount_alert_quantity') -> default(1000);
            $table -> boolean('email_notifications') -> default(true);
            $table -> boolean('card_payment') -> default(true);
            $table -> boolean('new_login') -> default(true);
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->uuid('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('users_preferences');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
