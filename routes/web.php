<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
});
Route::get('/ItemPage', function () {
    return view('ItemPage');
});
Route::get('/PicturePage', function () {
    return view('PicturePage');
});
