@extends('front-end.master')

@section('title')
    Shopping Bag
@endsection

@section('body')

    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">My Shopping Chart</h3>
                        <hr/>
                        <table class="table table-bordered text-center">
                            <tr class="bg-primary ">
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price (TK)</th>
                                <th>Quantity</th>
                                <th>Total Price (TK)</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @php($sum = 0)
                            @foreach($cartProducts as $cartProduct)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $cartProduct->name }}</td>
                                <td><img src="{{ asset($cartProduct->attributes->image) }}" height="50" width="50" alt=""></td>
                                <td>{{ $cartProduct->price }}</td>
                                <td>
                                    {{ Form::open(['route'=>'update-cart', 'method'=>'post']) }}
                                    <input type="number" name="qty" value="{{ $cartProduct->quantity }}" min="1"/>
                                    <input type="hidden" name="id" value="{{ $cartProduct->id }}"/>
                                    <input type="submit" name="btn" class="btn btn-success btn-xs" value="Update"/>
                                    {{ Form::close() }}
                                </td>
                                <td>{{ $total = $cartProduct->price*$cartProduct->quantity }}</td>
                                <td>
                                    <a href="{{ route('delete-cart-item', ['id'=>$cartProduct->id]) }}" class="btn btn-danger btn-xs" title="DELETE">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php $sum = $sum+$total; ?>
                            @endforeach
                        </table>
                        <hr/>
                        <table class="table table-bordered">
                            <tr>
                                <th>Item Total (TK)</th>
                                <td class="text-right">{{ $sum }}</td>
                            </tr>
                            <tr>
                                <th>VAT Total (TK)</th>
                                <td class="text-right">{{ $vat = 0 }}</td>
                            </tr>
                            <tr>
                                <th>Grand Total (TK)</th>
                                <td class="text-right">{{ $orderTotal = $sum+$vat }}</td>
                                <?php
                                    Session::put('orderTotal', $orderTotal);
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        @if(Session::get('customerId') && Session::get('shippingId'))
                            <a href="{{ route('checkout-payment') }}" class="btn btn-success pull-right">Checkout</a>
                        @elseif(Session::get('customerId'))
                            <a href="{{ route('checkout-shipping') }}" class="btn btn-success pull-right">Checkout</a>
                        @else
                            <a href="{{ route('checkout') }}" class="btn btn-success pull-right">Checkout</a>
                        @endif
                        <a href="" class="btn btn-success">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection