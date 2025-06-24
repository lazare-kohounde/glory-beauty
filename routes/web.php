<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('client.index');
});

Route::get('/', [ClientController::class, 'accueil'])->name('accueil');
Route::get('/a-propos', [ClientController::class, 'a_propos'])->name('a-propos');

Route::get('/services', [ClientController::class, 'services'])->name('services');
Route::get('/formations', [ClientController::class, 'formations'])->name('formations');
Route::get('/evenement', [ClientController::class, 'events'])->name('evenement');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
