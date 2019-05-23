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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/home', 'HomeController@index')->name('home');


        /***** Routes to Categories*/

Route::get('/catégories', 'CatController@index' );
Route::get('/catégories/ajouter', 'CatController@create');
Route::get('/catégories/supp/{id}', 'CatController@destroy');
Route::get('/edit/{id}', 'CatController@edit');
Route::delete('SupprimerCat', 'CatController@destroy')->name('SupprimerCat');
Route::resource('categories', 'CatController');


//*******Routes to Sous Categories **********/ 
Route::get('/Sous_Catégories', 'SousCatController@index' );
Route::get('/Sous_Catégories/ajouter', 'SousCatController@create');
Route::get('/Sous_Catégories/modifier/{idsousCat}', 'SousCatController@edit');
Route::post('Sous_Categories/update/{id}', 'SousCatController@update')->name('Sous_Categories.update');
Route::get('/Sous_Catégories/supp/{id}', 'SousCatController@destroy');
Route::resource('Sous_Categories', 'SousCatController');
        


            //******* **********/ Routes to Table
Route::get('/table', 'TableController@index' );
Route::get('/table/ajouter', 'TableController@create');
Route::delete('Supprimertab', 'TableController@destroy')->name('Supprimertab');
Route::get('/tables/modifier/{id}', 'TableController@edit');
Route::post('/tables/{id}', 'TableController@update');
Route::get('/tables/supp/{id}', 'TableController@destroy');

Route::resource('tables', 'TableController');


                /************************* *Routes to plat */
                
 Route::get('/plat', 'PlatController@index' );
 Route::get('/plat/ajouter', 'PlatController@create');
 Route::resource('plat', 'PlatController');
 Route::get('/plat/modifier/{id}', 'PlatController@edit');
 Route::post('/plat/{id}', 'PlatController@update');
 Route::post('/plat/fetch', 'PlatController@fetch'); 
 Route::get('/plat/supp/{id}', 'PlatController@destroy');

 Route::delete('Supprimerplat', 'PlatController@destroy')->name('Supprimerplat');


/************************* *Routes to serveur */
                
Route::get('/serveur', 'ServeurController@index' );
Route::get('/serveur/ajouter', 'ServeurController@create');
Route::get('/serveur/modifier/{id}', 'ServeurController@edit');
Route::post('/serveur/{id}', 'ServeurController@update');
Route::resource('serveur', 'ServeurController');
Route::get('/serveur/supp/{id}', 'ServeurController@destroy');


Route::get('/Cuisiniers', function () {
    return view('G-Cuisinier');
});
Route::get('/Menu', function () {
    return view('G-Menu');
});
Route::get('/Caissier', function () {
    return view('G-Caissier');
});
Auth::routes();
