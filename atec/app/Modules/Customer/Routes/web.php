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

Route::group(['prefix' => 'customer'], function () {




    Route::group(['middleware' => 'auth:web', 'as' => 'customer.'], function () {
        
        
        // Customer /////////////////////////////////////////////////
        Route::get('/', 'CustomerController@home')->name('home');
        Route::get('information', 'CustomerController@information')->name('information');
        Route::get('setting', 'CustomerController@setting')->name('setting');
        Route::patch('update', 'CustomerController@update')->name('update');
        // End Customer /////////////////////////////////////////////////

        // Employees /////////////////////////////////////////////////
        Route::get('employees', 'EmployeesController@employees')->name('employees');
        Route::post('employees', 'EmployeesController@store')->name('employees.store');
        Route::post('employees/{employee}', 'EmployeesController@update')->name('employees.update');
        Route::delete('employees/{employee}', 'EmployeesController@destroy')->name('employees.delete');
        // End Employees /////////////////////////////////////////////////
        
        // Orders /////////////////////////////////////////////////
        Route::get('Standard-Orders', 'OrderController@standard')->name('order.standard');
        Route::post('Standard-Orders', 'OrderController@store')->name('order.store');
        Route::get('Review_Order', 'OrderController@review')->name('order.review');
        Route::get('history', 'OrderController@history')->name('order.history');

        
        
        // End Orders /////////////////////////////////////////////////

        Route::resource('histories', 'HistoryController');

    
        Route::get('/getProduct','OrderController@getProduct')->name('getProduct');
    
        Route::post('/setorder','CustomerController@setorder')->name('setorder');
    
       
                
    });
});