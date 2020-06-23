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

Route::group(['middleware' => ['web', 'auth','checkScope'],'prefix'=>'admin'], function () {
    Route::resource('projects', \Client\Project\ProjectController::class);
    Route::resource('feedbacks', \Client\Project\FeedbackController::class);

});
