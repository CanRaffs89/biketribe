<?php

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

// Route::view('/', 'index');
// Route::view('/meetups/show', 'meetups/show');
Route::get('/', function () {
    return view('index', [
        'meetups' => Meetup::all()
    ]);
});

Route::get('/meetups/show/{id}', function($id) {
    return view('meetups/show', [
        'meetup' => Meetup::find($id)
    ]);
});
