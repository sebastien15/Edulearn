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
         route::get('/Schools','websiteController@secondarySchools')->name('secondarySchools');
         route::get('/Schools/Single','websiteController@singleSecondary')->name('singelSecondary');
         route::get('/Schools/Single/admission','websiteController@admissionSecondary')->name('admissionSecondary');
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
         route::get('/watch','platformController@watch')->name('watch');
         route::get('/categoryVideos','platformController@category_videos')->name('categoryVideos');
         route::get('/categoryChanel','platformController@category_chanels')->name('categoryChanel');
         route::get('/categoryPlaylists','platformController@category_playlists')->name('categoryPlaylists');
         route::get('/blog','platformController@blog')->name('blog');
         route::get('/upload','platformController@upload')->name('upload');
         route::get('/written','platformController@written')->name('written');
         route::get('/written/single','platformController@writtenSingle')->name('writtenSingle');
});

/*Platform routes ends*/

/* Super Admin routes */

Route::get('/dashboard','SuperAdminController@index')->name('adminDashboard');

/*School routes*/
Route::group(['prefix'=>'school','as'=>'director.'],function(){
          route::get('/','SchoolPageController@login')->name('login');
          route::get('/register','SchoolPageController@register')->name('register');
	        route::get('/dashboard','SchoolPageController@index')->name('dashboard');
          route::get('/message','SchoolPageController@message')->name('message');
          route::get('/teachers','SchoolPageController@teachers')->name('teachers');
          route::get('/addteacher','SchoolPageController@addteacher')->name('addTeacher');
          route::get('/task','SchoolPageController@task')->name('task');
          route::get('/dod','SchoolPageController@dod')->name('dod');
          route::get('/dos','SchoolPageController@dos')->name('dos');
          route::get('/dos/allcourses','SchoolPageController@allcourses')->name('allcourses');
          route::get('/dos/singleCourse','SchoolPageController@singleCourse')->name('singleCourse');
          route::get('/dos/classes','SchoolPageController@allClasses')->name('classes');
          route::get('/dos/singelclasse','SchoolPageController@singleClasse')->name('singleClasse');
          route::resource('message','directorMessageController')->except(['index','create']);
});
/* School Teachers routes */
Route::group(['prefix'=>'school/teacher','as'=>'schoolTeacher.'],function(){
          route::get('/','SchoolPageController@teacherIndex')->name('dashboard');
          route::get('/profile','SchoolPageController@teacherProfile')->name('profile');
          route::get('/upload','SchoolPageController@teacherUpload')->name('upload');
          route::get('/courses/single','SchoolPageController@teacherCoursesSingle')->name('singleCourse');
          route::resource('/message','teacherMessageController')->except(['update']);
          route::resource('/course','teacherCourseController');
});

/*Teaching Admin*/


/*Our web interface routes*/


/*Student routes*/