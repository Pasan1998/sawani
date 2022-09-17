<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Memory Click</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:400,600,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page"> 
  <div class="hero_area">

    <div class="main slick_main">
    </div>
    <!-- header section strats -->
    <?php include_once('includes/header.php');?>
  </div>


  <!-- packages section -->

  <section class="packages_section layout_padding-top">

    <div class="container">
      <div class="heading_container">
        <h2 style="color:#36013F">
          Our packages
        </h2>
        <p>
          -There are many packages we have-
        </p>
      </div><br><br>
      
      <div class="row">
			  <div class="column">
				<img src="images/pckg.jpg" alt="" width="1200" height="150"> <br><br><br>
        </div>
        <div class="column">
				<div class="box">
          <img src="images/wedding.jpg" alt="" width="370" height="300"> &nbsp; &nbsp; &nbsp;&nbsp;
          <div class="link-box">
            <a href="wedding.php">
              <img src="images/link.png" alt="">
            </a>
            <h6>
            <a href="wedding.php">Wedding Shoot</a> 
            </h6>
          </div>
        </div>
			  </div>
			  <div class="column">
				<div class="box">
          <img src="images/birthday 2.jpg" alt="" width="370" height="300"> &nbsp; &nbsp; &nbsp;&nbsp;
          <div class="link-box">
            <a href="birthday.php">
              <img src="images/link.png" alt="">
            </a>
            <h6>
            <a href="birthday.php">Birthday Package</a>
            </h6>
          </div>
        </div>
			  </div>
			  <div class="column">
				<div class="box">
          <img src="images/other 2.jpg" alt="" width="370" height="300">
          <div class="link-box">
            <a href="other.php">
              <img src="images/link.png" alt="">
            </a>
            <h6>
            <a href="other.php">Fashion Shoot & Normal Functions</a>
            </h6>
          </div>
        </div>
			  </div>
		      
        
      </div>
  </section><br><br>

  <!-- info section -->
  <?php include_once('includes/special.php');?>


  <!-- footer section -->
  <?php include_once('includes/footer.php');?>

</body>

</html>