<?php

use Illuminate\Support\Facades\Route;

Route::get('iam', function () {
    return 'Hello from the iam package';
});


Route::get('dev', function () {
    return "dev";
});
