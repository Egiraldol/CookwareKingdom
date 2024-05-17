<?php

namespace App\Http\Controllers;

use App\Models\Order;

class CSVExportController extends Controller
{
    public function index(int $orderId)
    {
        $viewData = [];
        $viewData['order'] = Order::findOrFail($orderId);
        $orderData = $viewData['order'];

        $data = [
            ['Order #', $orderData->getId()],
            ['Date', $orderData->getCreatedAt()],
            ['Total', $orderData->getTotal()],
            ['Item ID', 'Product Name', 'Price', 'Quantity'],
        ];

        foreach ($orderData->getOrderItems() as $orderItem) {
            $data[] = [
                $orderItem->getId(),
                $orderItem->getProduct()->getName(),
                $orderItem->getTotal(),
                $orderItem->getQuantity(),
            ];
        }

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="OrderInfo.csv"');
        header('Cache-Control: max-age=0');

        $output = fopen('php://output', 'w');

        foreach ($data as $row) {
            fputcsv($output, $row);
        }

        fclose($output);
        exit();

        return redirect()->back();
    }
}
