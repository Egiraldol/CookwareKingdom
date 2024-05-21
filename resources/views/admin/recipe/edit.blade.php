<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
    @lang('app.admin.recipe.editRecipe')
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
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.nameEdit')</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['recipe']->getName() }}" type="text"
                            class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.instructionsEdit')</label>
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
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.ingredientsEdit')</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="ingredients" value="{{ $viewData['recipe']->getIngredients() }}" type="text"
                            class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.imageEdit')</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input type="file" class="form-control mb-2" name="image">
                        @if ($viewData['recipe']->getImageUrlAttribute()) <!-- Suponiendo que getImage() devuelve el nombre de la imagen -->
                            <p>@lang('app.admin.product.actualImage') {{ $viewData['recipe']->getImageUrlAttribute() }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">@lang('app.admin.recipe.description')</label>
                    <textarea class="form-control" name="description"
                        rows="3">{{ $viewData['recipe']->getDescription() }}</textarea>
            </div>

            @foreach($viewData['products'] as $product)
                <input type="checkbox" name="products[]" value="{{ $product->getId() }}" {{ $viewData["recipe"] ->getProducts()->contains($product->getId()) ? 'checked' : '' }}>
                <label>{{ $product->getName() }}</label><br>
            @endforeach
            <button type="submit" class="btn btn-primary">@lang('app.admin.recipe.submit')</button>
        </form>
    </div>
</div>
@endsection
