@extends('Layouts.CustomerMaster') 
    @section('content')

          
    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    @foreach($products as $index => $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="/Uploads/{{$product->productimage}}" class="img-fluid" alt="{{$product->productname}}">
                                    <div class="mask-icon">
                                        <a class="cart" href="{{route('productsingleview',$product->productid)}}">{{$product->productname}}</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>{{$product->productname}}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
/* Ensure uniform height for product cards */
.products-single {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Makes all cards equal height */
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.products-single:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Consistent image size */
.box-img-hover {
    width: 100%;
    height: 200px; /* Set a fixed height for images */
    overflow: hidden;
    position: relative;
}

.box-img-hover img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures image fits within the box */
}

/* Consistent text alignment */
.why-text {
    padding: 15px;
    text-align: center;
    flex-grow: 1; /* Pushes the content to occupy remaining space */
}

.product-title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin: 0;
    line-height: 1.5;
}

/* Ensure consistent spacing */
.mask-icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease;
}

.box-img-hover:hover .mask-icon {
    opacity: 1;
}

.mask-icon a {
    color: #fff;
    font-size: 14px;
    padding: 10px 15px;
    background: #007bff;
    border-radius: 5px;
    text-decoration: none;
}

.mask-icon a:hover {
    background: #0056b3;
}
@media (max-width: 768px) {
    .box-img-hover {
        height: 150px; /* Adjust image size for mobile */
    }

    .product-title {
        font-size: 16px;
    }
}



</style>

