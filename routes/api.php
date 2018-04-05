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
    Route::post('/lesson', 'LessonController@updateLesson');
    Route::delete('/lesson', 'LessonController@deleteLesson');
    Route::get('/lessons', 'LessonController@getListLesson');
    Route::get('/content', 'LessonController@getLessonContent');
    Route::post('/lesson-content', 'LessonController@updateLessonContent');

    Route::get('/courses', 'CourseController@getListCourses');
    Route::get('/course', 'CourseController@getCourse');
    Route::post('/course', 'CourseController@updateCourse');
});