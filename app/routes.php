<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
	Home route -- homepage
*/
Route::get('/', array('uses' => 'HomeController@showWelcome'));

/*
|
| About us page
|
*/
Route::get('about', array('uses' => 'HomeController@about'));

/*
|
| Gallery us page
|
*/
Route::get('gallery', array('uses' => 'HomeController@gallery'));

/*
|
| Order a Cake page
|
*/
Route::get('order-a-cake', array('uses' => 'HomeController@orderCake'));

/*
|
| Wedding cakes page
|
*/
Route::get('wedding-cakes', array('uses' => 'HomeController@weddingCakes'));

/*
|
| Birthday Cakes page

*/
Route::get('birthday-cakes', array('uses' => 'HomeController@birthdayCakes'));

/*
|
| Contact us page 
|
*/
Route::get('contact-us', array('uses' => 'HomeController@contactUs'));

/*
|
| Flavours page 
|
*/
Route::get('flavours', array('uses' => 'HomeController@flavours'));

/*
|
| catering services page 
|
*/
Route::get('catering-services',array('uses' => 'HomeController@cateringServices'));

