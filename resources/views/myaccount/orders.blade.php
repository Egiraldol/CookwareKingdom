@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mb-4">
    <div class="card-header">
        Order #{{ $order->getId() }}
    </div>
    <div class="card-body">
        <b>Date:</b> {{ $order->getCreatedAt() }}<br />
        <b>Total:</b> ${{ $order->getTotal() }}<br />
        <table class="table table-bordered table-striped text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">@lang(app.myAccount.id)</th>
                    <th scope="col">@lang(app.myAccount.productName)</th>
                    <th scope="col">@lang(app.myAccount.price)</th>
                    <th scope="col">@lang(app.myAccount.quantity)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->getOrderItems() as $orderItem)
                    <tr>
                        <td>{{ $orderItem->getId() }}</td>
                        <td>
                            <a class="link-success" href="{{ route('product.show', ['id'=> $orderItem->getProduct()->getId()])}}">
                                {{ $orderItem->getProduct()->getName() }}
                            </a>
                        </td>
                        <td>${{ $orderItem->getTotal() }}</td>
                        <td>{{ $orderItem->getQuantity() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@empty
<div class="alert alert-danger" role="alert">
@lang(app.myAccount.notPurchased)
</div>
@endforelse
@endsection