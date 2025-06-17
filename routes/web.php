<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
// Untuk Laravel 8+



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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/', function () {
    return view('homes');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/gallery',function(){
    return view('gallery');
});

Route::get('/viewgallery',function(){
    return view('viewgallery');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/rekomendasi',function(){
    return view('rekomendasi');
});

Route::get('/rekomendasi2', function(){
    return view('rekomendasi2');
});

Route::get('/rekomendasi3', function(){
    return view('rekomendasi3');
});


Route::get('/dashboard', [WisataController::class, 'dashboard']);

Route::get('/datawisata', function () {
    return view('datawisata');
});

Route::get('/datagallery', function () {
    return view('datagallery');
});


Route::get('/datawisata', [WisataController::class, 'hitung'])->name('hitung');

//Route::get('/spk',function(){
//    return view('main');
//});

Route::get('/spk', function () {
    return view('main');
})->middleware('auth');


Route::controller(WisataController::class)->group(function() {
    Route::get('wisata/', 'index');
    Route::get('wisata/add', 'add');
    Route::post('wisata/store', 'store');
    Route::get('wisata/edit/{id}', 'edit');
    Route::post('wisata/update/{id}', 'update');
    Route::get('wisata/delete/{id}', 'delete');
});

Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});


Route::controller(GalleryController::class)->group(function () {
    Route::get('gallery/', 'index');             // Tampilkan semua galeri
    Route::get('gallery/add', 'add');              // Form tambah galeri
    Route::post('gallery/store', 'store');       // Simpan data baru
    Route::get('gallery/edit/{id}', 'edit');      // Form edit galeri
    Route::post('gallery/update/{id}', 'update'); // Update data
    Route::post('gallery/delete/{id}', 'delete'); // Hapus data
});




Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');

Route::get('/hasil-perhitungan-spk-pdf', [HitungController::class, 'cetakPdf'])->name('Hasil_Perhitungan_SPK.pdf');
Route::get('/hasil-perhitungan-spk-excel', [HitungController::class, 'cetakExcel'])->name('Hasil_Perhitungan_SPK.excel');



Route::get('/view360', function () {
    return view('view360');
});














