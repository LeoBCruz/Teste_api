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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/aluno_index', function () {
    return view('aluno_index');
});
Route::get('/aluno_store', function () {
    return view('aluno_store');
});
Route::get('/aluno_show', function () {
    return view('aluno_show');
});
Route::get('/matricula_index', function () {
    return view('matricula_index');
});
Route::get('/matricula_store', function () {
    return view('matricula_store');
});