

<?php include 'includes/header.php'; ?>

<section class="howitsound">

    <div class="container">

        <div class="how_it_sound_mainbox">

            <!-- STEPPER -->
             <div class="d-lg-block d-md-block d-none w-100">
     <div class="how_it_sound_steps">

                <div class="how_it_sound_step">
                    <span class="how_it_sound_circle circle_filled"></span>
                    <span>Who it is for</span>
                </div>

                <div class="how_it_sound_step">
                    <span class="how_it_sound_circle circle_filled"></span>
                    <span>The world</span>
                </div>

                <div class="how_it_sound_step">
                    <span class="how_it_sound_circle circle_filled"></span>
                    <span>How it looks</span>
                </div>

                <div class="how_it_sound_step active">
                    <span class="how_it_sound_circle"></span>
                    <span>How it sounds</span>
                </div>

            </div>
             </div>
       


            <!-- HEADER -->
            <div class="how_it_sound_header">

                <h1>HOW SHOULD IT SOUND?  </h1>

                <p>
                    Pick the voice that reads it aloud. You can change it later
                    without rewriting the book.
                </p>

            </div>

              <div class="d-lg-none d-md-none d-block">
     <div class="how_it_sound_steps">

                <div class="how_it_sound_step">
                    <span class="how_it_sound_circle circle_filled"></span>
                    <span>Who it is for</span>
                </div>

                <div class="how_it_sound_step">
                    <span class="how_it_sound_circle circle_filled"></span>
                    <span>The world</span>
                </div>

                <div class="how_it_sound_step">
                    <span class="how_it_sound_circle circle_filled"></span>
                    <span>How it looks</span>
                </div>

                <div class="how_it_sound_step active">
                    <span class="how_it_sound_circle"></span>
                    <span>How it sounds</span>
                </div>

            </div>
             </div>

            <!-- DESIGN -->
            <div class="how_it_sound_design">

                <!-- READING VOICE -->
                <div class="how_it_sound_section">

                    <h2>THE READING VOICE <img src="./img/question_mark.svg" alt="" class="question"></h2>

                    <div class="how_it_sound_options">

                        <label class="how_it_sound_option">
                            <input
                                type="radio"
                                name="reading_voice"
                                value="warm-slow"
                                checked
                            >
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M4 2.79999L11 6.99999L4 11.2V2.79999Z" fill="#16305B"/>
</svg>
                            <span>  Warm and slow</span>
                        </label>

                        <label class="how_it_sound_option">
                            <input
                                type="radio"
                                name="reading_voice"
                                value="bright-quick"
                            >
 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M4 2.79999L11 6.99999L4 11.2V2.79999Z" fill="#16305B"/>
</svg>
                            <span> Bright and quick</span>
                        </label>

                        <label class="how_it_sound_option">
                            <input
                                type="radio"
                                name="reading_voice"
                                value="soft-hushed"
                            >
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M4 2.79999L11 6.99999L4 11.2V2.79999Z" fill="#16305B"/>
</svg>
                            <span>Soft and hushed</span>
                        </label>

                        <label class="how_it_sound_option">
                            <input
                                type="radio"
                                name="reading_voice"
                                value="deep-steady"
                            >
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M4 2.79999L11 6.99999L4 11.2V2.79999Z" fill="#16305B"/>
</svg>
                            <span>Deep and steady</span>
                        </label>

                        <label class="how_it_sound_option">
                            <input
                                type="radio"
                                name="reading_voice"
                                value="playful"
                            >
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M4 2.79999L11 6.99999L4 11.2V2.79999Z" fill="#16305B"/>
</svg>
                            <span>Playful</span>
                        </label>

                        <label class="how_it_sound_option">
                            <input
                                type="radio"
                                name="reading_voice"
                                value="plain-clear"
                            >
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M4 2.79999L11 6.99999L4 11.2V2.79999Z" fill="#16305B"/>
</svg>
                            <span>Plain and clear</span>
                        </label>

                    </div>


                    <!-- TEXTAREA -->
                    <div class="how_it_sound_textarea">

                        <textarea
                            name="sound_description"
                            maxlength="400"
                            placeholder="Anything else about the voice. Fast or slow, playful or calm, and any words to avoid."
                        ></textarea>

                        <span class="how_it_sound_counter">
                            0 / 400 WORDS
                        </span>

                    </div>

                </div>

            </div>


            <!-- ACTIONS -->
            <div class="how_it_sound_actions">

                <button
                    type="button"
                    class="create-world__btn_back"
                >
                    <span>Back</span>
                </button>

                <button
                    type="button"
                    class="how_it_sound_btn"
                     data-bs-toggle="modal"
    data-bs-target="#tokenModal"
                >
                    <span>Continue</span>
                </button>

            </div>

        </div>

    </div>

</section>

<div
    class="modal fade token-modal"
    id="tokenModal"
    tabindex="-1"
    aria-labelledby="tokenModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog token-modal__dialog modal-dialog-centered">

        <div class="modal-content token-modal__content">

            <h2 id="tokenModalLabel">
                THIS ONE COSTS 400
                TOKENS.
            </h2>

            <p>
                Confirm and it is written. The tokens come off your balance.
            </p>

            <div class="token-modal__actions">

                <button
                    type="button"
                    class="create-world__btn_back"
                    data-bs-dismiss="modal"
                >
                                    <span> Not yet</span>

                   
                </button>

                <button
                    type="button"
                    class="how_it_sound_btn"
                >
                                                    <span>Confirm</span>

                    
                </button>

            </div>

        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
