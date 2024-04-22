<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $viewData = [];
        $viewData['title'] = 'Products';

        $orderBy = $request->input('order_by', 'newest');
        $viewData['products'] = Product::ordenProductosFiltro($orderBy);
        

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $product = Product::with(['recipes', 'reviews'])->findOrFail($id);
        $averageRating = $product->reviews->avg('rating');
        $viewData = [
            'title' => $product->name.' - Online Store',
            'subtitle' => 'Show Product',
            'product' => $product,
            'averageRating' => $averageRating,
        ];

        return view('product.show')->with('viewData', $viewData);
    }
}
