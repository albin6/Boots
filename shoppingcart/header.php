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
                                        <li><a href="index.php?id=<?php echo $r1['Category'];?>"><?php echo $r1['Category'];?></a></li>
				   <?php 
                                        }
                                   ?>
                                  </ul>
				</div>					
	  	     </div>
		   <div class="clear"></div>
		</div>
   </div>