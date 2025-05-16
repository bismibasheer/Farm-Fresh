@extends('Layouts.CustomerMaster')

@section('content')
    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    @foreach($categories as $index => $category)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                              
                                    <img src="/Uploads/{{$category->categoryimage}}" class="img-fluid" alt="{{$category->categoryname}}">
                                    <div class="mask-icon">
                                        <a class="cart" href="{{route('customerviewproduct',$category->categoryid)}}">{{$category->categoryname}}</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>{{$category->categoryname}}</h4>
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
    .box-img-hover {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 200px; /* Set a consistent height for the container */
    background-color: #f8f9fa; /* Optional: subtle background for contrast */
    border-radius: 8px;
    overflow: hidden; /* Ensure the image doesn't overflow */
    position: relative; /* For better control of internal elements */
}

.box-img-hover img {
    max-width: 100%; /* Ensure image scales down proportionally */
    max-height: 100%; /* Ensure image fits within the container */
    object-fit: cover; /* Maintain aspect ratio while covering the container */
    display: block;
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
