
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
    <link href="style.css" rel="stylesheet">

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
        .mu-hero-left img{
            width: 300px;
    height: 50%;
    object-fit: contain;
    user-select: none;
    margin-top: -55px;

        }
    </style>
</head>

<body>


    <!-- Start Header -->
    <?php include("navbar.php"); ?>
    <!-- End Header -->

    <!-- Start Featured Slider -->

    <section id="mu-hero">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-sm-push-0">
                    
                <?php
                                       include("connection.php");
                                       $i = 1;
                                       $data = mysqli_query($con,"SELECT books.status,books.id,books.name,books.description,books.publish_date,books.created_at,author.name as author_name, books_category.name as books_category_name
                                       FROM books INNER JOIN author
                                       on books.author_id = author.id
                                       INNER JOIN books_category
                                       on books.books_category_id = books_category.id where books.id= ".$_GET["id"]." ");
                                       if($user_data = mysqli_fetch_array($data)){
                                       ?>
                    <div class="mu-hero-left">
                        <a href="Admin/images/book_img/<?php echo $user_data['id']?>.jpeg" download="Admin/images/book_img/<?php echo $user_data['id']?>.jpeg">
                    <img src="Admin/images/book_img/<?php echo $user_data['id']?>.jpeg" alt="" >
                    </a>
                    </div>

                </div>
                &nbsp;&nbsp;
                <div class="left-column">

      <!-- Product Description -->
      <div class="product-description">
        <h2 style="font-size:2.1em; margin-left:400px; margin-top:-80px; font-family:Times New Roman;"><u><?php echo $user_data["name"] ?></u></h2>
        <br><br>
<h3 style="margin-left:400px; font-family:Cursive;"><u>
    <?php echo $user_data['author_name']?></u></h3>
        <br><br>
        <p style="margin-left:400px; font-family:Tahoma, Verdana, sans-serif; color: brown;"><?php echo $user_data['description']?></p>
      
        <span style='color:black; font-size:2em; font-family: "Times New Roman", Times, serif; text-decoration:line-through'>
  <span style='color:black'>-60% oFF</span>
</span>
  <br>
      <h5 style="font-size:2.1em;">𝘾𝙖𝙩𝙚𝙜𝙤𝙧𝙮:</h5> 
      <h5 style="margin-left:560px; margin-top:-45px;font-size:2em; font-family:Serif;">
    <?php echo $user_data['books_category_name']?></h5>
    <br><br><br><br>


    <?php if(isset($_SESSION["customer_id"])){ ?>
    <a href="order.php?id=<?php echo $user_data['id'] ?>"><button style="margin-top:-100px; font-size:1.3em;background-color:black; color:white;"  class="btn" ><b>Order</b></button></a>
       <?php } ?>
    
    </div>
     
      
  </main>



                    </div>
                </div>

    </section>

    <!-- Start Featured Slider -->
    <?php } ?>
    <!-- Start main content -->

   

        <!-- Start Counter -->
     



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
        <script type="text/javascript" src="assets/js/counter.js"></script>
        <!-- Ajax contact form  -->
        <script type="text/javascript" src="assets/js/app.js"></script>



        <!-- Custom js -->
        <script type="text/javascript" src="assets/js/custom.js"></script>


</body>

</html>