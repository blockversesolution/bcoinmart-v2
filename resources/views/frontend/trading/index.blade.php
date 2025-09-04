@extends('frontend.layouts.app')

@push('css')
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />

    <!-- datatable cdn  -->
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css"
    />
@endpush

@section('content')
    <main class="main-area">
        <!-- start market marquee -->
        @include('frontend.includes.markets_layout.market_marquee')
        <!-- end market marquee  -->

        <!-- start market pages area  -->
        @include('frontend.includes.markets_layout.menu')
        <!-- end market pages area  -->

        <!-- start market crypto tabs area  -->
        @include('frontend.includes.trading.ranking')
        <!-- end market crypto tabs area  -->
    </main>

@endsection

@push('js')

    <!-- datatable  -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <!-- owl carousel  -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script>
        $(document).ready(function() {
            // Ensure the canvas element exists before creating the chart
            const canvasElement = document.getElementById("tradingChart");
            if (!canvasElement) {
                console.error("Canvas element with ID 'tradingChart' not found");
                return;
            }

            // Trading chart
            const tradingCtx = canvasElement.getContext("2d");
            const isMobile = window.innerWidth < 991;
            const barWidth = isMobile ? 26 : 60;

            const data = {
                labels: ["2020", "2021", "2022", "2023", "2024", "2025"],
                datasets: [
                    {
                        label: "",
                        data: [2, 10, 6, 9, 7, 11],
                        backgroundColor: "#5c5f66",
                        borderRadius: 2,
                        barThickness: barWidth,
                    },
                ],
            };

            const config = {
                type: "bar",
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            top: 20,
                            bottom: 10,
                        },
                    },
                    scales: {
                        x: {
                            ticks: {
                                color: "#ccc",
                                callback: function (value, index) {
                                    return this.getLabelForValue(index);
                                },
                            },
                            grid: {
                                display: false,
                            },
                        },
                        y: {
                            position: "right",
                            ticks: {
                                color: "#aaa",
                                callback: () => "10.52K",
                            },
                            grid: {
                                color: "#333",
                            },
                        },
                    },
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            backgroundColor: "#1A1D29",
                            borderColor: "#FF4D4D",
                            borderWidth: 1,
                        },
                    },
                },
            };

            new Chart(tradingCtx, config);

            // DataTable initialization
            $(".cryptoTable").DataTable({
                paging: false,
                searching: false,
                info: false,
                ordering: true,
                responsive: true,
                autoWidth: false,
                responsive: {
                    details: {
                        type: "column",
                        target: "tr",
                    },
                },
                columnDefs: [
                    { responsivePriority: 1, targets: 0 },
                    { responsivePriority: 2, targets: -1 },
                ],
            });

            // Market marquee functionality
            const marqueeElement = document.getElementById("marquee");
            const contentElement = document.querySelector(".marquee-content");

            if (marqueeElement && contentElement) {
                marqueeElement.addEventListener("mouseenter", () => {
                    contentElement.style.animationPlayState = "paused";
                });

                marqueeElement.addEventListener("mouseleave", () => {
                    contentElement.style.animationPlayState = "running";
                });
            }
        });

        // Window resize event
        $(window).on("resize", function () {
            $(".cryptoTable").DataTable().columns.adjust().responsive.recalc();
        });

        // Market search functionality
        $(document).on("click", ".market-search-button", function (e) {
            const $input = $(this)
                .closest(".market-search-box")
                .find('input[type="search"]');
            $input.css("display", "inline-block").focus();
        });

        $(document).on("click", function (e) {
            const $target = $(e.target);
            const isInside = $target.closest(".market-search-box").length > 0;

            if (!isInside) {
                $('.market-search-box input[type="search"]').css("display", "none");
            }
        });

        // Dropdown functionality
        document.addEventListener("DOMContentLoaded", function() {
            document
                .querySelectorAll(".dropdown-custom .dropdown-menu .dropdown-item")
                .forEach((item) => {
                    item.addEventListener("click", function (e) {
                        e.preventDefault();

                        const image = this.dataset.image;
                        const value = this.dataset.value;

                        const dropdown = this.closest(".dropdown");
                        const button = dropdown.querySelector(".select-token");

                        if (button) {
                            button.innerHTML = `<img src="${image}" alt="${value}"> <span>${value}</span>`;
                        }
                    });
                });

            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(
                document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Initialize AOS if available
            if (typeof AOS !== 'undefined') {
                AOS.init();
            }
        });
    </script>
@endpush
