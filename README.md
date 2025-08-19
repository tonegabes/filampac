# Laravel Filament Starter Kit

A powerful and feature-rich Laravel starter kit built with Filament Admin Panel, designed to jumpstart your application development with a robust set of pre-built features and best practices.

## 📖 Documentation

| Document                                                          | Description                                                             |
| ----------------------------------------------------------------- | ----------------------------------------------------------------------- |
| 📚 [**DEVELOPER_FEATURES_GUIDE.md**](DEVELOPER_FEATURES_GUIDE.md) | **Complete feature documentation** - 200+ features and capabilities     |
| ⚡ [**QUICKSTART.md**](QUICKSTART.md)                             | **5-minute setup guide** - Get running immediately                      |
| 🛠️ [**COMPOSER_COMMANDS.md**](COMPOSER_COMMANDS.md)               | **Custom composer commands** - Cache clearing and development utilities |
| 🌐 [**API_DEVELOPMENT_GUIDE.md**](API_DEVELOPMENT_GUIDE.md)       | **API development guide** - Build APIs for mobile apps and SPAs         |
| 🐳 [**docker-deploy-guide.md**](docker-deploy-guide.md)           | **Docker deployment** - Production deployment guide                     |
| ✅ [**DEPLOYMENT_CHECKLIST.md**](DEPLOYMENT_CHECKLIST.md)         | **Production checklist** - Complete deployment verification             |
| 🔍 [**OVERVIEW.md**](OVERVIEW.md)                                 | **Technical analysis** - Comprehensive project overview                 |
| 📝 [**CHANGELOG.md**](CHANGELOG.md)                               | **Version history** - Track updates and changes                         |
| 🤝 [**CONTRIBUTING.md**](CONTRIBUTING.md)                         | **Contribution guide** - How to contribute to the project               |

## 🌟 Core Features

### Authentication & Authorization

-   🔐 Multi-authentication support
    -   External authentication integration
    -   LDAP authentication (using directorytree/ldaprecord-laravel)
    -   Traditional email/password authentication
-   🔑 Password recovery system
-   👥 Role-based access control (RBAC) using spatie/laravel-permission
-   📝 Comprehensive user management
-   🛡️ Permission management system

### Admin Panel Features

-   🎨 Filament Admin Panel v3
-   📊 Dashboard with customizable widgets
-   👤 User Management Interface
-   🎭 Role & Permissions Management
-   ⚙️ Settings Management
-   📢 Banner notifications system (kenepa/banner)
-   📱 Responsive design

### Developer Tools & Features

-   🔍 Laravel Debugbar for development
-   📊 Laravel Pulse for monitoring
-   📝 Activity Logging (spatie/laravel-activitylog)
-   🎯 PHPStan static analysis
-   🎨 PHP CS Fixer for code styling
-   ✅ PHPUnit for testing
-   🎨 Tailwind CSS for styling
-   💫 Phosphor Icons integration

### Performance & Security

-   🚀 Optimized autoloader configuration
-   🛡️ Built-in security features
-   📦 Package discovery optimization
-   🔒 Role-based middleware protection
-   📝 Comprehensive activity logging

## Technical Stack

### Core Framework

-   PHP 8.2+
-   Laravel 12.x
-   Filament 4.x

### Frontend

-   Tailwind CSS
-   Blade templates
-   Phosphor Icons

### Development Tools

-   Laravel Debugbar
-   Laravel Pulse
-   PHPStan
-   PHP CS Fixer
-   PHPUnit

## 🚀 Getting Started

### Prerequisites

-   **PHP >= 8.2** with extensions: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
-   **Composer** 2.0+
-   **Node.js >= 18** & NPM
-   **Database**: MySQL 8.0+, PostgreSQL 13+, or SQLite 3.8+
-   **Redis** (optional, for caching and queues)

### Quick Installation

1. **Clone the repository:**

    ```bash
    git clone [repository-url] your-project-name
    cd your-project-name
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Environment setup:**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure your database** in `.env` file:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Run migrations and seeders:**

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

6. **Build frontend assets:**

    ```bash
    npm run build
    # For development: npm run dev
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

### 🎯 Default Login Credentials

After running the seeders, you can login with these accounts:

| Role          | Email                 | Password    | Panel Access                   |
| ------------- | --------------------- | ----------- | ------------------------------ |
| Developer     | `developer@email.com` | `developer` | All panels + Telescope + Pulse |
| Administrator | `admin@email.com`     | `admin`     | Admin panel                    |
| Operator      | `operator@email.com`  | `operator`  | Limited admin access           |

### 🔗 Panel URLs

-   **Admin Panel**: <http://localhost:8000/admin>
-   **App Panel**: <http://localhost:8000/app> (to be implemented)
-   **Pulse Monitoring**: <http://localhost:8000/pulse>
-   **Telescope Debug**: <http://localhost:8000/telescope> (local only)

## 💻 Development Workflow

### Development Server

1. **Start the Laravel server:**

    ```bash
    php artisan serve
    ```

2. **Watch for asset changes (in another terminal):**

    ```bash
    npm run dev
    ```

3. **For production builds:**

    ```bash
    npm run build
    ```

### 🧪 Testing & Quality Assurance

#### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run with coverage
php artisan test --coverage
```

#### Code Quality Tools

```bash
# Check code style (without fixing)
composer style:check
# or
./vendor/bin/pint --test

# Fix code style automatically
composer style:fix
# or
./vendor/bin/pint

# Run static analysis
composer code:analyze
# or
./vendor/bin/phpstan analyse --memory-limit=4G
```

### 🗃️ Database Management

```bash
# Reset database with fresh data
php artisan migrate:fresh --seed

# Run specific seeder
php artisan db:seed --class=AuthorizationSeeder

# Rollback migrations
php artisan migrate:rollback

# Check migration status
php artisan migrate:status
```

### 🧹 Cache Management

```bash
# Clear all caches
php artisan optimize:clear

# Individual cache clearing
php artisan cache:clear          # Application cache
php artisan config:clear         # Configuration cache
php artisan route:clear          # Route cache
php artisan view:clear           # Compiled views
php artisan event:clear          # Event cache

# Optimize for production
php artisan optimize
```

### 🐳 Docker Commands

This project includes a custom Docker deployment command:

```bash
# Build and push Docker image
php artisan docker:deploy

# Build only (no push)
php artisan docker:deploy --build-only

# Push only (image already built)
php artisan docker:deploy --push-only --tag existing-tag

# Custom tag
php artisan docker:deploy --tag v1.2.3

# Tag as latest
php artisan docker:deploy --latest

# Dry run (see what would be executed)
php artisan docker:deploy --dry-run
```

For detailed Docker usage, see [docker-deploy-guide.md](docker-deploy-guide.md).

## 📁 Project Structure

### Key Directories

```text
├── app/
│   ├── Console/Commands/          # Custom Artisan commands
│   │   └── DockerDeploy.php       # Docker deployment command
│   ├── Filament/                  # Filament panel configurations
│   │   ├── Admin/                 # Admin panel resources
│   │   │   ├── Resources/         # CRUD interfaces
│   │   │   └── Widgets/           # Dashboard widgets
│   │   ├── App/                   # App panel (to be implemented)
│   │   └── Pages/                 # Custom pages & auth
│   ├── Http/
│   │   ├── Controllers/           # HTTP controllers
│   │   ├── Middleware/            # Custom middleware
│   │   └── Responses/             # Custom response classes
│   ├── Models/                    # Eloquent models with traits
│   ├── Policies/                  # Authorization policies
│   ├── Providers/                 # Service providers
│   ├── Services/                  # Business logic services
│   └── Settings/                  # Application settings classes
├── config/                        # Configuration files
│   ├── auth.php                   # Authentication configuration
│   ├── filament.php               # Filament configuration
│   ├── permission.php             # Permission system config
│   └── pulse.php                  # Monitoring configuration
├── database/
│   ├── migrations/                # Database structure
│   ├── seeders/                   # Sample data creation
│   │   └── AuthorizationSeeder.php # Default users & permissions
│   └── factories/                 # Model factories for testing
├── resources/
│   ├── views/                     # Blade templates
│   ├── css/                       # Stylesheets
│   └── js/                        # JavaScript files
├── routes/
│   ├── web.php                    # Web routes
│   ├── api.php                    # API routes (to be implemented)
│   └── console.php                # Console routes
├── storage/logs/                  # Application logs
├── tests/                         # Test files
├── docker-deploy-guide.md         # Docker deployment guide
├── OVERVIEW.md                    # Comprehensive project analysis
├── DEVELOPER_FEATURES_GUIDE.md    # Complete feature documentation
└── README.md                      # This file
```

### Important Configuration Files

-   **`.env`** - Environment configuration
-   **`composer.json`** - PHP dependencies and scripts
-   **`package.json`** - Node.js dependencies and build scripts
-   **`phpstan.neon`** - Static analysis configuration
-   **`phpunit.xml`** - Testing configuration
-   **`tailwind.config.js`** - Tailwind CSS configuration
-   **`vite.config.js`** - Asset building configuration

## 📊 Monitoring & Debugging

### Application Monitoring

This starter kit includes comprehensive monitoring tools:

#### Laravel Pulse (`/pulse`)

Real-time application monitoring dashboard showing:

-   **Performance Metrics** - Request duration, memory usage
-   **Database Queries** - Slow query detection and optimization
-   **Background Jobs** - Queue processing status and failures
-   **Exceptions** - Error tracking and frequency
-   **User Sessions** - Active user monitoring

#### Laravel Telescope (`/telescope`)

Development debugging tool (local environment only):

-   **Request Inspection** - HTTP request/response debugging
-   **Database Query Analysis** - Query performance optimization
-   **Mail Monitoring** - Email delivery tracking
-   **Cache Analysis** - Cache hit/miss monitoring
-   **Event Tracking** - Application event debugging

### Health Monitoring

The application includes health check endpoints:

-   **Application Health**: `/up` - Basic application status
-   **Database Health** - Automatic database connectivity checks
-   **Cache Health** - Cache system verification
-   **Queue Health** - Queue worker monitoring

### Logging & Debugging

#### Log Locations

```bash
# Application logs
storage/logs/laravel.log

# Web server logs (if using Apache/Nginx)
/var/log/apache2/error.log
/var/log/nginx/error.log
```

#### Debug Tools

```bash
# Enable debug mode (development only)
# Set in .env: APP_DEBUG=true

# View application logs
tail -f storage/logs/laravel.log

# Clear logs
> storage/logs/laravel.log
```

### Troubleshooting Common Issues

#### Permission Issues

```bash
# Fix storage permissions
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

#### Cache Issues

```bash
# Clear all caches
php artisan optimize:clear

# Rebuild cache for production
php artisan optimize
```

#### Database Issues

```bash
# Check database connection
php artisan db:show

# Reset database
php artisan migrate:fresh --seed
```

#### Asset Build Issues

```bash
# Clear node modules and reinstall
rm -rf node_modules package-lock.json
npm install

# Rebuild assets
npm run build
```

## 🚀 Available Commands & Features

### Standard Laravel Commands

```bash
# Application Management
php artisan serve                    # Start development server
php artisan migrate                  # Run database migrations
php artisan migrate:fresh --seed     # Reset database with sample data
php artisan db:seed                  # Run database seeders

# Cache Management
php artisan cache:clear              # Clear application cache
php artisan config:clear             # Clear config cache
php artisan route:clear              # Clear route cache
php artisan view:clear               # Clear compiled views
php artisan optimize                 # Optimize for production
php artisan optimize:clear           # Clear all optimization

# Queue Management
php artisan queue:work               # Start queue worker
php artisan queue:restart            # Restart queue workers
php artisan schedule:run             # Run scheduled tasks
```

### Custom Project Commands

```bash
# Docker Deployment
php artisan docker:deploy            # Build and deploy Docker images
php artisan docker:deploy --help     # See all Docker options

# File Generation
php artisan make:filament-resource ModelName    # Create Filament resource
php artisan make:model ModelName -mfp          # Model with migration, factory, policy
php artisan make:policy ModelPolicy            # Create authorization policy
```

### Development Tools

```bash
# Code Quality
composer style:check                  # Check code formatting
composer style:fix                    # Fix code formatting
composer code:analyze                # Run PHPStan analysis

# Testing
php artisan test                     # Run test suite
php artisan test --coverage          # Run with coverage report

# Monitoring
# Visit /pulse for application monitoring
# Visit /telescope for debugging (local only)
```

## 🔧 Customization & Extension

### Adding New Filament Resources

1. **Create a new model and resource:**

    ```bash
    # Create model with migration, factory, and policy
    php artisan make:model Product -mfp

    # Create Filament resource
    php artisan make:filament-resource Product
    ```

2. **Add permissions for the new resource:**

    Edit `database/seeders/AuthorizationSeeder.php`:

    ```php
    $productPermissions = [
        'view_any_product', 'view_product', 'create_product',
        'update_product', 'delete_product'
    ];

    foreach ($productPermissions as $permission) {
        Permission::createOrFirst(['name' => $permission])
            ->syncRoles([$admRole, $devRole]);
    }
    ```

3. **Run the seeder:**

    ```bash
    php artisan db:seed --class=AuthorizationSeeder
    ```

### Customizing the Admin Panel

#### Adding Navigation Groups

```php
// In your Resource class
protected static ?string $navigationGroup = 'Catalog Management';
protected static ?int $navigationSort = 2;
protected static ?string $navigationIcon = 'heroicon-o-cube';
```

#### Creating Custom Pages

```bash
# Create a custom Filament page
php artisan make:filament-page CustomDashboard

# Create a custom widget
php artisan make:filament-widget OverviewWidget
```

#### Customizing Dashboard Widgets

Register widgets in `AdminPanelProvider.php`:

```php
->widgets([
    Widgets\AccountWidget::class,
    Widgets\FilamentInfoWidget::class,
    App\Filament\Widgets\CustomWidget::class,
])
```

### Environment Configuration

#### Key Environment Variables

```env
# Application
APP_NAME="Your App Name"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Cache & Session
CACHE_DRIVER=redis
SESSION_DRIVER=redis
REDIS_HOST=127.0.0.1

# LDAP Authentication (optional)
LDAP_ENABLED=false
LDAP_HOST=ldap://your-ldap-server
LDAP_USERNAME="cn=user,dc=local,dc=com"
LDAP_PASSWORD=secret

# Docker Registry
DOCKER_REGISTRY=registry.your-domain.com/your-project

# Monitoring
PULSE_ENABLED=true
TELESCOPE_ENABLED=false  # Only enable in development
```

### Adding API Endpoints

1. **Create API routes in `routes/api.php`:**

    ```php
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::apiResource('users', Api\UserController::class);
        Route::get('me', [Api\AuthController::class, 'me']);
    });
    ```

2. **Create API controllers:**

    ```bash
    php artisan make:controller Api/UserController --api
    ```

3. **Add Sanctum tokens to users for API access.**

## 📚 Documentation & Resources

### Project Documentation

-   **[DEVELOPER_FEATURES_GUIDE.md](DEVELOPER_FEATURES_GUIDE.md)** - Comprehensive feature list and developer guide
-   **[OVERVIEW.md](OVERVIEW.md)** - Detailed architectural analysis and technical overview
-   **[docker-deploy-guide.md](docker-deploy-guide.md)** - Docker deployment instructions

### External Documentation

-   **[Laravel Documentation](https://laravel.com/docs)** - Laravel framework documentation
-   **[Filament Documentation](https://filamentphp.com/docs)** - Filament admin panel documentation
-   **[Spatie Packages](https://spatie.be/docs)** - Documentation for Spatie packages used

### Development Resources

-   **[Laravel Best Practices](https://github.com/alexeymezenin/laravel-best-practices)** - Laravel coding standards
-   **[Filament Plugins](https://filamentphp.com/plugins)** - Additional Filament plugins
-   **[PHP Standards (PSR-12)](https://www.php-fig.org/psr/psr-12/)** - PHP coding standards

## 🤝 Contributing

We welcome contributions to improve this starter kit! Please:

1. **Fork the repository**
2. **Create a feature branch**: `git checkout -b feature/your-feature-name`
3. **Follow coding standards**: Run `composer pint:fix` before committing
4. **Write tests**: Add tests for new functionality
5. **Submit a pull request**: Include a clear description of changes

### Code Standards

-   Follow **PSR-12** coding standards
-   Use **strict typing**: `declare(strict_types=1)`
-   Write **comprehensive tests** for new features
-   Document **public methods** and complex logic
-   Run **static analysis**: `composer code:analyze`

## 📝 License

This project is licensed under the **MIT License** - see the [LICENSE.md](LICENSE.md) file for details.

## 🆘 Support

### Getting Help

-   **Documentation**: Check the documentation files in this repository
-   **Issues**: Open an issue in the project's issue tracker for bugs and feature requests
-   **Discussions**: Use GitHub Discussions for questions and community support

### Community

-   **Laravel Community**: <https://laravel.com/community>
-   **Filament Discord**: <https://discord.gg/filament>
-   **Spatie Resources**: <https://spatie.be/open-source>

## 🔒 Security

If you discover any security-related issues, please:

1. **DO NOT** open a public issue
2. **Email the security team directly** instead of using the issue tracker
3. **Provide detailed information** about the vulnerability
4. **Allow time for the issue to be addressed** before public disclosure

## ⭐ Features Overview

This starter kit provides:

-   ✅ **Authentication System** - Multi-auth with LDAP support
-   ✅ **Admin Panel** - Complete Filament admin interface
-   ✅ **User Management** - RBAC with roles and permissions
-   ✅ **Monitoring** - Pulse and Telescope integration
-   ✅ **File Management** - Media library and document generation
-   ✅ **Background Jobs** - Queue system with monitoring
-   ✅ **Health Checks** - Application health monitoring
-   ✅ **Docker Support** - Production deployment ready
-   ✅ **Code Quality** - PHPStan, Pint, and testing tools
-   ✅ **Multi-language** - i18n support (EN/PT-BR)

---

**Ready to build something amazing? 🚀**

Start with this solid foundation and focus on building your unique business features!
