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

Route::get('/', 'IndexController@index');
Route::get('recettes/{id}', 'RecetteController@show');
Route::get('recettes', 'RecetteController@index');
Route::get('categories', 'CategorieController@index');
Route::get('categories/{id}', 'CategorieController@show');
Route::get('utilisateurs', 'UtilisateurController@index');
Route::get('utilisateurs/{id}', 'UtilisateurController@show');