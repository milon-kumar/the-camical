@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Categories</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Categories</h4>
                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm float-right">Add Category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>English name</th>
                                        <th>Bangla name</th>
                                        <th>Order Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $key => $category)
                                            <tr>
                                                <td>#{{ $loop->iteration }}</td>
                                                <td>{{ optional($category)->en_name }}</td>
                                                <td>{{ optional($category)->bn_name }}</td>
                                                <td>{{ optional($category)->order }}</td>
                                                <td>
                                                    @if(optional($category)->status == 1)
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    @else
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$category->id}})">Delete</a>
                                                    <form id="deleteForm{{$category->id}}" action="{{ route('admin.category.destroy',$category->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Category name</th>
                                        <th>Order Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
