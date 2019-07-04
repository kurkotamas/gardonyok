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


use gardony\Photo;
use gardony\About;

Route::get('/', function () {
    $photos = Photo::all();
    $about = About::all();
    $about->toArray();
    return view('welcome', compact('photos', 'about'));
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
        '/admin/about' => 'AdminAboutController',
//        '/admin/contacts' => 'AdminContactsController'
    ]);

});