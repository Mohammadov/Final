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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('mohd',function(){
    return'awad';
})->name('a');

route::get('saleh/{id?}',function(){
   return 'mohammad';
});

route::get('awad/{id}',function($id){
   return'5ara3leikon';
})->name('b')->middleware('auth');

route::get('admino','UserController@getView');
route::resource('res','ResourceController')->middleware('auth');

route::group(["namespace"=>"front"],function(){
    route::get('my','FrontController@getMyName')->middleware('auth');
    route::get('mom','FrontController@getMomName');
    route::get('sis','FrontController@getSisName');
});

route::group(['prefix'=>'ahmad'],function (){
   route::get('id','front\FrontController@getID');
   route::get('age','front\FrontController@getAge');
});
route::get('landing','UserController@getLanding');

