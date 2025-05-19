

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <center>
                        <!-- Dynamically show the current year in the title -->
                        <h4 class="card-title">Payment Details - Monthly Total Amounts (<?php echo e(date('Y')); ?>)</h4>
                    </center>

                    <!-- Chart Display Section -->
                    <div class="table-responsive">
                        <!-- Reduced the size of the chart by adjusting the width and height attributes -->
                        <canvas id="paymentChart" width="50" height="25"></canvas>
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
    document.addEventListener('DOMContentLoaded', function() {
        const months = <?php echo json_encode($months, 15, 512) ?>; // Months passed from controller
        const totalAmounts = <?php echo json_encode($totalAmounts, 15, 512) ?>; // Total amounts passed from controller
        const currentYear = new Date().getFullYear(); // Get the current year in JavaScript

        if (months.length > 0 && totalAmounts.length > 0) {
            const ctx = document.getElementById('paymentChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: months, // Set months as labels
                    datasets: [{
                        label: `Total Payment Amounts (${currentYear})`, // Dynamically include the current year
                        data: totalAmounts, // Corresponding total amounts
                        backgroundColor: 'rgba(102, 187, 106, 0.5)', // Bar fill color
                        borderColor: 'rgba(56, 100, 60, 1)', // Bar border color
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            ticks: {
                                autoSkip: false,
                                maxRotation: 45,
                                minRotation: 45
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toFixed(2); // Format values as currency
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        }
                    }
                }
            });
        } else {
            console.error('No data available for the chart.');
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/Barchart.blade.php ENDPATH**/ ?>