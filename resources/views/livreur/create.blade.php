@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">  Add Livreurs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Add Livreurs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<section class="content">

<div class="container_fluid">
  <div class="row">
    <div class="col-md-12">
   
		
		  <form action="{{url('users')}}" method="post" >

		  	{{ csrf_field()}}

		  	


		  	<div class = "form-group ">
               

		  		        <label class="col-md-3">Full Name :</label>
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
            <label class="col-md-3">Password :</label>
                  <div class="col-md-6">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" >
                        @error('password')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('password')}}

                                </div>
                  @enderror
                  </div>

            </div>

            <div class = "form-group "> 
            <label class="col-md-3">Ville :</label>
                  <div class="col-md-6">
                  <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{old('ville')}}">
                        @error('ville')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('ville')}}

                                </div>
                  @enderror
                        </div>

            </div>
            <div class = "form-group "><label for="">Type :</label>
		  			<div class="col-md-6">	  
		  		<select type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}">
				  <option value="">Select</option>
					   
					  <option value="admin">Admin</option>
            <option value="livreur">Livreur</option>
					  
				</select>
				 
				  @error('type')

                  <div class="invalid-feedback">
                  	{{$errors->first('type')}}

                  </div>
		  		   @enderror


		  	</div>

              <div class="form-group">
                <label class="col-md-3">Mobile :</label>
                <div class="col-md-6">
               <input type="phone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{old('telephone')}}" placeholder="0672912246">
                @error('telephone')
                  <div class="invalid-feedback">
                    {{$errors->first('telephone')}}

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