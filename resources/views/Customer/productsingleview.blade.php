@extends('Layouts.CustomerMaster')
@section('content')

<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Product Detail</h2>
                
            </div>
        </div>
    </div>
</div>

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <form action="{{ route('sentrequest') }}" method="POST" enctype="multipart/form-data" class="w-100">
                @csrf
                @foreach($products as $index => $product)
                    <div class="row mb-4">
                        <!-- Product Image Carousel -->
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div id="carousel-example-{{ $index }}" class="single-product-slider carousel slide"
                                data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{asset('Uploads/'. $product->productimage) }}" alt="Product Image"
                                            class="d-block w-100">
                                    </div>
                                </div>
                               
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-{{ $index }}" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="Uploads/{{ $product->productimage }}"
                                            alt="">
                                    </li>
                                    <li data-target="#carousel-example-{{ $index }}" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="">
                                    </li>
                                    <li data-target="#carousel-example-{{ $index }}" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="">
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- Product Details -->
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2>{{ $product->productname }}</h2>
                                <h5><del>$</del>{{ $product->productprice }}</h5>
                                <p class="available-stock"><span> <a href="#"></a></span></p>

                                <!-- Quantity Box -->
                                <div class="form-group quantity-box">
                                    <label class="control-label">Quantity</label>
                                    <input class="form-control" value="0" min="0" max="20" type="number" id="quantity" name="quantity"
                                        onchange="gettotal()">
                                </div>

                                <!-- Hidden Inputs for Product Details -->
                                <input type="hidden" name="productid" value="{{ $product->productid }}">
                                <input type="hidden" name="productprice" id="productprice"
                                    value="{{ $product->productprice }}" readonly>

                                <!-- Total Amount -->
                                <div class="form-group quantity-box">
                                    <label class="control-label">Total Amount</label>
                                    <input class="form-control" type="text" id="totalamount" name="totalamount" readonly>
                                </div>

                                <!-- Required Date -->
                               <!-- Required Date -->
<div class="form-group quantity-box">
    <label class="control-label">Required Date</label>
    <input class="form-control" type="date" name="requireddate" min="{{ \Carbon\Carbon::today()->toDateString() }}">
</div>


                                <!-- Request Now Button -->
                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <button type="submit" class="btn hvr-hover">Request Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </form>


            @if(session('success'))
                  <script>
                    alert('{{session('success')}}');
                    </script>
                    @endif


        </div>
    </div>
</div>

<script>
    function gettotal() {
        var productprice = parseInt(document.getElementById("productprice").value);
        var quantity = parseInt(document.getElementById("quantity").value);
        var totalamount = productprice * quantity;
        document.getElementById("totalamount").value = totalamount;
    }
</script>

@endsection
<style>

.action-pr {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 100%; /* Match table row height */
}
.action-pr .btn {
    white-space: nowrap; /* Prevent the button from breaking to the next line */
}

</style>