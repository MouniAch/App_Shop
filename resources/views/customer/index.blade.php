@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">Customers</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<div class="container-fluid">
   	<p>
   		<a href="{{url('customers/create')}}" class="btn btn-primary">Add new customer</a>
   	</p>

		    <table class="table table-bordered table-striped">
		    	  <head>
		    	  	<tr>
		    	  		
   	 		            <th>Name</th>
		    	  		<th>Email</th>
		    	  		<th>Adress</th>
		    	  		<th>Mobile</th>
		    	  		<th>Date</th>
		    	  		<th>Action</th>


		    	  	</tr>

		    	  </head>
		    	  <body>
		    	  	@foreach($customers as $customer)
		    	  	   <tr>
		    	  	   	   
		    	  	   	   <td>{{$customer->name}}</td>
		    	  	   	   <td>{{$customer->email}}</td>
		    	  	   	   <td>{{$customer->address}}</td>
		    	  	   	   <td>{{$customer->mobile}}</td>
		    	  	   	   <td>{{$customer->created_at}}</td>
		    	  	   	    
		    	  	   	   <td>

		    	  	   	   	  
		    	  	   	   	  <form action="{{url('customers/'.$customer->id)}}" method="post">
		    	  	   	   	  	{{csrf_field()}}
		    	  	   	   	  	{{method_field('DELETE')}}
		    	  	   	   	  	
		    	  	   	   	    <a href="{{url('customers/'.$customer->id.'/edit')}}" class="btn btn-info">Edit</a><br/><br/>
		    	  	   	   	  	<button type="submit" class="btn btn-danger">Delete</button>
		    	  	   	   	  	</form>
		    	  	   	   </td>

		    	  	   	   	  
		    	  	   	   	  


		    	  	   </tr>
                       @endforeach

		    	  </body>


		    </table>

		
	
</div>


@endsection