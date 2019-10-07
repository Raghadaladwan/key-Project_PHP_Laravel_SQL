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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function (){
    Route::get('/create', 'RoomController@create')->name('room.create');
    Route::get('/edit/{id}', 'RoomController@edit')->name('room.edit');


    Route::Post('/store', 'RoomController@store')->name('room.store');
    Route::Post('/update', 'RoomController@update')->name('room.update');


    Route::get('/view','RoomController@view')->name('room.view');
    Route::get('/delete/{id}','RoomController@destroy')->name('room.delete');

});

Route::get('/show', 'RoomController@show')->name('room.show');
//Route::get('/index', 'RoomController@index')->name('room.index');

//
//Route::get('/show', function () {
//    $rooms = DB::table('rooms')->get();
//    //return $tasks;
//    return view('room.show', compact('rooms'));
//
//});

