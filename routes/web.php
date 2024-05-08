<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return view('index');
})->name('index');

Route::resource('/produit', ProduitController::class); {
}
