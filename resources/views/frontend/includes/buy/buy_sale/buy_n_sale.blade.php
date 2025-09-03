<div class="tab-pane fade show active" id="buy-sell" role="tabpanel" aria-labelledby="buy-sell-tab">

<section class="crypto-purchase-main position-relative overflow-hidden">
    <div class="container">
        <div class="row gy-5 mt-60 mt-responsive">
            @include('frontend.includes.buy.instant_buy')
            @include('frontend.includes.buy.buy_sale_form')
        </div>
    </div>
    <div class="crypto-shape">
        <img src="{{asset('frontend')}}/assets/images/buy/shape.png" alt="" />
    </div>
</section>

@include('frontend.includes.buy.how_to_buy')

@include('frontend.includes.buy.bitcoin_market')

@include('frontend.includes.buy.popular_crypto')
</div>
