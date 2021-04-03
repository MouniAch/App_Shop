<?php

namespace App\Http\Controllers;
use App\Http\Requests\livreurRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    public function getIndex(){

        return  view('index');
    }
    public function index() {

        $listlivreur=User::all();
  
          return view('livreur.index',['users'=>$listlivreur]);
      }

      public function create() {

    	return view('livreur.create');
    }

      public function store(livreurRequest $request){
         
        $livreur=new User();

        $livreur->name=$request->input('name');
        $livreur->email=$request->input('email');
        $livreur->password=Hash::make($request->input('password'));
        $livreur->ville=$request->input('ville');
        $livreur->telephone=$request->input('telephone'); 
        $livreur->type=$request->input('type'); 
        $livreur->save();
        return redirect('users');
              

   }

   public function edit($id){
    $livreur=User::find($id);
    return view('livreur.edit',['livreur'=>$livreur]);
}

//permet de modifier un produit
public function update(livreurRequest $request,$id){
    $livreur = User::find($id);

    
     $livreur->name=$request->input('name');
     $livreur->email=$request->input('email');
     $livreur->password=Hash::make($request->input('password'));
     $livreur->ville=$request->input('ville');
     $livreur->telephone=$request->input('telephone'); 
     $livreur->type=$request->input('type'); 
     $livreur->save();
     return redirect('users');
 }

// permet de supprimer un produit
public function destroy(Request $request,$id){
    $livreur=User::find($id);
    $livreur->delete();
    return redirect('users');
   
    
}
public function detail($id) {

    $listuser=User::find($id);;
    

      return view('livreur.detail',['users'=>$listuser]);
  }

    
    

   
  
}

