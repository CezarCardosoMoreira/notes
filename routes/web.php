<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    echo 'About us';
});

Route::get('/main/{value}', [MainController::class, 'index']);
Route::get('/page2', [MainController::class, 'page2']);
Route::get('/page3', [MainController::class, 'page3']);
