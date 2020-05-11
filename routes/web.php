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
Auth::routes();

Route::get('/home', 'newController@home')->name('home')->middleware('auth');
Route::get('/', 'newController@home')->name('home')->middleware('auth');
Route::get('/about', 'newController@about')->name('about')->middleware('auth');
Route::get('/contact', 'newController@contact')->name('contact')->middleware('auth');
Route::get('/write_post', 'admincontrol@post')->name('post')->middleware('auth');
Route::post('/values', 'admincontrol@storepost')->name('store.post')->middleware('auth');
Route::get('/all_data', 'admincontrol@alldata')->name('alldata')->middleware('auth');
Route::get('/view_details/{id}', 'admincontrol@viewdata')->name('viewdata')->middleware('auth'); //you can also pass your slug
Route::get('/delete_details/{id}', 'admincontrol@delete')->name('delete')->middleware('auth');
Route::get('/edit_details/{id}', 'admincontrol@edit_data')->name('edit_data')->middleware('auth');
Route::post('/update_details/{id}', 'admincontrol@update_data')->name('update_data')->middleware('auth');



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

