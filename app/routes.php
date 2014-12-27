<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|---------------------------
| Home page - Frontend
|--------------------------- 
*/

Route::get('/', function()
{
	return View::make('home');
});

/*
|---------------------------
| Home page - Backend
|--------------------------- 
*/

Route::get('backend/', function() {
	return View::make('backend.home');
});

/*
|---------------------------
| Backend
|--------------------------- 
*/

// Gestione Hubbers

Route::resource('hubbers', 'HubbersController');
