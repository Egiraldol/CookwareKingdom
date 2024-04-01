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
                    Create Products
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('admin.product.store') }}" method = "POST" role="form">
                        @csrf
                        
                        <div class = "form-group">
                            <h5>Name</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class = "form-group">
                            <h5>Description</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter description" name="description" value="{{ old('description') }}">
                        </div>

                        <div class = "form-group">
                            <h5>Stock</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter stock" name="stock" value="{{ old('stock') }}">
                        </div>

                        <div class = "form-group">
                            <h5>Price</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter price" name="price" value="{{ old('price') }}">
                        </div>

                        <div class = "form-group">
                            <h5>Image</h5>
                            <input type="text" class="form-control mb-2" placeholder = "Enter image" name="images" value="{{ old('images') }}">
                        </div>

                        <button type="submit" class="btn btn-primary" value="Send"> Create Product </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="card">
    <div class="card-header">
    Manage Products
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewData["products"] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.product.edit', ['id'=> $product->getId()])}}">
                            <i class="bi-pencil"></i>
                        </a> 
                    </td>
                    <td>
                        <form action="{{ route('admin.product.delete', $product->getId())}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
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
