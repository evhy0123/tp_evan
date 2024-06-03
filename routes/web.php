<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DocumentController::class, 'index'])->name('document.index');



 

