 
<?php $__env->startSection('content'); ?>

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
                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img src="/Uploads/<?php echo e($booking->product->productimage); ?>" class="img-fluid"
                                                alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            <?php echo e($booking->product->productname); ?>

                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo e($booking->product->productprice); ?></p>
                                    </td>
                                    <td><?php echo e($booking->quantity); ?></td>
                                    <td class="total-pr">
                                        <p><?php echo e($booking->totalamount); ?></p>
                                    </td>
                                    <td class="status-pr">
                                        <p><?php echo e($booking->status); ?></p>
                                    </td>
                                    <td class="action-pr">
                                        <!-- Show "Pay Now" button if status is Accepted -->
                                        <?php if($booking->status == 'Accepted'): ?>
                                            <a href="<?php echo e(route('payment', ['requestid' => $booking->requestid])); ?>"
                                                class="btn btn-primary">Pay Now</a>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.CustomerMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Customer/confirmationview.blade.php ENDPATH**/ ?>