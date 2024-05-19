<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

    <h1> @lang('app.orderProduct.creatingOrder') </h1>

    <form action="{{ route('orderProduct.save') }}" method = "POST" role="form">
        @csrf
        
        <div class = "form-group">
            <h5>@lang('app.orderProduct.quantity')</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter name" name="quantity">
        </div>

        <div class = "form-group">
            <h5>@lang('app.orderProduct.total')</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter description" name="total">
        </div>


        <button type="submit" class="btn btn-primary" value="Send"> @lang('app.orderProduct.createOrder') </button>
    </form>
@endsection