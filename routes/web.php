<?php

use App\Http\Controllers\AnimalListController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OwnerListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'create'])->name('homepage');
Route::post('/detailsAbout/{name}', [AnimalListController::class, 'showDogDetails'])->name('dog.details');
Route::post('/owner', [OwnerListController::class, 'displayOwner'])->name('owner.details');
Route::post('/update', [OwnerListController::class, 'update'])->name('owner.update');
Route::get('/editInfoAbout/{name}/', [AnimalListController::class, 'editDogDetails'])->name('dog.edit');
Route::post('/editInfoAbout', [AnimalListController::class, 'editDogDetailsSave'])->name('dog.edit.save');
