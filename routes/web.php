<?php

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

Route::get('/nova_conta', function () {
    return view('nova_conta');
})->name('nova_conta');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/nova_viagem', function () {
    return view('nova_viagem');
})->name('nova_viagem');

Route::post('/nova_viagem', function () {
    return view('nova_viagem');
})->name('nova_viagem');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/registoCliente', function () {
    return view('registoCliente');
})->name('registoCliente');

Route::get('/login', function () {
    return view('login');
})->name('login');

route::post('/welcome_login', function(){
	return view('welcome');
})->name('welcomeLogin');


