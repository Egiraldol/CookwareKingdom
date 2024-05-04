@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Order #{{ $viewData["order"]->getId() }}
    </div>
    <div class="card-body">
        <b>Date:</b> {{ $viewData["order"]->getCreatedAt() }}<br />
        <b>Total:</b> ${{ $viewData["order"]->getTotal() }}<br />
        <table class="table table-bordered table-striped text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">@lang('app.pdf.id')</th>
                    <th scope="col">@lang('app.pdf.productName')</th>
                    <th scope="col">@lang('app.pdf.price')</th>
                    <th scope="col">@lang('app.pdf.quantity')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["order"]->getOrderItems() as $orderItem)
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
@endsection