<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Custom 7 Tab Carousel</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

.sc-carousel {
    width: 100%;
}

.sc-navigation {
    position: absolute;
    left: 64px;
    bottom: 62px;
    height:42px;
    padding: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
    background: #f8eacb;
    border: 1px solid #ead7ad;
    border-radius: 5px;
    box-sizing: border-box;
}

.sc-counter {
    display: flex;
    align-items: center;
    white-space: nowrap;
color: var(--brand-navy-soft-55, rgba(22, 48, 91, 0.55));
font-family: Nunito;
font-size: 11px;
font-style: normal;
font-weight: 700;
line-height: 140%; /* 15.4px */
letter-spacing: 1.98px;
text-transform: uppercase;
}

.sc-counter-separator {
    margin: 0 5px;
}

.sc-progress {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 4px;
    min-width: 0;
}

.sc-progress-item {
    flex: 1;
    padding: 0;
    border: 0;
    border-radius: 20px;
     height: 4px;
    width: 17px;
    border-radius: var(--radius-xs, 2px);
    background: rgba(22, 48, 91, 0.16);
    cursor: pointer;
    transition:
        background-color 0.3s ease,
        transform 0.3s ease;
}

.sc-progress-item.sc-progress-active {
    background: #C83A14;
}

.sc-progress-item:hover {
    transform: scaleY(1.3);
}

.sc-navigation-divider {
    width: 1px;
    height: 15px;
  background: rgba(22, 48, 91, 0.16);
    margin: 0px;
}

.sc-arrows {
    display: flex;
    align-items: center;
    gap: 20px;
}

.sc-arrow {
    width: 23px;
    height: 23px;
    padding: 0;
    border: 0;
    background: transparent;
    position: relative;
    cursor: pointer;
}

.sc-arrow-prev span {
    left: 5px;

    transform:
        translateY(-50%)
        rotate(-135deg);
}

.sc-arrow-next span {
    right: 5px;
    transform:
        translateY(-50%)
        rotate(45deg);
}

.sc-arrow:hover span {
    border-color: #d8422f;
}

.sc-arrow:disabled {
    opacity: 0.4;
    cursor: not-allowed;
}

.sc-slider-window {
    width: 100%;
    overflow: hidden;
}

.sc-slider-track {
    display: flex;
    transition: transform 0.5s ease;
}

.sc-slide {
    width:100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: #fff;
    border-radius: 10px;
}

.sc-slide h2 {
    margin-bottom: 15px;
}

.sc-slide p {
    color: #777;
}

.sc-carousel.sc-last-active .sc-progress-item {
    background: #e0c98f;
}

.sc-carousel.sc-last-active
.sc-progress-item.sc-progress-active {
    background: #8b6b35;
}

.sc-carousel.sc-last-active
.sc-navigation {
    background: #f3e0b7;
}
    </style>
</head>


<body>


<!-- ================================
     CAROUSEL NAVIGATION
================================ -->

<div class="sc-carousel" id="scCarousel">
    <div class="sc-slider-window">
        <div class="sc-slider-track" id="scSliderTrack">

            <section class="sc-slide">
                <video class="sc-video" autoplay muted playsinline loop poster="your-poster-image.jpg">
                    <source src="img/home-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>

            <section class="sc-slide">
                <h2>Section 02</h2>
                <p>Content for section two.</p>
            </section>

            <section class="sc-slide">
                <h2>Section 03</h2>
                <p>Content for section three.</p>
            </section>

            <section class="sc-slide">
                <h2>Section 04</h2>
                <p>Content for section four.</p>
            </section>

            <section class="sc-slide">
                <h2>Section 05</h2>
                <p>Content for section five.</p>
            </section>

            <section class="sc-slide">
                <h2>Section 06</h2>
                <p>Content for section six.</p>
            </section>

            <section class="sc-slide">
                <h2>Section 07</h2>
                <p>Content for section seven.</p>
            </section>

        </div>

    </div>

</div>

<div class="sc-navigation">

        <!-- COUNTER -->
        <div class="sc-counter">
            <span id="scCurrentNumber">01</span>
            <span class="sc-counter-separator">/</span>
            <span>07</span>
        </div>


        <!-- PROGRESS SEGMENTS -->
        <div class="sc-progress">

            <button
                type="button"
                class="sc-progress-item sc-progress-active"
                data-sc-slide="0">
            </button>

            <button
                type="button"
                class="sc-progress-item"
                data-sc-slide="1">
            </button>

            <button
                type="button"
                class="sc-progress-item"
                data-sc-slide="2">
            </button>

            <button
                type="button"
                class="sc-progress-item"
                data-sc-slide="3">
            </button>

            <button
                type="button"
                class="sc-progress-item"
                data-sc-slide="4">
            </button>

            <button
                type="button"
                class="sc-progress-item"
                data-sc-slide="5">
            </button>

            <button
                type="button"
                class="sc-progress-item"
                data-sc-slide="6">
            </button>

        </div>


        <!-- DIVIDER -->
        <div class="sc-navigation-divider"></div>


        <!-- ARROWS -->
        <div class="sc-arrows">

            <button
                type="button"
                class="sc-arrow sc-arrow-prev"
                id="scPrev"
                aria-label="Previous">

                <img src="img/left-arrow.png" alt="">

            </button>


            <button
                type="button"
                class="sc-arrow sc-arrow-next"
                id="scNext"
                aria-label="Next">

                <img src="img/right-arrow.png" alt="">

            </button>

        </div>

    </div>

<script>

    /* ========================================
   ELEMENTS
======================================== */

const scCarousel =
    document.getElementById("scCarousel");

const scSliderTrack =
    document.getElementById("scSliderTrack");

const scCurrentNumber =
    document.getElementById("scCurrentNumber");

const scPrev =
    document.getElementById("scPrev");

const scNext =
    document.getElementById("scNext");

const scProgressItems =
    document.querySelectorAll(".sc-progress-item");


/* ========================================
   SETTINGS
======================================== */

const scTotalSlides =
    scProgressItems.length;

let scCurrentSlide = 0;


/* ========================================
   UPDATE CAROUSEL
======================================== */

function scUpdateCarousel() {

    /* Move slide */

    scSliderTrack.style.transform =
        `translateX(-${scCurrentSlide * 100}%)`;


    /* Update counter */

    scCurrentNumber.textContent =
        String(scCurrentSlide + 1).padStart(2, "0");


    /* Update progress segments */
    scProgressItems.forEach(
    function(item, index) {

        item.classList.toggle(
            "sc-progress-active",
            index <= scCurrentSlide
        );

    }
);

    /* Disable arrows */

    scPrev.disabled =
        scCurrentSlide === 0;

    scNext.disabled =
        scCurrentSlide === scTotalSlides - 1;


    /* Last slide color */

    if (
        scCurrentSlide ===
        scTotalSlides - 1
    ) {

        scCarousel.classList.add(
            "sc-last-active"
        );

    } else {

        scCarousel.classList.remove(
            "sc-last-active"
        );

    }

}


/* ========================================
   NEXT
======================================== */

scNext.addEventListener(
    "click",
    function() {

        if (
            scCurrentSlide <
            scTotalSlides - 1
        ) {

            scCurrentSlide++;

            scUpdateCarousel();

        }

    }
);


/* ========================================
   PREVIOUS
======================================== */

scPrev.addEventListener(
    "click",
    function() {

        if (scCurrentSlide > 0) {

            scCurrentSlide--;

            scUpdateCarousel();

        }

    }
);


/* ========================================
   CLICK PROGRESS SEGMENT
======================================== */

scProgressItems.forEach(
    function(item) {

        item.addEventListener(
            "click",
            function() {

                scCurrentSlide =
                    Number(
                        this.dataset.scSlide
                    );

                scUpdateCarousel();

            }
        );

    }
);


/* ========================================
   INITIALIZE
======================================== */

scUpdateCarousel();

</script>


</body>
</html>
