#!/bin/bash

echo "🚀 Persiapan Deploy Dugg Coffee ke Railway.com"
echo "=============================================="

# Check if git is initialized
if [ ! -d ".git" ]; then
    echo "📁 Initializing Git repository..."
    git init
fi

# Add all files
echo "📦 Adding files to Git..."
git add .

# Commit changes
echo "💾 Committing changes..."
git commit -m "Prepare for Railway deployment - $(date)"

# Check if remote exists
if ! git remote get-url origin > /dev/null 2>&1; then
    echo "⚠️  Please add your GitHub repository URL:"
    echo "   git remote add origin https://github.com/username/your-repo.git"
    echo "   git push -u origin main"
else
    echo "🚀 Pushing to GitHub..."
    git push origin main
fi

echo ""
echo "✅ Project siap untuk deploy ke Railway!"
echo ""
echo "📋 Langkah selanjutnya:"
echo "1. Buka https://railway.app"
echo "2. Login dengan GitHub"
echo "3. Klik 'New Project' → 'Deploy from GitHub repo'"
echo "4. Pilih repository ini"
echo "5. Add MySQL database service"
echo "6. Set environment variables dari file env-railway-example.txt"
echo ""
echo "🔑 APP_KEY yang sudah di-generate:"
echo "base64:XrYHMIlbEatzKL9xMjTVqVw48TzMif++m6Yd0Z27RGM="
echo ""
echo "📖 Baca panduan lengkap di deploy-railway.md" 