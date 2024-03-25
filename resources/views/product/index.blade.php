@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
                <div class="card-header" style="text-align: center; font-weight: bold; font-size: 30px; margin-bottom:10px;">OrderProduct List</div>

                <div class="card-body">
                    @if ($viewData['products']->isEmpty())
                        <p>No hay objetos para mostrar.</p>
                    @else

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Recipes</th>
                                    <th> - </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($viewData['products'] as $product)
                                    <tr>
                                        <td>{{ $product->getId() }}</td>
                                        <td>{{ $product->getName() }}</td>
                                        <td>{{ $product->getDescription() }}</td>
                                        <td>{{ $product->getStock() }}</td>
                                        <td>{{ $product->getPrice() }}</td>
                                        <td>{{ $product->getImages() }}</td>
                                        <td>{{ $product->getRecipes() }}</td>
                                        <td><a href="{{ route('product.show', ['id'=> $product->id]) }}" class="btn bg-primary text-white">More details</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
@endsection 

