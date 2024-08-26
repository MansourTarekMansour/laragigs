<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;



// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Lastest Listings',
        'listings' => Listing::all(),
    ]);
});

// Get Listing by id
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});
