<?php

use App\Http\Controllers\MeetupController;
use App\Http\Controllers\UserController;
use App\Models\Meetup;
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

// Meetup Routes
Route::get('/', [MeetupController::class, 'index']);
Route::get('/meetups/{meetup}', [MeetupController::class, 'show']);
Route::get('/meetups/create', [MeetupController::class, 'create']);
Route::post('/meetups', [MeetupController::class, 'store']);
Route::get('/meetups/edit/{meetup}', [MeetupController::class, 'edit']);
Route::put('/meetups/{meetup}', [MeetupController::class, 'update']);

// User Routes
Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/profile/{user:username}', [UserController::class, 'profile']);
