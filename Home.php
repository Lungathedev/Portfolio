<?php

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" style="scroll-behavior: smooth;">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="Lungathedev">
	<meta name="description" content="My personal resume">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="styleA.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="font-iconsA.css">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="resume.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title -->
	<title>Lunga's resume</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header sticky-transparent" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<!-- Top-right-tile-text -->
							<a class="font-secondary ls-3" style="line-height: 90px;">Lunga's resume</a>
						</div>
						<nav class="primary-menu">
							<ul class="menu-container one-page-menu custom-spacing" data-easing="easeInOutExpo" data-speed="1250" data-offset="0">
								<!-- 1st-Navigation-Icon -->
								<li class="menu-item current"><a class="menu-link" href="#wrapper"><i class="bi-house"></i><div>Landing page</div></a></li>
								<!-- 2nd-Navigation-Icon -->
								<li class="menu-item"><a class="menu-link" href="#section-skills"><i class="bi-star"></i><div>Introduction video</div></a></li>
								<!-- 3rd-Navigation-Icon -->
								<li class="menu-item"><a class="menu-link" href="#section-about"><i class="bi-person"></i><div>About me</div></a></li>
								<!-- 4th-Navigation-Icon -->
								<li class="menu-item"><a class="menu-link" href="#footer"><i class="bi-grid"></i><div>Highlights</div></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<section class="min-vh-60 min-vh-md-100 include-header">
			<!-- Top-Picture-1 -->
			<div class="vh-100 vw-100 position-fixed" style="top: 0; left: 0; background: #FFF url('Top-background-picture.jpg') no-repeat top center; background-size: cover; background-attachment: fixed;"></div>
			<!-- Top-Picture-2 -->
			<div class="vh-100 vw-100 position-fixed blurred-img" style="top: 0; left: 0; background: #FFF url('Top-background-picture.jpg') no-repeat top center; background-size: cover; background-attachment: fixed;"></div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content" class="bg-transparent">
			<div class="content-wrap pb-0 bg-transparent">

				<div id="section-skills" class="section m-0 page-section dark bg-transparent" style="padding-bottom: 50px">
					<div class="container">
						<div class="heading-block text-center">
							<!-- Video-Heading -->
							<h2 class="font-secondary">My side of the story</h2>
						</div>
						<div style="margin: auto; display: block;">
									<video poster="Rocket-launch.jpeg" style="height: auto; width: 100%;" controls>
									<!-- Video-Source-URL -->
  									<source src="fun.mp4" type="video/mp4">
 									Your browser does not support the video tag.
									</video>
						</div>
						<div class="row justify-content-center col-mb-50 mb-0"></div>
					</div>
				</div>
				<!-- Bottom-Picture-1 -->
				<div id="section-about" class="section page-section m-0" style="background: #EEE url('Lower-background-picture.jpg') no-repeat center center; background-size: cover; padding: 100px 0">
					<div class="container">
						<div class="row">
							<div class="col-md-5 offset-md-7">
								<div class="heading-block">
									<!-- About-Me-Section-Header -->
									<h2 class="font-secondary">About Me</h2>
									<!-- About-Me-Section-Body-Text -->
									<span>[Enter your description about yourself and your qualities.]</span>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<!-- About-Me-Section-Body-Name-Prefix -->
											<td class="border-top-0"><strong>Name:</strong></td>
											<!-- About-Me-Section-Body-Name -->
											<td class="border-top-0">[Enter name]</td>
										</tr>
										<tr>
											<!-- About-Me-Section-Body-Gender-Prefix -->
											<td><strong>Gender:</strong></td>
											<!-- About-Me-Section-Body-Gender -->
											<td>[Enter gender]</td>
										</tr>
										<tr>
											<!-- About-Me-Section-Body-Email-Prefix -->
											<td><strong>Email:</strong></td>
											<!-- About-Me-Section-Body-Email -->
											<td>[Enter email]</td>
										</tr>
										<tr>
											<!-- About-Me-Section-Body-Cell-number-Prefix -->
											<td><strong>Phone:</strong></td>
											<!-- About-Me-Section-Body-Cell-number -->
											<td>[Enter cell number]</td>
										</tr>
										<tr>
											<!-- About-Me-Section-Body-Date-of-birth-Prefix -->
											<td><strong>DOB:</strong></td>
											<!-- About-Me-Section-Body-Date-of-birth -->
											<td>[Enter date of birth]</td>
										</tr>
										<tr>
											<!-- About-Me-Section-Body-Nationality-Prefix -->
											<td><strong>Nationality:</strong></td>
											<!-- About-Me-Section-Body-Nationality -->
											<td>[Enter nationality]</td>
										</tr>
									</tbody>
								</table>
								<!-- Download CV button -->
								<a href="[Enter CV file name]" class="button button-large button-border button-black button-dark ms-0"><i class="bi-cloud-download"></i> Download CV</a>
							</div>
						</div>
					</div>
					<div class="video-wrap">
						<div class="video-overlay d-sm-block d-md-none" style="background: rgba(255,255,255,0.9);"></div>
					</div>
				</div>
				<div class="section m-0 skill-area bg-color dark" style="padding: 80px 0;">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<!-- About-Me-Section-Footer-Education-Heading -->
								<h4>Education</h4>
								<div class="skill-info">
									<span>
										<!-- About-Me-Section-Footer-Education-Primary-School-Name -->
										[Enter name of primary school]
										<br>
										Primary
										<br>
										<!-- About-Me-Section-Footer-Education-Primary-School-Years -->
										[Enter years attended eg. 2000 - 2007]
									</span>
									<span>
										<!-- About-Me-Section-Footer-Education-High-School-Name -->
										[Enter name of High school]
										<br>
										High school
										<br>
										<!-- About-Me-Section-Footer-Education-High-School-Years -->
										[Enter years attended eg. 2000 - 2007]
									</span>
									<span>
										<!-- About-Me-Section-Footer-Education-University-Name -->
										[Enter name of University]
										<br>
										University
										<br>
										<!-- About-Me-Section-Footer-Education-University-Years -->
										[Enter years attended eg. 2000 - 2007]
									</span>
								</div>
							</div>
							<div class="w-100 mb-5 d-block d-md-none"></div>
							<div class="col-lg-4 col-md-6">
								<!-- About-Me-Section-Footer-Certification-Heading -->
								<h4>Certification</h4>
								<div class="skill-info">
									<span>
										<!-- About-Me-Section-Footer-Certification-First-Certifiaction-Name -->
										[Enter name of qualification acquired]
										<br>
										<!-- About-Me-Section-Footer-Certification-First-Certifiaction-Acquisition -->
										[Enter name of insitution where qualification was acquired]
										<br>
										<!-- About-Me-Section-Footer-Certification-First-Certifiaction-Years -->
										[Enter year qualification was acquired]
									</span>
									<span>
										<!-- About-Me-Section-Footer-Certification-Second-Certifiaction-Name -->
										[Enter name of qualification acquired]
										<br>
										<!-- About-Me-Section-Footer-Certification-Second-Certifiaction-Acquisition -->
										[Enter name of insitution where qualification was acquired]
										<br>
										<!-- About-Me-Section-Footer-Certification-Second-Certifiaction-Years -->
										[Enter year qualification was acquired]
									</span>
									
								</div>
							</div>
							<div class="w-100 mb-5 d-block d-md-none"></div>
							<div class="col-lg-4 col-md-6">
								<h4>Experience</h4>
								<div class="skill-info">
									<span>
										<!-- About-Me-Section-Footer-Experience-First-Job-Name -->
										[Enter title/position held]
										<br>
										<!-- About-Me-Section-Footer-Certification-First-Job-Organization -->
										[Enter name of company]
										<br>
										<!-- About-Me-Section-Footer-Certification-First-Job-Years -->
										[Enter years worked eg. 2000 - 2007]
									</span>
									<span>
										<!-- About-Me-Section-Footer-Experience-Second-Job-Name -->
										[Enter title/position held]
										<br>
										<!-- About-Me-Section-Footer-Certification-Second-Job-Organization -->
										[Enter name of company]
										<br>
										<!-- About-Me-Section-Footer-Certification-Second-Job-Years -->
										[Enter years worked eg. 2000 - 2007]
									</span>
									
								</div>
							</div>
							<div class="w-100 mb-5 d-block d-lg-none clear"></div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="page-section dark border-0 p-0" style="background-color: #1C1C1C;">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap" style="padding: 80px 0">

					<div class="row col-mb-50">
						<div class="col-lg-3">
							<!-- Footer-Section-Header-Name -->
							<div class="footer-logo"><span class="fw-normal color ls-1" style="font-size: 22px; ">[Enter name]</span>
							<br>
							<!-- Footer-Section-Header-Job title/Resume -->
							<small class="ls-3 text-uppercase" style="color: rgba(255,255,255,0.2);">[Enter title]</small></div>
						</div>

						<div class="col-lg-9">

							<div class="row col-mb-50">

								<div class="col-sm-6 col-md-4">
									<div class="widget">
										<h4>Socials</h4>
										<div class="d-flex">
											<!-- Footer-Section-Socials-LinkedIn -->
											<a href="[enter linkedin link]" class="social-icon si-small bg-white bg-opacity-25 h-bg-linkedin">
												<i class="fa-brands fa-linkedin"></i>
												<i class="fa-brands fa-linkedin"></i>
											</a>
											<!-- Footer-Section-Socials-Twitter -->
											<a href="[enter twitter link]" class="social-icon si-small bg-white bg-opacity-25 h-bg-twitter">
												<i class="fa-brands fa-twitter"></i>
												<i class="fa-brands fa-twitter"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background-color: #111;">
				<div class="container">

					<div class="w-100 text-center">
						<p class="mb-3">Copyrights &copy; 2023 All Rights Reserved.</p>
						
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="jqueryA.js"></script>
	<script src="functionsA.js"></script>

	<script>
		jQuery(window).scroll(function() {
			var pixs = jQuery(window).scrollTop(),
				opacity = pixs / 650,
				element = jQuery( '.blurred-img' ),
				elementHeight = element.outerHeight(),
				elementNextHeight = jQuery('.content-wrap').find('.page-section').first().outerHeight();
			if( ( elementHeight + elementNextHeight + 50 ) > pixs ) {
				element.addClass('blurred-image-visible');
				element.css({ 'opacity': opacity });
			} else {
				element.removeClass('blurred-image-visible');
			}
		});
	</script>

</body>
</html>
