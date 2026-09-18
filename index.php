

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="animation/css/animation.css">
<section class="home-pc home-animation">
   <div class="home-main-animation">
        <canvas id="motes"></canvas>
        <div id="spot"></div>
        <div id="stage">
        <div id="world">
            <div class="bookshadow"></div>
            <div class="board"></div>
            <div id="track"></div>
            <div class="cover"><div class="coverface" id="coverface">
            <div class="cf-rule"></div>
            <div class="cf-mark">teenytailz</div>
            <div class="cf-title">The hero, fox<br>and the dragon</div>
            <div class="cf-sub">A story for</div>
            <div class="cf-name">Arlo</div>
            <div class="cf-seal">t</div>
            </div></div>
        </div>
        </div>
        <div id="ui">
        <header>
            <div class="tools">
            <button class="spk" id="spk" type="button" aria-pressed="false" aria-label="Sound off" title="Sound off">
                <svg viewBox="0 0 20 20" aria-hidden="true">
                <path class="spk-cone" d="M4 7.5h2.6L10 4.4v11.2L6.6 12.5H4z"/>
                <g class="spk-waves" fill="none" stroke-width="1.5" stroke-linecap="round">
                    <path d="M12.9 7.2a4.2 4.2 0 0 1 0 5.6"/>
                    <path d="M15.3 5.1a7.4 7.4 0 0 1 0 9.8"/>
                </g>
                <path class="spk-slash" d="M13 6.6l4.6 6.8" fill="none" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
            </button>
            </div>
        </header>

        <div class="bottomleft">
            <div class="count paper">
            <span><b id="idx">01</b> / <span id="tot">07</span></span>
            <span class="rail" id="rail"></span>
            <span class="divider"></span>
            <button class="chev back" id="prev" aria-label="Previous scene">
                <svg viewBox="0 0 64 127" fill="none" aria-hidden="true">
                <path d="M8 8 L56 63.5 L8 119" stroke="currentColor" stroke-width="19" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="chev fwd" id="next" aria-label="Next scene">
                <svg viewBox="0 0 64 127" fill="none" aria-hidden="true">
                <path d="M8 8 L56 63.5 L8 119" stroke="currentColor" stroke-width="19" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            </div>
        </div>

        <div class="cf-sound" id="coverSound">
            <button class="soundcta" id="soundCta" type="button">
            <svg viewBox="0 0 20 20" aria-hidden="true"><path d="M4 7.5h2.6L10 4.4v11.2L6.6 12.5H4z"/><path d="M13 7a4.2 4.2 0 0 1 0 6" fill="none" stroke-width="1.5"/><path d="M15.4 4.9a7.4 7.4 0 0 1 0 10.2" fill="none" stroke-width="1.5"/></svg>
            Enable sound
            </button>
            <p class="soundnote">It plays better with sound.</p>
        </div>
        <div class="hint" id="hint">Scroll to open</div>
        </div>
    </div>
</section>

<section class="home-mobile">
  <div class="home-s1">
    <img src="img/scene-1.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text">
        PERSONALISED STORYBOOKS
      </span>
      <h1 class="home-bld">
        Their name. Their adventure. Their favourite bedtime story.
      </h1>
      <p class="home-nrm">
        Create a one-of-a-kind tale where your child becomes the hero, written around them and made to be kept.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">Create their story</span>
      </a>
    </div>
  </div>
  <div class="home-s1">
    <img src="img/scene-2.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text">
        WRITTEN FOR ONE CHILD
      </span>
      <h1 class="home-bldd">
        A story lands differently when they’re in it.
      </h1>
      <p class="home-nrm">
        Their name on every page. Their cape, their fox, their castle. A book that could not belong to anyone else.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">Create their story</span>
      </a>
    </div>
  </div>
  <div class="home-s1">
    <img src="img/scene-3.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text">
        HOW A TALE IS MADE
      </span>
      <h1 class="home-bldd">
        Four decisions. The rest is ours.
      </h1>
      <p class="home-nrm">
        Who it is for, the world, how it looks and how it sounds. Answer those and the book is built around them.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">See how it works</span>
      </a>
    </div>
  </div>
  <div class="home-s1">
    <img src="img/scene-4.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text">
        START FROM A TALE
      </span>
      <h1 class="home-bldd">
        Pick a world. They arrive in it.
      </h1>
      <p class="home-nrm">
        A shelf of stories already written. Choose one, and your child walks into it as the hero.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">Browse the library</span>
      </a>
    </div>
  </div>
  <div class="home-s1">
    <img src="img/scene-5.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text">
        OR START FROM NOTHING
      </span>
      <h1 class="home-bldd">
        Or start from a blank page.
      </h1>
      <p class="home-nrm">
        No shelf, no template. Set the world, the companion and the ending yourself, and the story is written to it.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">Start from scratch</span>
      </a>
    </div>
  </div>
  <div class="home-s1">
    <img src="img/scene-6.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text">
        WHAT IT COSTS
      </span>
      <h1 class="home-bldd">
        Tokens in. Stories out.
      </h1>
      <p class="home-nrm">
        One token makes one book. Buy a single token, or buy a pack and make the next one whenever you like.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">See the packs</span>
      </a>
    </div>
  </div>
  <div class="home-s7">
    <img src="img/scene-7.png" alt="">
    <div class="home-text-card">
      <span class="home-red-text" style="color: var(--brand-gold, #E9B04A);">
       AFTER THE FIRST ONE
      </span>
      <h1 class="home-bldd" style="color: var(--brand-cream, #FBF3E0);">
        Every story stays in their library.
      </h1>
      <p class="home-nrm" style="color: var(--brand-cream-soft-55, rgba(251, 243, 224, 0.55));">
        Read it again tomorrow night, and the night after. Every book you make is kept, so the shelf grows with them.
      </p>
      <a class="btn btn-login w-100" href="">
         <span class="btn-border-dots">Create their story</span>
      </a>
    </div>
  </div>
</section>

  
<script src="animation/js/homeAnimation.js"></script>
<div class="home-f d-block d-md-none">
    <?php include 'includes/footer.php'; ?>
</div>

