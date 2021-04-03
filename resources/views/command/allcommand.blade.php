@extends('layouts.home')
@section('content')
  
    <div class="container">
        <h1>
            All Commandes
        </h1>
        
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>
                    Name
                </th>

                <th>
                    Address
                </th>

                <th>
                    Phone
                </th>
                <th>
                    Action
                </th>

            </tr>
            @foreach($commandes as $command)
                <tr>
                    <td>
                        {{ $command->name }}
                    </td>
                    <td>
                        {{ $command->adress }}
                    </td>
                    <td>
                        {{ $command->phone }}
                    </td>
                    <td>
                             <form action="{{url('commandes/'.$command->id_client)}}" method="post">
		    	  	   	   	  	{{csrf_field()}}
		    	  	   	   	  	{{method_field('DELETE')}}
		    	  	   	   	  	
		    	  	   	   	    
							    <a href="{{url('commandes/'.$command->id_client.'/detail')}}" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
		    	  	   	   	  	<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
		    	  	   	   	  	</form>
		    	  	   	   	  
                   
              </td>
                </tr>
            @endforeach
        </table>
        {{$commandes->links()}}
    </div>

@endsection