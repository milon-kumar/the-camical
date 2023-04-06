@extends('frontend.layout.app')
@section('title','About Us')
@section('content')
    <section class="header-title" style="background: forestgreen;padding: 20px 0;">
        <div class="container">
            <h2 class="title">{{ __('public.carrer') }}</h2>
            <span class="sub-title">Home / <span class="text-color">{{ __('public.carrer') }}</span></span>
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card rounded-0" style="box-shadow: 0 0 5px 2px #e3e3e3;border: 1px solid #e3e3e3;padding: 15px;">
                        <div class="card-body">
                            <p>
                                @if(Session::get('locale') == 'en')
                                    {{ get_setting('carrer_en_headding') }}
                                @else
                                    {{ get_setting('carrer_bn_headding') }}
                                @endif
                            </p>
                            <hr class="border border-bottom" style="border-color: #e3e3e3;margin-bottom: 10px;"/>
                            <div class="">
                                <form action="{{ route('carrier.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputPhoen">{{ __('public.phone_number') }} <span class="text-danger">*</span> </label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputPhoen" placeholder="">
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('public.email') }}</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email(Optional)">
                                    </div>

                                    <div class="form-group">
                                        <label for="">{{ __('public.cv_drop') }} <span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" id="exampleInputCv" placeholder="Enter email(Optional)">

                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @else
                                            <small>{{ __('public.cv_drop_message') }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputMessage">{{ __('public.cv_message') }}</label>
                                        <textarea class="form-control" name="message" id="exampleInputMessage" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- team-section -->


@endsection
