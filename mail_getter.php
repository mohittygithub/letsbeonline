<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>Let's Be Online - Software And Web Developers</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/templatemo-style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-phone"></i><span> Phone</span>+91 98283 77000</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-envelope-o"></i><span>Email</span><a id="email" href="mailto:letsbeonlineajmer@gmail.com">letsbeonlineajmer@gmail.com</a></p>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <ul class="social-icon">
                            <li><span>Meet us on</span></li>
                            <li><a href="https://www.facebook.com/mohit.tyagi.148" class="fa fa-facebook" target="_blank"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Let's Be Online</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="disabled"><a href="#top">HOME</a></li>
						<li class="disabled"><a href="#about">ABOUT</a></li>
						<li class="disabled"><a href="#team">TEAM</a></li>
						<li class="disabled"><a href="#service">SERVICE</a></li>
						<li class="disabled"><a href="#portfolio">PORTFOLIO</a></li>
						<li class="disabled"><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

		<?php
			if(isset($_POST['submit'])){
				$name=$_POST['fullname'];
				$email=$_POST['email'];
				$phone=$_POST['mobile'];
				$msg=$_POST['query'];
				$goBack='www.letsbeonline.in';

				$to='letsbeonlineajmer@gmail.com'; // Receiver Email ID
				$subject='Form Submission';
				$message="Name :".$name."\n"."Mobile :".$phone."\n"."Email Id :".$email."\n"."Wrote the following :"."\n\n".$msg;
				$headers="From: ".$email;

				if(mail($to, $subject, $message, $headers)){
					echo "<h1>Your Query Sent Successfully! Thank you"." ".$name."</h1>
					<h3>We will contact you shortly!</h3>";
					echo "<button class='btn btn-primary' href='http://www.letsbeonline.in'>Go Back To Home</button>";
				}
				else{
					echo "Something went wrong!";
				}
			}
			//header("Location: https://www.letsbeonline.in/acknowledgement.html");
			exit;
		?>



		<!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Let's Be Online &copy; Copyright 2020. Designed By <a href="http://www.letsbeonline.in" target="_blank">www.letsbeonline.in</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

	</body>
</html>

