@extends('layouts.home')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Add Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Add Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


<section class="content">

<div class="container_fluid">
  <div class="row">
    <div class="col-md-12">
   
		
		  <form action="{{url('orders')}}" method="post" >

		  	{{ csrf_field()}}

		  	


		  	<div class = "form-group ">
               

		  		        <label class="col-md-3">Reference :</label>
		  		          <div class="col-md-6">
		  		        <input type="text" name="reference" class="form-control @error('reference') is-invalid @enderror" value="{{old('reference')}}">
                        @error('reference')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                  	            {{$errors->first('reference')}}

                                </div>
		  		        @enderror
                    </div>    

		  	</div>
            <div class = "form-group "> 
            <label class="col-md-3">Date :</label>
                  <div class="col-md-6">
                  <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}">
                        @error('date')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('date')}}

                                </div>
                  @enderror
                  </div>

            </div>

            <div class = "form-group "> 
            <label class="col-md-3">Customer address :</label>
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
                <label class="col-md-3">Price :</label>
                <div class="col-md-6">
               <input name="price" class="form-control @error('price') is-invalid @enderror">{{old('price')}}
                @error('price')
                  <div class="invalid-feedback">
                    {{$errors->first('price')}}

                  </div>
             @enderror
        </div>

       <div class="form-group">
        <label class="col-md-3">Delivery name :</label>
                  <div class="col-md-6">
                  <input type="text" name="name_deli" class="form-control @error('name_deli') is-invalid @enderror" value="{{old('name_deli')}}">
                        @error('name_deli')
                            <div class="clearfix"></div>
                                <div class="invalid-feedback">
                                {{$errors->first('name_deli')}}

                                </div>
                  @enderror
                        </div>

            </div>
      


		  		

		  		<div class="form-group"><label for=""></label>
            <div class="col-md-6">
               <input type="submit" class=" btn btn-info" value="Save">
            </div>
		  </form>

		
	</div>
</section>

@endsection