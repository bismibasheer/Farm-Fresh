<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\Payment;
use Auth;

class CustomerController extends Controller
{
    public function customerhome()
    {
        return view("Customer.Customerhome");
        
    }
    public function customercategory()
    {

        $categories = Category::all();
        return view('Customer.customerviewcategory', compact('categories')); 
    }
    public function customerviewproduct($categoryid)
    {

        $products=Product::where('categoryid','=',$categoryid)->get();
        return view('Customer.customerviewproduct',compact('products'));
        
    }
    public function productsingleview($productid)
    {
        $products=Product::where('productid','=',$productid)->get();
        return view('Customer.productsingleview',compact('products'));
   
}

public function sentrequest(Request $request)
{
    Booking::create([
        'productid'=>$request->productid,
        'customerid'=>$request->session()->get('customerid'),
        'quantity'=>$request->quantity,
        'totalamount'=>$request->totalamount,
        'requestdate'=>now(),
        'requireddate'=>$request->requireddate,
        'status'=>'requested',
     ]);
     return back()->with('success','Successfully Booked');
   }

   public function confirmationview()
   {
    $customerid = session('customerid');

    $bookings = Booking::where('status', '=', 'Accepted')
        ->where('customerid', $customerid)
        ->get();
        
    return view('Customer.confirmationview', compact('bookings'));
}
public function payment(Request $request,$requestid)
{
    $customerid = session('customerid');
    $booking = Booking::where('customerid', $customerid)
    ->where('requestid', $requestid)
    ->get();

return view('Customer.payment', compact('booking'));
    
}

public function paymentinsert(Request $request){
    $requestid=$request->requestid;
    Payment::create([
        'requestid'=>$request->requestid,
        'paymentdate'=>now(),
        'paymentstatus'=>'Paid',

    ]);
    $booking=Booking::find($requestid);
    $booking->update([
        'status'=>'Paid'
    ]);
    return redirect()->route('confirmationview')->with('success','payment successfull');

}

public function logout(Request $request)
 {
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();
  return redirect('login_page');
 }
 public function Viewprofile()
 {

    $customerid = session('customerid');
    $customer = Customer::where('customerid', $customerid)
    ->where('customerid', $customerid)
    ->get();
    return view("Customer.Viewprofile",compact('customer')); 
 }
 public function customer()
    {
        return $this->belongsTo(Customer::class,'customerid','customerid');
    }

    public function editprofile($customerid)
    {
        $customers = Customer::findOrFail($customerid);
        $location = Location::all();
    
        // Debugging: Log customer and location
        \Log::info($customers);
        \Log::info($location);
    
        return view('Customer.Editviewprofile', compact('customers', 'location'));
    }
    
    public function updateprofile(Request $request, $customerid)
    {
        // Validate input
        $request->validate([
            'customername' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email',
            'locationid' => 'required|integer',
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'contact' => 'required|string',
        ]);
    
        // Update customer record
        $customer = Customer::findOrFail($customerid);
        $customer->update([
            'customername' => $request->customername,
            'address' => $request->address,
            'email' => $request->email,
            'locationid' => $request->locationid,
            'username' => $request->username,
            'password' => $request->password,
            'contact' => $request->contact
        ]);
    
        return redirect()->route('Viewprofile')->with('success', 'Profile updated successfully.');
    }
    
 
}