<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Student\ProfileController;
use App\SEO\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

//Routes
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/signup', function () {
    return view('backend.pages.auth.signup');
})->name('signup');

Route::get('/generate-sitemap', [SitemapController::class, 'generate']);

//static pages
Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('faqs');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [FrontendController::class, 'termsConditions'])->name('terms-conditions');

Route::post('/inquiry-us', [ContactController::class, 'store'])->name('contact.store');

Route::get('/blogs', [BlogController::class, 'index'])
    ->name('blogs');

Route::get('/blogs/{slug}', [BlogController::class, 'show'])
    ->name('blog-details');

Route::get('/online-programs', [FrontendController::class, 'onlinePrograms'])->name('online-programs');
Route::get('/ielts', [FrontendController::class, 'ieltsPrograms'])->name('ielts');
Route::get('/pte', [FrontendController::class, 'ptePrograms'])->name('pte');



//student routes
Route::prefix('student')
    ->name('student.')
    ->middleware(['auth', 'active.user'])
    ->group(function () {
        Route::get('/dashboard', [StudentController::class, 'dashboard'])
            ->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        

    });
