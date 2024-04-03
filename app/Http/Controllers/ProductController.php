<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $viewData = [];
        $viewData['title'] = 'Products';

        $orderBy = $request->input('order_by', 'newest');

        if ($orderBy === 'newest') {
            $viewData['products'] = Product::orderBy('created_at', 'desc')->get();
        } elseif ($orderBy === 'highest_review') {
            $viewData['products'] = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
                ->selectRaw('products.*, COALESCE(AVG(reviews.rating), 0) AS average_rating')
                ->groupBy('products.id', 'products.name', 'products.description', 'products.stock', 'products.price', 'products.images', 'products.created_at', 'products.updated_at')
                ->orderByDesc('average_rating')
                ->get();

        } elseif ($orderBy === 'most_purchased') {
            $viewData['products'] = Product::select('products.*')
                ->selectRaw('SUM(order_items.quantity) as total_quantity')
                ->join('order_items', 'products.id', '=', 'order_items.product_id')
                ->groupBy('products.id', 'products.name', 'products.description', 'products.stock', 'products.price', 'products.images', 'products.created_at', 'products.updated_at')
                ->orderByDesc('total_quantity')
                ->get();
        } else {
            $viewData['products'] = Product::all();
        }

        return view('product.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Creating Product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Product::validate($request);
        Product::create($request->only(['name', 'description', 'stock', 'price', 'images']));

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();
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
