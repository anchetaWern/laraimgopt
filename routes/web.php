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

Route::get('/', 'UploadsController@index');
Route::get('/upload', 'UploadsController@upload');
Route::post('/upload', 'UploadsController@doUpload');
//  class="dropzone" id="dropzone-form"