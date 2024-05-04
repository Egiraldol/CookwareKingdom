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
                    @lang(app.admin.product.createProducts)
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('admin.product.store') }}" method = "POST" role="form">
                        @csrf
                        
                        <div class = "form-group">
                            <h5>@lang(app.admin.product.name)</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class = "form-group">
                            <h5>@lang(app.admin.product.description)n</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter description" name="description" value="{{ old('description') }}">
                        </div>

                        <div class = "form-group">
                            <h5>@lang(app.admin.product.stock)</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter stock" name="stock" value="{{ old('stock') }}">
                        </div>

                        <div class = "form-group">
                            <h5>@lang(app.admin.product.price)</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter price" name="price" value="{{ old('price') }}">
                        </div>

                        <div class = "form-group">
                            <h5>@lang(app.admin.product.image)</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter image" name="images" value="{{ old('images') }}">
                        </div>

                        <button type="submit" class="btn btn-primary" value="Send"> Add Product </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="card">
    <div class="card-header">
    @lang(app.admin.product.manageProducts)
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">@lang('app.admin.product.id')</th>
                <th scope="col">@lang('app.admin.product.name')</th>
                <th scope="col">@lang('app.admin.product.edit')</th>
                <th scope="col">@lang('app.admin.product.delete')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewData["products"] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.product.edit', ['id'=> $product->getId()])}}">
                            @lang('app.admin.product.edit')
                            <i class="bi-pencil"></i>
                        </a> 
                    </td>
                    <td>
                        <form action="{{ route('admin.product.delete', $product->getId())}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                            @lang('app.admin.product.delete')
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
