@extends('layouts.header')
@extends('components.topheader')
@extends('components.sidebar')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<main class="main-section-area">
    <div class="main-container" id="mainWindow" page-id="window101">
        <div class="frm-item filter-item last-child">
             <label class="frm-label" for="">Locations</label>
                <div class="orderific-multi-select">
                    <select class="" id="status-filter" name="location">
                        <option value="11" @if($location==11) selected @endif>All</option>
                        <option value="3" @if($location==3) selected @endif>Tiruvallur</option>
                        <option value="4" @if($location==4) selected @endif>Coimbatore</option>
                        <option value="5" @if($location==5) selected @endif>Erode</option>
                        <option value="6" @if($location==6) selected @endif>Karur Rural</option>
                        <option value="7" @if($location==7) selected @endif>Karur HDVS</option>
                        <option value="8" @if($location==8) selected @endif>Krish ASF</option>
                        <option value="9" @if($location==9) selected @endif>Krish ASF</option>
                        <option value="10" @if($location==10) selected @endif>Gingee</option>
                    </select>
                </div>
        </div>
        
        <canvas id="myChart" width="800" height="400"></canvas>

    </div>
</main>
@endsection

@section('dashboard-scripts')

<script>
    // Handle select change
    document.getElementById('status-filter').addEventListener('change', function() {
        var selectedValue = this.value;
        var url = new URL(window.location.href);
        url.searchParams.set('location', selectedValue);
        window.location.href = url.toString();
    });

    var chartData = @json($chartData);
    
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: chartData.map(item => item.name),
            datasets: [{
                label: 'Total',
                data: chartData.map(item => item.total),
                backgroundColor: chartData.map(() => {
                    return 'rgba(' + Math.floor(Math.random() * 255) + ',' + 
                                        Math.floor(Math.random() * 255) + ',' + 
                                        Math.floor(Math.random() * 255) + ', 0.6)';
                }),
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                },
                title: {
                    display: true,
                    text: 'Material Quantities'
                }
            }
        }
    });
</script>


@endsection