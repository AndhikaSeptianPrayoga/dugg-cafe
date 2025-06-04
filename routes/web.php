<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('dashboard', [DashboardController::class, 'index'])
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');
  
  // Admin Routes
  Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
    Route::post('products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])->name('products.toggle-status');
    Route::resource('testimonials', TestimonialController::class);
    Route::post('testimonials/{testimonial}/toggle-status', [TestimonialController::class, 'toggleStatus'])->name('testimonials.toggle-status');
    Route::resource('blogs', AdminBlogController::class);
    Route::post('blogs/{blog}/toggle-status', [AdminBlogController::class, 'toggleStatus'])->name('blogs.toggle-status');
  });
});

// Frontend Routes
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/{product:id}', [MenuController::class, 'show'])->name('menu.detail');
Route::get('/api/menu/{category}', [MenuController::class, 'getByCategory'])->name('api.menu.category');

Route::get('/lokasi', function () {
    return view('lokasi');
})->name('lokasi');
Route::get('/cerita', function () {
    return view('cerita');
})->name('cerita');

// Contact Routes
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak/send', [ContactController::class, 'send'])->name('contact.send');

// Blog Routes - Updated
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');

require __DIR__ . '/auth.php';
