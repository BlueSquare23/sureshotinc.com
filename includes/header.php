<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($page_description ?? 'Full-service HD video production in Washington DC, Northern Virginia, and Maryland since 1998.') ?>">
  <title><?= htmlspecialchars($page_title ?? 'Sure Shot Film & Video Productions') ?></title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- Sure Shot -->
  <link href="static/css/main.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="<?= htmlspecialchars($logo_path ?? 'static/images/logo.svg') ?>">
  <?php if (!empty($extra_head)) echo $extra_head; ?>
</head>
<body class="ss-page-offset">

  <nav class="ss-navbar navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="<?= htmlspecialchars($logo_path ?? 'static/images/logo.svg') ?>" alt="Sure Shot Productions logo" style="height:40px;width:40px;object-fit:contain;margin-right:0.4rem;">
        SURE SHOT <span>PRODUCTIONS</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ssNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="ssNav">
        <ul class="navbar-nav gap-1">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="clients.php">For Clients</a></li>
        </ul>
      </div>
    </div>
  </nav>
