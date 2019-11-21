@extends('admin.master')

@section('title')
    Manage Order
@endsection

@section('body')

    <div class="row">
        <div class="col-md-10 col-md-offset-1 mx-auto">
            <div class=" card">
                <div class=" card-title">
                    <h4 class="text-center text-success card-header" id="xyz">{{ Session::get('message') }}</h4>
                </div>
                <table class="table table-bordered table-responsive-md">
                    <tr class="bg-info text-white">
                        <th>SL NO</th>
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Payment Type</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $order->first_name.' '.$order->last_name }}</td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->payment_type }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>
                                <a href="{{ route('view-order-detail', ['id'=>$order->id]) }}" class="btn btn-info btn-xs" title="View Order Details">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                                <a href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                    <i class="fas fa-search-minus"></i>
                                </a>
                                <a href="{{ route('download-order-invoice', ['id'=>$order->id]) }}" class="btn btn-facebook btn-xs" title="Download Order Invoice">
                                    <i class="fas fa-cart-arrow-down"></i>
                                </a>
                                <a href="" class="btn btn-success btn-xs" title="Edit Order">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" title="Delete Order">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection
