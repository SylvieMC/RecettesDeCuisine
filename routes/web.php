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

Route::post('avatars', 'AvatarController@store')->name('avatar.store');
Route::get('avatar/create', 'AvatarController@create');
Route::get('avatars/edit/{id}', 'AvatarController@edit');
Route::put('avatar/{id}', 'AvatarController@update')->name('avatar.update');
Route::delete('avatar/{id}', 'AvatarController@destroy')->name('avatar.destroy');

Route::post('ingredientsRecettes', 'IngredientRecetteController@store')->name('ingredientRecette.store');
Route::get('ingredientRecette/create', 'IngredientRecetteController@create');
Route::get('ingredientsRecettes/edit/{id}', 'IngredientRecetteController@edit');
Route::put('ingredientRecette/{id}', 'IngredientRecetteController@update')->name('ingredientRecette.update');
Route::delete('ingredientRecette/{id}', 'IngredientRecetteController@destroy')->name('ingredientRecette.destroy');

Route::post('etapes', 'EtapeController@store')->name('etape.store');
Route::get('etape/create', 'EtapeController@create');
Route::get('etapes/edit/{id}', 'EtapeController@edit');
Route::put('etape/{id}', 'EtapeController@update')->name('etape.update');
Route::delete('etape/{id}', 'EtapeController@destroy')->name('etape.destroy');

Route::post('ingredients', 'IngredientController@store')->name('ingredient.store');
Route::get('ingredient/create', 'IngredientController@create');
Route::get('ingredients/edit/{id}', 'IngredientController@edit');
Route::put('ingredient/{id}', 'IngredientController@update')->name('ingredient.update');
Route::delete('ingredient/{id}', 'IngredientController@destroy')->name('ingredient.destroy');

Route::post('recettes', 'RecetteController@store')->name('recette.store');
Route::get('recette/create', 'RecetteController@create');
Route::get('recettes/edit/{id}', 'RecetteController@edit');
Route::put('recette/{id}', 'RecetteController@update')->name('recette.update');
Route::delete('recette/{id}', 'RecetteController@destroy')->name('recette.destroy');


Route::get('recettes', 'RecetteController@index');
Route::get('recettes/{id}', 'RecetteController@show')->name('recette.show');
Route::post('recettes', 'RecetteController@store')->name('recette.store');
Route::get('recette/create', 'RecetteController@create');
Route::get('recettes/edit/{id}', 'RecetteController@edit');
Route::put('recette/{id}', 'RecetteController@update')->name('recette.update');
Route::delete('recette/{id}', 'RecetteController@destroy')->name('recette.destroy');

Route::get('categories/{id}', 'CategorieController@show')->name('categorie.show');
Route::post('categories', 'CategorieController@store')->name('categorie.store');
Route::get('categorie/create', 'CategorieController@create');
Route::get('categories/edit/{id}', 'CategorieController@edit');
Route::put('categorie/{id}', 'CategorieController@update')->name('categorie.update');
Route::delete('categorie/{id}', 'CategorieController@destroy')->name('categorie.destroy');

Route::get('utilisateurs/{id}', 'UtilisateurController@show')->name('utilisateur.show');
Route::post('utilisateurs', 'UtilisateurController@store')->name('utilisateur.store');
Route::get('utilisateur/create', 'UtilisateurController@create');
Route::get('utilisateurs/edit/{id}', 'UtilisateurController@edit');
Route::put('utilisateur/{id}', 'UtilisateurController@update')->name('utilisateur.update');
Route::delete('utilisateur/{id}', 'UtilisateurController@destroy')->name('utilisateur.destroy');

