<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="{{ $viewData["recipe"]->getImage() }}" class="img-fluid rounded-start" style="object-fit: cover; height: 100%;">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h2 class="card-title fw-bold">{{ $viewData["recipe"]->getName() }}</h2>
                <p class="card-text">{{ $viewData["recipe"]->getDescription() }}</p> 
                <h4 class="mt-4">@lang('app.recipe.ingredients')</h4>
                <ul class="list-unstyled">
                    @foreach ($viewData['ingredients'] as $ingredient)
                        <li><i class="fas fa-check me-2"></i>{{ $ingredient }}</li>
                    @endforeach
                </ul> 
                <h4>@lang('app.recipe.instructions')</h4>
                <ol class="list-unstyled">
                    @foreach ($viewData['instructions'] as $instruction)
                        <li><span class="badge  bg-secondary me-2">@lang('app.recipe.step') {{ $loop->index + 1 }}</span>{{ $instruction }}</li>
                    @endforeach
                </ol> 
            </div>
        </div>
    </div>
</div>
@endsection

