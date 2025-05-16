<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function category()
   {
      return view('Admin.category');
   }
   public function categoryinsert(Request $request)
   {
      $request->validate([
         'categoryname'=>[
             'required',
             'regex:/^[A-Z][a-zA-Z\s]*$/'
         ],
         'categoryimage'=>'required|file|mimes:jpg,jpeg,png,pdf',

      ]);

      if ($request->hasFile('categoryimage')) {

         $image = $request->file('categoryimage');
         $fileName = $image->getClientOriginalName();
         $destinationPath = public_path(path: '/uploads');
         $image->move($destinationPath, $fileName);
         Category::create([

            'categoryname' => $request->categoryname,
            'categoryimage' => $fileName,
         ]);
         return back()->with('success', 'category added successfully');
      }
   }
   public function viewcategory()
   {
      $categories = Category::all();
      return view('Admin.Viewcategory', compact('categories'));
   }
   public function deletecategory($categoryid)
   {
       $category = Category::find($categoryid);
   
       if ($category) {
           // Delete the category from the database
           $category->delete();
   
           // Redirect with a success message
           return redirect()->route('viewcategory')->with('success', 'Category deleted successfully');
       }
   
       // If category not found, redirect with error message
       return redirect()->route('viewcategory')->with('error', 'Category not found');
   }
   
   public function editcategory($categoryid)
   {
      $category= Category::findorFail($categoryid);
      return view('Admin.Editcategory', compact('category'));
   }
   public function updatecategory(Request $request, category $category)
   {
      if ($request->hasFile('categoryimage')) {

         $image = $request->file('categoryimage');
         $fileName = $image->getClientOriginalName();
         $destinationPath = public_path(path: '/uploads');
         $image->move($destinationPath, $fileName);
      } else {
         $fileName = $request->oldimage;
      }
      $category->update([
         'categoryname' => $request->category,
         'categoryimage' => $fileName,
      ]);
      return redirect()->route('viewcategory')->with('success','category added successfully');
   }
}
