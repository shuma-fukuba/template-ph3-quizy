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

// admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('index');

    // big questions
    Route::group(['prefix' => 'big_questions', 'as' => 'big_questions.'], function () {
        Route::get('/', 'BigQuestionController@index')->name('index');
        Route::get('/add', 'BigQuestionController@add_form')->name('add_index');
        Route::post('/add', 'BigQuestionController@add')->name('add');
        Route::get('/{id}', 'BigQuestionController@big_question')->name('big_question');
        Route::get('/{id}/update', 'BigQuestionController@update_index')->name('update_index');
        Route::post('/{id}/update', 'BigQuestionController@udpate')->name('udpate');
        Route::get('/{id}/delete', 'BigQuestionController@delete_index')->name('delete_index');
        Route::post('/{id}/delete', 'BigQuestionController@delete')->name('delete');

        Route::post(
            '/order',
            'BigQuestionController@order'
        )->name('order');

        // small questions
        Route::group(['prefix' => '{big_question_id}/small_questions', 'as' => 'small_questions.'], function () {
            Route::get('/create', 'SmallQuestionController@create_index')->name('create_index');
            Route::post('/create', 'SmallQuestionController@create')->name('create');
            Route::post('/order', 'SmallQuestionController@order')->name('order');
        });
    });

    Route::group(['prefix' => 'small_questions', 'as' => 'small_questions.'], function () {
        Route::get('/{small_question_id}', 'SmallQuestionController@index')->name('small_question'); // 謎にメソッドが未定義になるんご
        Route::get('/{small_question_id}/edit', 'SmallQuestionController@update_index')->name('update_index');

        Route::post('/{small_question_id}/edit', 'SmallQuestionController@update')->name('update');

        Route::get('/{small_question}/delete', 'SmallQuestionController@delete_index')->name('delete_index');
        Route::post('/{small_question_id}/delete', 'SmallQuestionController@delete')->name('delete');
    });

    Route::group(
        ['prefix' => 'choices', 'as' => 'choices.'],
        function () {
            Route::get('/', 'ChoiceConstroller@index')->name('index');
            Route::post('/{choice_id}/update', "ChoiceController@update")->name('update');
            Route::get('/{choice_id}', 'ChoiceController@choice')->name('choice
        ');
        }
    );
});
