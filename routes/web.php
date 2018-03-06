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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/instructor', 'DashboardController@instructor')->name('dashboard.instructor');
Route::get('/dashboard/instructor', 'DashboardController@instructorDashboard')->name('dashboard.instructor.dashboard');

Route::get('/courses/categories/{category}','CourseController@index')->name('courses');
Route::get('/courses/{course}', 'CourseController@show');
Route::get('/courses/{course}/inscribe', 'CourseController@addCourse')->name('courseRegister');

Route::get('dashboard/instructor/course/{course}', function ($course) {
    //
});