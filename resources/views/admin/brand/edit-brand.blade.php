@extends('admin.master')

@section('title')
    Edit Brand
@endsection

@section('body')

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-title">
                    <h4 class="text-center text-info mt-5"></h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('update-brand') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <input type="text" name="brand_name" class="form-control" value="{{ $brand->brand_name }}"/>
                                <input type="hidden" name="brand_id" class="form-control" value="{{ $brand->id }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4">Number of Products</label>
                            <div class="col-md-8">
                                <input type="number" name="brand_products_number" class="form-control" value="{{ $brand->brand_products_number }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4">Publication Status</label>
                            <div class="col-md-8">
                                <input type="radio" name="publication_status" {{ $brand->publication_status == 1 ? 'checked' : '' }} value="1"/>Published
                                <input type="radio" name="publication_status" {{ $brand->publication_status == 0 ? 'checked' : '' }} value="0"/>Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" name="btn" class="btn btn-info btn-block" value="Update Brand Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection