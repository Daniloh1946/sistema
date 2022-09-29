<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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
// Route::get('/empleado', function () {
//     return view('empleado.index');
// });
// route::get('/empleado/create',[EmpleadoController::class,'create']);

Route::resource('empleado', EmpleadoController::class) ->middleware('auth');
//Route::resource('empleado', EmpleadoController::class) ->middleware('auth'); opcion de seguridad para no acceder al las vistas
//Auth::routes();

Auth::routes(['register' => false,'reset' => false ]);  //instruccion para quitar opciones del login

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group (['middleware' => 'auth'], function () {
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});