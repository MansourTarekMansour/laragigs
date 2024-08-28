<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, 'index']);
// Get Listing by id
Route::get('/listings/{listing}', [ListingController::class, 'show']);
