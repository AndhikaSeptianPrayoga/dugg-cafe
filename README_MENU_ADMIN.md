# Sistem Admin Menu Produk Dugg Coffee

## Overview
Sistem admin untuk mengelola menu produk dengan 4 kategori utama:
- **Seasoning** - Tambahan/bumbu untuk minuman
- **Signature** - Menu signature khas Dugg Coffee
- **Beverages** - Minuman-minuman
- **Main Course** - Makanan utama

## Fitur Utama

### 1. Kelola Produk (CRUD)
- **Create**: Tambah produk baru dengan upload gambar
- **Read**: Lihat daftar produk dengan filter dan search
- **Update**: Edit informasi produk
- **Delete**: Hapus produk

### 2. Upload Gambar
- Support format: JPG, PNG, GIF
- Maksimal ukuran: 2MB
- Auto resize dan optimization
- Preview gambar sebelum upload

### 3. Filter & Search
- Filter berdasarkan kategori
- Pencarian berdasarkan nama produk
- Pagination untuk performa

### 4. Status Produk
- Aktif/Nonaktif produk
- Hanya produk aktif yang tampil di frontend

## Struktur Database

### Tabel Products
```sql
- id (Primary Key)
- name (Nama produk)
- description (Deskripsi)
- price (Harga dalam rupiah)
- image (Path gambar)
- category (Enum: seasoning, signature, beverages, main-course)
- is_active (Boolean: status aktif/nonaktif)
- created_at
- updated_at
```

## Files yang Dibuat/Dimodifikasi

### 1. Database
- `database/migrations/2025_05_30_070728_create_products_table.php`
- `database/seeders/ProductSeeder.php`

### 2. Model & Controller
- `app/Models/Product.php`
- `app/Http/Controllers/ProductController.php`
- `app/Http/Controllers/MenuController.php`
- `app/Http/Controllers/HomeController.php`

### 3. Views Admin
- `resources/views/admin/products/index.blade.php`
- `resources/views/admin/products/create.blade.php`
- `resources/views/admin/products/edit.blade.php`
- `resources/views/admin/products/show.blade.php`

### 4. Views Frontend
- `resources/views/welcome.blade.php` (Updated)
- `resources/views/menu.blade.php` (Updated)

### 5. Routes
- `routes/web.php` (Updated)

## Cara Menggunakan

### 1. Setup Database
```bash
# Jalankan migration
php artisan migrate

# Seed data sample (opsional)
php artisan db:seed --class=ProductSeeder

# Buat storage link untuk upload gambar
php artisan storage:link
```

### 2. Akses Admin Panel
1. Login ke sistem
2. Buka `/admin/products` untuk kelola produk
3. Gunakan tombol "Tambah Produk" untuk menambah produk baru

### 3. Frontend
- Homepage: Menampilkan 6 produk featured
- Menu page: Menampilkan semua produk aktif berdasarkan kategori

## API Endpoints

### Admin Routes (Perlu Authentication)
- `GET /admin/products` - Daftar produk
- `GET /admin/products/create` - Form tambah produk
- `POST /admin/products` - Simpan produk baru
- `GET /admin/products/{id}` - Detail produk
- `GET /admin/products/{id}/edit` - Form edit produk
- `PUT /admin/products/{id}` - Update produk
- `DELETE /admin/products/{id}` - Hapus produk

### Frontend Routes
- `GET /` - Homepage dengan featured products
- `GET /menu` - Halaman menu lengkap
- `GET /api/menu/{category}` - API untuk get produk by kategori (JSON)

## Validasi

### Produk Form Validation
- **name**: Required, string, max 255 characters
- **description**: Optional, string
- **price**: Required, numeric, minimum 0
- **category**: Required, must be one of: seasoning, signature, beverages, main-course
- **image**: Optional, image file (jpg,png,gif), max 2MB
- **is_active**: Boolean

## Fitur Model Product

### Accessors
- `getImageUrlAttribute()` - URL gambar atau default image
- `getCategoryNameAttribute()` - Nama kategori yang readable
- `getFormattedPriceAttribute()` - Format harga dengan Rupiah

### Scopes
- `scopeActive()` - Filter produk aktif
- `scopeByCategory()` - Filter berdasarkan kategori

## Sample Data
Sistem dilengkapi dengan sample data (15 produk) yang mencakup semua kategori untuk testing.

## Security Features
- Authentication required untuk admin routes
- File upload validation
- CSRF protection
- Input sanitization

## Responsive Design
- Admin panel responsive untuk desktop dan mobile
- Frontend menu responsive untuk semua device

## Tips Penggunaan
1. Gunakan gambar dengan rasio 1:1 untuk hasil terbaik
2. Aktifkan/nonaktifkan produk sesuai ketersediaan
3. Gunakan deskripsi yang menarik untuk marketing
4. Update harga secara berkala sesuai kondisi pasar
5. Gunakan filter dan search untuk mengelola produk dengan mudah 