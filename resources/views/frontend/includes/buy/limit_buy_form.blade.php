<div class="col-lg-6 col-xl-5 order-1 order-lg-2">
    <div class="buy-sel-tabs limit-buy-form">
        <div class="limit-buy-form">
            <!-- Spend -->
            <div class="form-block dropdown-custom">
                <label class="form-label">Spend</label>
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
                                src="{{asset('frontend')}}/assets/images/buy/usdt.png"
                                alt="USDT"/>
                            <span>USDT</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                    data-value="USDT"
                                    data-image="{{asset('frontend')}}/assets/images/buy/usdt.png"
                                >
                                    <img
                                        src="{{asset('frontend')}}/assets/images/buy/usdt.png"/>
                                    USDT
                                </a>
                            </li>
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                    data-value="USDC"
                                    data-image="{{asset('frontend')}}/assets/images/buy/usdt.png"
                                >
                                    <img
                                        src="{{asset('frontend')}}/assets/images/buy/usdt.png"/>
                                    USDC
                                </a>
                            </li>
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                    data-value="BUSD"
                                    data-image="{{asset('frontend')}}/assets/images/buy/usdt.png"
                                >
                                    <img
                                        src="{{asset('frontend')}}/assets/images/buy/usdt.png"/>
                                    BUSD
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Receive -->
            <div class="form-block dropdown-custom">
                <label class="form-label">Receive</label>
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

            <!-- Payment -->
            <div class="payment dropdown-custom">
                <div class="payment">
                    <label class="form-label mb-20">Payment Method</label>
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
            <button class="primary-btn me-2 w-100 justify-content-center">Buy
                BTC
            </button>
        </div>
    </div>
</div>
