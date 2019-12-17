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

Route::get('/admin', function () {
    return view('index');
});

Route::get('/users', function () {
    return view('profile.usersProfile');
});

Route::get('/register_action', function () {
    return view('/');
});

Route::get('/login', function () {
    return view('/');
});

Route::get('/form', function () {
    return view('techForm');
});



// Landing Page
Route::get('/', 'FrontendController@landing')->name('landing');

Route::get('/contact', 'FrontendController@contact')->name('contact');

//features
Route::get('/features', 'FrontendController@features')->name('features');
Route::get('/features/onsite', 'FrontendController@features_onsite')->name('features/onsite');
Route::get('/features/design', 'FrontendController@features_design')->name('features/design');
Route::get('/features/maintenance', 'FrontendController@features_maintenance')->name('features/maintenance');

//Contact
//Route::get('/messages', 'MessagesController@getMessages');
//Route::post('/contact/submit', 'ContactsController@store');

//Register
//Route::get('/register_action', 'PostsController@create');
//Route::post('/register_action', 'PostsController@store');
//Route::get('/login', 'PostsController@create');
//Route::post('/logout', function () {
// Auth::logout('/');
// return redirect::to ('')
//})-> middleware("Auth");

//Admin section
// Route::resource('/admin', 'AdminController@index');
// Route::resource('/posts', 'PostsController');
//Route::get('/admin#tables1', 'AdminController@tables')->name('tables1');
//Route::get('/admin#tables2', 'AdminController@tables')->name('tables2');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth', 'admin']}, function() {

//         Route::get('/dashboard', function() {
//             return view('admin.dashboard');
//         });

//         Route::get('');
//         Route::get('');
//         Route::put('');
//         Route::delete('');
// })
