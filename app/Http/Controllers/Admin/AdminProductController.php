<?php

namespace App\Http\Controllers\Admin;


use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class AdminProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(['name', 'description', 'stock', 'price', 'images']));

        Session::flash('success', 'Element created successfully.');

        return redirect()->back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Product - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        return view('admin.product.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Product::validate($request);
        $product = Product::findOrFail($id);
        
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));
        $product->setStock($request->input('stock'));
        $product->setImages($request->input('images'));

        $product->save();
        return redirect()->route('admin.product.index');
    } 


    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }
}
