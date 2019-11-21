@extends('admin.master')

@section('title')
    Add Product Brand
@endsection

@section('body')

    <div class="row">
        <div class="col-md-10 col-md-offset-1 mx-auto">
            <div class=" card">
                <div class=" card-title">
                    <h4 class="text-center text-success card-header">{{ Session::get('message') }}</h4>

                        {{ Form::open(['route'=>'new-product-brand', 'method'=>'POST', 'class'=>'form-horizontal, card-body']) }}

                            {{--<div class="form-group row mt-4 mx-2">--}}
                                {{--{{ Form::label('product_brand_name', 'Product Brand Name', ['class' =>  'col-md-3']) }}--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{ Form::text('product_brand_name', '', ['class' =>  'form-control']) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row">
                                <label for="" class="control-label col-md-4">Product Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_brand_name" class="form-control"/>
                                    <span class="text-danger">{{ $errors->has('product_brand_name') ? $errors->first('product_brand_name') : '' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="control-label col-md-4">Product Brand Description</label>
                                <div class="col-md-8">
                                    <textarea name="product_brand_description" class="form-control"></textarea>
                                    <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="control-label col-md-4">Publication Status</label>
                                <div class="col-md-8 radio">
                                    <label><input type="radio" name="publication_status" value="1"/>Published</label>
                                    <label><input type="radio" name="publication_status" value="0"/>Unpublished</label>
                                    <br/>
                                    <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="control-label col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-block btn-success" value="Save Product Brand Info"/>
                                </div>
                            </div>

                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection