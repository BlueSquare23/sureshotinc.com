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
            Top Video Production <span class="accent">Companies</span><br>in DC and Northern Virginia
          </h2>
          <p class="mt-4" style="color:var(--ss-muted);font-size:1.05rem;line-height:1.9;">
            Sure Shot Productions is one of the top video production companies in DC and Northern Virginia, 
            producing award-winning videos for 22 years. When it comes to production companies, we create 
            commercials and videos that deliver a compelling message to get you results. Our company offers 
            professional video services with state-of-the-art equipment, studios, and editing.
          </p>
          <p class="mt-3" style="color:var(--ss-muted);line-height:1.9;">
            Some of our video production services include scripting/concept development, field production, 
            studio production, audio production, post production, motion graphics and special effects.
          </p>
        </div>
      </div>

      <!-- Filter Pills -->
      <div class="ss-filter-pills" id="portfolioFilters">
        <button class="ss-filter-pill active" data-filter="all">All Work</button>
        <button class="ss-filter-pill" data-filter="commercial">TV Commercials</button>
        <button class="ss-filter-pill" data-filter="corporate">Corporate</button>
        <button class="ss-filter-pill" data-filter="government">Government &amp; PSA</button>
        <button class="ss-filter-pill" data-filter="training">Training &amp; Education</button>
        <button class="ss-filter-pill" data-filter="web">Web Video</button>
      </div>

      <!-- Portfolio Grid -->
      <div class="row g-3" id="portfolioGrid">
        <!-- Items: placeholder cards representing their YouTube-based portfolio -->
        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="commercial" data-ss-reveal>
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal" data-title="Television Commercial Reel" data-yt="sureshot3122">
            <div class="ss-portfolio-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
              <div style="text-align:center;">
                <i class="bi bi-tv" style="font-size:2.5rem;color:var(--ss-border);display:block;margin-bottom:0.5rem;"></i>
                <span style="font-family:'Bebas Neue',sans-serif;font-size:1rem;color:var(--ss-muted);letter-spacing:0.08em;">TV COMMERCIAL</span>
              </div>
            </div>
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Television Commercial Reel</h4>
              <p>Broadcast Production</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="corporate" data-ss-reveal>
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal" data-title="Corporate Communications" data-yt="sureshot3122">
            <div class="ss-portfolio-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
              <div style="text-align:center;">
                <i class="bi bi-building" style="font-size:2.5rem;color:var(--ss-border);display:block;margin-bottom:0.5rem;"></i>
                <span style="font-family:'Bebas Neue',sans-serif;font-size:1rem;color:var(--ss-muted);letter-spacing:0.08em;">CORPORATE</span>
              </div>
            </div>
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Corporate Communications</h4>
              <p>Fortune 500 Client</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="government" data-ss-reveal>
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal" data-title="Government PSA" data-yt="sureshot3122">
            <div class="ss-portfolio-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
              <div style="text-align:center;">
                <i class="bi bi-shield-check" style="font-size:2.5rem;color:var(--ss-border);display:block;margin-bottom:0.5rem;"></i>
                <span style="font-family:'Bebas Neue',sans-serif;font-size:1rem;color:var(--ss-muted);letter-spacing:0.08em;">GOVERNMENT / PSA</span>
              </div>
            </div>
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Government PSA</h4>
              <p>Public Service</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="training" data-ss-reveal>
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal" data-title="Employee Training Video" data-yt="sureshot3122">
            <div class="ss-portfolio-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
              <div style="text-align:center;">
                <i class="bi bi-mortarboard" style="font-size:2.5rem;color:var(--ss-border);display:block;margin-bottom:0.5rem;"></i>
                <span style="font-family:'Bebas Neue',sans-serif;font-size:1rem;color:var(--ss-muted);letter-spacing:0.08em;">TRAINING</span>
              </div>
            </div>
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Employee Training Video</h4>
              <p>Training &amp; Orientation</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="web" data-ss-reveal>
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal" data-title="Web Marketing Video" data-yt="sureshot3122">
            <div class="ss-portfolio-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
              <div style="text-align:center;">
                <i class="bi bi-globe" style="font-size:2.5rem;color:var(--ss-border);display:block;margin-bottom:0.5rem;"></i>
                <span style="font-family:'Bebas Neue',sans-serif;font-size:1rem;color:var(--ss-muted);letter-spacing:0.08em;">WEB VIDEO</span>
              </div>
            </div>
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Web Marketing Video</h4>
              <p>Digital Marketing</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ss-portfolio-grid-item" data-category="training" data-ss-reveal>
          <div class="ss-portfolio-item" data-bs-toggle="modal" data-bs-target="#videoModal" data-title="Educational Video Series" data-yt="sureshot3122">
            <div class="ss-portfolio-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
              <div style="text-align:center;">
                <i class="bi bi-book" style="font-size:2.5rem;color:var(--ss-border);display:block;margin-bottom:0.5rem;"></i>
                <span style="font-family:'Bebas Neue',sans-serif;font-size:1rem;color:var(--ss-muted);letter-spacing:0.08em;">EDUCATIONAL</span>
              </div>
            </div>
            <div class="ss-play-btn"><i class="bi bi-play-fill"></i></div>
            <div class="ss-portfolio-overlay">
              <h4>Educational Video Series</h4>
              <p>Educational Production</p>
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
          <div class="ss-video-wrapper">
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
        Contact Sure Shot Productions for your next professional video production in DC and Northern Virginia.
      </p>
      <a href="contact.php" class="btn-ss-primary" style="font-size:1.1rem;padding:1rem 2.5rem;">Get a Free Quote</a>
    </div>
  </section>

  <!-- FOOTER -->

<?php include 'includes/footer.php'; ?>
