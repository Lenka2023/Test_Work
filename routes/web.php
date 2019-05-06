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

// Route::get('/', function () {
//     return view('welcome');
// });
//


Auth::routes();
//Route::redirect('/register', '/login'); //Block register

Route::group([
    'as' => 'admin.',
    'middleware' => 'auth',
    'namespace' => 'Admin',
    'prefix' => 'admin'], function() {

        // Dashboard
        Route::get('Volodimir3.loc/admin/posts', 'DashboardController@index')->name('dashboard');

//      Pages
        Route::get('Volodimir3.loc/admin/posts/pages/{type}', 'PagesController@index');
        Route::get('Volodimir3.loc/admin/posts/pages', 'PagesController@index');
        Route::get('Volodimir3.loc/admin/posts/pages/create/{type}', ['as' => 'pages.create', 'uses' => 'PagesController@create']);
        Route::post('Volodimir3.loc/admin/posts/pages/store', ['as' => 'pages.store', 'uses' => 'PagesController@store']);
        Route::get('Volodimir3.loc/admin/posts/pages/{id}/edit', ['as' => 'pages.edit', 'uses' => 'PagesController@edit']);
        Route::put('Volodimir3.loc/admin/posts/pages/{id}', ['as' => 'pages.update', 'uses' => 'PagesController@update']);
        Route::get('Volodimir3.loc/admin/posts/pages/{id}/delete', ['as' => 'pages.delete', 'uses' => 'PagesController@delete']);
        // Route::resource('/pages', 'PagesController');

//      Categories
        Route::resource('Volodimir3.loc/admin/posts/categories', 'CategoriesController');

//      Language
        Route::resource('Volodimir3.loc/admin/posts/language', 'LanguageController');

//      Posts
        Route::resource('Volodimir3.loc/admin/posts/posts', 'PostsController');

//      Posts
        Route::resource('Volodimir3.loc/admin/posts/reviews', 'ReviewsController');
        Route::put('reviews/status/{id}', ['as' => 'reviews.status', 'uses' => 'ReviewsController@status']);

//      Users
        Route::resource('Volodimir3.loc/admin/posts/users', 'UsersController');

//      Roles
        Route::resource('Volodimir3.loc/admin/posts/roles', 'RolesController');

//      Settings
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('Volodimir3.loc/admin/posts', 'SettingsController@edit')->name('edit');
            Route::put('Volodimir3.loc/admin/posts', 'SettingsController@update')->name('update');
        });

    });

Route::get('/{any}', function () {
    return view('spa');
})->where('any', '.*');