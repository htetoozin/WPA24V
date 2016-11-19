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

Route::group(['prefix' => 'backend'], function () {
	Route::get('/',"BackendController@index");
    Route::get('login', "AccessController@getLogin");
    Route::get("logout", "AccessController@logout");
    Route::post('login', 'AccessController@postLogin');
    Route::get('register', "AccessController@getRegister");
    Route::post('register', 'AccessController@postRegister');
    Route::resource('product','ProductController');
});

// Route::get("/login", function(){
// 	return view("backend.login");
// });


// Route::get("/register", function(){
// 	return view("backend.register");
// });


// Route::get("backend/login", 'AccessController@login');

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/backend/register", function() {
// 	$credentials = [
//     	'email'    => 'phpcrazy@gmail.com',
//     	'password' => '123456',
// 	];

// 	$user = Sentinel::register($credentials);
// 	$activation = Activation::create($user);
// 	var_dump("http://wpa24v.dev/activate/". $user->id . "/" . $activation['code']);
// });

Route::get("activate/{id}/{activate_code}", function($id, $activate_code){
	$user = Sentinel::findById($id);

	if (Activation::complete($user, $activate_code))
	{
    	return "Activation Successfully!";
	}
	else
	{
    	return "Not Good!";
	}
});

// Socialize
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');



Route::get('password-test', function(){
	var_dump(md5("123456"));
	var_dump(md5("123456"));
	var_dump(sha1("123456"));
	var_dump(sha1("123456"));
	var_dump(bcrypt("123456"));
	var_dump(bcrypt("123456"));
});











