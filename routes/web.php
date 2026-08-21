<?php

use Illuminate\Support\Facades\Route;

// Halaman Pertama (Langsung Login)
Route::get('/', function () {
    return view('login');
});

// Route Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function () {
    return redirect('/dashboard');
});

// Route Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route Kelompok / Team
Route::get('/kelompok', function () {
    return view('kelompok');
});

// Route Jadwal
Route::get('/jadwal', function () {
    return view('jadwal');
});

// Route Tasks
Route::get('/tasks', function () {
    return view('tasks');
});