	<section class="w3l-top-header-content">
		<div class="hny-top-menu">
			<div class="container">
				<div class="row">
					<div class="top-left col-lg-6">
						<ul class="accounts">
							<li class="top_li"><span class="fa fa-map-o"></span> <a href="#">Konni,Pathanamthitta</a>
							</li>
							<li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span> <a
									href="#" class="mail">boots@gmail.com</a>

							</li>
						</ul>
					</div>
                                        <?php 
                                                if(isset($_SESSION['user']))
                                                {
                                                    ?>
					<div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
						<div class="top-bar-text"><a class="bk-button" target="_blank" href="shoppingcart/index.php">BOOK PRODUCT ONLINE </a> You can
							purchase products by 24 * 7</div>
					</div>
                                    <?php 
                                                }
                                                else
                                                {
                                    ?>
<div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
						<div class="top-bar-text"><a class="bk-button" href="login.php">BOOK PRODUCT ONLINE </a> You can
							purchase products by 24 * 7</div>
					</div>
                                    <?php 
                                                }
                                    ?>
				</div>
			</div>
		</div>
	</section>
	<!--//top-header-content-->
	<!--w3l-header-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<a class="navbar-brand" href="index.php"><span>Boots</span></a>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-lg-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
                                                <?php 
                                                if(isset($_SESSION['user']))
                                                {
                                                    ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link" target="_blank" href="shoppingcart/index.php">Products</a>
						</li>
                                                 <li class="nav-item">
                                                     <a class="nav-link" href="myorder.php">My Order</a>
						</li>
                                                 <li class="nav-item">
                                                     <a class="nav-link" href="complaint.php">Complaint</a>
						</li>
                                                 <li class="nav-item">
                                                     <a class="nav-link" href="feedback.php">Feedback</a>
						</li>
                                                 <li class="nav-item">
                                                     <a class="nav-link" href="damage_entry.php">Manage Damages</a>
						</li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="logout.php">Logout</a>
						</li>
                                                <?php 
                                                }
                                                else 
                                                {
                                                ?>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
                                               
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="doctor_reg.php">User</a>
						</li>
						<li class="nav-item">
                                                    <a class="nav-link" href="login.php">Login</a>
						</li>
                                                <?php 
                                                }
                                                ?>
						
						
					</ul>
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Saerch your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>

							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>