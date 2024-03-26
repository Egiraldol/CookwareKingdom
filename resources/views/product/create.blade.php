@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

    <h1> Creating Product </h1>
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
    <form action="{{ route('product.save') }}" method = "POST" role="form">
        @csrf
        
        <div class = "form-group">
            <h5>Name</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter name" name="name">
        </div>

        <div class = "form-group">
            <h5>Description</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter description" name="description">
        </div>

        <div class = "form-group">
            <h5>Stock</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter stock" name="stock">
        </div>

        <div class = "form-group">
            <h5>Price</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter price" name="price">
        </div>

        <div class = "form-group">
            <h5>Image</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter image" name="images">
        </div>

        <div class = "form-group">
            <h5>Recipes</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter recipes" name="recipes">
        </div>

        <button type="submit" class="btn btn-primary" value="Send"> Create Product </button>
    </form>
@endsection