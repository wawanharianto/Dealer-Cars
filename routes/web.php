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
Route::get('/layout', function () {
    return view('layout.layout');
});
Route::get('/','crudcontroller@home');
/*Route::get('/mobil', function () {
    return view('form.formmobil');
});*/
Route::get('/input', 'crudcontroller@input');
Route::post('/input', 'crudcontroller@insert');
Route::get('/index','crudcontroller@home');
Route::get('/{id_mobil}/ubah','crudcontroller@ubah');
Route::delete('/{id_mobil}/delete','crudcontroller@delete');
Route::put('/{id_mobil}/ubah','crudcontroller@update');

