<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiziController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [AboutUsController::class, 'aboutUs'])->name('aboutUs');
Route::get('/scopri-di-piu-aboutUs/{id}', [AboutUsController::class, 'details'])->name('aboutUs.detail');

Route::get('/servizi', [ServiziController::class, 'servizi'])->name('servizi');
Route::get('/scopri-di-più-servizi/{id}', [ServiziController::class, 'details'])->name('service.detail');
