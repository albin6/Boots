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
	<title>Boot
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
					<h3 class="hny-title">My Orders</h3>
				</div>
				<div class="row align-form-map">
					<div class="col-lg-12 form-inner-cont">
                                            <table class="table-striped" border="1">
						<thead>
						  <tr>
							<th>Sl.No</th>
							
                                                        <th>
                                                            Product
                                                        </th>
                                                        <th>Price</th>
                                                          <th>Quantity</th>
                                                            <th>Total</th>
							<th>Card No</th>
                                                        <th>Expiry date</th>
                                                     <th>Status</th>
                                                        
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                  $qr="select  * from payment where Uid='$uname' order by Id desc";
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                      $Pid=$r['Pid'];
                                                      $qpro=  mysqli_query($con, "select *from products where Id='$Pid'");
                                                      $r1=  mysqli_fetch_array($qpro);
                                                      $product=$r1['Name'];
                                                  ?>
                                                    <tr>
                                                          <form name="f1" method="post" action="">
                                                        <td><?php echo $i;?></td>
                                                        
                                                        <td><?php echo $product;?></td>
                                                          <td><?php echo $r['Price'];?></td>
                                                       <td><?php echo $r['Quatity'];?></td>
                                                       <td><?php echo $r['Total'];?></td>
                                                    <td><?php echo $r['Cardno'];?></td>
                                                    <td><?php echo $r['Expirydate'];?></td>
                                                    <td><?php echo $r['Status'];?></td>
                                                         </form>  
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
                                                   }
                                                    ?>
						
               
                
                                              </tbody>  
                                                
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