<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="card-header" style="text-align: center; font-weight: bold; font-size: 30px; margin-bottom:10px;">@lang('app.orderProduct.productList')</div>

                <div class="card-body">
                    @if ($viewData['orderProducts']->isEmpty())
                        <p>@lang('app.orderProduct.noProducts')</p>
                    @else

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('app.orderProduct.id')</th>
                                    <th>@lang('app.orderProduct.quantity')</th>
                                    <th>@lang('app.orderProduct.total')</th>
                                    <th> - </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($viewData['orderProducts'] as $orderProduct)
                                    <tr>
                                        <td>{{ $orderProduct->getId() }}</td>
                                        <td>{{ $orderProduct->getQuantity() }}</td>
                                        <td>{{ $orderProduct->getTotal() }}</td>
                                        <td><a href="{{ route('orderProduct.show', ['id'=> $orderProduct->id]) }}" class="btn bg-primary text-white">@lang('app.orderProduct.moreDetails')</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

@endsection 

