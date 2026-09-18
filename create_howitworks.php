<?php include 'includes/header.php'; ?>

<section class="create-look">
    <div class="container px-0">
        <div class="create-look__container">

            <!-- STEPPER -->
             <div class="
             d-lg-block d-md-block d-none">
              <div class="create-look__steps">

                <div class="create-look__step">
                    <span class="create-look__step-circle circle_filled"></span>
                    <span>Who it is for</span>
                </div>

                <div class="create-look__step">
                    <span class="create-look__step-circle circle_filled"></span>
                    <span>The world</span>
                </div>

                <div class="create-look__step create-look__step--active">
                    <span class="create-look__step-circle"></span>
                    <span>How it looks</span>
                </div>

                <div class="create-look__step">
                    <span class="create-look__step-circle"></span>
                    <span>How it sounds</span>
                </div>

            </div>
            </div>
           


            <!-- HEADER -->
            <div class="create-look__header">

                <h1>HOW SHOULD IT LOOK? </h1>

                <p>
                    Pick the art style the whole book is drawn in.
                    Every page follows it.
                </p>

            </div>

            <!-- MOBILE STEPPER -->
            <div class="d-lg-none d-md-none d-block w-100">
                <div class="create-look__steps">

                    <div class="create-look__step">
                        <span class="create-look__step-circle circle_filled"></span>
                        <span>Who it is for</span>
                    </div>

                    <div class="create-look__step">
                        <span class="create-look__step-circle circle_filled"></span>
                        <span>The world</span>
                    </div>

                    <div class="create-look__step create-look__step--active">
                        <span class="create-look__step-circle"></span>
                        <span>How it looks</span>
                    </div>

                    <div class="create-look__step">
                        <span class="create-look__step-circle"></span>
                        <span>How it sounds</span>
                    </div>

                </div>
            </div>



            <!-- DESIGN -->
            <div class="create-look__design">

                <!-- ART STYLE -->
                <div class="create-world__section" style="margin-top:0px;">

                    <h2>THE ART STYLE <img src="./img/question_mark.svg" alt="" class="question"></h2>

                    <div class="create-look__styles">

                        <label class="create-look__card">
                            <input type="radio" name="art_style" value="paper-cut" checked>

                            <span class="create-look__card-content">
                                <img src="../img/style_img.png" alt="Paper cut">

                                <span>Paper cut</span>
                            </span>
                        </label>


                        <label class="create-look__card">
                            <input type="radio" name="art_style" value="watercolour">

                            <span class="create-look__card-content">
                                <img src="../img/style_img.png" alt="Watercolour">

                                <span>Watercolour</span>
                            </span>
                        </label>


                        <label class="create-look__card">
                            <input type="radio" name="art_style" value="ink-and-wash">

                            <span class="create-look__card-content">
                                <img src="../img/style_img.png" alt="Ink and wash">

                                <span>Ink and wash</span>
                            </span>
                        </label>


                        <label class="create-look__card">
                            <input type="radio" name="art_style" value="soft-pastel">

                            <span class="create-look__card-content">
                                <img src="../img/style_img.png" alt="Soft pastel">

                                <span>Soft pastel</span>
                            </span>
                        </label>


                        <label class="create-look__card">
                            <input type="radio" name="art_style" value="bold-and-bright">

                            <span class="create-look__card-content">
                                <img src="../img/style_img.png" alt="Bold and bright">

                                <span>Bold and bright</span>
                            </span>
                        </label>


                        <label class="create-look__card">
                            <input type="radio" name="art_style" value="night-tones">

                            <span class="create-look__card-content">
                                <img src="../img/style_img.png" alt="Night tones">

                                <span>Night tones</span>
                            </span>
                        </label>

                    </div>

                </div>


                <!-- DESCRIPTION -->
                <div class="create-look__description">

                    <textarea name="art_description" maxlength="400"
                        placeholder="Anything else about the look. Colours to lean on, colours to keep out."></textarea>

                    <span class="create-look__counter">
                        0 / 400 WORDS
                    </span>

                </div>

            </div>


            <!-- BUTTONS -->
            <div class="create-look__actions">

                <button type="button" class="create-world__btn_back">
                    <span>Back</span>
                </button>

                <button type="button" class="create-look__btn">
                    <span>Continue</span>
                </button>

            </div>

        </div>
    </div>



</section>

<?php include 'includes/footer.php'; ?>