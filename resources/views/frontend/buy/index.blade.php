@extends('frontend.layouts.app')
@section('content')

    <main class="main-area buy-page-padding">
        <!-- Buy Sell Start  -->
        <div class="buy-sel-section mt-60">
            <div class="main-action-tabs">
                {{--                Action tab --}}
                @include('frontend.includes.buy.action_tab')
                {{--                Action tab end--}}
                <div class="tab-content" id="actionTabContent">
{{--                    buy and sale--}}
                        @include('frontend.includes.buy.buy_sale.buy_n_sale')
{{--                    limit buy--}}
                        @include('frontend.includes.buy.limit.limit')

                    <div class="tab-pane fade" id="recurring-buy" role="tabpanel" aria-labelledby="recurring-buy-tab">
                        <section class="recurring-exchange mt-60">
                            <div class="container">
                                <div class="common-heading-section text-center text-lg-start mb-60">
                                    <h2 class="text-primary">Recurring Buy BTC with USD</h2>

                                </div>
                                <div class="row gy-5">
                                    <div class="col-md-6">
                                        <div class="recurring-exchange-text">
                                            <div class="recurring-exchange-buy-sell-card">
                                                <div class="header">
                                                    <h1>Create Recurring Plan</h1>
                                                    <div class="auto-invest">
                                                        <img src="{{asset('frontend')}}/assets/images/icon/refresh.png"
                                                             alt="icon"/>
                                                        Auto-invest with stablecoin
                                                        <img class="auto-invest-icon-angle"
                                                             src="{{asset('frontend')}}/assets/images/icon/right-arrow.png"
                                                             alt="icon"/>
                                                    </div>
                                                </div>

                                                <div class="section">
                                                    <div class="section-title">Select Assets</div>
                                                    <div class="asset-selector">
                                                        <div class="asset-box">
                                                            <div class="dropdown dropdown-buy-sell">
                                                                <button
                                                                    class="btn custom-select-token dropdown-toggle select-token"
                                                                    type="button"
                                                                    data-bs-toggle=""
                                                                    aria-expanded="false"
                                                                >
                                                                    <img
                                                                        src="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        alt="BTC"/>
                                                                    <span>BTC</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="display: none">
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="BTC"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            BTC
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="ETH"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            ETH
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="SOL"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            SOL
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="to-text">To</div>
                                                        <div class="asset-box">
                                                            <div class="dropdown dropdown-buy-sell">
                                                                <button
                                                                    class="btn custom-select-token dropdown-toggle select-token"
                                                                    type="button"
                                                                    data-bs-toggle=""
                                                                    aria-expanded="false"
                                                                >
                                                                    <img
                                                                        src="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        alt="BTC"/>
                                                                    <span>BTC</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="display: none">
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="BTC"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            BTC
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="ETH"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            ETH
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="SOL"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            SOL
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="section">
                                                    <div class="section-title">Select Assets</div>
                                                    <div class="input-container">
                                                        <input type="text" class="amount-input"
                                                               placeholder="15 - 15,000" value=""/>
                                                        <div class="currency-suffix">
                                                            <div class="asset-icon usd-icon">
                                                                <img
                                                                    src="{{asset('frontend')}}/assets/images/icon/usd.png"
                                                                    alt="icon"/>
                                                            </div>
                                                            <span>USD</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="section">
                                                    <div class="section-title">Repeat</div>
                                                    <select class="repeat-dropdown">
                                                        <option>Weekly, Tuesday, 13:00 (UTC +6)</option>
                                                        <option>Daily, 13:00 (UTC +6)</option>
                                                        <option>Monthly, 1st, 13:00 (UTC +6)</option>
                                                    </select>
                                                </div>

                                                <div class="reference-text">
                                                    You receive:
                                                    <span>0 BTC</span>
                                                </div>

                                                <button class="primary-btn me-2 w-100 justify-content-center">Continue
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="top-cryptos-card-main">
                                            <div class="border-gradient-2 m-0">
                                                <div class="top-cryptos-card">
                                                    <div class="crypto-card-title">
                                                        <h3>Top Cryptos <img data-bs-toggle="tooltip"
                                                                             data-bs-placement="top"
                                                                             title="Warning: Past performance is not indicative of future results."
                                                                             src="{{asset('frontend')}}/assets/images/markets/info.png"
                                                                             alt=""></h3>
                                                    </div>
                                                    <div class="crypto-top-tabs mt-4">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-4">
                                                            <ul class="nav nav-tabs actionTab " id="actionTab"
                                                                role="tablist">
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="setting-time">
                                                                        Setting Time
                                                                    </button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button
                                                                        class="nav-link active"
                                                                        id="3Y-tab"
                                                                        data-bs-toggle="tab"
                                                                        data-bs-target="#3Y"
                                                                        type="button"
                                                                        role="tab"
                                                                    >
                                                                        3Y
                                                                    </button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button
                                                                        class="nav-link"
                                                                        id="1Y-tab"
                                                                        data-bs-toggle="tab"
                                                                        data-bs-target="#1Y"
                                                                        type="button"
                                                                        role="tab"
                                                                    >
                                                                        1Y
                                                                    </button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button
                                                                        class="nav-link"
                                                                        id="6M-tab"
                                                                        data-bs-toggle="tab"
                                                                        data-bs-target="#6M"
                                                                        type="button"
                                                                        role="tab"
                                                                    >
                                                                        6M
                                                                    </button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button
                                                                        class="nav-link"
                                                                        id="3M-tab"
                                                                        data-bs-toggle="tab"
                                                                        data-bs-target="#3M"
                                                                        type="button"
                                                                        role="tab"
                                                                    >
                                                                        3M
                                                                    </button>
                                                                </li>

                                                            </ul>
                                                        </div>


                                                        <div class="tab-content" id="actionTabContent">
                                                            <div class="tab-pane fade show active" id="3Y"
                                                                 role="tabpanel" aria-labelledby="3Y-tab">
                                                                <div class="top-crypto-table">
                                                                    <table class="w-100">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="crypto-top-number">1</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BTC <span>Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">2</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        ETH <span>Ethereum</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">3</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDT <span>TetherUS</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">4</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        XRP <span>XRP</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">5</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BNB <span>BNB</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">6</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        SOL <span>Solana</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">7</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDC <span>USDC</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">8</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        DOGE <span>Dogecoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">9</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        TRX <span>Tron</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">10</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        WBTC
                                                                                        <span>Wrapped Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade " id="1Y" role="tabpanel"
                                                                 aria-labelledby="1Y-tab">
                                                                <div class="top-crypto-table">
                                                                    <table class="w-100">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="crypto-top-number">1</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BTC <span>Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">2</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        ETH <span>Ethereum</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">3</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDT <span>TetherUS</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">4</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        XRP <span>XRP</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">5</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BNB <span>BNB</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">6</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        SOL <span>Solana</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">7</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDC <span>USDC</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">8</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        DOGE <span>Dogecoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">9</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        TRX <span>Tron</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">10</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        WBTC
                                                                                        <span>Wrapped Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="6M" role="tabpanel"
                                                                 aria-labelledby="6M-tab">
                                                                <div class="top-crypto-table">
                                                                    <table class="w-100">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="crypto-top-number">1</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BTC <span>Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">2</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        ETH <span>Ethereum</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">3</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDT <span>TetherUS</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">4</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        XRP <span>XRP</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">5</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BNB <span>BNB</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">6</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        SOL <span>Solana</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">7</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDC <span>USDC</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">8</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        DOGE <span>Dogecoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">9</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        TRX <span>Tron</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">10</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        WBTC
                                                                                        <span>Wrapped Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="3M" role="tabpanel"
                                                                 aria-labelledby="3M-tab">
                                                                <div class="top-crypto-table">
                                                                    <table class="w-100">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="crypto-top-number">1</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BTC <span>Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">2</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        ETH <span>Ethereum</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">3</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDT <span>TetherUS</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">4</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        XRP <span>XRP</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">5</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        BNB <span>BNB</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">6</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        SOL <span>Solana</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">7</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        USDC <span>USDC</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">8</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        DOGE <span>Dogecoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">9</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        TRX <span>Tron</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="red-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="crypto-top-number">10</td>
                                                                            <td>
                                                                                <div class="crypto-top-name">
                                                                                    <img
                                                                                        src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                                        width="20">
                                                                                    <div
                                                                                        class="crypto-top-name-currency">
                                                                                        WBTC
                                                                                        <span>Wrapped Bitcoin</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="crypto-top-value">
                                                                                    <span>$103,800.1</span>
                                                                                    <span
                                                                                        class="green-data-text">+0.32%</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
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

                        <!-- DCA Code start  -->
                        <section class="doc-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="common-heading-section text-center text-md-start">
                                            <h2 class="text-primary">BcoinMart Learning Hub</h2>
                                            <p>
                                                Master Crypto Investing with Our Expert Guides. Stay ahead in the crypto
                                                world with
                                                BcoinMart’s curated resources.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="doc-text">
                                            <h3 class="doc-text-title">How to Calculate Your DCA for Crypto?</h3>
                                            <p class="doc-text-content">
                                                <span>To find your DCA value:</span>
                                                DCA = Total Investment Amount ÷ Total Number of Coins Purchased
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- DCA Code End  -->

                        <!-- Recurring buyes start -->
                        <section class="how-to-buy-area position-relative mt-120 recurring-page-card">
                            <div class="container">
                                <div class="common-heading-section text-center text-md-start">
                                    <h2 class="text-primary">Advantages of Using DCA with Recurring Buys</h2>
                                </div>
                                <div class="row g-4 mt-60">
                                    <!-- 1.single item start  -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="border-gradient-2 m-0">
                                            <div class="custom-card">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Steady Portfolio Growth</h5>
                                                <p class="shap-content">
                                                    Grow your crypto wealth consistently by making regular investments
                                                    over time, benefiting
                                                    from long-term market trends.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2.single item start  -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="border-gradient-2 m-0">
                                            <div class="custom-card">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Disciplined Saving</h5>
                                                <p class="shap-content">
                                                    Automate your crypto purchases to maintain a consistent investment
                                                    habit, no matter the
                                                    market conditions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3.single item start  -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="border-gradient-2 m-0">
                                            <div class="custom-card">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Risk Management</h5>
                                                <p class="shap-content">
                                                    Minimize exposure to market volatility by spreading out your
                                                    purchases and smoothing out
                                                    price fluctuations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4.single item start  -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="border-gradient-2 m-0">
                                            <div class="custom-card">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Flexible Scheduling</h5>
                                                <p class="shap-content">
                                                    Choose from weekly, bi-weekly, or monthly purchases with the
                                                    flexibility to plan your crypto
                                                    investments in advance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5.single item start  -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="border-gradient-2 m-0">
                                            <div class="custom-card">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Seamless BcoinMart Integration</h5>
                                                <p class="shap-content">
                                                    Easily access BcoinMart features like staking, trading, or NFTs with
                                                    a ready supply of
                                                    crypto through recurring buys.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6.single item start  -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="border-gradient-2 m-0">
                                            <div class="custom-card">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Stress-Free Investing</h5>
                                                <p class="shap-content">
                                                    Avoid emotional trading decisions by removing the need to time the
                                                    market or react
                                                    impulsively.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="how-to-buy-shape">
                                <img src="{{asset('frontend')}}/assets/images/buy/buy-crypto/shape.png" alt=""/>
                            </div>
                        </section>
                        <!-- Recurring buyes End -->

                        <!-- Recurring accordion start  -->
                        <section class="accordion-bcoinmart">
                            <div class="container">
                                <div class="common-heading-section text-center text-md-start">
                                    <h2 class="text-white">FAQs – Potential Drawbacks of DCA with Recurring Buys</h2>
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
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem
                                                                Ipsum has been the industry's stand-ard dummy text ever
                                                                since
                                                            </button>
                                                        </h2>
                                                        <div
                                                            id="collapseOne"
                                                            class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample"
                                                        >
                                                            <div class="accordion-body">
                                                                <p class="bcoinmart-accordion-body">
                                                                    It is a long established fact that a reader will be
                                                                    distracted by the readable
                                                                    content of a page when looking at its layout. The
                                                                    point of using Lorem Ipsum is
                                                                    that it has a more-or-less normal distribution of
                                                                    letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop
                                                                    publishing packages and web page editors now use
                                                                    Lorem Ipsum as their default
                                                                    model text, and a search for 'lorem ipsum' will
                                                                    uncover.
                                                                </p>
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
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem
                                                                Ipsum has been the industry's stand-ard dummy text ever
                                                                since
                                                            </button>
                                                        </h2>
                                                        <div
                                                            id="collapseTwo"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample"
                                                        >
                                                            <div class="accordion-body">
                                                                <p class="bcoinmart-accordion-body">
                                                                    It is a long established fact that a reader will be
                                                                    distracted by the readable
                                                                    content of a page when looking at its layout. The
                                                                    point of using Lorem Ipsum is
                                                                    that it has a more-or-less normal distribution of
                                                                    letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop
                                                                    publishing packages and web page editors now use
                                                                    Lorem Ipsum as their default
                                                                    model text, and a search for 'lorem ipsum' will
                                                                    uncover.
                                                                </p>
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
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem
                                                                Ipsum has been the industry's stand-ard dummy text ever
                                                                since
                                                            </button>
                                                        </h2>
                                                        <div
                                                            id="collapseThree"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample"
                                                        >
                                                            <div class="accordion-body">
                                                                <p class="bcoinmart-accordion-body">
                                                                    It is a long established fact that a reader will be
                                                                    distracted by the readable
                                                                    content of a page when looking at its layout. The
                                                                    point of using Lorem Ipsum is
                                                                    that it has a more-or-less normal distribution of
                                                                    letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop
                                                                    publishing packages and web page editors now use
                                                                    Lorem Ipsum as their default
                                                                    model text, and a search for 'lorem ipsum' will
                                                                    uncover.
                                                                </p>
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
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem
                                                                Ipsum has been the industry's stand-ard dummy text ever
                                                                since
                                                            </button>
                                                        </h2>
                                                        <div
                                                            id="collapseFour"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample"
                                                        >
                                                            <div class="accordion-body">
                                                                <p class="bcoinmart-accordion-body">
                                                                    It is a long established fact that a reader will be
                                                                    distracted by the readable
                                                                    content of a page when looking at its layout. The
                                                                    point of using Lorem Ipsum is
                                                                    that it has a more-or-less normal distribution of
                                                                    letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop
                                                                    publishing packages and web page editors now use
                                                                    Lorem Ipsum as their default
                                                                    model text, and a search for 'lorem ipsum' will
                                                                    uncover.
                                                                </p>
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
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem
                                                                Ipsum has been the industry's stand-ard dummy text ever
                                                                since
                                                            </button>
                                                        </h2>
                                                        <div
                                                            id="collapseFive"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample"
                                                        >
                                                            <div class="accordion-body">
                                                                <p class="bcoinmart-accordion-body">
                                                                    It is a long established fact that a reader will be
                                                                    distracted by the readable
                                                                    content of a page when looking at its layout. The
                                                                    point of using Lorem Ipsum is
                                                                    that it has a more-or-less normal distribution of
                                                                    letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop
                                                                    publishing packages and web page editors now use
                                                                    Lorem Ipsum as their default
                                                                    model text, and a search for 'lorem ipsum' will
                                                                    uncover.
                                                                </p>
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
                        <!-- Recurring accordion End  -->

                        <!-- How to buy Area End  -->
                        <section class="how-to-buy-area position-relative mt-120">
                            <div class="container">
                                <div class="common-heading-section text-center text-md-start">
                                    <h2 class="text-primary">Getting Started in 3 Simple Steps</h2>
                                </div>


                                <div class="puzzle-design-wrapper puzzle-design-buy mt-60" data-aos="fade-up"
                                     data-aos-delay="300" data-aos-duration="500">
                                    <div class="puzzle-design-card puzzle-design-shape-1">
                                        <svg preserveAspectRatio="none" viewBox="0 0 599 362" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_384_33623)">
                                                <path
                                                    d="M4 12C4 5.37258 9.37258 0 16 0H583C589.627 0 595 5.37258 595 12V170.816C595 174.696 593.124 178.337 589.963 180.589L560.037 201.911C556.876 204.163 555 207.804 555 211.684V342C555 348.627 549.627 354 543 354H16C9.37258 354 4 348.627 4 342V12Z"
                                                    fill="#1E2329"/>
                                                <path
                                                    d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z"
                                                    stroke="url(#paint0_linear_384_33631)" stroke-opacity="0.6"
                                                    stroke-width="2"/>
                                                <path
                                                    d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z"
                                                    stroke="white" stroke-opacity="0.1" stroke-width="2"/>
                                            </g>
                                            <defs>
                                                <filter id="filter0_d_384_33623" x="0" y="0"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                   result="hardAlpha"/>
                                                    <feOffset dy="4"/>
                                                    <feGaussianBlur stdDeviation="2"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                             result="effect1_dropShadow_384_336"/>
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                             in2="effect1_dropShadow_384_336" result="shape"/>
                                                </filter>
                                                <linearGradient id="paint0_linear_384_33631" x1="781" y1="-136.5"
                                                                x2="-129" y2="456" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.126517" stop-color="white"/>
                                                    <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                    <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                    <stop offset="1" stop-color="white"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <div class="puzzle-text">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/assets/images/icon/card.png"
                                                     alt="Step 1"/>
                                            </div>
                                            <h5 class="shap-title">Add Your Card</h5>
                                            <p class="shap-content">
                                                Log in to your BcoinMart account and add a credit or debit card from the
                                                app or website.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="puzzle-design-card puzzle-design-shape-2">
                                        <svg preserveAspectRatio="none" viewBox="0 0 371 362" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_384_33768)">
                                                <path
                                                    d="M44 12C44 5.37259 49.3726 0 56 0H355C361.627 0 367 5.37258 367 12V342C367 348.627 361.627 354 355 354H16C9.37259 354 4 348.627 4 342V221.684C4 217.804 5.8764 214.163 9.0367 211.911L38.9633 190.589C42.1236 188.337 44 184.696 44 180.816V12Z"
                                                    fill="#1E2329"/>
                                                <path
                                                    d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z"
                                                    stroke="url(#paint0_linear_384_33755)" stroke-opacity="0.6"
                                                    stroke-width="2"/>
                                                <path
                                                    d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z"
                                                    stroke="white" stroke-opacity="0.1" stroke-width="2"/>
                                            </g>
                                            <defs>
                                                <filter id="filter0_d_384_33768" x="0" y="0"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                   result="hardAlpha"/>
                                                    <feOffset dy="4"/>
                                                    <feGaussianBlur stdDeviation="2"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                             result="effect1_dropShadow_384_337"/>
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                             in2="effect1_dropShadow_384_337" result="shape"/>
                                                </filter>
                                                <linearGradient id="paint0_linear_384_33755" x1="-94.4734" y1="-119.717"
                                                                x2="179.926" y2="566.43" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.126517" stop-color="white"/>
                                                    <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                    <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                    <stop offset="1" stop-color="white"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                        <div class="puzzle-text">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/assets/images/icon/orderlist.png"
                                                     alt="Step 2"/>
                                            </div>
                                            <h5 class="shap-title">Choose Your Crypto & Preferences</h5>
                                            <p class="shap-content">
                                                Pick the crypto you want to buy, select your local fiat currency, and
                                                set how often you want to buy.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="puzzle-design-card puzzle-design-shape-3">
                                        <svg preserveAspectRatio="none" viewBox="0 0 373 362" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_384_33888)">
                                                <rect x="4" width="365" height="354" rx="12" fill="#1E2329"/>
                                                <rect x="5" y="1" width="363" height="352" rx="11"
                                                      stroke="url(#paint0_linear_384_3389)" stroke-opacity="0.6"
                                                      stroke-width="2"/>
                                                <rect x="5" y="1" width="363" height="352" rx="11" stroke="white"
                                                      stroke-opacity="0.1" stroke-width="2"/>
                                            </g>
                                            <defs>
                                                <filter id="filter0_d_384_33888" x="0" y="0"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                   result="hardAlpha"/>
                                                    <feOffset dy="4"/>
                                                    <feGaussianBlur stdDeviation="2"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                             result="effect1_dropShadow_384_338"/>
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                             in2="effect1_dropShadow_384_338" result="shape"/>
                                                </filter>
                                                <linearGradient id="paint0_linear_384_3389" x1="502.003" y1="-118.545"
                                                                x2="-203.421" y2="202.899"
                                                                gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.126517" stop-color="white"/>
                                                    <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                    <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                    <stop offset="1" stop-color="white"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                        <div class="puzzle-text">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/assets/images/icon/receive.png"
                                                     alt="Step 3"/>
                                            </div>
                                            <h5 class="shap-title">Confirm Payment Method</h5>
                                            <p class="shap-content">
                                                Select your payment option (Visa or Mastercard) and confirm your
                                                Recurring Buy setup.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <!-- How to buy Area End  -->

                        <!-- Coin pair Start  -->
                        <section class="coin-pair-section mt-120 mb-120">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="common-heading-section text-center text-md-start">
                                            <h2 class="text-primary">Popular Crypto-to-Fiat Pairs</h2>
                                            <p>
                                                Easily fund your account using local fiat currencies and access top
                                                trading pairs to buy
                                                your preferred cryptocurrencies securely and conveniently.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4 mt-4">
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="200"
                                            data-aos-duration="500"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="400"
                                            data-aos-duration="700"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="600"
                                            data-aos-duration="900"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="800"
                                            data-aos-duration="1100"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="1000"
                                            data-aos-duration="1300"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="1200"
                                            data-aos-duration="1500"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="1400"
                                            data-aos-duration="1700"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="1600"
                                            data-aos-duration="1900"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div
                                            class="coin-pair-card h-100 d-flex align-items-center justify-content-between"
                                            data-aos="fade-up"
                                            data-aos-delay="1800"
                                            data-aos-duration="2100"
                                        >
                                            <div class="pair-icon">
                                                <ul class="d-flex align-items-center">
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                             alt="img"/>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                             alt="img"/>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="coin-pair-info d-flex flex-column align-items-end">
                                                <ul class="d-flex align-items-center g-10">
                                                    <li>BTC</li>
                                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                                    <li>USD</li>
                                                </ul>
                                                <p>1 BTC = 104,705.35 USD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Coin pair End  -->
                        <section class="recurring-learning-hub">
                            <div class="container">
                                <!-- common title area  -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="common-heading-section text-center text-lg-start">
                                            <h2 class="text-primary">BcoinMart Learning Hub</h2>
                                            <p>
                                                Master Crypto Investing with Our Expert Guides. Stay ahead in the crypto
                                                world with
                                                BcoinMart’s curated resources.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- common title area End  -->
                                <div class="row g-4 mt-60 justify-content-center">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="learning-hub-card">
                                            <div class="learning-hub-card-img">
                                                <img src="{{asset('frontend')}}/assets/images/blog/1.jpg" alt="img"/>
                                            </div>
                                            <div class="learning-hub-card-info">
                                                <p>How To Grow Your Crypto Portfolio with Recurring Buy</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="learning-hub-card">
                                            <div class="learning-hub-card-img">
                                                <img src="{{asset('frontend')}}/assets/images/blog/1.jpg" alt="img"/>
                                            </div>
                                            <div class="learning-hub-card-info">
                                                <p>Crypto Recurring Investments: Benefits and How to Start</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="learning-hub-card">
                                            <div class="learning-hub-card-img">
                                                <img src="{{asset('frontend')}}/assets/images/blog/1.jpg" alt="img"/>
                                            </div>
                                            <div class="learning-hub-card-info">
                                                <p>How to Use Recurring Buy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                        <div class="withdraw-content position-relative">
                            <section class="faq-section">
                                <div class="container">
                                    <div class="common-heading-section text-left">
                                        <h2 class="text-white">
                                            Deposit
                                            <span class="text-primary">EUR</span>
                                        </h2>
                                    </div>
                                    <div class="row align-items-start mt-3 gy-4">
                                        <div class="col-lg-6">
                                            <div class="buy-sel-tabs withdraw-deposit">
                                                <div class="withdraw-form">
                                                    <!-- Receive -->
                                                    <div class="form-block dropdown-custom">
                                                        <label class="form-label">Currency</label>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center gap-2">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter Amount"/>
                                                            <div class="dropdown dropdown-buy-sell">
                                                                <button
                                                                    class="btn custom-select-token dropdown-toggle select-token"
                                                                    type="button"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                >
                                                                    <img
                                                                        src="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        alt="BTC"/>
                                                                    <span>BTC</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="BTC"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            BTC
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="ETH"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            ETH
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="SOL"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            SOL
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="online-text">Online Banking: 1.8% Fee</span>

                                                    <!-- Payment -->
                                                    <div class="payment dropdown-custom">
                                                        <div class="payment">
                                                            <label class="form-label mb-20">Pay With</label>
                                                            <div
                                                                class="dropdown dropdown-buy-sell payment-dropdown-select">
                                                                <button
                                                                    class="btn custom-select-token dropdown-toggle select-token payment-select"
                                                                    type="button"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                >
                                                                    <img
                                                                        src="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        alt="Card"/>
                                                                    <span>Card (5362-XXX-XXX-XX58)</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="Card (5362-XXX-XXX-XX58)"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/master.png"/>
                                                                            Card (5362-XXX-XXX-XX58)
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="Card (017XXXXXXXX)"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/master.png"/>
                                                                            Card (017XXXXXXXX)
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="Card (018XXXXXXXX)"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/master.png"/>
                                                                            Card (018XXXXXXXX)
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Reference -->
                                                    <div class="reference-text">Reference Price: 1 USDT ≈ 1.05 USD</div>

                                                    <!-- Buy Button -->
                                                    <button class="primary-btn me-2 w-100 justify-content-center">
                                                        Continue
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordion" id="faqAccordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading01">
                                                        <button
                                                            class="accordion-button"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse01"
                                                            aria-expanded="true"
                                                            aria-controls="collapse01"
                                                        >
                                                            <span class="accordion-number">01</span>
                                                            <span class="flex-grow-1 accordion-title">
                                    Lorem ipsum dolor sit amet consectetur. Sagittis id.
                                  </span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse01"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="heading01"
                                                        data-bs-parent="#faqAccordion"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In augue ipsum
                                                            tellus ultrices. Ac pharetra
                                                            ultrices consectetur consequat tellus massa. Nec aliquam
                                                            cras sagittis duis sed euismod
                                                            arcu hac.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading02">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse02"
                                                            aria-expanded="false"
                                                            aria-controls="collapse02"
                                                        >
                                                            <span class="accordion-number">02</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse02"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading02"
                                                        data-bs-parent="#faqAccordion"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In dignissim mauris
                                                            mollis dignissim et pharetra
                                                            elementum consequatur porttitor ut sed nibh volutpat lorem
                                                            dapibus nunc mauris in ut
                                                            nullam sed bibendum consequat elit varius.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading03">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse03"
                                                            aria-expanded="false"
                                                            aria-controls="collapse03"
                                                        >
                                                            <span class="accordion-number">03</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse03"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading03"
                                                        data-bs-parent="#faqAccordion"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In dignissim mauris
                                                            mollis dignissim et pharetra
                                                            elementum consequatur porttitor ut sed nibh volutpat lorem
                                                            dapibus nunc mauris in ut
                                                            nullam sed bibendum consequat elit varius.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading04">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse04"
                                                            aria-expanded="false"
                                                            aria-controls="collapse04"
                                                        >
                                                            <span class="accordion-number">04</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse04"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading04"
                                                        data-bs-parent="#faqAccordion"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In dignissim mauris
                                                            mollis dignissim et pharetra
                                                            elementum consequatur porttitor ut sed nibh volutpat lorem
                                                            dapibus nunc mauris in ut
                                                            nullam sed bibendum consequat elit varius.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="how-to-buy-shape deposit-shape-one">
                                    <img src="{{asset('frontend')}}/assets/images/buy/buy-crypto/shape.png" alt=""/>
                                </div>
                            </section>

                            <!-- How to buy Area End  -->
                            <section class="how-to-buy-area position-relative">
                                <div class="container">
                                    <div class="common-heading-section text-center text-md-start">
                                        <h2 class="text-primary">Why Bcoinmart?</h2>
                                    </div>

                                    <div class="puzzle-design-wrapper mt-60" data-aos="fade-up" data-aos-delay="300"
                                         data-aos-duration="500">
                                        <div class="puzzle-design-card puzzle-design-shape-1">
                                            <svg preserveAspectRatio="none" viewBox="0 0 599 362" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_384_3362)">
                                                    <path
                                                        d="M4 12C4 5.37258 9.37258 0 16 0H583C589.627 0 595 5.37258 595 12V170.816C595 174.696 593.124 178.337 589.963 180.589L560.037 201.911C556.876 204.163 555 207.804 555 211.684V342C555 348.627 549.627 354 543 354H16C9.37258 354 4 348.627 4 342V12Z"
                                                        fill="#1E2329"/>
                                                    <path
                                                        d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z"
                                                        stroke="url(#paint0_linear_384_3362)" stroke-opacity="0.6"
                                                        stroke-width="2"/>
                                                    <path
                                                        d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z"
                                                        stroke="white" stroke-opacity="0.1" stroke-width="2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_384_3362" x="0" y="0"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_384_336"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow_384_336" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_384_3362" x1="781" y1="-136.5"
                                                                    x2="-129" y2="456" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.126517" stop-color="white"/>
                                                        <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="1" stop-color="white"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <div class="puzzle-text">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/check.png"
                                                         alt="Step 1"/>
                                                </div>
                                                <h5 class="shap-title">Security</h5>
                                                <p class="shap-content">
                                                    Your assets are protected with bank-level encryption and two-factor
                                                    authentication for safe and secure trading.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="puzzle-design-card puzzle-design-shape-2">
                                            <svg preserveAspectRatio="none" viewBox="0 0 371 362" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_384_3373)">
                                                    <path
                                                        d="M44 12C44 5.37259 49.3726 0 56 0H355C361.627 0 367 5.37258 367 12V342C367 348.627 361.627 354 355 354H16C9.37259 354 4 348.627 4 342V221.684C4 217.804 5.8764 214.163 9.0367 211.911L38.9633 190.589C42.1236 188.337 44 184.696 44 180.816V12Z"
                                                        fill="#1E2329"/>
                                                    <path
                                                        d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z"
                                                        stroke="url(#paint0_linear_384_3373)" stroke-opacity="0.6"
                                                        stroke-width="2"/>
                                                    <path
                                                        d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z"
                                                        stroke="white" stroke-opacity="0.1" stroke-width="2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_384_3373" x="0" y="0"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_384_337"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow_384_337" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_384_3373" x1="-94.4734"
                                                                    y1="-119.717" x2="179.926" y2="566.43"
                                                                    gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.126517" stop-color="white"/>
                                                        <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="1" stop-color="white"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>

                                            <div class="puzzle-text">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/speed.png"
                                                         alt="Step 2"/>
                                                </div>
                                                <h5 class="shap-title">Speed</h5>
                                                <p class="shap-content">
                                                    Instant trades, fast deposits & withdrawals.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="puzzle-design-card puzzle-design-shape-3">
                                            <svg preserveAspectRatio="none" viewBox="0 0 373 362" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_384_3384)">
                                                    <rect x="4" width="365" height="354" rx="12" fill="#1E2329"/>
                                                    <rect x="5" y="1" width="363" height="352" rx="11"
                                                          stroke="url(#paint0_linear_384_3385)" stroke-opacity="0.6"
                                                          stroke-width="2"/>
                                                    <rect x="5" y="1" width="363" height="352" rx="11" stroke="white"
                                                          stroke-opacity="0.1" stroke-width="2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_384_3384" x="0" y="0"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_384_338"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow_384_338" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_384_3385" x1="502.003"
                                                                    y1="-118.545" x2="-203.421" y2="202.899"
                                                                    gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.126517" stop-color="white"/>
                                                        <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="1" stop-color="white"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>

                                            <div class="puzzle-text">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/headphone.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Support</h5>
                                                <p class="shap-content">
                                                    24/7 expert support to help you anytime, anywhere.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="most-trending-shape">
                                    <img src="{{asset('frontend')}}/assets/images/buy/bitcoin/bticoin.png" alt=""/>
                                </div>
                            </section>
                            <!-- How to buy Area End  -->

                            <!-- Coin pair Start  -->
                            <section class="coin-pair-section mt-120 mb-120 position-relative">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="common-heading-section text-center text-md-start">
                                                <h2 class="text-primary">Popular Crypto-to-Fiat Pairs</h2>
                                                <p>
                                                    Easily fund your account using local fiat currencies and access top
                                                    trading pairs to buy your
                                                    preferred cryptocurrencies securely and conveniently.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-4 mt-4">
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deposit-shape-two">
                                    <img src="{{asset('frontend')}}/assets/images/buy/withdraw/2.png" alt=""/>
                                </div>
                            </section>
                            <!-- Coin pair End  -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                        <div class="withdraw-content position-relative">
                            <section class="faq-section">
                                <div class="container">
                                    <div class="common-heading-section text-left">
                                        <h2 class="text-white">
                                            Withdraw
                                            <span class="text-primary">Crypto Name</span>
                                        </h2>
                                    </div>
                                    <div class="row align-items-start mt-3 gy-4">
                                        <div class="col-md-6">
                                            <div class="buy-sel-tabs withdraw-deposit">
                                                <div class="withdraw-form">
                                                    <!-- Receive -->
                                                    <div class="form-block dropdown-custom">
                                                        <label class="form-label">Currency</label>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center gap-2">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter Amount"/>
                                                            <div class="dropdown dropdown-buy-sell">
                                                                <button
                                                                    class="btn custom-select-token dropdown-toggle select-token"
                                                                    type="button"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                >
                                                                    <img
                                                                        src="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        alt="BTC"/>
                                                                    <span>BTC</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="BTC"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            BTC
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="ETH"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            ETH
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="SOL"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/bnb.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/bnb.png"/>
                                                                            SOL
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="online-text">Online Banking: 1.8% Fee</span>

                                                    <!-- Payment -->
                                                    <div class="payment dropdown-custom">
                                                        <div class="payment">
                                                            <label class="form-label mb-20">Receive Method</label>
                                                            <div
                                                                class="dropdown dropdown-buy-sell payment-dropdown-select">
                                                                <button
                                                                    class="btn custom-select-token dropdown-toggle select-token payment-select"
                                                                    type="button"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                >
                                                                    <img
                                                                        src="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        alt="Card"/>
                                                                    <span>Card (5362-XXX-XXX-XX58)</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="Card (5362-XXX-XXX-XX58)"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/master.png"/>
                                                                            Card (5362-XXX-XXX-XX58)
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="Card (017XXXXXXXX)"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/master.png"/>
                                                                            Card (017XXXXXXXX)
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            class="dropdown-item"
                                                                            href="#"
                                                                            data-value="Card (018XXXXXXXX)"
                                                                            data-image="{{asset('frontend')}}/assets/images/buy/master.png"
                                                                        >
                                                                            <img
                                                                                src="{{asset('frontend')}}/assets/images/buy/master.png"/>
                                                                            Card (018XXXXXXXX)
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Reference -->
                                                    <div class="reference-text">Reference Price: 1 USDT ≈ 1.05 USD</div>

                                                    <!-- Buy Button -->
                                                    <button class="primary-btn me-2 w-100 justify-content-center">
                                                        Continue
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="accordion" id="faqAccordion2">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading11">
                                                        <button
                                                            class="accordion-button"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse11"
                                                            aria-expanded="true"
                                                            aria-controls="collapse11"
                                                        >
                                                            <span class="accordion-number">01</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse11"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="heading11"
                                                        data-bs-parent="#faqAccordion2"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In augue ipsum
                                                            tellus ultrices. Ac pharetra
                                                            ultrices consectetur consequat
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading12">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse12"
                                                            aria-expanded="false"
                                                            aria-controls="collapse12"
                                                        >
                                                            <span class="accordion-number">02</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse12"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading12"
                                                        data-bs-parent="#faqAccordion2"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In dignissim mauris
                                                            mollis dignissim et pharetra
                                                            elementum consequatur porttitor ut sed nibh volutpat lorem
                                                            dapibus nunc mauris in ut
                                                            nullam sed bibendum consequat elit varius.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading13">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse13"
                                                            aria-expanded="false"
                                                            aria-controls="collapse13"
                                                        >
                                                            <span class="accordion-number">03</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse13"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading13"
                                                        data-bs-parent="#faqAccordion2"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In dignissim mauris
                                                            mollis dignissim et pharetra
                                                            elementum consequatur porttitor ut sed nibh volutpat lorem
                                                            dapibus nunc mauris in ut
                                                            nullam sed bibendum consequat elit varius.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading14">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse14"
                                                            aria-expanded="false"
                                                            aria-controls="collapse14"
                                                        >
                                                            <span class="accordion-number">04</span>
                                                            <span class="flex-grow-1 accordion-title">Lorem ipsum dolor sit amet consectetur.</span>
                                                            <span class="accordion-icon">
                                    <img class="addition-icon"
                                         src="{{asset('frontend')}}/assets/images/home/adition.svg" alt="photos"/>
                                    <img class="subtraction-icon"
                                         src="{{asset('frontend')}}/assets/images/home/subtraction.svg" alt="photos"/>
                                  </span>
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapse14"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading14"
                                                        data-bs-parent="#faqAccordion2"
                                                    >
                                                        <div class="accordion-body">
                                                            Lorem ipsum dolor sit amet consectetur. In dignissim mauris
                                                            mollis dignissim et pharetra
                                                            elementum consequatur porttitor ut sed nibh volutpat lorem
                                                            dapibus nunc mauris in ut
                                                            nullam sed bibendum consequat elit varius.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="how-to-buy-shape deposit-shape-one">
                                    <img src="{{asset('frontend')}}/assets/images/buy/buy-crypto/shape.png" alt=""/>
                                </div>
                            </section>

                            <!-- How to buy Area End  -->
                            <section class="how-to-buy-area position-relative">
                                <div class="container">
                                    <div class="common-heading-section text-center text-md-start">
                                        <h2 class="text-primary">Why Bcoinmart?</h2>
                                    </div>

                                    <div class="puzzle-design-wrapper mt-60" data-aos="fade-up" data-aos-delay="300"
                                         data-aos-duration="500">
                                        <div class="puzzle-design-card puzzle-design-shape-1">
                                            <svg preserveAspectRatio="none" viewBox="0 0 599 362" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_384_3366)">
                                                    <path
                                                        d="M4 12C4 5.37258 9.37258 0 16 0H583C589.627 0 595 5.37258 595 12V170.816C595 174.696 593.124 178.337 589.963 180.589L560.037 201.911C556.876 204.163 555 207.804 555 211.684V342C555 348.627 549.627 354 543 354H16C9.37258 354 4 348.627 4 342V12Z"
                                                        fill="#1E2329"/>
                                                    <path
                                                        d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z"
                                                        stroke="url(#paint0_linear_384_3366)" stroke-opacity="0.6"
                                                        stroke-width="2"/>
                                                    <path
                                                        d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z"
                                                        stroke="white" stroke-opacity="0.1" stroke-width="2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_384_3366" x="0" y="0"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_384_336"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow_384_336" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_384_3366" x1="781" y1="-136.5"
                                                                    x2="-129" y2="456" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.126517" stop-color="white"/>
                                                        <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="1" stop-color="white"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <div class="puzzle-text">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/check.png"
                                                         alt="Step 1"/>
                                                </div>
                                                <h5 class="shap-title">Security</h5>
                                                <p class="shap-content">
                                                    Your assets are protected with bank-level encryption and two-factor
                                                    authentication for safe and secure trading.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="puzzle-design-card puzzle-design-shape-2">
                                            <svg preserveAspectRatio="none" viewBox="0 0 371 362" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_384_3377)">
                                                    <path
                                                        d="M44 12C44 5.37259 49.3726 0 56 0H355C361.627 0 367 5.37258 367 12V342C367 348.627 361.627 354 355 354H16C9.37259 354 4 348.627 4 342V221.684C4 217.804 5.8764 214.163 9.0367 211.911L38.9633 190.589C42.1236 188.337 44 184.696 44 180.816V12Z"
                                                        fill="#1E2329"/>
                                                    <path
                                                        d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z"
                                                        stroke="url(#paint0_linear_384_3377)" stroke-opacity="0.6"
                                                        stroke-width="2"/>
                                                    <path
                                                        d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z"
                                                        stroke="white" stroke-opacity="0.1" stroke-width="2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_384_337" x="0" y="0"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_384_337"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow_384_337" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_384_3377" x1="-94.4734"
                                                                    y1="-119.717" x2="179.926" y2="566.43"
                                                                    gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.126517" stop-color="white"/>
                                                        <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="1" stop-color="white"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>

                                            <div class="puzzle-text">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/speed.png"
                                                         alt="Step 2"/>
                                                </div>
                                                <h5 class="shap-title">Speed</h5>
                                                <p class="shap-content">
                                                    Instant trades, fast deposits & withdrawals.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="puzzle-design-card puzzle-design-shape-3">
                                            <svg preserveAspectRatio="none" viewBox="0 0 373 362" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_384_3388)">
                                                    <rect x="4" width="365" height="354" rx="12" fill="#1E2329"/>
                                                    <rect x="5" y="1" width="363" height="352" rx="11"
                                                          stroke="url(#paint0_linear_384_3388)" stroke-opacity="0.6"
                                                          stroke-width="2"/>
                                                    <rect x="5" y="1" width="363" height="352" rx="11" stroke="white"
                                                          stroke-opacity="0.1" stroke-width="2"/>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_384_3388" x="0" y="0"
                                                            filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                       result="hardAlpha"/>
                                                        <feOffset dy="4"/>
                                                        <feGaussianBlur stdDeviation="2"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_384_338"/>
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                                 in2="effect1_dropShadow_384_338" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_384_3388" x1="502.003"
                                                                    y1="-118.545" x2="-203.421" y2="202.899"
                                                                    gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.126517" stop-color="white"/>
                                                        <stop offset="0.41336" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="0.701226" stop-color="white" stop-opacity="0"/>
                                                        <stop offset="1" stop-color="white"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>

                                            <div class="puzzle-text">
                                                <div class="icon">
                                                    <img src="{{asset('frontend')}}/assets/images/icon/headphone.png"
                                                         alt="Step 3"/>
                                                </div>
                                                <h5 class="shap-title">Support</h5>
                                                <p class="shap-content">
                                                    24/7 expert support to help you anytime, anywhere.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="most-trending-shape">
                                    <img src="{{asset('frontend')}}/assets/images/buy/bitcoin/bticoin.png" alt=""/>
                                </div>
                            </section>
                            <!-- How to buy Area End  -->

                            <!-- Coin pair Start  -->
                            <section class="coin-pair-section mt-120 mb-120 position-relative">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="common-heading-section text-center text-md-start">
                                                <h2 class="text-primary">Popular Crypto-to-Fiat Pairs</h2>
                                                <p>
                                                    Easily fund your account using local fiat currencies and access top
                                                    trading pairs to buy your
                                                    preferred cryptocurrencies securely and conveniently.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-4 mt-4">
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div
                                                class="coin-pair-card h-100 d-flex align-items-center justify-content-between">
                                                <div class="pair-icon">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/1.png"
                                                                 alt="img"/>
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('frontend')}}/assets/images/coin/7.png"
                                                                 alt="img"/>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coin-pair-info d-flex flex-column align-items-end">
                                                    <ul class="d-flex align-items-center g-10">
                                                        <li>BTC</li>
                                                        <li><i class="fa-solid fa-angle-right"></i></li>
                                                        <li>USD</li>
                                                    </ul>
                                                    <p>1 BTC = 104,705.35 USD</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deposit-shape-two">
                                    <img src="{{asset('frontend')}}/assets/images/buy/withdraw/2.png" alt=""/>
                                </div>
                            </section>
                            <!-- Coin pair End  -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="buy-ecm" role="tabpanel" aria-labelledby="buy-ecm-tab">
                        <div class="container">
                            <p class="text-white">Another tab content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Sell End  -->
    </main>

@endsection

@section('js')
    <script>

        // Auto Scroll Multiple SimpleBar Scroll Boxes
        document.addEventListener("DOMContentLoaded", () => {
            const scrollBoxes = document.querySelectorAll(".scroll-box");

            scrollBoxes.forEach((container) => {
                const simpleBarInstance = new SimpleBar(container); // Force init
                const scrollBox = simpleBarInstance.getScrollElement();

                let scrollStep = 350;
                let scrollDelay = 2000;
                let scrollSpeed = 1000;

                let scrollInterval = null;
                let isPaused = false;

                function autoScroll() {
                    if (isPaused) return;

                    let maxScrollTop = scrollBox.scrollHeight - scrollBox.clientHeight;

                    if (scrollBox.scrollTop + scrollStep < maxScrollTop) {
                        scrollSmoothBy(scrollBox, scrollStep, scrollSpeed);
                    } else {
                        scrollSmoothTo(scrollBox, 0, scrollSpeed);
                    }
                }

                function scrollSmoothBy(element, distance, duration) {
                    const start = element.scrollTop;
                    const end = start + distance;
                    animateScroll(element, start, end, duration);
                }

                function scrollSmoothTo(element, target, duration) {
                    const start = element.scrollTop;
                    animateScroll(element, start, target, duration);
                }

                function animateScroll(element, from, to, duration) {
                    const startTime = performance.now();

                    function animate(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const ease = easeInOutQuad(progress);
                        element.scrollTop = from + (to - from) * ease;

                        if (progress < 1) {
                            requestAnimationFrame(animate);
                        }
                    }

                    requestAnimationFrame(animate);
                }

                function easeInOutQuad(t) {
                    return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
                }

                function startScrolling() {
                    if (!scrollInterval) {
                        scrollInterval = setInterval(autoScroll, scrollDelay + scrollSpeed);
                    }
                }

                function stopScrolling() {
                    if (scrollInterval) {
                        clearInterval(scrollInterval);
                        scrollInterval = null;
                    }
                }

                // Pause on hover
                container.addEventListener("mouseenter", () => {
                    isPaused = true;
                    stopScrolling();
                });

                container.addEventListener("mouseleave", () => {
                    isPaused = false;
                    startScrolling();
                });

                startScrolling();
            });
        });

    </script>
    <!-- Token Selection Script -->
    <script>
        // custom dropdown
        $(document).ready(function () {
            $(".dropdown-buy-sell").each(function () {
                const dropdown = $(this);
                const button = dropdown.find(".custom-select-token");
                const menu = dropdown.find(".dropdown-menu");

                // Disable Bootstrap default dropdown behavior
                button.attr("data-bs-toggle", "");

                button.on("click", function (e) {
                    e.preventDefault();

                    if (menu.hasClass("show")) {
                        // Hide dropdown
                        menu.removeClass("show");
                        setTimeout(() => menu.css("display", "none"), 200);
                    } else {
                        // Show dropdown
                        menu.css("display", "block");
                        setTimeout(() => menu.addClass("show"), 10);
                    }
                });

                menu.find(".dropdown-item").on("click", function (e) {
                    e.preventDefault();
                    const value = $(this).data("value");
                    const image = $(this).data("image");

                    button.html(`<img src="${image}" alt="${value}"> <span>${value}</span>`);

                    menu.removeClass("show");
                    setTimeout(() => menu.css("display", "none"), 200);
                });
            });

            // Click outside closes all open dropdowns
            $(document).on("click", function (e) {
                $(".dropdown-buy-sell").each(function () {
                    const dropdown = $(this);
                    const menu = dropdown.find(".dropdown-menu");
                    if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0 && menu.hasClass("show")) {
                        menu.removeClass("show");
                        setTimeout(() => menu.css("display", "none"), 200);
                    }
                });
            });
        });

        $(document).ready(function () {
            $(".buy-sel-tabs .form-control")
                .on("focus", function () {
                    $(this).closest(".form-block").css("box-shadow", "0px 3px 0px 0px #ffbe38");
                })
                .on("blur", function () {
                    $(this).closest(".form-block").css("box-shadow", "0px 3px 0px 0px #4A5666");
                });
        });

        // crypto chart
        const ctx = document.getElementById("cryptoChart").getContext("2d");
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, "rgba(255,0,0,0.3)");
        gradient.addColorStop(1, "rgba(255,0,0,0)");

        const dataSet = {
            labels: ["6:00 PM", "12:00 AM", "3:00 AM", "6:00 AM", "12:00 PM"],
            datasets: [
                {
                    label: "Price",
                    data: [61850, 61900, 61830, 61980, 61870],
                    fill: true,
                    backgroundColor: gradient,
                    borderColor: "#FF4D4D",
                    tension: 0.4,
                    pointBackgroundColor: "#fff",
                    pointBorderColor: "#FF4D4D",
                    pointRadius: 4,
                    pointHoverRadius: 6,
                },
            ],
        };

        const config = {
            type: "line",
            data: dataSet,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        position: "right",
                        ticks: {
                            color: "#aaa",
                            padding: 4,
                            callback: (value) => value.toLocaleString("en-US", {minimumFractionDigits: 0}) + "K",
                        },
                        grid: {
                            display: true,
                            color: "#222",
                        },
                    },
                    x: {
                        ticks: {
                            color: "#aaa",
                        },
                        grid: {
                            display: false,
                            color: "#222",
                        },
                    },
                },
                plugins: {
                    legend: {display: false},
                    tooltip: {
                        mode: "index",
                        intersect: false,
                        backgroundColor: "#1A1D29",
                        borderColor: "#FF4D4D",
                        borderWidth: 1,
                    },
                },
                interaction: {
                    mode: "index",
                    intersect: false,
                },
            },
        };

        const myChart = new Chart(ctx, config);


        // ===== Chart 2 (cryptoChart2) with tab interaction =====
        const ctx2 = document.getElementById("cryptoChart2").getContext("2d");
        const gradient2 = ctx2.createLinearGradient(0, 0, 0, 300);
        gradient2.addColorStop(0, "rgba(255,0,0,0.3)");
        gradient2.addColorStop(1, "rgba(255,0,0,0)");

        const initialData = [61850, 61900, 61830, 61980, 61870];

        const dataSet2 = {
            labels: ["6:00 PM", "12:00 AM", "3:00 AM", "6:00 AM", "12:00 PM"],
            datasets: [
                {
                    label: "Price",
                    data: initialData,
                    fill: true,
                    backgroundColor: gradient2,
                    borderColor: "#FF4D4D",
                    tension: 0.4,
                    pointBackgroundColor: "#fff",
                    pointBorderColor: "#FF4D4D",
                    pointRadius: 4,
                    pointHoverRadius: 6,
                },
            ],
        };

        const config2 = {
            type: "line",
            data: dataSet2,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        position: "right",
                        ticks: {
                            color: "#aaa",
                            padding: 4,
                            callback: (value) =>
                                value.toLocaleString("en-US", {minimumFractionDigits: 0}) + "K",
                        },
                        grid: {
                            display: true,
                            color: "#222",
                        },
                    },
                    x: {
                        ticks: {
                            color: "#aaa",
                        },
                        grid: {
                            display: false,
                        },
                    },
                },
                plugins: {
                    legend: {display: false},
                    tooltip: {
                        mode: "index",
                        intersect: false,
                        backgroundColor: "#1A1D29",
                        borderColor: "#FF4D4D",
                        borderWidth: 1,
                    },
                },
                interaction: {
                    mode: "index",
                    intersect: false,
                },
            },
        };

        const myChart2 = new Chart(ctx2, config2);

        // ===== Handle Chart 2 Tabs (1D, 7D, 1M...) =====
        document.querySelectorAll('#chartTab2 .nav-link').forEach(btn => {
            btn.addEventListener('click', function () {
                // Active tab toggle
                document.querySelectorAll('#chartTab2 .nav-link').forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                const range = this.getAttribute('data-range');

                let newData = [];

                switch (range) {
                    case '1d':
                        newData = [61850, 61900, 61830, 61980, 61870];
                        break;
                    case '7d':
                        newData = [61200, 61600, 61500, 61400, 61850];
                        break;
                    case '1m':
                        newData = [59800, 60500, 61000, 61500, 62000];
                        break;
                    case '3m':
                        newData = [57000, 59000, 61000, 62000, 63000];
                        break;
                    case '1y':
                        newData = [45000, 50000, 55000, 60000, 65000];
                        break;
                }

                // Update Chart 2
                myChart2.data.datasets[0].data = newData;
                myChart2.update();
            });
        });


        document.querySelectorAll("#chartTab [data-range]").forEach((tab) => {
            tab.addEventListener("click", function () {
                const chartTab = this.closest("#chartTab");

                // Remove active class only from tabs inside chartTab
                chartTab.querySelectorAll(".nav-link").forEach((t) =>
                    t.classList.remove("active")
                );
                this.classList.add("active");

                // Fake data update for chart
                const newData = Array.from({length: 5}, () => 61500 + Math.random() * 500);
                myChart.data.datasets[0].data = newData;
                myChart.update();
            });
        });

    </script>

    <script>
        AOS.init();
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

        renderSparkline("spark-chart1", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart2", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart3", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart4", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart5", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart6", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart7", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart8", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart9", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart10", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
    </script>
    <script>
        document.getElementById("sell-tab").addEventListener("click", function () {
            document.querySelector(".buy-sel-tabs").classList.add("active");
        });
        document.getElementById("buy-tab").addEventListener("click", function () {
            document.querySelector(".buy-sel-tabs").classList.remove("active");
        });

        // Tooltip
        document.addEventListener("DOMContentLoaded", function () {
            const tooltipTriggerList = [].slice.call(
                document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
@endsection
