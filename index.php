<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HOAMobile | Login Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="post" id="index-login-form">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="clearfix">
                            <div class="col-sm-6 text-center">
                                <h1 class="site-title white-text">HOA<span class="blue-text">Mobile</span></h1>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                <div>
                                    <input type="text" name="email" placeholder="email" class="form-control styled-input">
                                </div>
                                <div class="mg-top-5">
                                    <input type="password" name="password" placeholder="password" class="form-control styled-input">
                                </div>
                                <div class="mg-top-5">
                                    <input type="submit" value="login" class="btn btn-block login-white-btn">
                                </div>
                                <div class="mg-top-5 text-center">
                                    <a href="register.html" class="gray-link">Register</a> <span class="black-text">&#9679;</span>
                                    <a href="forgotpassword.html" class="gray-link">Forgot your password?</a>
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
	<script src="js/login.js"></script>
    </body>
</html>
