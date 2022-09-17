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
      <div class="slider slider-for main_img-container"><br><br><br><br><br>
        <div class="main-img-box b3">
        
        </div>
      </div>
    </div>  
    <!-- header section strats -->
    <?php include_once('includes/header.php');?>
</div>
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="brand_box">
              
                <img src="images/logo.png" alt="" style="width:150px" />
              
            </div>
          </div>
          <div class="col-md-8 px-0">
            <div class="slider_content ">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                               
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="detail_box">
                      <h1 style="color:rgb(91, 12, 40);text-shadow: 2px 2px 5px rgb(250, 36, 157); font-family: Georgia, sans-serif; font-size: 70px">MEMORY CLICKS</h1> 
                    </h1> 
                      <p>
                        We are here to capture your special moments...<br/>
                        Change your lens, Change your story...
                      </p>
                      
                    </div>
                  </div>
                  
                  
                </div>
                
              </div>

              <div class="img_container">
                <div class="slider slider-nav slick_slider-nav">
                  <div class="img-box">
                    <img src="images/img-1.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/img-2.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/img-3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- info section -->
  <?php include_once('includes/special.php');?>

  <!-- footer section -->
  <?php include_once('includes/footer.php');?>


</body>

</html>