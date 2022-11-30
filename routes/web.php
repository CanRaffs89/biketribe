<?php

use App\Http\Controllers\MeetupController;
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

Route::get('/', [MeetupController::class, 'index']);

Route::get('/meetups/show/{meetup}', [MeetupController::class, 'show']);
