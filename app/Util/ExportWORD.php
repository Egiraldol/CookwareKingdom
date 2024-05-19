<?php

namespace App\Util;

use App\Models\Order;
use App\Interfaces\DownloadDocument;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class ExportWORD implements DownloadDocument
{
    public function download(int $orderId)
    {
        $order = Order::findOrFail($orderId);

        // Crear una nueva instancia de PhpWord
        $phpWord = new PhpWord();

        // Añadir una nueva sección al documento
        $section = $phpWord->addSection();

        // Añadir contenido al documento
        $section->addTitle("Order #" . $order->getId(), 1);
        $section->addText("Total: $" . $order->getTotal());

        // Añadir una tabla con los detalles de la orden
        $table = $section->addTable();
        $table->addRow();
        $table->addCell()->addText('Item ID');
        $table->addCell()->addText('Product Name');
        $table->addCell()->addText('Price');
        $table->addCell()->addText('Quantity');

        foreach ($order->getOrderItems() as $orderItem) {
            $table->addRow();
            $table->addCell()->addText($orderItem->getId());
            $table->addCell()->addText($orderItem->getProduct()->getName());
            $table->addCell()->addText('$' . $orderItem->getTotal());
            $table->addCell()->addText($orderItem->getQuantity());
        }

        // Guardar el archivo temporalmente
        $filePath = storage_path('app/public/order.docx');
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filePath);

        // Descargar el archivo y eliminarlo después de enviarlo
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}