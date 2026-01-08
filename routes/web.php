<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// CRM Routes
Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('/contacts', 'ContactsController');
});