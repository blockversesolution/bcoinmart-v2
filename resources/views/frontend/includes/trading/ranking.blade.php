<section
    class="connected-section trading-crypto market-crypto-tab-area mb-120 position-relative"
>
    <div class="container">
        <div class="main-action-tabs">
            <ul
                class="nav nav-tabs actionTab tabs-slide owl-carousel owl-theme"
                id="actionTab"
                role="tablist"
            >
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="Rankings-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#Rankings"
                        type="button"
                        role="tab"
                    >
                        Rankings
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="m-Futures-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#m-Futures"
                        type="button"
                        role="tab"
                    >
                        USDⓈ-M Futures
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="m-coin-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#m-coin"
                        type="button"
                        role="tab"
                    >
                        COIN-M Futures
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="Options-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#Options"
                        type="button"
                        role="tab"
                    >
                        Options
                    </button>
                </li>
            </ul>

            <div class="tab-content mt-60" id="actionTabContent">
                <div
                    class="tab-pane fade show active"
                    id="Rankings"
                    role="tabpanel"
                    aria-labelledby="Rankings-tab"
                >
                    <div class="trading-data-content">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>Top Cryptos</h3>
                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>Top Gainers</h3>
                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>Top Losers</h3>

                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>Top Volume</h3>

                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>USDⓈ-M Futures</h3>

                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>COIN-M Futures</h3>

                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card h-100">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>Price Change Distribution</h3>
                                        </div>
                                        <div class="trading-chart-box">
                                            <canvas id="tradingChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="border-gradient-2 m-0">
                                    <div class="top-cryptos-card h-100">
                                        <div
                                            class="crypto-card-title d-flex justify-content-between align-items-center mb-4"
                                        >
                                            <h3>COIN-M Futures</h3>

                                            <div class="trading-data-select custom-select-wrapper">
                                                <select name="" id="" class="custom-select">
                                                    <option value="Crypto">Crypto</option>
                                                    <option value="All Market">All Market</option>
                                                    <option value="USDT Market">USDT Market</option>
                                                    <option value="BNB Market">BNB Market</option>
                                                    <option value="BTC Market">BTC Market</option>
                                                    <option value="ETH Market">ETH Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="top-crypto-table">
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td class="crypto-top-number">1</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/1.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BTC <span>Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">2</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/2.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                ETH <span>Ethereum</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">3</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/3.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDT <span>TetherUS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">4</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/4.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                XRP <span>XRP</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">5</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/5.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                BNB <span>BNB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">6</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/6.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                SOL <span>Solana</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">7</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/7.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                USDC <span>USDC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">8</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/8.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                DOGE <span>Dogecoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">9</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/9.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                TRX <span>Tron</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="red-data-text">+0.32%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="crypto-top-number">10</td>
                                                    <td>
                                                        <div class="crypto-top-name">
                                                            <img
                                                                src="{{asset('frontend')}}/assets/images/markets/top-currency/10.png"
                                                                width="20"
                                                            />
                                                            <div class="crypto-top-name-currency">
                                                                WBTC <span>Wrapped Bitcoin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="crypto-top-value">
                                                            <span>$103,800.1</span>
                                                            <span class="green-data-text"
                                                            >+0.32%</span
                                                            >
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

                <div
                    class="tab-pane fade"
                    id="m-Futures"
                    role="tabpanel"
                    aria-labelledby="m-Futures-tab"
                >
                    <div class="container">
                        <p class="text-white">Another tab content 3</p>
                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="m-coin"
                    role="tabpanel"
                    aria-labelledby="m-coin-tab"
                >
                    <p class="text-white">Another tab content 4</p>
                </div>
                <div
                    class="tab-pane fade"
                    id="Options"
                    role="tabpanel"
                    aria-labelledby="Options-tab"
                >
                    <p class="text-white">Another tab content 5</p>
                </div>
            </div>
        </div>
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
