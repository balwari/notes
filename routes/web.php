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

Route::get('/', 'App\Http\Controllers\NoteController@all')->name('all')->middleware('auth');

Route::group(['middleware' => ['auth']], function () { 
    Route::post('/create', 'App\Http\Controllers\NoteController@create')->name('create');  
    Route::get('/updatenote/{id}', 'App\Http\Controllers\NoteController@update_note')->name('updatenote');
    Route::get('/update/{id}', 'App\Http\Controllers\NoteController@update')->name('update');
    Route::get('/delete/{id}', 'App\Http\Controllers\NoteController@delete')->name('delete');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
