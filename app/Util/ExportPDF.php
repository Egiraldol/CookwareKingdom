<?php

namespace App\Util;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Interfaces\DownloadDocument;

class ExportPDF implements DownloadDocument
{
    public function download(int $orderId)
    {
        $viewData = [];
        $viewData['title'] = 'Your purchase';
        $viewData['order'] = Order::findOrFail($orderId);
        $viewData['subtitle'] = 'Order';

        $pdf = app('dompdf.wrapper');
        $pdf = PDF::loadView('pdf.purchase', compact('viewData'));

        return $pdf->download('Order.pdf');
    }
}