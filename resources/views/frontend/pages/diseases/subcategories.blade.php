@extends('frontend.layout.app')
@section('title','About Us')
@section('style')
    <style>
        .menuColor{
            color: white;
            font-weight: bold;
            background: forestgreen;
            display: block;
        }
        .menuHoverColor{
            color: black;
            font-weight: bold;
            background: white;
            display: block;
            border: 1px solid #e9e9e9;
        }
    </style>
@endsection
@section('content')
    <section class="header-title" style="padding:30px 0 ; background:radial-gradient(green,forestgreen);">
        @if(Session::get('locale') == 'en')
            <div class="container">
                <h2 class="title">{{ optional($p_category)->en_name }}</h2>
                <span class="sub-title">
                    <a style="color: white;" href="{{ route('home') }}">{{ __('public.home') }}</a> /
                    <span class="sub-title">
                        <a style="color: white;" href="{{ route('diseases-subcategory',optional($p_category)->slug) }}">
                            {{ optional($p_category)->en_name }}
                        </a>
                    </span>
                </span>
            </div>
        @else
            <div class="container">
                <h2 class="title">{{ optional($p_category)->bn_name }}</h2>
                <span class="sub-title">
                    <a style="color: white;" href="{{ route('home') }}">{{ __('public.home') }}</a> /
                    <span class="sub-title">
                        <a style="color: white;" href="{{ route('diseases-subcategory',optional($p_category)->slug) }}">
                            {{ optional($p_category)->bn_name }}
                        </a>
                    </span>
                </span>
            </div>
        @endif
    </section> <!-- header-title -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group rounded-0">
                        @foreach($categories as $category)

                            <a href="{{ route('diseases-subcategory',optional($category)->slug) }}" class="{{ $category->id == $p_category->id ? 'menuColor' : 'menuHoverColor'  }}">
                                <li class="list-group-item rounded-0" style="background: none;border:none;">
                                    @if(Session::get('locale') == 'en')
                                        {{ optional($category)->en_name }}
                                    @else
                                        {{ optional($category)->bn_name }}
                                    @endif
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach($s_category as $category)
                            <div class="col-md-4">
                                <div class="card border-0 rounded-0 text-center" style="box-shadow: 0 0 5px 2px #e7e7e7;border: 1px solid #e8e8e8;">
                                    <div class="card-img" style="width: 100%;height: 100%;overflow: hidden;">
                                        <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset(optional($category)->image) }}" alt="">
                                    </div>
                                    @if(Session::get('locale') == 'en')
                                        <div class="card-body">
                                            <div class="" style="padding: 10px;">
                                                <h5 class="pt-2" style="font-weight: bold;">
                                                    <a href="{{ route('subcategory-diseases',optional($category)->slug) }}">
                                                        {{ optional($category)->en_name }}
                                                    </a>
                                                </h5>
                                                <small style="line-height: 20px;
                                                        display: block;
                                                        font-weight: bold;">{!! Str::limit(optional($category)->en_description,80) !!}</small>
                                            </div>
                                            <div style="padding: 12px 0;">
                                                <a style="font-weight: bold;" href="{{ route('subcategory-diseases',optional($category)->slug) }}">Read More ...</a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card-body">
                                            <div class="" style="padding: 10px;">
                                                <h5 class="pt-2" style="font-weight: bold;">
                                                    <a href="{{ route('subcategory-diseases',optional($category)->slug) }}">
                                                        {{ optional($category)->bn_name }}
                                                    </a>
                                                </h5>
                                                <small style="line-height: 20px;
                                                        display: block;
                                                        font-weight: bold;">
                                                    {!! Str::limit(optional($category)->bn_description,80) !!}</small>
                                            </div>
                                            <div style="padding: 12px 0;">
                                                <a style="font-weight: bold;" href="{{ route('subcategory-diseases',optional($category)->slug) }}">বিস্তারিত...</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- team-section -->


@endsection
