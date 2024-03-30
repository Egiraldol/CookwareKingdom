@extends('layouts.app')
@section("title", $viewData["title"])
@section("subtitle", $viewData["subtitle"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Products in cart</h1>
                <ul>
                @foreach($viewData["products"] as $key => $product)
                    <li>
                        Id: {{ $key }} -
                        Name: {{ $product["name"] }} -
                        Price: {{ $product["price"] }}
                        Quantity: {{ session('products')[$product->getId()] }}
                    </li>
                @endforeach
                </ul>
                <a class="btn btn-outline-secondary mb-2"><b>Total to pay:</b> ${{ $viewData["total"] }}</a>
            <a href="{{ route('cart.delete') }}">Remove all products from cart</a>
        </div>
    </div>
</div>
@endsection