
<?php
session_start();

if(!isset($_SESSION["customer_id"])){
   echo "<script>window.location.assign('login_customer.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-BOOK : ORDER</title>
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
    <link href="order.css" rel="stylesheet">

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

#mu-footer{
  background-color: #fff;
}
  .col-6{
margin-top: 200px;
  }
  label{
    font-family: cursive;
    font-weight: bolder;
  }
  .btn{
    background-color: orange;
    font-size: 1.4em;
    font-family: Georgia, 'Times New Roman', Times, serif;
  }
  .btn:hover{
    background-color: black;
    transition: 0.3s;
    color: white;
  }
  #form_login {
    left      : 50%;
    top       : 40%;
    position  : absolute;
    transform : translate(-50%, -50%);
    padding   : 25px;
}
option{
  color: black;
  font-size: 1.2em;
}
select:hover{
  background-color: grey;
  transition: 0.5s;
}

</style>
</head>

<body>

<?php include("navbar.php"); ?>

    <!-- Start Featured Slider -->
    
    <section id="mu-hero">
		<div class="container">
<img src="book.jpg" alt="" height="500px" width="1500px" style="margin-top: -50px;">
  
    <form method="POST" enctype="multipart/form-data" id="form_login">
        <div class="row" >
  <div class="col-75">
      <br>
        <div class="row">
          <div class="col-6">

            <h3 style="margin-left:150px; font-size: 2.5em;">𝘽𝙤𝙤𝙠 𝙊𝙧𝙙𝙚𝙧</h3>
            <br>
            
            <div class="container" style="border: 10px solid #000; backdrop-filter: blur(3px);  border-radius: 50px;  margin-bottom: 20px; width: 480px; height: 250px; ">
            
                     <?php
                     include("connection.php");
                     ?>
                                        

                                        <br>
<center>
                                        <label style="font-size: 1.5em;color: #000;">Book Type</label>
                                        </center>    
                                        <br>             
                                        <select name="category"  class="form-control">                                  
                                          <option value="PDF">PDF</option>
                                          <option value="Hard Copy">Hard Copy</option>                                 
                                        </select>
                                        <br>
                                       
                                        <br>
                                         <center>
                                        <button type="submit" name="btn" class="btn btn-dark" >Add Book</button>
                                        </center>
                                    </form>
                                    </div>
                                    </div>
                                    </div>
   
  </div>
  <?php

include("connection.php");

if(isset($_POST["btn"])){
    mysqli_query($con,"INSERT INTO `orders`(customers_id, `books_id`, `book_type`) VALUES (".$_SESSION["customer_id"].",'".$_GET["id"]."','".$_POST["category"]."')  ");
    echo "<script>alert('Order Placed')</script>";
    echo "<script>window.location.assign('index.php ')</script>";
}


?>

			</div>
		</div>
	</section>

<br><br>

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
        <script type="text/javascript" src="assets/js/counter.js"></script>
        <!-- Ajax contact form  -->
        <script type="text/javascript" src="assets/js/app.js"></script>



        <!-- Custom js -->
        <script type="text/javascript" src="assets/js/custom.js"></script>


</body>

</html>