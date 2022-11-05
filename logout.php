<?php
session_start();
session_destroy();
echo
"<script>
alert('Logged Out Successfully...');
window.location.href = 'registration.html';
</script>";
?>
<!DOCTYPE html>
<html>

<head>
	<title> Home | PET HELPER</title>

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
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-responsive-collapse">
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
					</div>
					<!--/end responsive container-->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="res-container">
							<ul class="nav navbar-nav">
								<li class="mega-menu-fullwidth">
									<a style=" color: white; background-color: #72c02c; text-decoration: underline; border-radius: 5px;" id="n1" href="index.html">
										HOME
									</a>

								</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="about.html">
										ABOUT US
									</a>
								</li>
								<!-- <li class="mega-menu-fullwidth">
									<a id="n1" href="doctors.html">
										DOCTORS
									</a>

								</li> -->
								<li class="mega-menu-fullwidth">
									<a id="n1" href="gallery.html">
										GALLERY
									</a>

								</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="blog.html">
										BLOGS
									</a>
								</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="contact.html">
										CONTACT US
									</a>
								</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="registration.html">
										REGISTRATION
									</a>
								</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="login.html">
										LOGIN
									</a>
								</li>
								<li class="mega-menu-fullwidth">
									<a id="n1" href="appointment.html">
										BOOK APPOINTMENT
									</a>
								</li>
							</ul>
							<!-- <ul class="li"> <a href="">HOME</a>  </ul>
							<ul class="li"> <a href="">ABOUT US</a>  </ul>
							<ul class="li"> <a href="">DOCTORS</a>  </ul>
							<ul class="li"> <a href="">GALLERY</a> </ul>
							<ul class="li"> <a href="">BLOGS</a></ul>
							<ul class="li"> <a href="">CONTACT US</a> </ul>
							<ul class="li"> <a href="">REGISTRATION</a> </ul>
							<ul class="li"> <a href="">LOGIN</a> </ul>
							<ul class="li"> <a href="">BOOK APPOINTMENT</a> </ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Navbar -->



		<!-- Slider -->
		<div id="slide">
			<div class="slideshow-container">
				<div class="mySlides fade"> <img src="assets/img/logo/dog.jpg" alt="Slider1"
						style="width:100% ; height: 67rem"> </div>
				<div class="mySlides fade"> <img src="assets/img/logo/bu.jpg" alt="Slider2" style="height: 67rem;
					width: 100%;"> </div>
				<div class="mySlides fade"> <img src="assets/img/logo/r1.jpg" alt="Slider3" style="    height: 67rem;
					width: 100%;"> </div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next"
					onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
			</div>
		</div>

		<script>
			var slideIndex = 0;
			showSlides();
			var slides, dots;

			function showSlides() {
				var i;
				slides = document.getElementsByClassName("mySlides");
				dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > slides.length) { slideIndex = 1 }
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				setTimeout(showSlides, 8000); // Change image every 8 seconds
			}

			function plusSlides(position) {
				slideIndex += position;
				if (slideIndex > slides.length) { slideIndex = 1 }
				else if (slideIndex < 1) { slideIndex = slides.length }
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
			}

			function currentSlide(index) {
				if (index > slides.length) { index = 1 }
				else if (index < 1) { index = slides.length }
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[index - 1].style.display = "block";
				dots[index - 1].className += " active";
			}
		</script>


		<!-- End of Slider -->

		<!--=== Welcome to Unity===-->
		<div class="container content-md welcomeSection">
			<div class="row section1" style="text-align: center;">
				<div class="col-md-6" style="margin-bottom: 40px;" style="border:2px solid black; background: green;">
					<h2 class="title-v2">WELCOME TO <span style="color: #72c02c;"> Pet Helper Institution </span></h2>
					<p style="text-align: justify; font-size: 14px;">A state-of-the art modern facility in the heart of
						the Gujarat state, it is spread over 10 acres and has a built-up area of over 440000 square
						feet.</p>
					<p style="text-align: justify; font-size: 14px;">Pet Helper Institution is located at
						Ahmedabad and it is a special caring center
						for the pets also for abandoned pets.This institution focuses on centres of excellence like
						Providing facilities for the pets like spa, appointment for animals for their body check-up,
						people came here with their pet so that our workers can providies such kind of facilities
						like playing games, entartainment, pet competitions,etc...also our specialists doctor can help
						the pets if they are suffering from some medical issues.
						Also for pet adoption people can came here.
					</p>
					<p style="text-align: justify; font-size: 14px;"> Pet Helper instiute provides holistic
						healthcare that includes prevention, treatment, rehabilitation and health education for
						the pet also to their pet owner.
						patients, their families and clients by touching their lives.</p> <br>
					<a style="    border-radius: 5px;" href="about.html" class="btn-u btn-brd btn-brd-hover">Read
						More</a>
				</div>
				<div class="col-md-6 overflow-h">
				</div>
				<img style="     margin-top: -120px; border-radius: 50px; margin-left: 30px;" src="assets/img/bg/1.jpg"
					alt="">
			</div>
		</div>
		<!--=== End About Us ===-->



		<!-- Specialities -->
		<div class="container" style="margin-top: 50px;">
			<div class="headline-center" style="margin-bottom: 60px;">
				<h2>Our Specialities</h2>
				<div class="line"></div>
				<p>It is a multi/super speciality Institute with state-of-the-art facilities & treatments at an
					affordable cost, encompassing wide spectrum of accurate diagnostics and elegant therapeutics created
					on the philosophical edifice of patient and ethical centricity ensuring humanistic dispensation.
				</p>
			</div>
			<!--end Spciallities-->

			<div class="row" style="margin-bottom: 40px;">
				<div class="col-md-4">
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<!-- <i class="icon-medical-005" style="border-radius: 50%;"></i> -->
						<div class="overflow-h">
							<h3 class="no-top-space">24/7 Ambulance support</h3>
							<p>24 Hours Ambulance Service, Emergency Ambulance Service Providers in India not only for
								pets but for the
								any kind of animals in the very critical emergency case if they are suffering from.
							</p>
						</div>
					</div>
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<!-- <i style="border-radius: 50%;" class="icon-medical-054"></i> -->
						<div class="overflow-h" style="    text-align: center;">
							<h3 class="no-top-space">Helping the Pets </h3>
							<p>If somebody did misbehave or some kind of not to-do activites by harming with the pets
								our pethelper organization would take strict action against them..</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<!-- <i style="border-radius: 50%;" class="icon-medical-042"></i> -->
						<!-- <img style="    height: 59px;
						border-radius: 50%; " class="icon-medical-042" src="C:\qaz12\op\Hospital-Management-Html\assets\img\logo\spa.jpg" alt=""> -->
						<div class="overflow-h" style="    margin-left: 12px;">
							<h3 class="no-top-space">Pet Adoption</h3>
							<p>We also have different types of pets which are abandoned or someone lives here
								so we can people can adopt pets from here.</p>
						</div>
					</div>
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<!-- <i style="border-radius: 50%;" class="icon-medical-019"></i> -->
						<div class="overflow-h">
							<h3 class="no-top-space">Helping abandoned pets</h3>
							<p>If somebody found a abandoned anykind of pet at a time we are request you
								to contact us, your one help would help the other lives.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<!-- <i style="border-radius: 50%;" class="icon-medical-069"></i> -->
						<div class="overflow-h">
							<h3 class="no-top-space">Pet Awareness Programme</h3>
							<p>On every sunday our department organizes an Pet Awarness Programme
								it is free of cost, speaker gives Awarness about pets and their future species.</p>
						</div>
					</div>
					<div class="content-boxes-v5" style="margin-bottom: 30px;">
						<!-- <i style="border-radius: 50%;" class="icon-medical-061"></i> -->
						<div class="overflow-h">
							<h3 class="no-top-space">Free Health Body Check Up</h3>
							<p>Every month our doctors would give free body check-up for pets,
								it is compulsory for pet owner to take them to here.</p>
						</div>
					</div>
				</div>
			</div>
			<!--/end row-->
		</div>
		<!--/end container-->
		<!-- End Content Part -->

		<!-- Plans Start -->
		<section class="pricingSection">
			<div class="container" style="margin-top: 20px;">
				<div class="headline-center">
					<h2>Health Care Packages</h2>
					<div class="line"></div>
					<div class="row">
						<!-- Pricing Item -->
						<div class="col-md-3 col-xs-6 col-2xs-12">
							<div style="border-radius: 10px;" class="pricing-v9 hover-effect">
								<div class="pricing-v9-head">
									<h3 class="h3"><span class="g-color-default">Pet Helper</span> | Pet Care</h3>
								</div>
								<ul style="list-style-type:none;">
									<li>3x Comprehensive Physical Exam</li>
									<li>4x Deworming (2 Tab)</li>
									<li>1x Vaccination ( 7 in 1 )</li>
									<li>1x Vaccination ( Anti Rabies )</li>
									<li>&nbsp;</li>
									<li>&nbsp;</li>
								</ul>
								<div class="pricing-v9-price">
									For <span class="g-color-default">₹ 5499</span>/Year
									<!-- <input type="submit" class="allsub" value="Purchase"> -->
								</div>
								<a href="contact.html"><input type="submit" class="allsub" style="margin-bottom: 15px;"
										value="Purchase"></a>
							</div>
						</div>
						<!-- /Pricing Item -->
						<!-- Pricing Item -->
						<div class="col-md-3 col-xs-6 col-2xs-12">
							<div style="border-radius: 10px;" class="pricing-v9 hover-effect">
								<div class="pricing-v9-head">
									<h3 class="h3"><span class="g-color-default">Pet Helper</span> | Pet Extra Care</h3>
								</div>
								<ul style="list-style-type:none;">
									<li>4x Comprehensive Physical Exam</li>
									<li>1x Blood Test ( CBC )</li>
									<li>1x Vaccination ( 7 in 1 ) </li>
									<li>1x Vaccination ( Anti Rabies )</li>
									<li>4x Deworming (2 Tab)</li>
									<li>&nbsp;</li>
								</ul>
								<div class="pricing-v9-price">
									For <span class="g-color-default">₹ 6499</span>/Year
									<!-- <input type="submit" class="allsub" value="Purchase"> -->
								</div>
								<a href="contact.html"><input type="submit" class="allsub" style="margin-bottom: 15px;"
										value="Purchase"></a>
							</div>
						</div>
						<!-- /Pricing Item -->
						<!-- Pricing Item -->
						<div class="col-md-3 col-xs-6 col-2xs-12">
							<div style="border-radius: 10px;" class="pricing-v9 hover-effect">
								<div class="pricing-v9-head">
									<h3 class="h3"><span class="g-color-default">Pet Helper</span> | Pet Super Care</h3>
								</div>
								<ul style="list-style-type:none;">
									<li>10x Comprehensive Physical Exam</li>
									<li>3x Vaccination ( 7 in 1 )</li>
									<li>2x Vaccination ( Anti Rabies )</li>
									<li>6x Deworming (1 Tab)</li>
									<li>1x Blood Test ( CBC )</li>
									<li>&nbsp;</li>
								</ul>
								<div class="pricing-v9-price">
									For <span style="text-align:left" class="g-color-default">₹ 9499</span>/Year
									<!-- <input type="submit" class="allsub" value="Purchase"> -->
								</div>
								<a href="contact.html"><input type="submit" class="allsub" style="margin-bottom: 15px;"
										value="Purchase"></a>
							</div>
						</div>
						<!-- /Pricing Item -->
						<!-- Pricing Item -->
						<div class="col-md-3 col-xs-6 col-2xs-12">
							<div style="border-radius: 10px;" class="pricing-v9 hover-effect">
								<div class="pricing-v9-head">
									<h3 class="h3"><span class="g-color-default">Pet Helper</span> | Pet Complete Care
									</h3>
								</div>
								<ul style="list-style-type:none;">
									<li>12x Comprehensive Physical Exam</li>
									<li> Spay/ Neuter Surgery</li>
									<li>3x Vaccination ( 7 in 1 )</li>
									<li>2x Vaccination ( Anti Rabies )</li>
									<li>1x Blood Test ( CBC )</li>
									<li>6x Deworming (1 Tab)</li>
								</ul>
								<div class="pricing-v9-price">
									For <span class="g-color-default">₹ 14499</span>/Year
								</div>
								<a href="contact.html"><input type="submit" class="allsub" style="margin-bottom: 15px;"
										value="Purchase"></a>
							</div>
						</div>
						<!-- /Pricing Item -->
					</div>
				</div>
			</div>
		</section>
		<!-- End PLANS -->


		<!-- Blog part -->
		<div class="container">
			<div class="headline-center" style="margin-bottom: 40px;">
				<h2>Recent Blogs</h2>
				<div class="line"></div>
			</div>
			<!--/end Headline Center-->

			<div class="container" style="margin-bottom: 50px;">
				<div class="row news-v1">
					<div class="col-md-4" style="margin-bottom: 40px;">
						<div class="news-v1-in">
							<img class="img-responsive" src="assets/img/logo/dog1.jpg" alt="">
							<h3><a href="blog.html">Common Diseases Found In Dogs & Cats</a></h3>
							<p>It is usually due to restricted absorption of Vitamin D (sunlight) in your body during
								winter or due to decreased blood flow to bones to increase body temperature or due to
								restrWhen it comes to dog flu...
							</p>
							<span></span>
							<span></span>
							<ul class="list-inline news-v1-info">
								<li><span>By</span> <a href="#">Dr. Ramneek Mahajan</a></li>
								<li style="margin-left: 17px;">|</li>
								<li style="margin-left: 12px;"><i class="fa fa-clock-o"></i> February 5, 2022</li>
								<li><a href="blog.html" class="btn-u btn-brd btn-brd-hover blogButton">Read More</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4" style="margin-bottom: 40px;">
						<div class="news-v1-in">
							<img class="img-responsive" src="assets/img/logo/cat.jpg" alt="">
							<h3><a href="blog.html">How to Manage Cats’ Scratching</a></h3>
							<p>The truth is, you’ll never stop a cat from scratching—you can’t fight instinct! Instead,
								the key is to encourage your cat to</p>
							<ul class="list-inline news-v1-info">
								<li><span>By</span> <a href="#">Dr. Anant Kumar</a></li>
								<li style="margin-left: 17px;">|</li>
								<li style="margin-left: 12px;"><i class="fa fa-clock-o"></i> April 3, 2022</li>
								<li><a href="blog.html" class="btn-u btn-brd btn-brd-hover blogButton">Read More</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="news-v1-in">
							<img class="img-responsive" style="    height: 224px;
							width: -webkit-fill-available;
	" src="assets/img/logo/win.jpg" alt="">
							<h3><a href="blog.html">PREPARING FOR WINTER WITH PETS</a></h3>
							<p>Just like humans, dogs and cats are vulnerable during the cold weather too. While the
								cold is a lot more comfortable than the heat, extreme weather conditions can ...</p>
							<ul class="list-inline news-v1-info">
								<li><span>By</span> <a href="#">Dr. Vandana Soni</a></li>
								<li style="margin-left: 17px;">|</li>
								<li style="margin-left: 12px;"><i class="fa fa-clock-o"></i> May 29, 2022</li>
								<li><a href="blog.html" class="btn-u btn-brd btn-brd-hover blogButton">Read More</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End News v1 Gray -->
		</div>



		<!--=== Footer ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" style="height: 55px;
					margin-top: 0px;
					width: 110px; margin-left:60px; border-radius:10px;" src="assets/img/logo/ph.png" alt=""></a>
							<p>At Pet Helper Institute, we are convinced that 'quality' and 'lowest cost' are not
								mutually
								exclusive when it comes to healthcare delivery.</p>
							<p>Our mission is to deliver high quality plus we want to see happy face of pets :)
								affordable healthcare services to the broader
								population in India.</p>
						</div>
						<!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3" style="margin-bottom: 40px;">
							<div class="posts">
								<div class="headline">
									<h2>Latest Posts</h2>
								</div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="blog.html">Incredible content</a>
										<small>January 19, 2022</small>
									</li>
									<li>
										<a href="gallery.html">Latest Images</a>
										<small>March 20, 2022</small>
									</li>
									<li>
										<a href="terms.html">Terms and Conditions</a>
										<small>September 30, 2022</small>
									</li>
								</ul>
							</div>
						</div>
						<!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3" style="margin-bottom: 40px;">
							<div class="headline">
								<h2>Useful Links</h2>
							</div>
							<ul class="list-unstyled link-list">
								<li><a href="about.html">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="Contact.html">Contact us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="appointment.html">Book Appointment</a><i class="fa fa-angle-right"></i>
								</li>
							</ul>
						</div>
						<!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img" style="margin-bottom: 40px;">
							<div class="headline">
								<h2>Contact Us</h2>
							</div>
							<address class="md-margin-bottom-40">
								Pet Helper <br />
								Ahmedabad, IN <br />
								Phone: +91 97582 01843 <br />
								Email: pethelper15081947@gmail.com
							</address>
						</div>
						<!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div>
			<!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2022 &copy; All Rights Reserved.
								<a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip"
										data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div>
			<!--/copyright-->
		</div>
		<!--=== End Footer ===-->
	</div>
	<!--/wrapper-->

</body>

</html>