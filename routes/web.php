<?php

use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [RoutesController::class,'tab'])->name('tab');
Route::get('/add-stafft', [RoutesController::class,'main'])->name('home');
Route::get('/{staff}/delete', [RoutesController::class,'delete'])->name('delete');
Route::get('/{staff}/view', [RoutesController::class,'view'])->name('view');

Route::post('/save-biodata', [RoutesController::class,'saveData']);
Route::post('/update-biodata/{staff}', [RoutesController::class,'updateData']);