<?php include 'includes/header.php'; ?>


  <!-- PAGE HEADER -->
  <header class="ss-page-header">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Driving Directions</li>
        </ol>
      </nav>
      <h1 class="mt-2">Find <span class="text-gold">Us</span></h1>
      <p style="color:var(--ss-muted);margin-top:0.5rem;">Conveniently located in Fairfax City, VA</p>
    </div>
  </header>

  <!-- DIRECTIONS SECTION -->
  <section class="ss-section">
    <div class="container">
      <div class="row g-5">

        <!-- Address & Info -->
        <div class="col-lg-4" data-ss-reveal>
          <div class="ss-divider"></div>
          <h2 class="ss-section-title mt-3">Our <span class="accent">Location</span></h2>

          <div class="mt-4 d-flex flex-column gap-4">
            <div class="d-flex gap-3 align-items-start">
              <i class="bi bi-geo-alt-fill text-gold" style="font-size:1.3rem;flex-shrink:0;margin-top:2px;"></i>
              <div>
                <strong style="color:var(--ss-white);display:block;margin-bottom:4px;">Address</strong>
                <p style="color:var(--ss-muted);margin:0;line-height:1.8;">
                  Sure Shot Productions, Inc.<br>
                  3915 Old Lee Hwy, Suite 21C<br>
                  Fairfax, VA 22030
                </p>
              </div>
            </div>

            <div class="d-flex gap-3 align-items-start">
              <i class="bi bi-telephone-fill text-gold" style="font-size:1.3rem;flex-shrink:0;margin-top:2px;"></i>
              <div>
                <strong style="color:var(--ss-white);display:block;margin-bottom:4px;">Phone</strong>
                <a href="tel:7033790600" style="color:var(--ss-gold);font-size:1.05rem;">(703) 379-0600</a>
              </div>
            </div>

            <div class="d-flex gap-3 align-items-start">
              <i class="bi bi-p-circle-fill text-gold" style="font-size:1.3rem;flex-shrink:0;margin-top:2px;"></i>
              <div>
                <strong style="color:var(--ss-white);display:block;margin-bottom:4px;">Parking</strong>
                <p style="color:var(--ss-muted);margin:0;">Plenty of free parking available on site.</p>
              </div>
            </div>

            <div class="d-flex gap-3 align-items-start">
              <i class="bi bi-compass-fill text-gold" style="font-size:1.3rem;flex-shrink:0;margin-top:2px;"></i>
              <div>
                <strong style="color:var(--ss-white);display:block;margin-bottom:4px;">Convenient To</strong>
                <p style="color:var(--ss-muted);margin:0;line-height:1.8;">Washington, D.C. · Maryland · Northern Virginia<br>Easy access from I-66 and Route 50</p>
              </div>
            </div>
          </div>

          <div class="mt-4 d-flex flex-column gap-2">
            <a href="https://www.google.com/maps/dir/?api=1&destination=3915+Old+Lee+Hwy+Suite+21C+Fairfax+VA+22030"
               target="_blank" rel="noopener"
               class="btn-ss-primary d-inline-block">
              <i class="bi bi-map me-2"></i>Get Directions (Google Maps)
            </a>
            <a href="https://maps.apple.com/?address=3915+Old+Lee+Hwy,Fairfax,VA+22030"
               target="_blank" rel="noopener"
               class="btn-ss-outline d-inline-block mt-2">
              <i class="bi bi-map me-2"></i>Apple Maps
            </a>
          </div>
        </div>

        <!-- Map -->
        <div class="col-lg-8" data-ss-reveal>
          <div class="ss-map-wrap" style="height:480px;">
            <iframe
              src="https://www.google.com/maps?q=3915+Old+Lee+Hwy+Suite+21C,+Fairfax,+VA+22030&output=embed"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Sure Shot Productions location map">
            </iframe>
          </div>
          <p class="mt-2" style="font-size:0.8rem;color:var(--ss-muted);">
            <i class="bi bi-info-circle me-1"></i>
            Map shows approximate location. Suite 21C is in the office complex at 3915 Old Lee Hwy, Fairfax City, VA.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- NEARBY LANDMARKS -->
  <section class="ss-section ss-section-dark">
    <div class="container">
      <div class="row mb-4" data-ss-reveal>
        <div class="col">
          <div class="ss-divider"></div>
          <h2 class="ss-section-title mt-3">Getting <span class="accent">Here</span></h2>
          <p class="ss-section-sub">Sure Shot is conveniently accessible from throughout the DC metropolitan area.</p>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-sm-6 col-lg-3" data-ss-reveal>
          <div class="ss-card text-center">
            <div class="ss-card-icon"><i class="bi bi-buildings"></i></div>
            <h3>From DC</h3>
            <p>Take I-66 West to Fairfax City. Approximately 15–20 miles from downtown Washington.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-ss-reveal>
          <div class="ss-card text-center">
            <div class="ss-card-icon"><i class="bi bi-signpost-2"></i></div>
            <h3>From I-66</h3>
            <p>Exit at Route 123 (Chain Bridge Road) toward Fairfax City. Old Lee Hwy is just minutes away.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-ss-reveal>
          <div class="ss-card text-center">
            <div class="ss-card-icon"><i class="bi bi-train-front"></i></div>
            <h3>By Metro</h3>
            <p>Nearest Metro: Vienna/Fairfax-GMU station on the Orange Line. Short drive or taxi from the station.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-ss-reveal>
          <div class="ss-card text-center">
            <div class="ss-card-icon"><i class="bi bi-p-square"></i></div>
            <h3>Parking</h3>
            <p>Free parking is available directly at our building. No meters, no hassle.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

<?php include 'includes/footer.php'; ?>
