
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <center><h4 class="card-title" style="color: #388e3c;">View Request Details</h4></center>

          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Sl.no</th>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Request Date</th>
                  <th>Required Date</th>
                  <th style="text-align: center;">Actions</th> <!-- Center aligned header -->
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($index + 1); ?></td>
                  <td><?php echo e($booking->customer->customername); ?></td>
                  <td><?php echo e($booking->product->productname); ?></td>
                  <td><img src="/Uploads/<?php echo e($booking->product->productimage); ?>" alt="" style="height:50px; width:auto;"></td>
                  <td><?php echo e($booking->quantity); ?></td>
                  <td><?php echo e($booking->totalamount); ?></td>
                  <td><?php echo e($booking->requestdate); ?></td>
                  <td><?php echo e($booking->requireddate); ?></td>
                  <td style="text-align: center;"> <!-- Center aligned button actions -->
                    <a href="<?php echo e(route('Acceptrequest', ['requestid' => $booking->requestid])); ?>">
                      <button class="btn btn-accept">Accept</button>
                    </a>
                    <a href="<?php echo e(route('Rejectrequest', ['requestid' => $booking->requestid])); ?>">
                      <button class="btn btn-reject">Reject</button>
                    </a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
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
    background-color: #f7f7f7; /* Light gray for a more neutral backdrop */
    color: #388e3c; /* Dark green text */
    font-family: 'Arial', sans-serif; /* Clean, modern font */
  }

  /* Card Styling */
  .card {
    border: 1px solid #a5d6a7; /* Soft green border */
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Card Title (Subheading) */
  .card-title {
    font-size: 24px;
    font-weight: bold;
    color: #388e3c; /* Dark green title */
    text-transform: uppercase;
    letter-spacing: 2px;
  }

  /* Table Styling */
  .table {
    border: 1px solid #a5d6a7; /* Green border for table */
  }

  .table th {
    background-color: #66bb6a; /* Light green header */
    color: white;
    font-weight: bold;
    text-align: center; /* Center align all headers */
  }

  .table-hover tbody tr:hover {
    background-color: #e8f5e9; /* Very light green on hover */
  }

  .table-striped tbody tr:nth-child(odd) {
    background-color: #f1f8e9; /* Light green for odd rows */
  }

  /* Button Styles */
  .btn {
    font-size: 14px;
    font-weight: bold;
    border-radius: 25px;
    padding: 12px 25px;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
    cursor: pointer;
    border: none;
  }

  /* Accept Button */
  .btn-accept {
    background-color: #4caf50; /* Vibrant green */
    color: white;
  }

  .btn-accept:hover {
    background-color: #388e3c; /* Darker green on hover */
    transform: scale(1.05);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  /* Reject Button */
  .btn-reject {
    background-color: #ef5350; /* Soft red background */
    color: white;
  }

  .btn-reject:hover {
    background-color: #d32f2f; /* Darker red on hover */
    transform: scale(1.05);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }
</style>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/bookingdetailsview.blade.php ENDPATH**/ ?>