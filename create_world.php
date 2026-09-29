<?php include 'includes/header.php'; ?>
<section class="create-world">

<div class="container px-0">
 <div class="create-world__container">

        <!-- HEADER -->
        <div class="create-world__header">
            <h1>BUILD THE WORLD.</h1>

            <p>
                Where it happens, who walks beside them, and the note
                the last page lands on.
            </p>
        </div>


        <!-- STEPPER -->
        <div class="create-world__steps">

            <div class="create-world__step ">
                <span class="create-world__step-circle circle_filled"></span>
                <span>Who it is for</span>
            </div>

            <div class="create-world__step create-world__step--active">
                <span class="create-world__step-circle"></span>
                <span>The world</span>
            </div>

            <div class="create-world__step">
                <span class="create-world__step-circle"></span>
                <span>How it looks</span>
            </div>

            <div class="create-world__step">
                <span class="create-world__step-circle"></span>
                <span>How it sounds</span>
            </div>

        </div>


        <!-- WHERE IT HAPPENS -->
        <div class="create-world__section" style="margin-top:0px;">

            <h2>WHERE IT HAPPENS  <img src="./img/question_mark.svg" alt="" class="question"> </h2>

            <div class="create-world__options">

                <button type="button"
                    class="create-world__option create-world__option--active">
                    The castle
                </button>

                <button type="button" class="create-world__option">
                    The tower
                </button>

                <button type="button" class="create-world__option">
                    The map room
                </button>

                <button type="button" class="create-world__option">
                    The crossroads
                </button>

                <button type="button" class="create-world__option">
                    The cave
                </button>

                <button type="button" class="create-world__option">
                    The open sea
                </button>

            </div>

            <textarea
                class="create-world__textarea"
                placeholder="Anything else about the place. What it smells like, who else is there, what time of day it is."
            ></textarea>

            <span class="create-world__counter">
                0 / 400 WORDS
            </span>

        </div>


        <!-- WHO IS BESIDE THEM -->
        <div class="create-world__section">

            <h2>WHO IS BESIDE THEM <img src="./img/question_mark.svg" alt="" class="question"> </h2>

            <div class="create-world__options">

                <button type="button"
                    class="create-world__option create-world__option--active">
                    The fox
                </button>

                <button type="button" class="create-world__option">
                    The dragon
                </button>

                <button type="button" class="create-world__option">
                    A brother or sister
                </button>

                <button type="button" class="create-world__option">
                    Nobody at all
                </button>

            </div>

            <textarea
                class="create-world__textarea"
                placeholder="Anything else about who is beside them. What they are called, and what they are like."
            ></textarea>

            <span class="create-world__counter">
                0 / 400 WORDS
            </span>

        </div>


        <!-- HOW IT ENDS -->
        <div class="create-world__section">

            <h2>HOW IT ENDS <img src="./img/question_mark.svg" alt="" class="question"> </h2>

            <div class="create-world__options">

                <button type="button"
                    class="create-world__option create-world__option--active">
                    Brave
                </button>

                <button type="button" class="create-world__option">
                    Funny
                </button>

                <button type="button" class="create-world__option">
                    Quiet
                </button>

                <button type="button" class="create-world__option">
                    A little strange
                </button>

            </div>

            <textarea
                class="create-world__textarea"
                placeholder="Anything else about the ending. What you want them to feel on the last page."
            ></textarea>

            <span class="create-world__counter">
                0 / 400 WORDS
            </span>

        </div>


        <!-- ACTIONS -->
        <div class="create-world__actions">

            <button type="button" class="create-world__btn_back">
                <span>Back</span>
            </button>

            <button type="button" class="create-world__btn">
                <span>Continue</span>
            </button>

        </div>

    </div>
</div>
   

</section>
<?php include 'includes/footer.php'; ?>
