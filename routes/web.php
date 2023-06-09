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
    $title = 'Hello Laravel!';

    return view('home', compact('title'));
});

Route::get('/pippo', function () {
    $data = [
        'title' => 'Titolo della Pippo page',
        'subtitle' => 'Sottotitolo della Pippo page',
        'paragraph' => 'Paragrafo della Pippo page'
    ];

    return view('pippo', $data);
});