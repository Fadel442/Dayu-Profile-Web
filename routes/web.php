<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.homepage');
});

Route::get('/homepage', [PageController::class, 'homepages'])->name('homepage');
