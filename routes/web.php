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

Route::get('/rech', function () {
    return view('Recherche');
});
Route::get('/WebMaster', function () {
    return view('WebMaster');
})->name('webmaster');

Route::get('/Administratif','EtudiantController@getEtudiants')->name('admin');

Route::get('Admin', 'AdministratifController@getForm');
Route::post('/Admin','AdministratifController@postForm');

Route::get('etudiant', 'EtudiantController@getForm');
Route::post('etudiant', ['uses' => 'EtudiantController@postForm', 'as' => 'storeEtudiant']);

Route::get('/etudiantt', 'EtudiantController@index')->name('etudiant.index');
Route::resource('/etudiantt', 'EtudiantController');
