# Dashboard Jasa Kaya - Sistem Kemitraan Kehutanan

Dashboard web untuk mengelola kemitraan antara KTHR (Kelompok Tani Hutan Rakyat) dan PBPHH (Pemegang Izin Pemanfaatan Hasil Hutan) di Provinsi Jawa Timur.

## Fitur Utama

- **Dashboard KTHR**: Manajemen profil, permintaan kemitraan, dan kesepakatan
- **Dashboard PBPHH**: Eksplorasi KTHR, kebutuhan material, dan kemitraan
- **Dashboard CDK**: Approval, penjadwalan pertemuan, dan monitoring
- **Dashboard Dinas**: Manajemen sistem, approval PBPHH, dan laporan strategis

## Persyaratan Sistem

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- NPM atau Yarn
- MySQL >= 8.0
- Web Server (Apache/Nginx)

## Instalasi

### 1. Clone Repository

\`\`\`bash
git clone <repository-url>
cd jasa-kaya-dashboard
\`\`\`

### 2. Install Dependencies PHP

\`\`\`bash
composer install
\`\`\`

### 3. Install Dependencies JavaScript

\`\`\`bash
npm install
\`\`\`

### 4. Konfigurasi Environment

\`\`\`bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate
\`\`\`

### 5. Konfigurasi Database

Edit file `.env` dan sesuaikan konfigurasi database:

\`\`\`env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jasa_kaya_dashboard
DB_USERNAME=root
DB_PASSWORD=your_password
\`\`\`

### 6. Buat Database

\`\`\`bash
# Buat database MySQL
mysql -u root -p
CREATE DATABASE jasa_kaya_dashboard;
exit
\`\`\`

### 7. Jalankan Migration dan Seeder

\`\`\`bash
# Jalankan migration
php artisan migrate

# Jalankan seeder
php artisan db:seed --class=RegionSeeder
php artisan db:seed --class=SuperAdminSeeder

# Atau jalankan semua seeder
php artisan db:seed
\`\`\`

### 8. Build Assets

\`\`\`bash
# Development
npm run dev

# Production
npm run build
\`\`\`

### 9. Jalankan Aplikasi

\`\`\`bash
# Development server
php artisan serve

# Aplikasi akan berjalan di http://localhost:8000
\`\`\`

## Akun Default

Setelah menjalankan seeder, Anda dapat login dengan akun berikut:

### Super Administrator
- **Email**: superadmin@dinas.go.id
- **Password**: password123

### Dinas Provinsi
- **Email**: kadis@dishut.jabar.go.id
- **Password**: password123

## Struktur Direktori

\`\`\`
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Models/              # Eloquent Models
│   └── Http/Middleware/     # Custom Middleware
├── database/
│   ├── migrations/          # Database Migrations
│   └── seeders/            # Database Seeders
├── resources/
│   ├── views/              # Blade Templates
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript Files
├── routes/
│   └── web.php             # Web Routes
└── public/                 # Public Assets
\`\`\`

## Pengembangan

### Menjalankan dalam Mode Development

\`\`\`bash
# Terminal 1: Laravel development server
php artisan serve

# Terminal 2: Vite development server (hot reload)
npm run dev
\`\`\`

### Menjalankan Queue (Opsional)

\`\`\`bash
php artisan queue:work
\`\`\`

### Menjalankan Scheduler (Opsional)

Tambahkan ke crontab:

\`\`\`bash
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
\`\`\`

## Testing

\`\`\`bash
# Jalankan unit tests
php artisan test

# Jalankan dengan coverage
php artisan test --coverage
\`\`\`

## Deployment

### 1. Server Requirements

- PHP >= 8.1 dengan extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
- Composer
- Node.js & NPM
- MySQL/MariaDB
- Web Server (Apache/Nginx)

### 2. Deployment Steps

\`\`\`bash
# 1. Upload files ke server
# 2. Install dependencies
composer install --optimize-autoloader --no-dev
npm install && npm run build

# 3. Set permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# 4. Configure environment
cp .env.example .env
php artisan key:generate

# 5. Run migrations
php artisan migrate --force
php artisan db:seed --force

# 6. Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
\`\`\`

### 3. Web Server Configuration

#### Apache (.htaccess)

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
