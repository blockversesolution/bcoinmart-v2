@extends('frontend.layouts.app')

@push('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
@endpush

@section('content')
    <main class="main-area">
        <!-- start market marquee -->
        @include('frontend.includes.markets_layout.market_marquee')
        <!-- end market marquee  -->

        <!-- start market pages area  -->
        @include('frontend.includes.markets_layout.menu')
        <!-- end market pages area  -->

        <div class="opportunities-live-text">
            <div class="container">
                <div class="opportunities-live-text-main">
                    <h3 class="opportunities-live-text-title">Live Indicator Insights</h3>
                    <p class="opportunities-live-text">
                        The signals below are based on recent market trends from the past 72 hours and are generated using
                        technical analysis tools. These are for informational purposes only and not financial advice. Always do
                        your own research (DYOR).
                    </p>
                </div>
            </div>
        </div>

        <!-- start market crypto tabs area  -->
        <section class="connected-section trading-crypto market-crypto-tab-area mb-120 position-relative mt-60">
            <div class="container">
                <!-- First Row Update data Start -->
                <div class="main-action-tabs">
                    <div class="opportunities-nav-tab">
                        <ul class="nav nav-tabs actionTab tabs-slide owl-carousel owl-theme" id="actionTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="opportunity-buy-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#opportunity-buy"
                                    type="button"
                                    role="tab"
                                >
                                    Buy
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="opportunity-sell-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#opportunity-sell"
                                    type="button"
                                    role="tab"
                                >
                                    Sell
                                </button>
                            </li>
                        </ul>
                        <div class="trading-data-content-text">
                            <button id="refreshBtn">
                                <img id="refreshIcon" src="{{asset('frontend')}}/assets/images/icon/refresh.png" alt="icon" />
                                <span>Lasted Update: 2025-06-12 12:00 (UTC+6)</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-content mt-60" id="actionTabContent">
                        <div class="tab-pane fade show active" id="opportunity-buy" role="tabpanel" aria-labelledby="opportunity-buy-tab">
                            <div class="market-datatable">
                                <table id="cryptoTable" class="display cryptoTable" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Pair</th>
                                        <th>Price</th>
                                        <th>Change (24h)</th>
                                        <th>Market Cap</th>
                                        <th>Category</th>
                                        <th>Signal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="opportunity-sell" role="tabpanel" aria-labelledby="opportunity-sell-tab">

                            <div class="market-datatable">
                                <table id="cryptoTable" class="display cryptoTable" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Pair</th>
                                        <th>Price</th>
                                        <th>Change (24h)</th>
                                        <th>Market Cap</th>
                                        <th>Category</th>
                                        <th>Signal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                        <td>$103,851.15</td>
                                        <td class="green-data-text">-1.21%</td>
                                        <td>$41.4B</td>
                                        <td>POW, Payments</td>
                                        <td>1D (MACD) Golden cross</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- First Row Update data End -->
                <!-- Auto Trade start -->
                <div class="main-action-tabs mt-60" >
                    <div class="opportunities-nav-tab-title">
                        <h1>Auto Trade with Experts</h1>
                    </div>
                    <div class="opportunities-nav-tab">
                        <ul class="nav nav-tabs actionTab tabs-slide owl-carousel owl-theme" id="actionTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="spot-Futures-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#o-spot"
                                    type="button"
                                    role="tab"
                                >
                                    Spot
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="future-Futures-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#o-futures"
                                    type="button"
                                    role="tab"
                                >
                                    Futures
                                </button>
                            </li>
                        </ul>
                        <div class="trading-data-content-text">
                            <a href="#" class="more-or-less">More ></a>
                        </div>
                    </div>
                    <div class="tab-content" id="actionTabContent">
                        <div class="tab-pane fade show active" id="o-spot" role="tabpanel" aria-labelledby="spot-Futures-tab">
                            <div class="trading-data-content">
                                <section class="opportunities-card-main">
                                    <div class="row g-4">
                                        <!-- 1. single card start  -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="border-gradient-2 m-0">
                                                <div class="opportunity-card">
                                                    <div class="card-header">
                                                        <div class="user-info">
                                                            <div class="avatar">
                                                                <img src="{{asset('frontend')}}/assets/images/profile/1.png" alt="image" />
                                                            </div>
                                                            <div class="user-details">
                                                                <h4 class="user-details-name">Lorem Ipsum</h4>
                                                                <div class="user-stats">
                                    <span class="stat-badge">
                                      <img src="{{asset('frontend')}}/assets/images/profile/user.svg" alt="img" />
                                      52/600
                                    </span>
                                                                    <span class="stat-badge">API</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="star-icon">★</div>
                                                    </div>

                                                    <div class="roi-and-chart">
                                                        <div class="roi-section">
                                                            <div class="roi-label">
                                                                <p>
                                                                    ROI
                                                                    <span>+70.98%</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="chart-line">
                                                            <div class="graph">
                                                                <canvas class="sparkline2" id="spark-chart1"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stats-row">
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days PNL</span>
                                                            <p class="stat-value profit-value">+712,167.92</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">AUM</span>
                                                            <p class="stat-value">1,341,381.50</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days MDD</span>
                                                            <p class="stat-value">83.10%</p>
                                                        </div>
                                                    </div>

                                                    <div class="opportunities-btn-row">
                                                        <a href="#" class="secondary-btn">Mock</a>
                                                        <a href="#" class="primary-btn">Copy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 1. single card End  -->
                                        <!-- 2. single card start  -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="border-gradient-2 m-0">
                                                <div class="opportunity-card">
                                                    <div class="card-header">
                                                        <div class="user-info">
                                                            <div class="avatar">
                                                                <img src="{{asset('frontend')}}/assets/images/profile/1.png" alt="image" />
                                                            </div>
                                                            <div class="user-details">
                                                                <h4 class="user-details-name">Lorem Ipsum</h4>
                                                                <div class="user-stats">
                                    <span class="stat-badge">
                                      <img src="{{asset('frontend')}}/assets/images/profile/user.svg" alt="img" />
                                      52/600
                                    </span>
                                                                    <span class="stat-badge">API</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="star-icon">★</div>
                                                    </div>

                                                    <div class="roi-and-chart">
                                                        <div class="roi-section">
                                                            <div class="roi-label">
                                                                <p>
                                                                    ROI
                                                                    <span>+70.98%</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="chart-line">
                                                            <div class="graph">
                                                                <canvas class="sparkline2" id="spark-chart2"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stats-row">
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days PNL</span>
                                                            <p class="stat-value profit-value">+712,167.92</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">AUM</span>
                                                            <p class="stat-value">1,341,381.50</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days MDD</span>
                                                            <p class="stat-value">83.10%</p>
                                                        </div>
                                                    </div>

                                                    <div class="opportunities-btn-row">
                                                        <a href="#" class="secondary-btn">Mock</a>
                                                        <a href="#" class="primary-btn">Copy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2. single card End  -->
                                        <!-- 3. single card start  -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="border-gradient-2 m-0">
                                                <div class="opportunity-card">
                                                    <div class="card-header">
                                                        <div class="user-info">
                                                            <div class="avatar">
                                                                <img src="{{asset('frontend')}}/assets/images/profile/1.png" alt="image" />
                                                            </div>
                                                            <div class="user-details">
                                                                <h4 class="user-details-name">Lorem Ipsum</h4>
                                                                <div class="user-stats">
                                    <span class="stat-badge">
                                      <img src="{{asset('frontend')}}/assets/images/profile/user.svg" alt="img" />
                                      52/600
                                    </span>
                                                                    <span class="stat-badge">API</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="star-icon">★</div>
                                                    </div>

                                                    <div class="roi-and-chart">
                                                        <div class="roi-section">
                                                            <div class="roi-label">
                                                                <p>
                                                                    ROI
                                                                    <span>+70.98%</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="chart-line">
                                                            <div class="graph">
                                                                <canvas class="sparkline2" id="spark-chart3"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stats-row">
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days PNL</span>
                                                            <p class="stat-value profit-value">+712,167.92</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">AUM</span>
                                                            <p class="stat-value">1,341,381.50</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days MDD</span>
                                                            <p class="stat-value">83.10%</p>
                                                        </div>
                                                    </div>

                                                    <div class="opportunities-btn-row">
                                                        <a href="#" class="secondary-btn">Mock</a>
                                                        <a href="#" class="primary-btn">Copy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 3. single card End  -->
                                        <!-- 4. single card start  -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="border-gradient-2 m-0">
                                                <div class="opportunity-card">
                                                    <div class="card-header">
                                                        <div class="user-info">
                                                            <div class="avatar">
                                                                <img src="{{asset('frontend')}}/assets/images/profile/1.png" alt="image" />
                                                            </div>
                                                            <div class="user-details">
                                                                <h4 class="user-details-name">Lorem Ipsum</h4>
                                                                <div class="user-stats">
                                    <span class="stat-badge">
                                      <img src="{{asset('frontend')}}/assets/images/profile/user.svg" alt="img" />
                                      52/600
                                    </span>
                                                                    <span class="stat-badge">API</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="star-icon">★</div>
                                                    </div>

                                                    <div class="roi-and-chart">
                                                        <div class="roi-section">
                                                            <div class="roi-label">
                                                                <p>
                                                                    ROI
                                                                    <span>+70.98%</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="chart-line">
                                                            <div class="graph">
                                                                <canvas class="sparkline2" id="spark-chart4"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stats-row">
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days PNL</span>
                                                            <p class="stat-value profit-value">+712,167.92</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">AUM</span>
                                                            <p class="stat-value">1,341,381.50</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days MDD</span>
                                                            <p class="stat-value">83.10%</p>
                                                        </div>
                                                    </div>

                                                    <div class="opportunities-btn-row">
                                                        <a href="#" class="secondary-btn">Mock</a>
                                                        <a href="#" class="primary-btn">Copy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 4. single card End  -->
                                        <!-- 5. single card start  -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="border-gradient-2 m-0">
                                                <div class="opportunity-card">
                                                    <div class="card-header">
                                                        <div class="user-info">
                                                            <div class="avatar">
                                                                <img src="{{asset('frontend')}}/assets/images/profile/1.png" alt="image" />
                                                            </div>
                                                            <div class="user-details">
                                                                <h4 class="user-details-name">Lorem Ipsum</h4>
                                                                <div class="user-stats">
                                    <span class="stat-badge">
                                      <img src="{{asset('frontend')}}/assets/images/profile/user.svg" alt="img" />
                                      52/600
                                    </span>
                                                                    <span class="stat-badge">API</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="star-icon">★</div>
                                                    </div>

                                                    <div class="roi-and-chart">
                                                        <div class="roi-section">
                                                            <div class="roi-label">
                                                                <p>
                                                                    ROI
                                                                    <span>+70.98%</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="chart-line">
                                                            <div class="graph">
                                                                <canvas class="sparkline2" id="spark-chart5"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stats-row">
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days PNL</span>
                                                            <p class="stat-value profit-value">+712,167.92</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">AUM</span>
                                                            <p class="stat-value">1,341,381.50</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days MDD</span>
                                                            <p class="stat-value">83.10%</p>
                                                        </div>
                                                    </div>

                                                    <div class="opportunities-btn-row">
                                                        <a href="#" class="secondary-btn">Mock</a>
                                                        <a href="#" class="primary-btn">Copy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 5. single card End  -->
                                        <!-- 6. single card start  -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="border-gradient-2 m-0">
                                                <div class="opportunity-card">
                                                    <div class="card-header">
                                                        <div class="user-info">
                                                            <div class="avatar">
                                                                <img src="{{asset('frontend')}}/assets/images/profile/1.png" alt="image" />
                                                            </div>
                                                            <div class="user-details">
                                                                <h4 class="user-details-name">Lorem Ipsum</h4>
                                                                <div class="user-stats">
                                    <span class="stat-badge">
                                      <img src="{{asset('frontend')}}/assets/images/profile/user.svg" alt="img" />
                                      52/600
                                    </span>
                                                                    <span class="stat-badge">API</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="star-icon">★</div>
                                                    </div>

                                                    <div class="roi-and-chart">
                                                        <div class="roi-section">
                                                            <div class="roi-label">
                                                                <p>
                                                                    ROI
                                                                    <span>+70.98%</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="chart-line">
                                                            <div class="graph">
                                                                <canvas class="sparkline2" id="spark-chart6"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="stats-row">
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days PNL</span>
                                                            <p class="stat-value profit-value">+712,167.92</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">AUM</span>
                                                            <p class="stat-value">1,341,381.50</p>
                                                        </div>
                                                        <div class="stat-item">
                                                            <span class="stat-label">30 Days MDD</span>
                                                            <p class="stat-value">83.10%</p>
                                                        </div>
                                                    </div>

                                                    <div class="opportunities-btn-row">
                                                        <a href="#" class="secondary-btn">Mock</a>
                                                        <a href="#" class="primary-btn">Copy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 6. single card End  -->
                                    </div>
                                </section>
                                <!-- Accordion start  -->
                                <section class="accordion-bcoinmart accordion-opportunity">
                                    <div class="container">
                                        <div class="common-heading-section text-center text-md-start">
                                            <h2 class="text-white">Announcements</h2>
                                        </div>
                                        <div class="row mt-60">
                                            <div class="col-md-12">
                                                <div class="accordion-content">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="border-gradient-2">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button
                                                                        class="accordion-button"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne"
                                                                    >
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                                        Ipsum has been the industry's stand-ard dummy text ever since
                                                                        <span class="accordion-date">Friday, June 13, 2025</span>
                                                                    </button>

                                                                </h2>
                                                                <div
                                                                    id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample"
                                                                >
                                                                    <div class="accordion-body">
                                                                        <p class="bcoinmart-accordion-body">
                                                                            It is a long established fact that a reader will be distracted by the readable
                                                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                                                            'Content here, content here', making it look like readable English. Many desktop
                                                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                                                            model text, and a search for 'lorem ipsum' will uncover.
                                                                        </p>
                                                                        <a href="#" class="primary-btn me-2">Lorem Ipsum is simply text</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="border-gradient-2">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo"
                                                                    >
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                                        Ipsum has been the industry's stand-ard dummy text ever since
                                                                        <span class="accordion-date">Friday, June 13, 2025</span>
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample"
                                                                >
                                                                    <div class="accordion-body">
                                                                        <p class="bcoinmart-accordion-body">
                                                                            It is a long established fact that a reader will be distracted by the readable
                                                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                                                            'Content here, content here', making it look like readable English. Many desktop
                                                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                                                            model text, and a search for 'lorem ipsum' will uncover.
                                                                        </p>
                                                                        <a href="#" class="primary-btn me-2">Lorem Ipsum is simply text</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="border-gradient-2">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree"
                                                                    >
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                                        Ipsum has been the industry's stand-ard dummy text ever since
                                                                        <span class="accordion-date">Friday, June 13, 2025</span>
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample"
                                                                >
                                                                    <div class="accordion-body">
                                                                        <p class="bcoinmart-accordion-body">
                                                                            It is a long established fact that a reader will be distracted by the readable
                                                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                                                            'Content here, content here', making it look like readable English. Many desktop
                                                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                                                            model text, and a search for 'lorem ipsum' will uncover.
                                                                        </p>
                                                                        <a href="#" class="primary-btn me-2">Lorem Ipsum is simply text</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-gradient-2">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFour"
                                                                    >
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                                        Ipsum has been the industry's stand-ard dummy text ever since
                                                                        <span class="accordion-date">Friday, June 13, 2025</span>
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapseFour"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample"
                                                                >
                                                                    <div class="accordion-body">
                                                                        <p class="bcoinmart-accordion-body">
                                                                            It is a long established fact that a reader will be distracted by the readable
                                                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                                                            'Content here, content here', making it look like readable English. Many desktop
                                                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                                                            model text, and a search for 'lorem ipsum' will uncover.
                                                                        </p>
                                                                        <a href="#" class="primary-btn me-2">Lorem Ipsum is simply text</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-gradient-2">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFive"
                                                                    >
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                                        Ipsum has been the industry's stand-ard dummy text ever since
                                                                        <span class="accordion-date">Friday, June 13, 2025</span>
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapseFive"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample"
                                                                >
                                                                    <div class="accordion-body">
                                                                        <p class="bcoinmart-accordion-body">
                                                                            It is a long established fact that a reader will be distracted by the readable
                                                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                                                            'Content here, content here', making it look like readable English. Many desktop
                                                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                                                            model text, and a search for 'lorem ipsum' will uncover.

                                                                        </p>
                                                                        <a href="#" class="primary-btn me-2">Lorem Ipsum is simply text</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Accordion End  -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="o-futures" role="tabpanel" aria-labelledby="future-Futures-tab">
                            <div class="container">
                                <p class="text-white">Futures</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Auto Trade End -->
            </div>
            <div class="most-trending-shape">
                <img src="{{asset('frontend')}}/assets/images/buy/bitcoin/bticoin.png" alt="" />
            </div>
            <div class="process-shape-2">
                <img src="{{asset('frontend')}}/assets/images/trading/shape.png" alt="" />
            </div>
            <div class="how-to-buy-shape">
                <img src="{{asset('frontend')}}/assets/images/buy/buy-crypto/shape.png" alt="" />
            </div>
        </section>
        <!-- end market crypto tabs area  -->
    </main>
@endsection

@push('js')

    <!-- datatable  -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <!-- owl carousel  -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script>
        // trading chart
        const ctx = document.getElementById("tradingChart").getContext("2d");
        const isMobile = window.innerWidth < 768;
        const barWidth = isMobile ? 25 : 57; // ✅ 30px for mobile, 57px for desktop

        const data = {
            labels: ["2020", "2021", "2022", "2023", "2024", "2025"],
            datasets: [
                {
                    label: "",
                    data: [2, 10, 6, 9, 7, 11],
                    backgroundColor: "#5c5f66",
                    borderRadius: 2,
                    barThickness: barWidth, // ✅ Fixed here
                },
            ],
        };

        const config = {
            type: "bar",
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        top: 20,
                        bottom: 10,
                    },
                },
                scales: {
                    x: {
                        ticks: {
                            color: "#ccc",
                            callback: function (value, index) {
                                return this.getLabelForValue(index);
                            },
                        },
                        grid: {
                            display: false,
                        },
                    },
                    y: {
                        position: "right", // ✅ Values right aligned
                        ticks: {
                            color: "#aaa",
                            callback: () => "10.52K",
                        },
                        grid: {
                            color: "#333",
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: "#1A1D29",
                        borderColor: "#FF4D4D",
                        borderWidth: 1,
                    },
                },
            },
        };

        new Chart(ctx, config);


        // Market search box js
        $(document).on("click", ".market-search-button", function (e) {
            const $input = $(this).closest(".market-search-box").find('input[type="search"]');
            $input.css("display", "inline-block").focus();
        });

        // Hide input when clicking outside
        $(document).on("click", function (e) {
            const $target = $(e.target);
            const isInside = $target.closest(".market-search-box").length > 0;

            if (!isInside) {
                $('.market-search-box input[type="search"]').css("display", "none");
            }
        });

        document.querySelectorAll(".dropdown-custom .dropdown-menu .dropdown-item").forEach((item) => {
            item.addEventListener("click", function (e) {
                e.preventDefault();

                const image = this.dataset.image;
                const value = this.dataset.value;

                const dropdown = this.closest(".dropdown");
                const button = dropdown.querySelector(".select-token");

                // Just update button content
                button.innerHTML = `<img src="${image}" alt="${value}"> <span>${value}</span>`;
            });
        });
    </script>
    <script>
        // market marquee headline js

        const marquee = document.getElementById("marquee");
        const content = document.querySelector(".marquee-content");

        marquee.addEventListener("mouseenter", () => {
            content.style.animationPlayState = "paused";
        });

        marquee.addEventListener("mouseleave", () => {
            content.style.animationPlayState = "running";
        });

        AOS.init();

        document.addEventListener("DOMContentLoaded", function () {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        const button = document.getElementById("refreshBtn");
        const icon = document.getElementById("refreshIcon");

        button.addEventListener("click", () => {
            // Add the animation class
            icon.classList.add("spin");

            // Remove the class after animation ends so it can be triggered again
            icon.addEventListener(
                "animationend",
                () => {
                    icon.classList.remove("spin");
                },
                {once: true}
            );
        });
    </script>
    <script>
        function renderSparkline(id, data, color = "lime") {
            new Chart(document.getElementById(id), {
                type: "line",
                data: {
                    labels: data.map((_, i) => i),
                    datasets: [
                        {
                            data: data,
                            borderColor: color,
                            borderWidth: 1.5,
                            pointRadius: 0,
                            fill: false,
                            tension: 0.3,
                        },
                    ],
                },
                options: {
                    plugins: {legend: {display: false}},
                    responsive: false,
                    scales: {
                        x: {display: false},
                        y: {display: false},
                    },
                    elements: {
                        line: {tension: 0.3},
                    },
                },
            });
        }
        renderSparkline("spark-chart1", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart2", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart3", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart4", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart5", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart6", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart7", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart8", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart9", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart10", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart11", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart12", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart13", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart14", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart15", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart16", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart17", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart18", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart19", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart20", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart21", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart22", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart23", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
    </script>

@endpush
