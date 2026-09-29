

<?php include 'includes/header.php'; ?>

<section class="who-is-this-section">

<div class="container px-0">
  <div class="who-is-this-container">

        <!-- HEADER -->
        <div class="who-is-this-header">
            <h1>WHO IS THIS ONE FOR?</h1>

            <p>
                Their name, their age, and what makes them them.
            </p>
        </div>


        <!-- STEPS -->
      <div class="who-is-this-steps">

    <div class="who-step who-step--active">
        <span class="who-step__circle"></span>
        <span class="who-step__text">Who it is for</span>
    </div>

    <div class="who-step">
        <span class="who-step__circle"></span>
        <span class="who-step__text">The world</span>
    </div>

    <div class="who-step">
        <span class="who-step__circle"></span>
        <span class="who-step__text">How it looks</span>
    </div>

    <div class="who-step">
        <span class="who-step__circle"></span>
        <span class="who-step__text">How it sounds</span>
    </div>

</div>


        <!-- FORM -->
        <div class="who-is-this-form">

            <!-- NAME -->
            <div class="who-form-group">

                <label for="their-name">
                    Their name
                </label>

                <input
                    type="text"
                    id="their-name"
                    name="their-name"
                    value="Arlo"
                    placeholder="Enter their name"
                >

            </div>


            <!-- AGE -->
            <div class="who-form-group">

                <label for="their-age">
                    How old are they
                </label>

                <div class="who-select-wrapper">

                    <select
                        id="their-age"
                        name="their-age"
                    >
                        <option value="six" selected>Six</option>
                        <option value="seven">Seven</option>
                        <option value="eight">Eight</option>
                        <option value="nine">Nine</option>
                        <option value="ten">Ten</option>
                    </select>

                    <span class="who-select-arrow"></span>

                </div>

            </div>


            <!-- ABOUT -->
            <div class="who-form-group who-form-group--about">

                <textarea
                    id="about-them"
                    name="about-them"
                    maxlength="400"
                    placeholder="Anything else about them. Hair, skin, the gap in the front teeth, the toy that goes everywhere."
                ></textarea>

                <span class="who-character-count">
                    0 / 400 WORDS
                </span>

            </div>


          <button type="button" class="who-continue-btn">
    <span class="who-continue-btn__inner">Continue</span>
</button>

        </div>

    </div>
</div>
  

</section>

<?php include 'includes/footer.php'; ?>
