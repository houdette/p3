@extends ('_master')

  @section ('image')
  
                <div class="heather">
                
                <img id="image" src="{{ asset('images/generator.jpeg')}}" alt="Generator" />
                
                </div>
                
  @stop


      @section ('active')
     
                <div class = "active"
                <h4><a href="/" target="_blank">Home</a> | <a href="/paragraph-generator" target="_blank">Lorem Generator</a> |
                <a href="/user-generator" target="_blank">User Generator</a> </h4> </div>
                
                
      @stop
      
      
      
             @section ('content')
          
          <div class = "body">

           <h4> Lorem Ipsum </h4>
           <p> 

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Generate your own <a href="/paragraph-generator"> Here.</a></p>
           
  
           
           
           <h4> User Generator </h4>
           
          <p>
          User Generation blabla bla <a href="/user-generator"> Here.</a></p>
          
           
          
          
          </div>
  

             @stop