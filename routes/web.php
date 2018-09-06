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
	/*
	$name = 'Don';
	$age = 31;
	return view('welcome', compact('name', 'age'));
    return view('welcome', [
    	'name' => 'Don',
    	'age' => 21
    ]);
	*/
	$name = 'Don';
	$tasks = [
		'Build a website.',
		'Make hella money',
		'Change the World'
	];

	return view('welcome', compact('tasks', 'name'));
});

Route::get('/about', function() {
	return view('about');
});