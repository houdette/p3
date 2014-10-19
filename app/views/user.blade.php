@extends ('_master')

@section('title')
   
      Users
      
@stop 

@section('content')
<h1> Users</h1>

View as: 

   <a href= '/user-generator' target= _blank> html</a>
   
   <?php foreach ($user as firstName => $random_user);?>
   
   <?php echo $random_user?>;
   
   <?php endforeach;?>  
   
   @stop
  
   
   
   
   
   
   