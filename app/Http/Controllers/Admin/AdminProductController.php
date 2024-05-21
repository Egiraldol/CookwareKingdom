<?php

// By Mariana Gutierrez Jaramillo

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Products - Online Store';
        $viewData['products'] = Product::all();

        return view('admin.product.index')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
{
    Product::validate($request);

    if ($request->hasFile('images')) {
        $name = $request->input('name');
        $filename = $name.'.'.$request->file('images')->extension();
        $imagePath = 'img/'.'products'.'/'.$filename;
        $request->file('images')->move(public_path('img/products'),$filename);

    }

    Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'stock' => $request->input('stock'),
        'price' => $request->input('price'),
        'images' => $imagePath,
    ]);

    Session::flash('success', 'Element created successfully.');

    return redirect()->back();
}

    public function edit($id): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Product - Online Store';
        $viewData['product'] = Product::findOrFail($id);

        return view('admin.product.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id): RedirectResponse
{
    Product::validate($request);
    $product = Product::findOrFail($id);

    if ($request->hasFile('images')) {
        $name = $request->input('name');
        $filename = $name.'.'.$request->file('images')->extension();
        $imagePath = 'img/'.'products'.'/'.$filename;
        $request->file('images')->move(public_path('img/products'),$filename);
    }

    $product->setName($request->input('name'));
    $product->setDescription($request->input('description'));
    $product->setPrice($request->input('price'));
    $product->setStock($request->input('stock'));
    $product->setImages($imagePath);

    $product->save();

    return redirect()->route('admin.product.index');
}

    public function delete($id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        Storage::delete($product->images);
        Product::destroy($id);

        return back();
    }
}
