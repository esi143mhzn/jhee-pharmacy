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
Route::get('/optimize-clear', function() {
    $exitCode = Artisan::call('optimize:clear');
    return 'Cache cleared';
});


//Frontend Routes

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/kitchen/product', function () {
    return view('frontend.kitchen.product');
});

Route::get('/kitchen/single-product', function () {
    return view('frontend.kitchen.single-product');
});

Route::get('/household/product', function () {
    return view('frontend.household.product');
});

Route::get('/household/single-product', function () {
    return view('frontend.household.single-product');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/faqs', function () {
    return view('frontend.quick-links');
});

Route::get('/help', function () {
    return view('frontend.quick-links');
});

Route::get('/terms-of-use', function () {
    return view('frontend.quick-links');
});

Route::get('/privacy-policy', function () {
    return view('frontend.quick-links');
});


//Admin Routes

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth'], function() {
	Route::get('/', function() {
		return redirect()->route('admin.dashboard.index');
	})->name('dashboard.index');

    Route::resource('dashboard', 'DashboardController');

    Route::resource('users', 'UserController');
});

Route::get('/admin/login', [
	'uses' => 'Admin\AuthController@login',
	'as' => 'admin.auth.login'
]);

Route::post('/admin/login', [
	'uses' => 'Admin\AuthController@checkLogin',
	'as' => 'admin.auth.login',
	'middleware' => 'throttle:10,1'
]);

Route::get('/admin/logout', [
	'uses' => 'Admin\AuthController@logout',
	'as' => 'admin.auth.logout'
]);

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

// Route::get('/admin/users', function() {
//     return view('admin.users.index');
// });

// Route::get('/admin/users/create', function() {
//     return view('admin.users.create');
// });