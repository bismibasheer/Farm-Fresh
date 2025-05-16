<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Customer;

class LoginController extends Controller
{
   public function LoginPage()
{
    return view('Guest.Login');
}
public function adminlogin_process(Request $request)
{
    $request->validate([
        'username.required' => 'The username is required.',
    'username.alpha_num' => 'The username may only contain letters and numbers.', 'username.min' => 'The username must be at least 5 characters.',
    'username.max' => 'The username may not be greater than 20 characters.', 'username.unique' => 'This username has already been taken. Please choose another.',
    'password.required' => 'The password is required.', 
    'password.string' => 'The password must be a string.',
    'password.min' => 'The password must be at least 8 characters long.'
     ]);

 $username=$request->post("username");
 $password=$request->post("password");
 $checklogin=Login::where(["username"=>$username,"password"=>$password])->get();
 if(count($checklogin)==1)
 {
     $request->session()->put("username",$username);
     $request->session()->put("loginid",$checklogin[0]["loginid"]);
     return  redirect()->route('adminhome');

 }
 else if(count($checklogin)== 0){
    $check=Customer::where(["username"=>$username,"password"=>$password])->get();
    if(count($check)== 1){
        $request->session()->put("username",$username);
        $request->session()->put("customerid",$check[0]["customerid"]);
        return  redirect()->route('customerhome');
    }
    else{

    return back()->with('Error','Authentication Failed......');
 }
}
 }
}





