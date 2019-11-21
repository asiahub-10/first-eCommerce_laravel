@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-title">
                    <h4 class="text-center text-info mt-5">{{ Session::get('message') }}</h4>
                </div>
                <table class="table table-bordered table-responsive-lg text-center">
                    <thead class="bg-info text-white">
                        <tr>
                            <th>SL NO</th>
                            <th>Brand Name</th>
                            <th>Number of Products</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                    @php($i=1)
                    @foreach($brands as $brand)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <th>{{ $brand->brand_name }}</th>
                            <th>{{ $brand->brand_products_number }}</th>
                            <th>{{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}</th>
                            <th class="custom-control-inline border-left-0 border-right-0">
                                @if($brand->publication_status == 1)
                                <abbr title="Unpublish">
                                    <a href="#" class="btn btn-success btn-xs" onclick="
                                        event.preventDefault();
                                        var check = confirm('Are you sure to unpublished this ???');
                                        if (check) {
                                            document.getElementById('unpublishBrandInfoForm'+'{{ $brand->id }}').submit();
                                        }
                                    ">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </abbr>
                                    <form action="{{ route('unpublish-brand') }}" method="post" id="unpublishBrandInfoForm{{ $brand->id }}">
                                        @csrf
                                        <input type="hidden" name="brand_id" value="{{ $brand->id }}"/>
                                    </form>
                                @else
                                <abbr title="Publish">
                                    <a href="#" class="btn btn-warning btn-xs" onclick="
                                        event.preventDefault();
                                        var check = confirm('Are you sure to published this ???');
                                        if (check) {
                                        document.getElementById('publishBrandInfoForm'+'{{ $brand->id }}').submit();
                                        }
                                    ">
                                        <i class="fas fa-upload"></i>
                                    </a>
                                </abbr>
                                    <form action="{{ route('publish-brand') }}" method="post" id="publishBrandInfoForm{{ $brand->id }}">
                                        @csrf
                                        <input type="hidden" name="brand_id" value="{{ $brand->id }}"/>
                                    </form>
                                @endif
                                <abbr title="Edit" class="mx-1">
                                    <a href="{{ route('edit-brand', ['id'=>$brand->id]) }}" class="btn btn-info btn-xs">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </abbr>
                                <abbr title="Delete">
                                    <a href="#" class="btn btn-danger btn-xs" onclick="
                                        event.preventDefault();
                                        var check = confirm('Are you sure to delete this ???');
                                        if (check) {
                                            document.getElementById('brandInfoDeleteForm'+'{{ $brand->id }}').submit();
                                        }
                                    ">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </abbr>
                                    <form action="{{ route('delete-brand') }}" method="post" id="brandInfoDeleteForm{{ $brand->id }}">
                                        @csrf
                                        <input type="hidden" name="brand_id" value="{{ $brand->id }}"/>
                                    </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection