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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');


    Route::get('/types_drugs', $controller_path . '\pages\TypeDrugController@index')->name('pages-types_drugs');
    Route::post('/types_drugs', $controller_path . '\pages\TypeDrugController@store')->name('pages-types_drugs-store');
    Route::get('/types_drugs/{id}', $controller_path . '\pages\TypeDrugController@edit')->name('pages-types_drugs-edit');
    Route::post('/types_drugs/update', $controller_path . '\pages\TypeDrugController@update')->name('pages-types_drugs-update');
    
});
