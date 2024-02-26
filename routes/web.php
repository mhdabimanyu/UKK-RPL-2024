<?php
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;



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
    return view('welcome');
});

Auth::routes();
   
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');







// Menampilkan semua foto
Route::get('/fotos', [FotoController::class, 'index'])->name('foto.index');

// Menampilkan form untuk membuat foto baru
Route::get('/fotos/create', [FotoController::class, 'create'])->name('foto.create');

// Menyimpan foto baru
Route::post('/fotos', [FotoController::class, 'store'])->name('foto.store');

// Menampilkan foto tertentu
Route::get('/fotos/{foto}', [FotoController::class, 'show'])->name('foto.show');

// Menampilkan form untuk mengedit foto
Route::get('/fotos/{foto}/edit', [FotoController::class, 'edit'])->name('foto.edit');

// Memperbarui foto
Route::put('/fotos/{foto}', [FotoController::class, 'update'])->name('foto.update');

// Menghapus foto
Route::delete('/fotos/{foto}', [FotoController::class, 'destroy'])->name('foto.destroy');



Route::post('comments/store', [CommentController::class, 'store'])->name('comments.store');



Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');
Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

Route::resource('products', ProductController::class);
