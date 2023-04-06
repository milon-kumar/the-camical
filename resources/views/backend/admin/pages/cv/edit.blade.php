@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product Edit</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('categories_id') is-invalid @enderror" onchange="getSubCategory()" name="categories_id" id="category">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option {{ $product->categories_id == $category->id ? 'selected' : '' }} value="{{ optional($category)->id }}">{{ optional($category)->en_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('categories_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sub Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('sub_categories_id') is-invalid @enderror" name="sub_categories_id" id="" onchange="getSubCategory()">
                                                <option value="">Select Category</option>
                                                @foreach($sub_categories as $category)
                                                    <option {{ $product->sub_categories_id == $category->id ? 'selected' : ''  }} value="{{ optional($category)->id }}">{{ optional($category)->en_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('sub_categories_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="en_title" value="{{ $product->en_title ?? old('en_title') }}" class="form-control @error('en_title') is-invalid @enderror" placeholder="English Product Name">
                                            @error('en_title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bangla Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $product->bn_title ?? old('bn_title') }}" name="bn_title" class="form-control @error('bn_title') is-invalid @enderror" placeholder="বাংলা নাম">
                                            @error('bn_title')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="en_description" id="enDescription">{!! $product->en_description ?? old('en_description') !!}</textarea>
                                            @error('en_description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bangla Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="bn_description" id="bnDescription">{!! $product->bn_description ?? old('bn_description') !!}</textarea>
                                            @error('bn_description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product image <span class="text-danger">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Product Image">
                                            @error('image')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <div class="" style="width: 50px;height: 50px;border-radius: 50px;overflow: hidden;">
                                                <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset($product->image) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Is Featured</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" {{ $product->is_featured == true ? 'checked' : '' }} name="is_featured" id="is_featured" class="form-check">
                                            <label class="" style="cursor: pointer;" for="is_featured">Tick ​​here if you want to feature section this product on home page</label>
                                            @error('is_featured')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Is Popular</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" {{ $product->is_popular == true ? 'checked' : '' }} name="is_popular" id="is_popular" class="form-check">
                                            <label style="cursor: pointer;" for="is_popular">Tick ​​here if you want to popular section this product on home page</label>
                                            @error('is_featured')
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

    <script>
        const enDescription = document.querySelector( '#enDescription' );
        const bnDescription = document.querySelector( '#bnDescription' );
        ClassicEditor
            .create(enDescription)
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create(bnDescription)
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
