# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12 application using:
- PHP 8.2+
- Pest for testing (not PHPUnit)
- Vite for asset bundling
- Tailwind CSS 4.0
- SQLite database (default)

## Common Commands

### Development
```bash
# Start full development environment (server, queue, logs, vite)
composer dev

# Start Laravel development server only
php artisan serve

# Start Vite dev server for frontend assets
npm run dev

# Build frontend assets for production
npm run build
```

### Testing
```bash
# Run all tests (uses Pest, not PHPUnit)
composer test
# Or directly: php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run with coverage
php artisan test --coverage
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Format specific files
./vendor/bin/pint app/Models/User.php
```

### Database
```bash
# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Fresh migration (drop all tables and re-migrate)
php artisan migrate:fresh

# Fresh migration with seeding
php artisan migrate:fresh --seed

# Create new migration
php artisan make:migration create_table_name
```

### Other Artisan Commands
```bash
# View application logs
php artisan pail

# Clear various caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Tinker (REPL)
php artisan tinker

# Create models, controllers, etc.
php artisan make:model ModelName
php artisan make:controller ControllerName
php artisan make:middleware MiddlewareName
```

## Architecture

### Application Bootstrap
- `bootstrap/app.php` contains the application configuration using Laravel 12's new bootstrap pattern
- Routes are configured via `withRouting()` method
- Middleware is configured via `withMiddleware()` method
- Exception handling via `withExceptions()` method
- Health check endpoint available at `/up`

### Directory Structure
- `app/Http/` - HTTP layer (controllers, middleware)
- `app/Models/` - Eloquent models
- `app/Providers/` - Service providers
- `routes/web.php` - Web routes
- `routes/console.php` - Console commands
- `config/` - Configuration files
- `database/migrations/` - Database migrations
- `database/factories/` - Model factories
- `database/seeders/` - Database seeders
- `resources/css/` - CSS assets (Tailwind)
- `resources/js/` - JavaScript assets
- `tests/Feature/` - Feature tests
- `tests/Unit/` - Unit tests

### Testing Configuration
- Uses Pest testing framework (not PHPUnit)
- Test configuration in `tests/Pest.php`
- Tests run with SQLite in-memory database
- Environment set to `testing` during test runs
- Queue connection is `sync` for tests
