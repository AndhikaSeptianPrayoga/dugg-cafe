# 🚨 Railway Healthcheck Failure - Troubleshooting Guide

## Problem: Healthcheck Failed - Service Unavailable

**Gejala:**
- Build berhasil ✅
- Deploy berhasil ✅ 
- Healthcheck gagal ❌ (Service unavailable pada path `/`)

## 🔍 Langkah Troubleshooting

### STEP 1: Check Build Logs
1. **Klik "View logs"** di deployment yang failed
2. **Scroll ke bagian paling bawah** untuk lihat error terakhir
3. **Cari error message** seperti:
   ```
   ❌ Illuminate\Encryption\MissingAppKeyException
   ❌ SQLSTATE connection refused
   ❌ php artisan serve failed
   ```

### STEP 2: Verify Environment Variables
**Klik tab "Variables"** dan pastikan ada:

```env
✅ APP_NAME=Dugg Coffee
✅ APP_ENV=production  
✅ APP_DEBUG=false
✅ APP_KEY=base64:XrYHMIlbEatzKL9xMjTVqVw48TzMif++m6Yd0Z27RGM=
✅ APP_URL=https://web-production-10ac5.up.railway.app
✅ LOG_CHANNEL=stderr

# Database (otomatis dari MySQL service):
✅ MYSQLHOST
✅ MYSQLPORT  
✅ MYSQLDATABASE
✅ MYSQLUSER
✅ MYSQLPASSWORD
```

**⚠️ PENTING:** Ganti `APP_URL` dengan domain Railway Anda yang aktual!

### STEP 3: Fix APP_KEY Issue (Most Common)
Jika error `MissingAppKeyException`:

1. **Generate new APP_KEY:**
```bash
# Di local terminal
php artisan key:generate --show
```

2. **Copy output** (contoh: `base64:xyz123...`)
3. **Update di Railway Variables:** `APP_KEY=base64:xyz123...`
4. **Redeploy**

### STEP 4: Fix Database Connection
Jika error database connection:

1. **Pastikan MySQL service running** di Railway dashboard
2. **Check MySQL variables** ada semua (MYSQLHOST, etc.)
3. **Wait 2-3 minutes** untuk MySQL initialization
4. **Redeploy** setelah MySQL ready

### STEP 5: Optimize Railway Config
Update `railway.json` untuk healthcheck yang lebih patient:

```json
{
  "$schema": "https://railway.app/railway.schema.json",
  "build": {
    "builder": "nixpacks",
    "buildCommand": "composer install --no-dev --optimize-autoloader && npm ci && npm run build"
  },
  "deploy": {
    "startCommand": "php artisan config:clear && php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=$PORT",
    "healthcheckPath": "/",
    "healthcheckTimeout": 600,
    "restartPolicyType": "ON_FAILURE"
  }
}
```

**Perubahan:**
- ✅ Added `php artisan config:clear` 
- ✅ Increased `healthcheckTimeout` to 600 seconds (10 minutes)

## 🎯 Quick Fix Steps

### Option A: Manual Debug (Recommended)
1. **Check logs** untuk exact error message
2. **Fix specific issue** (APP_KEY, database, etc.)
3. **Redeploy**

### Option B: Reset Environment 
1. **Delete all environment variables** di Railway
2. **Re-add one by one** from `env-railway-example.txt`
3. **Ensure APP_URL matches** your Railway domain
4. **Redeploy**

### Option C: Simple Healthcheck
Temporary disable healthcheck untuk debug:

```json
{
  "deploy": {
    "startCommand": "php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT",
    "healthcheckPath": null,
    "restartPolicyType": "ON_FAILURE"  
  }
}
```

## 🔧 Common Solutions

### 1. APP_KEY Missing/Invalid
```bash
# Generate proper APP_KEY
php artisan key:generate --show

# Output: base64:RandomGeneratedKey123=
# Add to Railway Variables: APP_KEY=base64:RandomGeneratedKey123=
```

### 2. Database Not Ready
- Wait 2-3 minutes after creating MySQL service
- Check MySQL service status is "Active"
- All MYSQL* variables should be auto-populated

### 3. Laravel Startup Issues
```bash
# Debug via Railway CLI (if available)
railway run php artisan config:clear
railway run php artisan migrate --force
railway run php artisan serve --host=0.0.0.0 --port=8000
```

### 4. Port Binding Issues
Make sure `railway.json` uses `$PORT`:
```json
"startCommand": "php artisan serve --host=0.0.0.0 --port=$PORT"
```

## 🚀 After Fix Steps

1. **Update railway.json** dengan fix yang diperlukan
2. **Commit & push** ke GitHub:
```bash
git add .
git commit -m "Fix Railway healthcheck configuration"
git push origin main
```

3. **Redeploy** di Railway
4. **Monitor logs** untuk memastikan startup berhasil
5. **Test homepage** setelah healthcheck pass

## 📊 Expected Success Logs

Ketika berhasil, logs akan show:
```
✅ Configuration cached successfully
✅ Routes cached successfully  
✅ Migrations run successfully
✅ Storage link created
✅ Laravel development server started: http://0.0.0.0:$PORT
✅ Healthcheck passed on path: /
```

## 🆘 Still Having Issues?

1. **Share exact error message** dari build logs
2. **Check Railway Discord** untuk community help
3. **Try alternative deployment methods** (Heroku, DigitalOcean, etc.)

---

**💡 Pro Tip:** Healthcheck failure biasanya karena APP_KEY missing atau database connection issue. Fix yang paling sering berhasil adalah regenerate APP_KEY dan pastikan MySQL service sudah ready. 