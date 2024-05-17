<?php

namespace App\Http\Controllers;

use App; // Importar la clase App

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang(Request $request, $locale = null)
    {
        if ($locale === null) {
            $locale = $request->input('locale');
        }

        if (in_array($locale, ['en', 'es'])) {
            Session::put('locale', $locale);
        }

        return redirect()->back();
    }
}
