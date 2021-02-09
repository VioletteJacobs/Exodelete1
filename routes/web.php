<?php

use App\Http\Controllers\MemberController;
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

Route::get('/',[MemberController::class, 'index']);
Route::get('/create',[MemberController::class, 'create']);
Route::get('/femme',[MemberController::class, 'femme']);
Route::get('/homme',[MemberController::class, 'homme']);

Route::post('/add_membre', [MemberController::class, 'store']);
Route::post('/delete_membre/{id}', [MemberController::class, 'destroy']);
