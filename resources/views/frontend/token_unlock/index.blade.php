@extends('frontend.layouts.app')
@section('content')
    <main class="main-area">
        <!-- start market marquee -->
        @include('frontend.includes.markets_layout.market_marquee')
        <!-- end market marquee  -->

        <!-- start market pages area  -->
        @include('frontend.includes.markets_layout.menu')
        <!-- end market pages area  -->


        <!-- start market crypto tabs area  -->
        <section class="market-crypto-tab-area mb-120 position-relative">
            <div class="container">
                <div class="main-action-tabs">

                    <div class="market-table-tabs mt-4">
                        <div class="market-tabs-search d-flex justify-content-between align-items-center mb-60">
                            <ul class="nav nav-tabs actionTab tabs-slide owl-carousel owl-theme" id="actionTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="market-all-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#market-all"
                                        type="button"
                                        role="tab"
                                    >
                                        All
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Solana-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Solana"
                                        type="button"
                                        role="tab"
                                    >
                                        Solana
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="RWA-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#RWA"
                                        type="button"
                                        role="tab"
                                    >
                                        RWA
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Meme-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Meme"
                                        type="button"
                                        role="tab"
                                    >
                                        Meme
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Alpha-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Alpha"
                                        type="button"
                                        role="tab"
                                    >
                                        Alpha
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Payments-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Payments"
                                        type="button"
                                        role="tab"
                                    >
                                        Payments
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="AI-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#AI"
                                        type="button"
                                        role="tab"
                                    >
                                        AI
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Layer-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Layer"
                                        type="button"
                                        role="tab"
                                    >
                                        Layer 1 / Layer 2
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Metaverse-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Metaverse"
                                        type="button"
                                        role="tab"
                                    >
                                        Metaverse
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="Others-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#Others"
                                        type="button"
                                        role="tab"
                                    >
                                        Others
                                    </button>
                                </li>
                            </ul>
                            <div class="market-search-box pointer d-flex g-5 align-items-center">
                                <input type="search" name="market-search" id="market-search" placeholder="Search Coin Name">
                                <span class="market-search-button"><i class="fas fa-search"></i></span>
                            </div>
                        </div>


                        <div class="tab-content" id="actionTabContent">
                            <div class="tab-pane fade show active" id="market-all" role="tabpanel" aria-labelledby="market-all-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="Solana" role="tabpanel" aria-labelledby="Solana-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="RWA" role="tabpanel" aria-labelledby="RWA-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Meme" role="tabpanel" aria-labelledby="Meme-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Alpha" role="tabpanel" aria-labelledby="Alpha-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Payments" role="tabpanel" aria-labelledby="Payments-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="AI" role="tabpanel" aria-labelledby="AI-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Layer" role="tabpanel" aria-labelledby="Layer-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Metaverse" role="tabpanel" aria-labelledby="Metaverse-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Others" role="tabpanel" aria-labelledby="Others-tab">
                                <div class="market-datatable">
                                    <table id="cryptoTable" class="display cryptoTable token-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Market Cap</th>
                                            <th>Cir Supply</th>
                                            <th>Total Unlocked</th>
                                            <th>Next Unlock</th>
                                            <th>Next Unlock Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="green-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-08-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-10-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-11-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> <p class="reffer-name-td"><span class="refer-coin-name">BTC</span> <span>Bitcoin</span></p>
                                                </div>
                                            </td>
                                            <td><p class="d-flex align-items-end justify-content-end flex-column"><span class="token-data-text">$103,951.15</span> <span class="red-data-text">-1.21%</span></p></td>
                                            <td>$41.41B</td>
                                            <td>$2.09T</td>
                                            <td>
                                                91.94%
                                                <div class="token-bars progress custom-progress" >
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" data-progress="90">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-end justify-content-end flex-column">
                                                    <span class="token-data-text">625000001000CAT</span><span class="data-font-size">$375,000(0.69% )</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="count-down" data-end="2025-09-01T00:00:00">
                                                    <span class="days">00D</span>
                                                    <span>:</span>
                                                    <span class="hours">00H</span>
                                                    <span>:</span>
                                                    <span class="minutes">00M</span>
                                                    <span>:</span>
                                                    <span class="seconds">00S</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Add more rows here... -->
                                        </tbody>
                                    </table>
                                    <dotlottie-wc class="lotti-indicator" src="https://lottie.host/4c512f99-8b9c-4e28-92bd-fd5f021e6365/PMiCRVVBax.lottie" speed="1" autoplay loop></dotlottie-wc>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-trending-shape">
                <img src="{{asset('frontend')}}/assets/images/buy/bitcoin/bticoin.png" alt="">
            </div>
            <div class="process-shape-2">
                <img src="{{asset('frontend')}}/assets/images/buy/withdraw/2.png" alt="">
            </div>
        </section>
        <!-- end market crypto tabs area  -->

        <!-- start token desclimer area  -->
        <section class="token-desclimer-area mt-60 mb-60">
            <div class="container">
                <div class="token-desclimer-text">
                    <p><span>Disclaimer:</span> This content is for informational purposes only and not financial advice. Digital {{asset('frontend')}}/assets are volatile, and you are solely responsible for your investment decisions. Binance is not liable for any losses. Please refer to our <a href="#">Terms of Use</a> and <a href="#">Risk Warning</a> for details.</p>
                </div>
            </div>
        </section>
        <!-- end token desclimer area  -->


    </main>
@endsection
