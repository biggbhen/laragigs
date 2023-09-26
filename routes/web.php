<?php

// use Illuminate\Http\Request;

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// all listings
Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

// store listing data
Route::post('/listing', [ListingController::class, 'store'])->middleware('auth');

// create edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update form
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete listing
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listing/manage', [ListingController::class, 'manage'])->middleware('auth');

// single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
