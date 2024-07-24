
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
    <link href="psge.css" rel="stylesheet">
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
        .block {
            display: block;
            width: 100%;
            border: none;
            background-color: orange;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block:hover {
            background-color: #ddd;
            color: black;
        }
        
        .button {
    margin-right: -1100px;
    margin-left: -250px;
    margin-top: 1px;
    padding: 15px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #000;
    background-color: orange;
    border: none;
    border-radius: 30px;
    box-shadow: 0 8px #999;
}

.button:hover {
    background-color: black;
    color: white;
}

.button:active {
  background-color: black;
  box-shadow: 0 5px #666;
  transform: translateY(5px);
}
.checked{
    color: orange;
}

    </style>
</head>

<body>

<?php include("navbar.php"); ?>

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



                <div class="product">
    <div class="product-img">
        <img src="Admin/images/book_img/<?php echo $user_data['id']?>.jpeg" alt="" >
        
               <span class="tag">New</span>

                        
    </div>
    <div class="product-listing">
<h1 style="font-size: 2.2em;
    color: #808080;
    font-family: Times New Roman , Times, serif;"><u><?php echo $user_data["name"] ?></u></h1>
<br><br>

<div>
    <h5 style="font-size: 1.5em;
    font-family: Gill Sans Extrabold, sans-serif;
    color: black;
    transform: translateY(50px);
    margin-right: -510px;
    margin-left: -215px;
    margin-top:30px;"><u>
    <?php echo $user_data['author_name']?></u></h5>
    <br><br><br><br>



    <p style="font-size: 1em; 
    color: white; transform: 
    translateY(50px);
    margin-right: -400px;
    margin-left: -360px;
    margin-top: -70px;">
    <?php echo $user_data['description']?></p>
  
<br><br>

<h5 style="font-size: 1.5em;
    font-family: Gill Sans Extrabold, sans-serif;
    color: black;
    transform: translateY(50px);
    margin-right: -510px;
    margin-left: -215px;
    margin-top:30px;"><u>
    <?php echo $user_data['books_category_name']?></u></h5>
    <br><br><br><br>


    <?php if(isset($_SESSION["customer_id"])){ ?>
    <a href="order.php"><button class="btn" 
    style="    margin-left: -215px;
    color:black;
    background-color:orange;
    font-size:1.5em;">Order</button></a>
       <?php } ?>
    </div>
    <div>   
    </div>
    </div>
    </div>
    </section>

    <!-- Start Featured Slider -->

    <!-- Start main content -->

 
        <!-- Start Counter -->
      
        <!-- End Counter -->

<?php } ?>

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