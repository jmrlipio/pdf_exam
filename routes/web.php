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

Route::get('/',array('as'=>'home','uses'=>'PdfController@index'));
Route::get('/test',array('as'=>'home','uses'=>'PdfController@test'));
Route::get('pdfview',array('as'=>'pdfview','uses'=>'PdfController@pdfview'));