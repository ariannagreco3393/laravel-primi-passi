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

Route::get('/', function () {
    $names = ['Arianna', 'Elisa', 'Marcello'];
    return view('home', compact('names'));
});

Route::get('/contacts', function() {
    return view('contacts');
})->name('contatti');