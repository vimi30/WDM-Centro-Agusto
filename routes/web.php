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


Route::get(' /', 'FrontendController@index');

Route::get('/eventos', 'FrontendController@eventos');

Route::get('/videos', 'FrontendController@videos');

Route::get('/Equipo', 'FrontendController@equipo'); 

Route::get('/semblanza', 'FrontendController@semblanza'); 

Route::get('/Proyectos', 'FrontendController@proyectos'); 

Route::get('/centro_augusto_mijares', 'FrontendController@centroaugustomijares'); 

Route::get('/registration', 'AuthController@registration'); 

Route::post('post-registration', 'AuthController@postRegistration'); 

Route::post('post-login', 'AuthController@postLogin'); 

Route::get('/Inicio_de_sesion', 'AuthController@inicio')->name('Inicio_de_sesion');
Route::get('/logOut', 'AuthController@logOut');

//Route::get('/after_login', 'FrontendController@after_login'); 
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*********************************************************** */
Route::post('/add_project', 'ProjectController@store');

Route::get('/projectAdd', 'ProjectController@displayform');


Route::get('/postLoginProjectView', 'ProjectController@afterloginview');

Route::get('/postLoginProjectView', 'ProjectController@index');

Route::get('editProject/{id}', 'ProjectController@edit');

Route::post('update/{id}', 'ProjectController@update');

Route::get('/deleteProject/{id}','ProjectController@destroy');

/*********************************************************************** */
Route::get('/postLoginEventView', 'EventController@showEventview');

Route::get('/postLoginEventView', 'EventController@index');

Route::post('/addEvent', 'EventController@store');

Route::get('/addEventView', 'EventController@showAddEvent');

Route::get('editEvent/{id}', 'EventController@edit');

Route::post('updateEvent/{id}', 'EventController@update');

Route::get('/deleteEvent/{id}','EventController@destroy');

/********************************************************************* */

Route::get('/addContactView', 'ContactController@showAddContact');

Route::post('/addContact', 'ContactController@store');

Route::get('/postLoginContactView', 'ContactController@showContactview');

Route::get('/postLoginContactView', 'ContactController@index');

Route::get('editContact/{id}', 'ContactController@edit');

Route::post('updateContact/{id}', 'ContactController@update');

Route::get('/deleteContact/{id}','ContactController@destroy');

/**************************************************************************** */

Route::get('/addVideoView', 'VideoController@showAddVideo');

Route::post('/addVideo', 'VideoController@store');

Route::get('/postLoginVideoView', 'VideoController@showVideoview');

Route::get('/postLoginVideoView', 'VideoController@index');

Route::get('editVideo/{id}', 'VideoController@edit');

Route::post('updateVideo/{id}', 'VideoController@update');

Route::get('/deleteVideo/{id}','VideoController@destroy');