@extends('Layouts.CustomerMaster')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin-top: 20px;
            background-color: #f9f9f9;
        }
        .card-style1 {
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 15px;
        }
        .profile-img {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 50%;
            border: 5px solid #ceaa4d;
        }
        .bg-secondary {
            background-color: #15395A !important;
        }
        .text-primary {
            color: #ceaa4d !important;
        }
        .social-icon-style1 a {
            color: #15395A;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .social-icon-style1 a:hover {
            color: #ceaa4d;
        }
        .list-unstyled li span {
            font-weight: 600;
        }
    </style>
</head>
<body>

<section class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($customer as $customers)
            <div class="col-lg-8">
                <div class="card card-style1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <!-- Profile Image -->
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile Picture" class="profile-img">
                            </div>
                            <!-- Profile Details -->
                            <div class="col-md-8">
                                <div class="bg-secondary py-3 px-4 rounded mb-4">
                                    <h3 class="text-white mb-0">{{$customers->customername}}</h3>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><span class="text-secondary">Address:</span> {{$customers->address}}</li>
                                    <li class="mb-2"><span class="text-secondary">Email:</span> {{$customers->email}}</li>
                                    <li class="mb-2">
    <span class="text-secondary">Location:</span> 
    {{ optional($customers->location)->locationname ?? 'N/A' }}
</li>

                                    <li class="mb-2"><span class="text-secondary">Username:</span> {{$customers->username}}</li>
                                    <li class="mb-2"><span class="text-secondary">Password:</span> {{$customers->password}}</li>
                                    <li><span class="text-secondary">Contact:</span> {{$customers->contact}}</li>
                                </ul>

                                <!-- Edit Button -->
                                <div class="mt-4">
                                    <a href=" {{ route('editprofile', ['customerid' => $customers->customerid]) }}"> 
                                      <i class="fas fa-edit me-1"></i> Edit Profile
                                    </a>
                                </div>

                                <!-- Social Icons -->
                                <ul class="social-icon-style1 list-inline mt-4">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
