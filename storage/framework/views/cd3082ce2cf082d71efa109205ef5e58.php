
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Payment Details</h4>
                    </center>

                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead>
                                </tr>
                                <tr>
                                    <th>Sl.no</th>
                                    <th>Customer Name</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                    <th>Payment Date</th>
                                   
                                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index + 1); ?></td>
                                            <td><?php echo e($b->booking->customer->customername); ?></td>
                                            <td><?php echo e($b->booking->product->productname); ?></td>
                                            <td><?php echo e($b->booking->quantity); ?></td>
                                            <td><?php echo e($b->booking->totalamount); ?></td>
                                            <td><?php echo e($b->paymentdate); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php if(session('success')): ?>
                            <script>
                                alert('<?php echo e(session('success')); ?>');
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<style>
  /* Global Background */
  body {
    background-color: #e8f5e9;
    /* Light green background */
    color: #1b5e20;
    /* Dark green text */
  }

  /* Card Header */
  .card-header {
    background: linear-gradient(135deg, #4caf50, #66bb6a);
    /* Gradient green */
    color: white;
    /* White text for contrast */
    font-weight: bold;
    /* Bold header text */
  }

  /* Table Styles */
  .table {
    border: 1px solid #4caf50;
    /* Green border */
  }

  .table th {
    background-color: #66bb6a;
    /* Green header */
    color: white;
    /* White text for contrast */
    text-align: center;
    font-weight: bold;
  }

  .table-hover tbody tr:hover {
    background-color: #c8e6c9;
    /* Light green hover */
  }

  .table-striped tbody tr:nth-child(odd) {
    background-color: #f1f8e9;
    /* Very light green for odd rows */
  }

  /* Button Styles */
  button,
  .btn {
    border-radius: 20px;
    /* Rounded corners */
    padding: 8px 20px;
    /* Adjust padding */
    font-size: 14px;
    /* Slightly larger text */
    font-weight: bold;
    /* Bold text */
    border: none;
    /* No border */
    transition: background-color 0.3s ease, transform 0.2s ease;
    /* Smooth hover */
    color: white;
    /* White text */
    cursor: pointer;
    /* Pointer cursor */
  }

  /* Edit Button */
  .btn-success {
    background-color: #4caf50;
    /* Vibrant green */
  }

  .btn-success:hover {
    background-color: #388e3c;
    /* Darker green on hover */
    transform: scale(1.09);
    /* Slight zoom */
  }

  /* Delete Button */
  .btn-danger {
    background-color: #ef5350;
    /* Soft red */
  }

  .btn-danger:hover {
    background-color: #d32f2f;
    /* Darker red */
    transform: scale(1.05);
    /* Slight zoom */
  }
</style>
<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/paymentdetailsview.blade.php ENDPATH**/ ?>