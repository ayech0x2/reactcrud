<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class ReactController extends Controller
{
    public function getAllCustomers(){
      $customers = Customer::orderBy('id','DESC')->get();
      return response()->json(['customers'=>$customers]);
    }

    public function deleteCustomer(Request $request){
      $customer = Customer::find($request->id);
      $customer->delete();
      $customers = Customer::orderBy('id','DESC')->get();

      return response()->json(['customers'=>$customers]);
    }

    public function updateCustomerName(Request $request){
      $customer = Customer::find($request->id);
      $customer->name = $request->name;
      $customer->save();
      $customers = Customer::orderBy('id','DESC')->get();
      return response()->json(['customers'=>$customers]);

    }
    public function addNewCustomer(Request $request){
      $customer = new Customer;
      $customer->name = $request->name;
      $customer->company = $request->company;
      $customer->phone = $request->phone ;
      $customer->save();
      $customers = Customer::orderBy('id','DESC')->get();
      return response()->json(['customers'=>$customers]);
    }
}
