@extends('layouts.pro')
@section('content')



<div class="container-fluid">
   
           <table class="table table-bordered table-striped">
		    	  <head>
		    	  	<tr>
		    	  		
   	 		            
                        <!--<th>Delivery</th>
		    	  		
		    	  		<th>Price</th>-->
						<th>Reference</th>
						<th>Action</th>
						
					
				
						


		    	  	</tr>

		    	  </head>
		    	  <body>
		
		    	  
		    	  	   <tr>
		    	  	   	   
						 @foreach($commandes as $command)
		    	  	   	  
					
						    
							<td>{{$command->reference}}</td>
						  
						   
						   
		    	  	   	   
		    	  	   	    
							<td>

		    	  	   	   	  
            <form action="{{url('commandes/'.$command->id)}}" method="post">
                               	{{csrf_field()}}
	                          {{method_field('DELETE')}}
	

       <a href="{{url('commandes/'.$command->id.'/detail1')}}" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
	   <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
	  </form>
</td>

		    	  	   	   	  
		    	  	   	   	 

		    	  	   	   	  
		    	  	   	   	  


		    	  	   </tr>
                       @endforeach
				  

		    	  </body>


		    </table>

		
	
</div>


@endsection