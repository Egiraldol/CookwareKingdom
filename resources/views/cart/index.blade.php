<!--By Esteban Giraldo Llano-->

@extends('layouts.app')
@section("title", $viewData["title"])
@section("subtitle", $viewData["subtitle"])
@section('content')

<div class="mx-3">
    {{ Breadcrumbs::render('cart.index') }}
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    @if(count($viewData["products"]) > 0)
                        <h1 class="card-title">Products in Cart</h1>
                            <ul class="list-group list-group-flush">
                            @foreach($viewData["products"] as $key => $product)
                                <li class="list-group-item">
                                    Id: {{ $key }} -
                                    Name: {{ $product["name"] }} -
                                    Price: {{ $product["price"] }}
                                    Quantity: {{ session('products')[$product->getId()] }}
                                </li>
                            @endforeach
                            </ul>

                            <div class="mt-3">
                                <a href="{{ route('cart.purchase') }}" class="btn btn-success">
                                <p class="card-text"><b>Purchase</b> (total: ${{ $viewData["total"] }})</p>
                                </a>
                            </div>

                            <div class="mt-3">
                                <a href="{{ route('cart.delete') }}" class="btn btn-danger">Remove All Products from Cart</a>
                            </div>

                    @else
                        <h1 class="card-title">Your cart is empty</h1>
                        <div class="text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/102/102661.png" class="img-fluid" alt="Product image" style="max-width: 100px;">
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('product.index') }}" class="btn btn-primary">View products</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
