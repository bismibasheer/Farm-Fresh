@extends('Layouts.CustomerMaster') 
@section('content')

<!-- Start Cart -->
<div class="cart-box-main" style="height: 300px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $index => $booking)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img src="/Uploads/{{$booking->product->productimage}}" class="img-fluid"
                                                alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            {{$booking->product->productname}}
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{$booking->product->productprice}}</p>
                                    </td>
                                    <td>{{$booking->quantity}}</td>
                                    <td class="total-pr">
                                        <p>{{$booking->totalamount}}</p>
                                    </td>
                                    <td class="status-pr">
                                        <p>{{$booking->status}}</p>
                                    </td>
                                    <td class="action-pr">
                                        <!-- Show "Pay Now" button if status is Accepted -->
                                        @if($booking->status == 'Accepted')
                                            <a href="{{route('payment', ['requestid' => $booking->requestid])}}"
                                                class="btn btn-primary">Pay Now</a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        <style>
            .action-pr {
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; /* Vertically align */
    height: 100%; /* Match the parent container's height */
}

        </style>
        @endsection