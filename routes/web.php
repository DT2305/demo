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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::view('/example', 'content-example');
Route::view('/submit', 'submit/submit-exampl-content');
Route::view('/index', 'index');
Route::view('/cand','candidates/create');
// -------------------------------Candidate-------------------------------

// Route::resource('candidate','CandidateController');

Route::group(['prefix' => 'candidate'], function () {
    Route::get('/', 'CandidateController@index')->name('candidate.index');
    Route::get('/create', 'CandidateController@create')->name('candidate.create');
    Route::post('/', 'CandidateController@store')->name('candidate.store');
    // Route::get('/{id}/edit', 'CandidateController@edit')->name('candidate.edit');
    // Route::patch('/{id}', 'CandidateController@update')->name('candidate.update');
    // Route::patch('/{id}', 'CandidateController@destroy')->name('candidate.destroy');
});


