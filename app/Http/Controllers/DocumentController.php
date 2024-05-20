<?php

namespace App\Http\Controllers;

use App\Interfaces\DownloadDocument;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentController extends Controller
{

    public function save(Request $request, int $orderId)
    {
        $format = $request->get('format');
        $downloadInterface = app(DownloadDocument::class,['format'=>$format]);
        return $downloadInterface->download($orderId);
    }

}