<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AstroController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('accueil');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/equipe', function () {
    return view('equipage');
});
Route::get('/astro', function () {
    return view('liste');
});


####Routes pour astronautes

Route::get('/liste', [AstroController::class, 'index'])->name('astro.liste');
Route::post('/create', [AstroController::class, 'create'])->name('astro.create');
Route::delete('/destroy/{id}', [AstroController::class, 'destroy'])->name('astro.destroy');
Route::put('/update/{id}', [AstroController::class, 'update'])->name('astro.update');
Route::get('/edit/{id}', [AstroController::class, 'edit'])->name('astro.edit');
Route::get('/detail/{id}', [AstroController::class, 'show'])->name('astro.detail');

Route::get('/create', function () {
    return view('create');
});


Route::post('/receive-email', [MailController::class, 'receiveEmail']);


