# Portfolio — Laravel 13

Fresh Laravel 13 app (portfolio site). SQLite backend, Blade views, Tailwind CSS v4 via Vite.

## Setup

```sh
composer setup        # install deps, .env, key, migrate, npm install, vite build
```

Requires PHP ≥ 8.3 and Composer.

## Dev server

```sh
php artisan dev       # starts Laravel + Vite watcher together
```

Or via composer: `composer dev` (disables process timeout).

## Tests

```sh
php artisan test                         # all suites
php artisan test --filter=TestClassName   # single class
php artisan test --filter=testMethodName # single method
```

PHPUnit uses in-memory SQLite (`phpunit.xml`), no external DB needed.

## Code style

Laravel Pint is a dev dependency. Run:

```sh
./vendor/bin/pint        # auto-fix
./vendor/bin/pint --test # check only
```

## Frontend

- Tailwind CSS v4 (via `@tailwindcss/vite` plugin, not PostCSS)
- Vite entry points: `resources/css/app.css`, `resources/js/app.js`
- Font: Instrument Sans loaded via `laravel-vite-plugin` fonts helper
- `npm run build` / `npm run dev`

## Key paths

| What | Where |
|------|-------|
| Routes | `routes/web.php`, `routes/console.php` |
| Views | `resources/views/` (Blade) |
| Models | `app/Models/` |
| Controllers | `app/Http/Controllers/` |
| Migrations | `database/migrations/` |
| Config | `config/` |

## Conventions

- 4-space indent, LF line endings (`.editorconfig`)
- Default DB is SQLite (`database/database.sqlite`); tests use `:memory:`
- No `tailwind.config.js` — Tailwind v4 uses CSS-based config in `resources/css/app.css`
