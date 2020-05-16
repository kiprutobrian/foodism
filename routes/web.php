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


/**
 * Frontend.
 */
Route::get('/', 'User\PagesController@index')->name('home');

Auth::routes();
/**
 * Admin.
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    // Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login');
    // Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

    // Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.request');
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password');
    // Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.password.email');
    // Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');

    // Route::get('/invite/accept/{id}', 'Admin\UsersController@showAcceptInvite')->name('invite.show');
    // Route::put('/invite/accept', 'Admin\UsersController@acceptInvite')->name('invite.accept');
});