<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\InfraccionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TitularController;

Route::get('/',[MainController::class,'index'])->name('index');

Route::controller(TitularController::class)->group(function(){
    Route::get('/titular','ListarTitular')->name('ListarTitular');
    Route::get('/titular/AltaTitular','AltaTitular')->name('AltaTitular');
    Route::post('/titular/Store','StoreTitular')->name('StoreTitular'); 
    Route::get('/titular/EditarTitular/{titular}','EditarTitular')->name('EditarTitular');
    Route::put('/titular/ActualizarTitular/{titular}','ActualizarTitular')->name('ActualizarTitular');
    Route::get('/titular/VerTitular/{titular}','VerTitular')->name('VerTitular');
    Route::delete('/titular/EliminarTitular/{titular}', 'EliminarTitular')->name('EliminarTitular');
        
});

Route::controller(AutoController::class)->group(function(){
    Route::get('/automovil','ListarAuto')->name('ListarAuto');
    Route::get('/automovil/AltaAuto','AltaAuto')->name('AltaAuto');
    Route::post('/automovil/Store','StoreAuto')->name('StoreAuto');
    
});

Route::controller(InfraccionController::class)->group(function(){
    Route::get('/infraccion','ListarInfraccion')->name('ListarInfraccion');
    Route::get('/infraccion/AltaInfraccion','AltaInfraccion')->name('AltaInfraccion');
    Route::post('/infraccion/Store','StoreInfraccion')->name('StoreInfraccion');
});


