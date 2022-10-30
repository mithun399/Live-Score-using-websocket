<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\scoreController;

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

Route::get('/', function () {
    return view('score');
});
Route::get('/update', function () {
    return view('scoreupdate');
});
Route::post('/pushScore', function () {
    return view('scoreupdate');
});
Route::post('pushScoreValue',[scoreController::class,'pushScoreValue']);
