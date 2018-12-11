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


//the home route
Route::get('/test', 'PagesController@test');

Route::get('/', 'PagesController@home');

Route::get('/redirect', 'LoginController@redirectToProvider');

Route::get('/calback', 'LoginController@handleProviderCallback');

Route::get('/{email}/register', 'LoginController@register');


Route::post('/register', 'LoginController@postRegistration');

//Route::get('/{email}/register',['uses' => 'ForgotPasswordController@resetPassword', 'as' => 'password.reset']);



Route::group(['middleware' => 'admin'], function(){

    Route::get('/dashboard', ['uses' => 'AdminController@dashboard','as' => 'dashboard']);

    Route::get('/open-applications', 'AdminController@openApplications');
    Route::get('/rejected-applications', 'AdminController@rejectedApplications');
    Route::get('/approved-applications', 'AdminController@approvedApplications');

    Route::get('admin/users/{id}/edit', 'AdminController@editUser');
    Route::post('edit/{id}','AdminController@update');

    Route::post('/approve-registration/{id}','AdminController@approve');
    Route::post('/disapprove-registration/{id}','AdminController@disApprove');


});

Route::get('admin/login', ['uses' => 'AdminController@login','as' => 'admin.login']);
Route::post('/admin/login', ['uses' => 'AdminController@postLogin','as' => 'admin.post.login']);



