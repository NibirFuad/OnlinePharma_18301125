<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\HomeController;
use App\Http\COntrollers\AdminController;
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



Route::get("/",[HomeController::class,"index"]);
Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::get("/deletemed/{id}",[AdminController::class,"deletemed"]);
Route::get("/updatemed/{id}",[AdminController::class,"updatemed"]);
Route::post("/update/{id}",[AdminController::class,"update"]);
Route::get("/inventory",[AdminController::class,"inventory"]);
Route::post("/uploadmedicine",[AdminController::class,"upload"]);
Route::get("/search",[AdminController::class,"search"]);
Route::get("/orders",[AdminController::class,"orders"]);
Route::get("/redirects",[HomeController::class,"redirects"]);
Route::post("/addtocart/{id}",[HomeController::class,"addtocart"]);
Route::get("/taketologin",[HomeController::class,"taketologin"]);
Route::get("/showcart/{id}",[HomeController::class,"showcart"]);
Route::get("/remove/{id}",[HomeController::class,"remove"]);
Route::post("/placeorder",[HomeController::class,"placeorder"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
