@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Recipe
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif


        <form method="POST" action="{{ route('admin.recipe.update', ['id'=> $viewData['recipe']->getId()]) }}"enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['recipe']->getName() }}" type="text"
                            class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Instructions:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="instructions" value="{{ $viewData['recipe']->getInstructions() }}" type="text"
                            class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Ingredients:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="ingredients" value="{{ $viewData['recipe']->getIngredients() }}" type="text"
                            class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="image" value="{{ $viewData['recipe']->getImage() }}" type="text"
                        class="form-control">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                    <textarea class="form-control" name="description"
                        rows="3">{{ $viewData['recipe']->getDescription() }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection
