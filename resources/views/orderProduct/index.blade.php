<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card-header" style="text-align: center; font-weight: bold; font-size: 30px; margin-bottom:10px;">Product List</div>

<div class="card-body">
    @if ($viewData['orderProducts']->isEmpty())
        <p>No hay productos para mostrar.</p>
    @else

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th> - </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['orderProducts'] as $orderProduct)
                    <tr>
                        <td>{{ $orderProduct->getId() }}</td>
                        <td>{{ $orderProduct->getQuantity() }}</td>
                        <td>{{ $orderProduct->getTotal() }}</td>
                        <td><a href="{{ route('orderProduct.show', ['id'=> $orderProduct->id]) }}" class="btn bg-primary text-white">More details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection 

