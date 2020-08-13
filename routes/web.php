<?php

/*
 * to find trips as a traveler for a userMaster with id=8
 * $data = \App\UserMaster::find(8);
 * dd($data->trips_as_traveler);

 * to find a travelers for a trip with id=2
 * $data = \App\Trip::find(2);
 * dd($data->travelers);

 * to find a trips as driver for userMaster with id=1
 * $data = \App\UserMaster::find(1);
 * dd($data->trips_as_driver);

 * to find a driver for trip with id=1
 * $data = \App\Trip::find(1);
 * dd($data->driver);
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/adminControlling',function (){
    return view('adminControlling');
})->middleware(['adminCreation','auth']);

Route::get('/reservation',function (){
    $data = \App\Reservation::all();
    return view('reservation',compact('data'));
})->middleware(['reservation','auth']);

Route::resource('admin','UsersController')->middleware('auth');

Route::get('travelerDetails/{id}',function ($id){
    $data = \App\UserMaster::find($id);
    return view('show_traveler_details',compact('data'));
})->middleware('auth');

Route::get('tripDetails/{id}',function ($id){
    $data = \App\Trip::find($id);
    return view('show_trip_details',compact('data'));
})->middleware('auth');

Route::get('accept/{id}',function ($id){
    $data = \App\Reservation::whereId($id)->first();
    $data->update([
        'ID'            =>  $data->ID,
        'TravellerId'   =>  $data->TravellerId,
        'TripId'        =>  $data->TripId,
        'Accebted'      =>  1,
    ]);

    //send notification

    return redirect('/reservation');
})->middleware('auth');

Route::get('refuse/{id}',function ($id){
    $data = \App\Reservation::whereId($id)->first();
    $data->update([
        'ID'            =>  $data->ID,
        'TravellerId'   =>  $data->TravellerId,
        'TripId'        =>  $data->TripId,
        'Accebted'      =>  0,
    ]);

    //send notification

    return redirect('/reservation');
})->middleware('auth');
