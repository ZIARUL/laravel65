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

	// Route::get('/', function () {
	//     return view('welcome');
	// });

	/*Rout::get('/', function(){

		return view(view. 'welcome');
	}*/

	// Route::get('/zia', function(){
	// 	return view('zia');
	// });

	// Route::get('/tamal', function(){
	// 	return "ziarul";

	// });

	/*Route::get('/tt', function(){
		return [
			'name' => 'Jahid Hossain',
			'Kamal Hossain'  => 'Habibur Rahaman', 
			'Kajol_hossain'  =>'Romin',
			'Kamal Hosain'   => 'Tamal hosain',
			'Monjurul Islam' => 'Robain Islam',

		];
	});
	*/

	// Route::get('/ttt', function(){

	// 	return [

	// 			'Name' => 'Jahid Islam',
	// 			'Kamal Hossain' => 'Rohim Islam',
	// 			'Nurul Islam'   => 'Hatil Islam',
	// 			'Munna Hosain'  => "tomal Islam" 
	// 	];
	// });

	// Route::get('/Databxase', function(){

	// 	return [

	// 		'Name'   => 'junaid Islam',
	// 		'Humane' => 'Database System'

	// 	];
	// });

	Route::get('/', 'WelcomeController@index');
	Route::get('/about', 'WelcomeController@about');








