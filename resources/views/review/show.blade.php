<!--By Esteban Giraldo Llano-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $viewData["review"]->getTitle() }}</h5>
        <p class="card-text">ID: {{ $viewData["review"]->getId() }}</p>
        <p class="card-text">Name: {{ $viewData["review"]->getName() }}</p>
        <p class="card-text">Description: {{ $viewData["review"]->getDescription() }}</p>
        <p class="card-text">Rating: {{ $viewData["review"]->getRating() }}</p>
        <form method="POST" action="{{ route('review.delete', ['id' => $viewData["review"]->getId()]) }}" onsubmit="return confirm('Are you sure you want to delete your review?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete Review</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
