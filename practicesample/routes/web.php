<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});
//上記は単にlaravelのトップページ用のルートですね。標準でついているだけなので後で直すことになります。


Route::get('/profile', [ProfileController::class, 'index']);

