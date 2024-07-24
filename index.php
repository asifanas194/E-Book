<?php 

session_start();

?><!DOCTYPE html>
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
	<link href="style.css" rel="stylesheet">

	<!-- Fonts -->

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
.btn {
  display: flex;
  width: 100%;
  border: 5px;
  display: inline-block;

  border-radius: 20px;
  background-color: orange;
  color: white;
  padding: 14px 28px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  transition: 0.5s;

}

.btn:hover {
  background-color: orange;
  color: black;
  font-weight: bolder;
  font-size: 2em;

}
</style>
</head>

<body>


<?php include("navbar.php"); ?>

	<!-- Start Featured Slider -->

	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img  src="assets/images/ebook.png" alt="Ebook img">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>The More That You Read, The More Things You Will Know.</h1>
						<p>I have no idea what I’d do with myself if there were no books to read – they’re an essential
							part of work and play for me, and without them, I’d probably be a very different person.</p>
							<a href="#mu-author" class="mu-primary-btn">READ MORE!</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Start Featured Slider -->

	<!-- Start main content -->

	<main role="main" >

		<!-- Start Counter -->
		<section id="mu-counter" style="background-color: bisque;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-files-o" aria-hidden="true" style="background-color: grey;"></i>
											<div class="counter-value" data-count="100">0</div>
											<h5 class="mu-counter-name">Total Books</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true" style="background-color: grey;"></i>
											<div class="counter-value" data-count="400">0</div>
											<h5 class="mu-counter-name">Chapters</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true" style="background-color: grey;"></i>
											<div class="counter-value" data-count="50">0</div>
											<h5 class="mu-counter-name">Active Readers</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-trophy" aria-hidden="true" style="background-color: grey;"></i>
											<div class="counter-value" data-count="03">0</div>
											<h5 class="mu-counter-name">Got Awards</h5>
										</div>
									</div>
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->

		<!-- Start Book Overview -->
		<section id="mu-book-overview" style="background-color: bisque;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">꧁𓊈𒆜 𝘽𝙤𝙤𝙠 𝙊𝙫𝙚𝙧𝙫𝙞𝙚𝙬 𒆜𓊉꧂</h2>
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
                                       on books.books_category_id = books_category.id limit 4;");
                                       while($user_data = mysqli_fetch_array($data)){
                                       ?>

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6" >
										<div class="mu-book-overview-single">
											<a href="page1.php?id=<?php echo $user_data["id"] ?>">
											<img class="pic" style="height: 300px;" src="Admin/images/book_img/<?php echo $user_data['id']?>.jpeg" class="img-thumbnail" alt="...">
											<br><br>
											<h4 ><?php echo $user_data["name"]; ?>	
										</a>
											<br><br>
											
										
										</h4>
										</div>
									</div>
									<!-- / Book Overview Single Content -->
<?php } ?>
									
									<a href="all_pages.php">
									<div class="d-grid">
										<button type="button" class="btn">SEE MORE</button>
									</div>
									</a>

									<!-- / Book Overview Single Content -->

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->



		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Check Out Our Video Review</h2>
								<span class="mu-header-dot"></span>
								<p>Learn everything you need to know to effectively review videos and give fantastic feedback.</p>
							</div>

							<!-- Start Video Review Content -->
							<div class="mu-video-review-content">
								<iframe class="mu-video-iframe" width="100%" height="480"
									src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0"
									allowfullscreen></iframe>
							</div>
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->

		<!-- Start Author -->
		<section id="mu-author" style="background-color: bisque;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">ıllıllı⭐🌟 A͙b͙o͙u͙t͙ 🌟⭐ıllıllı</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Author Content -->
							<div class="mu-author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-author-image">
											<img src="assets/images/anas.jpg" alt="Author Image">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mu-author-info">
											<h3>Anas Asif</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo suscipit
												facilis ipsum ullam reiciendis odio error iste neque ratione libero rem
												accusamus voluptatibus, nihil unde maiores sunt nisi. Assumenda,
												consectetur.</p>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate,
												dolorem error neque! Dolores similique ut iusto odit esse ipsam,
												nesciunt pariatur animi minima maiores mollitia cupiditate ad ipsum
												deleniti perspiciatis!</p>
											<img class="mu-author-sign" src="assets/images/capture.png"
												alt="Author Signature">

											<div class="mu-author-social">
												<a href="https://www.facebook.com/Anasasif12345/"><i class="fa fa-facebook"></i></a>
												<a href="https://twitter.com/Anshubaba003"><i class="fa fa-twitter"></i></a>
												<a href="https://www.linkedin.com/in/anas-asif-50137024a/"><i class="fa fa-linkedin"></i></a>
												<a href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Author -->

		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Our Pricing Plans</h2>
								<span class="mu-header-dot"></span>
								<p>Therefore, the best price for an ebook is between $2.99 and $9.99-in that range, you're eligible for the highest royalty percentage of 70%.
</p>
							</div>

							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
								<div class="row">

									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single">

											<div class="mu-pricing-single-head">
												<h4>STANDARD PLAN</h4>
												<p class="mu-price-tag">
													<span>$</span> 15
												</p>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
											</ul>

											

										</div>
									</div>
									<!-- / Pricing Single Content -->

									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single mu-popular-price-tag">


											<div class="mu-pricing-single-head">
												<h4>PROFESSIONAL PLAN</h4>
												<p class="mu-price-tag">
													<span>$</span> 25
												</p>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
											</ul>

											


										</div>
									</div>
									<!-- / Pricing Single Content -->

									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single">


											<div class="mu-pricing-single-head">
												<h4>EXCLUSIVE PLAN</h4>
												<p class="mu-price-tag">
													<span>$</span> 45
												</p>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
											</ul>

											
										</div>
									</div>
									<!-- / Pricing Single Content -->


								</div>
							</div>
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

		<!-- Start Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">What Our Readers Says</h2>
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<p>"Redeemed Reader is the site I recommend most often to other parents or educators for great book reviews and articles."</p>
										<img class="mu-rt-img" src="assets/images/reader-1.jpg" alt="img">
										<h5 class="mu-rt-name"> - Anas Asif</h5>
										<span class="mu-rt-title">CEO, Apple Inc.</span>
									</li>

									<li>
										<p>"Redeemed Reader is the site I recommend most often to other parents or educators for great book reviews and articles."</p>
										<img class="mu-rt-img" src="assets/images/reader-2.jpg" alt="img">
										<h5 class="mu-rt-name"> - Ubaid-ul-Rehman</h5>
										<span class="mu-rt-title">Director, Google Inc.</span>
									</li>

									<li>
										<p>"Redeemed Reader is the site I recommend most often to other parents or educators for great book reviews and articles.</p>
										<img class="mu-rt-img" src="assets/images/reader-3.jpg" alt="img">
										<h5 class="mu-rt-name"> - Harron</h5>
										<span class="mu-rt-title">Web Developer</span>
									</li>

									<li>
										<p>"Redeemed Reader is the site I recommend most often to other parents or educators for great book reviews and articles.</p>
										<img class="mu-rt-img" src="assets/images/reader-3.jpg" alt="img">
										<h5 class="mu-rt-name"> - Inzamam</h5>
										<span class="mu-rt-title">Web Developer</span>
									</li>

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials -->


		<!-- Start Contact -->
		<section id="mu-contact" style="background-color: bisque;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Drop Us A Message</h2>
								
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">

								<div id="form-messages"></div>
								<form  method="post" class="mu-contact-form">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" id="name" name="name"
											required>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter Email" id="email"
											name="email" required>
									</div>
									<div class="form-group">
										<textarea class="form-control" placeholder="Message" id="message" name="message"
											required></textarea>
									</div>
									<button type="submit" name="btn" class="mu-send-msg-btn"><span>SUBMIT</span></button>
								</form>

							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->


		<?php

include("connection.php");

if(isset($_POST["btn"])){
    mysqli_query($con,"insert into contact(name,email,message) values ('".$_POST["name"]."' ,'".$_POST["email"]."','".$_POST["message"]."')  ");
    echo "<script>alert('Form Submitted')</script>";
}


?>
<div style="background-color: bisque;">
		<!-- Start Google Map -->
		<div class="container" >
			<section id="mu-google-map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589888.4396405783!2d-82.41588603632052!3d32.866951223053896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f9f727a4ed30eb%3A0xf2139b0c5c7ae1ec!2sDooley+Branch+Rd%2C+Millen%2C+GA+30442%2C+USA!5e0!3m2!1sen!2sbd!4v1497376364225"
					width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>
		</div>
		<!-- End Google Map -->
		</div>
	</main>

	<!-- End main content -->


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



	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<!-- Counter js -->
	<script type="text/javascript" src="assets/js/counter.js"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="assets/js/app.js"></script>



	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>


</body>

</html>