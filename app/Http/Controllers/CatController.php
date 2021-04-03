<?php

namespace App\Http\Controllers;
use App\Http\Requests\catRequest;
use Illuminate\Http\Request;
use App\Cat;
use illuminate\Http\UploadedFile;

class CatController extends Controller
{
    public function index() {

        $listcat=Cat::all();

    	return view('cat.index',['cats'=>$listcat]);
    }
    public function create() {

    	return view('cat.create');
    }

    public function getcategory(){
        $cats=Cat::all();
  
        return view('produit.create',['cats'=>$cats]);    
  
  }
  
     
     public function store(catRequest $request){
         
         $cat=new Cat();

         $cat->title=$request->input('title'); 
        
         $cat->save();
         return redirect('/cats');
    	   	

    }
    public function edit($id){
    	$cat=Cat::find($id);
    	return view('cat.edit',['cat'=>$cat]);
    }

    //permet de modifier un produit
    public function update(catRequest $request,$id){
    	$cat = Cat::find($id);

    	
        $cat->title=$request->input('title'); 
         
         $cat->save();
    
    	return redirect('/cats');
    }

    // permet de supprimer un produit
    public function destroy(catRequest $request,$id){
    	$cat=Cat::find($id);
    	$cat->delete();
    	return redirect('/cats');
    	
    }
}
