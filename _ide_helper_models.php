<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $user_id
 * @property string $account_number
 * @property string $account_type
 * @property string|null $running_balance
 * @property string|null $available_balance
 * @property string $currency
 * @property string $status
 * @property string|null $closed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AccountFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereAvailableBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereRunningBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Account whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperAccount {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $user_id
 * @property string $beneficiary_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary whereBeneficiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beneficiary whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperBeneficiary {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $user_id
 * @property string $account_id
 * @property string|null $recipient_account_id
 * @property string $transaction_type
 * @property string $amount
 * @property string $currency
 * @property string $status
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account $account
 * @property-read \App\Models\Account|null $recipientAccount
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereRecipientAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereTransactionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transaction whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTransaction {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $phone_number
 * @property string $date_of_birth
 * @property string|null $phone_verified_at
 * @property string $address
 * @property string|null $profile_photo
 * @property string $role
 * @property string $last_login_atmy
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\UsersPreferences|null $preferences
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastLoginAtmy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $user_id
 * @property int $two_factor_enabled
 * @property string|null $two_factor_secret
 * @property int $confirm_transaction
 * @property int $amount_alert
 * @property int $amount_alert_quantity
 * @property int $email_notifications
 * @property int $card_payment
 * @property int $new_login
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereAmountAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereAmountAlertQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereCardPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereConfirmTransaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereEmailNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereNewLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereTwoFactorEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersPreferences whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUsersPreferences {}
}

