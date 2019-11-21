@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')

    <div class="row">
        <div class="col-md-10 col-md-offset-1 mx-auto">
            <div class=" card">
                <div class=" card-title">
                    <h4 class="text-center text-success card-header">{{ Session::get('message') }}</h4>
                    {{--<h4 class="text-center text-success card-header text-uppercase">Add Category Form</h4>--}}
                </div>
                <div class="card-body">
                    <form action="{{ route('update-category') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        {{--or--}}
                        {{--@csrf--}}
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}"/>
                                <input type="hidden" name="category_id" class="form-control" value="{{ $category->id }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Category Description</label>
                            <div class="col-md-8">
                                <textarea name="category_description" class="form-control">{{ $category->category_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label><input type="radio" name="publication_status" {{ $category->publication_status == 1 ? 'checked' : '' }} value="1"/>Published</label>
                                <label><input type="radio" name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0"/>Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="control-label col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" name="btn" class="btn btn-block btn-success" value="Update Category Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection