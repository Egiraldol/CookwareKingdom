@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<div class="row">
  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ $viewData["product"]->getImages() }}" class="card-img-top" alt="Product image">
    </div>
  </div>
  <div class="col-md-8">
    <div class="card mb-3">
      <div class="card-body">
        <h4 class="card-title" style="font-weight: bold;">{{ $viewData["product"]->getName() }}</h4>
        <p class="card-text">Description: {{ $viewData["product"]->getDescription() }}</p>
        <p class="card-text">Price: ${{ number_format($viewData["product"]->getPrice(), 0, ',', '.') }}</p>

        @guest
        @else
        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
          <div class="row mb-3">
            @csrf
            <div class="col-auto">
              <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                <input type="number" min="1" max="{{ $viewData['product']->getStock() }}" class="form-control quantity-input" name="quantity" value="1">
              </div>
            </div>
            <div class="col-auto">
              <button class="btn bg-primary text-white" type="submit">
                Add to cart
                <i class="fa-solid fa-cart-shopping"></i>
              </button>
            </div>
          </div>
        </form>

        <a href="{{ route('review.create', ['product_id'=> $viewData["product"]->getId()]) }}" class="btn bg-primary text-white mb-3">Add review</a>

        @endguest
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="card-body">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Reviews
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
              @if ($viewData['product']->getReviews()->isEmpty())
                  <p>This product has no reviews</p>
              @else
                  <ul>
                      @foreach ($viewData['product']->getReviews() as $review)
                      <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">{{ $review->getTitle() }}</div>
                            <div class="small">By {{ $review->getName() }}:</div>
                            <div>{{ $review->getDescription() }}</div>
                          </div>
                          <span class="badge custom-badge rounded-pill">{{ $review->getRating() }}</span>
                        </li>
                      </ol>
                      @endforeach
                  </ul>
              @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection
