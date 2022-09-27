<?php

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
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('403', function () {
    return "No tienes accesso perro";
});

Route::get("login", [SiteController::class, "login"])->name("login");
Route::post("login", [SiteController::class, "authenticate"]);
Route::post("logout", [SiteController::class, "logout"]);

Route::middleware(["auth"])->group(function (){
    Route::get('user', [UserController::class, "index"]);
    Route::get('user/create', [UserController::class, "create"]); // form
    Route::post('user/create', [UserController::class, "store"]); // guarda
    
    Route::get('YOLO/{user}', [UserController::class, "edit"])->name("create")->middleware(["miTenant"]);
    Route::post('user/update/{user}', [UserController::class, "update"]);
    
    Route::post('user/delete/{user}', [UserController::class, "destroy"]);
    Route::get('user/{user}', [UserController::class, "show"])->middleware(["miTenant"]);

    Route::get("transaction", [TransactionController::class, "index"]);
    Route::get("transaction/js", [TransactionController::class, "show"]);

    Route::post("transaction/create", [TransactionController::class, "store"]);
});


Route::get("test1", function (){
    
});
Route::get("test2", function (Request $request){
    
});