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

Route::get('/', 'BigQuestionController@index');

Route::get('/quiz/{id}', 'SmallQuestionController@index')->name('quiz.index');

Auth::routes();

Route::get('/admin', 'adminController@index')->name('admin');

Route::get('/admin/big_questions', 'adminController@get_big_questions')->name('admin.big_questions');

Route::post('/admin/big_questions/create', 'AdminController@add_big_questions')->name('admin.big_question_add');

Route::get('/admin/big_questions/add', 'AdminController@big_question_add_form')->name('admin.big_question_add_form');
