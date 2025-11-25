# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 10 project for an invoicing system ("sitio-facturacion"). The project uses:
- Laravel Framework 10.10+
- PHP 8.1+
- MySQL database
- Vite for asset bundling
- Laravel Sanctum for API authentication
- PHPUnit for testing

## Development Environment

This project runs on XAMPP/Windows (WSL2 environment). The typical workflow assumes:
- PHP is available through XAMPP
- MySQL server running on localhost:3306
- Default database name: `sitio_facturacion`
- Database user: `root` with no password

## Common Commands

### Setup
```bash
# Copy environment file (if not already done)
cp .env.example .env

# Install PHP dependencies
composer install

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Seed database (if seeders are available)
php artisan db:seed
```

### Development
```bash
# Start Laravel development server
php artisan serve

# Start Vite development server (for frontend assets)
npm run dev

# Build frontend assets for production
npm run build

# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Clear route cache
php artisan route:clear

# Clear view cache
php artisan view:clear
```

### Database
```bash
# Run migrations
php artisan migrate

# Rollback last migration
php artisan migrate:rollback

# Rollback all migrations and re-run
php artisan migrate:refresh

# Reset database and seed
php artisan migrate:fresh --seed

# Create new migration
php artisan make:migration create_table_name

# Create new seeder
php artisan make:seeder TableNameSeeder
```

### Code Generation
```bash
# Create a new controller
php artisan make:controller ControllerName

# Create a resource controller
php artisan make:controller ControllerName --resource

# Create a new model
php artisan make:model ModelName

# Create model with migration
php artisan make:model ModelName -m

# Create model with migration, factory, and seeder
php artisan make:model ModelName -mfs

# Create middleware
php artisan make:middleware MiddlewareName

# Create form request
php artisan make:request RequestName

# Create a job
php artisan make:job JobName

# Create event
php artisan make:event EventName

# Create listener
php artisan make:listener ListenerName
```

### Testing
```bash
# Run all tests
php artisan test
# or
vendor/bin/phpunit

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run tests with coverage
php artisan test --coverage
```

### Code Quality
```bash
# Run Laravel Pint (code formatter)
vendor/bin/pint

# Fix specific files/directories
vendor/bin/pint app/Models
```

### Artisan Tinker
```bash
# Interactive shell for testing code
php artisan tinker
```

## Architecture

### Directory Structure
- `app/Http/Controllers/` - HTTP controllers (currently only base Controller.php)
- `app/Models/` - Eloquent models (currently only User model)
- `app/Providers/` - Service providers for bootstrapping application services
- `app/Http/Middleware/` - HTTP middleware for filtering requests
- `routes/web.php` - Web routes with session/CSRF protection
- `routes/api.php` - API routes (stateless, token-based via Sanctum)
- `routes/console.php` - Artisan console commands
- `routes/channels.php` - Broadcast channel authorization
- `database/migrations/` - Database schema migrations
- `database/seeders/` - Database seeders
- `database/factories/` - Model factories for testing
- `resources/views/` - Blade templates
- `resources/css/` - CSS assets (processed by Vite)
- `resources/js/` - JavaScript assets (processed by Vite)
- `tests/Feature/` - Feature tests (test full HTTP requests)
- `tests/Unit/` - Unit tests (test isolated components)

### Key Laravel Concepts
- **Eloquent ORM**: Models inherit from `Illuminate\Database\Eloquent\Model` and map to database tables
- **Route-Model Binding**: Automatically inject model instances in route parameters
- **Service Container**: Dependency injection and service resolution happens automatically
- **Middleware**: Applied in `app/Http/Kernel.php`, can be applied to routes/controllers
- **Form Requests**: Validation logic lives in dedicated request classes
- **Resource Controllers**: RESTful controller methods (index, create, store, show, edit, update, destroy)

### Database Configuration
The default database configuration expects:
- Connection: MySQL
- Host: 127.0.0.1
- Port: 3306
- Database: sitio_facturacion
- Username: root
- Password: (empty)

For testing, PHPUnit is configured to use:
- In-memory arrays for cache and session
- Sync queue driver
- Array mail driver

### Authentication
Laravel Sanctum is installed for API token authentication. The User model includes:
- `HasApiTokens` trait for Sanctum token management
- `HasFactory` trait for model factories
- `Notifiable` trait for notifications

## Project-Specific Notes

### Current Implementation
This project has evolved from a fresh Laravel installation and now includes:
- **Views**: Custom Blade templates for public-facing pages (home, factura-electronica, acerca-de)
- **Layout**: Shared layout template at `resources/views/layouts/app.blade.php`
- **Routes**: Three main routes defined using closure-based routing in `routes/web.php`:
  - `/` (home) - Main services page
  - `/factura-electronica` - Electronic invoicing system page
  - `/acerca-de` - About us page
- **Models**: Only default User model exists
- **Controllers**: No custom controllers yet (routes use closures)
- **Database**: Standard Laravel authentication tables (users, password_reset_tokens, failed_jobs, personal_access_tokens)

### Frontend Architecture
- Blade templating with a master layout pattern (`layouts/app.blade.php`)
- Vite for asset bundling (CSS in `resources/css/app.css`, JS in `resources/js/app.js`)
- Views are currently rendered directly from route closures without controllers

### Development Guidelines
When adding new features:
- Follow Laravel naming conventions (Models: singular PascalCase, Controllers: plural with Controller suffix)
- Consider moving route logic from closures to dedicated controllers as complexity grows
- Place business logic in service classes, not controllers
- Use form requests for complex validation
- Write feature tests for user-facing functionality
- Write unit tests for isolated business logic
