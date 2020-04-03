<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('login', 'AuthController@login')->name('admin.login');
    Route::post('postLogin', 'AuthController@postLogin')->name('postLogin');
    
    Route::group(['middleware' => 'auth:admin', 'as' => 'admin.'], function() {

        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::view('/', 'admin::pages.dashboard')->name('dashboard');
        
        Route::resource('admins', 'AdminsController');

        //Filter///////////////////////////////////
            Route::get('filter/trash','FilterController@trash')->name('filter.trash');
            Route::resource('filter', 'FilterController');
        //Filter///////////////////////////////////

        //Lenses///////////////////////////////////
            Route::get('lenses/trash','LensController@trash')->name('lenses.trash');
            Route::resource('lenses', 'LensController');
        //Lenses///////////////////////////////////

        //Products///////////////////////////////////
            Route::get('products/trash','ProductsController@trash')->name('products.trash');
            Route::resource('products', 'ProductsController');
        //Products///////////////////////////////////

       

        Route::resource('contact', 'ContactController')->only([
            'index', 'show', 'destroy'
        ]);
    

        Route::get('users', 'UsersController@index')->name('users.index');
        Route::get('users/{user}', 'UsersController@show')->name('users.show');
        Route::get('users/{user}/add', 'UsersController@addToTeamVapeMasr')->name('users.addToTeamVapeMasr');
        Route::get('users/{user}/remove', 'UsersController@reomveFromTeamVapeMasr')->name('users.reomveFromTeamVapeMasr');
        
       
    

        Route::resource('news-letters', 'NewslettersController')->only([
            'index', 'destroy',
        ]);
     
        
        
        Route::resource('roles', 'RolesController');
        Route::get('updatePermissions', 'RolesController@updatePermissions')->name('roles.updatePermissions');
        
        //Hagar
        Route::resource('informations', 'InformationController');
        Route::resource('customers','CustomerController');
        Route::resource('orders', 'OrdersController');
        Route::resource('mails', 'MailMessageController');
        Route::resource('employees', 'EmployeeController');
        Route::resource('consignees','ConsigneesController');

        Route::resource('languages', 'LanguageController');
        Route::resource('pages', 'PagesController');
        Route::resource('pages.paragraphs', 'ParagraphsController');
        Route::resource('pages.images', 'PageImagesController');
        Route::resource('blogs', 'BlogController');
        Route::resource('diameters', 'DiameterController');

    });
});
