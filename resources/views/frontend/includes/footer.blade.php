<footer class="footer-section">
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3>{{ __('public.about_us') }}</h3>
                        <div class="text-left">
                            @if(Session::get('locale') == 'en')
                                <p>{!! Str::limit(get_setting('about_en_description'),300) !!}</p>
                            @else
                                <p>{!! Str::limit(get_setting('about_bn_description'),300) !!}</p>
                            @endif
                        </div>
                    </div> <!-- footer-wrapper -->
                </div>

                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3>{{__('public.corporate_office')}}</h3>
                        <div class="text-left">
                            @if(Session::get('locale') == 'en')
                                <p>{{__('public.location')}} : {{ get_setting('en_location') }}</p>
                                <p>{{__('public.tel')}} : <a style="color: #808790;" href="tel:{{get_setting('en_phone')}}"> {{ get_setting('en_phone') }}</a></p>
                                <p>{{ __("public.email") }} : <a style="color: #808790;" href="mailto:{{get_setting('f_email')}}">{{ get_setting('f_email') }}</a> </p>
                            @else
                                <p>{{__('public.location')}} : {{ get_setting('bn_location') }}</p>
                                <p>{{__('public.tel')}} : <a style="color: #808790;" href="tel:{{get_setting('en_phone')}}"> {{ get_setting('bn_phone') }}</a></p>
                                <p>{{ __("public.email") }} : <a style="color: #808790;" href="mailto:{{get_setting('f_email')}}">{{ get_setting('f_email') }}</a> </p>
                            @endif
                        </div>

                    </div> <!-- footer-wrapper -->
                </div>

                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3>{{__('public.quick_links')}}</h3>

                        <ul class="wrapper-option">
                            <li><a href="{{ route('home') }}">{{__('public.about_us')}}</a></li>
                            <li><a href="{{ route('list-product') }}">{{__('public.product_list')}}</a></li>
                            <li><a href="{{route('admin.locale','en')}}">EN</a></li>
                            <li><a href="{{route('admin.locale','bn')}}">BN</a></li>
                        </ul> <!-- wrapper-option -->

                    </div> <!-- footer-wrapper -->
                </div>

                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3>{{ __('public.latest_product') }}</h3>
                        <ul class="wrapper-option">
                            @foreach(\App\Models\Product::latest()->limit(6)->get() as $product)
                                <li>
                                    <a href="{{ route('product',optional($product)->slug) }}">
                                        @if(Session::get('locale') == 'en')
                                            {{ optional($product)->en_title }}
                                        @else
                                            {{ optional($product)->bn_title }}
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul> <!-- wrapper-option -->
                    </div> <!-- footer-wrapper -->
                </div>
            </div>
        </div>
    </div> <!-- footer-container -->


    <div class="second-footer">
        {{--@include('frontend.components.footer_bottom')--}}

        <div class="copy-right text-center">
            <p>
                @if(Session::get('locale') == 'en')
                    {{ get_setting('en_copyright') }}
                @else
                    {{ get_setting('bn_copyright') }}
                @endif
            </p>
            <a href="https://jugol.ctpbd.com/" target="_blank" style="display: flex;
    right: 5px;
    justify-content: end;
    margin-top: -30px; color: #d0d0d0;padding-right: 10px;">Develop By </a>
        </div> <!-- copy-right -->
    </div> <!-- second-footer -->
</footer> <!-- footer-section -->

