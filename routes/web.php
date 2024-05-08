<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

Route::get('/', function () {
    return view('index');
});
Route::resource('/produit', ProduitController::class);