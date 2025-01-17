	<!-- Start Header -->
	<header id="mu-header" class="" role="banner" >
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Text Logo -->
						<a class="navbar-brand" href="index.php"><i class="fa fa-book"  aria-hidden="true"></i>
							E-Book</a>

						<!-- Image Logo -->
						<!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav mu-menu navbar-right">
							<li><a href="index.php">HOME</a></li>
							<li><a href="#mu-book-overview">OVERVIEW</a></li>
							<li><a href="#mu-author">AUTHOR</a></li>
							<li><a href="#mu-pricing">PRICE</a></li>
							<li><a href="#mu-testimonials">TESTIMONIALS</a></li>
							<?php if(isset($_SESSION["customer_id"])){ ?>
							<li><a href="dashboard.php">DASHBOARD</a></li>
							<?php } ?>
							<li><a href="#mu-contact">CONTACT</a></li>
                            <?php if(!isset($_SESSION["customer_id"])){ ?>
							<li> <a href="Admin/login_customer.php">LOGIN</a></li>
                          
							<li><a href="Admin/signup.php">SIGN UP</a></li>
                            <?php } else{ ?>
                                <li><a href="logout.php">Logout</a></li>
                                
                                <?php } ?>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->