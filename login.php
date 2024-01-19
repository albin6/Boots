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
					<h6 class="sub-title">Login</h6>
					<h3 class="hny-title">Get In touch With Us</h3>
				</div>
				<div class="row align-form-map">
					<div class="col-lg-6 form-inner-cont">
						<form action="" method="post" class="signin-form">
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
                                                    <button type="submit"  name="submit" class="btn btn-contact">Submit</button>

						</form>
                                            <?php 
                                            if(isset($_POST['submit']))
                                            {
                                             $email=$_POST['email'];
                                             $pwd=$_POST['pwd'];
                                             $qry=  mysqli_query($con, "select *from login where Username='$email' and Password='$pwd' and Status='Approve'");
                                             $n1=  mysqli_num_rows($qry);
                                             if($n1<1)
                                             {
                                                 echo '<script>alert("After Approval You can enter into our site");
                                                     window.location.href="login.php";</script>';
                                                 
                                             }
                                             else
                                             {
                                                 $row=  mysqli_fetch_array($qry);
                                                 if($row['Usertype']=='admin')
                                                 {
                                                     $_SESSION['admin']=$row;
                                                     header("location:admin/home.php");
                                                 }
                                                 else if($row['Usertype']=='User')
                                                 {
                                                      $_SESSION['user']=$row;
                                                     header("location:index.php");
                                                 }
                                                   else if($row['Usertype']=='Staff')
                                                 {
                                                      $_SESSION['admin']=$row;
                                                     header("location:staff/home.php");
                                                 }
                                               
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