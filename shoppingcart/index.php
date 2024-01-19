<?php 
ob_start();
include '../db.php';
?>
<!DOCTYPE HTML>
<head>
<title>Boots</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap">

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Products List</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
                 
				
				<?php 
                    if(isset($_GET['id']))
					{
$iid=$_GET['id'];
$q1="select *from products where Category='$iid'";
					}
                  else
                  {
					$q1="select *from products";
				  }
                      $qb4=  mysqli_query($con, $q1);
                      while($r4=  mysqli_fetch_array($qb4))
                      {
                      ?>
                  <div class="grid_1_of_4 images_1_of_4">
                                    <a href="checkout.php?id=<?php echo $r4['Id'];?>"><img style="height:210px;" src="../admin/<?php echo $r4['Image'];?>" alt="" /></a>
                                    <h2 style="height:8vh;"><?php echo $r4['Name'];?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs.<?php echo $r4['Price'];?>/-</span></p>
					    </div>
					       		<div class="add-cart">								
                                                            <h4><a target="_blank" href="checkout.php?id=<?php echo $r4['Id'];?>">Preview</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
                  <?php 
                      }
                  
                                ?>
			</div>
			
			
    </div>
 </div>
</div>

    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>
<?php 
ob_flush();
?>

