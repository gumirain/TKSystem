<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('helloview', function () {
    return view('hello.index');
});

Route::get('hello', 'HelloController@index');
Route::get('hello/other', 'HelloController@other');
Route::get('hellosub', 'HelloControllerSub');
Route::get('helloex', 'HelloControllerEx@index');

Route::get('helloex1/{id?}', 'HelloControllerEx@index1');
Route::get('helloex2', 'HelloControllerEx@index2');

Route::get('helloex3', 'HelloControllerEx@index3');
Route::post('helloex3', 'HelloControllerEx@post');
Route::get('helloex4', 'HelloControllerEx@index4');
Route::get('helloex5', 'HelloControllerEx@index5');

Route::get('hellodb', 'HelloControllerDb@index')
          ->middleware(HelloMiddleware::class);
Route::get('hellodb2', 'HelloControllerDb@index2');
        