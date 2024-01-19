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
<?php 
        include './header.php';
?>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>
	
<!-- feature1 -->
<section class="w3l-feature-1">
	<div class="feature-1sec py-5">
		<div class="container py-lg-5">
			<div class="feature-1-content">
				<img src="assets/images/b4.avif" class="img-fluid" alt="" />
				<h3 class="hny-title mt-4">Welcome to Our Boots</h3>
                                <p style="text-align: justify;" class="mt-2">
                                   In the year of liberation, 1947, a lone shoe store opened its doors to the public. Metro Shoes, the brand, is now a household name in India. 
                                Over the past seven decades, the company and the brand have become synonymous with unmatched quality, skilled craftsmanship and high-fashion products in the footwear industry.
                                </p>
				
			</div>
		</div>
	</div>
</section>


	<!-- footer-66 -->
	<?php 
include './footer.php';
?>
	<!--//footer-66 -->


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
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>