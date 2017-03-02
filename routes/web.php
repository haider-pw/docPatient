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

Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {

    //This Group will be under prefix of admins such has www.domain.com/admin/$controllerPath
    Route::group(['prefix'=>'admin'],function(){

        //Home or Dashboard of admin
        Route::get('/', 'DashboardController@index');

        //Routes To Manage Doctors
        Route::get('doctors','DoctorController@index');
        Route::get('doctor/add','DoctorController@create');
        Route::post('doctor/save','DoctorController@store');
    });

    //Lists Childrent
    Route::get('children', 'ChildrenController@index');
    //Lists Patients
    Route::get('patients', 'PatientsController@index');

});
