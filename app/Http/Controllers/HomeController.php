<?php

// By Esteban Giraldo Llano

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Recipe;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['recipes'] = Recipe::with(['products'])->take(3)->get();
    
        return view('home.index')->with("viewData", $viewData);
    }
}
