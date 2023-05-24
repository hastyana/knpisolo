<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CopywritingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OkpController;


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

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/home-post/{slug}', [HomeController::class, 'show']);
Route::get('/about', [PublicController::class, 'about']);
Route::get('/photos', [PhotosController::class, 'index']);
Route::get('/photos-filter/{kategori:kategori}', [PhotosController::class, 'show']);
Route::get('/videos', [VideosController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/upload',[BlogController::class, 'upload']);
Route::get('/upload',[BlogController::class, 'create']);
Route::post('/upload',[BlogController::class, 'save']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/pers', [PressController::class, 'index']);
Route::get('/article',[ArticleController::class, 'index']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'save']);
Route::get('/blog-post/{slug}', [BlogController::class, 'show']);
Route::get('/news-post/{slug}', [NewsController::class, 'show']);
Route::get('/article-post/{slug}', [ArticleController::class, 'show']);
Route::get('/pers-post/{slug}', [PressController::class, 'show']);
Route::get('/post', [PostController::class, 'index']);
// Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/okp', [OkpController::class, 'index']);
Route::get('/okp_add', [OkpController::class, 'okp_add']);
Route::get('/okp_add', [OkpController::class, 'create']);
Route::post('/okp_add', [OkpController::class, 'save']);
 
Route::get('/login', function () {
    return view('auth/login');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function() {
    Route::get('/', [DashboardController::class, 'index']);

    Route::controller(GaleriController::class)->group (function () {
        Route::get('/galeri', 'galeri');
        // Route::get('/galeri-photo-add', 'fotocreate');
        Route::get('/galeri-photo-add', 'kategorilist');
        Route::post('/galeri-photo-add', 'fotosave')->name('post.galeri.foto');
        Route::get('/galeri-photo', 'fotoshow');
        Route::post('/galeri-photo/{id}', 'fotoupdate');
        Route::get('/galeri-photo-delete/{id}', 'fotodelete');
        Route::get('/galeri-video-add', 'videocreate');
        Route::post('/galeri-video-add', 'videosave');
        // Route::get('/galeri-video', 'videoshow');
        Route::post('/galeri-video/{id}', 'videoupdate');
        Route::get('/galeri-video-delete/{id}', 'videodelete');
        Route::get('/galeri-category', 'kategoricreate');
        Route::post('/galeri-category', 'kategorisave');
    });

    Route::controller(ArtikelController::class)->group (function () {
        Route::get('/artikel', 'artikel');
        Route::get('/artikel-add', 'kategorilist');
        // Route::get('/artikel-add', 'create');
        Route::post('/artikel-add', 'save');
        Route::get('/artikel', 'show');
        Route::post('/artikel-update/{id}', 'update');
        Route::delete('/artikel-delete/{id}', 'destroy');
        // Route::get('/artikel-category', 'kategori');
        Route::get('/artikel-category', 'kategoricreate');
        Route::post('/artikel-category', 'kategorisave');
    });

    Route::controller(InfografisController::class)->group (function () {
        Route::get('/infografis', 'infografis');
        Route::get('/infografis-add', 'create');
        Route::post('/infografis-add', 'save');
        Route::get('/infografis', 'show');
        Route::post('/infografis/{id}', 'update');
        Route::get('/artikel-delete/{id}', 'delete');
    });

    Route::controller(TeamController::class)->group (function () {
        Route::get('/team', 'team');
        Route::get('/team-add', 'create');
        Route::post('/team-add', 'save');
        Route::get('/team', 'show');
        Route::post('/team-update/{id}', 'update');
        Route::get('/team-delete/{id}', 'delete');
    });

    Route::controller(TestimonialController::class)->group (function () {
        Route::get('/testimonial', 'testimonial');
        Route::get('/testimonial', 'index');
        Route::get('/testimonial-delete/{id}', 'delete');
    });

    Route::controller(CopywritingController::class)->group (function () {
        Route::get('/copywriting', 'copywriting');
        Route::get('/copywriting', 'index');
        Route::get('/profil', 'profil');
        Route::get('/image', 'image');
        Route::get('/file', 'file');
        Route::get('/copywriting-delete/{id}', 'delete');
    });

});

// Route::get('/dashboard', function() {
//     return view('admin/dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


