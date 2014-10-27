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

//homepage, includes links to generators
Route::get('/', function()
{
	return View::make('index');
});


//display placeholder text generator form 
Route::get('/text_generator/{number_of_paragraphs?}', function() 
{  
// process user input and generate placeholder text
$number_of_paragraphs = Input::get('number_of_paragraphs');
$generator = new LoremIpsum();
$paragraphs = $generator->getParagraphs($number_of_paragraphs);
return View::make('text_generator')
	->with('number_of_paragraphs', $number_of_paragraphs)
	->with('paragraphs', $paragraphs);
});

//display random user generator form 
Route::get('/user_generator/{number_of_users?}', function() 
{  
// process form input and generate random users
$number_of_users = Input::get('number_of_users');
	$faker = Faker\Factory::create();
	return View::make('user_generator')
	->with('number_of_users', $number_of_users)
	->with ('faker', $faker);
});


