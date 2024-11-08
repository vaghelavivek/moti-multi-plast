<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\EnquiriesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThemeController;

Route::get('/', [LandingController::class, 'home'])->name('landing.home');
Route::get('/company', [LandingController::class, 'about'])->name('landing.about');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');
Route::get('/products', [LandingController::class, 'product'])->name('landing.product');
Route::get('/products/{slug}', [LandingController::class, 'single'])->name('landing.single');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return view('app.dashboard');
    })->name('dashboard');

    Route::get('/app/products', [ProductController::class ,'show'])->name('products');
    Route::get('/app/category', [ProductController::class ,'categoryShow'])->name('category');
    Route::get('/app/product/add', [ProductController::class ,'add'])->name('product.add');
    Route::get('/app/product/edit/{id}', [ProductController::class , 'edit'])->name('product.edit');
    Route::get('/app/category/add', [ProductController::class ,'categoryAdd'])->name('category.add');
    Route::get('/app/category/edit/{id}', [ProductController::class ,'categoryEdit'])->name('category.edit');
    Route::get('/app/theme', [ThemeController::class ,'show'])->name('theme');
    Route::get('/app/enquirie', [EnquiriesController::class ,'show'])->name('enquirie');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {
    // Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    // Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::post('/banner/add', [ThemeController::class , 'addBanner'])->name('api.banner.add');
    Route::post('/banner/remove', [ThemeController::class , 'removeBanner'])->name('api.banner.remove');
    Route::post('/logo/add', [ThemeController::class , 'addLogo'])->name('api.logo.add');
    Route::post('/logo/remove', [ThemeController::class , 'removeLogo'])->name('api.logo.remove');

    Route::post('/product/add', [ProductController::class , 'addAction'])->name('api.product.add');
    Route::post('/media/remove', [ProductController::class , 'removeMedia'])->name('api.media.remove');
    Route::post('/category/add', [ProductController::class , 'addCategoryAction'])->name('api.category.add');
    
    Route::get('/product/get', [ProductController::class , 'productList'])->name('api.product.get');
    Route::get('/category/get', [ProductController::class , 'categoryList'])->name('api.category.get');

    Route::post('/product/remove', [ProductController::class , 'remove'])->name('api.product.remove');
    Route::post('/category/remove', [ProductController::class , 'categoryRemove'])->name('api.category.remove');

    Route::post('/enquirie/add', [EnquiriesController::class , 'add'])->name('api.enquirie.add');
    Route::get('/enquirie/get', [EnquiriesController::class , 'get'])->name('api.enquirie.get');
    Route::post('/enquirie/approve', [EnquiriesController::class , 'approve'])->name('api.enquirie.approve');
    Route::post('/enquirie/remove', [EnquiriesController::class , 'remove'])->name('api.enquirie.remove');
});

Route::get('/product/list', [ProductController::class , 'productLandingList'])->name('api.product.list');