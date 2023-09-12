<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
Route::get('/', function () {
    return view('listings', [
        "heading" => "Latest Listings",
        "listings" => Listing::all()
    ]);
});

// single listing
Route::get('/listing/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});


// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->age;
// });
