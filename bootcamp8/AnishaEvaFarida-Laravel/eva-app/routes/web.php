<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, "index"])->name('home');

Route::get('/add', function () {
    return view('add-contact');
});

Route::post('/add', [ContactController::class, "store"]);

Route::get('/edit', function () {
    return view('edit-contact');
});

Route::delete('/delete/{id}', [ContactController::class, "destroy"])->name("contact");