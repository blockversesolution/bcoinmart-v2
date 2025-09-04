<section class="market-page-area mt-60 mb-60  ">
    <div class="container">
        <div class="market-tabs">
            <ul class="tabs-slide owl-carousel owl-theme">
                <li><a href="{{route('frontend.markets')}}" class="{{ request()->routeIs('frontend.markets') ? 'active' : '' }}" >Markets Overview</a></li>                <li><a href="trading.html">Trading DataX</a></li>
                <li><a href="opportunity.html">Opportunity</a></li>
                <li><a href="token-unlock.html">Token Unlock</a></li>
            </ul>
        </div>
    </div>

</section>
