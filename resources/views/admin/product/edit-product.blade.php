@extends('admin.master')

@section('title')
    Edit Product
@endsection

@section('body')

    <div class="row">
        <div class="col-md-10 col-md-offset-1 mx-auto">
            <div class=" card">
                <div class=" card-title">
                    <h4 class="text-center text-success card-header">{{ Session::get('message') }}</h4>

                    {{ Form::open(['route'=>'update-product', 'method'=>'POST', 'class'=>'form-horizontal, card-body', 'enctype'=>'multipart/form-data', 'name'=>'editProductForm']) }}

                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <select name="category_id" class="form-control">
                                <option value="">---Select Category Name---</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('product_brand_name') ? $errors->first('product_brand_name') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Brand Name</label>
                        <div class="col-md-8">
                            <select name="product_brand_id" class="form-control">
                                <option value="">---Select Brand Name---</option>
                                @foreach($productBrands as $productBrand)
                                    <option value="{{ $productBrand->id }}">{{ $productBrand->product_brand_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('product_brand_name') ? $errors->first('product_brand_name') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control"/>
                            <input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Product Price</label>
                        <div class="col-md-8">
                            <input type="number" name="product_price" value="{{ $product->product_price }}" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Product Quantity</label>
                        <div class="col-md-8">
                            <input type="number" name="product_quantity" value="{{ $product->product_quantity }}" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Short Description</label>
                        <div class="col-md-8">
                            <textarea name="short_description" class="form-control">{{ $product->short_description }}</textarea>
                            <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Long Description</label>
                        <div class="col-md-8">
                            <textarea name="long_description" class="form-control" id="editor">{{ $product->long_description }}</textarea>
                            <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Product Image</label>
                        <div class="col-md-8">
                            <input type="file" name="product_image" accept="image/*"/>
                            <br/>
                            <br/>
                            <img src="{{ asset($product->product_image) }}" alt="" height="80" width="80" class="" style="border: 1px darkgrey solid"/>
                            <span class="text-danger">{{ $errors->has('product_brand_description') ? $errors->first('product_brand_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" name="publication_status" {{ $product->publication_status == 1 ? 'checked' : '' }} value="1"/>Published</label>
                            <label><input type="radio" name="publication_status" {{ $product->publication_status == 0 ? 'checked' : '' }} value="0"/>Unpublished</label>
                            <br/>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-4"></label>
                        <div class="col-md-8">
                            <input type="submit" name="btn" class="btn btn-block btn-success" value="Update Product Info"/>
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editProductForm'].elements['category_id'].value = '{{ $product->category_id }}';
        document.forms['editProductForm'].elements['product_brand_id'].value = '{{ $product->product_brand_id }}';
    </script>

@endsection