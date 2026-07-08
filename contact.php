<?php
require __DIR__ . '/includes/env.php';
load_env(__DIR__ . '/.env');
$captcha_site_key = $_ENV['CAPTCHA_SITE_KEY'] ?? '';
$extra_head = '<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
include 'includes/header.php';
?>


  <!-- PAGE HEADER -->
  <header class="ss-page-header">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
      </nav>
      <h1 class="mt-2">Contact <span class="text-gold">Us</span></h1>
      <p style="color:var(--ss-muted);margin-top:0.5rem;">Sure Shot Productions, Inc. — Fairfax, VA</p>
    </div>
  </header>

  <!-- CONTACT SECTION -->
  <section class="ss-section">
    <div class="container">
      <div class="row g-5">

        <!-- Contact Info -->
        <div class="col-lg-4" data-ss-reveal>
          <div class="ss-contact-card">
            <h2 style="font-size:1.8rem;color:var(--ss-white);margin-bottom:2rem;">Get In <span style="color:var(--ss-gold);">Touch</span></h2>

            <div class="ss-contact-item">
              <i class="bi bi-geo-alt-fill"></i>
              <div>
                <p>
                  <strong style="color:var(--ss-white);display:block;margin-bottom:2px;">Sure Shot Productions, Inc.</strong>
                  275 Cameron Station Blvd.<br>
                  Alexandria, VA 22304
                </p>
              </div>
            </div>

            <div class="ss-contact-item">
              <i class="bi bi-telephone-fill"></i>
              <div>
                <p>
                  <strong style="color:var(--ss-white);display:block;margin-bottom:2px;">Phone</strong>
                  <a href="tel:7033790600" style="color:var(--ss-gold);font-size:1.1rem;">703-379-0600</a>
                </p>
              </div>
            </div>

            <div class="ss-contact-item">
              <i class="bi bi-envelope-fill"></i>
              <div>
                <p>
                  <strong style="color:var(--ss-white);display:block;margin-bottom:4px;">Email</strong>
                  <a href="mailto:will@sureshotinc.com">will@sureshotinc.com</a><br>
                  <a href="mailto:jeff@sureshotinc.com">jeff@sureshotinc.com</a>
                </p>
              </div>
            </div>

            <div class="ss-contact-item">
              <i class="bi bi-clock-fill"></i>
              <div>
                <p>
                  <strong style="color:var(--ss-white);display:block;margin-bottom:2px;">Business Hours</strong>
                  Monday – Friday: 9am – 6pm<br>
                  Weekends: By Appointment
                </p>
              </div>
            </div>

            <hr style="border-color:var(--ss-border);margin:1.5rem 0;">

            <h5 style="font-size:0.75rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:var(--ss-muted);margin-bottom:1rem;">Follow Us</h5>
            <div class="ss-social-links">
              <a href="https://www.facebook.com/pages/Sure-Shot-Productions-Inc/491220324349599" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook text-primary"></i></a>
              <a href="https://www.youtube.com/user/SureShot3122" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube text-danger"></i></a>
              <a href="http://sureshot-productions.blogspot.com/" target="_blank" rel="noopener" aria-label="Blog"><i class="bi bi-journal-text text-secondary"></i></a>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-8" data-ss-reveal>
          <div class="ss-divider"></div>
          <h2 class="ss-section-title mt-2">Tell Us About Your Next<br><span class="accent">Video Production Project</span></h2>
          <p style="color:var(--ss-muted);margin:1rem 0 2rem;">
            Fill out the form below and we'll get back to you with a quick quote. 
            No project is too big or too small.
          </p>

          <form id="ss-contact-form" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="ss-label" for="contact-name">Your Name *</label>
                <input type="text" id="contact-name" name="name" class="form-control ss-form-control" placeholder="Jane Smith" required>
                <div class="invalid-feedback" style="color:#E2C06C;font-size:0.8rem;">Please enter your name.</div>
              </div>
              <div class="col-sm-6">
                <label class="ss-label" for="contact-company">Company / Organization</label>
                <input type="text" id="contact-company" name="company" class="form-control ss-form-control" placeholder="Acme Corp">
              </div>
              <div class="col-sm-6">
                <label class="ss-label" for="contact-email">Email Address *</label>
                <input type="email" id="contact-email" name="email" class="form-control ss-form-control" placeholder="jane@example.com" required>
                <div class="invalid-feedback" style="color:#E2C06C;font-size:0.8rem;">Please enter a valid email address.</div>
              </div>
              <div class="col-sm-6">
                <label class="ss-label" for="contact-phone">Phone Number</label>
                <input type="tel" id="contact-phone" name="phone" class="form-control ss-form-control" placeholder="(703) 555-0100">
              </div>
              <div class="col-12">
                <label class="ss-label" for="contact-type">Type of Production</label>
                <select id="contact-type" name="production_type" class="form-select ss-form-control">
                  <option value="" disabled selected>Select a production type...</option>
                  <option value="commercial">TV Commercial</option>
                  <option value="psa">PSA</option>
                  <option value="training">Training &amp; Orientation Video</option>
                  <option value="educational">Educational Video</option>
                  <option value="marketing">Marketing Video</option>
                  <option value="web">Web Video</option>
                  <option value="corporate">Corporate / Executive</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="ss-label" for="contact-budget">Estimated Budget</label>
                <select id="contact-budget" name="budget" class="form-select ss-form-control">
                  <option value="" disabled selected>Select a budget range...</option>
                  <option value="under5">Under $5,000</option>
                  <option value="5to15">$5,000 – $15,000</option>
                  <option value="15to50">$15,000 – $50,000</option>
                  <option value="over50">$50,000+</option>
                  <option value="unknown">Not Sure Yet</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="ss-label" for="contact-timeline">Timeline</label>
                <select id="contact-timeline" name="timeline" class="form-select ss-form-control">
                  <option value="" disabled selected>Select a timeline...</option>
                  <option value="asap">ASAP</option>
                  <option value="month">Within a month</option>
                  <option value="quarter">1–3 months</option>
                  <option value="flexible">Flexible</option>
                </select>
              </div>
              <div class="col-12">
                <label class="ss-label" for="contact-message">Project Description *</label>
                <textarea id="contact-message" name="message" class="form-control ss-form-control" rows="6" placeholder="Tell us about your video project — goals, audience, any special requirements..." required></textarea>
                <div class="invalid-feedback" style="color:#E2C06C;font-size:0.8rem;">Please describe your project.</div>
              </div>
              <div class="col-12">
                <div class="g-recaptcha" data-sitekey="<?= htmlspecialchars($captcha_site_key) ?>"></div>
              </div>
              <div class="col-12">
                <button type="submit" id="ss-submit-btn" class="btn-ss-primary" style="font-size:1rem;padding:0.9rem 2.5rem;">
                  <i class="bi bi-send me-2"></i>Submit Project Inquiry
                </button>
              </div>
            </div>
          </form>
          <div id="ss-form-feedback" role="alert" style="margin-top:1rem;"></div>

	  <script src="static/js/contact.js"></script>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->

<?php include 'includes/footer.php'; ?>
