# Sure Shot Productions — Website

Website for **Sure Shot Productions, Inc.**, a full-service video production company located in Fairfax, VA, serving the Washington DC / Northern Virginia / Maryland area since 1998.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Markup | Vanilla PHP (no framework) |
| CSS | [Bootstrap 5.3.2](https://getbootstrap.com/) + custom `static/css/main.css` |
| Icons | [Bootstrap Icons 1.11.3](https://icons.getbootstrap.com/) |
| JS | Inline vanilla JS per page (no bundler) |
| Forms | `contact-handler.php` + Google reCAPTCHA v2 |
| Hosting | Any PHP-capable host (shared hosting, cPanel, etc.) |

Bootstrap and Bootstrap Icons are loaded from CDN — there is no `npm`, no build step, and no compilation required.

---

## Project Structure

```
.
├── index.php               # Homepage
├── about.php               # About Us
├── portfolio.php           # Video portfolio with filterable grid + modal player
├── services.php            # Services overview
├── contact.php             # Contact form (reCAPTCHA v2)
├── contact-handler.php     # POST endpoint — validates, verifies captcha, sends email
├── clients.php             # Client resources
├── directions.php          # Driving directions
│
├── includes/
│   ├── header.php          # Shared <head>, navbar (included by every page)
│   ├── footer.php          # Shared footer + Bootstrap JS (included by every page)
│   └── env.php             # Tiny .env file parser
│
├── static/
│   └── css/
│       └── main.css        # All custom styles (design tokens, components)
│
├── .env                    # Local config — NOT committed (see setup below)
└── .gitignore
```

---

## Local Development

Serve the site with PHP's built-in server:

```bash
php -S localhost:8080
```

Or with Python if you just need to browse static assets:

```bash
python3 -m http.server 8080
```

Open `http://localhost:8080` in your browser.

> **Note:** The contact form (`contact-handler.php`) requires a real `.env` file and a mail-capable server to send email. It will return an error response if either is missing.

---

## Configuration (`.env`)

Copy the example below to `.env` in the project root and fill in your values. This file is excluded from version control via `.gitignore`.

```ini
# Where contact form submissions are delivered
TO_ADDRESS=will@sureshotinc.com
FROM_ADDRESS=noreply@sureshotinc.com

# Google reCAPTCHA v2 — https://www.google.com/recaptcha/admin
CAPTCHA_SITE_KEY=your_site_key_here
CAPTCHA_SECRET_KEY=your_secret_key_here
```

Get reCAPTCHA keys at [google.com/recaptcha/admin](https://www.google.com/recaptcha/admin). Register the domain as **reCAPTCHA v2 — "I'm not a robot" Checkbox**.

---

## Design System

All custom styles live in `static/css/main.css`. Conventions:

- **CSS custom properties** are prefixed `--ss-*` — e.g. `--ss-gold`, `--ss-dark`, `--ss-muted`
- **Component classes** are prefixed `ss-` — e.g. `ss-card`, `ss-hero`, `ss-navbar`, `ss-footer`
- **Button variants:** `btn-ss-primary` (gold fill) · `btn-ss-outline` (gold border)

### Shared Includes

There is no templating engine. `includes/header.php` and `includes/footer.php` are included at the top and bottom of every page. When updating the navbar or footer, edit those two files — changes apply sitewide.

Pages can inject content into `<head>` by setting `$extra_head` before the include:

```php
$extra_head = '<script src="..." async defer></script>';
include 'includes/header.php';
```

---

## Deploying

1. Upload all files to your web host's public directory (typically `public_html`).
2. Create `.env` on the server with production values.
3. Confirm `mail()` is enabled on the host (standard on most cPanel/shared hosts).
4. Add your production domain to the reCAPTCHA admin console.

---

## License

Proprietary — © Sure Shot Productions, Inc. All rights reserved.
