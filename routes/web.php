<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyGroupController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\MetreController;
use App\Http\Controllers\PropertyUnitController;
use App\Http\Controllers\PropertyUnitMetreController;
use App\Http\Controllers\PropertyUnitTenantController;
use App\Http\Controllers\PropertyUnitBillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MQTThttpController;

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
    return view('auth.login');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/dashboard',[PropertyGroupController::class,'index'])->name('dashboard');

Route::resource('property_group',PropertyGroupController::class)->middleware(['auth']);

Route::resource('property',PropertyController::class)->middleware(['auth']);

Route::resource('metre',MetreController::class)->middleware(['auth']);

Route::resource('property_unit',PropertyUnitController::class)->middleware(['auth']);

Route::resource('property_unit_metre',PropertyUnitMetreController::class)->middleware(['auth']);

Route::resource('property_unit_tenant',PropertyUnitTenantController::class)->middleware(['auth']);

Route::resource('property_unit_bill',PropertyUnitBillController::class)->middleware(['auth']);

Route::get('/user/{id}',[UserController::class,'show'])->middleware(['auth'])->name('user');

Route::resource('mqtt_http',MQTThttpController::class);

require __DIR__.'/auth.php';
