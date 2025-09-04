@extends('frontend.layouts.app')
@section('content')
    <main class="main-area mt-85">
        <!-- start earn hero area  -->
        <div class="earn-hero-area">
            <div class="container">
                <div class="earn-tabs">
                    <div class="market-tabs">
                        <ul class="tabs-slide owl-carousel owl-theme">
                            <li><a href="{{route('frontend.earn.overview')}}" class="active">Overview</a></li>
                            <li><a href="#">Simple Earn</a></li>
                            <li><a href="#">Advanced Earn</a></li>
                            <li><a href="#">Loan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 mt-60">
                    <div class="col-md-7">
                        <div class="bcoinmart-earn-hero">
                            <div class="common-heading-section text-center text-md-start">
                                <h2 class="text-primary">BcoinMart Earn</h2>
                                <p>
                                    <b
                                    >Smart Earnings Made Simple – Over 300+ Crypto {{asset('frontend')}}/assets to
                                        Grow Your Wealth</b
                                    >
                                    Explore flexible and locked earning options with top crypto
                                    {{asset('frontend')}}/assets. Stake, hold, and earn passive income effortlessly
                                    with competitive APRs. Whether you're a long-term HODLer or
                                    active trader, BcoinMart Earn is designed to work for you.
                                </p>
                                <a href="#" class="primary-btn mt-60">Log in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="earn-overview-img">
                            <img
                                src="{{asset('frontend')}}/assets/images/earn/hero.png"
                                alt="Bcoinmart Earn Image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start earn hero area  -->

        <!-- start earn overview card area  -->
        <section class="position-relative earn-overview-card mt-60 mb-120">
            <div class="container">
                <div class="earn-overview-card-box">
                    <div class="row g-4">
                        <div class="col-sm-6 col-lg-3">
                            <div class="border-gradient-2 m-0">
                                <div class="opportunity-card">
                                    <div class="roi-and-chart">
                                        <div class="user-info">
                                            <div class="avatar">
                                                <img src="{{asset('frontend')}}/assets/images/earn/bitcoin.png" alt="image" />
                                            </div>
                                            <div class="user-details earn-info-title">
                                                <h4 class="user-details-name">SOL</h4>
                                                <div class="earn-card-info">
                                                    <p>Simple Earn | Flexible</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-line earn-chart-line">
                                            <div class="graph">
                                                <canvas class="sparkline2" id="spark-chart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stats-row earn-star-row">
                                        <div class="stat-item">
                                            <span class="stat-label">30 Days PNL</span>
                                            <p class="stat-value profit-value">+712,167.92</p>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-label">AUM</span>
                                            <p class="stat-value">1,341,381.50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="border-gradient-2 m-0">
                                <div class="opportunity-card">
                                    <div class="roi-and-chart">
                                        <div class="user-info">
                                            <div class="avatar">
                                                <img src="{{asset('frontend')}}/assets/images/earn/bitcoin.png" alt="image" />
                                            </div>
                                            <div class="user-details earn-info-title">
                                                <h4 class="user-details-name">SOL</h4>
                                                <div class="earn-card-info">
                                                    <p>Simple Earn | Flexible</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-line earn-chart-line">
                                            <div class="graph">
                                                <canvas class="sparkline2" id="spark-chart2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stats-row earn-star-row">
                                        <div class="stat-item">
                                            <span class="stat-label">30 Days PNL</span>
                                            <p class="stat-value profit-value">+712,167.92</p>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-label">AUM</span>
                                            <p class="stat-value">1,341,381.50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="border-gradient-2 m-0">
                                <div class="opportunity-card">
                                    <div class="roi-and-chart">
                                        <div class="user-info">
                                            <div class="avatar">
                                                <img src="{{asset('frontend')}}/assets/images/earn/bitcoin.png" alt="image" />
                                            </div>
                                            <div class="user-details earn-info-title">
                                                <h4 class="user-details-name">SOL</h4>
                                                <div class="earn-card-info">
                                                    <p>Simple Earn | Flexible</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-line earn-chart-line">
                                            <div class="graph">
                                                <canvas class="sparkline2" id="spark-chart3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stats-row earn-star-row">
                                        <div class="stat-item">
                                            <span class="stat-label">30 Days PNL</span>
                                            <p class="stat-value profit-value">+712,167.92</p>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-label">AUM</span>
                                            <p class="stat-value">1,341,381.50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="border-gradient-2 m-0">
                                <div class="opportunity-card">
                                    <div class="roi-and-chart">
                                        <div class="user-info">
                                            <div class="avatar">
                                                <img src="{{asset('frontend')}}/assets/images/earn/bitcoin.png" alt="image" />
                                            </div>
                                            <div class="user-details earn-info-title">
                                                <h4 class="user-details-name">SOL</h4>
                                                <div class="earn-card-info">
                                                    <p>Simple Earn | Flexible</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-line earn-chart-line">
                                            <div class="graph">
                                                <canvas class="sparkline2" id="spark-chart4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stats-row earn-star-row">
                                        <div class="stat-item">
                                            <span class="stat-label">30 Days PNL</span>
                                            <p class="stat-value profit-value">+712,167.92</p>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-label">AUM</span>
                                            <p class="stat-value">1,341,381.50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-to-buy-shape">
                <img src="{{asset('frontend')}}/assets/images/buy/buy-crypto/shape.png" alt="">
            </div>
        </section>
        <!-- end earn overview card area  -->

        <!-- start popular product area  -->
        <section class="connected-section popular-product-area mb-120 position-relative">
            <div class="container">
                <div class="row g-4 mb-40 align-items-center">
                    <div class="col-lg-4">
                        <div class="popular-title">
                            <h3>Popular Products</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div
                            class="popular-grid d-flex align-items-center justify-content-end gap-4"
                        >
                            <div class="popular-select custom-select-wrapper">
                                <select name="" id="" class="custom-select">
                                    <option value="All Durations">All Durations</option>
                                    <option value="Flexible">Flexible</option>
                                    <option value="Locked">Locked</option>
                                </select>
                            </div>
                            <div class="popular-select custom-select-wrapper">
                                <select name="" id="" class="custom-select">
                                    <option value="All Products">All Products</option>
                                    <option value="USDT">USDT</option>
                                    <option value="USD">USD</option>
                                    <option value="BTC">BTC</option>
                                </select>
                            </div>
                            <div class="popular-search">
                                <img src="{{asset('frontend')}}/assets/images/earn/search.png" alt="search" />
                                <input
                                    type="search"
                                    name=""
                                    placeholder="Search Coin Name"
                                    id=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="popular-datatable">
                    <table id="earnTable">
                        <thead>
                        <tr>
                            <th>Coin</th>
                            <th>Est. APR</th>
                            <th>Duration</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Main rows -->
                        <tr class="main-row" data-id="1">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/1.png"
                                        width="20"
                                    />
                                </div>
                                USDC
                            </td>
                            <td class="green-data-text">10.8%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>

                        <tr class="main-row" data-id="2">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/1.png"
                                        width="20"
                                    />
                                </div>
                                BUSD
                            </td>
                            <td class="green-data-text">9.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>

                        <tr class="main-row" data-id="3">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/2.png"
                                        width="20"
                                    />
                                </div>
                                USDT
                            </td>
                            <td class="green-data-text">8.9%</td>
                            <td>
                                Flexible/7D/15D
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>

                        <tr class="main-row" data-id="4">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/3.png"
                                        width="20"
                                    />
                                </div>
                                BTC
                            </td>
                            <td class="green-data-text">7.1%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>

                        <tr class="main-row" data-id="5">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/4.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>
                        <tr class="main-row" data-id="6">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/5.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>
                        <tr class="main-row" data-id="7">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/6.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>
                        <tr class="main-row" data-id="8">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/7.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>
                        <tr class="main-row" data-id="9">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/8.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>
                        <tr class="main-row" data-id="10">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/9.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>
                        </tr>
                        <tr class="main-row" data-id="11">
                            <td class="coin-name-td">
                                <div class="coin-close-logo">
                                    <span class="close-icon"><img src="{{asset('frontend')}}/assets/images/earn/crypto-close.png" alt=""></span>
                                    <img
                                        class="logo-earn-popuplar-logo"
                                        src="{{asset('frontend')}}/assets/images/earn/popular/10.png"
                                        width="20"
                                    />
                                </div>
                                ETH
                            </td>
                            <td class="green-data-text">6.5%</td>
                            <td>
                                Flexible/Locked
                            </td>
                            <td class="sub-col-width"><span class="arrow-icon"
                                ><img src="{{asset('frontend')}}/assets/images/earn/cavron.png" alt=""
                                    /></span></td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="most-trending-shape">
                <img src="{{asset('frontend')}}/assets/images/buy/bitcoin/bticoin.png" alt="">
            </div>
            <div class="process-shape-2">
                <img src="{{asset('frontend')}}/assets/images/buy/withdraw/2.png" alt="">
            </div>
        </section>
        <!-- end popular product area  -->

        <!-- start profit calculation area  -->
        <secion class="profit-calculatoin-area">
            <div class="container">
                <div class="border-gradient-2">
                    <div class="profit-calculation-box recurring-exchange-text">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="profit-calculation-content">
                                    <div class="common-heading-section text-center text-md-start mb-60">
                                        <h2 class="text-primary">Profit Calculation</h2>
                                        <p>Please input your profit calculation
                                        </p>
                                    </div>
                                    <form action="#" class="profit-calculation-form">
                                        <div class="asset-selector">
                                            <div class="input-container calculate-child">
                                                <label for="Amount">Amount</label> <br>
                                                <input type="text" class="amount-input" placeholder="10000.00" value="">
                                                <label class="check-wrap mt-4">
                                                    <input type="checkbox" name="chk1" />
                                                    <span class="check-label">Auto Compounding</span>
                                                </label>
                                            </div>
                                            <div class="to-text calculate-child-to">To</div>
                                            <div class="calculate-child">
                                                <label for="Currency">Currency</label>
                                                <div class="asset-box">
                                                    <div class="dropdown dropdown-buy-sell">
                                                        <button
                                                            class="btn custom-select-token dropdown-toggle select-token"
                                                            type="button"
                                                            data-bs-toggle=""
                                                            aria-expanded="false"
                                                        >
                                                            <img src="{{asset('frontend')}}/assets/images/buy/bnb.png" alt="BTC" />
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
                                                                    <img src="{{asset('frontend')}}/assets/images/buy/bnb.png" />
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
                                                                    <img src="{{asset('frontend')}}/assets/images/buy/bnb.png" />
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
                                                                    <img src="{{asset('frontend')}}/assets/images/buy/bnb.png" />
                                                                    SOL
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <label class="check-wrap mt-4">
                                                    <input type="checkbox" name="chk2" />
                                                    <span class="check-label">Auto Subscribe</span>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="primary-btn me-2 w-100 justify-content-center mt-60">Calculate</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="calculate-profite-report">
                                    <div class="cal-profit-header">
                                        <p>Estimated Profit</p>
                                        <h4>+00.02451 <span>USDT</span></h4>
                                    </div>
                                    <div class="profit-tabs">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <ul class="nav nav-tabs actionTab " id="actionTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="setting-time">
                                                        Calculate Time
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="3Y-tab" data-bs-toggle="tab" data-bs-target="#3Y" type="button" role="tab" aria-selected="true">
                                                        3Y
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="1Y-tab" data-bs-toggle="tab" data-bs-target="#1Y" type="button" role="tab" aria-selected="false" tabindex="-1">
                                                        1Y
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="6M-tab" data-bs-toggle="tab" data-bs-target="#6M" type="button" role="tab" aria-selected="false" tabindex="-1">
                                                        6M
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="3M-tab" data-bs-toggle="tab" data-bs-target="#3M" type="button" role="tab" aria-selected="false" tabindex="-1">
                                                        3M
                                                    </button>
                                                </li>

                                            </ul>
                                        </div><div class="tab-content" id="actionTabContent">
                                            <div class="tab-pane fade show active" id="3Y" role="tabpanel" aria-labelledby="3Y-tab">
                                                <div class="profite-report-content">
                                                    <p>Please note that this profit calculation is an estimate and may differ from the actual profit generated.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="1Y" role="tabpanel" aria-labelledby="1Y-tab">
                                                <div class="profite-report-content">
                                                    <p>Please note that this profit calculation is an estimate and may differ from the actual profit generated.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="6M" role="tabpanel" aria-labelledby="6M-tab">
                                                <div class="profite-report-content">
                                                    <p>Please note that this profit calculation is an estimate and may differ from the actual profit generated.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="3M" role="tabpanel" aria-labelledby="3M-tab">
                                                <div class="profite-report-content">
                                                    <p>Please note that this profit calculation is an estimate and may differ from the actual profit generated.</p>
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
        </secion>
        <!-- end profit calculation area  -->

        <!-- start popular accordion  -->
        <section class="accordion-bcoinmart accordion-opportunity mb-120">
            <div class="container">
                <div class="common-heading-section text-center text-md-start">
                    <h2 class="text-white">Frequently Asked Questions</h2>
                </div>
                <div class="row mt-60">
                    <div class="col-md-12">
                        <div class="accordion-content">
                            <div class="accordion" id="accordionExample">
                                <div class="border-gradient-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's stand-ard dummy text ever since

                                            </button>

                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="bcoinmart-accordion-body">
                                                    It is a long established fact that a reader will be distracted by the readable
                                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                    that it has a more-or-less normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English. Many desktop
                                                    publishing packages and web page editors now use Lorem Ipsum as their default
                                                    model text, and a search for 'lorem ipsum' will uncover.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-gradient-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's stand-ard dummy text ever since

                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="bcoinmart-accordion-body">
                                                    It is a long established fact that a reader will be distracted by the readable
                                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                    that it has a more-or-less normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English. Many desktop
                                                    publishing packages and web page editors now use Lorem Ipsum as their default
                                                    model text, and a search for 'lorem ipsum' will uncover.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-gradient-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's stand-ard dummy text ever since

                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="bcoinmart-accordion-body">
                                                    It is a long established fact that a reader will be distracted by the readable
                                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                    that it has a more-or-less normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English. Many desktop
                                                    publishing packages and web page editors now use Lorem Ipsum as their default
                                                    model text, and a search for 'lorem ipsum' will uncover.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-gradient-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's stand-ard dummy text ever since

                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="bcoinmart-accordion-body">
                                                    It is a long established fact that a reader will be distracted by the readable
                                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                    that it has a more-or-less normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English. Many desktop
                                                    publishing packages and web page editors now use Lorem Ipsum as their default
                                                    model text, and a search for 'lorem ipsum' will uncover.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-gradient-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's stand-ard dummy text ever since

                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p class="bcoinmart-accordion-body">
                                                    It is a long established fact that a reader will be distracted by the readable
                                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                    that it has a more-or-less normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English. Many desktop
                                                    publishing packages and web page editors now use Lorem Ipsum as their default
                                                    model text, and a search for 'lorem ipsum' will uncover.

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
        <!-- end popular accordion  -->



    </main>
@endsection
