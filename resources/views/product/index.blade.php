@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <form action="{{ route('product.index') }}" method="GET" class="mb-3">
        <label for="order_by">Order By:</label>
            <select name="order_by" id="order_by" class="form-control">
                <option value = "random" @if(Request::input('order_by') == 'random') selected @endif> - </option>
                <option value="newest" @if(Request::input('order_by') == 'newest') selected @endif>Newest Products</option>
                <option value="highest_review" @if(Request::input('order_by') == 'highest_review') selected @endif>Highest Review Products</option>
            </select>
        <button type="submit" class="btn btn-primary mt-2">Apply</button>
    </form>

    <div class="row d-flex align-items-stretch">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @foreach ($viewData['products'] as $product)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 style="font-weight: bold; text-align:center;">{{ $product->getName() }}</h5>
                    <div class="container">
                        <img src="{{ $product->getImages() }}" alt="Product Image" style="display: block; width: 100px; height: 100px; object-fit: cover; margin: 0 auto;">
                    </div>
                    <p >{{ $product->getDescription() }}</p>
                    <p style="text-align: left;">Stock: {{ $product->getStock() }}</p>
                    <p>${{ number_format($product->getPrice(), 2, ',', '.') }}</p>
                    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn bg-primary text-white mt-auto">More details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
