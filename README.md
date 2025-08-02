# EorzeaPhotos

EorzeaPhotos is an Instagram-like platform specifically designed for Final Fantasy XIV players. It allows Warriors of Light to share their adventures, glamours, and memorable moments from across Eorzea and beyond.

## About the Project

EorzeaPhotos provides a dedicated space for the FFXIV community to:
- Share screenshots and in-game photography
- Follow other players and their content
- Comment on and interact with images
- Discover new glamours, locations, and photo opportunities

Built with Laravel and Vue.js, this platform aims to create a seamless and enjoyable experience for FFXIV enthusiasts to connect through visual storytelling.

## System Requirements

### Server Requirements
- PHP 8.3 or higher
- Composer 2.0+
- Node.js 22+ and NPM
- Database: MySQL 8.0+ or PostgreSQL 13+
- Web server: Nginx (maybe Apache, untested and unsupported)
- Redis (recommended for caching and queue processing)

### PHP Extensions
- BCMath
- Ctype
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- Tokenizer
- XML
- GD or Imagick (for image processing)

### Development Environment
For local development, you can use:
- Laravel Sail (Docker-based)
- Laravel Valet (macOS)
- Laravel Herd (Windows/macOS)
- Homestead
- Laragon

## Installation

```bash
# Clone the repository
git clone https://github.com/syntafin/EorzeaPhotos.git

# Navigate to the project directory
cd EorzeaPhotos

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Copy environment file and configure your database
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start the development server
php artisan serve
```

## Contributors

- [Syntafin](https://github.com/syntafin) - Project Lead & Main Developer

## Contributing

We welcome contributions from the community! Here's how you can help:

### Contribution Guidelines

1. **Fork the Repository**
   - Create your own fork of the project

2. **Create a Branch**
   - Create a new branch for your feature or bugfix
   - Use a descriptive name (e.g., `feature/user-profiles` or `fix/image-upload-issue`)

3. **Code Standards**
   - Follow PSR-12 coding standards for PHP
   - Use Laravel best practices
   - Write clean, readable, and well-documented code
   - Include appropriate comments

4. **Testing**
   - Write tests for new features
   - Ensure all tests pass before submitting a pull request
   - Run tests with `php artisan test`

5. **Submit a Pull Request**
   - Provide a clear description of the changes
   - Reference any related issues
   - Be responsive to feedback and be willing to make changes if requested

6. **Reporting Issues**
   - Use the GitHub issue tracker
   - Include detailed steps to reproduce the issue
   - Mention your environment (OS, PHP version, browser, etc.)
   - Include screenshots if applicable

### Development Workflow

1. Install dependencies: `composer install && npm install`
2. Start the development server: `php artisan serve`
3. Watch for changes: `npm run dev`
4. Run tests: `php artisan test`

## License

This project is licensed under the MIT License - see the LICENSE file for details.

---

*May you ever walk in the light of the Crystal.*