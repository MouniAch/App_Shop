@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Edit Livreurs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Edit Livreurs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<section class="content">

<div class="container_fluid">
  <div class="row">
    <div class="col-md-12">
   
		
		  <form action="{{url('users/'.$livreur->id)}}" method="post" >
		  	<input type="hidden" name="_method" value="PUT">


		  	{{ csrf_field()}}

		  	


		  	<div class = "form-group ">
               

		  		        <label class="col-md-3">Full Name :</label>
		  		          <div class="col-md-6">
		  		        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$livreur->name}}">
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
                  <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$livreur->email}}">
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
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{$livreur->password}}" >
                        @error('password')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('password')}}

                                </div>
                  @enderror
                  </div>

            </div>

            <div class = "form-group "> 
            <label class="col-md-3"> Ville :</label>
                  <div class="col-md-6">
                  <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{$livreur->ville}}">
                        @error('ville')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('ville')}}

                                </div>
                  @enderror
                        </div>

            </div>

              <div class="form-group">
                <label class="col-md-3">Mobile :</label>
                <div class="col-md-6">
               <input name="telephone" class="form-control @error('telephone') is-invalid @enderror"value="{{$livreur->telephone}}">{{old('telephone')}}
                @error('telephone')
                  <div class="invalid-feedback">
                    {{$errors->first('telephone')}}

                  </div>
             @enderror
        </div>

        

         <div class="form-group">
                <label class="col-md-3">Type :</label>
                <div class="col-md-6">
               <input name="type" class="form-control @error('type') is-invalid @enderror"value="{{$livreur->type}}">{{old('type')}}
                @error('type')
                  <div class="invalid-feedback">
                    {{$errors->first('type')}}

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