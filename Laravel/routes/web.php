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

use App\Http\Controllers\ClientController;
Route::get('/', [ClientController::class, 'index'])->name('root');
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::post('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');

use App\Http\Controllers\VehicleController;
Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/vehicles/{id}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::post('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update');
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

use App\Http\Controllers\PaymentController;
Route::get('/payment', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::get('/payments/{id}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
Route::put('/payments/{id}', [PaymentController::class, 'update'])->name('payments.update');
Route::delete('/payments/{payment_id}', [PaymentController::class, 'destroy'])->name('payments.destroy');

use App\Http\Controllers\RentController;
Route::get('/rent', [RentController::class, 'index'])->name('rents.index');
Route::get('/rent/create', [RentController::class, 'create'])->name('rents.create');
Route::post('/rents', [RentController::class, 'store'])->name('rents.store');
Route::get('/rents/{id}/edit', [RentController::class, 'edit'])->name('rents.edit');
Route::put('/rents/{id}', [RentController::class, 'update'])->name('rents.update');
Route::delete('/rents/{rent_id}', [RentController::class, 'destroy'])->name('rents.destroy');

use App\Http\Controllers\RequirementController;
Route::get('/requirement', [RequirementController::class, 'index'])->name('requirements.index');
Route::get('/requirements/create', [RequirementController::class, 'create'])->name('requirements.create');
Route::post('/requirements', [RequirementController::class, 'store'])->name('requirements.store');
Route::get('/requirements/{id}/edit', [RequirementController::class, 'edit'])->name('requirements.edit');
Route::put('/requirements/{id}', [RequirementController::class, 'update'])->name('requirements.update');
Route::delete('/requirements/{id}', [RequirementController::class, 'destroy'])->name('requirements.destroy');
