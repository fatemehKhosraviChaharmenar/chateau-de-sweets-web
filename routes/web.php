<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'sendToHome'])->name('default');
Route::get('/Contact',[ContactController::class,'sendToContact'])->name('contact');
Route::get('/About',[AboutController::class,'sendToAbout'])->name('about');
Route::post('/',[ContactController::class,'sendToAdmin'])->name('sent');
