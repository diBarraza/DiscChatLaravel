<?php

use Illuminate\Support\Facades\Route;


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

Route::post('conversacion','ConversacionController@createConversacion');
Route::get('conversacion/{id}','ConversacionController@updateConversacion');
Route::post('conversacion/{id}','ConversacionController@deleteConversacion');
Route::get('conversacion','ConversacionController@index');


Route::post('conversacionReply','ConversacionReplyController@createConversacionReply');
Route::get('conversacionReply/{id}','ConversacionReplyController@updateConversacionReply');
Route::post('conversacionReply/{id}','ConversacionReplyController@deleteConversacionReply');
Route::get('conversacionReply','ConversacionReplyController@index');


Route::get('/', function () {
    return view('welcome');
});
