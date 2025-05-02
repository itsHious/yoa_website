<?php

use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class,'index'])->name('/');

Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/services',[WebsiteController::class,'services'])->name('services');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('services/{id}',[WebsiteController::class,'PolicyAdvisory'])->name('services.detail');
Route::get('contact',[WebsiteController::class,'contact'])->name('contact');
Route::post('send/contact',[WebsiteController::class,'sendcontact'])->name('contact.send');
