# Dugg Coffee - Laravel Livewire Starter Kit

Sistem manajemen website dan admin panel untuk Dugg Coffee yang dibangun dengan Laravel 12 dan Livewire.

## 🚀 Fitur Utama

### Admin Panel
- **Kelola Produk**: CRUD produk menu dengan 4 kategori (Seasoning, Signature, Beverages, Main Course)
- **Kelola Testimonial**: Manajemen review pelanggan
- **Kelola Blog**: Sistem blog dengan status publish/draft
- **Dashboard**: Analytics dan overview

### Frontend Website
- **Homepage**: Menampilkan featured products dan informasi cafe
- **Menu**: Katalog produk dengan filter kategori
- **Blog**: Artikel dan berita
- **Contact**: Form kontak pelanggan
- **Lokasi & Cerita**: Informasi tentang cafe

## 🛠️ Teknologi

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Livewire + Bootstrap 5.3.3
- **Database**: MySQL (Production) / SQLite (Development)
- **Asset Building**: Vite
- **Styling**: Bootstrap + SASS

## 📋 Requirements

- PHP 8.2 atau lebih tinggi
- Composer
- Node.js 20 atau lebih tinggi
- MySQL (untuk production)

## 🏗️ Setup Local Development

1. **Clone Repository**
```bash
git clone <repository-url>
cd dugg-coffee
```

2. **Install Dependencies**
```bash
composer install
npm install
```

3. **Environment Configuration**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Database Setup**
```bash
# Buat database SQLite untuk development
touch database/database.sqlite

# Jalankan migrasi
php artisan migrate

# Seed data (opsional)
php artisan db:seed
```

5. **Storage Link**
```bash
php artisan storage:link
```

6. **Build Assets**
```bash
npm run build
# atau untuk development
npm run dev
```

7. **Jalankan Server**
```bash
php artisan serve
```

## 🚀 Deploy ke Railway.com (GRATIS)

### Persiapan Deployment

1. **Push ke GitHub**
```bash
git add .
git commit -m "Prepare for Railway deployment"
git push origin main
```

### Setup di Railway

1. **Buat Akun Railway**
   - Kunjungi [railway.app](https://railway.app)
   - Sign up dengan GitHub account
   - Dapatkan $5 credit gratis

2. **Deploy Project**
   - Klik "New Project" di dashboard Railway
   - Pilih "Deploy from GitHub repo"
   - Pilih repository project ini
   - Railway akan otomatis detect Laravel dan setup build

3. **Add MySQL Database**
   - Di project dashboard, klik "Add Service"
   - Pilih "MySQL"
   - Railway akan otomatis create database dan provide environment variables

4. **Set Environment Variables**
   - Klik service Laravel Anda
   - Go ke tab "Variables"
   - Add variables berikut:
   ```
   APP_NAME=Dugg Coffee
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=base64:xxxxx (generate dengan: php artisan key:generate --show)
   APP_URL=https://your-app.up.railway.app
   
   DB_CONNECTION=mysql
   # MySQL variables akan otomatis tersedia dari service MySQL
   ```

5. **Custom Domain (Opsional)**
   - Di tab "Settings" > "Networking"
   - Add custom domain jika punya

### Important Notes untuk Railway

- ✅ Project sudah include `railway.json` dan `nixpacks.toml` untuk konfigurasi optimal
- ✅ Database default sudah diset ke MySQL untuk production
- ✅ Build process sudah teroptimasi untuk Railway
- ✅ Auto migration dan storage link pada deployment

## 🔧 Konfigurasi Post-Deployment

1. **Create Admin User**
   Setelah deploy, buat user admin melalui tinker:
   ```bash
   # Via Railway CLI atau database seeder
   php artisan tinker
   ```

2. **Upload Sample Data**
   ```bash
   php artisan db:seed --class=ProductSeeder
   ```

## 🗂️ Struktur Project

```
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Models/              # Eloquent Models
│   └── Livewire/           # Livewire Components
├── database/
│   ├── migrations/         # Database Migrations
│   └── seeders/           # Database Seeders
├── resources/
│   ├── views/             # Blade Templates
│   ├── css/               # Stylesheets
│   └── js/                # JavaScript
├── routes/
│   ├── web.php            # Web Routes
│   └── auth.php           # Auth Routes
├── public/                # Public Assets
├── railway.json           # Railway Config
├── nixpacks.toml         # Nixpacks Config
└── Procfile              # Process File
```

## 🎯 API Endpoints

### Admin Routes (Authentication Required)
- `GET /admin/products` - Kelola produk
- `GET /admin/testimonials` - Kelola testimonial
- `GET /admin/blogs` - Kelola blog

### Frontend Routes
- `GET /` - Homepage
- `GET /menu` - Menu produk
- `GET /blog` - Blog posts
- `GET /kontak` - Contact form
- `GET /lokasi` - Lokasi info
- `GET /cerita` - About us

### API Routes
- `GET /api/menu/{category}` - Get products by category (JSON)

## 💰 Railway Pricing & Limits

### Hobby Plan (GRATIS)
- $5 credit per bulan
- Cukup untuk website kecil-menengah
- Custom domain support
- Auto-scaling
- 99.9% uptime

### Pro Plan ($20/bulan)
- Unlimited usage
- Priority support
- Advanced metrics

## 🐛 Troubleshooting

### Common Issues pada Railway

1. **Build Timeout**
   - Periksa build logs di Railway dashboard
   - Ensure all dependencies di composer.json dan package.json

2. **Database Connection Error**
   - Pastikan MySQL service sudah running
   - Check environment variables

3. **Asset Loading Issues**
   - Run `npm run build` untuk production assets
   - Check Vite configuration

4. **Migration Errors**
   - Check database permissions
   - Ensure MySQL service accessible

## 📞 Support

Jika ada kendala dalam deployment atau setup, silakan:
1. Check Railway documentation: [docs.railway.app](https://docs.railway.app)
2. Railway Discord community
3. GitHub issues pada repository ini

## 📝 License

MIT License - feel free to modify and use for your projects.

---

**Happy Deploying! 🚀**
