<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/*
Route::get('/hello', function () {
    //return view('welcome');

    return "<h1>Hello world</h1> ";
});

//dynamic
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user ' .$name . ' with an id of ' .$id ;

});
*/

//Route::get('/about', function(){
//    return view('pages.about');
//
//});

$pages_controller = PagesController::class;
$posts_controller = \App\Http\Controllers\PostsController::class;
$service_controller = \App\Http\Controllers\ServicesController::class;

Route::get('/', $pages_controller.'@index');
Route::get('/about', $pages_controller.'@about');
Route::get('/services', $pages_controller.'@services');
Route::get('/posts', $posts_controller.'@index');
Route::get('/posts/{id}', $posts_controller.'@show');
Route::get('/post', $posts_controller.'@create');
Route::post('/your-url', $posts_controller.'@store');
Route::get('posts/edit/{post_id}', $posts_controller.'@edit');
Route::post('posts/update/{post_id}', $posts_controller.'@update');
Route::post('posts/delete/{post_id}', $posts_controller.'@destroy');

Route::post('services/store', $service_controller.'@storeService');
Route::get('add/', $service_controller.'@addService');
Route::get('services/manage', $service_controller.'@manageServices');
Route::get('services/edit/{service_id}', $service_controller.'@edit');
Route::post('services/update/{pages_id}', $service_controller.'@update');
Route::post('services/delete/{pages_id}', $service_controller.'@destroy');




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

//Route::resource('posts', 'PostsController');
