@extends('frontend.layout.app')
@section('title','About Us')
@section('style')
    <style>
        #banglaContent table{
            width: 100%!important;
            border: 1px solid #d3d9df;
            border-collapse: collapse;
            text-align: center;
        }
        #banglaContent table th,td{
            border: 1px solid #d3d9df;
            border-collapse: collapse;
            padding: 1px;
        }

        #englishContent table{
            width: 100%!important;
            border: 1px solid #d3d9df;
            border-collapse: collapse;
            text-align: center;
        }
        #englishContent table th,td{
            border: 1px solid #d3d9df;
            border-collapse: collapse;
            padding: 1px;
        }
    </style>
@endsection
@section('content')
    <section class="header-title" style="padding:30px 0 ; background:radial-gradient(green,forestgreen);">
        <div class="container">
            @if(Session::get('locale') == 'en')
                <h4 class="title" style="font-size: 23px;">{{ optional($disease)->en_short_name }}</h4>
                <span class="sub-title">
                    <a style="color: white" href="{{ route('home') }}">{{__('public.home')}}</a> /
                    <span class="sub-title">
                        <a style="color: white" href="{{ route('diseases-subcategory',$disease->diseasesCategory->slug) }}">
                            {{ optional($disease->diseasesCategory)->en_name }}
                        </a>
                    </span>
                     @if($disease->diseasesSubCategory)
                        / <span class="sub-title">
                        <a href="{{ route('subcategory-product',optional($disease->diseasesSubCategory)->slug) }}">
                            {{ optional($disease->diseasesSubCategory)->en_name }}
                        </a>
                    </span>
                    @endif
                </span>
            @else
                <h4 class="title" style="font-size: 23px;">{{ optional($disease)->bn_short_name }}</h4>
                <span class="sub-title">
                    <a style="color: white" href="{{ route('home') }}">{{__('public.home')}}</a> /
                    <span class="sub-title">
                        <a style="color: white" href="{{ route('diseases-subcategory',$disease->diseasesCategory->slug) }}">
                            {{ optional($disease->diseasesCategory)->bn_name }}
                        </a>
                    </span>
                     @if($disease->diseasesSubCategory)
                        / <span class="sub-title">
                        <a href="{{ route('subcategory-product',optional($disease->diseasesSubCategory)->slug) }}">
                            {{ optional($disease->diseasesSubCategory)->bn_name }}
                        </a>
                    </span>
                    @endif
                </span>
            @endif
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card" style="box-shadow:0 0 4px #747474">
                        <div class="" style="width: 100%;overflow: hidden">
                            <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset(optional($disease)->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="card col-md-7"  style="box-shadow:0 0 4px #747474;padding: 20px;height: 100%;">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 40px">
                            <div class="tab-content">
                                @if(Session::get('locale') == 'en')
                                <div id="englishContent">
                                    <div class="mission-content">
                                        <h3 class="font-weight-bold text-success">{{ optional($disease)->en_full_name }}</h3>
                                        <p class="">{!! optional($disease)->en_symptoms !!}</p>
                                    </div> <!-- mission-content -->
                                </div>
                                @else
                                    <div id="englishContent">
                                        <div class="mission-content">
                                            <h3 class="font-weight-bold text-success">{{ optional($disease)->bn_full_name }}</h3>
                                            <p class="">{!! optional($disease)->bn_symptoms !!}</p>
                                        </div> <!-- mission-content -->
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" style="margin: 20px 0;">
        <div class="container">
            <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-12">
                    <h1 style="color: #302b2b;">{{ __('public.other_diseases_crop') }}</h1>
                </div>
            </div>
            <div class="row">
                @foreach($othersDiseases as $disease)
                    @include('frontend.components.diseases')
                @endforeach
            </div>
        </div>
    </section>
@endsection

