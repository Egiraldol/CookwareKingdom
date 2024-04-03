<!--By Esteban Giraldo Llano-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $viewData["review"]->getTitle('title') }}</h5>
        <p class="card-text">ID: {{ $viewData["review"]->getId('id') }}</p>
        <p class="card-text">Name: {{ $viewData["review"]->getName('name') }}</p>
        <p class="card-text">Description: {{ $viewData["review"]->getDescription('description') }}</p>
        <p class="card-text">Rating: {{ $viewData["review"]->getRating('rating') }}</p>
        <form method="POST" action="{{ route('review.delete', ['id' => $viewData["review"]->id]) }}" onsubmit="return confirm('Are you sure you want to delete your review?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete Review</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
