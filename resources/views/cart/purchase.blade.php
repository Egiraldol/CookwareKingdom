@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])


@section('breadcrumbs')
    {{ Breadcrumbs::render('cart.purchase') }}
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    @lang('app.cart.purchase')
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
        @lang('app.cart.congrats') <b>#{{ $viewData["order"]->getId()}}</b>
        </div>

        <form action="{{ route('document.download', ['orderId' => $viewData["order"]->getId()]) }}" method="GET">
            <label for="format">Choose a format for download your bill:</label>
            <div class="select-wrapper">
                <select name="format" id="format">
                    <option value="pdf">PDF</option>
                    <option value="csv">CSV</option>
                </select>
            </div>
            <button type="submit" class="icon-button">
                <i class="fa-solid fa-download"></i>
            </button>
        </form>
    </div>

</div>
@endsection
