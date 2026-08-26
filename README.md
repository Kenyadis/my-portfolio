# My Portfolio

A personal portfolio website built with **Laravel 13** and **Blade**, designed for the **BSIT 4 Midterm** activity.

## About

This is a static portfolio site that showcases my background, education, projects, and GitHub repositories. It is built using Laravel's Blade templating engine with Tailwind CSS for styling. All content is hardcoded directly in the Blade views — no database is used for storing or retrieving portfolio data.

## Purpose

This project was created as a requirement for the BSIT 4 Midterm activity. It demonstrates the ability to build a Laravel-based web application using proper routing, Blade components, and modern frontend tooling.

## Technologies Used

- **Laravel 13** — PHP web framework
- **Blade** — Laravel's native templating engine
- **Tailwind CSS v4** — Utility-first CSS framework
- **Vite 8** — Frontend build tool and dev server
- **Instrument Sans** — Google Font loaded via Bunny Fonts
- **PHP 8.3+**
- **SQLite** — Default connection (unused by the application)

## Portfolio Sections

The portfolio page is divided into four sections:

1. **About / Hero** — Profile image, name, bio, and contact information
2. **Education** — Timeline of educational background
3. **Projects** — Grid of project cards with descriptions and technology tags
4. **GitHub Repositories** — Links to GitHub repos and profile

## Project Structure

```
resources/
  views/
    components/
      layouts/
        portfolio.blade.php    # Master layout (nav, footer, HTML shell)
      section-heading.blade.php
      project-card.blade.php
    pages/
      portfolio.blade.php      # Main portfolio page
routes/
  web.php                      # Single GET / route
app/
  Http/Controllers/
    PortfolioController.php    # Renders the portfolio view
```

## Important Notes

- This is a **static** portfolio. All content is hardcoded in Blade templates.
- There is **no database** used for portfolio data. The default SQLite connection and migrations exist but are not part of the portfolio functionality.
- There is **no authentication**, **no API**, and **no admin panel**.
- There is a single route: `GET /` which renders the portfolio page.

## Installation

### Prerequisites

- PHP 8.3 or higher
- Composer
- Node.js and npm

### Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/Kenyadis/my-portfolio.git
   cd my-portfolio
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Copy the environment file and generate an application key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Install frontend dependencies and build assets:

   ```bash
   npm install
   npm run build
   ```

   Or use the all-in-one composer script:

   ```bash
   composer setup
   ```

## Running the Development Server

Start the Laravel development server:

```bash
php artisan serve
```

The site will be available at [http://localhost:8000](http://localhost:8000).

To run both the Laravel server and the Vite dev server (with hot reload) simultaneously:

```bash
composer dev
```

## Usage

Once the development server is running, open [http://localhost:8000](http://localhost:8000) in your browser to view the portfolio. The page includes:

- A sticky navigation bar with links to each section
- A responsive layout that adapts to desktop, tablet, and mobile screens
- Hover animations on project cards and GitHub links

To customize the content, edit the files in `resources/views/pages/` and `resources/views/components/`.

## License

This project is for educational purposes.
