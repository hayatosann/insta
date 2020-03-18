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

Route::get('/', 'Postscontroller@index');
// ①どのURL(メソッドも含む)の時に、②どのコントローラーの、③どのメソッドを使用するかを決めます。
// ①URL/にGETメソッドでアクセスされた場合、②PostsControllerの③indexメソッドを使用する例です。