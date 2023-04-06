@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Footer Page Setting</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="types[]" value="carrer_em_headding">
                                            <input type="text" class="form-control" placeholder="Carrer Header" name="carrer_em_headding" value="{{ get_setting('carrer_em_headding') }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="types[]" value="carrer_bn_headding">
                                            <input type="text" class="form-control" placeholder="ক্যারিয়ার হেডার" name="carrer_bn_headding" value="{{ get_setting('carrer_bn_headding') }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for=""></label>
                                        </div>
                                        <div class="col-md-8">
                                            <button class="btn btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@endsection
