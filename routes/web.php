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
<<<<<<< HEAD
Route::get('recettes', 'RecetteController@index');
Route::post('recettes/create', 'RecetteController@store');
Route::get('recettes/{id}', 'RecetteController@show');
Route::put('recettes/edit/{recette}', 'RecetteController@edit');
Route::delete('recettes/delete/{recette}', 'RecetteController@destroy');

Route::get('categories/{id}', 'CategorieController@show');
Route::post('categories', 'CategorieController@store');
Route::get('categorie/create', 'CategorieController@create');

Route::get('utilisateurs/{id}', 'UtilisateurController@show');
=======
Route::get('recettes/{id}', 'RecetteController@show');
Route::delete('recettes/{id}', 'RecetteController@destroy');
Route::get('recettes', 'RecetteController@index');
Route::get('categories/{id}', 'CategorieController@show');
Route::get('utilisateurs/{id}', 'UtilisateurController@show');
>>>>>>> users
