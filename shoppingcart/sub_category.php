<?php 
ob_start();
include '../db.php';
$cat=$_GET['cat'];
$qd=  mysqli_query($con, "select *from subcategory where Category='$cat'");

?>
<!DOCTYPE HTML>
<head>
<title>Dental Prodicuts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#posts").accordion({ 
			header: "div.tab", 
			alwaysOpen: false,
			autoheight: false
		});
	});
</script>
</head>
<body>
  <div class="wrap">
<div class="header">
		
		<div class="header_top">
			
			
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
                                        <?php 
                                        $qas=  mysqli_query($con, "select *from category");
                                        while ($r1=  mysqli_fetch_array($qas))
                                        {
                                        ?>
                                        <li><a href="sub_category.php?cat=<?php echo $r1['Category'];?>"><?php echo $r1['Category'];?></a></li>
				   <?php 
                                        }
                                   ?>
                                  </ul>
				</div>					
	  	     </div>
				
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="section group">
            <?php 
          while ($r2=  mysqli_fetch_array($qd))
          {
            ?>
				<div class="grid_1_of_4 images_1_of_4">
                                    <a href="index.php?id=<?php echo $r2['Id'];?>" class="btn btn-success"><?php echo $r2['Subcategory'];?></a>
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

