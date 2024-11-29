<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BerandaController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/kabinet', function(){
    return view ('kabinet');
});

// Route::get('/artikel', function(){
//     return view ('artikel');
// });

Route::get('/artikel', [ArticleController::class, 'index']);
