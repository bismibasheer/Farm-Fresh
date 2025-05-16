@extends('Layouts.AdminMaster')

@section('content')

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        // Fetch products based on selected category
        $('#categoryid').change(function () {
            var category = $(this).val();
            if (category) {
                $.ajax({
                    url: '/getproducts/' + category,
                    type: 'GET',
                    success: function (data) {
                        $('#productid').empty();
                        let i = 1;
                        $.each(data, function (key, value) {
                            $('#productid').append(
                                '<tr>' +
                                '<td>' + i++ + '</td>' +
                                '<td>' + value.productname + '</td>' +
                                '<td><img src="/Uploads/' + value.productimage + '" alt="product image" style="height:50px; width:auto;"></td>' +
                                '<td>' + value.productprice + '</td>' +
                                '<td>' + value.productstock + '</td>' +
                                '<td>' + value.quantity + '</td>' +
                                '<td>' +
                                '<form action="/deleteproduct/' + value.productid + '" method="POST" onsubmit="return confirm(\'Are you sure you want to delete this product?\')">' +
                                '@csrf' +
                                '@method("DELETE")' +
                                '<button type="submit" class="btn btn-danger">Delete</button>' +
                                '</form>' +
                                '</td>' +
                                '<td>' +
                                '<a href="/editproduct/' + value.productid + '" class="btn btn-success">Edit</a>' +
                                '</td>' +
                                '</tr>'
                            );
                        });
                    }
                });
            } else {
                $('#productid').empty();
                $('#productid').append('<tr><td colspan="8" class="text-center">No data available</td></tr>');
            }
        });
    });
</script>

<!-- Page Content -->
<div class="container-fluid py-4">
    <div class="content-wrapper">
        <div class="row">
            <!-- Category Selection Section -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-6">
                                <label for="categoryid" class="text-success font-weight-bold">Select Category</label>
                                <div class="mb-3">
                                    <select name="categoryid" class="form-control" id="categoryid" style="height:40px;">
                                        <option value="">Select a Category</option>
                                        @foreach($categorys as $category)
                                            <option value="{{ $category->categoryid }}">{{ $category->categoryname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product List Table -->
                        <center>
                            <h4 class="card-title" style="color: #388e3c;">View Products</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="bg-success text-white">
                                    <tr>
                                        <th>Sl.no</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Price /Kg</th>
                                        <th>Product Stock</th>
                                        <th>Quantity</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="productid">
                                    @foreach($products as $index => $product)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $product->productname }}</td>
                                            <td>
                                                <img src="/Uploads/{{ $product->productimage }}" alt="" style="height:50px; width:auto;">
                                            </td>
                                            <td>{{ $product->productprice }}</td>
                                            <td>{{ $product->productstock }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>
                                                <form action="{{ route('deleteproduct', $product->productid) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('editproduct', $product->productid) }}" class="btn btn-success btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
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
