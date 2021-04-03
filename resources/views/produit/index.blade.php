@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">Products</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>

<div class="container-fluid">
   	<p>
   		<a href="{{url('produits/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
   	</p>
		
		
		   



		   <table class="table table-bordered table-striped">
		    	  <head>
		    	  	<tr>
		    	  		<th>Designation</th>
		    	  		<th>Description</th>
		    	  		<!--<th>Category</th>-->
		    	  		<th>Price</th>
		    	  		<th>Image</th>
		    	  		<th>Date</th>
		    	  		<th>Action</th>


		    	  	</tr>

		    	  </head>
		    	  <body>
		    	  	@foreach($produits as $produit)
		    	  	   <tr>
		    	  	   	   <td>{{$produit->designation}}</td>
		    	  	   	   <td>{{$produit->description}}</td>
		    	  	   	   <!--<td>{{$produit->category}}</td>-->
		    	  	   	   <td>{{$produit->price}}</td>
		    	  	   	   <td><img src="{{asset('uploads/produit/'.$produit->image)}}"  width="100px" height="100px" alt="image"></td>
		    	  	   	    <td>{{$produit->created_at}}</td>
		    	  	   	   <td>

		    	  	   	   	  
		    	  	   	   	  <form action="{{url('produits/'.$produit->id)}}" method="post">
		    	  	   	   	  	{{csrf_field()}}
		    	  	   	   	  	{{method_field('DELETE')}}
		    	  	   	   	  	
		    	  	   	   	  <a href="{{url('produits/'.$produit->id.'/edit')}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
		    	  	   	   	  	<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
		    	  	   	   </td>

		    	  	   	   	  </form>
		    	  	   	   	  


		    	  	   </tr>
                       @endforeach

		    	  </body>

				  
		    </table>

			{{$produits->links()}}
</div>


@endsection

