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

Auth::routes(['register' => false, 'login' => false]);

Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/courses', 'HomeController@courses')->name('courses');
Route::get('/course/{slug}', 'HomeController@single_courses')->name('course.single');
Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/blog/{id}', 'HomeController@blog')->name('blog.single');
Route::get('/enroll', 'HomeController@enroll')->name('enroll');
Route::post('/enroll/course/store','HomeController@enroll_store')->name('enroll.store');
Route::get('get/course/price','HomeController@getCoursePrice')->name('get.course.price'); //API Ajax
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/our-mission', 'HomeController@our_mission')->name('our_mission');


