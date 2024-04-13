<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WinController;


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

Route::get('/', [UsersController::class, 'index'])->name('home');
Route::get('/createUser', [UsersController::class, 'createUser'])->name('user.create');
Route::get('/show', [UsersController::class, 'show'])->name('user.get');
Route::post('/new', [UsersController::class, 'new'])->name('createNewUser');
Route::get('/getWin', [WinController::class, 'getWin'])->name('win.get');
Route::get('/export', [UsersController::class, 'exportExcel'])->name('user.export');


