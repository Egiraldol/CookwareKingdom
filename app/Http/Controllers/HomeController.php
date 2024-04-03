<?php

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
        $viewData['recipes'] = Recipe::take(3)->get();
    
        return view('home.index')->with("viewData", $viewData);
    }
}
