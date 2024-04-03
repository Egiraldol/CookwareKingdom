<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

    <h1> Creating Order Product </h1>

    <form action="{{ route('orderProduct.save') }}" method = "POST" role="form">
        @csrf
        
        <div class = "form-group">
            <h5>Quantity</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter name" name="quantity">
        </div>

        <div class = "form-group">
            <h5>Total</h5>
            <input type="text" class="form-control mb-2" placeholder = "Enter description" name="total">
        </div>


        <button type="submit" class="btn btn-primary" value="Send"> Create Order Product </button>
    </form>
@endsection