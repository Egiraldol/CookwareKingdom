<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products';
        $viewData['products'] = Product::all();

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
        Product::create($request->only(['name', 'description', 'stock', 'price', 'images', 'recipes']));

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();
    }

    public function show(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product['name'].' - Online Store';
        $viewData['subtitle'] = 'Show Product';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function delete($id): RedirectResponse
    {
        Product::destroy($id);

        Session::flash('success', 'Product deleted successfully.');

        return redirect()->route('product.index');
    }
}
