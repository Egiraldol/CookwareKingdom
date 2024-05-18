@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="mx-3">
    {{ Breadcrumbs::render('cart.purchase') }}
</div>

<div class="card">
    <div class="card-header">
    @lang('app.cart.purchase')
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
        @lang('app.cart.congrats') <b>#{{ $viewData["order"]->getId()}}</b>
        </div>

        <a href="{{ route('pdf.download', ['orderId' => $viewData["order"]->getId()]) }}" class="btn btn-primary">@lang('app.cart.downloadPDF')</a>    </div>
        <a href="{{ route('export', ['id' => $viewData["order"]->getId()]) }}" class="btn btn-primary">Download CSV</a>
    </div>

</div>
@endsection
