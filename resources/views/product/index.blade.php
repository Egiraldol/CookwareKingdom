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
                <div class="card-body text-center">
                    <h5>{{ $product->getName() }}</h5>
                    <p>{{ $product->getDescription() }}</p>
                    <p>Stock: {{ $product->getStock() }}</p>
                    <p>Price: {{ $product->getPrice() }}</p>
                    <img src="{{ $product->getImages() }}" alt="Product Image" style="max-width: 100px; max-height: 100px;">
                    <p>Recipes: {{ $product->getRecipes() }}</p>
                    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn bg-primary text-white">More details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
