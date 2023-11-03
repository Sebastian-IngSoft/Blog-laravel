<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('curso','index')->name('cursos.index');//el name se usa para los href en el blade        
    Route::get('curso/create','create')->name('cursos.create');  
    Route::post('curso','store')-> name('cursos.store');
    //pasa la variable course      
    Route::get('curso/{id}','show')->name('cursos.show');        
    Route::get('curso/{curso}/edit','edit')->name('cursos.edit');   
    //put para actualizar     
    Route::put('curso/{curso}','update')->name('cursos.update');        
});