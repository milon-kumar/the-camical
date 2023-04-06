<section class="growing-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 visible-sm visible-xs">
                <div class="caption">
                    <img src="assets/images/instrument.jpg" alt="">
                </div>
            </div>

            <div class="col-md-7 col-sm-12">
                <div class="content-wrapper">
                    <h3>{{ get_setting('about_title') }}</h3>

                    <p>{!! get_setting('about_description') !!}</p>

                    <a href="{{ get_setting('about_link') }}" class="btn btn-primary">Read More</a>
                </div> <!-- content-wrapper -->
            </div>

            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="caption wow slideInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInRight;">
                    <img src="{{asset('/')}}assets/frontend/images/instrument.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
