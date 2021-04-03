<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UsersController@getIndex'); 

Route::get('admin',['middleware'=>'isalivreur',function(){

    return view('admin');
}]);    

Route::get('livreur', ['middleware'=>'auth',function(){
    return view('livreur');
}]);    


Auth::routes();
Route::post('form','CommandController@create');
Route::get('accessory',function(){

    return view('accessory');
});
Route::get('profile',function(){

    return view('profile');
});
/*Route::get('command.form',function(){

    return view('command.form');
});*/


Route::get('/home', 'HomeController@index');
Route::get('/produits','ProduitController@index');
Route::get('produits/create','ProduitController@create');
Route::post('produits','ProduitController@store');
Route::get('produits/{id}/edit','ProduitController@edit');
Route::put('produits/{id}','ProduitController@update');
Route::delete('produits/{id}','ProduitController@destroy');

Route::get('/cats','CatController@index');
Route::get('cats/create','CatController@create');
Route::post('cats','CatController@store');
Route::get('cats/{id}/edit','CatController@edit');
Route::put('cats/{id}','CatController@update');
Route::delete('cats/{id}','CatController@destroy');

Route::get('orders','OrderController@index');
Route::get('orders/create','OrderController@create');
Route::post('orders','OrderController@store');
Route::get('orders/{id}/edit','OrderController@edit');
Route::put('orders/{id}','OrderController@update');
Route::delete('orders/{id}','OrderController@destroy');

Route::get('customers','CustomerController@index');
Route::get('customers/create','CustomerController@create');
Route::post('customers','CustomerController@store');
Route::get('customers/{id}/edit','CustomerController@edit');
Route::put('customers/{id}','CustomerController@update');
Route::delete('customers/{id}','CustomerController@destroy');


Route::get('users','UsersController@index');
Route::get('users/create','UsersController@create');
Route::post('users','UsersController@store');
Route::get('users/{id}/edit','UsersController@edit');
Route::get('users/{id}/detail','UsersController@detail');
Route::put('users/{id}','UsersController@update');
Route::delete('users/{id}','UsersController@destroy');

Route::get('page','ProduitController@list');

Route::get('produits/{id}','ProduitController@product');

Route::get('order.commande','OrderController@getcommande');
Route::get('produits/create','CatController@getcategory');
Route::resource('command','CommandController');
Route::get('/settings','UsersController@setting');

Route::get('/profile','ProfileController@profile');

Route::post('/updateprofile','ProfileController@updateprofile');
Route::get('/getaccessory','ProduitController@getaccessory');

Route::get('/admin', 'AdminController@statuser');
Route::get('commandes/{id_client}/detail', 'CommandController@detail');
Route::get('commandes/{id}/detail1', 'OrderController@detail1');
Route::delete('commandes/{id_client}','CommandController@destroy');


















