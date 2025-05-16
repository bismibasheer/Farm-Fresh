<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\District;

class LocationController extends Controller
{
    public function location()
    {
        $districts=District::all();
       return view('Admin.location',compact('districts'));
        
    }
    public function locationinsert(Request $request)
    {
        Location::create([
            'locationname'=>$request->location,
            'districtid'=>$request->districtid
        ]);
        return back()->with('success','Location added successfully');

    }
    public function viewlocation()
    {
       $locations=Location::all();
       $districts=District::all();
       
       return view('Admin.Viewlocation',compact('locations','districts'));
    }
       public function deletelocation($locationid)
       {
           $location=Location::find($locationid);
          if ($location) {
             $location->delete();
             return redirect()->route('viewlocation')->with('success', 'location delete successfully');
          }
       }
       public function editlocation($locationid)
       {
          $locations = Location::findorFail($locationid);
          $district=District::all();
          return view('Admin.Editlocation', compact('locations','district'));
       }
       public function updatelocation(Request $request, location $location)
       {
          $location->update([
             'locationname' => $request->location,
             'districtid'=>$request->districtid,
            
          ]);
          return redirect()->route('viewlocation')->with('success','location added successfully');
       }
       public function getlocations($districtid)
       {
           $districts=Location::where('districtid',$districtid)->get();
           return response()->json($districts);
       }
    

  
}
