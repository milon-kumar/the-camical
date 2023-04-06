@extends('frontend.layout.app')
@section('title','About Us')
@section('style')
    <style>
        .titleStyle {
            font-weight: bold;
            font-size: 20px;
            padding: 0 30px;
        }
    </style>


    <div class="tooltip">Hover over me
        <span class="tooltiptext">Tooltip text</span>
    </div>
@endsection

@section('content')
    <section class="header-title" style="padding:30px 0 ; background:radial-gradient(green,forestgreen);">
        <div class="container">
            <h2 class="title">{{__('public.product_list')}}</h2>
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            @foreach($products as $product)
                <div class="row toolbarSelector" >
                    <div class="col-md-4 mx-auto" style="box-shadow: 0 0 4px #a5a5a5; margin: 10px 20px;padding: 5px;">
                        <div class="" style="display: flex; align-items: center;justify-content: space-between;">
                            <div style="width: 65px;height: 65px; overflow: hidden;border: 1px solid #d0d0d0; border-radius: 50px;">
                                <img style="width:100%;height: 100%; object-fit: contain;" src="{{ asset(optional($product)->image) }}" alt="">
                            </div>
                            <div class="">
                                @if(Session::get('locale') == 'en')
                                    <p class="font-weight-bold titleStyle">{{ optional($product)->en_title }}</p>
                                @else
                                    <p class="font-weight-bold titleStyle">{{ optional($product)->bn_title }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

