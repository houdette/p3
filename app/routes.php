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
    
	return View::make('index');
	
    });



    Route::get('/paragraph-generator', function()
    {
    
           
           //Generating paragraphs in a random first visit view
                      
           $random = rand(1,5);
           
           $generator = new LoremGenerator();

           $paragraph_nbr = $generator -> getParagraphs($random);

           $randomlorem= implode('<p>', $paragraph_nbr);
            
    
    return View::make ('paragraph', array('randlorem' => $randomlorem));
     
    });
   
    

    Route::post('/paragraph-generator', function()
    {
            //how many paragraphs were submitted
           
            $postedlength = Input::get('lorem');
            
            
            //allowed range between these 2 numbers
           
            $loremrange= array(1,5);
           
            // Generating paragraphs based on user's input 
           
                      $generator = new LoremGenerator();
       
                      $paragraph_nbr = $generator-> getParagraphs($postedlength);

                      $randomlorem= implode('<p>', $paragraph_nbr);

           
           // Add if or for construct so that the post method will output the submitted number of paragraphs.
           
          
            return View::make('paragraph', array ('randlorem'=> $randomlorem));
  });
  
  
  
 Route::get('/user-generator',function(){

$user = Faker\Factory::create();
$randomuser_nbr =rand(1,99);

$random = array($user -> name($randomuser_nbr), $user -> phoneNumber($randomuser_nbr), $user -> address($randomuser_nbr));
$random_user = implode ('<br>', $random);
 return View::make('user', array ('randomuser'=>$random_user));
});

     
     
     
     

//Route::post('/user-generator', function())

//{
//number of users 

//});


//créer un class user et une pour les paragraphes. 









