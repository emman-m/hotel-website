# Luxury Hotel Website

A modern, responsive hotel website built with CodeIgniter 4 and Tailwind CSS. This project features a mockup design with local storage functionality, focusing on an elegant user interface and smooth user experience.

## Features

- 🏨 Elegant homepage with hero section and featured amenities
- 🛏️ Room listings with detailed information and pricing
- 📅 Interactive booking form with date validation
- 💬 Contact form with validation
- ⭐ Testimonials section
- 📱 Fully responsive design
- 🎨 Modern UI with smooth animations
- 🔒 CSRF protection
- 📝 Form validation
- 💾 Local storage for form submissions

## Technologies Used

- **Backend:**
  - PHP 8.1+
  - CodeIgniter 4
  - MVC Architecture

- **Frontend:**
  - HTML5
  - Tailwind CSS
  - JavaScript (ES6+)
  - Font Awesome Icons
  - Google Fonts (Playfair Display, Poppins)

## Requirements

- PHP 8.1 or higher
- Composer
- Web server (Apache/Nginx)
- Modern web browser

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/hotel-website.git
   cd hotel-website
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Configure your web server to point to the `public` directory

4. Copy `.env.example` to `.env` and configure your environment:
   ```bash
   cp .env.example .env
   ```

5. Set the base URL in `app/Config/App.php`:
   ```php
   public $baseURL = 'http://localhost:8080/';
   ```

## Project Structure

```
hotel-website/
├── app/
│   ├── Config/         # Configuration files
│   ├── Controllers/    # Application controllers
│   ├── Views/          # View templates
│   │   ├── layouts/    # Layout templates
│   │   └── partials/   # Reusable view components
│   └── ...
├── public/             # Publicly accessible files
│   ├── css/           # CSS files
│   ├── js/            # JavaScript files
│   └── images/        # Image assets
└── ...
```

## Key Features Implementation

### Navigation
- Fixed navigation with scroll effect
- Mobile-responsive menu
- Smooth color transitions
- Semi-transparent background on scroll

### Booking System
- Date validation
- Room type selection
- Form validation
- Local storage for submissions

### Contact Form
- Input validation
- CSRF protection
- Success/error messages
- Local storage for submissions

## Development

### Running Locally
1. Start your web server
2. Navigate to `http://localhost:8080`

### Code Style
- Follows PSR-12 coding standards
- Uses meaningful variable and function names
- Includes comprehensive comments

## Security Features

- CSRF protection for all forms
- Input validation and sanitization
- Secure session handling
- XSS prevention

## Performance Optimizations

- Minified CSS and JavaScript
- Optimized images
- Efficient routing
- Cached views

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Design inspiration from:
  - Corinthia Hotels
  - Home Suite Hotels
  - IM Hotel
- Icons by Font Awesome
- Fonts by Google Fonts

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
