<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;

Route::get('/', function () {
    return view("welcome");
});

Route::get('/about', [UserControler::class, 'index']);

