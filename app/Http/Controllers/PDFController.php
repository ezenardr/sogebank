<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function generateTransactionPDF(Request $request)
    {
        $user = auth()->user();
        $transactions = Transaction::getTransactionsIdByUser($user,$request->id);
    
        // Charger la vue en HTML
        $html = View::make('pdf.transaction', compact('transactions','user'))->render();

        // Configurer DomPDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        // Créer l'instance DomPDF
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A5', 'portrait');
        $dompdf->render();

        // Télécharger le fichier
        foreach($transactions as $transaction){
            return $dompdf->stream("transaction_{{$transaction->transac_id}}.pdf");
        }
    }
}