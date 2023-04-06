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
                <h2 class="title">{{ optional($product)->en_title }}</h2>
                <span class="sub-title">
                    <a style="color: white" href="{{ route('home') }}">{{__('public.home')}}</a> /
                    <span class="sub-title"><a style="color: white" href="{{ route('category-product',$product->category->slug) }}">{{ optional($product->category)->en_name }}</a>

                    </span>
                     @if($product->sub_categories_id)
                    / <span class="sub-title">
                        <a href="{{ route('subcategory-product',optional($product->subCategory)->slug) }}">
                            {{ optional($product->subCategory)->en_name }}
                        </a>
                    </span>
                         @endif
                </span>
            @else
                <h2 class="title">{{ optional($product)->bn_title }}</h2>
                <span class="sub-title">
                    <a style="color: white" href="{{ route('home') }}">{{__('public.home')}}</a> /
                    <span class="sub-title"><a style="color: white" href="{{ route('category-product',$product->category->slug) }}">{{ optional($product->category)->bn_name }}</a>

                    </span>
                    @if($product->sub_categories_id)
                    / <span class="sub-title">
                        <a href="{{ route('subcategory-product',optional($product->subCategory)->slug) }}">
                            {{ optional($product->subCategory)->bn_name }}
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
                            <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset(optional($product)->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="card col-md-7"  style="box-shadow:0 0 4px #747474;padding: 20px;height: 100%;">
                    <div class="row">
                        <div class="col-md-12" role="tablist">
                            <div class="" role="presentation" class="active">
                                <a href="javascript:void(0);" class="btn btn-success" onclick="activeBangla()" >Bangla</a>&nbsp;&nbsp;
                                <a href="javascript:void(0);" class="btn btn-success" onclick="activeEnglish()">English</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-md-12" style="margin: 40px 0">
                            <div class="tab-content">
                                <div id="englishContent" style="display: none;">
                                    <div class="mission-content">
                                        <h3 class="font-weight-bold text-success">{{ optional($product)->en_title }}</h3>
                                        <p class="">{!! optional($product)->en_description !!}</p>
                                    </div> <!-- mission-content -->
                                </div>

                                <div id="banglaContent" style="display: block;">
                                    <div class="mission-content">
                                        <h3>{{ optional($product)->bn_title }}</h3>
                                        <p class="description-style">{!! optional($product)->bn_description !!}</p>
                                    </div> <!-- mission-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script !src="">
        const englishContent = document.getElementById('englishContent');
        const banglaContent = document.getElementById('banglaContent');
        function activeEnglish() {
            englishContent.style.display= "block";
            banglaContent.style.display= "none";
        }

        function activeBangla() {
            englishContent.style.display= "none";
            banglaContent.style.display= "block";
        }
    </script>
@endsection
