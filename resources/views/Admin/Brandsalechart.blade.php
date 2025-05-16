@extends('Layouts.AdminMaster')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title" style="color: #388e3c;">Monthly Total Sales Chart</h4>
                    </center>

                    <!-- Month & Year Selection Form -->
                    <form method="GET" action="{{ route('monthlySalesChart') }}">
                        <div class="row">
                            <!-- Month Selection -->
                            <div class="col-md-4">
                                <label for="month">Select Month:</label>
                                <select name="month" class="form-control" id="month">
                                    <option value="">All Months</option>
                                    @for($m = 1; $m <= 12; $m++)
                                        <option value="{{ $m }}" {{ $m == $month ? 'selected' : '' }}>
                                            {{ date('F', mktime(0, 0, 0, $m, 1)) }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <!-- Year Selection -->
                            <div class="col-md-4">
                                <label for="year">Select Year:</label>
                                <select name="year" class="form-control" id="year">
                                    @for($y = date('Y') - 5; $y <= date('Y'); $y++)
                                        <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>
                                            {{ $y }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-2">
                                <br>
                                <button type="submit" class="btn btn-success">Filter</button>
                            </div>
                        </div>
                    </form>

                    <hr>

                    <!-- Chart Canvas -->
                    <div style="width: 70%; margin: auto;">
                        <canvas id="monthlySalesChart" width="300" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js & Datalabels Plugin -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
    // Prepare the chart data
    const ctx = document.getElementById('monthlySalesChart').getContext('2d');

    // Fetch data passed from the controller
    const months = @json($monthlySales->pluck('month'));
    const totalSales = @json($monthlySales->pluck('total_sales'));

    // Prepare month names dynamically
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    const monthLabels = months.map(m => monthNames[m - 1]);

    // Generate the bar chart
    const monthlySalesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: monthLabels, // X-axis: Month Names
            datasets: [{
                label: 'Total Sales Amount for {{ $year }}',
                data: totalSales, // Y-axis: Total Sales
                backgroundColor: 'rgba(76, 175, 80, 0.6)', // Light Green
                borderColor: 'rgba(56, 142, 60, 1)', // Dark Green
                borderWidth: 1
            }]
        },
        plugins: [ChartDataLabels], // Enable Datalabels plugin
        options: {
            responsive: true,
            maintainAspectRatio: false, // Allow resizing
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: 12
                    },
                    formatter: function(value) {
                        return '$' + value.toLocaleString(); // Format as currency
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Sales Amount ($)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Months'
                    }
                }
            }
        }
    });
</script>
@endsection
