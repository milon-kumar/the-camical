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
                <h2 class="title">{{ optional($subCategory)->en_name }}</h2>
                <span class="sub-title">
                    <a style="color: white;" href="{{ route('home') }}">{{ __('public.home') }}</a> /
                    <span class="sub-title">
                        <a style="color: white;" href="{{ route('diseases-subcategory',optional($subCategory)->slug) }}">
                            {{ optional($subCategory)->en_name }}
                        </a>
                    </span>
                </span>
            </div>
        @else
            <div class="container">
                <h2 class="title">{{ optional($subCategory)->bn_name }}</h2>
                <span class="sub-title">
                    <a style="color: white;" href="{{ route('home') }}">{{ __('public.home') }}</a> /
                    <span class="sub-title">
                        <a style="color: white;" href="{{ route('diseases-subcategory',optional($subCategory)->slug) }}">
                            {{ optional($subCategory)->bn_name }}
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
                            <a href="{{ route('diseases-subcategory',optional($category)->slug) }}" class="{{ $category->id == $subCategory->diseases_categories_id ? 'menuColor' : 'menuHoverColor'  }}">
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
                        @foreach($diseases as $disease)
                            @include('frontend.components.diseases')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- team-section -->


@endsection
