

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Monthly Payment Bar Chart Section -->
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Monthly Total Payment Amounts</h4>

                        <!-- Chart Display Section -->
                        <div class="table-responsive">
                            <canvas id="paymentChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Booking Pie Chart Section -->
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color:white;">
                    <div class="card-body">
                        <h2 class="card-title text-center">Product Booking Pie Chart</h2>

                        <!-- Chart Display Section -->
                        <div class="table-responsive">
                            <canvas id="pieChart" width="200" height="200"></canvas>
                        </div>

                        <!-- Custom Legend -->
                        <div id="chartLegend" class="text-center mt-4">
                            <!-- Custom legend will be populated here -->
                        </div>
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
    // Bar Chart for Monthly Payment Amounts
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


    // Pie Chart for Product Booking Count
    const bookingData = <?php echo json_encode($bookingcount, 15, 512) ?>;

    const productname = bookingData.map(item => item.productname);
    const bookingcount = bookingData.map(item => item.count);

    // Generate dynamic colors for each segment
    const colors = [];
    for (let i = 0; i < bookingData.length; i++) {
        colors.push(`hsl(${Math.random() * 360}, 70%, 60%)`);
    }

    const ctxPie = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: productname,
            datasets: [{
                data: bookingcount,
                backgroundColor: colors,
                borderColor: '#fff',
                borderWidth: 1,
                hoverOffset: 8,
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false // Hide default legend
                }
            },
            maintainAspectRatio: false
        }
    });

    // Custom Legend for Pie Chart
    const legendContainer = document.getElementById('chartLegend');
    productname.forEach((product, index) => {
        const legendItem = document.createElement('div');
        legendItem.classList.add('chart-legend-item', 'd-flex', 'align-items-center', 'mb-2');

        const colorBox = document.createElement('span');
        colorBox.classList.add('legend-color-box', 'mr-2');
        colorBox.style.backgroundColor = colors[index];
        colorBox.style.width = '20px';
        colorBox.style.height = '20px';

        const text = document.createElement('span');
        text.innerText = `${product}: ${bookingcount[index]} bookings`;

        legendItem.appendChild(colorBox);
        legendItem.appendChild(text);
        legendContainer.appendChild(legendItem);
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.AdminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Admin/adminhome.blade.php ENDPATH**/ ?>