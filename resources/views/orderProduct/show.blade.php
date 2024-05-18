<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">@lang('app.orderProduct.productDetails')</h5>
        <p class="card-text">@lang('app.orderProduct.idShow') {{ $viewData["orderProduct"]->getId() }}</p>
        <p class="card-text">@lang('app.orderProduct.quantityShow') {{ $viewData["orderProduct"]->getQuantity() }}</p>
        <p class="card-text">@lang('app.orderProduct.totalShow') {{ $viewData["orderProduct"]->getTotal() }}</p>
        <p class="card-text">@lang('app.orderProduct.createdAt') {{ $viewData["orderProduct"]->getCreated_at() }}</p>

        <form method="POST" action="{{ route('orderProduct.delete', ['id' => $viewData["orderProduct"]->id]) }}" onsubmit="return confirm('Are you sure you want to delete your OrderProduct?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">@lang('app.orderProduct.deleteProduct')</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
