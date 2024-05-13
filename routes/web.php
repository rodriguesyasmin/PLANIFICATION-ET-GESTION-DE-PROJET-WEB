<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use App\Http\Controllers\StripeController;

Route::get('/', function (Request $request) {
    return view('index');
})->name('index');

Route::resource('/produit', ProduitController::class); {
}

Route::get('/stripe', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('stripe/test', 'App\Http\Controllers\StripeController@test');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');


// Route::get('stripe', [StripeController::class, 'stripe']);
// Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
