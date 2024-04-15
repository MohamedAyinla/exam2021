<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('cluster.')->controller(Controller::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store');

    Route::get('/communes/{idDepartement}', 'getCommunes')->name('communes');
    Route::get('/arrondissements/{idCommune}', 'getArrondissements')->name('arrondissements');
    Route::get('/villages/{idArrondissement}', 'getVillages')->name('villages');
});

