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
