<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\loginmanager;


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
Route::post('/sign', function () {
    return view('signup');
});
Route::get('/sign', function () {
    return view('signup');
});
Route::post('/log', function () {
    return view('login');
});
Route::get('/log', function () {
    return view('login');
});
// Route::get('/log', [AuthController::class,'isUsernamePasswordCorrect'] {
//     return view('login');
// });
Route::post('/show', function () {
    return view('showalldata');
});
Route::get('/show', function () {
    return view('showalldata');
});


