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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return '<h1>Hello, world!</h1>';
//});

Route::get('/', function () {
    $name = 'John';
    $res = 2 + 3;
//    return view('home')->with('var', $res);
//    return view('home', ['var' => $res, 'name' => $name]);
    return view('home', compact('name', 'res'));
});

Route::get('about', function () {

    return '<h1>About Page</h1>';
});

// Route::get('contact', function () {

//     return view('contact');
// });

// Route::post('send-email', function () {
//     if(!empty($_POST)) {
//         dump($_POST);
//     }
//     return 'Send email';
// });

// Позволяет обрабатывать get и post по одному и тому же url
Route::match (['post', 'get'], 'contact', function () {
    
    if(!empty($_POST)) {
        dump($_POST);
    }

    return view('contact');
})->name('contact');

Route::view('test', 'test', ['test' => 'Test data']);

// Route::redirect('about', 'contact');
// Route::redirect('about', 'contact', 301);
Route::permanentRedirect('about', 'contact');
