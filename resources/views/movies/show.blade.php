<!--By Esteban Giraldo Llano-->

@extends('layouts.app')
@section('title', $viewData["title"])


@section('breadcrumbs')
    {{ Breadcrumbs::render('movie.show', $viewData["movie"]['id'], $viewData["movie"]['title'])  }}
@endsection

@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<div class="d-flex justify-content-center mx-3">
  <div class="col-md-8">
    <div class="card mb-3">
      <div class="card-body">
        <h4 class="card-title" style="font-weight: bold;">{{ $viewData["movie"]['title'] }}</h4>
        <p class="card-text">@lang('app.movie.plot') {{ $viewData["movie"]['plot'] }}</p>
        
        <div class="rating mb-2">
          @for ($i = 0; $i < $viewData["movie"]['rating']; $i++)
            <span class="fa fa-star checked"></span>
          @endfor
        </div>

        <p class="card-text">
          @if ($viewData["movie"]['rating'] === 0)
          @lang('app.movie.noReviews')
          @endif
        </p>

        <p class="card-text">@lang('app.admin.product.priceEdit') ${{ number_format($viewData["movie"]['price'], 0, ',', '.') }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
