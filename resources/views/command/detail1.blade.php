@extends('layouts.pro')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">More informations</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">More informations</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<div class="container-fluid">
   	

		    <table class="table table-bordered table-striped">
		    	  <head>
		    	  	<tr>
		    	  	
                <th>Adress</th>
                <th>price</th> 
                        

					    
		    	  		


		    	  	</tr>

		    	  </head>
		    	  <body>
                
		    	  	   <tr>
              
		    	  	   	          
						              
                            <td>{{$commandes->address}}</td>
                            <td>{{$commandes->price}}</td>
		    	  	   	
							 
		    	  	   	   
						                
		    	  	   	   
             
		    	  	   	   	  
		    	  	   	   	  


		    	  	   </tr>
                       
                       
              

		    	  </body>


		    </table>

		
	
</div>


@endsection