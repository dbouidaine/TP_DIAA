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
    return view('Login');
});

Route::get('/WebMaster', function () {////////////////////////
    return view('WebMaster');
})->name('webmaster');
//Route::get('/WebMaster', 'AdministratifController@getForm');/////////////////
Route::post('/WebMaster', ['uses' => 'AdministratifController@postForm', 'as' => 'storeAdministratif']);//////////////////

Route::get('/rech', function () {
    return view('Recherche');
});
Route::get('/etudiants','EtudiantController@getEtudiants')->name('admin');///////////////
Route::get('rech', 'EtudiantController@getForm');
Route::post('rech', ['uses' => 'EtudiantController@postForm', 'as' => 'storeEtudiant']);

//Route::get('/etudiantt', 'EtudiantController@index')->name('etudiant.index');
Route::resource('/etudiantt', 'EtudiantController');
