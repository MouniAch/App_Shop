@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">Users</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<div class="container-fluid">
   	<p>
   		<a href="{{url('users/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
   	</p>

		    <table class="table table-bordered table-striped">
		    	  <head>
		    	  	<tr>
		    	  		
   	 		            <th>Name</th>
		    	  		
		    	  		
		    	  		<th>Action</th>


		    	  	</tr>

		    	  </head>
		    	  <body>
		    	  	@foreach($users as $livreur)
		    	  	   <tr>
		    	  	   	   
		    	  	   	   <td>{{$livreur->name}}</td>
		    	  	   	  
		    	  	   	   
		    	  	   	    
		    	  	   	   <td>

		    	  	   	   	  
		    	  	   	   	  <form action="{{url('users/'.$livreur->id)}}" method="post">
		    	  	   	   	  	{{csrf_field()}}
		    	  	   	   	  	{{method_field('DELETE')}}
		    	  	   	   	  	
		    	  	   	   	    <a href="{{url('users/'.$livreur->id.'/edit')}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
							    <a href="{{url('users/'.$livreur->id.'/detail')}}" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
		    	  	   	   	  	<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
		    	  	   	   	  	</form>
		    	  	   	   </td>

		    	  	   	   	  
		    	  	   	   	  


		    	  	   </tr>
                       @endforeach

		    	  </body>


		    </table>

		
	
</div>


@endsection