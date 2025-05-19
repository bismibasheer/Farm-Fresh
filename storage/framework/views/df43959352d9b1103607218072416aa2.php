

<?php $__env->startSection('content'); ?>
    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                              
                                    <img src="/Uploads/<?php echo e($category->categoryimage); ?>" class="img-fluid" alt="<?php echo e($category->categoryname); ?>">
                                    <div class="mask-icon">
                                        <a class="cart" href="<?php echo e(route('customerviewproduct',$category->categoryid)); ?>"><?php echo e($category->categoryname); ?></a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><?php echo e($category->categoryname); ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
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

<?php echo $__env->make('Layouts.CustomerMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Customer/customerviewcategory.blade.php ENDPATH**/ ?>