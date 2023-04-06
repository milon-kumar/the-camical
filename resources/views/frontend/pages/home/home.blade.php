@extends('frontend.layout.app')
@section('title','Home')
@section('content')



    @include('frontend.components.sliders')
{{--    @include('frontend.components.about_us')--}}
    {{--@include('frontend.components.featured_product')--}}
    @include('frontend.components.popular_product')


{{--    @include('frontend.components.blogs')--}}
{{--    @include('frontend.components.brands')--}}
@endsection
