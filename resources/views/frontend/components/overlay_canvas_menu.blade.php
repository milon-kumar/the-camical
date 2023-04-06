<div id="offcanvas-menu" class="visible-xs visible-sm">

    <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

    <ul class="menu-wrapper">
        <li>
            <a class="{{ Route::is('home') ? 'active' :'' }}" href="{{ route('home') }}">{{__('public.about_us')}}</a>
        </li>

        <li>
            <a class="{{ Route::is('list-product') ? 'active' :'' }}" href="{{ route('list-product') }}">{{__('public.product_list')}}</a>
        </li>

        <li>
            @php
                $categories = \App\Models\Category::where('status',1)->get();
            @endphp
            <a class="{{Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''}} dropmenu" href="#"> {{ __('public.product_service') }}
                @if($categories->count() > 0)
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                @endif
            </a>
            @if($categories->count() > 0)
                <ul class="dropDown sub-menu">
                    @foreach($categories as $category)
                        <li>
                            <a class="{{Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''}} single-dropmenu" href="{{ route('category-product',optional($category)->slug) }}">
                                @if(Session::get('locale') == 'en')
                                    {{ optional($category)->en_name }}
                                @else
                                    {{ optional($category)->bn_name }}
                                @endif
                                @if($category->subCategories->count() > 0)
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                @endif
                            </a>
                            @if($category->subCategories->count() > 0)
                                <ul class="single-dropDown sub-menu">
                                    @foreach($category->subCategories as $category)
                                        <li>
                                            <a class="{{Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''}}" href="{{ route('subcategory-product',optional($category)->slug) }}">
                                                @if(Session::get('locale') == 'en')
                                                    {{ optional($category)->en_name }}
                                                @else
                                                    {{ optional($category)->bn_name }}
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul><!-- end of dropdown -->
            @endif
        </li><!-- end of li -->

        <li>
            @php
                $categories = \App\Models\DiseasesCategory::where('status',1)->get();
            @endphp

            <a class="{{Route::is('diseases-subcategory') ? 'active' : ''}} dropmenu" href="#"> {{ __('public.plant_disease') }}
                @if($categories->count() > 0)
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                @endif
            </a>
            @if($categories->count() > 0)
                <ul class="dropDown sub-menu">
                    @foreach($categories as $category)
                        <li>
                            <a class="single-dropmenu" href="#">
                                @if(Session::get('locale') == 'en')
                                    {{ optional($category)->en_name }}
                                @else
                                    {{ optional($category)->bn_name }}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul><!-- end of dropdown -->
            @endif
        </li><!-- end of li -->
        <li>
            <a class="" href="{{route('admin.locale','en')}}">EN</a>
        </li>
        <li>
            <a class="" href="{{route('admin.locale','bn')}}">BN</a>
        </li>

    </ul> <!-- menu-wrapper -->
</div>
<!-- Off-Canvas View Only -->
