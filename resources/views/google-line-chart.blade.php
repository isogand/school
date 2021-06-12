
@extends('layout')

@section('content')
</br>
</br>
</br>
</br>
<html>
<div class="container-fluid">
<div class="card card-primary">
    <div class="card-body text-primary">
<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

        var visitor = <?php echo $visitor; ?>;

        console.log(visitor);

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable(visitor);

            var options = {

                title: 'Site Visitor Line Chart',

                curveType: 'function',

                legend: { position: 'bottom' }

            };

            var chart = new google.visualization.LineChart(document.getElementById('linechart'));

            chart.draw(data, options);

        }

    </script>

</head>

<body>


<style>
    .push-top {
        margin-top: 25px;
    }
    .container {
        max-width:900px;
    }
    body{
        background-color:#ffffff;
    }

</style>

<h1>Chart  Student</h1>

<br />
<div id="linechart" style="width: 900px; height: 500px"></div>

</body>
</div>
</div>
</div>
</html>



@endsection
