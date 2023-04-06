<section style="margin: 80px 0;">
    <div class="container">
        <div class="row" style="padding: 10px 0 35px 0;">
            <div class="col-md-12 text-center">
                <h1 class="text-success">{{ __('public.featured_product') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="worker-carousel owl-carousel owl-theme">
                    @foreach($featured_products as $product)
                        @include('frontend.components.single_product')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
