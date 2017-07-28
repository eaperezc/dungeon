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

/*
|--------------------------------------------------------------------------
| Email Confirmation Page
|--------------------------------------------------------------------------
|
| Page displays after a user successfully submits new user crendentials in
| the Registration page.
|
*/

Route::get('/confirmation', 'HomeController@confirmation');

/*
|--------------------------------------------------------------------------
| Team Board Page
|--------------------------------------------------------------------------
|
| The main team page which displays the board. Is currently the page that
| displays after a team member successfullly logs in.
|
*/

Route::get('/board', function () {
    return view('board');
});



// Auth Routes
Auth::routes();
