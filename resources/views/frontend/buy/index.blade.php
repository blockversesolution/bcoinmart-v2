@extends('frontend.layouts.app')
@section('content')

    <main class="main-area buy-page-padding">
        <!-- Buy Sell Start  -->
        <div class="buy-sel-section mt-60">
            <div class="main-action-tabs">
                {{--                Action tab --}}
                @include('frontend.includes.buy.action_tab')
                {{--                Action tab end--}}
                <div class="tab-content" id="actionTabContent">
                    {{--                    buy and sale--}}
                    @include('frontend.includes.buy.buy_sale.buy_n_sale')
                    {{--                    limit buy--}}
                    @include('frontend.includes.buy.limit.limit')
                    @include('frontend.includes.buy.recurring_buy.recurring_buy')

                    {{--                    deposit--}}
                    @include('frontend.includes.buy.deposit.deposit')

                    {{--                    withdraw--}}
                    @include('frontend.includes.buy.withdraw.withdraw')
                    <div class="tab-pane fade" id="buy-ecm" role="tabpanel" aria-labelledby="buy-ecm-tab">
                        <div class="container">
                            <p class="text-white">Another tab content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Sell End  -->
    </main>

@endsection

@push('js')
    <script>

        // Auto Scroll Multiple SimpleBar Scroll Boxes
        document.addEventListener("DOMContentLoaded", () => {
            const scrollBoxes = document.querySelectorAll(".scroll-box");

            scrollBoxes.forEach((container) => {
                const simpleBarInstance = new SimpleBar(container); // Force init
                const scrollBox = simpleBarInstance.getScrollElement();

                let scrollStep = 350;
                let scrollDelay = 2000;
                let scrollSpeed = 1000;

                let scrollInterval = null;
                let isPaused = false;

                function autoScroll() {
                    if (isPaused) return;

                    let maxScrollTop = scrollBox.scrollHeight - scrollBox.clientHeight;

                    if (scrollBox.scrollTop + scrollStep < maxScrollTop) {
                        scrollSmoothBy(scrollBox, scrollStep, scrollSpeed);
                    } else {
                        scrollSmoothTo(scrollBox, 0, scrollSpeed);
                    }
                }

                function scrollSmoothBy(element, distance, duration) {
                    const start = element.scrollTop;
                    const end = start + distance;
                    animateScroll(element, start, end, duration);
                }

                function scrollSmoothTo(element, target, duration) {
                    const start = element.scrollTop;
                    animateScroll(element, start, target, duration);
                }

                function animateScroll(element, from, to, duration) {
                    const startTime = performance.now();

                    function animate(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const ease = easeInOutQuad(progress);
                        element.scrollTop = from + (to - from) * ease;

                        if (progress < 1) {
                            requestAnimationFrame(animate);
                        }
                    }

                    requestAnimationFrame(animate);
                }

                function easeInOutQuad(t) {
                    return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
                }

                function startScrolling() {
                    if (!scrollInterval) {
                        scrollInterval = setInterval(autoScroll, scrollDelay + scrollSpeed);
                    }
                }

                function stopScrolling() {
                    if (scrollInterval) {
                        clearInterval(scrollInterval);
                        scrollInterval = null;
                    }
                }

                // Pause on hover
                container.addEventListener("mouseenter", () => {
                    isPaused = true;
                    stopScrolling();
                });

                container.addEventListener("mouseleave", () => {
                    isPaused = false;
                    startScrolling();
                });

                startScrolling();
            });
        });

    </script>
    <!-- Token Selection Script -->
    <script>
        // custom dropdown
        $(document).ready(function () {
            $(".dropdown-buy-sell").each(function () {
                const dropdown = $(this);
                const button = dropdown.find(".custom-select-token");
                const menu = dropdown.find(".dropdown-menu");

                // Disable Bootstrap default dropdown behavior
                button.attr("data-bs-toggle", "");

                button.on("click", function (e) {
                    e.preventDefault();

                    if (menu.hasClass("show")) {
                        // Hide dropdown
                        menu.removeClass("show");
                        setTimeout(() => menu.css("display", "none"), 200);
                    } else {
                        // Show dropdown
                        menu.css("display", "block");
                        setTimeout(() => menu.addClass("show"), 10);
                    }
                });

                menu.find(".dropdown-item").on("click", function (e) {
                    e.preventDefault();
                    const value = $(this).data("value");
                    const image = $(this).data("image");

                    button.html(`<img src="${image}" alt="${value}"> <span>${value}</span>`);

                    menu.removeClass("show");
                    setTimeout(() => menu.css("display", "none"), 200);
                });
            });

            // Click outside closes all open dropdowns
            $(document).on("click", function (e) {
                $(".dropdown-buy-sell").each(function () {
                    const dropdown = $(this);
                    const menu = dropdown.find(".dropdown-menu");
                    if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0 && menu.hasClass("show")) {
                        menu.removeClass("show");
                        setTimeout(() => menu.css("display", "none"), 200);
                    }
                });
            });
        });

        $(document).ready(function () {
            $(".buy-sel-tabs .form-control")
                .on("focus", function () {
                    $(this).closest(".form-block").css("box-shadow", "0px 3px 0px 0px #ffbe38");
                })
                .on("blur", function () {
                    $(this).closest(".form-block").css("box-shadow", "0px 3px 0px 0px #4A5666");
                });
        });

        // crypto chart
        const ctx = document.getElementById("cryptoChart").getContext("2d");
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, "rgba(255,0,0,0.3)");
        gradient.addColorStop(1, "rgba(255,0,0,0)");

        const dataSet = {
            labels: ["6:00 PM", "12:00 AM", "3:00 AM", "6:00 AM", "12:00 PM"],
            datasets: [
                {
                    label: "Price",
                    data: [61850, 61900, 61830, 61980, 61870],
                    fill: true,
                    backgroundColor: gradient,
                    borderColor: "#FF4D4D",
                    tension: 0.4,
                    pointBackgroundColor: "#fff",
                    pointBorderColor: "#FF4D4D",
                    pointRadius: 4,
                    pointHoverRadius: 6,
                },
            ],
        };

        const config = {
            type: "line",
            data: dataSet,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        position: "right",
                        ticks: {
                            color: "#aaa",
                            padding: 4,
                            callback: (value) => value.toLocaleString("en-US", {minimumFractionDigits: 0}) + "K",
                        },
                        grid: {
                            display: true,
                            color: "#222",
                        },
                    },
                    x: {
                        ticks: {
                            color: "#aaa",
                        },
                        grid: {
                            display: false,
                            color: "#222",
                        },
                    },
                },
                plugins: {
                    legend: {display: false},
                    tooltip: {
                        mode: "index",
                        intersect: false,
                        backgroundColor: "#1A1D29",
                        borderColor: "#FF4D4D",
                        borderWidth: 1,
                    },
                },
                interaction: {
                    mode: "index",
                    intersect: false,
                },
            },
        };

        const myChart = new Chart(ctx, config);


        // ===== Chart 2 (cryptoChart2) with tab interaction =====
        const ctx2 = document.getElementById("cryptoChart2").getContext("2d");
        const gradient2 = ctx2.createLinearGradient(0, 0, 0, 300);
        gradient2.addColorStop(0, "rgba(255,0,0,0.3)");
        gradient2.addColorStop(1, "rgba(255,0,0,0)");

        const initialData = [61850, 61900, 61830, 61980, 61870];

        const dataSet2 = {
            labels: ["6:00 PM", "12:00 AM", "3:00 AM", "6:00 AM", "12:00 PM"],
            datasets: [
                {
                    label: "Price",
                    data: initialData,
                    fill: true,
                    backgroundColor: gradient2,
                    borderColor: "#FF4D4D",
                    tension: 0.4,
                    pointBackgroundColor: "#fff",
                    pointBorderColor: "#FF4D4D",
                    pointRadius: 4,
                    pointHoverRadius: 6,
                },
            ],
        };

        const config2 = {
            type: "line",
            data: dataSet2,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        position: "right",
                        ticks: {
                            color: "#aaa",
                            padding: 4,
                            callback: (value) =>
                                value.toLocaleString("en-US", {minimumFractionDigits: 0}) + "K",
                        },
                        grid: {
                            display: true,
                            color: "#222",
                        },
                    },
                    x: {
                        ticks: {
                            color: "#aaa",
                        },
                        grid: {
                            display: false,
                        },
                    },
                },
                plugins: {
                    legend: {display: false},
                    tooltip: {
                        mode: "index",
                        intersect: false,
                        backgroundColor: "#1A1D29",
                        borderColor: "#FF4D4D",
                        borderWidth: 1,
                    },
                },
                interaction: {
                    mode: "index",
                    intersect: false,
                },
            },
        };

        const myChart2 = new Chart(ctx2, config2);

        // ===== Handle Chart 2 Tabs (1D, 7D, 1M...) =====
        document.querySelectorAll('#chartTab2 .nav-link').forEach(btn => {
            btn.addEventListener('click', function () {
                // Active tab toggle
                document.querySelectorAll('#chartTab2 .nav-link').forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                const range = this.getAttribute('data-range');

                let newData = [];

                switch (range) {
                    case '1d':
                        newData = [61850, 61900, 61830, 61980, 61870];
                        break;
                    case '7d':
                        newData = [61200, 61600, 61500, 61400, 61850];
                        break;
                    case '1m':
                        newData = [59800, 60500, 61000, 61500, 62000];
                        break;
                    case '3m':
                        newData = [57000, 59000, 61000, 62000, 63000];
                        break;
                    case '1y':
                        newData = [45000, 50000, 55000, 60000, 65000];
                        break;
                }

                // Update Chart 2
                myChart2.data.datasets[0].data = newData;
                myChart2.update();
            });
        });


        document.querySelectorAll("#chartTab [data-range]").forEach((tab) => {
            tab.addEventListener("click", function () {
                const chartTab = this.closest("#chartTab");

                // Remove active class only from tabs inside chartTab
                chartTab.querySelectorAll(".nav-link").forEach((t) =>
                    t.classList.remove("active")
                );
                this.classList.add("active");

                // Fake data update for chart
                const newData = Array.from({length: 5}, () => 61500 + Math.random() * 500);
                myChart.data.datasets[0].data = newData;
                myChart.update();
            });
        });

    </script>

    <script>
        AOS.init();
    </script>
    <script>
        function renderSparkline(id, data, color = "lime") {
            new Chart(document.getElementById(id), {
                type: "line",
                data: {
                    labels: data.map((_, i) => i),
                    datasets: [
                        {
                            data: data,
                            borderColor: color,
                            borderWidth: 1.5,
                            pointRadius: 0,
                            fill: false,
                            tension: 0.3,
                        },
                    ],
                },
                options: {
                    plugins: {legend: {display: false}},
                    responsive: false,
                    scales: {
                        x: {display: false},
                        y: {display: false},
                    },
                    elements: {
                        line: {tension: 0.3},
                    },
                },
            });
        }

        renderSparkline("spark-chart1", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart2", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart3", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart4", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart5", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart6", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart7", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#FF4D4F");
        renderSparkline("spark-chart8", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart9", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
        renderSparkline("spark-chart10", [2, 33, 22, 38, 60, 40, 45, 28, 55, 45], "#1ECB4F");
    </script>
    <script>
        document.getElementById("sell-tab").addEventListener("click", function () {
            document.querySelector(".buy-sel-tabs").classList.add("active");
        });
        document.getElementById("buy-tab").addEventListener("click", function () {
            document.querySelector(".buy-sel-tabs").classList.remove("active");
        });

        // Tooltip
        document.addEventListener("DOMContentLoaded", function () {
            const tooltipTriggerList = [].slice.call(
                document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
@endpush
