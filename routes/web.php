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

Route::get( '/', function() {

    return view( 'welcome' );

} )->name( 'home' );


//Only display tasks if user is logged in
Route::group( [ 'middleware'=>'auth' ] , function(){

    Route::get( '/tasks', 'TasksController@index' );
    Route::get( '/tasks/create', 'TasksController@create' );
    Route::post( '/tasks', 'TasksController@store' );

} );

// define auth routes
Route::group( ['prefix' => 'auth', 'namespace' => 'Auth' ], function() {

    Route::get( '/login', 'LoginController@show' )->name( 'auth.login' );
    Route::get( '/login/google', 'LoginController@redirectToGoogle' )->name( 'auth.google.login' );
	Route::get( '/login/google/callback', 'LoginController@handleGoogleCallback');
    Route::get( '/logout', 'LoginController@logout' )->name( 'auth.logout' );

} );

// define departments routes
Route::group( ['prefix' => 'departments' ], function() {

    Route::get( '/', 'DepartmentController@index' );
    Route::get( '/create', 'DepartmentController@create' );
    Route::post( '/', 'DepartmentController@store');
    Route::get( '/{department}', 'DepartmentController@show' );

} );
