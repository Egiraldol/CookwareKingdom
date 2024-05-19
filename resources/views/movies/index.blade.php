@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="mx-3">
    {{ Breadcrumbs::render('product.index')}}
</div>

<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    

    <div class="row d-flex align-items-stretch">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @foreach ($viewData['movies'] as $movie)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 style="font-weight: bold; text-align:center;">{{ $movie['title'] }}</h5>
                    
                    <p>@lang('app.movie.plot') {{ $movie['plot'] }}</p>
                    <p style="text-align: left;">@lang('app.admin.product.stockEdit') {{ $movie['stock'] }}</p>
                    <p>${{ number_format($movie['price'], 0, ',', '.') }}</p>
                    <a href="{{ route('movie.show', ['id' => $movie['id']]) }}" class="btn bg-primary text-white mt-auto">@lang('app.movie.moreDetails')</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
