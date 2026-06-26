<?php include 'includes/header.php'; ?>


  <!-- PAGE HEADER -->
  <header class="ss-page-header">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">For Clients</li>
        </ol>
      </nav>
      <h1 class="mt-2">Client <span class="text-gold">Portal</span></h1>
      <p style="color:var(--ss-muted);margin-top:0.5rem;">Securely access and share project files</p>
    </div>
  </header>

  <!-- CLIENT PORTAL SECTION -->
  <section class="ss-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-xl-6">

          <!-- Intro text -->
          <div class="text-center mb-5" data-ss-reveal>
            <div class="ss-divider mx-auto"></div>
            <h2 class="ss-section-title mt-3">Access Your <span class="accent">Projects</span></h2>
            <p style="color:var(--ss-muted);margin-top:1rem;line-height:1.9;">
              Welcome to the Sure Shot Productions client area. Upload files to us, 
              review project materials, or get in touch with your producer. 
              Up to 5 files can be included per submission.
            </p>
          </div>

          <!-- File Upload Box -->
          <div class="ss-portal-box" data-ss-reveal>
            <div class="d-flex align-items-center gap-3 mb-4">
              <div style="width:48px;height:48px;background:rgba(200,168,75,0.1);border:1px solid var(--ss-gold);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="bi bi-cloud-upload text-gold" style="font-size:1.4rem;"></i>
              </div>
              <div>
                <h3 style="font-size:1.4rem;color:var(--ss-white);">Upload Files to Sure Shot</h3>
                <p style="font-size:0.8rem;color:var(--ss-muted);margin:0;">Powered by SendThisFile — secure file transfer</p>
              </div>
            </div>

            <p style="color:var(--ss-muted);font-size:0.9rem;margin-bottom:1.5rem;">
              To upload a file to us, use the secure SendThisFile service below. 
              You can attach up to 5 files per submission. Please include your email 
              address so we can confirm receipt.
            </p>

            <!-- SendThisFile embed wrapper -->
            <div style="background:var(--ss-black);border:1px solid var(--ss-border);padding:1.5rem;text-align:center;">
              <i class="bi bi-box-arrow-up" style="font-size:3rem;color:var(--ss-border);display:block;margin-bottom:1rem;"></i>
              <p style="color:var(--ss-muted);font-size:0.875rem;margin-bottom:1.5rem;">
                Click below to open the secure file upload portal. You'll be redirected 
                to SendThisFile to complete your upload.
              </p>
              <a href="https://www.sendthisfile.com/filebox/index.jsp?widgetcode=e1Xqnk7AzQI61KRiH2X0eX1N"
                 target="_blank" rel="noopener"
                 class="btn-ss-primary d-inline-block">
                <i class="bi bi-cloud-arrow-up me-2"></i>Open File Upload Portal
              </a>
            </div>

            <hr style="border-color:var(--ss-border);margin:2rem 0;">

            <div class="d-flex flex-column gap-3">
              <div class="d-flex gap-3 align-items-start">
                <i class="bi bi-check-circle-fill text-gold" style="flex-shrink:0;margin-top:3px;"></i>
                <p style="color:var(--ss-muted);font-size:0.875rem;margin:0;">Supports large files not suitable for email</p>
              </div>
              <div class="d-flex gap-3 align-items-start">
                <i class="bi bi-check-circle-fill text-gold" style="flex-shrink:0;margin-top:3px;"></i>
                <p style="color:var(--ss-muted);font-size:0.875rem;margin:0;">Up to 5 files per submission</p>
              </div>
              <div class="d-flex gap-3 align-items-start">
                <i class="bi bi-check-circle-fill text-gold" style="flex-shrink:0;margin-top:3px;"></i>
                <p style="color:var(--ss-muted);font-size:0.875rem;margin:0;">Files are delivered directly to your production team</p>
              </div>
            </div>
          </div>

          <!-- Alternate Contact -->
          <div class="text-center mt-5" data-ss-reveal>
            <p style="color:var(--ss-muted);font-size:0.875rem;">
              Need help? Call us at <a href="tel:7033790600" class="text-gold">(703) 379-0600</a> or email your producer directly.
            </p>
            <div class="d-flex gap-3 justify-content-center mt-3 flex-wrap">
              <a href="mailto:will@sureshotinc.com" class="btn-ss-outline" style="font-size:0.85rem;padding:0.6rem 1.5rem;">Email Will</a>
              <a href="mailto:jeff@sureshotinc.com" class="btn-ss-outline" style="font-size:0.85rem;padding:0.6rem 1.5rem;">Email Jeff</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

<?php include 'includes/footer.php'; ?>
