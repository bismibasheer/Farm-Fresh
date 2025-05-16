<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;
 use Carbon\Carbon;
class ReportController extends Controller
{
    public function Bookingcountchart()
    {
              //Pie Chart

        // $booking = Booking::all();
        // $productname = [];
        // $bookingcount = [];
        // foreach ($booking as $bookings) 
        // {
        //     $productname[] =$bookings->product->productname;
        //    $bookingcount[] =Booking::where('productid', $bookings->productid)->count();
        // }
      $bookingcount=  DB::table('bookings as b')
    ->select(DB::raw('COUNT(b.productid) as count'), 'p.productname')
    ->join('products as p', 'p.productid', '=', 'b.productid')
    ->groupBy('b.productid','p.productname')
    ->get();
    
        return view('Admin.Bookingcountchart', compact( 'bookingcount'));

    }
    public function Reportdate(Request $request)
    {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
    
        // Fetch bookings with status = 'paid' and within the date range
        $bookings = Booking::where('status', 'paid')
                            ->whereBetween('requestdate', [$from_date, $to_date])
                            ->with('product', 'customer') // Eager load the related models
                            ->get();
    
        return view('Admin.Reportdate', compact('bookings', 'from_date', 'to_date'));
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

 public function showPaymentDetails()
{
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

    // Pass data to the view
    return view('Admin.Barchart', compact('months', 'totalAmounts'));
}

public function booking()
{
    return $this->belongsTo(Booking::class,'requestid','requestid');
}
public function product()
{
    return $this->belongsTo(Product::class,'productid','productid');
}

}
