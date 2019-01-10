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

Auth::routes();
//------------------------------------------------------
//  for message system starts Here
//------------------------------------------------------
Route::get('Chat/message/{id}','MessageController@ShowChat')->name('message');
Route::post('Chat/message/{id}','MessageController@store')->name('message.send');
Route::get('/home', 'HomeController@index')->name('home');
//------------------------------------------------------
//  for message system ends Here
//------------------------------------------------------



//------------------------------------------------------
// for general chat system start here
//------------------------------------------------------
Route::get('/chatt/chat', 'GeneralController@index');
Route::post('/chatt/chat', 'GeneralController@store')->name('Addchat');
Route::get('/chatt/chat', 'GeneralController@index');
Route::get('/chatt/chat', 'GeneralController@show');
//------------------------------------------------------
// for general chat system ends here
//------------------------------------------------------


//------------------------------------------------------
// for group chat system starts here
//------------------------------------------------------
Route::get('group/create','GroupController@create');
Route::post('group/create','GroupController@store');
Route::get('group/groups','GroupController@group');
Route::get('group/groupchat/{id}','GroupController@groupchat')->name('groupchat');
Route::post('group/groupchat','GroupchatController@store')->name('chat');
//------------------------------------------------------
// for group chat system ends here
//-----------------------------------------------------

