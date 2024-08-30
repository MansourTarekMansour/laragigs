<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, 'index']);
// show create page
Route::get('/listings/create', [ListingController::class, 'create']);
// Get Listing by id
Route::get('/listings/{listing}', [ListingController::class, 'show']);
