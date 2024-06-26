<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif


        <form method="POST" action="{{ route('admin.product.update', ['id'=> $viewData['product']->getId()]) }}"enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.product.nameEdit')</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['product']->getName() }}" type="text"
                            class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.product.priceEdit')</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number"
                            class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.product.stockEdit')</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="stock" value="{{ $viewData['product']->getStock() }}" type="number"
                            class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">@lang('app.admin.product.imageEdit')</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                    <input type="file" class="form-control mb-2" name="images">
                    @if ($viewData['product']->getImageUrlAttribute()) <!-- Suponiendo que getImage() devuelve el nombre de la imagen -->
                        <p>@lang('app.admin.product.actualImage') {{ $viewData['product']->getImageUrlAttribute() }}</p>
                    @endif
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label class="form-label">@lang('app.admin.product.description')</label>
                    <textarea class="form-control" name="description"
                        rows="3">{{ $viewData['product']->getDescription() }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">@lang('app.admin.product.submit')</button>
        </form>
    </div>
</div>
@endsection
