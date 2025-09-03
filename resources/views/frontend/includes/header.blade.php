<header class="header-area position-relative">
    <div class="container">
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid">
                <!-- Brand Logo -->
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('frontend')}}/assets/images/logo.png" alt="logo" />
                </a>

                <!-- Mobile Right Controls -->
                <div class="d-flex align-items-center g-10 d-xl-none">
                    <!-- Search Icon -->

                    <!-- Language Dropdown (Mobile View) -->
                    <div class="mobile-language-view">
                        <ul class="d-flex align-items-center">
                            <li class="nav-item dropdown country-menu-parent">
                                <a
                                    class="dropdown-toggle d-flex align-items-center g-5"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <img src="{{asset('frontend')}}/assets/images/icon/languages.png" alt="icon" />
                                    EN
                                </a>
                                <ul
                                    class="dropdown-menu country-menu"
                                    data-simplebar
                                    style="max-height: 360px"
                                    data-bs-popper="static"
                                    id="scrollbar"
                                >
                                    <li>
                                        <a class="dropdown-item active" href="#">
                                            <span>English (us)</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>France</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>Espen</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>Bangla</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>Arabic</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>Italy</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>Portugal</span>
                                            <span class="float-end icon-check"
                                            ><i class="fa-solid fa-circle-check fs-6"></i
                                                ></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Mobile Toggle Button -->
                    <button
                        class="navbar-toggler icon"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                    >
                <span class="icon-bar"
                ><i class="fa fa-bars" aria-hidden="true"></i
                    ></span>
                    </button>
                </div>

                <!-- Desktop Navbar -->
                <div
                    class="collapse navbar-collapse d-none d-xl-flex justify-content-between"
                    id="navbarText"
                >
                    <ul class="navbar-nav mx-auto main-navs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.buy')}}">Buy Crypto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="markets.html">Markets</a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle mega-menu-link" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Trade
                                <i class="fa-solid fa-chevron-down ms-1"></i>
                            </a>

                            <!-- Custom Dropdown Menu -->
                            <div class="dropdown-menu custom-mega-dropdown p-4 shadow-lg border-0 rounded-3" aria-labelledby="moreDropdown">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <a href="p2p-buy.html" class="text-decoration-none d-flex align-items-start">
                                            <div class="icon-box bg-white rounded me-3"></div>
                                            <div>
                                                <strong class="text-white">P2P</strong>
                                                <div class="text-muted small">Get up to 50% commission per trade.</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="#" class="text-decoration-none d-flex align-items-start">
                                            <div class="icon-box bg-white rounded me-3"></div>
                                            <div>
                                                <strong class="text-white">Crypto for Good</strong>
                                                <div class="text-muted small">Fast, easy crypto payments.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Futures</a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle mega-menu-link" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Earn
                                <i class="fa-solid fa-chevron-down ms-1"></i>
                            </a>

                            <!-- Custom Dropdown Menu -->
                            <div class="dropdown-menu custom-mega-dropdown p-4 shadow-lg border-0 rounded-3" aria-labelledby="moreDropdown">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <a href="earn.html" class="text-decoration-none d-flex align-items-start">
                                            <div class="icon-box bg-white rounded me-3"></div>
                                            <div>
                                                <strong class="text-white">Overview</strong>
                                                <div class="text-muted small">Get up to 50% commission per trade.</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="#" class="text-decoration-none d-flex align-items-start">
                                            <div class="icon-box bg-white rounded me-3"></div>
                                            <div>
                                                <strong class="text-white">Crypto for Good</strong>
                                                <div class="text-muted small">Fast, easy crypto payments.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#">Square</a></li>

                        <!-- More Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mega-menu-link" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                                <i class="fa-solid fa-chevron-down ms-1"></i>
                            </a>
                            <!-- Custom Dropdown Menu -->
                            <div class="dropdown-menu custom-mega-dropdown p-4 shadow-lg border-0 rounded-3" aria-labelledby="moreDropdown">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <a href="affiliate.html" class="text-decoration-none d-flex align-items-start">
                                            <div class="icon-box bg-white rounded me-3"></div>
                                            <div>
                                                <strong class="text-white">Affiliate</strong>
                                                <div class="text-muted small">Get up to 50% commission per trade.</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="refer.html" class="text-decoration-none d-flex align-items-start">
                                            <div class="icon-box bg-white rounded me-3"></div>
                                            <div>
                                                <strong class="text-white">Refer</strong>
                                                <div class="text-muted small">Fast, easy crypto payments.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>

                    <div class="header-right d-flex align-items-center">
                        <div
                            class="search-icon pointer desktop-view me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                        >
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <a href="sign-up.html" class="primary-btn me-2">Sign Up</a>
                        <a href="sign-in.html" class="secondary-btn">Sign In</a>

                        <!-- Desktop Language View -->
                        <div class="desktop-language-view">
                            <ul class="d-flex align-items-center">
                                <li class="nav-item dropdown country-menu-parent">
                                    <a
                                        class="dropdown-toggle d-flex align-items-center g-5"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        <img
                                            src="{{asset('frontend')}}/assets/images/icon/languages.png"
                                            alt="icon"
                                        />
                                        EN
                                    </a>
                                    <ul
                                        class="dropdown-menu country-menu"
                                        data-simplebar
                                        style="max-height: 360px"
                                        data-bs-popper="static"
                                        id="scrollbar"
                                    >
                                        <li>
                                            <a class="dropdown-item active" href="#">
                                                <span>English (us)</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span>France</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span>Espen</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span>Bangla</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span>Arabic</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span>Italy</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span>Portugal</span>
                                                <span class="float-end icon-check"
                                                ><i class="fa-solid fa-circle-check fs-6"></i
                                                    ></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Offcanvas Mobile Menu -->
        <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
        >
            <div class="offcanvas-header">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('frontend')}}/assets/images/logo.png" alt="logo" />
                </a>
                <span
                    class="icon-bar btn-close"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                >
              <i class="fa-solid fa-xmark"></i>
            </span>
            </div>
            <div class="header-searching-box">
                <form action="">
                    <div
                        class="searching-box g-20 d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap"
                    >
                        <input
                            type="text"
                            placeholder="Search..."
                            class="input-shadow"
                        />
                        <!-- <button class="primary-btn-sm">Search</button> -->
                    </div>
                </form>
            </div>
            <div class="offcanvas-body offcanvas-menu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="buy.html">Buy Crypto</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="markets.html">Markets</a>
                    </li>

                    <!-- Trade accordion -->
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#tradeSubmenu" role="button" aria-expanded="false" aria-controls="tradeSubmenu">
                            Trade
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="collapse" id="tradeSubmenu" data-bs-parent="#navbarNav">
                            <ul class="list-unstyled ps-3">
                                <li><a class="nav-link" href="p2p-buy.html">P2P</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Futures</a>
                    </li>

                    <!-- Earn accordion -->
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#earnSubmenu" role="button" aria-expanded="false" aria-controls="earnSubmenu">
                            Earn
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="collapse" id="earnSubmenu" data-bs-parent="#navbarNav">
                            <ul class="list-unstyled ps-3">
                                <li><a class="nav-link" href="earn.html">Overview</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Square</a>
                    </li>

                    <!-- More accordion -->
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#moreSubmenu" role="button" aria-expanded="false" aria-controls="moreSubmenu">
                            More
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="collapse" id="moreSubmenu" data-bs-parent="#navbarNav">
                            <ul class="list-unstyled ps-3">
                                <li><a class="nav-link" href="affiliate.html">Affiliate</a></li>
                                <li><a class="nav-link" href="refer.html">Refer</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <hr />
                <!-- Sign Buttons -->
                <div class="d-flex flex-column gap-2">
                    <a href="sign-up.html" class="primary-btn w-100 text-center">Sign Up</a>
                    <a href="sign-in.html" class="secondary-btn w-100 text-center">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Modal -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body">
                <div class="header-searching-box">
                    <form action="">
                        <div
                            class="searching-box g-20 d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap"
                        >
                            <input
                                type="text"
                                placeholder="Search..."
                                class="input-shadow"
                            />
                            <button class="primary-btn-sm">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
