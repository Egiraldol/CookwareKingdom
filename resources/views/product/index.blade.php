@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="row">
        @foreach ($viewData['products'] as $product)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body ">
                    <h5 style="font-weight: bold; text-align:center;">{{ $product->getName() }}</h5>
                    <img src="{{ $product->getImages() }}" alt="Product Image" style=" display: block; max-width: 100px; max-height: 100px; margin: 0 auto;  ">
                    <p >{{ $product->getDescription() }}</p>
                    <p style="text-align: left;">Stock: {{ $product->getStock() }}</p>
                    <p>${{ number_format($product->getPrice(), 2, ',', '.') }}</p>
                    <p>Recipes: {{ $product->getRecipes() }}</p>
                    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn bg-primary text-white">More details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
