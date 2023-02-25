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
    echo'Ini adalah Halaman Home';
});

Route::prefix('products')->group(function(){
    Route::get('category/marbel-edu-games',function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
});

Route::prefix('products')->group(function(){
    Route::get('category/marbel-and-friends-kids-games',function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
});

Route::prefix('products')->group(function(){
    Route::get('category/riri-story-books',function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
});

Route::prefix('products')->group(function(){
    Route::get('category/kolak-kids-books',function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});




    Route::get('news/{title}', function ($title) {
        // educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    });


    // Route::get('/{news}', function ($news) {
    //     return redirect ('https://www.educastudio.com/news');
    // });

    Route::prefix('program')->group(function(){
        Route::get('karir',function(){
            return redirect('https://www.educastudio.com/program/karir');
        });

        Route::get('magang',function(){
            return redirect('https://www.educastudio.com/program/magang');
        });

        Route::get('kunjungan-industri',function(){
            return redirect('https://www.educastudio.com/program/kunjungan-industri');
        });
    });

    Route::get('/about-us',function(){
        return redirect('https://www.educastudio.com/about-us');
    });


    // Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/contact-us', [ContactUsController::class, 'contact']);

        // Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/panggil', [ContactMeController::class, 'call']);


