<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    dd(
        $request->path(),  // path name
        $request->is('/'), // 1 0r 0

        $request->fullUrl(),
        $request->host(),
        $request->httpHost(),
        $request->schemeAndHttpHost(),

        $request->routeIs('home'),  // 1 or 0
        $request->header('X-Header-Name'),
        $request->header('X-Header-Name', 'default'),
        $request->bearerToken(),  // Used in API building

        $request->ip(),
        $request->prefers(['text/html', 'application/json']),
    );

    return view('home',[
        'page_name'=> 'Home Page'
    ]);
})->name('home');

Route::get('/about-page', function () {
    return view('about',[
        'page_name'=> 'About Page'
    ]);
})->name('about');

Route::get('/contact-us', function () {
    return view('contact',[
        'page_name'=> 'Contact Page'
    ]);
})->name('contact');

Route::get('/service-page', function () {
    return view('service',[
        'page_name'=> 'Service Page'
    ]);
})->name('service');
