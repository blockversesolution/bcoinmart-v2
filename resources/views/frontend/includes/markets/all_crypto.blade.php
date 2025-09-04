<div class="tab-content" id="actionTabContent">
    <div class="tab-pane fade " id="buy-sell" role="tabpanel" aria-labelledby="buy-sell-tab">
        <p class="text-white">Another tab content 1</p>
    </div>
    <div class="tab-pane fade show active" id="limit-buy" role="tabpanel" aria-labelledby="limit-buy-tab">
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
                        <table id="cryptoTable" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade " id="Solana" role="tabpanel" aria-labelledby="Solana-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable2" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="RWA" role="tabpanel" aria-labelledby="RWA-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable3" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="Meme" role="tabpanel" aria-labelledby="Meme-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable4" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="Alpha" role="tabpanel" aria-labelledby="Alpha-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable5" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="Payments" role="tabpanel" aria-labelledby="Payments-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable6" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="AI" role="tabpanel" aria-labelledby="AI-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable7" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="Layer" role="tabpanel" aria-labelledby="Layer-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable8" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="Metaverse" role="tabpanel" aria-labelledby="Metaverse-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable9" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="Others" role="tabpanel" aria-labelledby="Others-tab">
                    <div class="market-datatable">
                        <table id="cryptoTable10" class="display cryptoTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Change (24h)</th>
                                <th>24h Volume</th>
                                <th>Market Cap</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="green-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/1.png" width="20"> BTC <span>Bitcoin</span></td>
                                <td>$103,851.15</td>
                                <td class="red-data-text">-1.21%</td>
                                <td>$41.4B</td>
                                <td>$2.09T</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/2.png" width="20"> ETH <span>Ripple</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/3.png" width="20"> XRP <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/4.png" width="20"> USDT <span>Tether</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/5.png" width="20"> SOL <span>Solana</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/6.png" width="20"> ADA <span>Cardano</span></td>
                                <td>$2,548.99</td>
                                <td class="red-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('frontend')}}/assets/images/markets/7.png" width="20"> ETH <span>Ethereum</span></td>
                                <td>$2,548.99</td>
                                <td class="green-data-text">-2.88%</td>
                                <td>$17.59B</td>
                                <td>$316.55B</td>
                                <td class="trade-child">
                                    <a href="#"
                                       class=""
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Details">
                                        <img src="{{asset('frontend')}}/assets/images/markets/tooltip.png" alt="">
                                    </a>

                                    <a href="#" class="btn-trade">Trade</a>
                                </td>
                            </tr>
                            <!-- Add more rows here... -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="recurring-buy" role="tabpanel" aria-labelledby="recurring-buy-tab">
        <div class="container">
            <p class="text-white">Another tab content 3</p>
        </div>
    </div>
    <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">

        <p class="text-white">Another tab content 4</p>
    </div>
    <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">

        <p class="text-white">Another tab content 5</p>
    </div>
    <div class="tab-pane fade" id="buy-ecm" role="tabpanel" aria-labelledby="buy-ecm-tab">
        <div class="container">
            <p class="text-white">Another tab content 6</p>
        </div>
    </div>
</div>
