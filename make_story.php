

<?php include 'includes/header.php'; ?>
<section class="hero-dragon">

    <div class="hero-dragon__content">
        <h1>THE HERO, FOX AND THE DRAGON</h1>
    </div>

    <img
        class="hero-dragon__grass"
        src="../img/grass_desktop.png"
        alt=""
    >

</section>

<!-- =========================================================
     CREATE STORY BOOK
========================================================= -->

<section class="create-story-book">

    <div class="container">

        <div class="create-story-book__mainbox">


            <!-- =================================================
                 DESKTOP BOOK
            ================================================= -->

            <div class="create-story-book__desktop">

                <div class="book-section">

                    <div class="book-spread">


                        <!-- =====================================
                             LEFT STATIC PAGE
                        ====================================== -->

                        <div class="book-left-page">

                            <img
                                src="../img/generated-story-image.png"
                                alt="Story illustration"
                            >

                        </div>


                        <!-- =====================================
                             RIGHT PAGE 1
                        ====================================== -->

                        <div class="right">

                            <!-- BACK -->

                            <figure class="back">

                                <img
                                    src="../img/generated-story-image.png"
                                    alt=""
                                >

                            </figure>


                            <!-- FRONT -->

                            <figure class="front">

                                <div class="fron-content">

                                    <div class="story-text">

                                        <p>
                                            The fox raised the little wooden sword
                                            high, and Arlo held the lantern steady
                                            beside them.
                                        </p>

                                        <p>
                                            "Today," said the fox, "we find out
                                            what the castle is keeping."
                                        </p>

                                        <p>
                                            They went in through the open door,
                                            along a hall of tall windows, and
                                            up a stair that turned and turned.
                                        </p>

                                        <p>
                                            Arlo counted the steps out loud.
                                            The fox counted them wrong on purpose.
                                        </p>

                                    </div>

                                </div>

                            </figure>

                        </div>


                        <!-- =====================================
                             RIGHT PAGE 2
                        ====================================== -->

                        <div class="right">

                            <figure class="back">

                                <img
                                    src="../img/generated-story-image.png"
                                    alt=""
                                >

                            </figure>


                            <figure class="front">

                                <div class="fron-content">

                                    <div class="story-text">

                                        <p>
                                            They followed the winding path through
                                            the forest until they reached a quiet
                                            clearing.
                                        </p>

                                        <p>
                                            The fox stopped and looked towards
                                            the mountain.
                                        </p>

                                    </div>

                                </div>

                            </figure>

                        </div>


                        <!-- =====================================
                             RIGHT PAGE 3
                        ====================================== -->

                        <div class="right">

                            <figure class="back">

                                <img
                                    src="../img/generated-story-image.png"
                                    alt=""
                                >

                            </figure>


                            <figure class="front">

                                <div class="fron-content">

                                    <div class="story-text">

                                        <p>
                                            Arlo took another step forward.
                                            Something moved behind the trees.
                                        </p>

                                        <p>
                                            The fox smiled.
                                        </p>

                                    </div>

                                </div>

                            </figure>

                        </div>


                        <!-- =====================================
                             RIGHT PAGE 4
                        ====================================== -->

                        <div class="right">

                            <figure class="back">

                                <img
                                    src="../img/generated-story-image.png"
                                    alt=""
                                >

                            </figure>


                            <figure class="front">

                                <div class="fron-content">

                                    <div class="story-text">

                                        <p>
                                            Together they crossed the forest
                                            and discovered a hidden path.
                                        </p>

                                    </div>

                                </div>

                            </figure>

                        </div>


                        <!-- =====================================
                             RIGHT PAGE 5
                        ====================================== -->

                        <div class="right">

                            <figure class="back">

                                <img
                                    src="../img/generated-story-image.png"
                                    alt=""
                                >

                            </figure>


                            <figure class="front">

                                <div class="fron-content">

                                    <div class="story-text">

                                        <p>
                                            The path led them towards the castle
                                            where their adventure had begun.
                                        </p>

                                    </div>

                                </div>

                            </figure>

                        </div>


                    </div>


                    <!-- =========================================
                         DESKTOP CONTROLS
                    ========================================== -->

                    <div class="book-controls">

                        <div class="book-pagination">

                            <button
                                type="button"
                                class="book-arrow"
                                onclick="turnLeft()"
                                aria-label="Previous page"
                            >

                               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M8 9.5399e-08C3.58172 4.27116e-08 3.38883e-07 3.58172 2.86196e-07 8L9.53977e-08 24C4.27103e-08 28.4183 3.58172 32 8 32L24 32C28.4183 32 32 28.4183 32 24L32 8C32 3.58172 28.4183 3.38885e-07 24 2.86197e-07L8 9.5399e-08Z" fill="#16305B"/>
  <path d="M19 10L13 16L19 22" stroke="#E9B04A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            </button>


                            <p id="pageCount">
                                Page 1 of 5
                            </p>


                            <button
                                type="button"
                                class="book-arrow"
                                onclick="turnRight()"
                                aria-label="Next page"
                            >

                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M24 9.5399e-08C28.4183 4.27116e-08 32 3.58172 32 8L32 24C32 28.4183 28.4183 32 24 32L8 32C3.58172 32 3.38885e-07 28.4183 2.86197e-07 24L9.5399e-08 8C4.27116e-08 3.58172 3.58172 3.38885e-07 8 2.86197e-07L24 9.5399e-08Z" fill="#16305B"/>
  <path d="M13 10L19 16L13 22" stroke="#E9B04A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            </button>

                        </div>


                        <button
                            type="button"
                            class="book-read-btn create-world__btn_back"
                            id="playDesktop"
                        >
                        <span>
                            Read it aloud

                        </span>
                        </button>

                    </div>


                </div>

            <div class="book-download-wrap">

                <button type="button"
                    href="#"
                    class="book-download-btn how_it_sound_btn"
                >
                 <span>  Download PDF</span>   
</button>

            </div>
            </div>



            <!-- =================================================
                 MOBILE BOOK
            ================================================= -->

            <div class="create-story-book__mobile">

                <div class="owl-carousel owl-theme owl-carousel-genarate">


                    <!-- =====================================
                         MOBILE PAGE 1
                    ====================================== -->

                    <div class="item">

                        <div class="story-mobile-page">

                            <img
                                src="../img/illustration.png"
                                alt="Story illustration"
                                class="story-mobile-page__image"
                            >


                            <div class="genrate-card">

                                <p>
                                    The fox raised the little wooden sword
                                    high, and Arlo held the lantern steady
                                    beside them.
                                </p>

                                <p>
                                    "Today," said the fox, "we find out what
                                    the castle is keeping."
                                </p>

                                <p>
                                    They went in through the open door, along
                                    a hall of tall windows, and up a stair
                                    that turned and turned.
                                </p>

                                <p>
                                    Arlo counted the steps out loud. The fox
                                    counted them wrong on purpose.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- =====================================
                         MOBILE PAGE 2
                    ====================================== -->

                    <div class="item">

                        <div class="story-mobile-page">

                            <img
                                src="../img/generated-story-image.png"
                                alt="Story illustration"
                                class="story-mobile-page__image"
                            >


                            <div class="genrate-card">

                                <p>
                                    They followed the winding path through
                                    the forest until they reached a quiet
                                    clearing.
                                </p>

                                <p>
                                    The fox stopped and looked towards
                                    the mountain.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- =====================================
                         MOBILE PAGE 3
                    ====================================== -->

                    <div class="item">

                        <div class="story-mobile-page">

                            <img
                                src="../img/generated-story-image.png"
                                alt="Story illustration"
                                class="story-mobile-page__image"
                            >


                            <div class="genrate-card">

                                <p>
                                    Arlo took another step forward.
                                    Something moved behind the trees.
                                </p>

                                <p>
                                    The fox smiled.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- =====================================
                         MOBILE PAGE 4
                    ====================================== -->

                    <div class="item">

                        <div class="story-mobile-page">

                            <img
                                src="../img/generated-story-image.png"
                                alt="Story illustration"
                                class="story-mobile-page__image"
                            >


                            <div class="genrate-card">

                                <p>
                                    Together they crossed the forest
                                    and discovered a hidden path.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- =====================================
                         MOBILE PAGE 5
                    ====================================== -->

                    <div class="item">

                        <div class="story-mobile-page">

                            <img
                                src="../img/generated-story-image.png"
                                alt="Story illustration"
                                class="story-mobile-page__image"
                            >


                            <div class="genrate-card">

                                <p>
                                    The path led them towards the castle
                                    where their adventure had begun.
                                </p>

                            </div>

                        </div>

                    </div>


                </div>


                <!-- =========================================
                     MOBILE CONTROLS
                ========================================== -->

                <div class="mobile-book-controls">

                    <div class="mobile-book-pagination">

                    
                            <button
                                type="button"
                                class="book-arrow"
                                onclick="turnLeft()"
                                aria-label="Previous page"
                            >

                               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M8 9.5399e-08C3.58172 4.27116e-08 3.38883e-07 3.58172 2.86196e-07 8L9.53977e-08 24C4.27103e-08 28.4183 3.58172 32 8 32L24 32C28.4183 32 32 28.4183 32 24L32 8C32 3.58172 28.4183 3.38885e-07 24 2.86197e-07L8 9.5399e-08Z" fill="#16305B"/>
  <path d="M19 10L13 16L19 22" stroke="#E9B04A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            </button>


                        <p id="owlpageCount">
                            Page 1 of 5
                        </p>


                   
                            <button
                                type="button"
                                class="book-arrow"
                                onclick="turnRight()"
                                aria-label="Next page"
                            >

                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M24 9.5399e-08C28.4183 4.27116e-08 32 3.58172 32 8L32 24C32 28.4183 28.4183 32 24 32L8 32C3.58172 32 3.38885e-07 28.4183 2.86197e-07 24L9.5399e-08 8C4.27116e-08 3.58172 3.58172 3.38885e-07 8 2.86197e-07L24 9.5399e-08Z" fill="#16305B"/>
  <path d="M13 10L19 16L13 22" stroke="#E9B04A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            </button>

                    </div>


                    <button
                        type="button"
                        class="book-read-btn create-world__btn_back "
                        id="playmo"
                    >
                       <span>Read it aloud</span> 
                    </button>

                </div>


                  <div class="book-download-wrap">

                <button
                    href="#" type="button"
                    class="book-download-btn how_it_sound_btn"
                >
                 <span>  Download PDF</span>   
                </button>

            </div>
            </div>



            <!-- =================================================
                 DOWNLOAD PDF
            ================================================= -->

          


        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

    var owl = $(".owl-carousel-genarate");

    if (!owl.length) {
        return;
    }

    owl.owlCarousel({
        items: 1,
        loop: false,
        nav: false,
        dots: false,
        margin: 0,
        autoHeight: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });


    var totalSlides =
        owl.find(".item").length;

    var pageCount =
        $("#owlpageCount");


    pageCount.text(
        "Page 1 of " + totalSlides
    );


    owl.on(
        "changed.owl.carousel",
        function (event) {

            var index =
                event.item.index + 1;

            pageCount.text(
                "Page " +
                index +
                " of " +
                totalSlides
            );

        }
    );


    $(".mobile-prev").on(
        "click",
        function () {

            owl.trigger(
                "prev.owl.carousel"
            );

        }
    );


    $(".mobile-next").on(
        "click",
        function () {

            owl.trigger(
                "next.owl.carousel"
            );

        }
    );

});
</script>
