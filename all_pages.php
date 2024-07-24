<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-BOOK : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico" />
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="all_pages.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .pic:hover{
			background-color: Olive;
			box-shadow: 10px 10px grey;
			width: 200px;
			transition: 0.5s;
            border: 10px solid black;
		}
        
    </style>
</head>

<body>


	<!-- Start Header -->
	<header id="mu-header" class="" role="banner" style=" color: black ;">
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
    <!-- Start Featured Slider -->

    <section id="mu-book-overview" style="background-color: bisque;">
			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">ALL BOOKS</h2>
								<span class="mu-header-dot"></span>
								<p>Find and read more books you'll love, and keep track of the books you want to read.
									Be part of the world's largest community of book lovers on Goodreads.</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">
								<?php
                                       include("connection.php");
                                       $i = 1;
                                       $data = mysqli_query($con,"SELECT books.status,books.id,books.name,books.description,books.publish_date,books.created_at,author.name as author_name, books_category.name as books_category_name
                                       FROM books INNER JOIN author
                                       on books.author_id = author.id
                                       INNER JOIN books_category
                                       on books.books_category_id = books_category.id ");
                                       while($user_data = mysqli_fetch_array($data)){
                                       ?>

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<a href="page1.php?id=<?php echo $user_data["id"] ?>">
											<img class="pic" style="height: 300px;" src="Admin/images/book_img/<?php echo $user_data['id']?>.jpeg" class="img-thumbnail" alt="...">
                                            <br><br>
                                            <h4><?php echo $user_data["name"]; ?></h4>

                                        </a>
											
										</div>
       						</div>
									<!-- / Book Overview Single Content -->
<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
    <!-- Start Featured Slider -->

    <!-- Start main content -->

   

        <!-- Start Counter -->
      
        <!-- End Counter -->



        <!-- Start footer -->
        <footer id="mu-footer" role="contentinfo">
            <div class="container">
                <div class="mu-footer-area">
                    <div class="mu-social-media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="index.php"><b>E-Book</b></a>. All
                        right reserved.</p>
                </div>
            </div>

        </footer>
        <!-- End footer -->
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  <script src="script.js" charset="utf-8"></script>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Slick slider -->
        <script type="text/javascript" src="assets/js/slick.min.js"></script>
        <!-- Counter js -->
        <!-- Ajax contact form  -->
        <script type="text/javascript" src="assets/js/app.js"></script>



        <!-- Custom js -->
        <script type="text/javascript" src="assets/js/custom.js"></script>


</body>

</html>