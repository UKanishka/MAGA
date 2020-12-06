<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login | PressMS</title>


    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href='<?php echo base_url("assets/css/bootstrap.min.css"); ?>' rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href='<?php echo base_url("assets/css/nifty.min.css"); ?>' rel="stylesheet">

    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href='<?php echo base_url("assets/plugins/pace/pace.min.css"); ?>' rel="stylesheet">
    <script src='<?php echo base_url("assets/plugins/pace/pace.min.js"); ?>'></script>
        
    <!--Demo [ DEMONSTRATION ]-->
    <link href='<?php echo base_url("assets/css/demo/nifty-demo.min.css"); ?>' rel="stylesheet">

    <style>
        .bg-trees {
            background-image: url ('http://localhost:8080/pressMS/pressMS/assets/img/bg/bg-img-3.jpg');
        }
    </style>
       
</head>

<body>
    <div id="container" class="cls-container">
        
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img bg-trees"></div>
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Press MS</h1>
		                <p>Log In to your account</p>
		            </div>
		            <form action='<?php echo site_url("admin"); ?>'>
		                <div class="form-group">
		                    <input type="text" class="form-control" placeholder="Username" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" placeholder="Password">
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">Remember me</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
		            </form>
		        </div>
		
		        <div class="pad-all">
		            <a href="#" class="btn-link mar-rgt">Forgot password ?</a>
		            <a href="#" class="btn-link mar-lft">Create a new account</a>
		        </div>
		    </div>
		</div>
		<!--===================================================-->
		
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src='<?php echo base_url("assets/js/jquery.min.js"); ?>'></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src='<?php echo base_url("assets/js/bootstrap.min.js"); ?>'></script>

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src='<?php echo base_url("assets/js/nifty.min.js"); ?>'></script>

    <!--=================================================-->
    <!--Background Image [ DEMONSTRATION ]-->
    <script src='<?php echo base_url("assets/js/demo/bg-images.js"); ?>'></script>

</body>
</html>
