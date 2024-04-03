<!--By Esteban Giraldo Llano-->

@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center justify-content-center">
    <h1>CookwareKingdom</h1>
    <img src="{{ asset('images\CookWareKingdomLogo.jpg') }}" class="card-img" style="max-width: 500px;" alt="...">
    <p class="fs-5 text-body-secondaray">Explore beyond mere products; flavors, inspiration, and new recipes await you here.</p>
  </div>
  <div class="row justify-content-center mt-4">
    @foreach ($viewData["recipes"] as $recipe)
      <div class="col-md-4 col-lg-3 mb-2">
          <div class="card shadow-sm h-100">
            <div class="card-header text-center bg-card-header">
            <h5 class="card-title">{{ $recipe->getName() }}</h5>
            </div>
            <img src="{{$recipe->getImage()}}" class="img-card">
              <div class="card-body">
                  <h6 class="card-title">You can prepare this delicious recipe with only these products:</h6>
                  <ul>
                    @foreach ($recipe->getProducts() as $product)
                      <li>{{ $product->getName() }}</li>
                    @endforeach
                  </ul>
                  <a href="{{ route('recipe.show', ['id'=> $recipe->getId()]) }}"
                  class="btn bg-primary text-white">Show more</a>
              </div>
          </div>
      </div>
    @endforeach
  </div>
@endsection
