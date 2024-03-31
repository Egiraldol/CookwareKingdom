@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["recipe"]->getName('name') }}
                </h5>
                <p class="card-text">{{ $viewData["recipe"]->getDescription('description') }}</p> 
                <h6>Ingredients:</h6>
                <ul>
                    @foreach ($viewData['ingredients'] as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul> 
                <h6>Instructions:</h6>
                <ul>
                    @foreach ($viewData['instructions'] as $instruction)
                        <li>{{ $instruction }}</li>
                    @endforeach
                </ul>  
                <form method="POST" action="{{ route('recipe.delete', ['id' => $viewData['recipe']['id']]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Recipe</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection
