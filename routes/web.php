<?php
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view('/', 'welcome')->name('welcome');

// Ye sabko accessible hoga (public pages)
Route::view('About-us', 'aboutUs')->name('about-us');
Route::view('Contact-us', 'contact')->name('contact-us');
Route::view('checkout', 'checkout')->name('checkout');

// Prefix user ke andar sab routes
Route::prefix('user')->group(function () {

    // Only guests (login/register wale pages)
    Route::middleware('guest')->group(function () {
        Route::get('/login', action: [LoginController::class, 'index'])->name('user.login');
        Route::get('/register', [LoginController::class, 'register'])->name('user.register');
        Route::post('/processRegister', [LoginController::class, 'processRegister'])->name('user.processRegister');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('user.authenticate');
    });

    // Only authenticated users
    Route::middleware('auth')->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');
        Route::get('/wishlist', action: [UserAccountController::class, 'showWishlist'])->name('user.wishlist');

        Route::get('/{id}', [UserAccountController::class, 'index'])->name('user.account');

    });
    
});
// Route::prefix('admin')->group(function () {
      Route::get('/admin/login', action: [AdminLoginController::class, 'index'])->name('admin.login');
// });
