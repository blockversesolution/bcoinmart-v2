@extends('frontend.layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection
@section('content')

    <main class="main-area">
        <!-- start market marquee -->
        @include('frontend.includes.markets.market_marquee')
        <!-- end market marquee  -->

        <!-- start market pages area  -->
        @include('frontend.includes.markets_layout.menu')
        <!-- end market pages area  -->

        <!-- start market overview Card  -->
        @include('frontend.includes.markets.market_over_view')
        <!-- end market overview Card  -->

        <!-- start market crypto tabs area  -->
        <section class="market-crypto-tab-area mb-120 position-relative">
            <div class="container">
                <div class="main-action-tabs">
                    @include('frontend.includes.markets.filter_nav_bar')
                    @include('frontend.includes.markets.all_crypto')
                </div>
            </div>
            <div class="most-trending-shape">
                <img src="{{asset('frontend')}}/assets/images/buy/bitcoin/bticoin.png" alt="">
            </div>
            <div class="process-shape-2">
                <img src="{{asset('frontend')}}/assets/images/buy/withdraw/2.png" alt="">
            </div>
        </section>
        <!-- end market crypto tabs area  -->

        <!-- start embark area  -->
        @include('frontend.includes.embark_section')
        <!-- end embark area  -->

    </main>


@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <!-- owl carousel  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        // Market search box js
        $(document).on('click', '.market-search-button', function (e) {
            const $input = $(this).closest('.market-search-box').find('input[type="search"]');
            $input.css('display', 'inline-block').focus();
        });

        // Hide input when clicking outside
        $(document).on('click', function (e) {
            const $target = $(e.target);
            const isInside = $target.closest('.market-search-box').length > 0;

            if (!isInside) {
                $('.market-search-box input[type="search"]').css('display', 'none');
            }
        });



        document
            .querySelectorAll(".dropdown-custom .dropdown-menu .dropdown-item")
            .forEach((item) => {
                item.addEventListener("click", function (e) {
                    e.preventDefault();

                    const image = this.dataset.image;
                    const value = this.dataset.value;

                    const dropdown = this.closest(".dropdown");
                    const button = dropdown.querySelector(".select-token");

                    // Just update button content
                    button.innerHTML = `<img src="${image}" alt="${value}"> <span>${value}</span>`;
                });
            });


    </script>
    <script>

        // market marquee headline js

        const marquee = document.getElementById("marquee");
        const content = document.querySelector(".marquee-content");

        marquee.addEventListener("mouseenter", () => {
            content.style.animationPlayState = "paused";
        });

        marquee.addEventListener("mouseleave", () => {
            content.style.animationPlayState = "running";
        });



        AOS.init();

        document.addEventListener("DOMContentLoaded", function () {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

    </script>
@endsection
