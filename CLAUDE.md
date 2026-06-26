# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Static HTML website for Sure Shot Productions, Inc. — a video production company in Fairfax, VA serving the DC/NoVA/MD area since 1998.

## Tech Stack

- **Bootstrap 5.3.2** and **Bootstrap Icons 1.11.3** — loaded from CDN (no local copies)
- **`sureshot.css`** — custom theme (not yet committed; referenced by all pages)
- **`sureshot.js`** — custom JS for scroll animations and interactions (not yet committed; referenced by all pages)
- **Vanilla PHP** — planned for form handling (no PHP files yet in repo)

## Previewing the Site

Open any `.html` file directly in a browser, or serve locally:

```bash
python3 -m http.server 8080
```

## Architecture

### No Build Step

Pure static HTML — no npm, no bundler, no compilation. Edit files and refresh the browser.

### Shared Structure (Duplicated Per Page)

There is no templating engine. The navbar and footer HTML are copy-pasted identically into every `.html` file. When updating either, edit all 7 pages.

### Design System

All custom styles live in `sureshot.css`. Key conventions:
- CSS custom properties prefixed `--ss-*` (e.g. `--ss-gold`, `--ss-dark`, `--ss-muted`, `--ss-border`)
- Component classes prefixed `ss-` (e.g. `ss-card`, `ss-hero`, `ss-section`, `ss-navbar`)
- Button variants: `btn-ss-primary` (gold fill), `btn-ss-outline` (gold border)
- Scroll reveal: elements with `data-ss-reveal` attribute are animated by `sureshot.js`
- Fade-in animations use `ss-fade-in` + `ss-delay-1/2/3` classes

### Page Layout Pattern

Every inner page (non-homepage) follows:
1. `<nav class="ss-navbar">` — site nav
2. `<header class="ss-page-header">` — page title + breadcrumb
3. Content sections using `ss-section` / `ss-section-dark` alternating
4. `<footer class="ss-footer">` — address, nav links, social links

The homepage (`index.html`) replaces the page header with a full-bleed `ss-hero` section.
