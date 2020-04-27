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

// Route::get('/', function () {
//     return view('welcome');
// })->name('/');
// route::get()



route::get('/','MainController@index')->name('/');
route::get('about','MainController@about')->name('about');
// route::get('all-post','MainController@post')->name('post');
route::get('contact-us','MainController@contact')->name('contact');
route::get('allData','MainController@allData')->name('alldata');




// post 

route::prefix('post')->group(function(){
    route::get('All-post','post\PostController@index')->name('AllPost');
    route::get('Add-post','post\PostController@create')->name('AddPost');
    route::post('store','post\PostController@store')->name('allStore');
    route::get('/view/{id}','post\PostController@viewPost');
    route::get('/edit/{id}','post\PostController@editPost');
    route::post('/update/{id}','post\PostController@updatePost');
    route::get('/delete/{id}','post\PostController@deletePost');
});

// contact 

Route::resource('/contact', 'ContactController')->except('edit','destroy','update','show');
 route::get('contact/view/{id}','ContactController@show');
 route::get('contact/delete/{id}','ContactController@destroy');
 route::get('contact/edit/{id}','ContactController@edit');
route::post('contact/update/{id}','ContactController@update');

//Address
route::prefix('/address')->group(function(){
    route::get('/','AddressController@index')->name('address');
    route::get('/create','AddressController@create')->name('address.create');
    route::post('/','AddressController@store')->name('address.store');
   });


//    Phone 

 route::prefix('/phone')->group(function(){
     route::get('/','PhoneController@index')->name('phone');
     route::get('/create','PhoneController@create')->name('phone.create');
     route::post('/','PhoneController@store')->name('phone.store');
   });