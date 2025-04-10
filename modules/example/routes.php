<?php

use Illuminate\Support\Facades\Route;

Route::prefix('example')->name('example.')->middleware('api')->group(function () {
    Route::get('/', function () {
        return 'This is the example module.';
    });
});
