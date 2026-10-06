<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'showIndex'])-> name('home');


Route::get('/arrya', [MainController::class, 'showArray'])-> name('arrya');

Route::get('/arrya/shuffle',[MainController::class, 'shuffleArray'])->name('arrya.shuffle');

Route::get('/arrya/sort',[MainController::class, 'sortArray'])->name('arrya.sort');

Route::get('/arrya/filter',[MainController::class, 'filterArray'])->name('arrya.filter');
