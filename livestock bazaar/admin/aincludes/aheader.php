<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/dashboard.css" rel="stylesheet" type="text/css">
    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--script src="icons.js"></script-->
    v>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            <?php
session_start();
// var_dump($_POST);
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
?>
          ['Task', 'Hours per Day'],
          <?php 
			$query = "SELECT * from category";

			 $exec = mysqli_query($conn,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['category']."',".$row['category_id']."],";
			 }
			 ?> 
        ]);

        var options = {
          title: 'categories'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <title>LIVESTOCK BAZAAR</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
        <button id="sidebarCollapse" class="btn navbar-btn btn-outline-light">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="">
            <h3 id="logo">LIVESTOCK BAZAAR</h3>
        </a>
        <button class="navbar-toggler btn-outline-light" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <!--span class="navbar-toggler-icon"></span-->
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="link" href="#">
                        Username
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" id="link" href="alogout.php">
                        LogOut<span class="sr-only">(current) </span>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper fixed-left">
        <nav id="sidebar">
            <!--div class="sidebar-header">
                    <h3><i class="fa fa-user"></i>Username</h3>
                </div-->

            <ul class="list-unstyled components">
                <li>
                    <a href=".\index.php"><i class="fa fa-clipboard" aria-hidden="true"></i>Dashboard</a>
                </li>
                <li>
                    <a href=".\admin.php"><i class="fa fa-home" aria-hidden="true"></i>admin profile</a>
                </li>
                <li>
                    <a href=".\customer.php"><i class="fa fa-user" aria-hidden="true"></i>customer profile</a>
                </li>
                <li>
                    <a href=".\category.php"><i class="fa fa-heart-o" aria-hidden="true"></i>category</a>
                </li>
                <li>
                    <a href=".\breed.php"><i class="fa fa-align-left" aria-hidden="true"></i>breed</a>
                </li>
                <li>
                    <a href=".\cattle.php"><i class="fa fa-facebook" aria-hidden="true"></i>cattle</a>
                </li>
            </ul>
        </nav>
        <div id="content">