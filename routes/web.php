<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return view('welcome');

});

    //ELANG
    Route::get("/edit-matakuliah", [PageController::class, 'editMatakuliah']);
    Route::put("/update-matakuliah/{id}", [PageController::class, 'updateMatakuliah']);
    Route::post("/store-matakuliah", [PageController::class, 'storeMatakuliah']);
    Route::put("/delete-matakuliah/{id}", [PageController::class, 'destroyMatakuliah']);

