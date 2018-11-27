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
/*website routes starts*/

Route::group(['prefix'=>'website','as'=>'website.'],function(){
         route::get('/','websiteController@index')->name('home');
         route::get('/about','websiteController@about')->name('about');
         route::get('/blog','websiteController@blog')->name('blog');
         route::get('/contact','websiteController@contact')->name('contact');
         route::get('/courses','websiteController@courses')->name('courses');
         route::get('/gallery','websiteController@gallery')->name('gallery');
         route::get('/pages','websiteController@pages')->name('pages');
         route::get('/login','websiteController@login')->name('login');
         route::get('/register','websiteController@register')->name('register');
});

/*website routes ends*/
/*Platform routes starts*/

Route::group(['prefix'=>'platform','as'=>'platform.'],function(){
         route::get('/','platformController@index')->name('home');
});

/*Platform routes ends*/

/* Super Admin routes */

Route::get('/dashboard','SuperAdminController@index')->name('adminDashboard');

/*School routes*/
Route::group(['prefix'=>'school','as'=>'director.'],function(){
	      route::get('/','SchoolPageController@index')->name('dashboard');
          route::get('/message','SchoolPageController@message')->name('message');
          route::get('/teachers','SchoolPageController@teachers')->name('teachers');
          route::get('/addteacher','SchoolPageController@addteacher')->name('addTeacher');
          route::get('/task','SchoolPageController@task')->name('task');
          route::resource('message','directorMessageController')->except(['index','create']);
});


/*Teaching Admin*/


/*Our web interface routes*/


/*Student routes*/