<section class="slider-section">
    <h2 class="hidden">title</h2>

    <div class="main-slider">
        <div id="main-slider-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach(\App\Models\Slider::where('status',1)->orderBy('order','ASC')->get() as $key=> $slider)
                    <div class="item {{ $key == 0 ? 'active' : '' }}">
                        <div class="slider-one" style="background: url({{ asset($slider->image) }});background-repeat: no-repeat;background-size: cover; background-position:center center;width: 100%;"></div>
                        @if(Session::get('locale') == 'en')
                            <div class="content text-center">
                                <div class="large-text" data-animation="animated fadeInDown">{{ optional($slider)->en_title }}</div>

                                <div class="guard">
                                    <p class="small-text" data-animation="animated fadeInDown">{{ optional($slider)->en_short_description }}</p>
                                </div>

                                <div class="link-button" data-animation="animated fadeInUp">
                                    <a href="{{ optional($slider)->url }}" class="btn btn-primary">{{ optional($slider)->en_btn_name }}</a>
                                </div>
                            </div>
                        @else
                            <div class="content text-center">
                                <div class="large-text" data-animation="animated fadeInDown">{{ optional($slider)->bn_title }}</div>

                                <div class="guard">
                                    <p class="small-text" data-animation="animated fadeInDown">{{ optional($slider)->bn_short_description }}</p>
                                </div>

                                <div class="link-button" data-animation="animated fadeInUp">
                                    <a href="{{ optional($slider)->url }}" class="btn btn-primary">{{ optional($slider)->bn_btn_name }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>

            <a class="left carousel-control" href="#main-slider-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>

            <a class="right carousel-control" href="#main-slider-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section> <!-- slider-section -->
