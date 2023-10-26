<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('home');
});

Route::get('/login', function () {
  return view('auth.login');
});

Route::get('/register', function () {
  return view('auth.register');
});

use App\Http\Controllers\ContactController;

// Rute untuk menampilkan formulir kontak
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');

// Rute untuk mengelola pengiriman formulir kontak
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// Rute untuk halaman "Terima kasih" setelah pengiriman formulir
Route::get('/contact/thankyou', [ContactController::class, 'thankYou'])->name('contact.thankyou');
