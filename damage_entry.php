<?php 
ob_start();
include './db.php';
$uname=$_SESSION['user']['Username'];
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
        <script src="assets/js/jquery-3.3.1.min.js"></script>
	<!-- Template CSS -->
      
</head>

<body>
	<!--w3l-header-->
	<?php 
        include './header.php';
?>
	
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-5">
				<div class="title-content text-left mb-lg-5 mt-4">
					<h6 class="sub-title">Accounts
                                        </h6>
					<h3 class="hny-title">Damage Entry</h3>
				</div>
				<div class="row align-form-map">
					<div class="col-lg-12 form-inner-cont">
                                         	<form action="" method="post" class="">
						
							<div class="form-input">
								<label for="w3lMessage">Damage Entry Details*</label>
								<textarea placeholder="" name="address" id="w3lMessage" required=""></textarea>
							</div>
					
							<button type="submit" name="subreg" class="btn btn-contact">Submit</button>

						</form>
                                            <?php 
                                            if(isset($_POST['subreg']))
                                            {
                                               
                                                $address=$_POST['address'];
                                               
                                               $qv1=  mysqli_query($con, "insert into damageentry(Email,Description,Reply) values('$uname','$address','Pending')");
                                               echo '<script>alert("Successfully enter damage details...");</script>';
                                                
                                            }
                                            ?>
                                            
					</div>
					
				</div>
			</div>
	</section>
	<!-- //contact-form -->
<?php 
include './footer.php';
?>
        


<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php 
ob_flush();
?>