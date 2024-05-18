<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
        @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
        @endforeach
        </ul>
    @endif
    <div class="card-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    @lang('app.admin.recipe.createRecipes')
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('admin.recipe.store') }}" method = "POST" role="form">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.nameEdit')</label>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.descriptionIndex')</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.instructionsEdit')</label>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <input name="instructions" value="{{ old('instructions') }}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.ingredientsEdit')</label>
                                    <div class="col-lg-10 col-md-6 col-sm-12">
                                        <input name="ingredients" value="{{ old('ingredients') }}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.recipe.imageEdit')</label>
                                        <div class="col-lg-10 col-md-6 col-sm-12">
                                            <input name="image" value="{{ old('image') }}" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                @foreach($viewData["products"] as $product)
                                    <input type="checkbox" name="products[]" value="{{ $product->getId() }}">{{ $product->getName() }}<br>
                                @endforeach
                            </div>
                        <button type="submit" class="btn btn-primary" value="Send"> @lang('app.admin.recipe.addRecipe') </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="card">
    <div class="card-header">
    @lang('app.admin.recipe.manageRecipes')
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">@lang('app.admin.recipe.id')</th>
                <th scope="col">@lang('app.admin.recipe.name')</th>
                <th scope="col">@lang('app.admin.recipe.edit')</th>
                <th scope="col">@lang('app.admin.recipe.delete')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewData["recipes"] as $recipe)
                <tr>
                    <td>{{ $recipe->getId() }}</td>
                    <td>{{ $recipe->getName() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.recipe.edit', ['id'=> $recipe->getId()])}}">
                        @lang('app.admin.recipe.edit')
                            <i class="bi-pencil"></i>
                        </a> 
                    </td>
                    <td>
                        <form action="{{ route('admin.recipe.delete', $recipe->getId())}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this recipe?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                            @lang('app.admin.recipe.delete')
                                <i class="bi-trash"></i>
                            </button>
                        </form> 
                    </td>
                </tr>
            @endforeach 
        </tbody>
        </table>
    </div>
</div>
@endsection
