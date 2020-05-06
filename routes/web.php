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
// basic ruoting technique
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'newController@home')->name('home');
Route::get('/about', 'newController@about')->name('about');
Route::get('/contact', 'newController@contact')->name('contact');


// Route::get('/contact',function(){
//     echo "New contact page";
// })->middleware('age');


// // Route::any('home', function () {
// //     echo 'this is home page';
// // });
// // name routing technique
// // Route::get('','')->name('');

// // prefix route
// // Route::prefix('learnhunter')->group(function(){
// //     Route::get('/about',function(){
// //         return view('about');
// //     });

// //     Route::get('/contact',function(){
// //         echo "New contact page";
// //     });
// // });

// Route::group(['middleware' => ['age']], function () {
//     Route::get('/about',function(){
//         return view('about',['title' => 'About']);
//     });

//     Route::get('/new',function(){
//         echo "This is new page";
//     });
//     Route::get('/guru','newController@hello');
// });

// Route::get(md5('/take'),'newController@hello2')->name('take');


// ---------name of routes----------- //
// get
// post
// put
// patch
// delete
// option
// any
// match