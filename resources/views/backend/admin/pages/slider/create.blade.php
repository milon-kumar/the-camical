@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Slider</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Slider Add</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Title <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="en_title" value="{{ old('en_title') }}" class="form-control @error('en_title') is-invalid @enderror" placeholder="English Title">
                                            @error('en_title')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <label class="col-sm-2 col-form-label">Bangla Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="bn_title" value="{{ old('bn_title') }}" class="form-control @error('bn_title') is-invalid @enderror" placeholder="বাংলা টাইটেল">
                                            @error('bn_title')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="en_short_description" id=""  >{{ old('en_short_description') }}</textarea>
                                            @error('en_short_description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bangla Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="bn_short_description" id="">{{ old('bn_short_description') }}</textarea>
                                            @error('bn_short_description')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slider image <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <small class="text-muted">Image Size must be (1920 px * 1280 px)</small>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Slider Image">
                                            @error('image')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slider Order</label>
                                        <div class="col-sm-10 input-group">
                                            <input type="number" name="order" value="{{ old('order') }}" class="form-control" placeholder="Order Number">
                                            <div class="input-group-append">
                                                <span class="input-group-text" data-placement="left" data-toggle="popover" data-content="Order Your Slider By Order Number">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Button Name </label>
                                        <div class="col-sm-4">
                                            <input type="text" value="{{ old('en_btn_name') }}" name="en_btn_name" class="form-control @error('en_btn_name') is-invalid @enderror" placeholder="Read More...">
                                            @error('en_btn_name')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <label class="col-sm-2 col-form-label">Bangla Button Name </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="bn_btn_name" value="{{ old('bn_btn_name') }}" class="form-control @error('bn_btn_name') is-invalid @enderror" placeholder="আরো পড়ুন...">
                                            @error('bn_btn_name')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Button Url </label>
                                        <div class="col-sm-10">
                                            <input type="url" name="url" value="{{ old('url') }}" class="form-control @error('url') is-invalid @enderror" placeholder="Default Btn URL '#' ">
                                            @error('url')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
@section('script')
    <script>

        function getSubCategory() {
            const c_id = document.getElementById('category').target.value;
            console.log(c_id);
        }
    </script>
@endsection
