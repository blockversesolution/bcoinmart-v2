<section class="market-page-area mt-60 mb-60  ">
    <div class="container">
        <div class="market-tabs">
            <ul class="tabs-slide owl-carousel owl-theme">
                <li><a href="{{route('frontend.markets')}}" class="{{ request()->routeIs('frontend.markets') ? 'active' : '' }}" >Markets Overview</a></li>
                <li><a href="{{route('frontend.trading')}}" class="{{ request()->routeIs('frontend.trading') ? 'active' : '' }}">Trading DataX</a></li>
                <li><a href="{{route('frontend.opportunity')}}" class="{{ request()->routeIs('frontend.opportunity') ? 'active' : '' }}">Opportunity</a></li>
                <li><a href="{{route('frontend.token.unlock')}}" class="{{ request()->routeIs('frontend.token.unlock') ? 'active' : '' }}">Token Unlock</a></li>
            </ul>
        </div>
    </div>

</section>
