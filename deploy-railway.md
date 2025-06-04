# 🚀 Panduan Deploy Dugg Coffee ke Railway.com - GRATIS

## Mengapa Railway.com?

✅ **GRATIS** - $5 credit per bulan cukup untuk website kecil-menengah  
✅ **Mudah Setup** - Auto-detect Laravel project  
✅ **Custom Domain** - Support domain sendiri  
✅ **Auto-scaling** - Scale otomatis berdasarkan traffic  
✅ **Database Built-in** - MySQL, PostgreSQL, Redis tersedia  

## 📋 Persiapan Sebelum Deploy

### 1. Pastikan Project Siap
```bash
# Test project di local
php artisan serve
npm run dev

# Pastikan tidak ada error
php artisan config:clear
php artisan cache:clear
```

### 2. Generate APP_KEY
```bash
php artisan key:generate --show
# Copy output untuk digunakan di Railway
```

## 🎯 Langkah Deploy ke Railway

### STEP 1: Buat Akun Railway
1. Kunjungi [railway.app](https://railway.app)
2. Klik **"Start a New Project"**
3. Sign up dengan **GitHub account** (Wajib!)
4. ✅ Dapatkan **$5 credit GRATIS** setiap bulan

### STEP 2: Push Code ke GitHub
```bash
# Jika belum ada repo GitHub
git init
git add .
git commit -m "Initial commit - Dugg Coffee"

# Buat repo baru di GitHub, lalu:
git remote add origin https://github.com/username/dugg-coffee.git
git push -u origin main
```

### STEP 3: Deploy Project di Railway
1. **Login ke Railway Dashboard**
2. Klik **"New Project"**
3. Pilih **"Deploy from GitHub repo"**
4. **Select Repository** → Pilih repo dugg-coffee
5. ✅ Railway akan **otomatis detect Laravel** dan mulai build

### STEP 4: Add MySQL Database
1. **Tunggu build selesai** (2-3 menit pertama kali)
2. Di project dashboard, klik **"New Service"**
3. Pilih **"Database" → "MySQL"**
4. ✅ Railway akan otomatis:
   - Setup MySQL server
   - Generate environment variables
   - Connect ke Laravel app

### STEP 5: Configure Environment Variables
1. **Klik service Laravel** di dashboard
2. Go ke tab **"Variables"**
3. **Add variables** berikut satu per satu:

```env
APP_NAME=Dugg Coffee
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:xxxxx
APP_URL=https://dugg-coffee-production.up.railway.app

LOG_CHANNEL=stderr
LOG_LEVEL=info

# Database variables akan otomatis tersedia dari MySQL service:
# MYSQLHOST, MYSQLPORT, MYSQLDATABASE, MYSQLUSER, MYSQLPASSWORD
```

**⚠️ PENTING:** Ganti `APP_KEY` dengan output dari `php artisan key:generate --show`

### STEP 6: Redeploy dengan Environment Variables
1. **Klik tab "Deployments"**
2. Klik **"Redeploy"** button
3. ✅ Tunggu deployment selesai (~2-3 menit)

### STEP 7: Check Deployment Status
1. **Monitor build logs** di tab "Deployments"
2. **Check health** - pastikan status "Healthy" ✅
3. **Click domain URL** untuk test website

## 🔧 Post-Deployment Setup

### 1. Seed Database (Opsional)
Jika ingin data sample untuk testing:

1. **Open Railway CLI** (atau via web terminal jika tersedia)
2. Run commands:
```bash
# Connect to your app
railway run php artisan db:seed --class=ProductSeeder
```

### 2. Create Admin User
```bash
# Via Railway CLI
railway run php artisan tinker

# Atau manual via database
```

### 3. Test Website Features
- ✅ **Homepage**: Domain/
- ✅ **Menu**: Domain/menu  
- ✅ **Admin**: Domain/admin/products (need login)
- ✅ **Blog**: Domain/blog

## 🎨 Custom Domain Setup (Opsional)

### Jika Punya Domain Sendiri:
1. **Tab "Settings" → "Networking"**
2. Klik **"Custom Domain"**
3. **Input domain** (contoh: duggcoffee.com)
4. **Update DNS** di domain provider:
   ```
   CNAME: your-app.up.railway.app
   ```

## 💰 Monitoring Usage & Costs

### Free Tier Limits:
- **$5 credit/bulan** - Reset tiap bulan
- **Cukup untuk:**
  - Website dengan 1000-5000 visitors/bulan
  - Database MySQL kecil-menengah
  - Auto-scaling berdasarkan traffic

### Monitoring:
1. **Dashboard Railway** → tab "Metrics"
2. Monitor **CPU, Memory, Network usage**
3. Check **remaining credit** di billing

## 🚨 Troubleshooting Common Issues

### Build Failed - Nixpacks Config Error
```
❌ Error: Failed to parse Nixpacks config file `nixpacks.toml`
```
**Solusi:**
- ✅ **SUDAH DIPERBAIKI** - File nixpacks.toml yang bermasalah sudah dihapus
- Railway akan auto-detect Laravel project
- Gunakan `railway.json` untuk konfigurasi custom

### Build Failed - Composer Error
```
❌ Build failed: composer install error
```
**Solusi:**
- Check PHP version di composer.json
- Pastikan semua dependencies valid
- Coba redeploy dari commit terbaru

### Database Connection Error
```
❌ SQLSTATE[HY000] [2002] Connection refused
```
**Solusi:**
- Pastikan MySQL service running
- Check environment variables MYSQL*
- Tunggu 1-2 menit untuk database initialization
- Redeploy setelah add database

### Asset Loading Issues
```
❌ CSS/JS files not loading
```
**Solusi:**
- Pastikan `npm run build` success di build logs
- Check APP_URL environment variable
- Pastikan public/build folder ter-generate

### Migration Error
```
❌ php artisan migrate failed
```
**Solusi:**
- Manual migration via Railway CLI:
```bash
railway run php artisan migrate --force
```
- Check database permissions
- Pastikan MySQL service accessible

### Laravel Artisan Serve Port Error
```
❌ Port binding failed
```
**Solusi:**
- ✅ **SUDAH DIPERBAIKI** - railway.json menggunakan `--port=$PORT`
- Railway otomatis assign port yang tersedia

## 📊 Optimize Performance

### 1. Enable Caching
Environment variables untuk production:
```env
CACHE_DRIVER=file
SESSION_DRIVER=file
VIEW_CACHE=true
ROUTE_CACHE=true
CONFIG_CACHE=true
```

### 2. Optimize Images
- Upload images dalam ukuran optimal
- Gunakan WebP format jika memungkinkan

### 3. Database Optimization
- Regular cleanup unused data
- Monitor query performance

### 4. Monitor Build Times
- Check build logs untuk identify bottlenecks
- Optimize composer dan npm dependencies

## 🔄 Auto-Deployment Workflow

### Git Push = Auto Deploy
```bash
# Local development
git add .
git commit -m "Update feature"
git push origin main

# Railway otomatis:
# 1. Detect push ke main branch
# 2. Trigger build process
# 3. Run composer install
# 4. Run npm build
# 5. Deploy to production
# 6. Run migrations
```

## 🎉 Selamat!

✅ **Website Dugg Coffee berhasil online di Railway!**

### What's Next?
1. **Share URL** ke tim dan klien
2. **Setup monitoring** untuk track performance
3. **Regular updates** via GitHub push
4. **Scale up** jika traffic bertambah

### Konfigurasi yang Sudah Optimal:
- ✅ Auto-detect Laravel project (tanpa nixpacks.toml bermasalah)
- ✅ railway.json dengan build dan start command optimal
- ✅ Procfile sebagai backup
- ✅ Environment variables template
- ✅ Database configuration optimized untuk MySQL

---

**🎯 Tips Pro:**
- Gunakan staging environment untuk testing
- Setup automated testing sebelum deploy
- Monitor error logs regular via Railway dashboard
- Backup database regular (export via Railway)

**🆘 Need Help?** 
- Railway Docs: [docs.railway.app](https://docs.railway.app)
- Railway Discord Community
- GitHub Issues di repository ini

**Happy Deploying! 🚀** 