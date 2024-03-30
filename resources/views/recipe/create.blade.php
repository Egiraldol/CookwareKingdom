@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Create recipe</div>
          <div class="card-body">
            <form method="POST" action="{{ route('recipe.save') }}" class="text-center">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter description" name="description" value="{{ old('description') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter ingredients" name="ingredients" value="{{ old('ingredients') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter instructions" name="instructions" value="{{ old('instructions') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
