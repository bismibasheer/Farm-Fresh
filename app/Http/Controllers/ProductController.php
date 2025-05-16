<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        $categories=Category::all();
        $products=Product::all();
       return view('Admin.product',compact('categories'));
        
    }
    public function productinsert(Request $request)
    {
     if($request->hasFile('productimage'))
     {
       
       $image=$request->file('productimage');
       $fileName=$image->getClientOriginalName();
       $destinationPath=public_path(path:'/uploads');
       $image->move($destinationPath,$fileName);
       Product::create([
          'productname'=>$request->productname,
          'categoryid'=>$request->categoryid,
          'productimage'=>$fileName,
          'productprice'=>$request->productprice,
          'productstock'=>$request->productstock,
          'quantity'=>$request->quantity
       ]);
       return back()->with('success','product added successfully');
     }
    }
    public function viewproduct()
    {
       $products=Product::all();
       $categorys=Category::all();
       return view('Admin.Viewproduct',compact('products','categorys'));
     }
     public function deleteproduct($productid)
{
    $product = Product::find($productid);

    if (!$product) {
        return redirect()->route('viewproduct')->with('error', 'Product not found');
    }

    $product->delete();

    return redirect()->route('viewproduct')->with('success', 'Product deleted successfully');}

     public function editproduct($productid)
    {
        $products = Product::findOrFail($productid);
        $category=Category::all();
        return view('Admin.Editproduct', compact('products','category'));
    }


    public function getproducts($categoryid)
{
    $products = Product::where('categoryid', $categoryid)->get(); // Fetch products for the given category
    return response()->json($products); // Return products as JSON
}

    public function updateproduct(Request $request, Product $product)
    {
        if ($request->hasFile('productimage')) {
            $image = $request->file('productimage');
            $fileName = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $fileName);
        } else {
            $fileName = $request->oldimage;
        }

        $product->update([
            'productname' => $request->productname,
            'categoryid' => $request->categoryid,
            'productimage' => $fileName,
            'productprice' => $request->productprice,
            'productstock' => $request->productstock,
            'quantity'=>$request->quantity
        ]);

        return redirect()->route('viewproduct')->with('success', 'Product updated successfully');
    }
   
}