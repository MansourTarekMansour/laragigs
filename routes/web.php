<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, 'index']);
// show create page
Route::get('/listings/create', [ListingController::class, 'create']);
// to store listing data
Route::post('/listings', [ListingController::class, 'store']);
// to edit listing data
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
// to update listing data
Route::put('/listings/{listing}', [ListingController::class, 'updata']);
// to delete listing data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
// Get Listing by id
Route::get('/listings/{listing}', [ListingController::class, 'show']);

