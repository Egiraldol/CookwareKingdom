<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function download(Order $orderId)
    {
        $viewData = [];
        $viewData['title'] = 'Your purchase';
        $viewData['order'] = Order::findOrFail($orderId);
        $viewData['subtitle'] = 'Order';

        $pdf = Pdf::loadView('pdf.purchase', compact('viewData'));

        return $pdf->stream('purchase.pdf');
    }
}
