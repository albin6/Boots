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
					<h3 class="hny-title">Feedback</h3>
				</div>
				<div class="row align-form-map">
					<div class="col-lg-6 form-inner-cont">
                                           <form action="" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">
			
				
				<div class="wrap-input100 validate-input">
					<textarea class="input100" name="message" placeholder="Write Us A Message" style="height: 200px;width: 300px;" required></textarea>
					<span class="focus-input100"></span>
				</div>
<head>
</center>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: auto;
  cursor: pointer;
}
.button2 {padding: 12px 28px;}
</style>
</head>
<button class="button button3" type="submit" name="submit">Send</button>
				
			</form>
                                            <?php 
                                            if(isset($_POST["submit"]))
{
	

	$f=$_POST['message'];
	
	$sql="INSERT INTO feedback(Email,Message) values ('$uname','$f') ";

	$res=mysqli_query($con,$sql);
	header("Location:feedback.php");
}
                                            ?>
                                            
					</div>
						<div class="col-lg-6 form-inner-cont">
                                                    <table class="table-secondary" border="1">
                                                        <tr>
                                                            <th>Sl.No</th>
                                                            <th>Message</th>
                                                           
                                                        </tr>
                                                        <?php 
                                                        $i=1;
                                                        $qcom=  mysqli_query($con, "select *from feedback where Email='$uname'");
                                                        while($rco=  mysqli_fetch_array($qcom))
                                                        {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $rco['Message'];?></td>
                                                           
                                                        </tr>
                                                        <?php 
                                                        $i++;
                                                        }
                                                        
                                                        ?>
                                                    </table>
                                           
					</div>
				</div>
			</div>
	</section>
	<!-- //contact-form -->
<?php 
include './footer.php';
?>
        
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
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php 
ob_flush();
?>