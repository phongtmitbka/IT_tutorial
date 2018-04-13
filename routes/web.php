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
Auth::routes();
Route::get('/logout', function (){
    Auth::logout();
   return redirect('/');
});

Route::get('/current-user', function () {
    return response()->json(Auth::user());
});

Route::get('/admin/login', function () {
    return redirect('/login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/{view?}', function () {
        return view('admin.app');
    })->where('view', '(.*)');
});

Route::get('/poster/login', function () {
    return redirect('/login');
});

Route::group(['prefix' => 'poster', 'middleware' => 'poster'], function () {
    Route::get('/{view?}', function () {
        return view('poster.app');
    })->where('view', '(.*)');
});

Route::get('/{view?}', function () {
    return view('app');
})->where('view', '(.*)');
