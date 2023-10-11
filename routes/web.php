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

Route::get('news_1',function(){

    return view('News/news1');
});

Route::get('news_2',function(){

    return view('News/news2');
});

Route::get('news_3',function(){

    return view('News/news3');
});

Route::get('news_4',function(){

    return view('News/news4');
});

Route::get('about',function(){

    return view('about');
});

Route::get('contact-us',function(){

    return view('contact-us');
});

Route::get('service',function(){

    return view('service');
});

Route::get('Download',function(){

    return view('download');
});

Route::get('profile-dashboard',function(){

    return view('Profile/dashboard');
});

Route::get('admin-dashboard',function(){

    return view('Admin/dashboard');
});

Route::get('admin-login',function(){

    return view('Auth/admin-login');
});

Route::get('cetirizine-login',function(){

    return view('Auth/cetirizine-login');
});

Route::get('certificates',function(){

    return view('Forms/certificates');
});

Route::get('nic',function(){

    return view('Forms/nic');
});

Route::get('passport',function(){

    return view('Forms/passport');
});


Route::get('vehicle-revenue',function(){

    return view('Forms/vehicle-revenue');
});


Route::get('pay-details',function(){

    return view('pay-details');
});


Route::get('appointment',function(){

    return view('Forms/appointment');
});


Route::get('user-manager',function(){

    return view('Admin/user-manager');
});