<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route home
Route::get('/', function () {
    return view('home');
});


// route for my comics
Route::get('/CardDc', function () {
    $DcCard = config("comics");

    return view("CardDc", compact("books"));
})->name("CardDc");