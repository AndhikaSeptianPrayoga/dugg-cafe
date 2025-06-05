#!/bin/bash

# Jalankan migrasi database
php artisan migrate --force

# Generate application key jika belum ada
php artisan key:generate --force

# Optimize aplikasi untuk production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Install dependencies jika belum ada
npm install

# Jalankan Vite dev server di background
npm run dev -- --host=0.0.0.0 --port=5173 &

# Build assets untuk production (fallback)
npm run build

# Jalankan web server
php artisan serve --host=0.0.0.0 --port=$PORT 