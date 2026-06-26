# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Static-style PHP website for Sure Shot Productions, Inc. — a video production company in Fairfax, VA serving the DC/NoVA/MD area since 1998.

## Dev Server

```bash
php -S localhost:8080
```

The contact form handler (`contact-handler.php`) requires a live `.env` file and a mail-capable server; it will fail gracefully in local dev.

## Architecture

### No Build Step

Pure PHP — no npm, no bundler, no compilation. Edit files and refresh.

### PHP Includes (Shared Header / Footer)

Every page (`index.php`, `about.php`, etc.) follows this shell:

```php
<?php include 'includes/header.php'; ?>
  <!-- page content -->
<?php include 'includes/footer.php'; ?>
```

- **`includes/header.php`** — outputs `<!DOCTYPE html>` through `</nav>`. Reads optional `$page_title`, `$page_description`, and `$extra_head` variables set by the calling page before the include.
- **`includes/footer.php`** — outputs `<footer>` through `</html>`, including the Bootstrap JS `<script>` tag.
- Navbar and footer HTML live **only** in these two files. Edit once, applies sitewide.

Injecting page-specific `<head>` content (e.g. reCAPTCHA script on the contact page):

```php
<?php
$extra_head = '<script src="..." async defer></script>';
include 'includes/header.php';
?>
```

### Contact Form

`contact.php` renders the form. `contact-handler.php` is the POST endpoint — it:
1. Loads `.env` via `includes/env.php`
2. Validates required fields and field lengths
3. Verifies the reCAPTCHA v2 token against `https://www.google.com/recaptcha/api/siteverify`
4. Sends email via PHP `mail()`
5. Returns JSON `{"ok": bool, "message": "..."}` — the form submits via `fetch()` and shows feedback inline without a page reload.

Required `.env` keys: `TO_ADDRESS`, `FROM_ADDRESS`, `CAPTCHA_SITE_KEY`, `CAPTCHA_SECRET_KEY`.

### Portfolio Page JS

`portfolio.php` has all JavaScript inline (no external `.js` file). It handles two things:

1. **Video modal** — on `show.bs.modal`, reads `data-yt` from the clicked card. If the value is exactly 11 characters it's treated as a YouTube video ID and embeds directly; otherwise it's treated as a channel username and loads the uploads playlist.
2. **Filter pills** — toggling `.ss-filter-pill` buttons shows/hides `.ss-portfolio-grid-item` elements by matching `data-filter` against `data-category`.

> **Note:** A file called `sureshot.js` is referenced in `includes/footer.php` but does not exist. Do not create it — all JS is written inline per page to avoid a dependency on a missing file.

## Design System

All custom styles are in `static/css/main.css`, loaded after Bootstrap 5.

### CSS Custom Properties

Only `--ss-gold: #c8a84b` is currently defined in `:root`. The following tokens are **used throughout** the codebase (in `main.css` and inline `style=""` attributes on every page) but are **not yet declared** — this is a known gap that causes those properties to silently inherit browser defaults:

| Token | Intended value |
|---|---|
| `--ss-dark` | Near-black page background |
| `--ss-black` | Pure black |
| `--ss-white` | Off-white text |
| `--ss-muted` | Subdued grey text |
| `--ss-border` | Subtle border / divider colour |
| `--ss-card` | Card background colour |
| `--transition` | Shared `transition` shorthand |

These should be added to the `:root` block in `main.css`.

### Naming Conventions

- CSS custom properties: `--ss-*`
- Component classes: `ss-` prefix (e.g. `ss-card`, `ss-hero`, `ss-navbar`, `ss-footer`)
- Button variants: `btn-ss-primary` (gold fill), `btn-ss-outline` (gold border)

### Inner Page Layout

Every page except the homepage follows:

1. `<header class="ss-page-header">` — page title + breadcrumb
2. Alternating `ss-section` / `ss-section-dark` content sections
3. CTA band before the footer include
