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
                <form id="update" method="post" >
                    <div class="col-md-8 col-md-offset-2">
                        <div class="clearfix">
                            <div class="col-sm-6 text-center">
                                <h1 class="site-title white-text">HOA<span class="blue-text">Mobile</span></h1>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                    <input type="text" name="name" placeholder="name" id="field1" class="form-control styled-input">
				    <input type="text" name="active" placeholder="active" id="field2" class="form-control styled-input">
				    <input type="text" name="activity_id" placeholder="activity id" id="field3" class="form-control styled-input">
				    <input type="hidden" name="reminder_id" value="3" >
				    <input type="hidden" name="completed" value="0" >
				    <input type="hidden" name="apiFunction" value="tasklists" >
                                </div>
                                <div class="mg-top-5">
                                    <input type="submit" value="Update Tasklist" class="btn btn-block login-white-btn">
                                </div>
                                <div class="mg-top-5 text-center">
                                   <a href="home.php" class="gray-link">Back</a>
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
