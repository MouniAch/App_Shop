<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function dashboard(){

        return view('admin');
       
        
    }
   
    /*public function statorder(){
       
        return view('admin',['orders'=>$orders]);
       
        
    }*/

    public function statuser(){
         $orders = DB::table('orders');
         $users = DB::table('users');
         $commandes=DB::table('command');
        return view('admin',array
        (
            'orders'    =>  $orders,
            'users'  =>  $users,
            'commandes'  =>  $commandes,
            
        ));
       
        
    }
}

