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

Route::get('recettes', 'RecetteController@index');
Route::get('recettes/{id}', 'RecetteController@show');
Route::post('recettes', 'RecetteController@store')->name('recette.store');
Route::get('recette/create', 'RecetteController@create');
Route::get('recettes/edit/{id}', 'RecetteController@edit');
Route::put('recette/{id}', 'RecetteController@update')->name('recette.update');
Route::delete('recette/{id}', 'RecetteController@destroy')->name('recette.destroy');

Route::get('categories/{id}', 'CategorieController@show');
Route::post('categories', 'CategorieController@store')->name('categorie.store');
Route::get('categorie/create', 'CategorieController@create');
Route::get('categories/edit/{id}', 'CategorieController@edit');
Route::put('categorie/{id}', 'CategorieController@update')->name('categorie.update');
Route::delete('categorie/{id}', 'CategorieController@destroy')->name('categorie.destroy');

Route::get('utilisateurs/{id}', 'UtilisateurController@show');
Route::post('utilisateurs', 'UtilisateurController@store')->name('utilisateur.store');
Route::get('utilisateur/create', 'UtilisateurController@create');
Route::get('utilisateurs/edit/{id}', 'UtilisateurController@edit');
Route::put('utilisateur/{id}', 'UtilisateurController@update')->name('utilisateur.update');
Route::delete('utilisateur/{id}', 'UtilisateurController@destroy')->name('utilisateur.destroy');

