<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HOAMobile | Activity Books</title>
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="materialfloatingbutton/mfb.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="body">

        <div class="container">

            <div class="row">
                <div class="col-xs-4">
                    <div class="mg-top-15">
                        <a href="#menu" class="menu-link"><i class="fa fa-navicon fa-3x white-text"></i></a>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="navbar-right">
                        <h1 class="site-title white-text">HOA<span class="blue-text">Mobile</span></h1>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div>
                    <nav id="menu" class="panel" role="navigation">
                        <ul>
                            <li><a href="activitybooks.php">View Activity Book</a></li>
                            <li><a href="myaccount.html">My Account</a></li>
                            <li><a href="index.html">Log Out</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="white-text">
                        <?php 
$id = $_GET["activitybookid"];
$query = "SELECT * from activities where activitybook_id=$id";
$queryresults = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($queryresults)){
    $active = $row["active"];
    $name = $row["name"];
    $created = $row["created_at"];
    $updated = $row["updated_at"];
    $activitiesid = $row["id"];
    echo "<a href='tasks.php?activtiesid=$activitiesid' class='white-text'><h4 data-toggle='tooltip' data-placement='top' title='Active : $active \n Created : $created \n Updated : $updated'>".$row["name"]."</h4></a>";

}
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <ul class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
            <li class="mfb-component__wrap">
                <a href="#" class="text-center mfb-component__button--main">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
                <ul class="mfb-component__list">
                    <li>
                        <a href="https://github.com/nobitagit/material-floating-button/" data-mfb-label="Delete Activity Book" class=" text-center mfb-component__button--child">
                            <i class="fa fa-trash-o fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/nobitagit" data-mfb-label="Add Activity Book" class="mfb-component__button--child text-center">
                            <i class="fa fa-pencil fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/nobitagit" data-mfb-label="Edit Activity Book" class="mfb-component__button--child text-center">
                            <i class="fa fa-pencil-square-o fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="materialfloatingbutton/lib/modernizr.touch.js"></script>
        <script src="materialfloatingbutton/mfb.min.js"></script>
        <script src="js/bigSlide.min.js"></script>
        <script>
            $(document).load(function() {
                $('.menu-link').bigSlide({
                    easyClose :'true'
                });
            });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>
