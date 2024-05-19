<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface DownloadDocument {
    public function download(int $orderId);
}