# Repository Guidelines

This repository contains the source code for the Nav Nath Farm's website, a PHP and HTML-based project.

## Project Structure & Module Organization

The project follows a traditional LAMP/WAMP stack architecture with a mix of static HTML and dynamic PHP files.

- **Root Directory**: Contains the main pages of the website as `.html` files (e.g., `about.html`, `products.html`) and the primary entry point `index.php`.
- **`includes/`**: Stores reusable PHP components such as `header.php` and `footer.php`, which are included across different pages to maintain consistency.
- **`forms/`**: Contains PHP scripts (e.g., `business_enquiry.php`, `career_enquiry.php`) that handle form submissions and process enquiries using PHPMailer.
- **`assets/`**: Organized into subdirectories for static resources:
  - `css/`: Stylesheets including Bootstrap and custom styles (`navnath.css`, `style.css`).
  - `js/`: Client-side scripts including jQuery and various plugins (Swiper, Isotope).
  - `img/`: Images and icons used throughout the site.
  - `libraries/` & `vendor/`: Third-party dependencies such as PHPMailer.

## Build, Test, and Development Commands

There is no formal build system or package manager (like npm or Composer) in the root directory. Development and testing are typically performed in a local environment (e.g., Laragon, XAMPP).

- **Deployment**: Changes are applied by updating the files directly on the server.
- **Testing**: Manual verification of pages and form functionality in a browser.

## Coding Style & Naming Conventions

- **Frontend**: Follows Bootstrap 5 conventions for layout and components.
- **PHP**: Uses `require` or `include` for modularity. Form processing scripts use `PHPMailer` for email functionality.
- **Naming**: Files are generally named using `snake_case` (e.g., `business_enquiry.php`) or lowercase (e.g., `about.html`).

## Testing Guidelines

- Verify that all assets (CSS, JS, images) load correctly using relative paths.
- Ensure PHP form scripts in the `forms/` directory correctly process `POST` data and handle errors gracefully.
- Test responsive design across various breakpoints as defined by Bootstrap.

## Commit & Pull Request Guidelines

- Commit messages should be concise.
- Follow the existing pattern of descriptive yet brief summaries of changes.
