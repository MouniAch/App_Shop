@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Edit Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
		
		  <form action="{{url('produits/'.$produit->id)}}" method="post" >
		  	<input type="hidden" name="_method" value="PUT">

		  	{{ csrf_field()}}

		  	<div class = "form-group "><label for="">Designation :</label>
		  		<div class="col-md-6">
		  		<input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"  value="{{$produit->designation}}">
                  @error('designation')
                  <div class="invalid-feedback">
                  	{{$errors->first('designation')}}

                  </div>
		  		   @enderror


		  	</div>

		  		<div class="form-group"><label for="">Description :</label>
		  			<div class="col-md-6">
		  		<textarea name="description" class="form-control @error('description') is-invalid @enderror" value="{{$produit->description}}">{{$produit->description}}</textarea>
		  		  @error('description')
                  <div class="invalid-feedback">
                  	{{$errors->first('description')}}

                  </div>
		  		   @enderror
		  	</div>

		  			<div class="form-group"><label for="">Category :</label>
		  				<div class="col-md-6">
		  		<input name="category" class="form-control @error('category') is-invalid @enderror" value="{{$produit->category}}">
		  		  @error('category')
                  <div class="invalid-feedback">
                  	{{$errors->first('category')}}

                  </div>
		  		   @enderror
		  	</div>

			  <div class = "form-group "><label for="">Section :</label>
		  			<div class="col-md-6">	  
		  		<select type="text" name="section" class="form-control @error('section') is-invalid @enderror" value="{{old('section')}}">
				  <option value="">Select</option>
					   
					  <option value="ladies">Ladies</option>
					  <option value="men">Men</option>
					  <option value="kids">Kids</option>
					   
				</select>
				 
				  @error('section')

                  <div class="invalid-feedback">
                  	{{$errors->first('section')}}

                  </div>
		  		   @enderror


		  	</div>



		  		<div class="form-group"><label for="">Price :</label>
		  			<div class="col-md-6">
		  		<input name="price" class="form-control @error('price') is-invalid @enderror" value="{{$produit->price}}">
		  		  @error('price')
                  <div class="invalid-feedback">
                  	{{$errors->first('price')}}

                  </div>
		  		   @enderror
		  	</div>

		  	<div class="form-group"><label for="">Image :</label>
		  		<div class="col-md-6">
		  		<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{$produit->image}}">
		  		  @error('image')
                  <div class="invalid-feedback">
                  	{{$errors->first('image')}}

                  </div>
		  		   @enderror
		  	</div><br/>


		  

		  	

		  		

		  		<div class="form-group"><label for=""></label>
		  		<input type="submit" class=" btn btn-info" value="Save">
		  	</div>
		  </form>

		</div>
	</div>
</div>

@endsection
