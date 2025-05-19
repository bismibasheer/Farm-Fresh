<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Register/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('Register/css/style.css')}}">
    <!-- Ajax to get subject related to course -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
     $(document).ready(function() {
       
     
            // Fetch subjects based on selected course
            $('#district').change(function()   //Course dropdownlist id="course"
            {
                
                var districtid = $(this).val(); //To get value of course
               
                if (districtid) 
                {
                  
                    $.ajax({
                        url: '/getLocations/' + districtid, //set routing
                        type: 'GET',
                        success: function(data) 
                        {
                           $('#location').empty(); 
                            $('#location').append('<option value="">Select a location</option>');
                            $.each(data, function(key, value) {
                                $('#location').append('<option value="' + value.locationid + '">' + value.locationname + '</option>');
                            });
                        }
                    });
                } 
                else
                 {
                    $('#location').empty();
                    $('#location').append('<option value="">Select a location</option>');
                }
            });
          });
       
    </script>
<!-- End -->
</head>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img" style="    width: 45%;">
                    <img src="{{asset('Register/images/signup-img.jpg')}}" width="600" height="1500" alt="">
                </div>
                <div class="signup-form" style="padding-top:50px">
                    <form  action="{{route('customerinsert')}}" enctype="multipart/form-data" method="POST">
                      @csrf
                       <center> <h2> Registration Form</h2></center>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="customername"  required/>
                                @error('customername')
                                <span class="error-message">{{ $message }}</span>
                            @enderror

                            </div>
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" name="address" required/>
                                @error('address')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail ID:</label>
                            <input type="email" name="email"  required/>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district">District :</label>
                                <div class="form-select">
                                    <select name="districtid" id="district" required>
                                         <option value="">---Select---</option>
                                         @foreach($districts as $district)
                                         <option value="{{$district->districtid}}">{{$district->districtname}}</option>
                                         @endforeach
                                       
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Location :</label>
                                <div class="form-select">
                                    <select name="locationid" id="location" required>
                                    <option value="">---Select---</option>
                                         @foreach($locations as $location)
                                         <option value="{{$location->locationid}}">{{$location->locationname}}</option>
                                         @endforeach
                                       
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" name="username" >
                            @error('username')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password">
                            @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact :</label>
                            <input type="text" name="contact" >
                            @error('contact')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                            </div>
                           
                                </select>
                                <!-- <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span> -->
                                <div class="form-submit">
                            <!-- <input type="submit" value="Reset All" class="submit" name="reset" id="reset" /> -->
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                            </div>
                        </div>
                    </form>
                    @if(session('success'))
   
    <script>
       alert('{{ session('success') }}');
       
        window.location="{{route('login_page')}}";

        </script>
        @endif
    </div>
                </div>
            </div>
        </div>
</div>
 <!-- JS -->
    <script src="{{asset('Register/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Register/js/main.js')}}"></script>
   




</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>