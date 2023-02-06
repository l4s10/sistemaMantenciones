<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MantencionController;
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
Route::get('/',function (){
    return view('welcome');
});

// Route::get('/mantenciones', function () {
//     return view('mantencion.index');
// });

// Route::get('mantencion/create',[MantencionController::class,'create']);

Route::resource('mantencion',MantencionController::class);
