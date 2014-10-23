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
    
           
           //Generating  a default paragraph in a first visit
                      
           
           $generator = new LoremGenerator();

           $paragraph_nbr = $generator -> getParagraphs(1);

           $randomlorem = implode('<p>', $paragraph_nbr);
            
    
    return View::make ('paragraph' , array('randlorem' => $randomlorem));
     
    });
   
    

    Route::post('/paragraph-generator', function()
    {
                     
                     //user input                      
                   
                      $postedlength = Input::get('paraNum');
                      
                      //input accepted range
                      
                      $max_value = 99;
                      $min_value = 1;
                      
                      
                     //generating paragraphs based on user's imput and by using the package
                     
                      $generator = new LoremGenerator();
                      $lorem = $generator-> getParagraphs($postedlength);
                      $randomlorem= implode('<p>', $lorem);
                      
                       if ($postedlength < $max_value && $postedlength > $min_value)   
                                          
                     {
                        
                      
	                      $postedlength = $randomlorem;
	                      
                      
                      }
                      
                 //Returning the view to the page      

                return View::make('paragraph', array ('randlorem'=> $randomlorem));
  });
  
  
  

          
            

        
                    


               

     
                      
	              
              
             
             
          
            
			    
			         
		     
	
         
           

     
     
     











