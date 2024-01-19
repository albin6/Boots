<?php 
ob_start();
include './db.php';
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Boots Manager
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
					<h6 class="sub-title">User Registration</h6>
					<h3 class="hny-title">Get In touch With Us</h3>
				</div>
				<div class="row align-form-map">
					<div class="col-lg-6 form-inner-cont">
						<form action="" method="post" class="">
							<div class="form-input">
								<label for="w3lName">Name*</label>
								<input type="text" name="Name" id="bnme"  placeholder="Enter Name [Eg: Sruthi]" required onchange="Validate();" />
								<span id="msg1" style="color:red;"></span>
			<script>
				function Validate() {
					var val = document.getElementById('bnme').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg1').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('bnme').value = "";
						return false;
					}
					document.getElementById('msg1').innerHTML = " ";
					return true;
				}
			</script>
                                                        </div>
							<div class="form-input">
								<label for="w3lSender">Email*</label>
								<input type="email" name="email" id="email" title="E-Mail" class="form-control" placeholder="E-Mail [Eg: xyz@gmail.com]" required onchange="return Validata();">
							<span id="msg5" style="color:red;"></span>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg5').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}

		</script>
                                                        </div>
	<div class="form-input">
								<label for="w3lSender">Phone No*</label>
								<input type="text" name="phn" id="cnumber" onchange="validate_card()"   maxlength="10"  class="form-control" title="Phone Number" placeholder="Phone Number" required >
				
 <script>
                                            function validate_card()
                                            {
                                            var val=document.getElementById('cnumber').value;
                                            if(val.length<10)
                                            {
                                            alert('Must Enter 10 digit');
                                            }
                                            else if(val.length>10)
                                            {
                                            alert('Must Enter 10 digit');
                                            }
                                            }
                                        </script>			
        </div>
							<div class="form-input">
								<label for="w3lMessage">Address*</label>
								<textarea placeholder="" name="address" id="w3lMessage" required=""></textarea>
							</div>
						<div class="form-input">
								<label for="w3lName">Password*</label>
								<input type="password" name="pwd" id="pwd" class="form-control" title="Password" placeholder="Password" required onchange="return Validp();">
                                                                	<span id="msg6" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg6').innerHTML="Password should contain atleast 6 characters";
		
		     document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
			
                                                        </div>
							<button type="submit" name="subreg" class="btn btn-contact">Submit</button>

						</form>
                                            <?php 
                                            if(isset($_POST['subreg']))
                                            {
                                                $name=$_POST['Name'];
                                                $email=$_POST['email'];
                                                $phn=$_POST['phn'];
                                                $address=$_POST['address'];
                                                $pwd=$_POST['pwd'];
												$qr = mysqli_query($con,"select * from login where Username='$email'");
												$ar = mysqli_num_rows($qr);
												if ($ar == 0){
                                               $qv1=  mysqli_query($con, "insert into registration(Name,Address,Email,Mobile,Password) values('$name','$address','$email','$phn','$pwd')");
                                               $qv2=  mysqli_query($con, "insert into login(Username,Password,Usertype,Status) values('$email','$pwd','User','Pending')");
                                               echo '<script>alert("Successfully registered...after admin appruval you can enter into website...");</script>';
												}
												else{
													echo '<script>alert("Email already exist...!");</script>';
												}   
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