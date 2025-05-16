@extends('Layouts.AdminMaster')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Booking Pie Chart</title>
    <style>
        /* Style the chart container */
        #pieChartContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f7f9;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-legend {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }

        .chart-legend-item {
            display: flex;
            align-items: center;
            margin: 5px 10px;
        }

        .legend-color-box {
            width: 15px;
            height: 15px;
            margin-right: 8px;
            border-radius: 3px;
            display: inline-block;
        }

        #pieChart {
            max-width: 300px;
            max-height: 300px;
        }
    </style>
</head>
<body>
    <div id="pieChartContainer">
        <h2>Product Booking Pie Chart</h2>
        <div id="chartLegend" class="chart-legend"></div>
        <canvas id="pieChart" width="300" height="300"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Extracting data from Laravel
        const bookingData = @json($bookingcount);

        // Transform data into arrays for product names and counts
        const productname = bookingData.map(item => item.productname);
        const bookingcount = bookingData.map(item => item.count);

        // Generate dynamic colors for each segment
        const colors = [];
        for (let i = 0; i < bookingData.length; i++) {
            colors.push(`hsl(${Math.random() * 360}, 70%, 60%)`);
        }

        // Create Pie Chart
        const ctx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctx, {
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

        // Custom Legend
        const legendContainer = document.getElementById('chartLegend');
        productname.forEach((product, index) => {
            const legendItem = document.createElement('div');
            legendItem.classList.add('chart-legend-item');

            const colorBox = document.createElement('span');
            colorBox.classList.add('legend-color-box');
            colorBox.style.backgroundColor = colors[index];

            const text = document.createElement('span');
            text.innerText = `${product}: ${bookingcount[index]} bookings`;

            legendItem.appendChild(colorBox);
            legendItem.appendChild(text);
            legendContainer.appendChild(legendItem);
        });
    </script>
</body>
</html>
@endsection
