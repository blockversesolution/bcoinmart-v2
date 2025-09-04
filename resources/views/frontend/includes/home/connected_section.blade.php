<section class="connected-section mt-120 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading-section text-center text-lg-start">
                    <h2 class="text-white">
                        Stay connected. Trade wherever you are.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center gy-4 mt-5">
            <div class="col-lg-6">
                <div class="connected-area">
                    <div
                        class="qr-code-area d-flex align-items-center g-20 justify-content-center justify-content-lg-start"
                    >
                        <div class="qr-code card-1 border-1">
                            <img
                                src="{{asset('frontend')}}/assets/images/thumbnails/qr-code.png"
                                alt="qr-code"
                                class="w-100"
                            />
                        </div>
                        <div class="qr-code-text">
                            <p>Scan to Download App</p>
                            <h5>
                                <a href="#">iOS</a>
                                &
                                <a href="#">Android</a>
                            </h5>
                        </div>
                    </div>
                    <div class="system-info">
                        <ul
                            class="d-flex align-items-center justify-content-center justify-content-lg-start"
                        >
                            <li
                                class="text-center"
                                data-aos="fade-up"
                                data-aos-delay="200"
                                data-aos-duration="500"
                            >
                                <a href="#"
                                ><img src="{{asset('frontend')}}/assets/images/icon/apple-2.png" alt="icon" />
                                    <p class="mt-3">MacOS</p></a
                                >
                            </li>
                            <li
                                class="text-center"
                                data-aos="fade-up"
                                data-aos-delay="500"
                                data-aos-duration="800"
                            >
                                <a href="#">
                                    <img src="{{asset('frontend')}}/assets/images/icon/windows.png" alt="icon" />
                                    <p class="mt-3">Windows</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-1 border-1">
                    <div
                        class="video-thumbnails d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="{{asset('frontend')}}/assets/images/thumbnails/video.png"
                            alt="img"
                            class="w-100"
                        />
                        <a
                            id="play-video"
                            class="video-play-button"
                            href="#"
                            data-video-url="https://www.youtube.com/embed/wih7coKNL4Q?autoplay=1"
                            data-aos="zoom-out-up"
                            data-aos-delay="1000"
                            data-aos-duration="1500"
                        >
                            <span></span>
                        </a>
                        <div id="video-overlay" class="video-overlay">
                            <a class="video-overlay-close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-to-buy-shape">
        <img src="{{asset('frontend')}}/assets/images/buy/buy-crypto/shape.png" alt="" />
    </div>
</section>
