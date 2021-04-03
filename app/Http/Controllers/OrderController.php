<?php

namespace App\Http\Controllers;
use App\Http\Requests\orderRequest;
use Illuminate\Http\Request;
use App\Order;
use Auth;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{   
    public function getcommande(){

      $user=Auth::user();
      $commandes = DB::table('orders')->where('name_deli',$user->name);
      $commandes=$commandes->get();
      
       return view('order.commande',['commandes'=>$commandes]);

    }
    public function index() {

      /*$listorder=Order::all()->paginate(6);*/
      $listorder=DB::table('orders')->paginate(3);

    	return view('order.index',['orders'=>$listorder]);
    }
    public function create() {

    	return view('order.create');
    }
     public function store(orderRequest $request){
         
         $order=new Order();

         $order->reference=$request->input('reference');
         $order->date=$request->input('date');
         $order->address=$request->input('address');
         $order->price=$request->input('price'); 
         $order->name_deli=$request->input('name_deli'); 
         
        
         $order->save();
         return redirect('orders');
    	   	

    }
    public function edit($id){
    	$order=Order::find($id);
    	return view('order.edit',['order'=>$order]);
    }

    //permet de modifier un produit
    public function update(orderRequest $request,$id){
    	$order = Order::find($id);

    	
         $order->reference=$request->input('reference');
         $order->date=$request->input('date');
         $order->address=$request->input('address');
         $order->price=$request->input('price');
         $order->name_deli=$request->input('name_deli');  
         
        
         
         $order->save();
    
    	return redirect('orders');
    }

    // permet de supprimer un produit
    public function destroy(Request $request,$id){
    	$order=Order::find($id);
    	$order->delete();
    	return redirect('orders');
    	
    }
    public function detail1($name_deli) {

      $command=Order::find($name_deli);
  
        return view('command.detail1',['commandes'=>$command]);
    }
}
