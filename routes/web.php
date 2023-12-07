<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $data = [
        'title' => 'Laravel Home',
        'message' => 'Hello Friends'
    ];

    return view('home', $data);
});

Route::get('/about', function () {

    $data = [
        'title' => 'Laravel About',
        'about' => 'I am Gab'
    ];

    return view('about', $data);
});
