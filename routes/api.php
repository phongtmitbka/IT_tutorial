<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function () {
    Route::get('/lesson', 'LessonController@getLesson');
    Route::get('/search-lesson', 'LessonController@searchLesson');
    Route::post('/lesson', 'LessonController@updateLesson');
    Route::post('/lesson/update-view', 'LessonController@updateView');
    Route::delete('/lesson', 'LessonController@deleteLesson');
    Route::get('/lessons', 'LessonController@getListLesson');
    Route::get('/content', 'LessonController@getLessonContent');
    Route::post('/lesson-content', 'LessonController@updateLessonContent');

    Route::get('/courses', 'CourseController@getListCourses');
    Route::get('/course', 'CourseController@getCourse');
    Route::delete('/course', 'CourseController@delCourse');
    Route::put('/course', 'CourseController@updateCourse');
    Route::post('/course', 'CourseController@addCourse');
    Route::get('/group-course', 'CourseController@getGroupCourse');

    Route::get('/posters', 'UserController@posters');
    Route::post('/poster', 'UserController@addPoster');
    Route::put('/poster', 'UserController@updatePoster');
    Route::delete('/poster', 'UserController@delPoster');
    Route::post('/remember-lesson', 'UserController@updateRememberLesson');
});