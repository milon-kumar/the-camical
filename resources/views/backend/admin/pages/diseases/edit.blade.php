@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Diseases</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Diseases Edit</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.diseases.update',optional($diseases)->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select
                                                class="form-control @error('diseases_categories_id') is-invalid @enderror"
                                                name="diseases_categories_id"
                                                id="category"
                                            >
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option {{ $category->id == $diseases->diseases_categories_id ? 'selected' : '' }} value="{{ optional($category)->id }}">{{ optional($category)->en_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('diseases_categories_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sub Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select
                                                class="form-control @error('diseases_sub_categories_id') is-invalid @enderror"
                                                name="diseases_sub_categories_id"
                                                id="subCategory"
                                            >
                                                @foreach($s_categories as $category)
                                                    <option value="">{{ optional($category)->id == $diseases->diseases_sub_categories_id ? 'selected' : ''}}</option>
                                                @endforeach
                                            </select>
                                            @error('diseases_sub_categories_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">En Short Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="en_short_name" value="{{ optional($diseases)->en_short_name ?? old('en_short_name')}}" class="form-control @error('en_short_name') is-invalid @enderror" placeholder="English Short Name">
                                            @error('en_short_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <label class="col-sm-2 col-form-label">Bn Short Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="bn_short_name" value="{{ optional($diseases)->bn_short_name ?? old('bn_short_name')}}" class="form-control @error('bn_short_name') is-invalid @enderror" placeholder="বাংলা সংক্ষিপ্ত নাম">
                                            @error('bn_short_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Full Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="en_full_name" value="{{ optional($diseases)->en_full_name ?? old('en_full_name')}}" class="form-control @error('en_full_name') is-invalid @enderror" placeholder="English Full Name">
                                            @error('en_full_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <label class="col-sm-2 col-form-label">Bangla Full Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="bn_full_name" value="{{ optional($diseases)->bn_full_name ?? old('bn_full_name')}}" class="form-control @error('bn_full_name') is-invalid @enderror" placeholder="বাংলা সম্পন্ন নাম">
                                            @error('bn_full_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">English Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="en_symptoms" id="enDescription"  >{!! optional($diseases)->en_symptoms ?? old('en_symptoms') !!}</textarea>
                                            @error('en_symptoms')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bangla Description <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="bn_symptoms" id="bnDescription" >{!! optional($diseases)->bn_symptoms ?? old('bn_symptoms') !!}</textarea>
                                            @error('bn_symptoms')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image <span class="text-danger">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Product Image">
                                            @error('image')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <div class="" style="width: 50px;height: 50px;border-radius: 50px;overflow: hidden;">
                                                <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset($diseases->image) }}" alt="">
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

        $('#category').on('change', function (e){
            var category_id = $(this).val();
            $.post("{{ route('admin.getDSCategory') }}",{_id:category_id},
                function(data, status){
                    //console.log(data);
                    $('#subCategory').append('<option selected value="0">Select SubCategory</option>');
                    $.each(data, function (key, value) {
                        $('#subCategory').append('<option value="'+value.id+'" >'+value.en_name+'</option>');
                    })
                });
        })


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
