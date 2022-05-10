<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AstronotController;

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
    return view('home');
});


Route::get('/dataastronot', function () {
    return view('dataastronot');
});


Route::get('/tampildata', [AstronotController::class, 'readdata']);
Route::get('/tambahdata', [AstronotController::class, 'input']);
Route::get('/astronot/store', [AstronotController::class, 'store']);

Route::get('/astronot/edit/{nim}', [AstronotController::class, 'edit']);
Route::get('/astronot/update', [AstronotController::class, 'update']);
Route::get('/astronot/hapus/{nim}', [AstronotController::class,'hapus']);