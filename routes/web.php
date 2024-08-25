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
Route::get('/listings/{id}', function($id) {
    return view('listing' , [
        'listing' => Listing::findId($id)
    ]);
});