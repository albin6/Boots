<?php 
ob_start();
include '../db.php';
$cat=$_GET['id'];
$qss=  mysqli_query($con, "select *from products where Id='$cat'");
$r5=  mysqli_fetch_array($qss);
?>
<!DOCTYPE HTML>
<head>
<title>Boots</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
  <div class="wrap">
	
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> >>>> <a href="#"><?php echo $r5['Category'];?></a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
                                                                    <a href="../admin/<?php echo $r5['Image'];?>" target="_blank"><img src="../admin/<?php echo $r5['Image'];?>" alt=" " /></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $r5['Name'];?></h2>
					<div class="price">
						<p>Price: <span>Rs.<?php echo $r5['Price'];?>/-</span></p>
					</div>
					
				<div class="share-desc">
					
                                    <div class="button"><span><a href="payment.php?id=<?php echo $r5['Id'];?>">Check Out</a></span></div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<!-- <ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#">Add to Compare</a></li>
				 	</ul> -->
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Details</li>
					<li>product Features</li>
					<li>Product Price</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p><?php echo $r5['Des'];?></p>
                                        </div>	
				 <div class="product-tags">
						 <p><?php echo $r5['Features'];?></p>
					
<!--					<div class="button"><span><a href="#">Add Tags</a></span></div>-->
			    </div>	

				<div class="review">
					<h4>Product <a href="#">Price</a></h4>
					 <ul>
					 	<li>Price :<a href="#"><?php echo $r5['Price'];?></a></li>
					  </ul>
							
				</div>
			</div>
		 </div>
	 </div>
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		

  
        </div>
				
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

