<?php

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

Route::get('/', function () {
    return view('paginas.index');
});
Route::get('/selos', function () {
    return view('paginas.selos');
});
Route::get('/codigos', function () {
    return view('paginas.codigos');
});
Route::get('/personagens', function () {
    return view('paginas.personagens');
});
Route::get('/segredos', function () {
    return view('paginas.segredos');
});
