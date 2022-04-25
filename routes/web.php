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

Auth::routes();



        Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
     #################################################################################
        // Route::get('/backcustomer/create','CustomerController@create')->name('customer.create');
   #############################################################################

   Route::get('/backbooking/create','BookingRoomController@create')->name('booking.create');
   Route::post('/backbooking/save','BookingRoomController@save')->name('booking.save');
   Route::post('/backbooking/delete','BookingRoomController@delete')->name('booking.delete');
   Route::get('/backbooking/edit/{id}','BookingRoomController@edit')->name('booking.edit');
   Route::get('/backbooking/show/{id}','BookingRoomController@show')->name('booking.show');

#########################################################################################################
   Route::get('/backcustomer/create','CustomerController@create')->name('customer.create');
   
        Route::post('/backcustomer/save','CustomerController@save')->name('customer.save');
        Route::get('/backroomtype/create','RoomType0Controller@create')->name('roomtype.create');
        Route::post('/backroomtype/save','RoomType0Controller@save')->name('roomtype.save');
##########################################################################################################
        Route::get('/BackRoom/createroom','RoomController@create')->name('room.create');
        Route::post('/BackRoom/save','RoomController@save')->name('room.save');

// #############################one to many relationship ###################################
// Route::get('/home','RelationsController@room_types')->name('index.category');
// Route::get('/home/{room_type_id}','RelationsController@rooms')->name('categories.products');
// ############################one to many relationship ###################################


