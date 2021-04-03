<?php

namespace App\Http\Controllers;
use App\Http\Requests\customerRequest;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {

      $listcustomer=Customer::all();

    	return view('customer.index',['customers'=>$listcustomer]);
    }
    public function create() {

    	return view('customer.create');
    }
     public function store(customerRequest $request){
         
         $customer=new Customer();

         $customer->name=$request->input('name');
         $customer->email=$request->input('email');
         $customer->address=$request->input('address');
         $customer->mobile=$request->input('mobile'); 
        
         $customer->save();
         return redirect('customers');
    	   	

    }
    public function edit($id){
    	$customer=Customer::find($id);
    	return view('customer.edit',['customer'=>$customer]);
    }

    //permet de modifier un produit
    public function update(customerRequest $request,$id){
    	$customer = Customer::find($id);

    	
          $customer->name=$request->input('name');
         $customer->email=$request->input('email');
         $customer->address=$request->input('address');
         $customer->mobile=$request->input('mobile'); 
        
         $customer->save();
         return redirect('customers');
    }

    // permet de supprimer un produit
    public function destroy(Request $request,$id){
    	$customer=Customer::find($id);
    	$customer->delete();
    	return redirect('customers');
    	
    }
}
