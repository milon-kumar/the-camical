@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Slider</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Slider - ({{ $sliders->count() }})</h4>
                            <a href="{{ route('admin.slider.create') }}" class="btn btn-primary btn-sm float-right">Add Slider</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>English Title</th>
                                        <th>Bangla Title</th>
                                        {{--<th>English Button Name</th>
                                        <th>Bangla Button Name</th>--}}
                                        <th>Slider Serial</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $key => $slider)
                                            <tr>
                                                <td>#{{ $loop->iteration }}</td>
                                                <td><img style="width: 35px;height: 35px;" src="{{ asset(optional($slider)->image) }}" class=" rounded-circle mr-3" alt="">{{ optional($slider)->en_title }}</td>
                                                <td>{{ optional($slider)->bn_title }}</td>
                                                {{--<td>
                                                    <a target="_blank" href="{{ optional($slider)->url }}">{{ optional($slider)->en_btn_name }}</a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="{{ optional($slider)->url }}">{{ optional($slider)->bn_btn_name }}</a>
                                                </td>--}}
                                                <td>{{ optional($slider)->order }}</td>
                                                <td>
                                                    @if(optional($slider)->status == 1)
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    @else
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.slider.edit',$slider->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$slider->id}})">Delete</a>
                                                    <form id="deleteForm{{$slider->id}}" action="{{ route('admin.slider.destroy',$slider->id) }}" method="post">
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
                                        <th>Title</th>
                                        <th>Short Description</th>
                                        <th>Button Name</th>
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
