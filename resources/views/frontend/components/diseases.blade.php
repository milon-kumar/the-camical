<div class="col-md-4">
    <div class="card border-0 rounded-0 text-center" style="box-shadow: 0 0 5px 2px #e7e7e7;border: 1px solid #e8e8e8;">
        <div class="card-img" style="width: 100%;height: 100%;overflow: hidden;">
            <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ asset(optional($disease)->image) }}" alt="">
        </div>
        @if(Session::get('locale') == 'en')
            <div class="card-body">
                <div class="" style="padding: 10px;">
                    <h5 class="pt-2" style="font-weight: bold;">
                        <a href="{{ route('diseases',optional($disease)->slug) }}">
                            {{ optional($disease)->en_short_name }}
                        </a>
                    </h5>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class="" style="padding: 10px;">
                    <h5 class="pt-2" style="font-weight: bold;">
                        <a href="{{ route('diseases',optional($disease)->slug) }}">
                            {{ optional($disease)->bn_short_name }}
                        </a>
                    </h5>
                </div>
            </div>
        @endif
    </div>
</div>
