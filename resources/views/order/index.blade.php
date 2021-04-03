@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">Orders</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<div class="container-fluid">
   	<p>
   		<a href="{{url('orders/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
   	</p>

		    <table class="table table-bordered table-striped">
		    	  <head>
		    	  	<tr>
		    	  		
   	 		            <th>Reference</th>
		    	  		<th>Order Date</th>
		    	  		<th>Adress</th>
		    	  		<th>Price</th>
						<th>Delivery</th>
						<th>Date</th>
		    	  		<th>Action</th>


		    	  	</tr>

		    	  </head>
		    	  <body>
		    	  	@foreach($orders as $order)
		    	  	   <tr>
		    	  	   	   
		    	  	   	   <td>{{$order->reference}}</td>
		    	  	   	   <td>{{$order->date}}</td>
		    	  	   	   <td>{{$order->address}}</td>
		    	  	   	   <td>{{$order->price}}</td>
						   <td>{{$order->name_deli}}</td>
						   
		    	  	   	   <td>{{$order->created_at}}</td>
		    	  	   	    
		    	  	   	   <td>

		    	  	   	   	  
		    	  	   	   	  <form action="{{url('orders/'.$order->id)}}" method="post">
		    	  	   	   	  	{{csrf_field()}}
		    	  	   	   	  	{{method_field('DELETE')}}
		    	  	   	   	  	
		    	  	   	   	    <a href="{{url('orders/'.$order->id.'/edit')}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
		    	  	   	   	  	<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
		    	  	   	   	  	</form>
		    	  	   	   </td>

		    	  	   	   	  
		    	  	   	   	  


		    	  	   </tr>
                       @endforeach

		    	  </body>


		    </table>

			{{$orders->links()}}
	
</div>


@endsection