# Wiber Application

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Wiber

Wiber is a web application built with Laravel that manages and displays products from various student organizations (Himpunan). The application features:

- Product management system with categories
- Student organization (Himpunan) management
- User authentication and authorization
- RESTful API endpoints
- Role-based access control
- Image upload capabilities for products

## Main Features

- **Product Management**
  - Add, edit, and delete products
  - Categorize products
  - Upload product images
  - Set product status (active/inactive)
  - Price management

- **Student Organization Management**
  - Organization registration
  - WhatsApp contact information
  - Organization-specific product listings

- **Category System**
  - Flexible product categorization
  - Category management interface

- **User System**
  - Secure authentication
  - Admin dashboard
  - Role-based permissions
  - Super admin capabilities

## Technical Requirements

- PHP >= 8.1
- MySQL/MariaDB
- Composer
- Node.js & NPM
- Laravel 10.x

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd wiber
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install and compile frontend assets:
```bash
npm install
npm run dev
```

4. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure your database in `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wiber
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. Run migrations:
```bash
php artisan migrate
```

7. Create storage link for images:
```bash
php artisan storage:link
```

## API Endpoints

The application provides RESTful API endpoints for:

- Products
- Categories
- Student Organizations
- User Authentication

API documentation is available at `/api/documentation` when running in development mode.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
