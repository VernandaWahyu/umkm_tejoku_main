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

// Jika controller berada di namespace App\Http\Controllers\Backend
Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
Route::get('/article/{slug}', [App\Http\Controllers\Backend\ArticleController::class, 'show'])->name('article.show');

Auth::routes();
/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);

    // Slider Routes
    Route::resource('slider', 'Backend\SliderController', ['names' => 'admin.slider']);

    // Contact Routes
    Route::resource('contact', 'Backend\ContactController', ['names' => 'admin.contact']);

    // About Routes
    Route::resource('about', 'Backend\AboutController', ['names' => 'admin.about']);

    // Gallery Routes
    Route::resource('gallery', 'Backend\GalleryController', ['names' => 'admin.gallery']);

    // GaleriKolom Routes
    Route::resource('galerikolom', 'Backend\GalerikolomController', ['names' => 'admin.galerikolom']);

    // Social Routes
    Route::resource('social', 'Backend\SocialController', ['names' => 'admin.social']);

    // Map Routes
    Route::resource('map', 'Backend\MapController', ['names' => 'admin.map']);

    // Article Routes
    Route::resource('article', 'Backend\ArticleController', ['names' => 'admin.article']);

    // Sponsor Routes
    Route::resource('sponsor', 'Backend\SponsorController', ['names' => 'admin.sponsor']);

    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    // Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
