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

Route::get('api/recettes', 'RecetteController@index');
Route::post('api/recettes/create', 'RecetteController@store');
Route::get('api/recettes/{id}', 'RecetteController@show');
Route::put('api/recettes/edit/{recette}', 'RecetteController@edit');
Route::delete('api/recettes/delete/{recette}', 'RecetteController@destroy');

Route::get('api/categories', 'CategorieController@index');
Route::get('categories/{id}', 'CategorieController@show');
Route::get('utilisateurs', 'UtilisateurController@index');
Route::get('utilisateurs/{id}', 'UtilisateurController@show');
