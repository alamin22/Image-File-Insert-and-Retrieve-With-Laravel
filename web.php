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

Route::get('/', function () {
    return view('welcome');
});

route::get('/insertFile','fileBaseController@viewForm');
route::post('/insertFile','fileBaseController@insertFile');
route::get('/insertFile','fileBaseController@display');

