
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">E-WAYS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo site_url() ?>/admin_home">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?php echo site_url() ?>/admin_charts">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Charts</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo site_url() ?>/admin_tables">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tables</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                <a class="nav-link" href="<?php echo site_url() ?>/admin_events">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span class="nav-link-text">Events</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Resources">
                <a class="nav-link" href="<?php echo site_url() ?>/admin_resources">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <span class="nav-link-text">Resources</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Charts</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Topics completed</div>
            <div class="card-body">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages': ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Topic', 'No. Completed'],
<?php foreach ($ctopic1->result() as $value) { ?>
                            ['Goals Setting', <?php echo $value->topic1 ?>],
<?php } ?>
<?php foreach ($ctopic2->result() as $value) { ?>
                            ['Stress Management ', <?php echo $value->topic2 ?>],
<?php } ?>
<?php foreach ($ctopic3->result() as $value) { ?>
                            ['Time Management', <?php echo $value->topic3 ?>],
<?php } ?>
<?php foreach ($ctopic4->result() as $value) { ?>
                            ['Motivation', <?php echo $value->topic4 ?>],
<?php } ?>
<?php foreach ($ctopic5->result() as $value) { ?>
                            ['Study Strategy', <?php echo $value->topic5 ?>],
<?php } ?>
<?php foreach ($ctopic6->result() as $value) { ?>
                            ['Tips for Exams and Tests', <?php echo $value->topic6 ?>]
<?php } ?>
                        ]);

                        var options = {
                            title: '',
                            curveType: 'function',
                            legend: {position: 'left'}
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                    }
                </script>

                <div id="curve_chart" width="100%" height="40%"></div>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
        <canvas id="myChart" width="100%" height="40%"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {}
});
        </script>
    </div>
    <!-- /.container-fluid-->

<!-- /.content-wrapper-->

<br>
