@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Products</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Products</h4>
                            <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm float-right">Add Product</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Category</th>
                                        <th>S Category</th>
                                        <th>En Name</th>
                                        <th>Bn Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $key => $product)
                                            <tr>
                                                <td>#{{ $loop->iteration }}</td>
                                                <td>{{ optional($product->category)->en_name }}</td>
                                                <td>{{ optional($product->subCategory)->en_name }}</td>
                                                <td>
                                                    <img style="width: 35px;height: 35px;" src="{{ asset(optional($product)->image) }}" class=" rounded-circle mr-3" alt="">
                                                    {{ optional($product)->en_title }}
                                                </td>
                                                <td>{{ optional($product)->bn_title }}</td>
                                                <td>
                                                    @if(optional($product)->status == 1)
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    @else
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$product->id}})">Delete</a>
                                                    <form id="deleteForm{{$product->id}}" action="{{ route('admin.product.destroy',$product->id) }}" method="post">
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
