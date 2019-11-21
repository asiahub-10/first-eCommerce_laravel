@extends('admin.master')

@section('title')
    Manage Category
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
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->category_description }}</td>
                        <td>{{ $category->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                        <td>
                            @if($category->publication_status == 1)
                            <abbr title="Unpublish">
                            <a href="{{ route('unpublished-category', ['id'=>$category->id]) }}" class="btn btn-success btn-xs">
                                {{--<span class="glyphicon glyphicon-arrow-up"></span>--}}
                                {{--<i class="fas fa-arrow-up"></i>--}}
                                <i class="fas fa-download"></i>
                            </a>
                            </abbr>
                            @else
                            <abbr title="Publish">
                            <a href="{{ route('published-category', ['id'=>$category->id]) }}" class="btn btn-warning btn-xs">
                            <i class="fas fa-upload"></i>
                            </a>
                            </abbr>
                            @endif
                            <a href="{{ route('edit-category', ['id'=>$category->id]) }}" class="btn btn-info btn-xs">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('delete-category', ['id'=>$category->id]) }}" class="btn btn-danger btn-xs">
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
