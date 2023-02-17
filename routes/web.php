<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\mahasiswa;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $jumlahmahasiswa = MahasiswaController::class;

    return view('welcome', compact('jumlahmahasiswa'));
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/home', [MahasiswaController::class, 'home'])->name('home')->middleware('auth');

Route::get('/admin', [MahasiswaController::class, 'admin'])->name('admin')->middleware('auth');

// Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
// Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');
// Route::get('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');

// Route::get('/tampilkandata/{id}', [MahasiswaController::class, 'tampilkandata'])->name('tampilkandata');
// Route::post('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');
// Route::get('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');

// Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
