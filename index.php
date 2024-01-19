<?php 
ob_start();
include 'db.php';
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Boots
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
	<!--w3l-header-->
<?php 
        include './header.php';
?>
	<!-- //w3l-header -->
	<!--banner-slider-->
	<!-- main-slider -->
	<section class="w3l-main-slider" id="home">
		<div class="banner-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
                                            <div class="slider-info banner-view bg bg2" style="background-image: url('assets/images/banner1.avif');" >
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Care for Leg</h6>
										<h5>Experience, trust and proven success
										</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
                                            <div class="slider-info  banner-view banner-top1 bg bg2" style="background-image: url('assets/images/banner2.avif');">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Care for your smile</h6>
										<h5>Get all the essential
											dental care today</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2" style="background-image: url('assets/images/banner3.avif');">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Dental care for life</h6>
										<h5>Experience, trust and proven success
										</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2" style="background-image: url('assets/images/banner4.avif');">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Care for your smile </h6>
										<h5>Get all the essential
											dental care today</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		
		</div>

	</section>
	<!-- /main-slider -->
	<!-- //banner-slider-->
	<!-- /content-6-->
	<section class="w3l-content-6">
		<!-- /content-6-main-->
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="title-content text-left mb-4">
					<h6 class="sub-title">About Us</h6>
					<h3 class="hny-title">Welcome to our Boots Shop</h3>
				</div>
				<div class="content-info-in row">
					<div class="content-gd col-lg-6 pl-lg-4">
                                            <p style="text-align: justify;">Boots Shop is an integrated supply chain solution for dental and medical supplies in India.Dental Production also provides S-based intuitive materials management software to enhance the supply chain management capabilities.</p>
					</div>
					<div class="content-gd col-lg-6 pl-lg-4 pl-lg-4">
						<p style="text-align: justify;">Boots Shop brings in hundreds of manufacturers and tens of thousands of health care institutions into a single e-commerce platform, thereby creating the go-to platform for reliable discovery of better quality products and their best prices. 
                                                </p>
					</div>

				</div>
		</div>
	</section>
	<!-- //content-6-->
	<!-- services block3 -->
	<div class="w3l-open-block-services py-5">
		<div class="container py-lg-5 pt-4">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="card text-center">
						<div class="icon-holder">
							<span class="fa fa-signal service-icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Number 1 Brand</h4>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-md-0 mt-5 pt-md-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<span class="fa fa-assistive-listening-systems service-icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Passion for Perfection</h4>
					
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 pt-lg-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<span class="fa fa-diamond service-icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission"> Empowerment</h4>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 pt-lg-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<span class="fa fa-magic service-icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Constant Innovation</h4>
						
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 
include './footer.php';
?>
	<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //testimonials owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
<!-- //script for Testimonials-->
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>
<?php 
ob_flush();
?>