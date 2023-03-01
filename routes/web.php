<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactMeController;



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
// Halaman Home
Route::get('/home', function () {
//    echo'Ini adalah Halaman Home';
    echo '<iframe src="https://www.educastudio.com/" style="width: 100vw; height: 100vh"></iframe>';
});

Route::prefix('products')->group(function(){
    Route::get('category/marbel-edu-games',function(){
        echo '<iframe src="https://www.educastudio.com/category/marbel-edu-games" style="width: 100vw; height: 100vh"></iframe>';
    });

    Route::get('category/marbel-and-friends-kids-games',function(){
        echo '<iframe src="https://www.educastudio.com/category/marbel-and-friends-kids-games" style="width: 100vw; height: 100vh"></iframe>';

    });

    Route::get('category/riri-story-books',function(){
        echo '<iframe src="https://www.educastudio.com/category/riri-story-books" style="width: 100vw; height: 100vh"></iframe>';
    });

        Route::get('category/kolak-kids-books',function(){
            echo '<iframe src="https://www.educastudio.com/category/kolak-kids-songs" style="width: 100vw; height: 100vh"></iframe>';
        });
});



    Route::get('news/{title}', function ($title) {
        echo '<iframe src="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19"
style="width: 100vw; height: 100vh"></iframe>';

    });


     Route::get('/{news}', function ($news) {
         echo '<iframe src="https://www.educastudio.com/news"
style="width: 100vw; height: 100vh"></iframe>';
     });

    Route::prefix('program')->group(function(){
        Route::get('karir',function(){
            echo '<iframe src="https://www.educastudio.com/program/karir" style="width: 100vw; height: 100vh"></iframe>';
        });

        Route::get('magang',function(){
            echo '<iframe src="https://www.educastudio.com/program/magang" style="width: 100vw; height: 100vh"></iframe>';
        });

        Route::get('kunjungan-industri',function(){
            echo '<iframe src="https://www.educastudio.com/program/kunjungan-industri" style="width: 100vw; height: 100vh"></iframe>';
        });
    });

    Route::get('/about-us',function(){
        echo '<iframe src="https://www.educastudio.com/about-us" style="width: 100vw; height: 100vh"></iframe>';
    });


Route::resource('contact-us', ContactUsController::class)->only([
    'contact',

]);


// Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
//    Route::get('/contact-us', [ContactUsController::class, 'contact']);

        // Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/panggil', [ContactMeController::class, 'call']);


