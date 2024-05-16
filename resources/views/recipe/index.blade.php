<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach ($viewData["recipes"] as $recipe)
    <div class="col-md-4 col-lg-3">
              <div class="card">
                <img src="{{ $recipe->getImage() }}" class="card-img-top img-card-recipe">
                <div class="card-body text-center">
                  <a href="{{ route('recipe.show', ['id'=> $recipe->getId()]) }}"
                  class="btn bg-primary text-white">{{ $recipe->getName() }}</a>
                </div>
              </div>
    </div>
    @endforeach
</div>
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
@endsection
