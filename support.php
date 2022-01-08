<?php
include ('route.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from pxltheme.com/html/bolby/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 16:35:50 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Legends of Runeterra</title>
	<meta name="description" content="Legends of Runeterra">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="https://playruneterra.com/assets/8bf2c0b85fbc8a90210a01d7ee14a70d97d2d33b/static/favicon.ico">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
	if(isset($_POST['submit']))
	{
$sql = "INSERT INTO support(nama,email,subjectemail,messagepesan) VALUES ('".$_POST["InputName"]."','".$_POST["InputEmail"]."','".$_POST["InputSubject"]."','".$_POST["InputMessage"]."')";
$result = mysqli_query($conn,$sql);
echo "<script>
alert('FEEDBACK OR REPORT HAS BEEN SENDING,THANK YOU !!!');
window.location.href='support.php';
</script>";

}
?>
	<nav class="navbar navbar-expand-lg "style=" background-color:black" > 
	<!-- main menu -->
	<div class="collapse navbar-collapse"  id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item px-4 active"><a><img src="https://images.contentstack.io/v3/assets/blt0eb2a2986b796d29/blt8ba1ec1b0013e362/5ea53af4ae23d30cd1dfb3e4/lor-logo.png?&height=50&disable=upscale"></a></li>
			<li class="nav-item px-1"><a class="nav-link" href="index.php"><b>HOME</b></a></li>
			<li class="nav-item px-1"><a class="nav-link" href="news.php"><b>NEWS</b></a></li>
			<li class="nav-item px-1"><a class="nav-link" href="support.php"><b>SUPPORT</b></a></li>
			<li class="nav-item px-1"><a class="nav-link" href="competitive.php"><b>COMPETITIVE</b></b></a></li>
			<li class="nav-item px-1"><a class="nav-link" href="about.php"><b>ABOUT</b></b></a></li>
		</ul>
		
	</div>
	</nav>
    <div class="containerimg">
	        <img src="https://theme.zdassets.com/theme_assets/43400/2234e538080c94ba88725d8dd6631d1fbf07e480.jpg">
	        <div class="d-flex h-100 text-center align-items-center">
		        <div class="w-100  text-white">
                     <h1 class="centered textimg ">FEEDBACK & REPORT</h1>
		        </div>
            </div>
	    </div>
	</div>

    <section id="contact" style=" padding: 50px; background-color:white;">

		<div class="container">
			<div class="row">
				
				<div class="col-md-4">
					<!-- contact info -->
					<div class="contact-info">
						<h3 class="wow fadeInUp">FEEDBACK & REPORT</h3>
						<p class="wow fadeInUp">From tech to tilt, we're here to help you!
Submit a Ticket! So long as it doesn't fall through a portal, we'll get back to you soon</p>
					</div>
				</div>

				<div class="col-md-8">
					<!-- Contact Form -->
					
						
						<div class="messages"></div>
						<form method="post" action="support.php">
						<div class="row">
							<div class="column col-md-6">
								<!-- Name input -->
								<div class="form-group">
									<input type="text" class="form-control" name="InputName"  placeholder="Your name"  value="" required data-error="Name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="column col-md-6">
								<!-- Email input -->
								<div class="form-group">
									<input type="email" class="form-control" name="InputEmail" placeholder="Email address"  value="" required data-error="Email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="column col-md-12">
								<!-- Email input -->
								<div class="form-group">
									<input type="text" class="form-control" name="InputSubject" placeholder="Subject"  value="" required  data-error="Subject is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
					
							<div class="column col-md-12">
								<!-- Message textarea -->
								<div class="form-group">
									<textarea name="InputMessage" class="form-control" rows="5" placeholder="Message"  value="" required data-error="Message is required."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<button type="submit" name="submit"  class="btn btn-default">Send</button><!-- Send Button -->

					</form>
					<!-- Contact Form end -->
				</div>

			</div>

		</div>

	</section>

    <footer class="text-center text-lg-start text-muted" style="background-color: black; padding: 50px;" >

<img src="https://purepng.com/public/uploads/thumbnail/riot-games-new-logo-ust.png">
<div>
    <a href="" class="me-4 text-reset">
      <i class=" px-5 fab fa-facebook-f"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="px-5 fab fa-twitter"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="px-5 fab fa-instagram"></i>
    </a>
  </div>
<!-- Section: Links  -->
<section style="padding-top: 0;">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4">
          <i class="me-3"></i>Riot Games
        </h6>
      </div>
      <!-- Grid column -->
              
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
        League of Legends
        </h6>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4">
  <span style="color:darkgrey; font:uppercase;">© 2021 COPYRIGHT. RIOT GAMES,INC</span>
</div>
<!-- Copyright -->
</footer>
<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/infinite-scroll.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/validator.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/morphext.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>

</body>

</html>