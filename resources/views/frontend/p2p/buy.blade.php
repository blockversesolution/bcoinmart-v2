@extends('frontend.layouts.app')
@section('content')

    <main class="main-area">
        <!-- start market pages area  -->
        @include('frontend.includes.p2p.menu')
        <!-- end market pages area  -->

        <!-- start p2p buy sell area  -->
        <section class="p2p-buy-sell-area mt-60">
            <div class="container">
                <div class="p2p-tabs-area">
                    <div class="main-action-tabs">
                        <ul
                            class="nav nav-tabs actionTab tabs-slide owl-carousel owl-theme "
                            id="actionTab"
                            role="tablist"
                        >
                            @include('frontend.includes.p2p.filter_nav')
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="USDT-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#USDT"
                                    type="button"
                                    role="tab"
                                >
                                    USDT
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="BTC-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#BTC"
                                    type="button"
                                    role="tab"
                                >
                                    BTC
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="USDC-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#USDC"
                                    type="button"
                                    role="tab"
                                >
                                    USDC
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="FDUSD-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#FDUSD"
                                    type="button"
                                    role="tab"
                                >
                                    FDUSD
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="BNB-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#BNB"
                                    type="button"
                                    role="tab"
                                >
                                    BNB
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="ETH-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#ETH"
                                    type="button"
                                    role="tab"
                                >
                                    ETH
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="DAI-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#DAI"
                                    type="button"
                                    role="tab"
                                >
                                    DAI
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="ETH-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#ETH"
                                    type="button"
                                    role="tab"
                                >
                                    ETH
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="TST-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#TST"
                                    type="button"
                                    role="tab"
                                >
                                    TST
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="TBC-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#TBC"
                                    type="button"
                                    role="tab"
                                >
                                    TBC
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="ECM-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#ECM"
                                    type="button"
                                    role="tab"
                                >
                                    ECM
                                </button>
                            </li>
                        </ul>

                        <div class="buy-search-filter-area my-4">
                            <div class="buy-trasection-search">
                                <div
                                    class="buy-trasection-search-flex d-flex justify-content-between align-items-center"
                                >
                                    <div
                                        class="buy-sell-search-box d-flex gap-2 align-items-center"
                                    >
                                        <div class="buy-sell-input">
                                            <input type="text" placeholder="Transaction amount" />
                                            <div class="payment information-select">
                                                <div
                                                    class="dropdown dropdown-buy-sell payment-dropdown-select"
                                                >
                                                    <button
                                                        class="btn custom-select-token dropdown-toggle select-token payment-select"
                                                        type="button"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                    >
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/btc.png"
                                                            alt="Card"
                                                        />
                                                        <span>USDT</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a
                                                                class="dropdown-item"
                                                                href="#"
                                                                data-value="USDT"
                                                                data-image="{{asset('frontend')}}/assets/images/buy-sell/btc.png"
                                                            >
                                                                <img
                                                                    src="{{asset('frontend')}}/assets/images/buy-sell/btc.png"
                                                                    alt="Card"
                                                                />
                                                                USDT
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                class="dropdown-item"
                                                                href="#"
                                                                data-value="USDC"
                                                                data-image="{{asset('frontend')}}/assets/images/buy-sell/btc.png"
                                                            >
                                                                <img
                                                                    src="{{asset('frontend')}}/assets/images/buy-sell/btc.png"
                                                                    alt="Card"
                                                                />
                                                                USDC
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="buy-sell-select-normal trading-data-select custom-select-wrapper"
                                        >
                                            <select name="" id="" class="custom-select">
                                                <option value="All Payment methods">
                                                    All Payment methods
                                                </option>
                                                <option value="Metamask">Metamask</option>
                                                <option value="Metamask">Metamask</option>
                                                <option value="Metamask">Metamask</option>
                                            </select>
                                        </div>
                                        <!-- <div class="buy-sell-filter">
                                        <button><img src="{{asset('frontend')}}/assets/images/buy-sell/filter.png" alt=""></button>
                                    </div> -->
                                    </div>
                                    <div
                                        class="buy-sell-price-reload d-flex gap-2 align-items-center"
                                    >
                                        <div
                                            class="buy-sell-price-select trading-data-select custom-select-wrapper"
                                        >
                                            <span>Sort By</span>
                                            <select name="" id="" class="custom-select">
                                                <option value="All Payment methods">Price</option>
                                                <option value="low to high">low to high</option>
                                                <option value="high to low">high to low</option>
                                            </select>
                                        </div>
                                        <div class="reload-buy-sell">
                                            <button id="reloadBtn">
                                                <i class="fa-solid fa-rotate" id="reloadIcon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content mb-60 mt-60" id="actionTabContent">
                            <div
                                class="tab-pane fade active show"
                                id="USDT"
                                role="tabpanel"
                                aria-labelledby="USDT-tab"
                            >
                                <div class="p2p-buy-sell-table-area">
                                    <table class="p2p-buy-sell-table">
                                        <thead>
                                        <tr>
                                            <th>Advertisers</th>
                                            <th>Price</th>
                                            <th>Available/Order Limit</th>
                                            <th>Payment</th>
                                            <th>Trade</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="BTC"
                                role="tabpanel"
                                aria-labelledby="BTC-tab"
                            >
                                <div class="p2p-buy-sell-table-area">
                                    <table class="p2p-buy-sell-table">
                                        <thead>
                                        <tr>
                                            <th>Advertisers</th>
                                            <th>Price</th>
                                            <th>Available/Order Limit</th>
                                            <th>Payment</th>
                                            <th>Trade</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="USDC"
                                role="tabpanel"
                                aria-labelledby="USDC-tab"
                            >
                                <div class="p2p-buy-sell-table-area">
                                    <table class="p2p-buy-sell-table">
                                        <thead>
                                        <tr>
                                            <th>Advertisers</th>
                                            <th>Price</th>
                                            <th>Available/Order Limit</th>
                                            <th>Payment</th>
                                            <th>Trade</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="advertiser">
                                                    <div class="advertiser-user position-relative">
                                                        <img
                                                            src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                            alt="Avatar"
                                                        />
                                                        <span></span>
                                                    </div>
                                                    <div class="advertiser-info">
                                                        <strong>Rickle Pick</strong>
                                                        <small>100.00% completion</small>
                                                        <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                            <span>|</span>
                                                            <span
                                                            ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$ 0.994</td>
                                            <td>
                                                <p class="buy-sell-order-limit">
                                                    <span>5,716.58 USDT </span>
                                                    <small>200.00 USD - 5,682.00 USD</small>
                                                </p>
                                            </td>
                                            <td class="banks">
                                                <div class="buy-sell-banks">
                                                    <span class="tbc-bank">TBC Bank</span>
                                                    <span class="georgia-bank">Bank of Georgia</span>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="buy-sell-trade-btn">Buy USDT</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="FDUSD"
                                role="tabpanel"
                                aria-labelledby="FDUSD-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="BNB"
                                role="tabpanel"
                                aria-labelledby="BNB-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="ETH"
                                role="tabpanel"
                                aria-labelledby="ETH-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="DAI"
                                role="tabpanel"
                                aria-labelledby="DAI-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="ETH"
                                role="tabpanel"
                                aria-labelledby="ETH-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="TST"
                                role="tabpanel"
                                aria-labelledby="TST-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="TBC"
                                role="tabpanel"
                                aria-labelledby="TBC-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="ECM"
                                role="tabpanel"
                                aria-labelledby="ECM-tab"
                            >
                                <div class="container">
                                    <div class="p2p-buy-sell-table-area">
                                        <table class="p2p-buy-sell-table">
                                            <thead>
                                            <tr>
                                                <th>Advertisers</th>
                                                <th>Price</th>
                                                <th>Available/Order Limit</th>
                                                <th>Payment</th>
                                                <th>Trade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/1.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/2.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/3.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/4.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/5.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/6.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="advertiser">
                                                        <div class="advertiser-user position-relative">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/buy-sell/7.png"
                                                                alt="Avatar"
                                                            />
                                                            <span></span>
                                                        </div>
                                                        <div class="advertiser-info">
                                                            <strong>Rickle Pick</strong>
                                                            <small>100.00% completion</small>
                                                            <div class="details">
                                  <span
                                  ><i class="fa-regular fa-thumbs-up"></i>
                                    93.87%</span
                                  >
                                                                <span>|</span>
                                                                <span
                                                                ><i class="fa-regular fa-clock"></i> 15
                                    min</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$ 0.994</td>
                                                <td>
                                                    <p class="buy-sell-order-limit">
                                                        <span>5,716.58 USDT </span>
                                                        <small>200.00 USD - 5,682.00 USD</small>
                                                    </p>
                                                </td>
                                                <td class="banks">
                                                    <div class="buy-sell-banks">
                                                        <span class="tbc-bank">TBC Bank</span>
                                                        <span class="georgia-bank">Bank of Georgia</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="buy-sell-trade-btn">Buy USDT</button>
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
        </section>
        <!-- end p2p buy sell area  -->

        <!-- start embark section area  -->
        @include('frontend.includes.p2p.embark')
        <!-- end embark section area  -->

        <!-- How to buy Area End  -->
        @include('frontend.includes.p2p.work')
        <!-- How to buy Area End  -->

        <!-- start trading tips area -->
        @include('frontend.includes.p2p.tips')
        <!-- end trading tips area  -->

        <!-- Accordion start  -->
        @include('frontend.includes.p2p.faq')
        <!-- Accordion End  -->

        <!-- start company area bottom -->
        @include('frontend.includes.company_slider')
        <!-- end company area bottom -->



    </main>
@endsection
