<?php

use App\Http\Controllers\spaghetti;
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
Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/{id}', 'PizzaController@show');
Route::delete('/pizzas/{id}', 'PizzaController@destroy');
Route::get('/create', 'PizzaController@create');
Route::post('/createpizza', 'PizzaController@store');
Auth::routes();

Route::resource('/spaghetti', 'spaghetti');
Route::get('/home', 'HomeController@index')->name('home');
