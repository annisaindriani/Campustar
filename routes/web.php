<?php

use App\Http\Controllers\CareerAptitudeTestQuestionController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/career-aptitude-test', [CareerAptitudeTestQuestionController::class, 'index']);

Route::get('/campus', function () {
    return view('campus');
});

Route::get('/major', function () {
    return view('major');
});

Route::get('/detailcampus', function () {
    return view('detailcampus');
});

Route::get('/detailmajor', function () {
    return view('detailmajor');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/arsip', function () {
    return view('arsip');
});

Route::get('/mulaites', function () {
    return view('mulaites');
});

Route::get('/hasiltes', function () {
    return view('hasiltes');
});

Route::get('/forum', function () {
    return view('forum');
});