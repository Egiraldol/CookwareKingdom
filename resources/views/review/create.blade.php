@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Make a review</div>
          <div class="card-body">
            @if(Session::has('success'))
              <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('review.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter your name" name="name" value="{{ old('name') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter the date" name="date" value="{{ old('date') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter the title" name="title" value="{{ old('title') }}" />
              <input type="textarea" class="form-control mb-2" placeholder="Enter the review" name="description" value="{{ old('description') }}" />
              <input type="number" class="form-control mb-2" placeholder="Enter the rating (stars)" name="rating" value="{{ old('rating') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
