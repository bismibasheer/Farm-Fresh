<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Location;
use App\Models\Customer;
use App\Models\Booking;
use Auth;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function adminhome()
   {
    
              //Pie Chart

              $bookingcount=  DB::table('bookings as b')
              ->select(DB::raw('COUNT(b.productid) as count'), 'p.productname')
              ->join('products as p', 'p.productid', '=', 'b.productid')
              ->groupBy('b.productid','p.productname')
              ->get();


// barchart

    // Get the current year
    $currentYear = now()->year;

    // Retrieve bookings with 'paid' status, valid payment dates, and within the current year
    $bookings = Booking::with('customer', 'product')
        ->where('status', 'paid') // Filter by 'paid' status
        ->whereNotNull('requestdate') // Exclude null dates
        ->whereYear('requestdate', $currentYear) // Filter by the current year
        ->get();

    // Group bookings by month
    $monthlyData = $bookings->groupBy(function ($booking) {
        return Carbon::parse($booking->requestdate)->format('m'); // Group by "Month" (numeric format)
    })->map(function ($monthGroup) {
        return $monthGroup->sum('totalamount'); // Sum totalamount for each month
    });

    // Convert keys (month numbers) to readable month names (e.g., "January")
    $months = $monthlyData->keys()->map(function ($month) {
        return Carbon::createFromFormat('m', $month)->format('F'); // Convert month number to name
    })->toArray();

    // Get total amounts as an array
    $totalAmounts = $monthlyData->values()->toArray();


              return view('Admin.adminhome', compact( 'bookingcount','months', 'totalAmounts'));




  }




   
   public function viewdistrict()
   {
      $districts=District::all();
      return view('Admin.Viewdistrict',compact('districts'));
    }


   public function viewcustomer()
   {
      $register=Customer::all();
      return view('Admin.Customerview',compact('register'));
    }


    public function bookingdetailsview()
    {
      $bookings = Booking::where('status', '=', 'requested')
      ->get();
        
       return view('Admin.bookingdetailsview',compact('bookings'));
        
 
     
 }
 public function Acceptrequest($requestid){

  $bookings=Booking::find($requestid);
  $bookings->update([
    'status'=>'Accepted',
  ]);
  return  redirect()->route('bookingdetailsview')->with('success','Your request accepted');
 }


 public function Rejectrequest($requestid){

  $bookings=Booking::find($requestid);
  $bookings->update([
    'status'=>'Rejectd',
  ]);
  return  redirect()->route('bookingdetailsview')->with('success',' Sorry!Your request Rejected');
 }

 public function paymentdetailsview(){
  $bookings = Payment::all();
  return view('Admin.paymentdetailsview',compact('bookings'));

 }
 public function logout(Request $request)
 {
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();
  return redirect('login_page');
 }
 public function monthlySalesChart(Request $request)
 {
     // Fetch the month and year from the request or use current month/year as defaults
     $month = $request->input('month', null); 
     $year = $request->input('year', date('Y'));
 
     // Base Query for total sales grouped by month
     $query = DB::table('payments')
         ->join('bookings', 'payments.requestid', '=', 'bookings.requestid')
         ->select(
             DB::raw('MONTH(payments.paymentdate) as month'),
             DB::raw('SUM(bookings.totalamount) as total_sales')
         )
         ->whereYear('payments.paymentdate', $year);
 
     // Apply month filter if selected
     if ($month) {
         $query->whereMonth('payments.paymentdate', $month);
     }
 
     // Group and order the results
     $monthlySales = $query
         ->groupBy(DB::raw('MONTH(payments.paymentdate)'))
         ->orderBy(DB::raw('MONTH(payments.paymentdate)'))
         ->get();
 
     return view('Admin.Brandsalechart', compact('monthlySales', 'month', 'year'));
 }






 
 
 
}

