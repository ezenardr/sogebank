<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Account;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperTransaction
 */
class Transaction extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    protected $fillable = [
        'user_id',
        'account_id',
        'recipient_account_id',
        'transaction_type',
        'amount',
        'status',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function recipientAccount(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'recipient_account_id');
    }

    public function getDate()
    {
        $date = Carbon::parse($this->transac_date);
        $date->locale('fr');
        return $date->translatedFormat("d M Y");
    }

    public function getDescription()
    {
        return Str::substr($this->description,0,7) . "...";
    }

    public function forDetails()
    {
        // get detauils, why ?
        return 'sogebank';
    }

    public function getCardNumber()
    {
        // get card Number
        return '123***';
    }

    public function getSum()
    {
        $amount = $this->amount ? $this->amount : $this->transac_amount;
        return Account::balanceFormat($amount);
    }

    public function getIcone()
    {
        // transfert icone - default
        $icone = '<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.0001 11.379C14.4962 11.379 14.9014 11.7831 14.9014 12.2792C14.9014 12.7319 15.2693 13.0988 15.722 13.0988C16.1736 13.0988 16.5416 12.7319 16.5416 12.2792C16.5416 11.1671 15.8171 10.2287 14.8197 9.88556V9.42048C14.8197 8.96884 14.4528 8.59987 14.0001 8.59987C13.5464 8.59987 13.1795 8.96884 13.1795 9.42048V9.88556C12.1822 10.2287 11.4598 11.1671 11.4598 12.2792C11.4598 13.6817 12.5987 14.8206 14.0001 14.8206C14.4962 14.8206 14.9014 15.2257 14.9014 15.7218C14.9014 16.2189 14.4962 16.6231 14.0001 16.6231C13.5041 16.6231 13.1 16.2189 13.1 15.7218C13.1 15.2691 12.732 14.9012 12.2793 14.9012C11.8256 14.9012 11.4598 15.2691 11.4598 15.7218C11.4598 16.8339 12.1822 17.7713 13.1795 18.1144V18.5795C13.1795 19.0332 13.5464 19.4011 14.0001 19.4011C14.4528 19.4011 14.8197 19.0332 14.8197 18.5795V18.1144C15.8171 17.7713 16.5416 16.8339 16.5416 15.7218C16.5416 14.3204 15.4016 13.1804 14.0001 13.1804C13.5041 13.1804 13.1 12.7763 13.1 12.2792C13.1 11.7831 13.5041 11.379 14.0001 11.379ZM20.872 18.5547C21.274 18.7666 21.7691 18.6126 21.9799 18.2136C22.662 16.9248 23.0217 15.4676 23.0217 14C23.0217 9.02671 18.9734 4.97947 14.0001 4.97947C9.02583 4.97947 4.97859 9.02671 4.97859 14C4.97859 18.9743 9.02583 23.0215 14.0001 23.0215C15.446 23.0215 16.8826 22.6722 18.1549 22.0097C18.5569 21.802 18.713 21.3049 18.5042 20.9039C18.2954 20.5039 17.8004 20.3447 17.3973 20.5545C16.3442 21.1044 15.2001 21.3824 14.0001 21.3824C9.93016 21.3824 6.61774 18.071 6.61774 14C6.61774 9.93104 9.93016 6.61862 14.0001 6.61862C18.0701 6.61862 21.3825 9.93104 21.3825 14C21.3825 15.202 21.087 16.3936 20.5309 17.4457C20.318 17.8467 20.471 18.3428 20.872 18.5547ZM14.0001 1.69702C11.6241 1.69702 9.31728 2.37707 7.32983 3.66173C6.94847 3.90771 6.83995 4.41517 7.08592 4.7955C7.33293 5.17583 7.83832 5.28332 8.22072 5.03941C9.94049 3.92735 11.9414 3.33824 14.0001 3.33824C19.8798 3.33824 24.6619 8.12135 24.6619 14C24.6619 19.8797 19.8798 24.6628 14.0001 24.6628C8.12047 24.6628 3.33736 19.8797 3.33736 14C3.33736 11.9609 3.9151 9.97755 5.00959 8.26708C5.2535 7.88468 5.14188 7.37722 4.75948 7.13331C4.37811 6.8894 3.87066 7.00102 3.62778 7.38239C2.36482 9.35744 1.69717 11.6477 1.69717 14C1.69717 20.785 7.21511 26.303 14.0001 26.303C20.7841 26.303 26.3031 20.785 26.3031 14C26.3031 7.21703 20.7841 1.69702 14.0001 1.69702Z" fill="#16DBCC"/>
        </svg>
        ';    

        if(str_contains($this->transac_type, 'depos'))
        {
            $icone = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.7915 9.89534C14.5197 9.89534 16.7388 7.67581 16.7388 4.94767C16.7388 2.21954 14.5197 0 11.7915 0C9.06341 0 6.84387 2.21954 6.84387 4.94767C6.84387 7.67581 9.06341 9.89534 11.7915 9.89534ZM11.2056 2.03946V1.90508C11.2056 1.58125 11.4677 1.31914 11.7915 1.31914C12.115 1.31914 12.3775 1.58125 12.3775 1.90508V2.04024C13.0748 2.18985 13.5994 2.81095 13.5994 3.55236C13.5994 3.87579 13.3369 4.13829 13.0134 4.13829C12.6896 4.13829 12.4275 3.87579 12.4275 3.55236C12.4275 3.34571 12.2591 3.17735 12.0525 3.17735H11.5271C11.3204 3.17735 11.1521 3.34571 11.1521 3.55236C11.1521 3.67071 11.2087 3.78322 11.304 3.85353L11.7915 4.21447L12.9759 5.09103C13.365 5.37892 13.5994 5.83947 13.6025 6.32385V6.32932C13.6052 6.7426 13.447 7.13244 13.1564 7.42659C12.9408 7.64495 12.6712 7.79143 12.3775 7.85315V7.99026C12.3775 8.31409 12.115 8.5762 11.7915 8.5762C11.4677 8.5762 11.2056 8.31409 11.2056 7.99026V7.8551C10.9197 7.79417 10.6568 7.65354 10.4443 7.44338C10.1501 7.15315 9.98685 6.76565 9.98451 6.35236C9.98255 6.02892 10.2431 5.76486 10.5665 5.76291H10.5704C10.8923 5.76291 11.1544 6.02307 11.1564 6.34533C11.1572 6.54756 11.3199 6.71799 11.5333 6.71799C11.8571 6.71604 11.7365 6.71674 12.058 6.71486C12.2659 6.71322 12.4322 6.54443 12.4306 6.33713V6.33166C12.4298 6.21447 12.3732 6.10275 12.2787 6.03283L11.7915 5.67228L10.6068 4.79572C10.2146 4.50509 9.98021 4.04025 9.98021 3.55236C9.98021 2.80938 10.5064 2.1879 11.2056 2.03946Z" fill="#396AFF"/>
        <path d="M3.775 12.7108C3.62481 12.4504 3.29117 12.3598 3.02918 12.511L0.273001 14.102C0.012024 14.2531 -0.0775075 14.5868 0.073157 14.8482L2.89012 19.7272C3.0409 19.9881 3.3745 20.0777 3.63594 19.927L6.39212 18.3356C6.65349 18.1849 6.74267 17.8511 6.59197 17.5898L3.775 12.7108Z" fill="#396AFF"/>
        <path d="M19.5677 11.7367C19.3025 11.3684 18.7892 11.2852 18.4212 11.5504C17.3048 12.3547 15.161 13.8992 14.9907 14.0223C14.9122 14.0891 14.8298 14.1496 14.7439 14.2031C14.4067 14.4152 14.0157 14.5285 13.6075 14.5285H10.8009C10.4774 14.5285 10.2149 14.2664 10.2149 13.9426C10.2149 13.6184 10.4778 13.3566 10.8009 13.3566H13.8024C14.2435 13.3566 14.5966 12.9895 14.5782 12.5477C14.561 12.1285 14.2032 11.8035 13.7837 11.8035H11.4989C11.3442 11.6398 11.1747 11.4898 10.9931 11.3559C10.3684 10.8953 9.59657 10.623 8.76102 10.623C7.27547 10.623 5.79734 11.559 5.18445 12.8082L7.58133 16.9594H12.0774C12.9603 16.9594 13.8298 16.7336 14.595 16.2934C14.8603 16.141 15.1442 15.9578 15.4521 15.7367C16.7419 14.8102 19.379 12.8852 19.381 12.884C19.7497 12.6191 19.8333 12.1051 19.5677 11.7367Z" fill="#396AFF"/>
        </svg>
        ';
        }else if(str_contains($this->transac_type, 'withdraw')){
            $icone = '<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.6452 24.6094H5.67984C4.9859 24.6087 4.32059 24.3327 3.8299 23.842C3.33921 23.3513 3.06322 22.686 3.0625 21.992V14.2543C3.06322 13.5604 3.33921 12.8951 3.8299 12.4044C4.32059 11.9137 4.9859 11.6377 5.67984 11.637H18.6452C19.3391 11.6377 20.0044 11.9137 20.4951 12.4044C20.9858 12.8951 21.2618 13.5604 21.2625 14.2543V21.992C21.2618 22.686 20.9858 23.3513 20.4951 23.842C20.0044 24.3327 19.3391 24.6087 18.6452 24.6094ZM5.67984 13.2776C5.42089 13.2779 5.17263 13.3809 4.98952 13.564C4.80641 13.7471 4.70341 13.9954 4.70312 14.2543V21.992C4.70341 22.251 4.80641 22.4993 4.98952 22.6824C5.17263 22.8655 5.42089 22.9685 5.67984 22.9688H18.6452C18.9041 22.9685 19.1524 22.8655 19.3355 22.6824C19.5186 22.4993 19.6216 22.251 19.6219 21.992V14.2543C19.6216 13.9954 19.5186 13.7471 19.3355 13.564C19.1524 13.3809 18.9041 13.2779 18.6452 13.2776H5.67984Z" fill="#FFBB38"/>
            <path d="M22.3212 20.1917H20.4422C20.2246 20.1917 20.016 20.1053 19.8621 19.9515C19.7083 19.7976 19.6219 19.589 19.6219 19.3714C19.6219 19.1538 19.7083 18.9452 19.8621 18.7914C20.016 18.6375 20.2246 18.5511 20.4422 18.5511H22.3212C22.58 18.5505 22.828 18.4474 23.0109 18.2643C23.1937 18.0812 23.2966 17.8331 23.2969 17.5744V9.83664C23.2967 9.57778 23.1939 9.32954 23.0111 9.14635C22.8282 8.96315 22.5801 8.85995 22.3212 8.85938H9.35593C9.09698 8.85966 8.84871 8.96266 8.66561 9.14577C8.4825 9.32888 8.3795 9.57714 8.37921 9.83609V12.4567C8.37921 12.6743 8.29279 12.8829 8.13895 13.0368C7.98511 13.1906 7.77646 13.277 7.5589 13.277C7.34134 13.277 7.13269 13.1906 6.97885 13.0368C6.82501 12.8829 6.73859 12.6743 6.73859 12.4567V9.83664C6.73917 9.1426 7.01509 8.47715 7.5058 7.98635C7.9965 7.49554 8.6619 7.21947 9.35593 7.21875H22.3212C23.0151 7.21976 23.6802 7.49595 24.1707 7.98673C24.6611 8.47751 24.9369 9.14279 24.9375 9.83664V17.5744C24.9368 18.2681 24.6609 18.9333 24.1705 19.4239C23.68 19.9146 23.015 20.1907 22.3212 20.1917Z" fill="#FFBB38"/>
            <path d="M20.4422 18.7464H3.88281C3.66525 18.7464 3.4566 18.6599 3.30276 18.5061C3.14893 18.3523 3.0625 18.1436 3.0625 17.9261V15.1709C3.0625 14.9533 3.14893 14.7447 3.30276 14.5909C3.4566 14.437 3.66525 14.3506 3.88281 14.3506H20.4422C20.6597 14.3506 20.8684 14.437 21.0222 14.5909C21.1761 14.7447 21.2625 14.9533 21.2625 15.1709V17.9261C21.2625 18.1436 21.1761 18.3523 21.0222 18.5061C20.8684 18.6599 20.6597 18.7464 20.4422 18.7464ZM4.70312 17.1057H19.6219V15.9912H4.70312V17.1057Z" fill="#FFBB38"/>
            </svg>
            ';
        }

        echo $icone;
    }

    public function expense($id = null)
    {
        $type = $this->transac_type ? $this->transac_type : $this->transaction_type;
        $from = $this->transac_from ? $this->transac_from : $this->account_id;
        $to = $this->transac_to ? $this->transac_to : $this->recipient_account_id;

        if(str_contains($type, 'depos')){
            return false;
        }elseif(str_contains($type, 'withd')){
            return true;
        }else{
            // si les comptes ont pour meme user
            if(!is_null($id)){
                if($to == $id){
                    return true;
                }else{
                    return false;
                }
            }else{
                if(Account::isForUser($from))
                {
                    if(Account::isForUser($to))
                    {
                        return false;
                    }
                    return true;
                }
            }
        }
    }

    public function getTag($id = null)
    {
        if(!is_null($id)){
            return $this->expense($id) ? "-" : "+";
        }
        return $this->expense() ? "-" : "+";
    }

    public static function recentTransaction($transactions)
    {
        $week = 1;
        $quantity = 3;
        $date = Carbon::today()->subWeek($week);
        $recents = [];

        foreach($transactions as $transaction)
        {
            if(count($recents) == $quantity )
            return $recents;

            $transactionDate = Carbon::parse($transaction->created_at);
            if(!$transactionDate->lessThan($date))
            {
                array_push($recents,$transaction);
            }
        }   

        return $recents;
    }

    public static function getDay($range)
    {
        switch($range)
        {
            case 1 : return "Mon";
            case 2 : return "Tue";
            case 3 : return "Wed";
            case 4 : return "Thu";
            case 5 : return "Fri";
            case 6 : return "Sat";
            case 7 : return "Sun";
        }
    }

    public static function expenseStats()
    {

    }

    public static function quickTransfert()
    {

    }

    public static function balanceHistory()
    {

    }

    public static function getTransactionsByUser($user){

        $transactions = self::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.transaction_type as transac_type",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
            "transactions.account_id as transac_from",
            "transactions.recipient_account_id as transac_to",
        )
        ->join('users', 'users.id', '=', 'transactions.user_id')
        ->where('users.id', '=', $user->id)
        ->orderByRaw('transac_date DESC')
        ->get();

        return $transactions;
    }

    public static function getTransactionsIdByUser($user,$transac_id){

        $transactions = self::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.transaction_type as transac_type",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
            "transactions.account_id as transac_from",
            "transactions.recipient_account_id as transac_to",
        )
        ->join('users', 'users.id', '=', 'transactions.user_id')
        ->where('users.id', '=', $user->id)
        ->where('transactions.id', '=',$transac_id)
        ->get();

        return $transactions;
    }

    public static function getIncomeTransactionsByUser($user){
        $incomeTransactions = self::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.transaction_type as transac_type",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
            "transactions.account_id as transac_from",
            "transactions.recipient_account_id as transac_to",
        )
        ->join('users', 'users.id', '=', 'transactions.user_id')
        ->join('accounts', 'accounts.id', '=', 'transactions.recipient_account_id')
        ->where('users.id', '<>', $user->id)
        ->where('accounts.user_id', '=', $user->id)
        ->get();

        return $incomeTransactions;
    }

    public static function getExpenseTransactionsByUser($user){
        $expenseTransactions = self::select(
            "transactions.id as transac_id",
            "transactions.description as transac_description",
            "transactions.transaction_type as transac_type",
            "transactions.amount as transac_amount",
            "transactions.created_at as transac_date",
            "transactions.currency as transac_currency",
            "transactions.account_id as transac_from",
            "transactions.recipient_account_id as transac_to",
        )
        ->join('users', 'users.id', '=', 'transactions.user_id')
        ->join('accounts', 'accounts.id', '=', 'transactions.recipient_account_id')
        ->where('users.id', '=', $user->id)
        ->where('accounts.user_id', '<>', $user->id)
        ->get();

        return $expenseTransactions;
    }

    public static function getTransactionsPaginate($itemsAll,$transactions, $currentPage, $perPage)
    {
        $allTransacPaginator = new LengthAwarePaginator($itemsAll, $transactions->count(), $perPage, $currentPage, ['path' => request()->url(), 'query' => request()->query()]);

        return $allTransacPaginator;
    }

    public static function weeklyActivities($transactions,$account_id = null)
    {
        $quantity = 7;
        $expenseTotal = 0;
        $dayExpense[] = [];
        $today = Carbon::today();

        for($i = 0; $i < 2; $i++)
        {
            for ($j = 1; $j <= $quantity; $j++) {
                $dayExpense[$i][$j] = 0;
            }
        }

        foreach ($transactions as $transaction) {

            $tansaction_date = $transaction->transac_date ? $transaction->transac_date : $transaction->created_at;
            $date = Carbon::parse($tansaction_date);
            if($date->isSameYear($today))
            {
                if($date->isSameMonth($today))
                {
                    if($date->isSameWeek($today))
                    {   
                        $transaction_amount = $transaction->transac_amount ? $transaction->transac_amount : $transaction->amount;
                        $amount = doubleval($transaction_amount);
                        $expenseTotal += $amount;

                        for ($i = 1; $i <= $quantity; $i++) {
                            if ($date->dayOfWeek == $i) {
                                if(!is_null($account_id))
                                {
                                    if($transaction->expense($account_id))
                                    {
                                        $dayExpense[0][$i] += $amount;
                                    }else{
                                        $dayExpense[1][$i] += $amount;
                                    }
                                }else{
                                    if($transaction->expense())
                                    {
                                        $dayExpense[0][$i] += $amount;
                                    }else{
                                        $dayExpense[1][$i] += $amount;
                                    }
                                }
                                break;
                            }
                        }
                    }
                }
            }
    
        }
        
        $expenseDayPercent[] = [];

            for($i = 0; $i < 2; $i++ )
            {
                for ($j = 1; $j <= $quantity; $j++) {

                    switch ($j) {
                        case 1:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                        case 2:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                        case 3:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                        case 4:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                        case 5:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                        case 6:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                        case 7:
                            $expenseDayPercent[$i][$j] = round((($dayExpense[$i][$j] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                            break;
                    }
                }
            }

        return $expenseDayPercent;
    }

    public static function expensiveMonth($transactions)
    {

        $expenseTotal = 0;
        $monthExpense[1] = 0;
        for ($i = 1; $i <= 12; $i++) {
            $monthExpense[$i] = 0;
        }

        foreach ($transactions as $transaction) {
            $expenseTotal += doubleval($transaction->transac_amount);
        }

        for ($i = 1; $i <= 12; $i++) {

            foreach ($transactions as $transaction) {

                $date = Carbon::parse($transaction->transac_date);

                //verifier si c'est l'annee en cours
                $transacYear = intval($date->year);
                $actuelYear = intval(Date('Y'));

                if($transacYear == $actuelYear){
                    $amount = doubleval($transaction->transac_amount);
                    // $expenseTotal += $amount;

                    if ($date->month == $i) {
                        $monthExpense[$i] += $amount;
                    }
                }
            }
        }

        $expenseMonthPercent['Jan'] = null;

            for ($i = 1; $i <= 12; $i++) {

                switch ($i) {
                    case 1:
                        $expenseMonthPercent['Jan'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 2:
                        $expenseMonthPercent['Fev'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 3:
                        $expenseMonthPercent['Mar'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 4:
                        $expenseMonthPercent['Avr'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 5:
                        $expenseMonthPercent['Mai'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 6:
                        $expenseMonthPercent['Juin'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 7:
                        $expenseMonthPercent['Juil'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 8:
                        $expenseMonthPercent['Aout'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 9:
                        $expenseMonthPercent['Sept'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 10:
                        $expenseMonthPercent['Oct'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 11:
                        $expenseMonthPercent['Nov'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                    case 12:
                        $expenseMonthPercent['Dec'] = round((($monthExpense[$i] * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
                        break;
                }
            }


        return $expenseMonthPercent;
    }

    public static function mostExpensiveMonth($transactions)
    {

        $monthExpense[1] = 0;
        for ($i = 1; $i <= 12; $i++) {
            $monthExpense[$i] = 0;
        }

        $expenseTotal = 0;
        foreach ($transactions as $transaction) {
            $expenseTotal += doubleval($transaction->transac_amount);
        }

        for ($i = 1; $i <= 12; $i++) {

            foreach ($transactions as $transaction) {

                $date = Carbon::parse($transaction->transac_date);

                //verifier si c'est l'annee en cours
                $transacYear = intval($date->year);
                $actuelYear = intval(Date('Y'));

                if($transacYear == $actuelYear){
                    $amount = doubleval($transaction->transac_amount);
                    if ($date->month == $i) {
                        $monthExpense[$i] += $amount;
                    }
                }

            }
        }

        $maxValue = max($monthExpense);
        $mostExpenseMonthPercent[0] = round((($maxValue * 100) / ($expenseTotal > 0 ? $expenseTotal : 1)), 0);
        array_push($mostExpenseMonthPercent, $maxValue);

        return $mostExpenseMonthPercent;
    }
}
