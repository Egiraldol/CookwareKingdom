<?php

namespace App\Interfaces;

interface DownloadDocument
{
    public function download(int $orderId);
}
