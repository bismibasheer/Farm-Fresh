

<?php $__env->startSection('content'); ?>
    <!-- Filter Form -->
    <div class="container mt-4">
        <h2 class="text-center mb-4" style="color: #4caf50;">Booking Details</h2>

        <!-- Display error message if any -->
        <?php if(session('error')): ?>
            <div class="alert alert-danger text-center">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form method="GET" action="<?php echo e(route('ReportDate')); ?>" class="row g-3 justify-content-center mb-4">
            <div class="col-md-4">
                <input 
                    type="date" 
                    name="from_date" 
                    id="from_date" 
                    class="form-control" 
                    value="<?php echo e(old('from_date', $from_date)); ?>" 
                    placeholder="From Date"
                    style="border: 1px solid #4caf50; color: #1b5e20;">
            </div>
            <div class="col-md-4">
                <input 
                    type="date" 
                    name="to_date" 
                    id="to_date" 
                    class="form-control" 
                    value="<?php echo e(old('to_date', $to_date)); ?>" 
                    placeholder="To Date"
                    style="border: 1px solid #4caf50; color: #1b5e20;" 
                    <?php echo e($from_date ? '' : 'disabled'); ?>>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn" style="background-color: #4caf50; color: white;">
                    Filter
                </button>
            </div>
        </form>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const fromDate = document.getElementById('from_date');
        const toDate = document.getElementById('to_date');

        // Set the max date for to_date to today when the page is loaded
        const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
        toDate.setAttribute('max', today);

        // Enable "to_date" when "from_date" is selected
        fromDate.addEventListener('change', function() {
            toDate.disabled = false; // Enable the "To Date" field
            toDate.setAttribute('min', fromDate.value); // Set the minimum date for "To Date" to be the "From Date"
        });

        // Add an event listener to "to_date" to validate the selected date
        toDate.addEventListener('change', function() {
            const fromDateValue = new Date(fromDate.value);
            const toDateValue = new Date(toDate.value);

            // If "to_date" is earlier than "from_date", reset "to_date"
            if (toDateValue < fromDateValue) {
                alert("To Date cannot be earlier than From Date");
                toDate.value = ''; // Reset the "To Date"
            }
        });

        // Disable "To Date" if "From Date" is cleared
        fromDate.addEventListener('input', function() {
            if (!fromDate.value) {
                toDate.disabled = true; // Disable the "To Date" field
                toDate.value = ''; // Clear the "To Date" field
            }
        });
    });
    </script>

    <!-- Table -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="text-center" style="background-color: #4caf50; color: white;">
                    <tr>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                        <th>Booking Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($booking->customer->customername); ?></td>
                            <td><?php echo e($booking->product->productname); ?></td>
                            <td class="text-center"><?php echo e($booking->quantity); ?></td>
                            <td class="text-end" style="color: #1b5e20;">
                                $<?php echo e(number_format($booking->totalamount, 2)); ?>

                            </td>
                            <td class="text-center"><?php echo e(\Carbon\Carbon::parse($booking->requestdate)->format('d M Y')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php if($bookings->isEmpty()): ?>
            <p class="text-center text-muted">No bookings found for the selected date range.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<!-- Additional Styling -->
<style>
    h2 {
        color: #4caf50;
        font-weight: bold;
    }

    /* Input Fields */
    input[type="date"] {
        border: 1px solid #4caf50;
        color: #1b5e20;
        padding: 8px;
        border-radius: 5px;
    }

    input[type="date"]:focus {
        outline: none;
        box-shadow: 0 0 5px #4caf50;
    }

    /* Button Styles */
    .btn {
        background-color: #4caf50;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 20px;
        border: none;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: #388e3c;
        transform: scale(1.05);
    }

    /* Table Styling */
    table {
        font-size: 14px;
    }

    table th {
        background-color: #4caf50;
        color: white;
        text-align: center;
        font-weight: bold;
    }

    table tbody tr:hover {
        background-color: #e8f5e9;
    }

    table td {
        vertical-align: middle;
    }

    /* Empty State Message */
    .text-muted {
        color: #9e9e9e;
    }
</style>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/Reportdate.blade.php ENDPATH**/ ?>