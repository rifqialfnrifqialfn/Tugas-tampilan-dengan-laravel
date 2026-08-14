<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocialiteController;

// Route OAuth Socialite
Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirect'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback'])->name('social.callback');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});