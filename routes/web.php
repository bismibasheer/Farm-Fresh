<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\LoginController;
use App\Http\controllers\LocationController;
use App\Http\controllers\CategoryController;
use App\Http\controllers\ProductController;
use App\Http\controllers\GuestController;
use App\Http\controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReportController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('adminhome',[AdminController::class,'adminhome'])->name('adminhome');
Route::get('login_page',[LoginController::class,'LoginPage'])->name('login_page');
Route::post('adminlogin_process',[LoginController::class,'adminlogin_process'])->name('adminlogin_process');

Route::get('viewdistrict',[AdminController::class,'viewdistrict'])->name('viewdistrict');



Route::get('location',[LocationController::class,'location'])->name('location');
Route::post('locationinsert',[LocationController::class,'locationinsert'])->name('locationinsert');
Route::get('deletelocation/{locationid}',[LocationController::class,'deletelocation'])->name('deletelocation');
Route::get('editlocation/{locationid}',[LocationController::class,'editlocation'])->name('editlocation');
Route::post('updatelocation/{location}',[LocationController::class,'updatelocation'])->name('updatelocation');
Route::get('viewlocation',[LocationController::class,'viewlocation'])->name('viewlocation');
Route::get('/getlocations/{district}', [LocationController::class, 'getlocations']);




Route::get('category',[CategoryController::class,'category'])->name('category');
Route::post('categoryinsert',[CategoryController::class,'categoryinsert'])->name('categoryinsert');
Route::get('viewcategory',[CategoryController::class,'viewcategory'])->name('viewcategory');
Route::get('deletecategory/{categoryid}',[CategoryController::class,'deletecategory'])->name('deletecategory');
Route::get('editcategory/{categoryid}',[CategoryController::class,'editcategory'])->name('editcategory');
Route::post('updatecategory/{category}',[CategoryController::class,'updatecategory'])->name('updatecategory');



Route::get('product',[ProductController::class,'product'])->name('product');
Route::post('productinsert',[ProductController::class,'productinsert'])->name('productinsert');
Route::get('viewproduct',[ProductController::class,'viewproduct'])->name('viewproduct');
//Route::get('deleteproduct/{productid}',[ProductController::class,'deleteproduct'])->name('deleteproduct');
Route::delete('/deleteproduct/{productid}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');
Route::get('editproduct/{productid}',[ProductController::class,'editproduct'])->name('editproduct');
Route::post('updateproduct/{product}',[ProductController::class,'updateproduct'])->name('updateproduct');
// Route::get('/getproducts/{categoryid}', [ProductController::class, 'getproducts']);
Route::get('/getproducts/{categoryid}', [ProductController::class, 'getproducts'])->name('getproducts');




Route::get('',[GuestController::class,'guest'])->name('GuestHome');
Route::get('customerhome',[CustomerController::class,'customerhome'])->name('customerhome');

Route::get('/customerregister', [RegisterController::class, 'customerregister'])->name('customerregister');
Route::post('customerinsert',[RegisterController::class,'customerinsert'])->name('customerinsert');
Route::get('/getLocations/{districtid}',[RegisterController::class,'getLocations'])->name('getLocations');
Route::get('viewcustomer',[AdminController::class,'viewcustomer'])->name('viewcustomer');


Route::get('customerview',[CustomerController::class,'customercategory'])->name('customerview');
Route::get('customerviewproduct/{categoryid}',[CustomerController::class,'customerviewproduct'])->name('customerviewproduct');
Route::get('productsingleview/{productid}',[CustomerController::class,'productsingleview'])->name('productsingleview');
Route::post('sentrequest',[CustomerController::class,'sentrequest'])->name('sentrequest');
Route::get('bookingdetailsview',[AdminController::class,'bookingdetailsview'])->name('bookingdetailsview');
Route::get('Acceptrequest/{requestid}',[AdminController::class,'Acceptrequest'])->name('Acceptrequest');
Route::get('Rejectrequest/{requestid}',[AdminController::class,'Rejectrequest'])->name('Rejectrequest');
Route::get('confirmationview',[CustomerController::class,'confirmationview'])->name('confirmationview');
Route::get('payment/{requestid}',[CustomerController::class,'payment'])->name('payment');
Route::post('paymentinsert',[CustomerController::class,'paymentinsert'])->name('paymentinsert');

Route::get('paymentdetailsview',[AdminController::class,'paymentdetailsview'])->name('paymentdetailsview');

Route::get('Bookingcountchart',[ReportController::class,'Bookingcountchart'])->name('Bookingcountchart');

Route::get('ReportDate', [ReportController::class, 'Reportdate'])->name('ReportDate');


Route::get('showPaymentDetails', [ReportController::class, 'showPaymentDetails'])->name('showPaymentDetails');


Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('logout', [CustomerController::class, 'logout'])->name('logout');

Route::get('Viewprofile', [CustomerController::class, 'Viewprofile'])->name('Viewprofile');
Route::get('editprofile/{customerid}',[CustomerController::class,'editprofile'])->name('editprofile');
Route::post('updateprofile/{customer}',[CustomerController::class,'updateprofile'])->name('updateprofile');




Route::get('monthlySalesChart', [ReportController::class, 'monthlySalesChart'])->name('monthlySalesChart');




