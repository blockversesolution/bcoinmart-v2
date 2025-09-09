<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{asset('frontend')}}/assets/js/main.js"></script>

<script>
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
                        callback: (value) =>
                            value.toLocaleString("en-US", { minimumFractionDigits: 0 }) +
                            "K",
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
                legend: { display: false },
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

    // Tab switching (you can load dynamic data per tab)
    document.querySelectorAll("[data-range]").forEach((tab) => {
        tab.addEventListener("click", function () {
            document
                .querySelectorAll(".nav-link")
                .forEach((t) => t.classList.remove("active"));
            this.classList.add("active");

            // Fake data change
            const newData = Array.from(
                { length: 5 },
                () => 61500 + Math.random() * 500
            );
            myChart.data.datasets[0].data = newData;
            myChart.update();
        });
    });

    // auto scroll bitcoin

    const scrollBox = document.getElementById("scroll-box");
    let scrollStep = 350; // px per scroll step
    let scrollDelay = 2000; // delay before scroll (ms)
    let scrollSpeed = 1000; // smooth scroll duration (ms)

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
    scrollBox.addEventListener("mouseenter", () => {
        isPaused = true;
        stopScrolling();
    });

    scrollBox.addEventListener("mouseleave", () => {
        isPaused = false;
        startScrolling();
    });

    // Start auto scroll initially
    startScrolling();
</script>
<script>
    // Additional smooth scrolling enhancements
    const scrollTrack = document.querySelector(".scroll-track");
    const scrollContainer = document.querySelector(".scroll-container");

    // Pause animation on hover over the entire container
    scrollContainer.addEventListener("mouseenter", () => {
        scrollTrack.style.animationPlayState = "paused";
    });

    scrollContainer.addEventListener("mouseleave", () => {
        scrollTrack.style.animationPlayState = "running";
    });

    AOS.init();
</script>
<script src="{{asset('frontend')}}/assets/js/play.js"></script>

<!-- here is sparkline chart js  -->
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
                plugins: { legend: { display: false } },
                responsive: false,
                scales: {
                    x: { display: false },
                    y: { display: false },
                },
                elements: {
                    line: { tension: 0.3 },
                },
            },
        });
    }
    renderSparkline(
        "spark-chart1",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart2",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart3",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart4",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart5",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart6",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart7",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart8",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart9",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart10",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart11",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart12",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart13",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart14",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart15",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#1ECB4F"
    );
    renderSparkline(
        "spark-chart16",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart17",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart18",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart19",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart20",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart21",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );
    renderSparkline(
        "spark-chart22",
        [2, 33, 22, 38, 60, 40, 45, 28, 55, 45],
        "#FF4D4F"
    );

</script>

@stack('js')
