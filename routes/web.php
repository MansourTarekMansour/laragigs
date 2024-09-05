<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// All Listings
Route::get('/', [ListingController::class, 'index']);
// show create page
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// to store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// to edit listing data
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// to update listing data
Route::put('/listings/{listing}', [ListingController::class, 'updata'])->middleware('auth');
// to delete listing data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// Get Listing by id
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register create form
Route::get('register', [UserController::class,'register'])->middleware('guest');
// Create a new user 
Route::post('/users', [UserController::class,'store']);

// Show Login Form
Route::get('/login', [UserController:: class, 'login' ])->name('login')->middleware('guest');
// Log In
Route::post('/users/authenticate', [UserController::class,'authenticate']);
// user logout
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

