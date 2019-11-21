@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12  mx-2">
            <div class=" card">
                <div class=" card-title">
                    <h4 class="text-center text-success card-header" id="xyz">{{ Session::get('message') }}</h4>
                </div>
                <div class="table-responsive mx-2">
                    <table class="table table-bordered">
                        <tr class="bg-info text-white">
                            <th>SL NO</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->product_brand_name }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                <img src="{{ asset($product->product_image) }}" alt="" height="100" width="120"/>
                            </td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>{{ $product->publication_status }}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-xs" title="View Detail">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                                @if($product->publication_status == 1)
                                <a href="" class="btn btn-success btn-xs" title="Unpublish">
                                    <i class="fas fa-download"></i>
                                </a>
                                @else
                                <a href="" class="btn btn-warning btn-xs" title="Publish">
                                    <i class="fas fa-upload"></i>
                                </a>
                                @endif
                                <a href="{{ route('edit-product', ['id'=>$product->id]) }}" class="btn btn-info btn-xs" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
