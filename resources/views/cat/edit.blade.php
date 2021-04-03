@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Edit Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Edit Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
		
		  <form action="{{url('cats/'.$cat->id)}}" method="post" >
		  	<input type="hidden" name="_method" value="PUT">

		  	{{ csrf_field()}}

		 <div class = "form-group ">
                <div class="row">

		  		     <label class="col-md-3">Title :</label>
		  		        <div class="col-md-6">
		  		        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                        @error('title')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                  	            {{$errors->first('title')}}

                                </div>
		  		        @enderror
                        </div>

		  	    </div>
		  		

		  		

		  		<div class="form-group"><label for=""></label>
		  		<input type="submit" class=" btn btn-info" value="Save">
		  	</div>
		  </form>

		</div>
	</div>
</div>

@endsection