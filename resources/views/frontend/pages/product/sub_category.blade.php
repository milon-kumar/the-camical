@extends('frontend.layout.app')
@section('title','About Us')
@section('content')
    <section class="header-title" style="padding:30px 0 ; background:radial-gradient(green,forestgreen);">
        @if(Session::get('locale') == 'en')
            <div class="container">
                <h2 class="title">{{ optional($sub_category)->en_name }}</h2>
                <span class="sub-title">
                    <a style="color: white;" href="{{ route('home') }}">{{ __('public.home') }}</a> /
                    <span class="sub-title">
                        <a style="color: white;" href="{{ route('category-product',optional($sub_category->category)->slug) }}">
                            {{ optional($sub_category->category)->en_name }}
                        </a>
                    </span>
                </span>
            </div>
        @else
            <div class="container">
                <h2 class="title">{{ optional($sub_category)->bn_name }}</h2>
                <span class="sub-title">
                    <a style="color: white;" href="{{ route('home') }}">{{ __('public.home') }}</a> /
                    <span class="sub-title">
                        <a style="color: white;" href="{{ route('category-product',optional($sub_category->category)->slug) }}">
                            {{ optional($sub_category->category)->bn_name }}
                        </a>
                    </span>
                </span>
            </div>
        @endif
    </section> <!-- header-title -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                @foreach($sub_category->products as $product)
                    <a href="{{ route('product',$product->slug) }}">
                        <div class="col-sm-6 col-md-2">
                            <div style="width: 165px;height: 220px;overflow: hidden;">
                                <img class="" style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset(optional($product)->image) }}" alt="">
                            </div>
                            @if(Session::get('locale') == 'en')
                                <h5 class="text-center" style="padding: 8px 0; background: forestgreen;color: white;">{{ $product->en_title }}</h5>
                            @else
                                <h5 class="text-center" style="padding: 8px 0; background: forestgreen;color: white;">{{ $product->bn_title }}</h5>
                            @endif
                        </div>
                    </a>

                @endforeach
            </div>
        </div>
    </section> <!-- team-section -->


@endsection
