<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\UsersController;
use App\Models\Plat;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/redirects',[HomeController::class,"index"]);
Route::get('/redirects',[UsersController::class,"index"]);
Route::get('/products',[PlatController::class,"index"])->name('products'); 
Route::get('/create', [PlatController::class, 'create'])->name('addPlat');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::delete('/redirects', [UsersController::class, 'destroy'])->name('profile.admin');
