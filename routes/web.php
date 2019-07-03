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

use App\Photo;

Route::get('/', function () {
    $photos = Photo::all();
    return view('welcome', compact('photos'));
});

Auth::routes();



Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){
        return view('admin.index');
    });

    Route::get('/admin/contacts', function(){
        return view('admin/contacts/index');
    })->name('admin.contacts');


    Route::resources([
        '/admin/photos' => 'AdminPhotosController',
//        '/admin/contacts' => 'AdminContactsController'
    ]);

});