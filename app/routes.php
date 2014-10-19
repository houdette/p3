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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/paragraph-generator', function()
{
//Generating paragraphs 

$generator = new LoremGenerator();

$paragraphs = $generator-> getParagraphs(rand (1,99));

$random_text= implode('<p>', $paragraphs);

echo $random_text;
});
//return view 

//return View::make ('paragraph-generator', $random_text);

//Route:: post('/paragraph-generator', function())
//{
//number of paragraphs


//
//);

Route::get('/user-generator',function(){

$user = Faker\Factory::create();
$randomuser_nbr =rand(1,99);

$random = array($user -> name($randomuser_nbr), $user -> phoneNumber($randomuser_nbr), $user -> address($randomuser_nbr));
$random_user = implode ('<br>', $random);
 return $random_user;
});

//Route::post('/user-generator', function())

//{
//number of users 

//});


//créer un class user et une pour les paragraphes. 









