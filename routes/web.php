<?php

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

Route::get('/', "PertanyaanController@welcome")->name("welcome");
Route::get('/pertanyaan', "PertanyaanController@index")->name("pertanyaan");
Route::get("/pertanyaan/create", "PertanyaanController@create")->name("pertanyaan_create");
Route::post("/pertanyaan", "PertanyaanController@store");
Route::get("/pertanyaan/{id}", "PertanyaanController@detail");
Route::get("/pertanyaan/{id}/edit", "PertanyaanController@edit");
Route::put("/pertanyaan/{id}", "PertanyaanController@update");
Route::get("/pertanyaan/{id}/delete", "PertanyaanController@deleteconfirm");
Route::delete("/pertanyaan/{id}", "PertanyaanController@delete");

Route::get("/jawaban/{pertanyaan_id}", "JawabanController@index");
Route::get("/jawaban/create/{pertanyaan_id}", "JawabanController@create")->name("jawaban_create");
Route::post("/jawaban/{pertanyaan_id}", "JawabanController@store");
