<!DOCTYPE html>
<html> 
<head>
	<title>  Appointment | PET HELPER</title>


		<!-- Web Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- CSS Header and Footer -->
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/footer.css">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
	<div class="wrapper">
	<!--=== Header v1 ===-->
	<div class="header-v1">
	<!-- Topbar -->
	<div class="topbar-v1">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	</div>
	</div>
	</div>
	</div>

<!-- End Topbar -->

				<!-- Navbar -->
				<div class="navbar mega-menu" role="navigation">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="res-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<div class="navbar-brand">
				<a href="index.html">
					<img style="height: 55px;
					margin-top: 0px;
					width: 110px;" src="assets/img/logo/ph.png" alt="Logo">
				</a>
				</div>
				</div><!--/end responsive container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
				<div class="res-container">
				<ul class="nav navbar-nav">

				<!-- Collect the nav links, forms, and other content for toggling -->


				<!-- Home  -->
				<li class="mega-menu-fullwidth">
				<a href="homeregister.php" >
				HOME
				</a>

				</li>
				<!-- End Home-->

				<!-- About Us -->
				<li class="mega-menu-fullwidth">
				<a href="aboutreg.php" >
				ABOUT US
				</a>	
				</li>
				<!-- End About us -->

				<!-- Doctors -->
				<!-- <li class="mega-menu-fullwidth">
				<a href="doctors.html" >
				DOCTORS
				</a> -->

				</li>
				<!-- End Doctors -->


				<!-- Gallery -->
				<li class="mega-menu-fullwidth">
				<a href="galreg.php" >
				GALLERY
				</a>

				</li>
				<!-- End Gallery -->


				<!-- Blog -->
				<li class="mega-menu-fullwidth">
				<a href="blogreg.php" >
				BLOGS
				</a>	
				</li>
				<!-- End Blog -->

				<!-- Contact Us -->
				<li class="mega-menu-fullwidth">
				<a href="contreg.php" >
				CONTACT US
				</a>	
				</li>
				<!-- End Contact us -->

				<!-- Registration -->
				<!-- End login -->

				<!-- Appointment -->
				<li class="mega-menu-fullwidth">
				<a style=" color: white; background-color: #72c02c; text-decoration: underline; border-radius: 5px;" href="bookreg.php">
				BOOK APPOINTMENT
				</a>

				</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="logout.php">
										LOGOUT
									</a>
								</li>
				<!-- End Appointment -->

				</ul>

				</div>
				</div>
				</div>
				</div>
				</div>
				<!-- End Navbar -->



	<!--=== Heading ===-->
	<div class="container content">
	<div class="row " style="margin-bottom: 30px;">
	<div class="col-md-9 " style="margin-bottom: 30px;">
	<div class="headline"><h2>Appointment Form</h2></div>

				<!--=== APPOINTMENT FORM ===-->
				<form action="bookdata.php" method="post" class="sky-form sky-changes-3">
				<fieldset>
				<div class="row">
				<section class="col col-6">
				<label class="label">Name</label>
				<label class="input">
				<i class="icon-append fa fa-user"></i>
				<input type="text" placeholder="Enter Your Full Name" name="name" id="name" required="">
				</label>
				</section>
				<section class="col col-6">
				<label class="label">E-mail</label>
				<label class="input">
				<i class="icon-append fa fa-envelope-o"></i>
				<input type="email" placeholder="Enter Your Email Address" name="email" id="email" required="">
				</label>
				</section>
				</div>

				<section>
				<label class="label">Purpose Of Appointment</label>
				<label class="input">
				<i class="icon-append fa fa-tag"></i>
				<input type="text" placeholder="Enter Your Purpose For An Appointment" name="subject" required="">
				</label>
				</section>

				<section>
				<label class="label">Mobile Number</label>
				<label class="input">
				<i class="icon-append fa fa-phone"></i>
				<input type="number" name="number" placeholder="Enter Your Mobile Number" id="number" required="">
				</label>
				</section> 	

				<section>
				<label class="select">
				<select style="cursor: pointer;" name="department" required="">
				<option value="" selected="" disabled="">Select Department</option>
				<option>Emergency Department</option>
				<option>Play Area</option>
				<option>Pet Shop</option>
				<option>Pet Spa</option>
				<option>Operation Room</option>
				<option>Reception</option>
				</select>
				<i></i>
				</label>
				</section>
				<div class="row">
				<section class="col col-6">
				<label  class="date">Select Date</label>
				<label class="input">
				<i class="icon-append fa fa-calendar"></i>
				<input style="cursor: pointer;" name="date" type="date" required="">
				</label>
				</section>
				<section class="col col-6">
				<label class="time">Select Time</label>
				<label class="select">
				<select style="cursor: pointer;" name="time" required="">
				<option value="" selected="" disabled="">Select Time</option>
				<option>9:30 AM - 10:00 AM</option>
				<option>10:00 AM - 10:30 AM</option>
				<option>10:30 AM - 11:00 AM</option>
				<option>10:30 AM - 11:00 AM</option>
				<option>11:00 AM - 11:30 AM</option>
				<option>11:30 AM - 12:00 PM</option>
				<option>14:00 PM - 14:30 PM</option>
				<option>14:30 PM - 15:00 PM</option>
				<option>15:00 PM - 15:30 PM</option>
				<option>15:30 PM - 16:00 PM</option>
				<option>16:30 PM - 17:00 PM</option>
				</select>
				<i></i>
				</label>
				</section>
				</div>
				<div class="alert alert-success successBox">
				<button type="button" class="close" onclick="showMsg(1);">??</button>
				<strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link"> Your Appointment has been booked successfully.</span>
				</div>

				</fieldset>

				<footer>
				<button type="submit" class="btn-u">Send message</button>
				</footer>


				</form>
				</div><!--/col-md-9-->

				<!-- side part of appointment -->
						<div class="col-md-3" style="margin-top: 56px;">
						<!-- Address -->
						<div class="headline"><h2>Appointment Notes</h2></div>
						<p> You Only Can Book Your Appointment Between <strong>9:30 AM to 17:00 PM.</strong> </p>
						<p> In Other Times You Can Call Our Ambulance Which Is Available 24/7. </p>

						<!-- Business Hours -->
						<div class="headline" style="margin-top: 20px;"><h2>Business Hours</h2></div>
						<ul class="list-unstyled " style="margin-bottom: 30px;">
						<li><strong>Monday-Saturday:</strong> 24/7 Available.</li>
						<li><strong>Sunday:</strong> 9:00 AM to 15:00 PM.</li>
						</ul>

						<!-- Why choose us? -->
						<div class="headline"><h2>Why Choose Us?</h2></div>
						<p>All types of facilities can be accessed here under one roof, making pet helper institute a one
						point contact for all your healthcare needs.</p>
						<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
						<li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
						<li><i class="fa fa-check color-green"></i> Multiple Options For Treatment plus multiple activities.</li>
						</ul>
						</div><!--/col-md-3-->
						</div><!--/row-->
						</div><!--/container-->


		<!--=== Footer ===-->
		<div class="footer-v1">
		<div class="footer">
		<div class="container">
		<div class="row">
		<!-- About -->
		<div class="col-md-3 " style="margin-bottom: 40px;">
			<a href="index.html"><img id="logo-footer" class="footer-logo" style="height: 55px;
				margin-top: 0px;
				width: 110px; margin-left:60px; border-radius:10px;" src="assets/img/logo/ph.png" alt=""></a>
						<p>At Pet Helper Institute, we are convinced that 'quality' and 'lowest cost' are not mutually
							exclusive when it comes to healthcare delivery.</p>
						<p>Our mission is to deliver high quality plus we want to see happy face of pets :) affordable healthcare services to the broader
							population in India.</p>
		</div><!--/col-md-3-->
		<!-- End About -->

		<!-- Latest -->
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="posts">
		<div class="headline"><h2>Latest Posts</h2></div>
		<ul class="list-unstyled latest-list">
		<li>
		<a href="blogreg.php">Incredible content</a>
		<small>January 19, 2022</small>
		</li>
		<li>
		<a href="galreg.php">Latest Images</a>
		<small>March 20, 2022</small>
		</li>
		<li>
		<a href="termsreg.php">Terms and Conditions</a>
		<small>September 30, 2022</small>
		</li>
		</ul>
		</div>
		</div><!--/col-md-3-->
		<!-- End Latest -->

		<!-- Link List -->
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="headline"><h2>Useful Links</h2></div>
		<ul class="list-unstyled link-list">
		<li><a href="aboutreg.php">About us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="contreg.php">Contact us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="bookreg.php">Book Appointment</a><i class="fa fa-angle-right"></i></li>
		</ul>
		</div><!--/col-md-3-->
		<!-- End Link List -->

		<!-- Address -->
		<div class="col-md-3 map-img " style="margin-bottom: 40px;">
		<div class="headline"><h2>Contact Us</h2></div>
		<address class="" style="margin-bottom: 40px;">
			Pet Helper  <br />
			Ahmedabad, IN <br />
			Phone: +91 97582 01843 <br />
			Email: pethelper15081947@gmail.com 
		</address>
		</div><!--/col-md-3-->
		<!-- End Address -->
		</div>
		</div>
		</div><!--/footer-->

		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<p>
		2022 &copy; All Rights Reserved.
		<a href="privacyreg.php">Privacy Policy</a> | <a href="termsreg.php">Terms of Service</a>
		</p>
		</div>

		<!-- Social Links -->
		<div class="col-md-6">
		<ul class="footer-socials list-inline">
		<li>
		<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
		<i class="fa fa-skype"></i>
		</a>
		</li>
		<li>
		<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
		<i class="fa fa-google-plus"></i>
		</a>
		</li>
		<li>
		<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
		<i class="fa fa-linkedin"></i>
		</a>
		</li>
		<li>
		<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
		<i class="fa fa-pinterest"></i>
		</a>
		</li>
		<li>
		<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
		<i class="fa fa-twitter"></i>
		</a>
		</li>
		</ul>
		</div>
		<!-- End Social Links -->
		</div>
		</div>
		</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
</div><!--/wrapper-->

	<!-- Java scripts -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	function showMsg(flag){
	if(flag==0){
	$('.successBox').css('display', 'block');
	}else{
	$('.successBox').css('display', 'none');
	}
	}
	</script>

</body>
</html>
