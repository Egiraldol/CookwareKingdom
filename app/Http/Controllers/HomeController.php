<?php

// By Esteban Giraldo Llano

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['recipes'] = Recipe::with(['products'])->inRandomOrder()->take(3)->get();

        return view('home.index')->with('viewData', $viewData);
    }
}
