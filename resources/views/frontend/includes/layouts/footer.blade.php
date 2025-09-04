<footer class="footer-main">
    <div class="footer-top-main">
        <div class="container">
            <div class="row footer-top">
                <!-- single item  -->
                <div class="col-md-12 col-xl-4">
                    <div class="footer-logo text-center text-sm-start">
                        <a href="{{url('/')}}">
                            <img
                                class="footer-img"
                                src="{{asset('frontend')}}/assets/images/logo.png"
                                alt="logo"
                            />
                        </a>
                        <p class="footer-text">
                            Makes crypto trading simple and secure, offering a smooth user
                            experience with fast transactions and top-notch security for
                            your investments.
                        </p>
                    </div>
                </div>
                <!-- single item  -->
                <div class="col-sm-6 col-md-3 col-xl-2">
                    <div class="footer-menu">
                        <h3 class="footer-menu-title text-center text-sm-start">
                            About
                        </h3>
                        <ul class="text-center text-sm-start">
                            <li>
                                <a class="footer-menu-link" href="#">About BcoinMart</a>
                            </li>
                            <li><a class="footer-menu-link" href="#">Press Room</a></li>
                            <li><a class="footer-menu-link" href="#">Communities</a></li>
                        </ul>
                    </div>
                </div>
                <!-- single item  -->
                <div class="col-sm-6 col-md-3 col-xl-2">
                    <div class="footer-menu">
                        <h3 class="footer-menu-title text-center text-sm-start">
                            Services
                        </h3>
                        <ul class="text-center text-sm-start">
                            <li>
                                <a class="footer-menu-link" href="{{route('frontend.p2p.buy')}}">One-Click Buy</a>
                            </li>
                            <li><a class="footer-menu-link" href="{{route('frontend.p2p.buy')}}">P2P Trading</a></li>
                            <li><a class="footer-menu-link" href="#">VIP Program</a></li>
                        </ul>
                    </div>
                </div>
                <!-- single item  -->
                <div class="col-sm-6 col-md-3 col-xl-2">
                    <div class="footer-menu">
                        <h3 class="footer-menu-title text-center text-sm-start">
                            Platforms
                        </h3>
                        <ul class="text-center text-sm-start">
                            <li>
                                <a class="footer-menu-link" href="#">Submit a Request</a>
                            </li>
                            <li><a class="footer-menu-link" href="#">Help Center</a></li>
                            <li><a class="footer-menu-link" href="#">Support Hub</a></li>
                        </ul>
                    </div>
                </div>
                <!-- single item  -->
                <div class="col-sm-6 col-md-3 col-xl-2">
                    <div class="footer-menu">
                        <h3 class="footer-menu-title text-center text-sm-start">
                            Product
                        </h3>
                        <ul class="text-center text-sm-start">
                            <li><a class="footer-menu-link" href="{{route('frontend.p2p.buy')}}">Trade</a></li>
                            <li><a class="footer-menu-link" href="#">Derivatives</a></li>
                            <li><a class="footer-menu-link" href="#">Launchpad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-icon">
                <div class="row gy-3 align-items-end">
                    <div class="col-md-6">
                        <h2 class="footer-icon-title text-center text-sm-start">
                            Follow Us
                        </h2>
                        <div class="d-flex social-icon-main">
                            <a href="#" class="social-icon"
                            ><i class="fa-brands fa-facebook-f"></i
                                ></a>
                            <a href="#" class="social-icon"
                            ><i class="fa-brands fa-instagram"></i
                                ></a>
                            <a href="#" class="social-icon"
                            ><i class="fa-solid fa-location-arrow"></i
                                ></a>
                            <a href="#" class="social-icon"
                            ><i class="fa-brands fa-x-twitter"></i
                                ></a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <ul class="d-flex footer-privacy">
                            <li><a href="#">Terms of conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-disclaimer-main">
                    <p class="footer-disclaimer text-center text-sm-start">
                        Disclaimer: Bcoinmart provides general information only and does
                        not offer financial or investment advice. Trading crypto{{asset('frontend')}}/assets
                        involves significant risk and can result in loss of funds. You
                        are responsible for your own tax obligations and should seek
                        independent advice.Some products may be unregulated or
                        restricted in certain regions. Bcoinmart’s services and
                        protections vary by jurisdiction. Always understand the risks
                        before trading.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-text">
                <p class="footer-bottom-copyright">
                    Copyright &copy; 2025 by
                    <a href="{{url('/')}}">BcoinMart</a>
                </p>
            </div>
        </div>
    </div>
</footer>
