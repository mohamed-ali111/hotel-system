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

// Route::resource('room_type','RoomType0Controller');

Route::delete('/room_type/delete','RoomType0Controller@delete')->name('room_type.delete');

        Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
     #################################################################################
        // Route::get('/backcustomer/create','CustomerController@create')->name('customer.create');
   #############################################################################

   Route::get('/backbooking/create','BookingRoomController@create')->name('booking.create');
   Route::post('/backbooking/save','BookingRoomController@save')->name('booking.save');
   Route::post('/backbooking/delete','BookingRoomController@delete')->name('booking.delete');
   Route::get('/backbooking/edit/{id}','BookingRoomController@edit')->name('booking.edit');
   Route::get('/backbooking/show/{id}','BookingRoomController@show')->name('booking.show');
   Route::get('/backbooking/index','BookingRoomController@index')->name('backbooking.index');

#########################################################################################################
   Route::get('/backcustomer/create','CustomerController@create')->name('customer.create');
   
        Route::post('/backcustomer/save','CustomerController@save')->name('customer.save');
        Route::get('/backroomtype/create','RoomType0Controller@create')->name('roomtype.create');
        Route::post('/backroomtype/save','RoomType0Controller@save')->name('roomtype.save');
        Route::get('/backroomtype/roomtype','RoomType0Controller@index')->name('backroomtype.roomtype');

##########################################################################################################
        Route::get('/BackRoom/createroom','RoomController@create')->name('room.create');
        Route::post('/BackRoom/save','RoomController@save')->name('room.save');
        Route::get('/backroom/index','RoomController@index')->name('backroom.index');
##########################################################################################3#############
        Route::get('/backIdCard/index','IdCardTypeController@index')->name('backIdCard.index');
##########################################################################################3#############
        Route::get('/backstaff/index','Staff1sController@index')->name('backstaff.index');
##########################################################################################3#############
        Route::get('/backstaffstype/index','StaffTypeController@index')->name('backstaffstype.index');

###############################################################################################
// for testing 
Route::get('/roomType0/{id}','BookingRoomController@getproducts');


Route::get('MarkAsRead_all','BookingRoomController@MarkAsRead_all')->name('MarkAsRead_all');
// for testing 
// Route::get('readNotification', 'BookingRoomController@readNotification')->name('readNotification');

Route::get('/mark-as-read', 'BookingRoomController@markNotification')->name('markNotification');

// #############################one to many relationship ###################################
// Route::get('/home','RelationsController@room_types')->name('index.category');
// Route::get('/home/{room_type_id}','RelationsController@rooms')->name('categories.products');
// ############################one to many relationship ###################################


