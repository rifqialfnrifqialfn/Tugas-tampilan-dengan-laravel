<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama / Login
Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/dashboard');
});

// Halaman Utama Aplikasi
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/kelompok', function () {
    return view('kelompok');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/tasks', function () {
    return view('tasks');
});