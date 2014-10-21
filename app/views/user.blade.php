@extends ('_master')

     @section ('image')

                <div class="heather">
                
                <img id="image" src="{{ asset('images/generator.jpeg')}}" alt="Generator" />
                
                </div>
     @stop
                
                
                 @section ('active')
                 
                <div class = "active"
                <h4><a href="/" target="_blank">Home</a> | <a href="/paragraph-generator" target="_blank">Lorem Generator</a> </h4>
    </div>
                
                 @stop 
                 
                 @section ('content')

<div class = "body">

  <h4> User Generator </h4>
  
       <form action = "{{url('/paragraph-generator')}}" method = "post"></form>
       
 
    <fieldset>
    
         <label for="paragraphLength"><b>Enter the Number of Users you wish to generate: </b><br></label>
         
		 <p> Users <input class="text" type="number" min="1" max="99" value="2" name="UserNum" /> between 1 and 99</p>
		 
		 <input type="submit" value="Generate User"><br></br>
      
    </fieldset>

    
    <fieldset>

       <legend> Random users below:</legend>
                
                
                 <p id="randomuser"><?=$randomuser?></p> 
 
    </fieldset>

    </form>
    
  </div>
    
    @stop
              
                 
                 
         
   
   