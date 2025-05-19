

<?php $__env->startSection('content'); ?>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <!-- Form to Edit Profile -->
                        <form action="<?php echo e(route('updateprofile', $customers->customerid)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <!-- Customer Name -->
                            <div class="mb-3">
                                <label for="customername" class="form-label">Customer Name</label>
                                <input type="text" name="customername" id="customername" class="form-control" value="<?php echo e($customers->customername); ?>" required>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="<?php echo e($customers->address); ?>" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo e($customers->email); ?>" required>
                            </div>

                            <!-- Location Dropdown -->
                            <div class="mb-3">
    <label for="locationid" class="form-label">Location</label>
    <select name="locationid" id="locationid" class="form-control" required>
        <option value="" disabled>Select a location</option>
        <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($loc->locationid); ?>"
                <?php if($customers->locationid == $loc->locationid): ?> selected <?php endif; ?>>
                <?php echo e($loc->locationname); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>


                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo e($customers->username); ?>" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" id="password" class="form-control" value="<?php echo e($customers->password); ?>" required>
                            </div>

                            <!-- Contact -->
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" name="contact" id="contact" class="form-control" value="<?php echo e($customers->contact); ?>" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="text-center mt-3">
                    <a href="<?php echo e(route('Viewprofile')); ?>" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Back to Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.CustomerMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Customer/Editviewprofile.blade.php ENDPATH**/ ?>