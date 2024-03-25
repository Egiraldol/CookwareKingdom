@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $viewData["product"]->getName() }}</h5>
        <p class="card-text">ID: {{ $viewData["product"]->getId() }}</p>
        <p class="card-text">Description: {{ $viewData["product"]->getDescription() }}</p>
        <p class="card-text">Stock: {{ $viewData["product"]->getStock() }}</p>
        <p class="card-text">Price: {{ $viewData["product"]->getPrice() }}</p>
        <p class="card-text">Image: {{ $viewData["product"]->getImages() }}</p>
        <p class="card-text">Recipes: {{ $viewData["product"]->getRecipes() }}</p>
        <p class="card-text">Created At: {{ $viewData["product"]->created_at->format('d/m/Y H:i:s') }}</p>

        <form method="POST" action="{{ route('product.delete', ['id' => $viewData["product"]->id]) }}" onsubmit="return confirm('Are you sure you want to delete your product?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete Product</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
