<?php

use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class,'index'])->name('/');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/services',[WebsiteController::class,'services'])->name('services');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('services/{id}',[WebsiteController::class,'PolicyAdvisory'])->name('services.detail');
Route::get('contact',[WebsiteController::class,'contact'])->name('contact');
Route::post('send/contact',[WebsiteController::class,'sendcontact'])->name('contact.send');
Route::get('our-team',[WebsiteController::class,'team'])->name('team');
Route::get('gallery',[WebsiteController::class,'gallery'])->name('gallery');
Route::get('gallery/{id}/view',[WebsiteController::class,'galleryview'])->name('gallery.view');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');


    // User Management
    Route::prefix('users')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('users.index');
    Route::post('create',[UserController::class,'store'])->name('users.create');
    Route::get('edit/{id}',[UserController::class,'edit'])->name('users.edit');
    Route::post('update/{id}',[UserController::class,'update'])->name('users.update');
    Route::get('account/{id}/status',[UserController::class,'account_status'])->name('users.enable');
    });

    // Team management
    Route::prefix('team')->group(function () {
        Route::get('/',[TeamController::class,'index'])->name('team.index');
        Route::post('create',[TeamController::class,'store'])->name('team.create');
        Route::get('edit/{id}',[TeamController::class,'edit'])->name('team.edit');
        Route::post('update/{id}',[TeamController::class,'update'])->name('team.update');
        Route::post('delete/{id}',[TeamController::class,'delete'])->name('team.delete');
    });

    // Gallery
    Route::prefix('gallery')->group(function () {
        Route::get('category/index',[GalleryCategoryController::class,'index'])->name('gallery.category.index');
        Route::post('category/store',[GalleryCategoryController::class,'store'])->name('gallery.category.create');
        Route::get('/{id}',[GalleryCategoryController::class,'categoryView'])->name('gallery.index');
        Route::post('store/{id}',[GalleryCategoryController::class,'storeimg'])->name('gallery.create');
        Route::get('delete/{id}/image',[GalleryCategoryController::class,'deleteimg'])->name('delete.image');
        Route::get('edit/{id}/category',[GalleryCategoryController::class,'editcat'])->name('gallery.category.edit');
        Route::post('update/{id}/category',[GalleryCategoryController::class,'updatecat'])->name('gallery.category.update');
        Route::post('delete/{id}/category',[GalleryCategoryController::class,'deletecat'])->name('gallery.delete');
    });


    // profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
