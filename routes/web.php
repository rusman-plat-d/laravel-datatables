<?php

use App\Http\Controllers\UsersController;
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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/ajax/role', [UsersController::class, 'role'])->name('users.role');
Route::get('/ajax/user', [UsersController::class, 'user'])->name('users.user');
