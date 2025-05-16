@extends('Layouts.AdminMaster')
@section('content')
<div class="main-panel" style="background-color: #f9fdf9;">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color: #e6f7e6; border: 1px solid #c8e6c9;">
                    <div class="card-body">
                        <div class="row" style="float: right;">
                           
                        </div>
                        <h4 class="card-title" style="color: #2e7d32;">Update Product</h4>
                        <form action="{{route('updateproduct', $products->productid)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="productname" style="color: #1b5e20;">Product Name</label>
                                <input type="text" name="productname" class="form-control" id="productname"
                                    value="{{$products->productname}}" placeholder="Product Name" 
                                    style="background-color: #ffffff; border: 1px solid #aed581;">
                            </div>
                            <div class="form-group">
                                <label for="categoryname" style="color: #1b5e20;">Select Category</label>
                                <select name="categoryid" id="categoryid" class="form-control" 
                                    style="background-color: #ffffff; border: 1px solid #aed581;">
                                    @foreach($category as $categories)
                                        @if($products->categoryid == $categories->categoryid)
                                            <option value="{{ $categories->categoryid }}" selected>{{ $categories->categoryname }}</option>
                                        @else
                                            <option value="{{ $categories->categoryid }}">{{ $categories->categoryname }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image" style="color: #1b5e20;">Image</label>
                                <input type="hidden" value="{{$products->productimage}}" name="oldimage">
                                <input type="file" name="productimage" class="form-control" id="image"
                                    style="background-color: #ffffff; border: 1px solid #aed581;">
                            </div>
                            <div class="form-group">
                                <label for="price" style="color: #1b5e20;">Price</label>
                                <input type="number" name="productprice" class="form-control" id="price"
                                    value="{{$products->productprice}}" placeholder="Price" 
                                    style="background-color: #ffffff; border: 1px solid #aed581;">
                            </div>
                            <div class="form-group">
                                <label for="stock" style="color: #1b5e20;">Product Stock</label>
                                <input type="number" name="productstock" class="form-control" id="stock"
                                    value="{{$products->productstock}}" placeholder="Stock" 
                                    style="background-color: #ffffff; border: 1px solid #aed581;">
                            </div>
                            <div class="form-group">
                                <label for="quantity" style="color: #1b5e20;">Quantity</label>
                                <input type="text" name="quantity" class="form-control" id="quantity"
                                    value="{{$products->quantity}}" placeholder="Quantity" 
                                    style="background-color: #ffffff; border: 1px solid #aed581;">
                            </div>
                            <div>
                                <center><button type="submit" class="btn btn-success" style="background-color: #4caf50; border-color: #4caf50; color: #ffffff;">Submit</button>
                                <button type="button" class="btn btn-danger" style="background-color: #e57373; border-color: #e57373; color: #ffffff;">Cancel</button></center>
                            </div>
                        </form>
                        @if(session('success'))
                            <script>
                                alert('{{ session('success') }}');
                            </script>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
