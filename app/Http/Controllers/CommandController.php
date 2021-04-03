<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Command;
use App\User;
use App\Notification;
use App\Produit;



use App\Notifications\RepliedToCommand;
 use DB;

use Illuminate\Support\Facades\Aut;
use Illuminate\Support\Facades\Redirect;



class CommandController extends Controller
{
    public function index(){

        
        $commandes=DB::table('command')->paginate('6');
        return view('command.allcommand', compact('commandes'));
    }

    public function create(Request $request){

        
        $produit=Produit::where('id',$request->id)->first();
     
        
        $quantity=$request->quantity;
        return view('command.form')->with([ 'produit'=>$produit,'quantity'=>$quantity]);
    }

    public function store(Request $request){
        $command = new Command();
        $command->name = $request->name;
        $command->email = $request->email;
        $command->phone = $request->phone;
        $command->adress = $request->adress;
        $command->dispo = $request->dispo;
       /* $command->product = $request->prod_id;*/
        $command->product = $request->product;
        $command->quantity =$request->quantity;

        $command->save();
        
        
        
       
        return  redirect('/');
    }

      /* public function form($id){
       
  
        return view('form')->with(compact('produit'));
  
    }*/
    public function detail($id_client) {

        $command=Command::find($id_client);
    
          return view('command.detail',['commandes'=>$command]);
      }

     
      public function destroy(Request $request,$id_client){

        $command=Command::find($id_client);
        if($command != null){
    	   $command->delete();
            return  back()->with(['message'=> 'Successfully deleted!!']);
        }
        return back()->with(['message'=> 'Wrong ID!!']);
            
    	
    
}
    

}
