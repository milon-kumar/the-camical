@extends('frontend.layout.app')
@section('title','About Us')
@section('content')
    <section class="header-title" style="padding:30px 0 ; background:radial-gradient(green,forestgreen);">
        @if(Session::get('locale') == 'en')
            <div class="container">
                <h2 class="title">{{ optional($category)->en_name }}</h2>
                <span class="sub-title"> <a class="text-white" href="{{ route('home') }}">{{__('public.home')}}</a> / <span class="sub-title">{{ optional($category)->en_name }}</span></span>
            </div>
        @else
            <div class="container">
                <h2 class="title">{{ optional($category)->bn_name }}</h2>
                <span class="sub-title"> <a class="text-white" href="{{ route('home') }}">{{__('public.home')}}</a> / <span class="sub-title">{{ optional($category)->bn_name }}</span></span>
            </div>
        @endif
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        @foreach($category->products as $product)
                            <a href="{{ route('product',$product->slug) }}">
                                <div class="col-sm-6">
                                    <div style="width:311px;height:415px;overflow: hidden;margin: 0 auto;">
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
                <div class="col-md-1" style="border-right: 1px solid #e8e8e8;height:100vh;"></div>
                <div class="col-md-4 text-left">
                    <div class="" style="margin-bottom: 20px;">
                        <h4 class="font-weight-bold">{{__('public.recent_posts')}}</h4>
                        @foreach(\App\Models\Product::where('status',1)->latest()->limit(8)->get() as $product)
                            <div class="">
                                @if(Session::get('locale') == 'en')
                                    <a href="{{ route('product',optional($product)->slug) }}">{{ optional($product)->en_title }}</a>
                                @else
                                    <a href="{{ route('product',optional($product)->slug) }}">{{ optional($product)->bn_title }}</a>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="" style="margin-bottom: 20px;">
                        <h4 class="font-weight-bold">{{__('public.categories')}}</h4>
                        @foreach($category->subCategories as $category)
                            <div class="">
                                @if(Session::get('locale') == 'en')
                                    <a href="{{ route('subcategory-product',optional($category)->slug) }}">{{ optional($category)->en_name }}</a>
                                @else
                                    <a href="{{ route('subcategory-product',optional($category)->slug) }}">{{ optional($category)->bn_name }}</a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- team-section -->


@endsection
