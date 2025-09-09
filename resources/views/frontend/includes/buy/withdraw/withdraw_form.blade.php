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
