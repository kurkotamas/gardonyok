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
use gardony\Contact;

//Route::get('/', function () {
//    $photos = DB::table('photos')->paginate(3);
//    $about = About::first();
//    $about->increment('views');
//    $contact = Contact::first();
//    return view('welcome', ['photos' => $photos, 'about' => $about, 'contact' => $contact]);
//});

Route::resource('/', 'GuestController');

Auth::routes();

Route::resource('/message', 'MessageController');


Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){
        $about = About::first();
        return view('admin.index', compact('about'));
    });

    Route::resources([
        '/admin/photos' => 'AdminPhotosController',
        '/admin/about' => 'AdminAboutController',
        '/admin/contacts' => 'AdminContactsController',
        '/admin/messages' => 'AdminMessagesController'
    ]);

});