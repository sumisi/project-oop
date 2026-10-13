<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'showIndex'])-> name('home');


Route::get('/arrya', [MainController::class, 'showArray'])-> name('arrya');

Route::get('/arrya/shuffle',[MainController::class, 'shuffleArray'])->name('arrya.shuffle');

Route::get('/arrya/sort',[MainController::class, 'sortArray'])->name('arrya.sort');

Route::get('/arrya/filter',[MainController::class, 'filterArray'])->name('arrya.filter');

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');

Route::get('/reports/create', function(){
    return view('report.create');})->name('reports.create');

Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

Route::get('/reports/{report}/edit', [ReportController::class, 'edit'])->name('reports.edit');

Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');
