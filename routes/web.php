<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuditoriumController;
use App\Http\Controllers\GedungTeknoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'show']);
Route::get('/auditorium', function () {
    return view('pages.detail-auditorium');
});
Route::get('/auditorium', [AuditoriumController::class, 'show']);
Route::get('/gedungtekno', [GedungteknoController::class, 'show']);