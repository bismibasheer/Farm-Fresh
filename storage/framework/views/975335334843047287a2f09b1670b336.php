
<?php $__env->startSection('content'); ?>
<div class="main-panel" style="background-color: #F0F4C3; min-height: 100vh; padding: 20px;">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px; padding: 30px;">
                        <div class="row" style="float: right;">
                            <a href="<?php echo e(route('viewlocation')); ?>">
                                <button class="btn" style="background-color: #AED581; color: white; padding: 10px 20px; border: none; border-radius: 5px;">View Location</button>
                            </a>
                        </div>
                        <center>
                            <h4 class="card-title" style="color: #2E7D32; font-weight: bold; margin-bottom: 20px;">LOCATION NAME</h4>
                        </center>
                        <form action="<?php echo e(route('locationinsert')); ?>" method="POST" id="location" style="background-color: #F9FBE7; padding: 20px; border-radius: 10px;">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="exampleInputdistrictname" style="color: #2E7D32; font-weight: bold;">Select District</label>
                                <select name="districtid" class="form-control" required style="border: 2px solid #AED581; border-radius: 5px;">
                                    <option value="">--select District--</option>
                                    <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($district->districtid); ?>">
                                        <?php echo e($district->districtname); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputlocationname" style="color: #2E7D32; font-weight: bold;">Location Name</label>
                                <input type="text" name="location" class="form-control" id="exampleInputlocationname" placeholder="Location name" style="border: 2px solid #AED581; border-radius: 5px;" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn" style="background-color: #2E7D32; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Submit</button>
                                <button type="button" class="btn" id="cancelButton" style="background-color: #EF9A9A; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Cancel</button>
                            </div>
                            <?php if(session('success')): ?>
                            <script>
                                alert('<?php echo e(session('success')); ?>');
                            </script>
                            <?php endif; ?>
                        </form>
                        <script>
                            document.getElementById('cancelButton').addEventListener('click', function() {
                                document.getElementById('location').reset();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<style>
  body {
    background-color: #F0F4C3; /* Light lime green */
    font-family: 'Arial', sans-serif;
}

.card {
    border: none;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.btn:hover {
    background-color: #558B2F; /* Slightly darker green for hover */
    color: white;
    transform: scale(1.05);
    transition: all 0.3s ease-in-out;
}

.form-control:focus {
    border-color: #81C784; /* Soft green focus */
    box-shadow: 0 0 5px rgba(129, 199, 132, 0.5);
}
</style>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/location.blade.php ENDPATH**/ ?>