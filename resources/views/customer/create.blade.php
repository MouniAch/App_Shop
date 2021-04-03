@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">  Add Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Add Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<section class="content">

<div class="container_fluid">
  <div class="row">
    <div class="col-md-12">
   
		
		  <form action="{{url('customers')}}" method="post" >

		  	{{ csrf_field()}}

		  	


		  	<div class = "form-group ">
               

		  		        <label class="col-md-3">Name :</label>
		  		          <div class="col-md-6">
		  		        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                        @error('name')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                  	            {{$errors->first('name')}}

                                </div>
		  		        @enderror
                    </div>    

		  	</div>
            <div class = "form-group "> 
            <label class="col-md-3">Email :</label>
                  <div class="col-md-6">
                  <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                        @error('email')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('email')}}

                                </div>
                  @enderror
                  </div>

            </div>

            <div class = "form-group "> 
            <label class="col-md-3">address :</label>
                  <div class="col-md-6">
                  <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">
                        @error('address')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('address')}}

                                </div>
                  @enderror
                        </div>

            </div>

              <div class="form-group">
                <label class="col-md-3">Mobile :</label>
                <div class="col-md-6">
               <input  type="phone" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}" placeholder="06 72 19 45 12">
                @error('mobile')
                  <div class="invalid-feedback">
                    {{$errors->first('mobile')}}

                  </div>
             @enderror
        </div>
      


		  		

		  		<div class="form-group"><label for=""></label>
            <div class="col-md-6">
               <input type="submit" class=" btn btn-info" value="Save">
            </div>
		  </form>

		
	</div>
</section>

@endsection