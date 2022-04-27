<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// all listing

Route::get('/', function () {
    return view('listings',
    [
        'heading' => 'Latest job',
        'listings' => Listing::all()
    ]);
});


// single listing
Route::get('/listing/{id}',function($id) {
    return view('listing' , ['listing' => Listing::find($id)]);
});

