



<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Payment Details - Monthly Total Amounts</h4>
                    </center>

                    <div class="table-responsive">
                        <!-- Canvas for the bar chart -->
                        <canvas id="paymentChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Get the months and total amounts data from the controller
    var months = <?php echo json_encode($months, 15, 512) ?>;         // Array of months
    var totalAmounts = <?php echo json_encode($totalAmounts, 15, 512) ?>; // Array of total amounts

    // Create the bar chart
    var ctx = document.getElementById('paymentChart').getContext('2d');
    var paymentChart = new Chart(ctx, {
        type: 'bar', // Type of chart (bar chart)
        data: {
            labels: months, // Months on the X-axis
            datasets: [{
                label: 'Total Payment Amounts', // Label for the dataset
                data: totalAmounts, // Data for each bar (total amounts for each month)
                backgroundColor: '#66bb6a', // Green color for the bars
                borderColor: '#388e3c', // Darker green for the bar borders
                borderWidth: 1 // Border width for the bars
            }]
        },
        options: {
            responsive: true, // Make the chart responsive
            scales: {
                x: {
                    beginAtZero: true // Ensure X-axis starts from zero
                },
                y: {
                    beginAtZero: true // Ensure Y-axis starts from zero
                }
            },
            plugins: {
                legend: {
                    display: true // Show legend
                }
            }
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/barchart.blade.php ENDPATH**/ ?>