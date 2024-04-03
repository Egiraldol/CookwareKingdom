<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach ($viewData["recipes"] as $recipe)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('recipe.show', ['id'=> $recipe["id"]]) }}"
                class="btn bg-primary text-white">{{ $recipe->getName('name') }}</a>
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
