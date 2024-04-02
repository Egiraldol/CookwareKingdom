<?php

// By Mariana Gutierrez Jaramillo

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class OrderProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'OrderProducts';
        $viewData['orderProducts'] = OrderProduct::all();

        return view('orderProduct.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Creating OrderProduct';

        return view('orderProduct.create')->with('viewData', $viewData);

    }

    public function save(Request $request): RedirectResponse
    {
        OrderProduct::validate($request);
        OrderProduct::create($request->only(['quantity', 'total']));

        return back();
    }

    public function show(string $id): View
    {
        $viewData = [];
        $orderProduct = OrderProduct::findOrFail($id);
        $viewData['title'] = $orderProduct['name'].' - Online Store';
        $viewData['subtitle'] = 'Show OrderProduct';
        $viewData['orderProduct'] = $orderProduct;

        return view('orderProduct.show')->with('viewData', $viewData);
    }

    public function delete($id): RedirectResponse
    {
        OrderProduct::destroy($id);

        Session::flash('success', 'OrderProduct deleted successfully.');

        return redirect()->route('orderProduct.index');
    }
}
