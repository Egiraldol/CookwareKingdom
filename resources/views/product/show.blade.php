@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title" style="font-weight: bold;">{{ $viewData["product"]->getName() }}</h4>
        <img src={{ $viewData["product"]->getImages() }} alt="Product image" >
        <p class="card-text">ID: {{ $viewData["product"]->getId() }}</p>
        <p class="card-text">Description: {{ $viewData["product"]->getDescription() }}</p>
        <p class="card-text">Stock: {{ $viewData["product"]->getStock() }}</p>
        <p>${{ number_format($viewData["product"]->getPrice(), 2, ',', '.') }}</p>
        
        <p class="card-text">Recipes: {{ $viewData["product"]->getRecipes() }}</p>
        <p class="card-text">Publication Date: {{ $viewData["product"]->getCreated_at() }}</p>
        <p class="card-text">

          <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
            <div class="row">
            @csrf
              <div class="col-auto">
                <div class="input-group col-auto">
                  <div class="input-group-text">Quantity</div>
                  <input type="number" min="1" max={{ $viewData["product"]->getStock() }} class="form-control quantity-input"
                  name="quantity" value="1">
                </div>
              </div>
              <div class="col-auto">
                <button class="btn bg-primary text-white" type="submit">Add to cart</button>
              </div>
            </div>
          </form>
        </p>

        <a href="{{ route('review.create', ['product_id'=> $viewData["product"]->getId()]) }}" class="btn bg-primary text-white">Add review</a>

        <form method="POST" action="{{ route('product.delete', ['id' => $viewData["product"]->id]) }}" onsubmit="return confirm('Are you sure you want to delete this product?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete Product</button>
        </form>

      </div>
    </div>
  </div>
</div>



@endsection
