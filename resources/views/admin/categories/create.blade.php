@extends('layouts.admin')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
		
		  <form action="{{url('produits')}}" method="post" >

		  	{{ csrf_field()}}

		  	<div class = "form-group "><label for="">Titre :</label>
		  		<input type="text" name="designation" class="form-control @error('titre') is-invalid @enderror" value="{{old('titre')}}">
                  @error('titre')
                  <div class="invalid-feedback">
                  	{{$errors->first('titre')}}

                  </div>
		  		   @enderror


		  	</div>

		  		

		  		

		  		<div class="form-group"><label for=""></label>
		  		<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
		  	</div>
		  </form>

		</div>
	</div>
</div>

@endsection