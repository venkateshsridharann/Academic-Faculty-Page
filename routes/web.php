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
    return view('pages.index');
});
Route::get('/courses', function () {
    return view('pages.courses');
});

Route::get('/research', function () {
    return view('pages.research');
});

Route::get('/ECEGrad', function () {
    return view('pages.ECEGrad');
});

Route::get('/Publications', function () {
    return view('pages.Publications');
});

Route::get('/education', function () {
    return view('pages.education');
});

Route::get('/awards', function () {
    return view('pages.awards');
});


Route::get('/gradstudents', function () {
    return view('pages.gradstudents');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/conferences', function () {
    return view('pages.conferences');
});

Route::get('/reu', function () {
    return view('pages.reu');
});


Route::get('/grants', function () {
    return view('pages.grants');
});

