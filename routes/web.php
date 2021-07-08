<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/agency')->group(function (){
    Route::get('/list',[AgencyController::class,"index"])->name('agency.list');
    Route::get('/create',[AgencyController::class,"create"])->name('agency.create');
    Route::post('/store',[AgencyController::class,"store"])->name('agency.store');
    Route::get('/{id}/update',[AgencyController::class,"edit"])->name('agency.edit');
    Route::post('/{id}/update',[AgencyController::class,"update"])->name('agency.update');
    Route::get('/{id}/delete',[AgencyController::class,"destroy"])->name('agency.delete');
    Route::get('/findbyname',[AgencyController::class,"show"])->name('agency.find');
});


