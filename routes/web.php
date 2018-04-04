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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/{view?}', function () {
        return view('admin.app');
    })->where('view', '(.*)');
});

Route::group(['prefix' => 'manager'], function () {
    Route::get('/{view?}', function () {
        return view('manager.app');
    })->where('view', '(.*)');
});

Route::get('/{view?}', function () {
    return view('app');
})->where('view', '(.*)');
