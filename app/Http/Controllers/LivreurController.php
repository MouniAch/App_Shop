<?php

namespace App\Http\Controllers;
use App\Http\Requests\livreurRequest;

use App\Livreur;

use Illuminate\Http\Request;

class LivreurController extends Controller
{
     public function index() {

      $listlivreur=Livreur::all();

    	return view('livreur.index',['livreurs'=>$listlivreur]);
    }
    public function create() {

    	return view('livreur.create');
    }
     public function store(livreurRequest $request){
         
         $livreur=new Livreur();

         $livreur->name=$request->input('name');
         $livreur->email=$request->input('email');
         $livreur->password=$request->input('password');
         $livreur->ville=$request->input('ville');
         $livreur->telephone=$request->input('telephone');
         /*$livreur->mobile=$request->input('mobile'); 
          $livreur->availability=$request->input('availability'); */
         $livreur->save();
         return redirect('livreurs');
    	   	

    }
    public function edit($id){
    	$livreur=Livreur::find($id);
    	return view('livreur.edit',['livreur'=>$livreur]);
    }

    //permet de modifier un produit
    public function update(livreurRequest $request,$id){
    	$livreur = Livreur::find($id);

    	
    $livreur->name=$request->input('name');
         $livreur->email=$request->input('email');
         $livreur->password=$request->input('password');
         /*$livreur->address=$request->input('address');*/
         $livreur->ville=$request->input('ville');
        $livreur->telephone=$request->input('telephone'); 
        /* $livreur->mobile=$request->input('mobile'); 
          $livreur->availability=$request->input('availability'); */
         $livreur->save();
         return redirect('livreurs');
     }

    // permet de supprimer un produit
    public function destroy(Request $request,$id){
    	$livreur=Livreur::find($id);
    	$livreur->delete();
    	return redirect('livreurs');
    	
    }
}
