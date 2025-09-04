@extends('frontend.layouts.app')
@section('content')

    <main class="main-area mt-85">
        <!-- start earn hero area  -->
        <div class="earn-hero-area">
            <div class="container">
                <div class="row g-4 mt-60">
                    <div class="col-md-6">
                        <div class="bcoinmart-earn-hero">
                            <div class="common-heading-section text-center text-md-start">
                                <h2 class="text-primary">Invite Friends. Earn $100 in Trading Fee Credits!</h2>
                                <p class="text-white">Start referring today and unlock $100 in fee credits for every friend who joins and trades. Fast, easy, and rewarding.</p>
                                <a href="#" class="reffer-hero-btn mt-4">View referral rules <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="earn-overview-img">
                            <img
                                src="{{asset('frontend')}}/assets/images/reffer/hero.png"
                                alt="Bcoinmart Earn Image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start earn hero area  -->

        <!-- start earn reffer area  -->
        <section class="earn-reffer-area mt-120">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-md-8">
                        <div class="common-heading-section text-left">
                            <h2 class="text-primary">How to Earn with Referrals</h2>
                        </div>
                    </div>
                </div>
                <div class="puzzle-design-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                    <div class="puzzle-design-card puzzle-design-shape-1">
                        <svg preserveAspectRatio="none" viewBox="0 0 599 362" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_384_336)">
                                <path d="M4 12C4 5.37258 9.37258 0 16 0H583C589.627 0 595 5.37258 595 12V170.816C595 174.696 593.124 178.337 589.963 180.589L560.037 201.911C556.876 204.163 555 207.804 555 211.684V342C555 348.627 549.627 354 543 354H16C9.37258 354 4 348.627 4 342V12Z" fill="#1E2329"></path>
                                <path d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z" stroke="url(#paint0_linear_384_336)" stroke-opacity="0.6" stroke-width="2"></path>
                                <path d="M16 1H583C589.075 1 594 5.92487 594 12V170.815C594 174.372 592.28 177.71 589.383 179.774L559.456 201.097C556.032 203.536 554 207.481 554 211.685V342C554 348.075 549.075 353 543 353H16C9.92487 353 5 348.075 5 342V12C5 5.92487 9.92487 1 16 1Z" stroke="white" stroke-opacity="0.1" stroke-width="2"></path>
                            </g>
                            <defs>
                                <filter id="filter0_d_384_336" x="0" y="0" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_384_336"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_384_336" result="shape"></feBlend>
                                </filter>
                                <linearGradient id="paint0_linear_384_336" x1="781" y1="-136.5" x2="-129" y2="456" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.126517" stop-color="white"></stop>
                                    <stop offset="0.41336" stop-color="white" stop-opacity="0"></stop>
                                    <stop offset="0.701226" stop-color="white" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="white"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="puzzle-text">
                            <div class="icon">
                                <img src="{{asset('frontend')}}/assets/images/affiliate/reffer/1.png" alt="Step 1">
                            </div>
                            <h5 class="shap-title">Share Your Link</h5>
                            <p class="shap-content">
                                Send your unique referral link to friends via social media, email, or message.
                            </p>
                        </div>
                    </div>

                    <div class="puzzle-design-card puzzle-design-shape-2">
                        <svg preserveAspectRatio="none" viewBox="0 0 371 362" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_384_337)">
                                <path d="M44 12C44 5.37259 49.3726 0 56 0H355C361.627 0 367 5.37258 367 12V342C367 348.627 361.627 354 355 354H16C9.37259 354 4 348.627 4 342V221.684C4 217.804 5.8764 214.163 9.0367 211.911L38.9633 190.589C42.1236 188.337 44 184.696 44 180.816V12Z" fill="#1E2329"></path>
                                <path d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z" stroke="url(#paint0_linear_384_337)" stroke-opacity="0.6" stroke-width="2"></path>
                                <path d="M56 1H355C361.075 1 366 5.92487 366 12V342C366 348.075 361.075 353 355 353H16C9.92487 353 5 348.075 5 342V221.685C5 218.128 6.72025 214.79 9.61719 212.726L39.5439 191.403C42.9675 188.964 45 185.019 45 180.815V12C45 5.92487 49.9249 1 56 1Z" stroke="white" stroke-opacity="0.1" stroke-width="2"></path>
                            </g>
                            <defs>
                                <filter id="filter0_d_384_337" x="0" y="0" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_384_337"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_384_337" result="shape"></feBlend>
                                </filter>
                                <linearGradient id="paint0_linear_384_337" x1="-94.4734" y1="-119.717" x2="179.926" y2="566.43" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.126517" stop-color="white"></stop>
                                    <stop offset="0.41336" stop-color="white" stop-opacity="0"></stop>
                                    <stop offset="0.701226" stop-color="white" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="white"></stop>
                                </linearGradient>
                            </defs>
                        </svg>

                        <div class="puzzle-text">
                            <div class="icon">
                                <img src="{{asset('frontend')}}/assets/images/affiliate/reffer/2.png" alt="Step 2">
                            </div>
                            <h5 class="shap-title">Friend Sign Up & Deposits</h5>
                            <p class="shap-content">
                                Your friend registers and makes a deposit of over $50.
                            </p>
                        </div>
                    </div>

                    <div class="puzzle-design-card puzzle-design-shape-3">
                        <svg preserveAspectRatio="none" viewBox="0 0 373 362" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_384_338)">
                                <rect x="4" width="365" height="354" rx="12" fill="#1E2329"></rect>
                                <rect x="5" y="1" width="363" height="352" rx="11" stroke="url(#paint0_linear_384_338)" stroke-opacity="0.6" stroke-width="2"></rect>
                                <rect x="5" y="1" width="363" height="352" rx="11" stroke="white" stroke-opacity="0.1" stroke-width="2"></rect>
                            </g>
                            <defs>
                                <filter id="filter0_d_384_338" x="0" y="0" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_384_338"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_384_338" result="shape"></feBlend>
                                </filter>
                                <linearGradient id="paint0_linear_384_338" x1="502.003" y1="-118.545" x2="-203.421" y2="202.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.126517" stop-color="white"></stop>
                                    <stop offset="0.41336" stop-color="white" stop-opacity="0"></stop>
                                    <stop offset="0.701226" stop-color="white" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="white"></stop>
                                </linearGradient>
                            </defs>
                        </svg>

                        <div class="puzzle-text">
                            <div class="icon">
                                <img src="{{asset('frontend')}}/assets/images/affiliate/reffer/3.png" alt="Step 3">
                            </div>
                            <h5 class="shap-title">You Both Earn Credit</h5>
                            <p class="shap-content">
                                Each of you receives a $100 trading fee rebate voucher.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end earn reffer area  -->

        <!-- start affiliate program area  -->
        <section class="affiliate-program-area embark-section mt-120">
            <div class="container">
                <div class="embark-text">
                    <!-- Default gradient borders -->
                    <div class="text-center row">
                        <div class="col-md-8 offset-md-2">
                            <div class="common-heading-section">
                                <h2 class="text-primary">
                                    Maximize Your Earning Potential with BcoinMart
                                </h2>
                                <p>
                                    Invite friends to BcoinMart, trade together, and unlock exclusive rewards — your earning journey starts here.
                                </p>
                                <div class="d-inline-block mt-5">
                                    <a href="#" class="primary-btn">
                                        Sign Up Now
                                        <i class="fa-solid fa-user-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end affiliate program area  -->

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
