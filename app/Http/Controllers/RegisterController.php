<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\District;
use App\Models\Location;
use App\Mail\CustomerRegistered;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function customerregister()
    {
        $districts=District::all();
        $locations=Location::all(); 
        return view("Guest.Register",compact("districts","locations"));
    }
    public function customerinsert(Request $request){
        
      $request->validate([
        'customername'=>['required','regex:/^[A-Z][a-zA-Z\s]*$/'],
        'address'=>'required|string|max:300', 
        'email'=>'required|email|max:255',
        'username'=>'required|alpha_num|min:5|max:20|unique:customers,username',
        'password'=>'required|string|min:8',
        'contact'=>'required|numeric|digits:10',
    
    ]);

    $customer=  Customer::create([
            'customername'=>$request->customername,
            'address'=> $request->address,
            'email'=>$request->email,
            'districtid'=> $request->districtid,
            'locationid'=>$request->locationid,
            'username'=> $request->username,
            'password'=> $request->password,
            'contact'=> $request->contact,
            'regdate'=>now(),
        ]);
    
    Mail::to($customer->email)->send(new CustomerRegistered($customer));
        return back()->with('success', 'Successfully Registered and Email send Successfully');
    }
     

  
        public function getLocations($districtid)
    {
        $locations=Location::where('districtid',$districtid)->get();
        return response()->json($locations);
    }
}