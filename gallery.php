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


  <!-- portfolio section -->
  <section class="portfolio_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2 style="color:#36013F">
          Our Gallery
        </h2>
        <p>
          -Our Gallery includes three Main Packages-</p>
          <dl><br>
            <h4 style="color:#49222c"><b>Wedding & Engagement</b></h4>
            <dd>- With our wedding and engagement packages, you can make your dream day memorable at a reasonable price. Below you can see how to make your dream day memorable with our team.</dd>
          </dl>
			<div class="row">
			  <div class="column">
				<img src="images/Wa-1.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Wa-2.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Wa-6.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Wa-3.jpg" alt="" width="400" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Wa-4.jpg" alt="" width="400" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Wa-5.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Wa-7.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			</div>
			<br><br>
          <dl>
            <h4 style="color:#49222c"><b>Birthday Function</b></h4>
            <dd>- With us, your birthday will become an unforgettable milestone in your life. We provide evidence to back this up below.</dd>
        </dl>
        <div class="row">
			  <div class="column">
				<img src="images/Ba-1.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ba-2.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ba-3.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ba-4.jpg" alt="" width="400" height="300">&nbsp;
			  </div>
		</div>
		<br><br>
		<dl>
            <h4 style="color:#49222c"><b>Normal Function & Fashion Shoot</b></h4>
            <dd>- We cover everything from pre-shoots to bridal parties, family gatherings, and other events. You can also collaborate with us to create your fashion shoot.</dd>
        </dl>
		<div class="row">
			  <div class="column">
				<img src="images/Fs-1.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Fs-2.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Fs-3.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ea-6.jpg" alt="" width="400" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ea-5.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ea-1.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ea-2.jpg" alt="" width="250" height="300">&nbsp;
			  </div>
			  <div class="column">
				<img src="images/Ea-3.jpg" alt="" width="400" height="300">&nbsp;
			  </div>
			  
			</div>
			<br><br>
     
      </div>
    </div>
  </section>

  <!-- info section -->
  <?php include_once('includes/special.php');?>


  <!-- footer section -->
  <?php include_once('includes/footer.php');?>

</body>

</html>