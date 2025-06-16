<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DonasiController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('welcome'); // arahkan ke halaman welcome
})->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentangkami');
Route::get('/layanan', [LayananController::class, 'layanan'])->name('layanan');
Route::get('/donasi', [DonasiController::class, 'donasi'])->name('donasi');

/*
Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi.index');
Route::post('/donasi', [DonasiController::class, 'store'])->name('donasi.store');
*/
require __DIR__.'/auth.php';
