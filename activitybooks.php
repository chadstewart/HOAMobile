<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HOAMobile | Home</title>
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
			    <li id="item-title"></li>
                            <li id="add-item"></li>
                            <li><a href="index.html">Log Out</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="white-text activites">
                        <form id='api-data'>

			</form>
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
                        <a onclick="deleteItem()" style="cursor: pointer;" data-mfb-label="Delete Item" class=" text-center mfb-component__button--child">
                            <i class="fa fa-trash-o fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a onclick="updateItem()" style="cursor: pointer;" data-mfb-label="Edit Item" class="mfb-component__button--child text-center">
                            <i class="fa fa-pencil fa-2x"></i>
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
	<script src="js/fetchData.js"></script>
        <script>
            $(document).ready(function() {
                $('.menu-link').bigSlide({
                    easyClose :'true'
                });
            });
        </script>
    </body>
</html>
