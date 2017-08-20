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
use App\Post;

Route::get('/', function () {
    return view('index',compact('posts'));
});

// Route::get('/events', function(){
// 	// $posts = DB::table('posts')->where('type','Sport')->get();
// 	// return view('Requests.request',compact('posts'));
	
// 	return view('Events.display');
// });

Route::get('/about', function() {
    return view('about');
});

Route::get('/requestspost', function(){
	return view('Requests.post');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/map', function(){
	return view('map');
});


Route::post('/posts','PostController@store');

Route::get('/request','PostController@index');

Route::get('/requests/{post}','PostController@show');

Route::any('/searchResults','PostController@search');

Route::any('/eventsSearch','EventsController@search');

Route::get('/events','EventsController@index');
