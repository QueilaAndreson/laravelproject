<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServi
ceProvider and all of them will
| be assigned  to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class,'login_page']);
Route::get('/register', [Controller::class,'register_page']);
Route::get('/foodcard_home', [Controller::class,'foodcard_home_page']);
Route::post('/register_post', [Controller::class,'register_post']);
Route::post('/login_post', [Controller::class,'login_post']);
Route::get('/vegpizza',[Controller::class,'vegpizza']);
Route::post('/addVegCartItems',[Controller::class,'addvegCartItems']);
Route::post('/cartButtons',[Controller::class,'cartButtons']);
Route::post('/addVegLikes',[Controller::class,'addVegLikes']);