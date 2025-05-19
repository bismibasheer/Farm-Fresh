<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('Register/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo e(asset('Register/css/style.css')); ?>">
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
                    <img src="<?php echo e(asset('Register/images/signup-img.jpg')); ?>" width="600" height="1500" alt="">
                </div>
                <div class="signup-form" style="padding-top:50px">
                    <form  action="<?php echo e(route('customerinsert')); ?>" enctype="multipart/form-data" method="POST">
                      <?php echo csrf_field(); ?>
                       <center> <h2> Registration Form</h2></center>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="customername"  required/>
                                <?php $__errorArgs = ['customername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" name="address" required/>
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail ID:</label>
                            <input type="email" name="email"  required/>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district">District :</label>
                                <div class="form-select">
                                    <select name="districtid" id="district" required>
                                         <option value="">---Select---</option>
                                         <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($district->districtid); ?>"><?php echo e($district->districtname); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Location :</label>
                                <div class="form-select">
                                    <select name="locationid" id="location" required>
                                    <option value="">---Select---</option>
                                         <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($location->locationid); ?>"><?php echo e($location->locationname); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" name="username" >
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact :</label>
                            <input type="text" name="contact" >
                            <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                    <?php if(session('success')): ?>
   
    <script>
       alert('<?php echo e(session('success')); ?>');
       
        window.location="<?php echo e(route('login_page')); ?>";

        </script>
        <?php endif; ?>
    </div>
                </div>
            </div>
        </div>
</div>
 <!-- JS -->
    <script src="<?php echo e(asset('Register/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Register/js/main.js')); ?>"></script>
   




</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Guest/Register.blade.php ENDPATH**/ ?>