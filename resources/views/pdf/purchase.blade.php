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
                    <th scope="col">Item ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["order"]->getOrderItems() as $orderItem)
                    <tr>
                        <td> {{ $orderItem->getId() }} </td>
                        <td> {{ $orderItem->getProduct()->getName() }} </td>
                        <td> ${{ $orderItem->getTotal() }} </td>
                        <td> {{ $orderItem->getQuantity() }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
