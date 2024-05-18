<!--By Esteban Giraldo Llano-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="row">
        @foreach ($viewData["reviews"] as $review)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body text-center">

                    <h5>{{ $review->getTitle() }}</h4>
                    <h6>{{ $review->getRating() }}</h5>
                    <a href="{{ route('review.show', ['id'=> $review->getId()]) }}" class="btn bg-primary text-white">@lang('app.review.moreDetails')</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
