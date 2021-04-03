<?php

namespace App\Http\Controllers;
use App\Http\Requests\produitRequest;
use Illuminate\Http\Request;
Use App\Produit;
use App\Cat;
use illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
  function list(){
    $produits=DB::table('produits')->paginate(6);
    return view('page',['produits'=>$produits]);
  }
    
    //lister les produits
     public function index(){

    	$listproduit=DB::table('produits')->paginate(3);

    	return view('produit.index',['produits'=>$listproduit]);

    }
    public function getaccessory(){
      $produit=DB::table('produits')->where('section','ladies')
                                     ->where('category','2');
                                      
      $produit=$produit->get();
      return view('produit.ladies',['produit'=>$produit]);
    }

    // affiche le formulaire de creation de produit
    public function create(){

    	return view('produit.create');
    	
    }

    //enregistrer un produit
    public function store(produitRequest $request){
         
         $produit=new Produit();
        

         $produit->designation=$request->input('designation'); 
         $produit->description=$request->input('description');
         $produit->category=$request->input('category');
         $produit->price=$request->input('price');
         $produit->section=$request->input('section');
   
         if($request->hasfile('image'))
         {
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time(). '.' .$extension;
          $file->move('uploads/produit/',$filename);
          $produit->image = $filename;
        } 


         $produit->save();
         return redirect('produits');
    	   	

    }

    //permet de récupérer un produit puis de le mettre dans un formulaire
    public function edit($id){
    	$produit=Produit::find($id);
    	return view('produit.edit',['produit'=>$produit]);
    }

    //permet de modifier un produit
    public function update(produitRequest $request,$id)
    {


         $produit = Produit::find($id); 
         if($request->hasfile('image'))
         {
          
           $image = $request->file('image');
           $extension = $image->getClientOriginalExtension();
           $filename = time(). '.' .$extension;
           $location = storage_path('uploads/produit/'.$filename);
           Image::make($image)->resize(800,400)->save($location);
           Storage::delete($oldFilename);

            $produit->image= $filename;
         
        } 
        $produit->designation=$request->input('designation'); 
        $produit->description=$request->input('description');
        $produit->category=$request->input('category');
        $produit->price=$request->input('price');
      
       $produit->save();
       return redirect('produits');
    }

    // permet de supprimer un produit
    public function destroy(Request $request,$id){
    	$produit=Produit::find($id);
    	$produit->delete();
    	return redirect('produits');
    	
    }

    public function product($id){
        $produit=Produit::where('id',$id)->first();

        return view('produit.detail')->with(compact('produit'));

    }
    

    
    

}
