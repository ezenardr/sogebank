<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class ExpenseStat extends Chart
{
    public function __construct()
    {
        parent::__construct();

        // Données par défaut si aucune transaction
        $defaultData = [
            'Alimentation' => 1200,
            'Loyer' => 800,
            'Transport' => 300,
            'Loisirs' => 200
        ];

        try {
            $transactions = Transaction::where('user_id', Auth::id())
                             ->groupBy('category')
                             ->selectRaw('category, sum(amount) as total')
                             ->pluck('total', 'category')
                             ->toArray();
            
            $data = !empty($transactions) ? $transactions : $defaultData;
        } catch (\Exception $e) {
            $data = $defaultData;
        }

        $this->type('pie')
             ->labels(array_keys($data))
             ->options([
                 'responsive' => true,
                 'maintainAspectRatio' => false,
                 'legend' => ['position' => 'right'],
                 'animation' => [
                     'duration' => 2000,
                     'animateScale' => true,
                     'animateRotate' => true
                 ]
             ])
             ->dataset('Dépenses par catégorie', 'pie', array_values($data))
             ->options([
                 'backgroundColor' => [
                     '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                     '#9966FF', '#FF9F40', '#8AC24A', '#3F51B5'
                 ],
                 'borderWidth' => 1
             ]);
    }
}