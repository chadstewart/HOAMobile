<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HOAMobile | Add</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
	
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form id="add" method="post" >
                    <div class="col-md-8 col-md-offset-2">
                        <div class="clearfix">
                            <div class="col-sm-6 text-center">
                                <h1 class="site-title white-text">HOA<span class="blue-text">Mobile</span></h1>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                    <input type="text" name="name" placeholder="name" id="field1" class="form-control styled-input">
				    <input type="text" name="activitybook_id" placeholder="activitybook id" id="field2" class="form-control styled-input">
				    <input type="hidden" name="apiFunction" value="activities" >
                                </div>
                                <div class="mg-top-5">
                                    <input type="submit" value="Add Activity" class="btn btn-block login-white-btn">
                                </div>
                                <div class="mg-top-5 text-center">
                                   <a href="index.html" class="gray-link">Back</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/accessApiFunctionality.js"></script>
    </body>
</html>
