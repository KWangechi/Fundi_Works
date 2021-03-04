<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use App\Customers\NewCustomerRegisteredEvent;


class CustomersController extends Controller
{
  public function list(){
    $customers = Customer::all();
    return view('internals.customers', ['customers' => $customers]);
          
  }

  public function index(){

    return view('internals.customers');
  
  }



public function store(){
  
  $data = request()->validate([
  'name' => 'required',
  'address' => 'required',
  'fundi' =>'required',
  'description' => 'required' ,
  'phone' => 'required|max:11',
  'date' => 'required',
  'time' => 'required'
  ]);

$customer = new Customer();
 $customer->name = request('name');
 $customer->address = request('address');
 $customer->fundi = request('fundi');
 $customer->description = request('description');
 $customer->phone = request('phone');
 $customer->date = request('date');
 $customer->time = request('time');

 $customer->save();
 
  return back(['status' => 'Successfully created!!']);
  
}

public function showOrders(){

  return view('internals.orders');

}


}

