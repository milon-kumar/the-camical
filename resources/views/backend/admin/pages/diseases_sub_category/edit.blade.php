@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Disease Sub Category</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Disease Sub Category Edit</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.diseases-sub-category.update',$diseasesSubCategory->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="diseases_categories_id" class="form-control @error('diseases_categories_id') is-invalid @enderror" id="">
                                                <option>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option {{ $diseasesSubCategory->diseases_categories_id == $category->id ? 'selected' : '' }} value="{{ optional($category)->id }}">{{ optional($category)->en_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('diseases_categories_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="en_name" value="{{ $diseasesSubCategory->en_name ?? old('en_name') }}" class="form-control @error('en_name') is-invalid @enderror" placeholder="English Name">
                                            @error('en_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bangla Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="bn_name" value="{{ $diseasesSubCategory->bn_name ?? old('bn_name') }}" class="form-control @error('bn_name') is-invalid @enderror" placeholder="বাংলা নাম">
                                            @error('bn_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Short Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('en_description') is-invalid @enderror" name="en_description" id="" rows="4">{!! optional($diseasesSubCategory)->en_description ?? old('en_description') !!}</textarea>
                                            @error('en_description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bangla Short Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('bn_description') is-invalid @enderror" name="bn_description" id="" rows="4">{!! optional($diseasesSubCategory)->bn_description ??  old('bn_description') !!}</textarea>
                                            @error('bn_description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Product Image">
                                            @error('image')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <div class="" style="width: 50px;height: 50px;border-radius: 50px;overflow: hidden;">
                                                <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset($diseasesSubCategory->image) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Order</label>
                                        <div class="col-sm-10 input-group">
                                            <input type="number" name="order" value="{{ $diseasesSubCategory->order ?? old('order') }}" class="form-control" placeholder="Order Number">
                                            <div class="input-group-append">
                                                <span class="input-group-text" data-placement="left" data-toggle="popover" data-content="Order Category Use Order Number">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                            </div>
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
