<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\TraceLog;

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


Route::prefix('admin')->group(function () {
    Route::get('/', 'adminController@index')->name('admin');

    Route::get('big_questions', 'adminController@get_big_questions')->name('admin.big_questions');

    Route::post('big_questions/create', 'AdminController@add_big_questions')->name('admin.big_question_add');

    Route::get('/admin/big_questions/add', 'AdminController@big_question_add_form')->name('admin.big_question_add_form');

    Route::get('big_questions/{id}', 'AdminController@big_question')->name('admin.big_question');

    Route::get('big_questions/{id}/update', 'AdminController@update_big_question_index')->name('admin.big_question.update.index');

    Route::post('big_questions/{id}/update', 'AdminController@update_big_question')->name('admin.big_question.update');

    Route::get('/big_questions/{id}/delete', 'AdminController@delete_big_quesiton_index')->name('admin.big_question.delete.index');

    Route::post('big_questions/{id}/delete', 'AdminController@delete_big_question')->name('admin.big_question.delete');

    Route::post(
        '/big_questions/order',
        'AdminController@update_big_questions_order'
    )->name('admin.update_big_questions_order');
});
