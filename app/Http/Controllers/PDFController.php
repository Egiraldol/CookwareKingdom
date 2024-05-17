<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function download(int $orderId)
    {
        $viewData = [];
        $viewData['title'] = 'Your purchase';
        $viewData['order'] = Order::findOrFail($orderId);
        $viewData['subtitle'] = 'Order';

        $pdf = app('dompdf.wrapper');
        $pdf = PDF::loadView('pdf.purchase', compact('viewData'));

        return $pdf->stream('Order.pdf');
    }
}
