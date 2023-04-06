<div class="worker-detail item" style="margin-top: 5px;box-shadow: 0 0 3px 0px #adadad">
    <div style="width: 204px;height: 272px;overflow: hidden;">
        <img class="" style="width:100%;height:100%; object-fit: contain; margin: 0 auto;" src="{{ asset($product->image) }}" alt="">
    </div>


    <div class="worker-content">
        <h5 class="text-center" style="padding: 8px 0; background: forestgreen;color: white;">
            @if(Session::get('locale') == 'en')
                <a href="{{ route('product',$product->slug) }}" style="color: white;">{{ $product->en_title }}</a>
            @else
                <a href="{{ route('product',$product->slug) }}" style="color: white;">{{ $product->bn_title }}</a>
            @endif
        </h5>
    </div>
</div> <!-- worker-detail -->
