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

Route::get('/', function () {
    return view('welcome');
});




Route::group(['namespace' => 'App\Http\Controllers'], function () {

    // admin
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/',function(){
            return view('admin.index');
        })->name('admin.index');


        // jobtype
        Route::resource('/job-type', JobTypeController::class);

        // category
        Route::resource('/category', CategoryController::class);


    });
});


