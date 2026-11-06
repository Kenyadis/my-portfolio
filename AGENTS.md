# Portfolio — Laravel 13

Static single-page portfolio (BSIT 4 midterm). One route renders hardcoded Blade content; SQLite/migrations are Laravel skeleton only and not used for portfolio data.

## Setup

```sh
composer setup   # composer install, .env, key, migrate, npm install, vite build
```

- Requires PHP ≥ 8.3, Composer, Node/npm.
- `composer install` must include dev deps; without them `php artisan test` and Pint do not exist.

## Dev server

```sh
php artisan dev   # serve + queue:listen + vite watcher (`php artisan dev:list`)
composer dev      # same, with process timeout disabled
```

- Vite assets load only if `public/build/manifest.json` or `public/hot` exists (layout: `resources/views/components/layouts/portfolio.blade.php`). Run `npm run build` after CSS/JS edits or the page renders unstyled.
- `npm run build` may warn that optional `fontaine` is missing; build still succeeds — do not add it.

## Tests

```sh
php artisan test                         # all suites
php artisan test --filter=TestClassName   # single class
php artisan test --filter=testMethodName # single method
composer test                            # config:clear, then artisan test
```

- PHPUnit uses in-memory SQLite (`phpunit.xml`); no external DB needed.
- Only the two skeleton examples exist; add/update tests when behavior changes.

## Formatting

```sh
php vendor/bin/pint         # auto-fix (Windows: vendor\bin\pint.bat)
php vendor/bin/pint --test  # check only
```

## Architecture

- `GET /` → `PortfolioController@index` → `pages.portfolio` (`routes/web.php`).
- Layout is an anonymous component at `resources/views/components/layouts/portfolio.blade.php` (used as `<x-layouts.portfolio>`), not under `resources/views/layouts/`.
- All portfolio content is hardcoded in Blade. Do not add DB models/migrations/auth/API/admin or packages.
- Profile image: `public/image/ken-profile.jpg` (singular `image`) with an `onerror` avatar fallback.
- Frontend: Tailwind v4 via `@tailwindcss/vite` (no `tailwind.config.js`). Theme tokens (`night-*`, `glow-*`, `gold-*`, `mist-*`) and custom classes (`glass-panel`, `card-hover`, `reveal`, `timeline-*`) in `resources/css/app.css`. Fonts loaded via `@fonts`/Bunny in `vite.config.js`.
- Vanilla JS in `resources/js/app.js`: mobile menu, active nav, scroll reveal, timeline illumination, particles; respects `prefers-reduced-motion`.
- Keep content factual: do not invent projects, technologies, education, or personal details.

## Repo conventions

- 4-space indent, LF line endings (`.editorconfig`).
- `PROMPT_LOG.md` is a midterm requirement: append every AI interaction in the existing `### Task` / Prompt used / Result format; never rewrite history.
- `CLAUDE.md` is a generic Laravel Boost bootstrap. Boost is not installed and the project avoids extra packages; prefer this file.
