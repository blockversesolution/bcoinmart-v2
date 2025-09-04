<li class="nav-item" role="presentation">
    <div class="buy-sell-button-box">
        <a href="{{route('frontend.p2p.buy')}}" class="{{request()->routeIs('frontend.p2p.buy') ? 'active' : ''}} buy-sell-btn-link">Buy</a>
        <a href="{{route('frontend.p2p.sell')}}" class="{{request()->routeIs('frontend.p2p.sell') ? 'active' : ''}} buy-sell-btn-link">Sell</a>
    </div>
</li>
