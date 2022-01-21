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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Top_page',"Top_pageController@index");

Route::get("make_room","make_roomController@getvalues");

Route::get("Call","Callcontroller@index");

//認証済みのみ画面遷移可能
Route::group(['prefix'=> '/', 'middleware'=>'auth'],function(){
    Route::get('chat', [App\Http\Controllers\ChatController::class,'chat']);
    Route::post('send', [App\Http\Controllers\ChatController::class,'send']);
    Route::post('getOldMessages',[App\Http\Controllers\ChatController::class,'getOldMessages']);
    Route::post('saveToSession',[App\Http\Controllers\ChatController::class,'saveToSession']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

