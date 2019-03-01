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

/* minfin */

Route::get('/', 'HomeController@index', array
    (
        'maintitleKG' => 'test 1',
        'maintitleRU' => 'test 2'
    )
);

Route::get('/dgz', function () {
    return view('dgz');
});

/* gns */
Route::get('/gns', 'GNSController@index');

/* grs */
Route::get('/gts', 'GTSController@index');


Route::get('/minfin-dohod-ne-nal', 'DohodNeNalController@index');

/* socfond */
Route::get('/socfond', function () {
    return view('socfond');
});