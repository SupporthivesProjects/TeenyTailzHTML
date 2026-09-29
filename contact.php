

<?php include 'includes/header.php'; ?>

<section class="contact-page">
    <form action="" class="contact-form">
        <div class="cont-text">
            <h1>
                Contact us
            </h1>
            <p>
                For any queries, ask us using the form below.
            </p>
        </div>
        <div class="cont-inp-fields">
            <div class="cont-inp-box">
                <label for="" class="cf-lab">Your name</label>
                <input type="text" placeholder="Jane Smith" class="cftf">
            </div>
            <div class="cont-inp-box">
                <label for="" class="cf-lab">Email</label>
                <input type="text" placeholder="jane.smith@example.com" class="cftf">
            </div>
            <div class="cont-inp-box">
                <label for="" class="cf-lab">Your name</label>
                <textarea name="" id="" class="cftf" placeholder="Additional notes" style="resize:none" rows="5"></textarea>
            </div>
        </div>
        <div class="recap-tb-box">
            <div class="terms-box">
                <input type="checkbox" name="" id="">
                <label for="">
                    I agree to the <a href="">Terms & Conditions</a> and the <a href="">Privacy Policy</a>.
                </label>
            </div>
            <div class="recap-box">
                <img src="img/recaptcha.png" alt="">
                <a class="btn btn-login" href="">
                  <span class="btn-border-dots">Submit</span>
                </a>
            </div>
        </div>
    </form>
    <video class="cont-video" autoplay muted playsinline loop>
        <source src="img/contact-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>

<?php include 'includes/footer.php'; ?>
