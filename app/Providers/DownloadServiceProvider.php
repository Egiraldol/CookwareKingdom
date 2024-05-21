<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\DownloadDocument;
use App\Util\ExportCSV;
use App\Util\ExportPDF;
use App\Util\ExportWORD;

class DownloadServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DownloadDocument::class, function ($app, $params){
        $document = $params['format'];
        if ($document == 'pdf'){
            return new ExportPDF();
        }elseif ($document == 'csv'){
            return new ExportCSV();
        }
        });
    }
}