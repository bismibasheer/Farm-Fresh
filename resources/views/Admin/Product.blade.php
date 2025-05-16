@extends('Layouts.AdminMaster')
@section('content')
<div class="main-panel" style="background-color:#F0F4C3; min-height: 100vh; padding: 20px;">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); border-radius: 80px;">
                <div class="card-header" style="background-color: #FFFFFF; border-radius: 10px 10px 0 0;">
                <center><h4 class="card-title" style="color: #2E7D32; font-weight: bold; margin-bottom: 20px;">PRODUCT</h4></center>
</div>

                    <div class="card-body" style="background-color: #FFFDD0; padding: 30px; border-radius: 0 0 10px 10px;">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('viewproduct') }}">
                            <button class="btn" style="background-color: #AED581; color: white; padding: 10px 20px; border: none; border-radius: 5px;">View Product</button>
                            </a>
                        </div>
                        <form action="{{ route('productinsert') }}" enctype="multipart/form-data" method="POST" id="product">
                            @csrf
                            <div class="form-group">
                                <label for="productname" style="color: #2E7D32; font-weight: bold;">Product Name</label>
                                <input type="text" name="productname" class="form-control" id="productname" placeholder="Product name" style="border: 2px solid #AED581; border-radius: 5px;" required>
                            </div>
                            <div class="form-group">
                                <label for="categoryname" style="color: #2E7D32; font-weight: bold;">Select Category</label>
                                <select name="categoryid" class="form-control" style="border: 2px solid #AED581; border-radius: 5px;" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $category) 
                                    <option value="{{ $category->categoryid }}">{{ $category->categoryname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image" style="color: #2E7D32; font-weight: bold;">Image</label>
                                <input type="file" name="productimage" class="form-control" id="image" onchange="previewImage(event)" style="border: 2px solid #A8E6CF; border-radius: 5px;">
                                <img id="imagePreview" style="margin-top: 10px; max-height: 150px; display: none; border: 2px solid #AED581; border-radius: 5px;">
                            </div>
                            <div class="form-group">
                                <label for="price" style="color: #2E7D32; font-weight: bold;">Price</label>
                                <input type="number" name="productprice" class="form-control" id="price" placeholder="Price" style="border: 2px solid #AED581; border-radius: 5px;" required>
                            </div>
                            <div class="form-group">
                                <label for="stock" style="color: #2E7D32; font-weight: bold;">Product Stock</label>
                                <input type="number" name="productstock" class="form-control" id="stock" placeholder="Stock" style="border: 2px solid #AED581; border-radius: 5px;" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity" style="color: #2E7D32; font-weight: bold;">Quantity</label>
                                <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity" style="border: 2px solid #AED581; border-radius: 5px;" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn" style="background-color: #A8E6CF; color: #2E7D32; border: none; padding: 10px 20px; border-radius: 5px;">Submit</button>
                                <button type="button" class="btn" id="cancelButton" style="background-color: #EF9A9A; color: #8D6E63; border: none; padding: 10px 20px; border-radius: 5px;">Cancel</button>
                            </div>
                            @if(session('success'))
                            <script>
                                alert('{{ session('success') }}');
                            </script>
                            @endif
                        </form>
                        <script>
                            document.getElementById('cancelButton').addEventListener('click', function() {
                                document.getElementById('product').reset();
                            });

                            function previewImage(event) {
                                const preview = document.getElementById('imagePreview');
                                preview.src = URL.createObjectURL(event.target.files[0]);
                                preview.style.display = 'block';
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
  body {
    background-color: #FFFDD0; /* Cream background */
    font-family: 'Arial', sans-serif;
}

.card {
    border: none;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.btn:hover {
    background-color: #81C784; /* Slightly darker green for hover */
    color: #FFFFFF;
    transform: scale(1.05);
}

.form-control:focus {
    border-color: #81C784; /* Light green focus */
    box-shadow: 0 0 5px rgba(129, 199, 132, 0.5);
}

</style>