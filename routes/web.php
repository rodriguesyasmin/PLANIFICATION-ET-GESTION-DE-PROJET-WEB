<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Controllers\StripeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::resource('/produit', ProduitController::class); {
}

Route::get('/stripe', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('produit/stripe/test', 'App\Http\Controllers\StripeController@test');
Route::get('/stripe/success', 'App\Http\Controllers\StripeController@success')->name('success');
