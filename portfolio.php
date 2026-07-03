<?php include 'includes/header.php'; ?>


  <!-- PAGE HEADER -->
  <header class="ss-page-header">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Portfolio</li>
        </ol>
      </nav>
      <h1 class="mt-2">Our <span class="text-gold">Portfolio</span></h1>
      <p style="color:var(--ss-muted);margin-top:0.5rem;">Creative · Passionate · Professional</p>
    </div>
  </header>

  <!-- INTRO + QUICK QUOTE BANNER -->
  <div style="background:var(--ss-gold);padding:14px 0;">
    <div class="container d-flex flex-wrap align-items-center justify-content-between gap-2">
      <span style="font-family:'Bebas Neue',sans-serif;font-size:1.2rem;color:var(--ss-black);letter-spacing:0.05em;">
        <i class="bi bi-lightning-fill me-2"></i>Creative, Passionate, and Professional
      </span>
      <a href="contact.php" style="font-family:'Bebas Neue',sans-serif;font-size:0.95rem;color:var(--ss-black);letter-spacing:0.08em;text-decoration:underline;">
        Click Here for a Quick Quote on Your Next Video Project →
      </a>
    </div>
  </div>

  <!-- PORTFOLIO INTRO -->
  <section class="ss-section">
    <div class="container">
      <div class="row justify-content-center mb-5" data-ss-reveal>
        <div class="col-lg-9 text-center">
          <div class="ss-divider mx-auto"></div>
          <h2 class="ss-section-title mt-3">
            Award Winning Video Production <span class="accent">Company</span><br>in DC and Northern Virginia
          </h2>
          <p class="mt-4" style="color:var(--ss-muted);font-size:1.05rem;line-height:1.9;">
            Sure Shot Productions is a longstanding, top rated video production company. Located in the
            DC and Northern Virginia area, Sure Shot has been producing award-winning videos for almost
            30 years for clients locally and across the country. We are well versed in how to create
            commercials, podcasts, training/educational videos, marketing videos and issue videos that
            deliver a compelling message targeted to get you results.
          </p>
          <p class="mt-3" style="color:var(--ss-muted);line-height:1.9;">
            Our services include scripting/concept development, field production, audio production,
            post production, motion graphics and special effects.
          </p>
        </div>
      </div>

      <!-- Filter Pills -->
      <div class="ss-filter-pills" id="portfolioFilters">
        <button class="ss-filter-pill active" data-filter="all">All Work</button>
        <button class="ss-filter-pill" data-filter="commercial">TV Commercials</button>
        <button class="ss-filter-pill" data-filter="corporate">Corporate</button>
        <button class="ss-filter-pill" data-filter="web">Web &amp; Other</button>
      </div>

      <!-- Portfolio Grid -->
      <div class="row g-3" id="portfolioGrid">

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="commercial">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="Cropp Metcalfe Heating &amp; Cooling" data-yt="HJcv231hQ4Y">
            <img src="https://img.youtube.com/vi/HJcv231hQ4Y/hqdefault.jpg"
                 alt="Cropp Metcalfe TV Commercial"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Cropp Metcalfe</h4>
              <p>TV Commercial</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="commercial">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="Ourisman Chantilly Kia TV Commercial" data-yt="8R7D6HosN3Y">
            <img src="https://img.youtube.com/vi/8R7D6HosN3Y/hqdefault.jpg"
                 alt="Ourisman Kia TV Commercial"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Ourisman Chantilly Kia</h4>
              <p>TV Commercial</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="commercial">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="Hadeed Carpet Cleaning — It&#39;s a Dirty World" data-yt="xLeyPDexcpk">
            <img src="https://img.youtube.com/vi/xLeyPDexcpk/hqdefault.jpg"
                 alt="Hadeed Carpet Cleaning Commercial"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Hadeed Carpet Cleaning</h4>
              <p>TV Commercial</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="corporate">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="CEB Corporate Video" data-yt="CJvNXcYgXMg">
            <img src="https://img.youtube.com/vi/CJvNXcYgXMg/hqdefault.jpg"
                 alt="CEB Corporate Video"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>CEB</h4>
              <p>Corporate Video</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="web">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="Bubbles Hair Wars 2014" data-yt="2pRB_VXA4gQ">
            <img src="https://img.youtube.com/vi/2pRB_VXA4gQ/hqdefault.jpg"
                 alt="Bubbles Hair Wars 2014"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Bubbles Hair Wars</h4>
              <p>Event Video</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="web">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="Getting the Look" data-yt="sHODDdqLJ_M">
            <img src="https://img.youtube.com/vi/sHODDdqLJ_M/hqdefault.jpg"
                 alt="Getting the Look"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Getting the Look</h4>
              <p>Web Video</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="web">
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal"
               data-title="3D Motion Graphics Demo" data-yt="9G5j_Vp8DGw">
            <img src="https://img.youtube.com/vi/9G5j_Vp8DGw/hqdefault.jpg"
                 alt="3D Motion Graphics"
                 style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>3D Motion Graphics</h4>
              <p>Post Production</p>
            </div>
          </div>
        </div>

      </div>

      <!-- YouTube Channel CTA -->
      <div class="text-center mt-5" data-ss-reveal>
        <p style="color:var(--ss-muted);margin-bottom:1rem;">See more of our work on YouTube</p>
        <a href="https://www.youtube.com/user/SureShot3122" target="_blank" rel="noopener" class="btn-ss-outline">
          <i class="bi bi-youtube me-2 text-danger"></i>View YouTube Channel
        </a>
      </div>
    </div>
  </section>

  <!-- VIDEO MODAL -->
  <div class="modal fade ss-modal-video" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="videoModalTitle">Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="ratio ratio-16x9">
            <iframe id="videoModalFrame"
              src=""
              title="Sure Shot Productions Video"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <section style="background:linear-gradient(90deg,var(--ss-dark),rgba(200,168,75,0.08),var(--ss-dark));border-top:1px solid var(--ss-border);border-bottom:1px solid var(--ss-border);padding:60px 0;">
    <div class="container text-center" data-ss-reveal>
      <h2 style="font-size:clamp(1.8rem,4vw,3rem);color:var(--ss-white);">
        Ready for Your Next <span class="text-gold">Production?</span>
      </h2>
      <p style="color:var(--ss-muted);max-width:480px;margin:1rem auto 2rem;">
        Contact us today to discuss your next video production.
        Serving customers in DC, Virginia, Maryland and across the country since 1998.
      </p>
      <a href="contact.php" class="btn-ss-primary" style="font-size:1.1rem;padding:1rem 2.5rem;">Get a Free Quote</a>
    </div>
  </section>

  <!-- FOOTER -->

<script>
(function () {
  'use strict';

  /* ── Video modal ───────────────────────────────────────────────── */
  var modal = document.getElementById('videoModal');
  var frame = document.getElementById('videoModalFrame');
  var modalTitle = document.getElementById('videoModalTitle');

  modal.addEventListener('show.bs.modal', function (e) {
    var trigger = e.relatedTarget;
    var yt    = trigger.getAttribute('data-yt') || 'SureShot3122';
    var label = trigger.getAttribute('data-title') || 'Sure Shot Productions';

    modalTitle.textContent = label;

    // If data-yt looks like a video ID (11 chars), embed that video directly.
    // Otherwise treat it as a channel/user name and show their uploads playlist.
    var src = (yt.length === 11)
      ? 'https://www.youtube.com/embed/' + yt + '?autoplay=1&rel=0'
      : 'https://www.youtube.com/embed?listType=user_uploads&list=' + yt + '&autoplay=1&rel=0';

    frame.src = src;
  });

  // Stop playback when modal closes — clearing src kills the iframe request.
  modal.addEventListener('hide.bs.modal', function () {
    frame.src = '';
  });

  /* ── Filter pills ──────────────────────────────────────────────── */
  var pills = document.querySelectorAll('.ss-filter-pill');
  var items = document.querySelectorAll('.ss-portfolio-grid-item');

  pills.forEach(function (pill) {
    pill.addEventListener('click', function () {
      pills.forEach(function (p) { p.classList.remove('active'); });
      pill.classList.add('active');

      var filter = pill.getAttribute('data-filter');
      items.forEach(function (item) {
        item.style.display =
          (filter === 'all' || item.getAttribute('data-category') === filter)
            ? '' : 'none';
      });
    });
  });
})();
</script>

<?php include 'includes/footer.php'; ?>
