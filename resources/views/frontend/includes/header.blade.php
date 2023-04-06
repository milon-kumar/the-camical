<style>
    #myDropdownMenu{
        display: none;
        transition: 0.2s all ease-in-out;
    }
    #myDropdown:hover #myDropdownMenu{
        display: block;
        transition: 0.2s all ease-in-out;
    }
</style>
<header class="header-section">
    <div class="upper">
        <div class="middle-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img style="width: 65px;float: left;" src="{{ asset('/') }}assets/frontend/images/logo_circle.png" alt="image">
                        <h3 style="display: inline-block;
    font-weight: bold;
    line-height: 70px;
    font-size: 34px;
" class="d-inline-block text-uppercase">@lang('public.logo_text')</h3>
                    </a>
                </div>
            </div>
        </div> <!-- middle-bar -->
    </div>

    <nav class="navbar navbar-inverse nav-One hidden-sm hidden-xs">
        <div class="container">
            <div class="collapse navbar-collapse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img style="width: 65px;padding: 0 !important;" src="{{ asset('/') }}assets/frontend/images/logo_circle.png" alt="image">
                    </a>
                </div>

                <ul class="nav navbar-nav nav-one text-uppercase">
                    <li class="{{ Route::is('home') ? 'active' :'' }}">
                        <a href="{{ route('home') }}">{{__('public.about_us')}}</a>
                    </li>
                    <li class="{{ Route::is('list-product') ? 'active' :'' }}">
                        <a href="{{ route('list-product') }}">{{__('public.product_list')}}</a>
                    </li>

                    @php
                        $categories = \App\Models\Category::where('status',1)->get();
                    @endphp

                    <li class="{{Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''}} dropdown"><a href="#">{{__('public.product_service')}} @if($categories->count() > 0)<i class="fa fa-angle-down" aria-hidden="true"></i>@endif</a>
                        @if($categories->count() > 0)
                            <ul class="dropdown-menu">
                                @if(Session::get('locale') == 'en')
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{ route('category-product',optional($category)->slug) }}">
                                                {{ $category->en_name }}
                                                @if(optional($category->subCategories)->count() > 0)
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                @endif
                                            </a>
                                            @if(optional($category->subCategories)->count() > 0)
                                                <ul class="single-dropdown">
                                                    @foreach($category->subCategories as $category )
                                                        <li>
                                                            <a href="{{ route('subcategory-product',optional($category)->slug) }}">
                                                                {{ optional($category)->en_name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                @else
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{ route('category-product',optional($category)->slug) }}">
                                                {{ $category->bn_name }}
                                                @if(optional($category->subCategories)->count() > 0)
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                @endif
                                            </a>
                                            @if(optional($category->subCategories)->count() > 0)
                                                <ul class="single-dropdown">
                                                    @foreach($category->subCategories as $category )
                                                        <li>
                                                            <a href="{{ route('subcategory-product',optional($category)->slug) }}">
                                                                {{ optional($category)->bn_name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        @endif
                    </li>


                    <li class="{{Route::is('diseases-subcategory') ? 'active' : ''}} dropdown">
                        @php
                            $categories = \App\Models\DiseasesCategory::where('status',1)->get();
                        @endphp
                        <a href="#">{{__('public.plant_disease')}}
                            @if( $categories->count() > 0)<i class="fa fa-angle-down" aria-hidden="true"></i>@endif
                        </a>
                        @if( $categories->count() > 0)
                            <ul class="dropdown-menu">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('diseases-subcategory',optional($category)->slug) }}">
                                        @if(Session::get('locale') == 'en')
                                            {{ $category->en_name }}
                                        @else
                                            {{ $category->bn_name }}
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>

                    <li class="{{ Route::is('plant-disease') ? 'active' :'' }}">
                        <a href="{{ route('carrier.create') }}">{{__('public.carrer')}}</a>
                    </li>
                    <li class="{{ Route::is('plant-disease') ? 'active' :'' }}">
                        <a href="{{ route('comment.create') }}">{{__('public.comment')}}</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav nav-two pull-right">
                    <li>
                        <div class="cart cart-wrapper inline-block">
                            <span class="cart-icon">
                                <a href="{{route('admin.locale','en')}}" class="btn btn-dark btn-sm">EN</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="cart cart-wrapper inline-block">
                            <span class="cart-icon">
                                <a href="{{ route('admin.locale','bn') }}" class="btn btn-dark btn-sm">BN</a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div> <!-- container -->
    </nav>

    <div class="navbar-header inline-block visible-sm visible-xs">
        <a class="navbar-brand" style="height: 80px;" href="{{ route('home') }}">
            <img style="width: 65px;padding: 0 !important;" src="{{ asset('/') }}assets/frontend/images/logo_circle.png" alt="image">
        </a>
    </div>


</header> <!-- header-section -->

