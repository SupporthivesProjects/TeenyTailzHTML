<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teenytailz</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/tg-icon.svg">
    <link rel="stylesheet" href="css/mainBase.css">
    
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top fixed-top" id="header-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container p-mo p-0">
         <div class="logo-mo-div">
            <a class="navbar-brand" href="#">
              <img src="./img/m-logo.svg" alt="" class="img-fluid d-lg-none d-md-blocks d-block  brand-logo-mo" id="logo">
              <img src="./img/brand.svg" alt="" class="img-fluid d-lg-block d-md-none d-none  brand-logo">
            </a>
            <div class="cart-mo-top-btn">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <!-- <div class="hamburger hamburger--3dy">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                  </div> -->
                  <span class="navbar-toggler-icon" id="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav-one m-auto">
              <li class="nav-item d-lg-none d-md-none d-flex ifUserlogin">
                 <h6>Signed in as</h6>
                 <h4>Jane Smith</h4>
                 <h5>5,650 tokens</h5>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Stories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact</a>
              </li>
            </ul>
            <div class="d-flex d-right-mo" role="search">
              <div class="ifuserlloginDetails">
                <ul>
                   <li><a href="#">Overview</a></li>
                   <li><a href="#">Their library</a></li>
                   <li><a href="#">Purchases</a></li>
                   <li><a href="#">Settings</a></li>
                </ul>
              </div>
              <div class="nav-item dropdown d-currency-mo dropdown-toggle-cur">
                <h6 class="d-lg-none d-md-none d-block">SELECT CURRENCY</h6>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 USD
                </a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a class="dropdown-item active" href="#">
                        <span>USD</span>
                        <p>
                        US Doller
                      </p>
                    </a>
                    
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                        <span>EUR</span>
                      <p>
                        Euro
                      </p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#">
                      <span>GBP</span>
                     <p>
                      Pound
                    </p>
                    </a>
                  </li>
                </ul>
              </div>
              <a class="btn btn-tokens d-none" href="signup.php">5,650 tokens</a>
              <a class="btn btn-login" href="signup.php">
                <span class="btn-border-dots">Log in / Sign up</span>
              </a>
              <div class="ifuserlloginDetails nav-privecy-legal">
                <ul>
                   <li><a href="#">Terms</a></li>
                   <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
   </header>


   <section class="terms-section">
      <div class="legal-container">
        <div class="terms-box">
          <p class="last-updated">Last updated 14 August 2026</p>
          <h1>Terms &amp; Conditions</h1>
        </div>

          <div class="terms-content">
            <div class="term-item">
              <h2>1. Who we are</h2>
              <p>Teenytailz is operated by Dunewell Services Ltd, a company registered in England and Wales. Our registered address and company number are set out in the footer of every page. In these terms, "we" and "us" mean that company, and "you" means the person holding the account.</p>
            </div>

            <div class="term-item">
              <h2>2. Your account</h2>
              <p>You need an account to make a book. You are responsible for keeping your password to yourself and for anything done under your account. Tell us straight away if you think somebody else has access to it.</p>
            </div>

            <div class="term-item">
              <h2>3. Tokens and packs</h2>
              <p>Books are made using tokens, which are bought in packs. Tokens are not money, cannot be exchanged for money, and can only be spent on our own products. A pack is bought once. Nothing renews automatically and there is no subscription.</p>
            </div>

            <div class="term-item">
              <h2>4. The books you make</h2>
              <p>You keep the right to use the book you make for your own family: reading it, printing it, and sharing it with people you choose. The underlying illustrations, characters and templates remain ours. You may not resell a book or use it commercially.</p>
            </div>

            <div class="term-item">
              <h2>5. What you tell us about a child</h2>
              <p>Only supply details about a child if you are their parent or guardian, or you have that person’s permission.</p>
            </div>

            <div class="term-item">
              <h2>6. Refunds</h2>
              <p>If a pack is faulty or was bought in error, contact us and we will put it right. A pack that has been spent cannot be refunded, because the books it made are yours to keep. Nothing here affects your statutory rights.</p>
            </div>

            <div class="term-item">
              <h2>7. Availability</h2>
              <p>We do our best to keep the site working, but we do not promise it will always be available or free of faults. We may change or withdraw parts of it, and we will not be liable for losses that were not reasonably foreseeable.</p>
            </div>

            <div class="term-item">
              <h2>8. Changes to these terms</h2>
              <p>We may update these terms. If we do, the date at the top of this page changes, and continuing to use the site means you accept the version published here.</p>
            </div>

            <div class="term-item">
              <h2>9. Getting in touch</h2>
              <p class="last-legal">Write to us through the contact page. We read every message and reply to it.</p>
            </div>
          </div>
      </div>
   </section>


  
  
<footer class="footer">
    <div class="container p-0">
        <div class="col-footer col-footer-one">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="footer-logo">
                        <img src="./img/logo.svg" class="img-fluid footer-logo-img">
                        <div>
                            <p>
                                123 somewhere street, City, ABC 123
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="footer-link">
                        <div class="footer-menu-list footer-menu-list-one">
                            <h6>Explore</h6>
                            <ul>
                                <li>
                                    <a href="#">Create</a>
                                </li>
                                <li>
                                    <a href="#">Stories</a>
                                </li>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-menu-list footer-menu-list-two">
                            <h6>Company</h6>
                            <ul>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Login / Sign up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-menu-list">
                            <h6>Legals</h6>
                            <ul>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-footer col-footer-two">
        <div class="container p-0">
            <div class="row footer-bottom m-0">
                <div class="col-lg-6 col-sm-12 col-6 col-md-6 p-0">
                    <p>© 2026 Teenytailz. All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-sm-12 col-6 col-md-6 p-0">
                    <div class="masterimg">
                        <img src="./img/visa.svg" class="img-fluid">
                        <img src="./img/mastercard.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <!-- Motion -->
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/m-logo.svg") {
                  logo.attr("src", "./img/c-logo.svg");
              } else {
                  logo.attr("src", "./img/m-logo.svg");
              }
          });
      });
    </script>
    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
     <script>
        const dropdownBtns = document.querySelectorAll(
            '.dropdown-toggle-cur, .dropdown-toggle-cart'
        );

        function updateOverlay() {
            const anyOpen =
                document.querySelector('.dropdown-menu.show') !== null;

            document.body.classList.toggle('dropdown-open', anyOpen);
        }

        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setTimeout(updateOverlay, 50);
            });
        });

        document.addEventListener('click', () => {
            setTimeout(updateOverlay, 50);
        });
    </script>

    <script>
      AOS.init();
    </script>
</body>
</html>
  