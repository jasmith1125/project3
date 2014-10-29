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

// display homepage, includes links to generators
Route::get('/', function()
{
    return View::make('index');
});

//display placeholder text generator form  
Route::get('/text_generator/{number_of_paragraphs?}', function() 
{  
    $number_of_paragraphs = Input::get('number_of_paragraphs');
    $generator = new LoremIpsum();
    $paragraphs = $generator->getParagraphs($number_of_paragraphs);
    
    //form validation
    $rules = array(
    'number_of_paragraphs' => "Integer|min:1|max:5"
    );

    $validator = Validator::make(
    array('name' => 'number_of_paragraphs'),
    array('name' => 'required|min:1|max:5')
);
    
    $validator = Validator::make(Input::all(), $rules);
    
    if( $validator->fails()) {
        return Redirect::to('/text_generator')->withErrors($validator->messages());
    }
        return View::make('text_generator')
            ->with('number_of_paragraphs', $number_of_paragraphs)
            ->with('paragraphs', $paragraphs);
});

// process user input and generate placeholder text 
Route::post('/text_generator', function() 
{  
    // process user input and display resulting placeholder text 

    //declare variables
    $number_of_paragraphs = Input::get('number_of_paragraphs');
    $generator = new LoremIpsum();
    $paragraphs = $generator->getParagraphs($number_of_paragraphs);

    //form validation
    $rules = array(
    'number_of_paragraphs' => "Integer|min:1|max:5"
    );

    $validator = Validator::make(
    array('name' => 'number_of_paragraphs'),
    array('name' => 'required|min:1|max:5')
);
    
    $validator = Validator::make(Input::all(), $rules);
    
    if( $validator->fails()) {
        return Redirect::to('/text_generator')->withErrors($validator->messages());
    }
        return View::make('text_generator')
            ->with('number_of_paragraphs', $number_of_paragraphs)
            ->with('paragraphs', $paragraphs);
});


//display random user generator form 
Route::get('/user_generator/{number_of_users?}', function() 
{  
// process form input and generate random users
    $number_of_users = Input::get('number_of_users');
    $faker = Faker::create();
    $name = $faker->name;
    $email = $faker->email;
    $streetAddress= $faker->streetAddress . '<br>';
    $city = $faker->city . ',';
    $state = $faker->state . ' ';
    $postcode = $faker->postcode;
    
    return View::make('user_generator')
    ->with('number_of_users', $number_of_users)
    ->with('faker', $faker);


});

//display random user generator form 
Route::post('/user_generator', function() 
{  
// process form input and generate random users

    //declare variables
    $number_of_users = Input::get('number_of_users');
    $faker = Faker::create();
    $name = $faker->name;
    $email = $faker->email;
    $streetAddress= $faker->streetAddress . '<br>';
    $city = $faker->city . ',';
    $state = $faker->state . ' ';
    $postcode = $faker->postcode.'\r\n';
    
//form validation
    $rules = array(
    'number_of_users' => "Integer|Between:1,99"
    );
    
    $validator = Validator::make(Input::all(), $rules);
    
    if( $validator->fails()) {
        return Redirect::to('/user_generator')->withErrors($validator->messages());
    }

     return View::make('user_generator')
    ->with('number_of_users', $number_of_users)
    ->with('faker', $faker);
    
});

